<?php 
/**
* 
*/
class Usuario 
{
	private $username;
	private $password;
	private $bd;

	public function setNombre($username){
		$this->username=$username;
		return $this;
	}
	public function setPassword($password){
		$this->password=md5($password);
		return $this;
	}
	public function getNombre(){
		return $this->nombre;

	}
	public function getPassword(){
		return $this->password;
	}
	public function save(){
		$username = $this->username;
		$password = $this->password;
        $consulta = "INSERT INTO usuarios(username,password) VALUES('$username','$password')";
        $this->bd->exec($consulta);

	}
	public function getUsuarios(){
		$pdo = new ConnectDB();

		$pre = $pdo->prepare("SELECT * FROM usuarios");
		$pre->execute();
		return $pre->fetchAll();
	}

	public function login($username,$password){
		$usuarios = Usuario::getUsuarios();

		foreach ($usuarios as  $usuario) {
			if($usuario['username']==$username&&$usuario['password'] == $password){
				$_SESSION['usuario']=$usuario;
				header("Location: index.php");
			}
		}
	}

	function __construct($username,$password)
	{
		$this->bd = new ConnectDB();
		$this->setNombre($username)->setPassword($password)->save();
	}
}
 ?>