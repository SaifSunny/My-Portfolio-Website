<?php 

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: admin_home.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email=="saifsunny56@gmail.com" && $password=="sunny56562") {
		$_SESSION['email'] = $email;
		header("Location: admin_home.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Portfolio - Saieef Sunny</title>
    <link rel='stylesheet' id='leven-google-fonts-css'
        href='https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic'
        type='text/css' media='all' />
    <link rel='stylesheet' href='css/styles.min.css' type='text/css'/>

    <script type='text/javascript' src='js/jquery.min.js'></script>
</head>

<body class="home custom-background wp-embed-responsive masthead-fixed full-width grid">


    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container full-width-container theme-style-light" style="height:70vh;">


            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">

                        <div id="content" class="page-content site-content single-post" role="main">
                            <article id="post-157" class="post-157 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="fw-page-builder-content">
                                        <section class="fw-main-row ">
                                            <div class="container">
                                                <form action="" method="POST" class="login-email" style="margin: 17% 20%">
                                                    <p class="login-text" style="font-size: 2rem; font-weight: 800;">
                                                        Login</p>
                                                    <div class="input-group">
                                                        <input type="email" placeholder="Email" name="email" class="form-control"
                                                            value="" required>
                                                    </div><br>
                                                    <div class="input-group">
                                                        <input type="password" placeholder="Password" name="password"
                                                            value="" required>
                                                    </div><br>
                                                    <div class="input-group">
                                                        <button name="submit" class="btn btn-primary">Login</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!-- .entry-content -->
                            </article>
                            <!-- #post-## -->
                        </div>
                        <!-- #content -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- #main-content -->
            </div>
        </div>
    </div>
    <script type='text/javascript' src='js/bootstrap.min.js' id='js-2-js'>
    </script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed('#subtitle', {
            strings: ['Full Stack Web Developer.', 'UI/UX Designer.', 'Android Developer', 'Graphics Designer',
                'Machine Learning Engineer.'
            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });
    </script>
</body>

</html>