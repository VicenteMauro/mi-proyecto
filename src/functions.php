<?php function saludar() { return 'Hola desde la función'; }

function saludarPersonalizado($nombre) {

  return "Hola y Saludos, " . strtoupper($nombre);
}

function anioNacimiento($anio) {

  return "Naciste en " . $anio;
}
?>
