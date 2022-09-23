<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('modelos/imports.html');
    ?>
    <title>Home - LaDesign</title>
</head>
<body>
    <?php
    include('modelos/navbar.html');
    ?>
    
    <header>
    </header>
    <article class="motivos grey darken-4">
        <div class="container">
            <h2 class="center-align white-text">Por que escolher LaDesign</h2>
            <div class="row">
                <div class="col l4">
                    <div class="card small grey black-text">
                        <div class="card-image">
                            <img class="activator" src="img/card-1.jpg" alt="">
                
                        </div>
                        <div class="activator card-content">
                            <span class="card-title">
                                Segurança <i class="activator material-icons right">more_vert</i>
                            </span>
                            <p class="activator">Clique para Saber mais...</p>
                        </div>
                        <div class="card-reveal grey">
                            <span class="card-title grey-text text-darken-4">Segurança<i class="material-icons right">close</i></span>
                            <p>
                                Todos os equipamentos são esterelizados, novos e higienizados conforme as leis de segurança. Tudo sempre organizado para que não haja a contaminação.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col l4">
                    <div class="card small grey black-text">
                        <div class="activator card-image">
                            <img class="activator" src="img/card-2.jpg" alt="">
                
                        </div>
                        <div class="card-content">
                            <span class="card-title">
                                Você Manda! <i class="activator material-icons right">more_vert</i>
                            </span>
                            <p class="activator">Clique para Saber mais...</p>
                        </div>
                        <div class="card-reveal grey">
                            <span class="card-title grey-text text-darken-4">Você Manda!<i class="material-icons right">close</i></span>
                            <p>
                                Estamos aberto para criticas, sempre tentando se adequar ao seu estilo, e ficando do seu jeito.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col l4">
                    <div class="card small grey black-text">
                        <div class="card-image">
                            <img class="activator" src="img/card-3.jpg" alt="">
                
                        </div>
                        <div class="activator card-content">
                            <span class="card-title">
                                Tecnologia <i class="activator material-icons right">more_vert</i>
                            </span>
                            <p class="activator">Clique para Saber mais...</p>
                        </div>
                        <div class="card-reveal grey">
                            <span class="card-title grey-text text-darken-4">Tecnologia<i class="material-icons right">close</i></span>
                            <p>
                                Sempre buscamos estar prontos para o futuro. E sempre estamos investindo em tecnologias mais avançadas, para sempre te atender da melhor forma.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="avaliacao grey darken-3">
        <div class="container">
            <h2 class="center-align white-text">O que nossos Clientes dizem</h2>
            <div class="carousel">
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
                <div class="carousel-item">
                    <img src="img/avaliacao.png" alt="avaliação">
                </div>
            </div>
        </div>
        
        </article>
    <?php
    include('modelos/footer.html');
    ?>

    <script>
        M.AutoInit();
        $('.carousel').carousel("fullWidth", true)
    </script>
</body>
</html>