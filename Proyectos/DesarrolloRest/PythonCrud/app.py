import pymysql
from flask import Flask, request, jsonify
from flask_cors import CORS, cross_origin

app = Flask(__name__)
cors = CORS(app)

db = pymysql.connect(
    host='localhost',
    user='root',
    password='',
    db='vehiculosDB'
)

@app.route('/crud_vehuculo_p', methods=['POST'])
@cross_origin()
def add_vehicle():
    try:
        data = request.get_json()
        if data:
            nombre = data.get('nombre')
            modelo = data.get('modelo')
            fabricante = data.get('fabricante')
            pais = data.get('pais')

            cursor = db.cursor()
            cursor.execute("INSERT INTO vehiculos_db (nombre, modelo, fabricante, pais) VALUES (%s, %s, %s, %s)", (nombre, modelo, fabricante, pais))
            db.commit()
            cursor.close()

            return jsonify({'message': 'Vehículo agregado'})
        else:
            return jsonify({'error': 'JSON vacío o inválido'}), 400
    except Exception as e:
        return jsonify({'error': str(e)}), 400


@app.route('/vehicle', methods=['GET'])
@cross_origin()
def get_vehicles():
    cursor = db.cursor()
    cursor.execute("SELECT * FROM vehiculos_db")
    result = cursor.fetchall()
    cursor.close()

    vehicles = []
    for row in result:
        vehicle = {
            'id': row[0],
            'nombre': row[1],
            'modelo': row[2],
            'fabricante': row[3],
            'pais': row[4]
        }
        vehicles.append(vehicle)

    return jsonify(vehicles)

@app.route('/crud_vehiculo_g/<int:id>', methods=['GET'])
@cross_origin()
def get_vehicle(id):
    cursor = db.cursor()
    cursor.execute("SELECT * FROM vehiculos_db WHERE id = %s", (id,))
    row = cursor.fetchone()
    cursor.close()

    if row:
        vehicle = {
            'id': row[0],
            'nombre': row[1],
            'modelo': row[2],
            'fabricante': row[3],
            'pais': row[4]
        }
        return jsonify(vehicle)
    else:
        return jsonify({'message': 'Vehículo no encontrado'}), 404

@app.route('/crud_vehiculo_t/<int:id>', methods=['PUT'])
@cross_origin()
def update_vehicle(id):
    cursor = db.cursor()
    nombre = request.json['nombre']
    modelo = request.json['modelo']
    fabricante = request.json['fabricante']
    pais = request.json['pais']

    cursor.execute("UPDATE vehiculos_db SET nombre = %s, modelo = %s, fabricante = %s, pais = %s WHERE id = %s", (nombre, modelo, fabricante, pais, id))
    db.commit()
    cursor.close()

    return jsonify({'message': 'Vehículo actualizado'})

@app.route('/crud_vehiculo_d/<int:id>', methods=['DELETE'])
@cross_origin()
def delete_vehicle(id):
    cursor = db.cursor()

    cursor.execute("DELETE FROM vehiculos_db WHERE id = %s", (id,))
    db.commit()
    cursor.close()

    return jsonify({'message': 'Vehículo eliminado'})

if __name__ == '__main__':
    app.run(debug=True)
