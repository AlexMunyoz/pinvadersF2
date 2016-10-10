<?php
class ia
{

  // propiedades las cuales se definen mediante public
  public $columna = 0;
  public $fila = 1;

  // Declaración de un método
  //en metodos usamos public function, get  pide y return da.
  public function getColumna() {
      return $this->columna;
  }
  public function getFila() {
    //rand es random (aleatorio en ingles) y lleva un codigo el cual hara que sea aleatorio la fila (el numero)
      return $this->fila;
  }
//setters
public function setFila($fil) {
  $this->fila = $fil;
}
public function setColumna($col){
  $this->columna = $col;
}
//aqui pongo para que cuando demos click se mueva random
public function randomPos(){
  $this->columna=rand(0,3);
  $this->fila=rand(0,3);
}

}
?>
