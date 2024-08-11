<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
    <!-- Links para Bootstrap CSS -->     
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Estilos personalizados -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html{
            scroll-behavior: smooth;
        }
        body {
            padding-top: 60px;
        }
        .navbar-nav a {
            color: black !important;
        }
        .navbar {

            border-radius: 40px;
            background-color: white;
        }
        .logo h1 {
            color: black;
            margin: 0;
        }
        
        .nav-link:hover {
            text-decoration: underline;
            font-size: 1.2rem;
            transition: 0.5s;
        }
        .nav-link {
            transition: 0.5s;
        }
        main .inicio{
            background-image: url('/images/background.png');
        }
        .preco {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: space-between;
        }
        .preco h2 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        .preco .preco-valor {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
        }
        .preco ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        .preco li {
            margin: 10px 0;
        }
        .preco p {
            font-size: 1em;
            color: #666;
        }
        .btn-custom {
            margin-top: auto;
        }
        .informativo2, .informativo3 {
            margin-bottom: 2rem; /* Espaço entre seções */
        }
        .imagem img, .texto1 img {
            max-width: 100%;
            height: auto;
        }
        .texto1, .texto3 {
            text-align: center;
        }
       main p{
        color: #666;
       }
       .bg-custom1{
        background-color: red;
        border-radius: 15px;
       }
       .bg-custom2{
        background-color: purple;
        border-radius: 15px;
       }
       .bg-custom3{
        background-color: blueviolet;
        border-radius: 15px;
       }
       .mobile {
            display: none;
        }
        .header h1{
            display: block;
        }
        .inicio {
            background-color: #f8f9fa; /* Cor de fundo opcional para melhor visualização */
            padding: 2rem;
        }
        .video iframe {
            width: 100%; /* Ajusta o vídeo para preencher o contêiner */
            height: auto; /* Mantém a proporção do vídeo */
        }
        .btPL h1 {
            font-size: 2rem; /* Ajusta o tamanho do título */
        }
        .btPL p {
            font-size: 1rem; /* Ajusta o tamanho do texto */
        }
        @media (max-width: 767px) {
            .desktop {
                display: none;
            }
            header{
                border: 1px solid black;
            }
            .mobile {
                display: block;
            }
            .inicio {
                flex-direction: column;
            }
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<header>
        <!-- Desktop Navbar -->
        <nav class="desktop navbar navbar-expand-lg navbar-dark fixed-top border border-black" data-aos="fade-down">
            <div class="container">
            <a class="navbar-brand" href="#"><img src="img/Design sem nome(10).png" height="70px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plano">Planos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger rounded-pill" style="width: 100px;">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Mobile Navbar -->
        <div class="mobile">
            <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/Design sem nome(10).png" height="70px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#inicio">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#plano">Planos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contato">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-danger rounded-pill" href="logout.php" style="width: 100px;">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="container text-center my-5 ">
    <div class="inicio rounded-5 rounded-top-0 d-flex" id="inicio">
            <div class="btPL my-5 " data-aos="fade-right">
                <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, sed voluptas omnis ea deleniti at iusto, veniam provident quae eum modi saepe temporibus atque impedit in eaque minima libero id!</p>
                <button class="btn btn-outline-danger rounded-pill p-3" style="width: 300px ;">discover</button>
            </div>
            <div class="imagem">
                <img src="img/Online resume-cuate.png"  style="height: 450px;width:1000px;">
            </div>
    </div>
        <div class="informativo">
    <div class="container">
        <h1 class="text-center mb-4" data-aos="fade-down">Informative Section</h1>
        <p class="text-center mb-5" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vero praesentium ab rerum facilis numquam corporis quod perspiciatis in commodi, nemo a error aliquam aliquid nobis possimus optio modi dolores.</p>
        <div class="row text-center" data-aos="fade-left">
            <div class="col-md-4 mb-4">
                <div class="info shadow p-3 mb-5 bg-body-tertiary rounded p-2">
                    <img src="img/Design sem nome(1).png" height="80px" alt="Informative Image 1" class="rounded-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt sint incidunt vitae facilis distinctio sunt rerum delectus, exercitationem impedit eligendi amet enim quos eius. Similique placeat totam reprehenderit temporibus!</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="info shadow p-3 mb-5 bg-body-tertiary rounded p-2">
                    <img src="img/Design sem nome(1).png" height="80px" alt="Informative Image 2" class="rounded-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt sint incidunt vitae facilis distinctio sunt rerum delectus, exercitationem impedit eligendi amet enim quos eius. Similique placeat totam reprehenderit temporibus!</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="info shadow p-3 mb-5 bg-body-tertiary rounded p-2">
                    <img src="img/Design sem nome(1).png" height="80px" alt="Informative Image 3" class="rounded-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident deserunt sint incidunt vitae facilis distinctio sunt rerum delectus, exercitationem impedit eligendi amet enim quos eius. Similique placeat totam reprehenderit temporibus!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="informativo2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="img/Design sem nome(3).png" class="img-fluid" height="300px" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h1>Let's discuss about your project</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla, qui cumque cupiditate quia deserunt officiis! In ipsum cumque placeat officia commodi mollitia. Accusamus, quaerat vitae aliquid laboriosam repellat unde.</p>
                </div>
            </div>
        </div>
    </div>

    <hr data-aos="fade-left">

    <div class="informativo3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2 mb-4 mb-md-0" data-aos="fade-right">
                    <h1>Let's discuss about your project</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nulla, qui cumque cupiditate quia deserunt officiis! In ipsum cumque placeat officia commodi mollitia. Accusamus, quaerat vitae aliquid laboriosam repellat unde.</p>
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade-left">
                    <img src="img/Design_sem_nome_4_-removebg-preview.png" class="img-fluid" height="300px" alt="">
                </div>
            </div>
        </div>
    </div>
         </div>
         <div class="work" >
        <div class="container">
            <h1 class="text-center mb-4" data-aos="fade-down">Work Process</h1>
            <p class="text-center mb-5" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, vero praesentium ab rerum facilis numquam corporis quod perspiciatis in commodi, nemo a error aliquam aliquid nobis possimus optio modi dolores.</p>
            <div class="row text-center" data-aos="fade-left">
                <div class="col-md-3 mb-4" >
                    <div class="informar shadow p-3 mb-5 bg-body-tertiary rounded p-2 g-col-6 rounded">
                        <img src="img/Design sem nome(7).png" height="50px" alt="Discussion Image 1">
                        <h2>Initial</h2>
                        <p>Discuss the client's needs and requirements to understand the scope of the project. Establish goals and objectives to guide the process.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="informar shadow p-3 mb-5 bg-body-tertiary rounded p-2 g-col-6 rounded">
                        <img src="img/Design sem nome(7).png" height="50px" alt="Discussion Image 2">
                        <h2>Planning</h2>
                        <p>Develop a detailed plan outlining the tasks, deadlines, and resources needed. Ensure all stakeholders are on the same page.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="informar shadow p-3 mb-5 bg-body-tertiary rounded p-2 g-col-6 rounded">
                        <img src="img/Design sem nome(7).png" height="50px" alt="Discussion Image 3">
                        <h2>Execution</h2>
                        <p>Implement the plan, coordinating tasks and monitoring progress. Address any issues that arise promptly to keep the project on track.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="informar shadow p-3 mb-5 bg-body-tertiary rounded p-2 g-col-6 rounded">
                        <img src="img/Design sem nome(7).png" height="50px" alt="Discussion Image 4">
                        <h2>Review</h2>
                        <p>Evaluate the outcome of the project, gather feedback from stakeholders, and make any necessary adjustments or improvements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5" id="plano">
        <h1 class="text-center" data-aos="fade-down">Preços e Planos</h1>
        <p class="text-center" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium commodi laborum excepturi corporis, sed adipisci ex, non ut porro cupiditate, qui quo iste amet omnis similique consequatur sit officiis ducimus.</p>
        <div class="row" data-aos="fade-right">
            <div class="col-md-4 mb-4">
                <div class="preco">
                    <h2>Start</h2>
                    <div class="preco-valor bg-custom1 text-white p-3">$14.50</div>
                    <ul>
                        <li><p>60 GB espaço</p></li>
                        <li><p>1 Domínio Gratuito</p></li>
                        <li><p>Suporte Básico</p></li>
                    </ul>
                    <button class="btn btn-danger btn-custom">Comprar</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="preco">
                    <h2>Pro</h2>
                    <div class="preco-valor bg-custom2 text-white p-3">$29.99</div>
                    <ul>
                        <li><p>120 GB espaço</p></li>
                        <li><p>2 Domínios Gratuitos</p></li>
                        <li><p>Suporte Prioritário</p></li>
                        <li><p>Backup Semanal</p></li>
                    </ul>
                    <button class="btn btn-danger btn-custom">Comprar</button>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="preco">
                    <h2>Premium</h2>
                    <div class="preco-valor bg-custom3 text-white p-3">$49.99</div>
                    <ul>
                        <li><p>250 GB espaço</p></li>
                        <li><p>5 Domínios Gratuitos</p></li>
                        <li><p>Suporte 24/7</p></li>
                        <li><p>Backup Diário</p></li>
                        <li><p>SSL Grátis</p></li>
                    </ul>
                    <button class="btn btn-danger btn-custom">Comprar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="text-center mb-4" data-aos="fade-down">
            <h1>Fale com nós</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facilis excepturi id corporis provident numquam ullam accusantium optio, molestiae tempora nihil esse sequi a saepe rerum impedit error fuga magni.</p>
        </div>
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <h2>Keep in Touch</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio cum maiores sapiente ratione fuga deleniti est aliquam nihil dicta. Molestias mollitia nesciunt cumque laborum. Odio itaque laborum dignissimos ut aliquid?</p>
            </div>
            <div class="col-md-6" data-aos="fade-left" id="contato">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="inputs d-flex">
                        <div class="form-group col-md-6 my-3 ">
                            <input type="text" name="nome" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group col-md-6 my-3 mx-1">
                            <input type="email" name="email" class="form-control" placeholder="E-mail Address">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="msg" class="form-control" rows="4" placeholder="Your Message"></textarea>
                    </div><br>
                    <div class="btn d-grid gap-2">
                    <button type="submit" class="btn btn-danger btn-custom ">Send Message</button>
                    

                    </div>
                </form>
            </div>
        </div>
    </div>
    </main><br>
    <footer>
        
    </footer>
    <!-- Scripts do Bootstrap -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
