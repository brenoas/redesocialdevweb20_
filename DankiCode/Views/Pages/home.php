<!DOCTYPE html>
<html lang="pt_br">
<head>

    <title>Bem-Vindo, <?php echo $_SESSION['nome']; ?></title>
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
        <?php 
			include('includes/sidebar.php'); 
		?>
        <div class="feed">
            <div class="feed-wraper">
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                        <img src="<?php echo INCLUDE_PATH_STATIC ?>images/post-placeholder.png" alt="">
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
                <div class="feed-single-post">
                    <div class="feed-single-post-author">
                        <div class="img-single-post-author">
                            <!--todo:COLOCAR IMAGEM PLACEHOLDER-->
                            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                        </div>
                        <!-- /.img-single-post-author -->
                        <div class="feed-single-post-author-info">
                            <h3>Breno Arantes</h3>
                            <p>04:20 20/04/2022</p>
                        </div>
                        <!-- /.feed-single-post-author-info -->
                    </div>
                    <!-- /.feed-single-post-author -->
                    <div class="feed-single-post-content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt nostrum maiores possimus autem facere eius rerum quod numquam velit. Molestias officiis labore corporis ipsam quisquam laborum eligendi quaerat earum.</p>
                    </div>
                    <!-- /.feed-single-post-content -->
                </div>
                <!-- /.feed-single-post -->
            </div>
            <!-- /.feed-wraper -->

            <div class="friends-request-feed">
                <h4>Solicitações de amizade</h4>
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                    <div class="friend-request-single-info">
                        <h3>Fulano da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>

                    </div>
                    <!-- /.friend-request-single-info -->

                </div>
                <!-- /.friend-request-single -->
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                    <div class="friend-request-single-info">
                        <h3>Fulano da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>

                    </div>
                    <!-- /.friend-request-single-info -->

                </div>
                <!-- /.friend-request-single -->
                <div class="friend-request-single">
                    <img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" alt="">
                    <div class="friend-request-single-info">
                        <h3>Fulano da Silva</h3>
                        <p><a href="">Aceitar</a> | <a href="">Recusar</a></p>

                    </div>
                    <!-- /.friend-request-single-info -->

                </div>
                <!-- /.friend-request-single -->
            </div>
            <!-- /.friends-request-feed -->
        </div>
        <!-- /.feed -->
    </section>
    <!-- /.main-feed -->

</body>

</html>