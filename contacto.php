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
				new Cocoen();
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
      
        <P class="contact_p">¿Tienes alguna pregunta? Nos gustaría oir tu opininión. Envianos un mensaje y nos pondremos en contacto contigo lo antes posible.    </P><br><br>
            
        <form action="contacto.php">
            <div class="inputfield">
            <label>Nombre</label><br>
        	<input class="effect-16" type="text" placeholder="">
            <span class="focus-border"></span>
            </div>
            <div class="inputfield">
            <label>Correo electronico</label><br>
        	<input class="effect-16" type="text" placeholder="">
            <span class="focus-border"></span>
            </div>
            <label>Mensaje</label><br>
            <div class="inputfield" >
        	<textarea tabindex="5" style="height:100px;"></textarea>
            <span class="focus-border"></span>
            </div>
            <button type="submit" name="enviar" data-submit="Enviando">Enviar</button>
        </form>

    </section>
    <footer id="footer">
    </footer>
</div>    
</body>
</html>