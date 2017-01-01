<?php 

require_once "Modules/Entity/ConnectDB.php";
/**
* 
*/
class Contacto
{
	private $nombre;
	private $correo;
	private $telefono;
	private $bd;
	private $agente;

	

	private  function setNombre($nombre){
		$this->nombre = $nombre;
		return $this;
	}
	private function setCorreo($correo){
		$this->correo = $correo;
		return $this;
	}
	private function setTelefono($telefono){
		$this->telefono = $telefono;
		return $this;
	}
	private function setIdAgente($agente){
		$this->agente = $agente;
		return $this;
	}
	public  function save(){
		$nombre = $this->nombre;
		$correo = $this->correo;
		$telefono = $this->telefono;
		$idAgente = $this->agente;
		$consulta = "INSERT INTO contactos(idAgente,nombre,correo,telefono) VALUES('$idAgente','$nombre','$correo','$telefono')";

		$pre = $this->bd->exec($consulta);
		
	}
	private function getIdAgente(){
		return $this->agente;
	}
	public function getContactos(){
		$consulta = "SELECT * FROM contactos";

		$pdo = new ConnectDB();
		$pre=$pdo->prepare($consulta);
		$exe = $pre->execute();
		return $pre->fetchAll();
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getCorreo(){
		return $this->correo;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getBD(){
		return $this->bd;
	}
	public function __construct($agente,$nombre,$correo,$telefono){
		$this->bd = new ConnectDB();
		$this->setIdAgente($agente)->setNombre($nombre)->setCorreo($correo)->setTelefono($telefono)->save();
	}

}
 ?>