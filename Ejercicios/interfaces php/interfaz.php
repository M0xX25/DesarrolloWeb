<?php

interface CuentaBancaria
{
    public function depositar($cantidad);
    public function retirar($cantidad);
}

class GeneralCuentaBancaria implements CuentaBancaria
{
    protected $numeroCuenta;
    protected $nombreCliente;
    protected $saldo;

    public function __construct($numeroCuenta, $nombreCliente, $saldo)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->nombreCliente = $nombreCliente;
        $this->saldo = $saldo;
    }

    public function depositar($cantidad)
    {
        $this->saldo += $cantidad;
    }

    public function retirar($cantidad)
    {
        if ($cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
        } else {
            echo "Saldo insuficiente";
        }
    }
}

class CuentaAhorro extends GeneralCuentaBancaria
{
    private $interesMensual;

    public function __construct($numeroCuenta, $nombreCliente, $saldo, $interesMensual)
    {
        parent::__construct($numeroCuenta, $nombreCliente, $saldo);
        $this->interesMensual = $interesMensual;
    }

    public function depositarIntereses()
    {
        $interes = $this->saldo * $this->interesMensual;
        $this->depositar($interes);
    }

    public function retirar($cantidad)
    {
        if ($cantidad <= $this->saldo) {
            parent::retirar($cantidad);
        } else {
            echo "Saldo insuficiente";
        }
    }
}

class CuentaCorriente extends GeneralCuentaBancaria
{
    const COBRO_POR_MIL = 0.004;
    const SOBREGIRO_MAXIMO = 300000;

    public function depositar($cantidad)
    {
        if ($this->saldo + $cantidad <= self::SOBREGIRO_MAXIMO) {
            $cobro = $cantidad * self::COBRO_POR_MIL;
            parent::depositar($cantidad - $cobro);
        } else {
            echo "No se puede realizar la operación. El saldo máximo permitido para sobregiro es de $" . self::SOBREGIRO_MAXIMO;
        }
    }

    public function retirar($cantidad)
    {
        if ($cantidad <= $this->saldo) {
            parent::retirar($cantidad);
        } else {
            echo "Saldo insuficiente";
        }
    }
}
if (isset($_POST['crear_cuenta'])) {
    $numero_cuenta = $_POST['numero_cuenta'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $saldo = $_POST['saldo'];
    $interes_mensual = isset($_POST['interes']) ? $_POST['interes'] : 0;
    $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : null;

    if ($operacion == 'depositar') {
        $cuenta = new CuentaAhorro($numero_cuenta, $nombre_cliente, $saldo, $interes_mensual);
        $cuenta->depositar($cantidad);
        $saldo = $saldo + $cantidad;
    }
    if ($operacion == 'retirar') {
        $cuenta = new CuentaAhorro($numero_cuenta, $nombre_cliente, $saldo, $interes_mensual);
        if ($cantidad <= $saldo) {
        $cuenta->retirar($cantidad);
        $saldo = $saldo - $cantidad;
        } else {
            echo "Saldo insuficiente";
        }
    }

}
