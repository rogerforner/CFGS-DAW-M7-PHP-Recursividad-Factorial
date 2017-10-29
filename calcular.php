<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//## error()
//## factorial()
//# Valores
//# Tratar errores y Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
//## error()
//# ---------------------------------------------------------------------
function error() {
  echo "Solo se aceptan números positivos.";
}

//## factorial()
//#
//# La siguiente función es recursiva porqué dentro de ésta se llama a
//# ella misma para poder operar el factorial.
//# ---------------------------------------------------------------------
//Si el número es igual a 0 devolveremos un 1 y mientras que éste número
//sea diferente de 0 se realizará una multiplicación del número por el
//mismo - 1 porqué se trata de utilizar todos los números hasta 1.
//En una multiplicación es indiferente si se empieza por delante o por
//detrás dada la propiedad conmutativa.
//5! = 1 * 2 *3 * 4 * 5 = 120
//5! = 5 * 4 * 3* 2 * 1 = 120
function factorial($numero) {
  if ($numero == 0) {
    return 1;

  } else {
    //Llamamos la misma función.
    return $numero * factorial($numero - 1);
  }
}


//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
$n = $_POST['numero']; //name="numero"


//# Tratar errores y Resultado
//# ---------------------------------------------------------------------
//Comprobaremos si el valor proporcionado es un número y además positivo.
//Si es un número procederemos a buscar el factorial de éste.
//Si no es un número enviaremos un mensaje de error.
if (!is_numeric($n) || $n < 0) {
  echo error();

} else { //Resultado
  echo "(" . $n . "!) = " . factorial($n);
}
?>
