<? 

$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$mensaje = $_POST['mensaje'];
$answer ="";
$success = 0;
  
if (isset $correo&&$usuario&&$mensaje) {
  //Install required first from https://github.com/PHPMailer/PHPMailer
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

  //Server settings
  $mail->SMTPDebug = 2; //to be taken out after it works// Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers GET FROM THE OLDER MAIL.PHP
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'user@example.com';                 // SMTP username
  $mail->Password = 'secret';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom($correo, $usuario);
  $mail->addAddress('info@isolatec.es', 'Isolatec');     // Add a recipient

  //Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Nuevo correo desde isolatec.es';
  $mail->Body    = $mensaje;
  $mail->AltBody = strip_tags($mensaje);

  if (!$mail->send()) {
    $success = 1;
    $answer = "<h2>Correo enviado, le contactaremos en breves momentos</h2>";
  }
  else {
    $success = 0;
    $answer = 'Ha ocurrido un error. Lamentamos las molestias. Pongase en contacto en info@isolatec.es. Mailer Error: ', $mail->ErrorInfo;
  }

  }
else {
    $answer = "Falta algún dato";
    $success = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contacto - Isolatec</title>
    <link rel="stylesheet"; href="assets/styles.css?ver=0.6">
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/cocoen.min.css" />
    <link rel="stylesheet" href="assets/pure-js-lightbox.min.css" />
    <script src="assets/cocoen.min.js"></script>
    <script src="assets/pure-js-lightbox.min.js"></script>
    <script>var lightbox = new pureJSLightBox();</script>
    <script>
			document.addEventListener('DOMContentLoaded', function(){
				new ocoen();
			});
		</script>
</head>
<body>
  <div class="header_banner">Isolatec</div>
    <header>
      
        <nav class="header">
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="referencias.html">Referencias</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
        </nav>
    </header>
  <div id="container">
    <section id="float-img"> 
        <div class="cocoen" style="max-width: 100%; 
  height: 100%; 
  overflow: hidden; 
  object-fit: cover;
  position:-100px;">
        <img src="http://www.wedgewoodhomes.co.uk/images/PlotSmall/Cross-Keys-Plot-1-Banner.jpg" alt="" style=" height: 100%; object-fit: cover;">
        <img src="http://www.wedgewoodhomes.co.uk/images/gallery/Chestfield-10.jpg" alt="" style=" height: 100%; object-fit: cover;">
</div>
    </section>
    <section id="content">
      <h1 class="contact">
        Contactanos
      </h1>
      <?php if ($success !=1){
               include "form.html";
            }
            else {
               echo $answer; 
            }   
      ?>
</section>
    <footer id="footer">
    </footer>
</div>    
</body>
</html>