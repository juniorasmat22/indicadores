<?php
require __DIR__ . '/Cargador.php';
Cargador::cargar();
session_start();
$despachador=new Solicitud\Despachador();
$despachador->despachar();
