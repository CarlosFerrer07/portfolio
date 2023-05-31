<?php

declare(strict_types=1);

//obtenemos valores enviados del formulario
if (count($_POST) > 0) {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['message'];
    //configuramos detalles del envio del correo
    $destinatario = 'carlosferrermartinez11@gmail.com';
    $asunto = 'Nuevo mensaje de contacto (portfolio)';

    // Creamos el cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Envíamos el correo funcion 'mail'
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo 'Mensaje enviado con éxito. Gracias por contactarnos.';
    } else {
        echo 'Error al enviar el mensaje. Por favor, intenta nuevamente.';
    }
}

/* var_dump($_POST); */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARLOS FERRER MARTÍNEZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#opciones">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/icons/logoCarlos.png" width="40" height="40" alt="logo_Carlos">
            </a>

            <!-- enlaces -->
            <div class="collapse navbar-collapse" id="opciones">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#goAbout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#mySkills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#saltoForm">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row align-items-center" id="goAbout">
                <div class="col-lg-3">
                    <img src="assets/images/IMAGEN CARLOS.jpg" class="img-thumbnail" alt="myFace">
                </div>
                <div class="col-lg-9" style="font-weight: bolder;">
                    <h1 class="about"><span style="color:#7d2181">About me</span></h1>
                    <p>Hello, my name is Carlos Ferrer, and I'm passionate about the world of programming and web
                        development. My main goal is to become a professional in the field of development while enjoying
                        the day-to-day process.</p>
                    <p>Currently, I'm about to start my second year of web application development studies. I consider
                        myself an organized and hardworking individual who values punctuality and always strives to give
                        my best in order to achieve my goals.</p>
                    <p>Among my main hobbies are technology, burgers, and cinema.</p>
                </div>
            </div>
        </div>

    </main>

    <section id="mySkills">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>My Skills</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-html-240.svg" alt="html">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-css.svg" alt="css">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-javascript.svg" alt="js">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-github.svg" alt="gh">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-mysql.svg" alt="sql">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-oreja.svg" alt="bootstrap">
                </div>
                <div class="col-lg col-sm-6">
                    <img src="assets/icons/icons8-php.svg" class="php" alt="php">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row text-center" id="projects">
                <div class="col">
                    <h1>Proyects</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card text-center" style="width:400px">
                        <img class="card-img-top" src="assets/images/phoneswap.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">PhoneSwap</h4>
                            <p class="card-text">Phoneswap is the first project I have worked on with my classmates,
                                simulating what it would be like to undertake a real-life project. It consists of a
                                mobile phone selling website.</p>
                            <a href="https://github.com/mamoro02/PhoneSwap-PI.git"  target="_blank" class="btn btn-primary">See Code</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4 col-sm-12">
                    <div class="card text-center" style="width:400px">
                        <img class="card-img-top" src="assets/images/portfolio.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Personal Portfolio</h4>
                            <p class="card-text">This is my personal portfolio where I apply my knowledge of Bootstrap,
                                HTML, and CSS to showcase some of the skills I acquired during my first year of web
                                development.</p>
                            <a href="https://github.com/CarlosFerrer07/portfolio/tree/master" target="_blank" class="btn btn-primary">See Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
        <div class="container formulario d-flex justify-content-center align-items-center">
            <div class="row" id="saltoForm">
                <div class="col-lg">
                    <form action="" method="post">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="name" required><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="mensaje">Mensaje:</label><br>
                        <textarea id="mensaje" name="message" rows="4" required></textarea><br>

                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p>My Skills</a> icons by <a target="_blank" href="https://icons8.com">Icons8</a></p>
                </div>
                <div class="col-lg-4">
                    <p>Go to my <a href="https://github.com/CarlosFerrer07" target="_blank">github</a></p>
                </div>
                <div class="col-lg-4">
                    <h3>Carlos Ferrer Martínez</h3>
                    <p>Todos los derechos reservados &copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>