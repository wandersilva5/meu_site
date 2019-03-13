<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Wander Silva :: WebSite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if IE]><link rel="shortcut icon" href="images/favicon.ico"><![endif]-->
		<link rel="icon" href="images/favicon.png">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

        <?php
            include 'config.php';

            error_reporting (E_ALL ^ E_NOTICE);

            $post = (!empty($_POST)) ? true : false;

            if($post){

                $name = stripslashes($_POST['name']);
                $email = trim($_POST['email']);
                $message = stripslashes($_POST['message']);

                $error = '';

                if(!$error){
                    $mail = mail(WEBMASTER_EMAIL, $message,
                        "From: ".$name." <".$email.">\r\n"
                        ."Reply-To: ".$email."\r\n"
                        ."X-Mailer: PHP/" . phpversion()."\r\n"
                        ."E-mail: " .$email."\r\n"
                        ."Nome: " .$name."Site Wander Silva \r\n"
                        ."Mensagem: " .$message."\r\n"
                    );

                    if($mail){
                        echo (
                            '<div class="alert"><span class="closebtn">&times;</span>Seu e-mail foi enviado com sucesso!</div>'
                        );
                    }

                }
            }
        ?>


		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>