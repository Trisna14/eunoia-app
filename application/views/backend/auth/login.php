<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/backend/css/auth.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/assets/fontawesome-free-6.1.0-web/css/all.css">

    <title>Login</title>
</head>
<body>
    
    <!-- MAIN SCRIPT -->
    <div class="login">

        <div class="wrapper-login">
            <div class="login-header">
                <span class="title-login">login</span>
            </div>
            <div class="login-body">
                <form action="">
                    <div class="text-input">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="text-input" >
                        <input type="text" placeholder="Password">
                    </div>
                    <div class="knob">
                        <button type="submit">login</button>
                    </div>
                </form>
            </div>
            <div class="login-footer">
                <span class="nav">
                     <a href="<?php echo base_url(); ?>">Eunoia.com</a> | 
                    <a href="<?php echo base_url('backend'); ?>"><i class="fa-solid fa-gears"></i> Panel</a> |
                    <a href="<?php echo base_url('backend/auth/registrasi'); ?>">Registrasi</a>
                </span>
            </div>
        </div>

    </div>
    <!-- END MAIN SCRIPT -->

</body>
</html>