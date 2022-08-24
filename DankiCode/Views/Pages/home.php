<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Home Rede Social</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400:700&display=swap">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css">

</head>

<body>

    <section class="main-feed">
        <div class="sidebar">
            <div class="logo-sidebar">
                <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" alt="">
            </div>
            <!-- /.logo-sidebar -->
            <br>
            <div class="menu-sidebar">
                <h4>Menu</h4>
                <br>
                <a href="#">Feed</a>

                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Perfil</a>

                <a href="#">Amigos</a>
            </div>
            <!-- /.menu-sidebar -->
        </div>
        <!-- /.sidebar -->
        <div class="feed">
            <div class="feed-single-post">
                <div class="feed-single-post-author">
                    <div class="img-single-post-author">
                        <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                    </div>
                    <!-- /.img-single-post-author -->
                    <h3>Breno</h3>
                    <span>04:20 20/04/2022</span>
                </div>
                <!-- /.feed-single-post-author -->
                <div class="feed-single-post-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                </div>
                <!-- /.feed-single-post-content -->
            </div>
            <!-- /.feed-single-post -->
        </div>
        <!-- /.feed -->
    </section>
    <!-- /.main-feed -->

</body>

</html>