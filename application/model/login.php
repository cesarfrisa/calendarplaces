<?php


class Model_Login
{
	protected $model = 'Login';
	protected $adapter;

	public function __construct()
	{
		$adaptername = __CLASS__."_".$this->model.$_SESSION['register']['adapter'];
		$this->adapter = new $adaptername();	
	}
	
	public function singin($identity, $credentials)
	{
// 		echo recaptcha();
// 		die();
		return $this->adapter->getCredentials($identity, $credentials);
	}
	
	public function singup()
	{
		
	}
	
// 	public function recaptcha()
// 	{

// 		require_once('lib/recaptchalib.php'); //libreria descargarda de Google
		
// 		// Llaves creadas en Google
// 		$publickey = "6LckPeoSAAAAAAXRcykTS_crJcUqZKmey1n9cnyw"; //llave publica
// 		$privatekey = "6LckPeoSAAAAANa7TIvS2cf52_zBWC9Tk5zBhsaZ"; //llave privada
		
// 		//Respuesta de reCAPTCHA
// 		$resp = null;
// 		# Errores de reCAPTCHA si es que hay
// 		$error = null;
		
// 		# was there a reCAPTCHA response?
// 		if ( isset($_POST["recaptcha_response_field"]) && $_POST["recaptcha_response_field"]) { //Si la variable existe es decir, fué enviado desde un Formulario
// 		//la función necesita la llave privada, la IP del usuario, el campo "desafio" y el campo "respuesta" que dió el usuario
// 		$resp = recaptcha_check_answer ($privatekey,
// 		$_SERVER["REMOTE_ADDR"],
// 		$_POST["recaptcha_challenge_field"],
// 		$_POST["recaptcha_response_field"]); //Cuando recibimos los datos por el formulario, procedemos a hacer la verificacion en reCATPCHA
		
// 		if ($resp->is_valid) {
// 		echo "AQUI VA TODO EL CODIGO PARA GRABAR, ENVIAR CORREO, ETC. es decir, cuando pasó el reCAPTCHA";
//         } else {
//                 //En caso falló el reCAPTCHA
// 				$error = $resp->error; //Si deseas muestras los errores
// 				echo $error;
// 			//Aqui va por ejemplo la reimpresion del formulario y el mensaje de reCAPTCHA invalido, etc.
// 			}
// 		}
// 		//echo recaptcha_get_html($publickey, $error); //imprimimos el formulario de reCATPCHA
		
// 		return $resp->is_valid;
		
// 	}

}