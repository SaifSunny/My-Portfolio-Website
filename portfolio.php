<?php 
include_once("./database/config.php");


function encodeNumber($number) {
    $encodedString = base64_encode($number);
    return strrev($encodedString);
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
    <link rel='stylesheet' id='css-0-css' href='css/styles.min.css' type='text/css' media='all' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div id="page_container" class="page-container full-width-container theme-style-light">

            <!-- Header -->
            <header id="site_header" class="header">
                <div class="header-content clearfix">

                    <!-- Text Logo -->
                    <div class="text-logo">
                        <a href="index.php">
                            <div class="logo-symbol">P</div>
                            <div class="logo-text">Portfoilio<span>.</span></div>
                        </a>
                    </div>
                    <!-- /Text Logo -->


                    <!-- Navigation -->
                    <div class="site-nav mobile-menu-hide">
                        <ul id="menu-classic-menu" class="leven-classic-menu site-main-menu">
                            <li id="menu-item-174"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="index.php" aria-current="page" data-hover="1">Home</a>
                            </li>
                            <li id="menu-item-174"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="resume.php" aria-current="page" data-hover="1">Resume</a>
                            </li>
                            <li id="menu-item-174"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="portfolio.php" aria-current="page" data-hover="1">Portfolio</a>
                            </li>

                            <li id="menu-item-174"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="contact.php" aria-current="page" data-hover="1">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <a class="menu-toggle mobile-visible">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </header>
            <!-- /Header -->
            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">

                        <div id="content" class="page-content site-content single-post" role="main">

                            <article id="post-25" class="post-25 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="fw-page-builder-content">
                                        <section class="fw-main-row ">
                                            <div class="fw-container">
                                                <div class="row">


                                                    <div class=" col-xs-12 col-sm-12 ">
                                                        <div id="col_inner" class="fw-col-inner"
                                                            data-paddings="0px 0px 0px 0px">


                                                            <!-- Portfolio Content -->
                                                            <div id="portfolio_content" class="portfolio-content"
                                                                data-categories="3,9,8,7,4,6,5">

                                                                <ul class="portfolio-filters">
                                                                    <li class="active">
                                                                        <a class="filter btn btn-sm btn-link"
                                                                            data-group="category_all">All</a>
                                                                    </li>
                                                                    <?php 
                                                                        $sql = "SELECT * FROM `category`";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            if($result){
                                                                                while($row=mysqli_fetch_assoc($result)){
                                                                                $category_id=$row['category_id'];

                                                                                $category_name=$row['category_name'];

                                                                    ?>
                                                                    <li>
                                                                        <a class="filter btn btn-sm btn-link"
                                                                            data-group="category_<?php echo $category_name?>"><?php echo $category_name?></a>
                                                                    </li>
                                                                    <?php 
                                                                                }
                                                                            }
                                                                    ?>
                                                                </ul>


                                                                <!-- Portfolio Grid -->
                                                                <div class="portfolio-grid three-columns">
                                                                    <?php 
                                                                        $sql = "SELECT * FROM `project`";
                                                                            $result = mysqli_query($conn, $sql);
                                                                            if($result){
                                                                                while($row=mysqli_fetch_assoc($result)){
                                                                                $project_id=$row['project_id'];
                                                                                $category_id=$row['category_id'];

                                                                                $project_img=$row['project_img'];
                                                                                $project_name=$row['project_name'];

                                                                                $encoded = encodeNumber($project_id);

                                                                                $sql2 = "SELECT * FROM `category` where category_id=$category_id";
                                                                                $result2 = mysqli_query($conn, $sql2);
                                                                                $row2=mysqli_fetch_assoc($result2);
                                                                                $category_name=$row2['category_name'];


                                                                    ?>
                                                                    <!-- Portfolio Item -->
                                                                    <figure class="item standard"
                                                                        data-groups='["category_all", &quot;category_<?php echo $category_name?>&quot;]'>
                                                                        <div class="portfolio-item-img">
                                                                            <img width="1280" height="853"
                                                                                style="filter: brightness(90%)"
                                                                                src="./project/<?php echo $project_img?>"
                                                                                class="attachment-portfolio-image-three-c size-portfolio-image-three-c wp-post-image"
                                                                                alt="<?php echo $project_name?>"
                                                                                decoding="async" title=""
                                                                                sizes="(max-width: 768px) 92vw, (max-width: 992px) 450px, (max-width: 1200px) 597px, 25vw," />

                                                                            <a href="details.php?id=<?php echo $encoded?>"></a>
                                                                            <!-- /Image -->
                                                                        </div>


                                                                        <h4 class="name"><?php echo $project_name?></h4>
                                                                        <span
                                                                            class="category"><?php echo $category_name?></span>
                                                                    </figure>
                                                                    <?php 
                                                                                }
                                                                            }
                                                                    ?>
                                                                    <!-- /Portfolio Item -->
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

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

            <footer class="site-footer clearfix">
                <div class="footer-social">
                    <ul class="footer-social-links">
                        <li>
                            <a href="#" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">Instagram</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-copyrights">
                    <p>© 2023 Saieef Sunny.</p>
                </div>
            </footer>
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