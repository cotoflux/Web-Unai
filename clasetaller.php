<?php
require_once("interfacestaller.php");
class Taller implements DatosV,DatosP{
	//Miembros de la clase
	private $Matricula;
	private $Modelo;
	private $Fecha;
	private $Averia;
	private $Nombre;
	private $Apellido1;
	private $Apellido2;
	private $Tel;
	//Definición de los métodos de las interfaces
	public function getMatricula(){return $this->Matricula;}
	public function setMatricula($valor){$this->Matricula=$valor;}

	public function getModelo(){return $this->Modelo;}
	public function setModelo($valor){$this->Modelo=$valor;}

	public function getFecha(){return $this->Fecha;}
	public function setFecha($valor){$this->Fecha=$valor;}

	public function getAveria(){return $this->Averia;}
	public function setAveria($valor){$this->Averia=$valor;}

	public function getNombre(){return $this->Nombre;}
	public function setNombre($valor){$this->Nombre=$valor;}

	public function getApellido1(){return $this->Apellido1;}
	public function setApellido1($valor){$this->Apellido1=$valor;}

	public function getApellido2(){return $this->Apellido2;}
	public function setApellido2($valor){$this->Apellido2=$valor;}

	public function getTel(){return $this->Tel;}
	public function setTel($valor){$this->Tel=$valor;}

	//Definimos función que muestre los datos
	public function mostrarDatos(){
		echo("<table border=1><tr><th colspan=2>Datos del vehículo</th></tr><tr><td colspan=2>");
		echo($this->getFecha());
		echo("</td></tr><tr><td>");
		echo($this->getMatricula()."</td><td>".$this->getModelo());
		echo("</td></tr><td colspan=2>");
		echo($this->getAveria());
		echo("</td></tr><tr><th colspan=2>Datos del cliente</th></tr><tr><td>");
		echo($this->getNombre()."</td><td>".$this->getApellido1()." ".$this->getApellido2());
		echo("</td></tr><tr><td colspan=2>".$this->getTel()."</td></tr></table>");
	}
	//Constructor y destructor
	public function __construct(){}
	public function __destruct(){}
}
?>