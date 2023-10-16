CREATE DATABASE payhub;

USE payhub;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    genero ENUM('Masculino', 'Femenino'),
    cedula VARCHAR(15) NOT NULL,
    telefono VARCHAR(10),
    email VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    saldo INT NOT NULL DEFAULT 0
);

CREATE TABLE transacciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_envia_id INT NOT NULL,
    usuario_recibe_id INT NOT NULL,
    telefono_envia VARCHAR(10) NOT NULL,
    telefono_recibe VARCHAR(10) NOT NULL,
    monto INT NOT NULL,
    FOREIGN KEY (usuario_envia_id) REFERENCES usuarios(id),
    FOREIGN KEY (usuario_recibe_id) REFERENCES usuarios(id)
);

-- 
DELIMITER $$

CREATE PROCEDURE realizar_transferencia(IN telefono_envia VARCHAR(10), IN telefono_recibe VARCHAR(10), IN monto INT)
BEGIN
    DECLARE id_envia INT;
    DECLARE id_recibe INT;
    DECLARE saldo_envia INT;
    DECLARE saldo_recibe INT;

    SELECT id, saldo INTO id_envia, saldo_envia FROM usuarios WHERE telefono = telefono_envia;

    SELECT id, saldo INTO id_recibe, saldo_recibe FROM usuarios WHERE telefono = telefono_recibe;

    IF id_envia IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El número de teléfono del remitente no existe en la base de datos';
    END IF;

    IF id_recibe IS NULL THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'El número de teléfono del destinatario no existe en la base de datos';
    END IF;

    IF saldo_envia < monto THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Saldo insuficiente para realizar la transferencia';
    END IF;

    UPDATE usuarios SET saldo = saldo_envia - monto WHERE id = id_envia;
    UPDATE usuarios SET saldo = saldo_recibe + monto WHERE id = id_recibe;

    INSERT INTO transacciones (usuario_envia_id, usuario_recibe_id, telefono_envia, telefono_recibe, monto)
    VALUES (id_envia, id_recibe, telefono_envia, telefono_recibe, monto);
END $$

DELIMITER ;

