<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login na rede social</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montagu+Slab:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/style.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar"></div>
    <!--sidebar-->

    <!--div.form>div.logo-chamada-login>img+p|c-->
    <!--a linha acima é um exemplo de como criar mais rapidamente estruturas de codigo(COMENTADOS.)-->
    <div class="form-container-login">
        <div class="logo-chamada-login">
            <img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg">
            <p>Conecte-se com os seus amigos e crie novas conexões enquanto recria conexões.</p>
        </div>
        <!--logo-chamada-login-->


        <div class="form-login">
            <form action="" method="post">
                <input type="text" name="email" placeholder="Login...">
                <input type="password" name="senha" placeholder="Senha...">
                <input type="submit" name="acao" value="Acessar">
                <input type="hidden" name="login">
            </form>
            <p><a href="<?php echo INCLUDE_PATH ?>registrar">Criar Conta</a></p>
        </div>
        <!-- /.form-login -->
    </div>
    <!--form-container-login-->
</body>

</html>