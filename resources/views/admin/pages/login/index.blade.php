<html lang = "vi">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no" />
        <base href="" />
        <title>Đăng nhập hệ thống</title>
        <link rel="shortcut icon" type="image/x-icon" href="" />
        <link href="<?php echo common_helper::back_end(); ?>css/layout_login.css" rel="stylesheet" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- <div class="logo">
            <a href="#">
                <img class="img-responsive margin0auto" src="<?php echo common_helper::back_end(); ?>images/logo_small.png" alt="" />
            </a>
        </div> -->
        <div class="Zeptain_LT">
            <h3>Đăng nhập hệ thống</h3>
            <form method = "POST">
                <input type="text" name = "name" placeholder="Tên tài khoản" /> 
                <input type="password" name = "password" placeholder="Mật khẩu" />
                <div class = "note_error">
                    <?php echo form_error('login'); ?>
                </div>
                <div class="box">
                    <input type="checkbox" value="" /> Duy trì đăng nhập 
                    <a href="#">Quay về trang chủ</a>
                </div>
                <div class="clr"></div>
                <input type="submit" value="Đăng nhập" />
            </form>
            <p>Phát triển bởi Văn Minh</p>
        </div>
    </body>
</html>
