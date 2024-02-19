<?php
include"./DB/conexion.php";
include "enviar.php";

$con_que_frecuencia_utiliza_el_internet = $_POST['con_que_frecuencia_utiliza_el_internet'];
$que_herramienta_utilizas = $_POST['que_herramienta_utilizas'];
$espesifique_otras = $_POST['espesifique_otras'];
$te_sientes_comodo_utilizando_software = $_POST['te_sientes_comodo_utilizando_software'];
$has_recibido_capacitacion = $_POST['has_recibido_capacitacion'];
$que_te_gustaria_aprender = $_POST['que_te_gustaria_aprender'];

$insertar = $conexion->query("INSERT INTO encuesta VALUES
(NULL,'$con_que_frecuencia_utiliza_el_internet','$que_herramienta_utilizas','$espesifique_otras','$te_sientes_comodo_utilizando_software','$has_recibido_capacitacion','$que_te_gustaria_aprender')")

?>