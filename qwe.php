<?
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
$direccion=$_POST['direccion'];


$body.="<p>Nombre: " . $nombre . "<br>
Apellido: " . $apellido . "<br>
E - Mail: " . $email . "<br>
Dirección: " . $direccion . "<br>
Mensaje: " . $mensaje . "<br>";

if ($body!=""){ 
$headers .= "MIME-Version: 1.0\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\n";  
$headers .= "From: ".$nombre." <".$email.">\n";
mail("claudiomarey@mail.com", "----> Contacto Sitio Laboratorio de informática <-------", $body, $headers);
if (mail) {header("Location: gracias.html");}else{print"Ha ocurrido un error";}
}
?>
