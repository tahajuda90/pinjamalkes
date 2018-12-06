<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Laboratorium Fakultas Kedokteran Hewan</title>



        <link rel="stylesheet" href="<?php echo base_url() ?>asset/build/css/forlogin.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/bootstrap/dist/css/bootstrap.min.css">
       <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/LogoFKH-UB.png">


    </head>

    <body>
        
        <div class="login-page">
            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <div class="form">
                <form action="" class="login-form" method="POST">
                    <input type="text" placeholder="username" name="username"/>
                    <input type="password" placeholder="password" name="password"/>
                    <button>login</button>
                </form>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script  src="<?php echo base_url() ?>asset/build/js/forlogin.js"></script>

    </body>
</html>
