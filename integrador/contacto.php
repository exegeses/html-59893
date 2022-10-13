<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summer Exploring</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/logo.png" alt="Logo">
            SUMMER EXPLORING
        </a>
        
        <!-- barra de navegación -->
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#">Promos</a>
            <a href="#">Historia</a>
            <a href="#">Contacto</a>
        </nav>

    </header>
    
    <main>

        <?php
            //capturamos datos enviados por el form
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $comentarios = $_POST['comentarios'];
            //configuramos datos de email a enviar
            $destinatario = 'ACA PONÉ TU EMAIL';
            $asunto = 'Email enviado desde mi sitio';
            $cuerpoEmail = '<div style="font-family: Raleway, sans-serif; width: 450px; padding: 32px; margin: auto;">';
            $cuerpoEmail .= 'Nombre: '.$nombre.'<br>';
            $cuerpoEmail .= 'Email: '.$email.'<br>';
            $cuerpoEmail .= 'Comentarios: '.$comentarios.'</div>';
            $headers ='From:  empresa@mail.com'."/r/n";
            $headers .= 'MIME-Version: 1.0';
            $headers .= 'Content-type: text/html; charset=utf-8';

            //enviamos el email
            mail($destinatario, $asunto, $cuerpoEmail, $headers);

            echo 'Gracias '.$nombre.' por contactarnos.';
        ?>

    </main>
    <footer>
        <section>
           <nav id="social">
                <a href="#" target="_blank">
                    <img src="imgs/instagram.png" alt="Instagram">
                </a>
                <a href="#" target="_blank">
                    <img src="imgs/facebook.png" alt="Facebook">
                </a>
                <a href="#" target="_blank">
                    <img src="imgs/twitter.png" alt="Twitter">
                </a>
                <a href="#" target="_blank">
                    <img src="imgs/whatsapp.png" alt="Whatsapp">
                </a>
           </nav>
           <nav id="enlaces-footer">
                <ul>
                    <li class="destacado">Acerca</li>
                    <li>Historia</li>
                    <li>Team</li>
                    <li>Compromiso</li>
                    <li>Términos</li>
                </ul>
                <ul>
                    <li class="destacado">Servicios</li>
                    <li>Promos</li>
                    <li>Contratar</li>
                    <li>Métodos de pago</li>
                </ul>
                <ul>
                    <li class="destacado">Otros</li>
                    <li>Contáctenos</li>
                    <li>Ayuda</li>
                    <li>Privacidad</li>
                </ul>
           </nav>
        </section>
    </footer>

</body>
</html>