<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include('modelos/imports.html');
    ?>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Sobre - LaDesign</title>
</head>
<body>
    <!-- #region navbar -->
    <?php
    include('./modelos/navbar.html');
    ?>
    <!-- #endregion -->


    <article class="historia grey darken-4 white-text">
        <div class="container">
            <div class="row">
                <div class="col l4">
                    <img src="img/foto-artista.png" class="responsive-img circle lalah" alt="">
                </div>
                
                <div class="col l8 texto">
                    <h2 class="center-align">Quem sou eu?</h2>
                    <p class="">
                        Meu nome é Laryssa, tenho <?php echo(date('Y') - 2004); ?> anos e nasci no  em uma cidadezinha no interior do norte do paraná. Cresci desenhando e pintando em tudo que via pela frente, sempre amei desenhar, mas nunca pensei que esse dom ia se prolongar tanto. Com os meus 14 anos já pensava em trabalhar com tatuagens, vivia desenhando nos braços dos meus colegas de classe e eles sempre falavam que eu se eu fosse uma tatuadora, tatuariam comigo. Acabei levando essa história muito a sério e decidi ir atrás, estudar e  procurar as melhores influências nesse ramo. Sou cursada e agora estou aqui para atender vocês, e crescer fazendo oque eu mais amo… A arte.
                    </p>
                </div>
            </div>
        </div>
    </article>
    <article class="grey darken-3">
            <div class="container">
                <h3 class="white-text center-align">Agradecimentos</h3>
                <div class="carousel col">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                    <img src="img/avaliacao.png" class="carousel-item" alt="avaliação">
                </div>
            </div>
        </div>
    </article>



    <!-- #region footer -->
    <?php
        include('./modelos/footer.html');
    ?>
    <!-- #endregion -->
    <script>
        M.AutoInit();
        $(document).ready(function(){
            $('.carousel').carousel({
                fullWidth: true,
                padding: 9,
            });
        });
    </script>
</body>
</html>