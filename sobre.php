<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="images/forma.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Danki Code - Tema</title>
</head>
<body>

    <section class="topo">
        <div class="center">
            <header>
                <div class="logo">
                    <img src="images/logo.png"/>
                </div><!--logo-->
            </header>
            <ul class="menu-desktop"> 
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <div class="menu-mobile">
            <i class="fa fa-align-right"></i>
            <ul>
                    <li><a href="index.php">INÍCIO</a></li>
                    <li><a href="sobre.php">SOBRE</a></li>
                    <li><a href="contato.php">CONTATO</a></li>
                </ul>
            </div><!--menu-mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->

    <section class="sobre-equipe">
        <div class="center">
            <div class="w50 sobre-equipe-texto">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
                <p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativas, consistentes e adequadas às necessidades e características dee cada companhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente.</p>
            </div><!--w50-->
            <div class="w50 sobre-equipe-img">
                <img src="images/foto-equipe-01.png" alt="">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--sobre-equipe-->

    <section class="sobre-imagens">
        <div class="center">
            <div class="img-sobre">
                <img src="images/foto-3.png" alt="">
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="images/foto-3.png" alt="">
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="images/foto-3.png" alt="">
            </div><!--img-sobre-->
            <div class="img-sobre">
                <img src="images/foto-3.png" alt="">
            </div><!--img-sobre-->
        </div><!--center-->
    </section><!--sobre-imagens-->

    <footer style="margin-top: 200px;">
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br/> Entre em contato por e-mail ou telefone.</p><br/>
                <a href="/contato" target="_blank">Entrar em contato</a>
            </div><!--center-->
        </section><!--metodologia-->
        <div class="center">
            <div class="col-footer">
                <h2>SUPORTE</h2>
                <p>Contato</p>
                <p>FAQ</p>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>SUPORTE</h2>
                <p>Contato</p>
                <p>FAQ</p>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>SUPORTE</h2>
                <p>Contato</p>
                <p>FAQ</p>
            </div><!--col-footer-->
            <div class="col-footer" style="width: 50%; text-align: right;">
                <img src="images/logo-dummy.png" alt="">
            </div><!--col-footer-->
        </div><!--center-->
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
    //Menu Responsivo.

    $('.menu-mobile i').click(function(){
        $('.menu-mobile').find('ul').slideToggle();
    })
    </script>

</body>
</html>