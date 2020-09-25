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

    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante,<br/> primeira conversa.</h2>
</br></br>
                <p><b>Telefone:</b> (48) 9901-3620</p>
                <p><b>Telefone:</b> (48) 9901-3620</p>
                <p><b>Telefone:</b> (48) 9901-3620</p>

                <div class="mapa-container">
                    <div id="mapa">

                    </div><!--mapa-->
                </div><!--mapa-container-->
            </div><!--w50-->
            <div class="w50 contato-form">
                <form>
                    <input type="text" name="" id="" placeholder="Nome">
                    <input type="text" name="" id="" placeholder="Email">
                    <input type="text" name="" id="" placeholder="Telefone">
                    <select name="" id="">
                        <option value="">Geral</option>
                        <option value="">Suporte</option>
                    </select>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    <input type="submit" value="enviar">
                </form>
            </div><!--w5--->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--contato-->

    <footer>
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