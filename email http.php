<?php
if (isset($_GET["nombre"])){
    echo $_GET["nombre"];
}else {
    echo "No hay nombre";
}
if (isset($_GET["email"])){
    echo ' '.$_GET["email"];
}else {
    echo "No hay email";
}
if (isset($_GET["telefono"])){
    echo ' '.$_GET["telefono"];
}else {
    echo "No hay telefono";
}
if (isset($_GET["mensaje"])){
    echo ' '.$_GET["mensaje"];
}else {
    echo "No hay mensaje";
}
$nombre = $_GET["nombre"];
$telefono = $_GET["telefono"];
$email = $_GET["email"];
$mensaje = $_GET["mensaje"];

$to      = 'lorenzccaz@gmail.com';
$subject = 'Uso mi app de PHP para esta mmda';
$body = 'Nueva consulta pum' . "\r\n" ;
$body .= 'Nombre: ' . $nombre . "\r\n" ;
$body .= 'Teléfono: ' . $telefono . "\r\n" ;
$body .= 'Email: ' . $email . "\r\n" ;
$body .= 'Mensaje: ' . $mensaje . "\r\n" ;
$headers = 'From: ' . $email . "\r\n" .
             'Reply-To: '. $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);

?>