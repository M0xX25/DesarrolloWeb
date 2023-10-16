from flask import Flask, jsonify, request
import pymysql

app = Flask(__name__)

# Database connection
conn = pymysql.connect(
    host='localhost',
    user='root',
    password='',
    db='payhub'
)

# Ruta para crear un usuario (CREATE)
@app.route('/usuario', methods=['POST'])
def create_usuario():
    data = request.get_json()
    nombres = data['nombres']
    apellidos = data['apellidos']
    fecha_nacimiento = data['fecha_nacimiento']
    genero = data['genero']
    cedula = data['cedula']
    telefono = data.get('telefono')
    email = data['email']
    contraseña = data['contraseña']
    saldo = 0
    
    cursor = conn.cursor()
    query = "INSERT INTO usuarios (nombres, apellidos, fecha_nacimiento, genero, cedula, telefono, email, contraseña, saldo) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)"
    cursor.execute(query, (nombres, apellidos, fecha_nacimiento, genero, cedula, telefono, email, contraseña, saldo))
    conn.commit()
    cursor.close()
    
    return jsonify({'message': 'Usuario creado exitosamente'})

# Ruta para obtener un usuario por su ID (READ)
@app.route('/usuario/<int:usuario_id>', methods=['GET'])
def get_usuario(usuario_id):
    cursor = conn.cursor()
    query = "SELECT * FROM usuarios WHERE id = %s"
    cursor.execute(query, (usuario_id,))
    result = cursor.fetchone()
    cursor.close()

    if result:
        usuario = {
            'id': result[0],
            'nombres': result[1],
            'apellidos': result[2],
            'fecha_nacimiento': str(result[3]),
            'cedula': result[5],
            'telefono': result[6],
            'email': result[7],
            'saldo': result[9]
        }
        return jsonify({'usuario': usuario})
    else:
        return jsonify({'message': 'Usuario no encontrado'})
    
# Ruta para actualizar un usuario por su ID (UPDATE)
@app.route('/usuario/<int:usuario_id>', methods=['PUT'])
def update_usuario(usuario_id):
    data = request.get_json()
    nombres = data['nombres']
    apellidos = data['apellidos']
    fecha_nacimiento = data['fecha_nacimiento']
    genero = data['genero']
    cedula = data['cedula']
    telefono = data.get('telefono')
    email = data['email']
    contraseña = data['contraseña']

    cursor = conn.cursor()
    query = "UPDATE usuarios SET nombres=%s, apellidos=%s, fecha_nacimiento=%s, genero=%s, cedula=%s, telefono=%s, email=%s, contraseña=%s WHERE id=%s"
    cursor.execute(query, (nombres, apellidos, fecha_nacimiento, genero, cedula, telefono, email, contraseña, usuario_id))
    conn.commit()
    cursor.close()

    return jsonify({'message': 'Usuario actualizado exitosamente'})

# Ruta para transferir dinero
@app.route('/transferencia', methods=['POST'])
def realizar_transferencia():
    data = request.get_json()
    telefono_envia = data['telefono_envia']
    telefono_recibe = data['telefono_recibe']
    monto = data['monto']

    cursor = conn.cursor()

    try:
        # Llamar al procedimiento almacenado
        cursor.callproc('realizar_transferencia', (telefono_envia, telefono_recibe, monto))
        conn.commit()
        return jsonify({'message': 'Transferencia exitosa'})
    except Exception as e:
        conn.rollback()
        return jsonify({'message': str(e)})
    finally:
        cursor.close()

# Ruta para cargar monto a travez de un usuario por su ID (POST)
@app.route('/recargar/<int:usuario_id>', methods=['POST'])
def recargar_saldo(usuario_id):
    data = request.get_json()
    monto_recarga = data['monto']

    cursor = conn.cursor()

    cursor.execute("SELECT saldo FROM usuarios WHERE id = %s", (usuario_id,))
    saldo_actual = cursor.fetchone()

    if saldo_actual is None:
        return jsonify({'message': 'Usuario no encontrado'})

    nuevo_saldo = saldo_actual[0] + monto_recarga

    cursor.execute("UPDATE usuarios SET saldo = %s WHERE id = %s", (nuevo_saldo, usuario_id))

    conn.commit()
    cursor.close()

    return jsonify({'message': 'Recarga de saldo exitosa'})


@app.route('/retirar/<int:usuario_id>', methods=['PUT'])
def retirar_saldo(usuario_id):
    data = request.get_json()
    monto_retiro = data['monto']

    cursor = conn.cursor()

    cursor.execute("SELECT saldo FROM usuarios WHERE id = %s", (usuario_id,))
    saldo_actual = cursor.fetchone()

    if saldo_actual is None:
        return jsonify({'message': 'Usuario no encontrado'})

    if saldo_actual[0] < monto_retiro:
        return jsonify({'message': 'Saldo insuficiente para realizar el retiro'})

    nuevo_saldo = saldo_actual[0] - monto_retiro

    cursor.execute("UPDATE usuarios SET saldo = %s WHERE id = %s", (nuevo_saldo, usuario_id))

    conn.commit()
    cursor.close()

    return jsonify({'message': 'Retiro de saldo exitoso'})

if __name__ == '__main__':
    app.run(debug=True)