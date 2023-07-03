<?php
include_once("./database/config.php");


$encoded= $_GET['id'];

function encodeNumber($number) {
    $encodedString = base64_encode($number);
    return strrev($encodedString);
}

function decodeString($encodedString) {
    $reversedString = strrev($encodedString);
    return base64_decode($reversedString);
}

$project_id = decodeString($encoded);

$sql = "SELECT * FROM project WHERE project_id='$project_id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$category_id=$row['category_id'];
$project_name=$row['project_name'];
$project_img=$row['project_img'];
$project_subtitle=$row['project_subtitle'];
$project_link=$row['project_link'];
$project_demo=$row['project_demo'];
$purpose=$row['purpose'];
$date=$row['date'];
$short_description=$row['short_description'];


$sql2 = "SELECT * FROM category WHERE category_id='$category_id'";
$result2 = mysqli_query($conn, $sql2);
$row2=mysqli_fetch_assoc($result2);

$category_name=$row2['category_name'];


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
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="index.php" aria-current="page" data-hover="1">Home</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="resume.php" aria-current="page" data-hover="1">Resume</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="portfolio.php" aria-current="page" data-hover="1">Portfolio</a>
                            </li>
                            <li
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

                        <article id="post-73"
                            class="post-73 fw-portfolio type-fw-portfolio status-publish has-post-thumbnail hentry fw-portfolio-category-detailed">

                            <div class="entry-content">
                                <div id="portfolio-page" class="portfolio-page-content">
                                    <div class="portfolio-page-wrapper">


                                        <div class="portfolio-page-title" style="margin-top:0">
                                            <h1><?php echo $project_name.": ".$project_subtitle?></h1>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-7 portfolio-block">
                                                <div class="owl-carousel portfolio-page-carousel">
                                                    <img src="./project/<?php echo $project_img?>" alt="image" />
                                                    <?php 
                                                            $sql = "SELECT * FROM `project_img` where project_id = $project_id";
                                                                $result = mysqli_query($conn, $sql);
                                                                if($result){
                                                                    while($row=mysqli_fetch_assoc($result)){
                                                                    
                                                                    $img_link=$row['img_link'];

                                                        ?>
                                                    <img src="./project/<?php echo $img_link?>" alt="image" />

                                                    <?php 
                                                                }
                                                            }
                                                    ?>
                                                </div>


                                                <div class="fw-page-builder-content">
                                                    <section class="fw-main-row ">
                                                        <div class="fw-container">
                                                            <div class="row">


                                                                <div class=" col-xs-12 col-sm-12 ">
                                                                    <div id="col_inner" class="fw-col-inner"
                                                                        data-paddings="0px 0px 0px 0px">

                                                                        <div class="block-title" style="margin-top:5%">
                                                                            <h2>Overview</h2>
                                                                        </div>

                                                                        <?php 
                                                                            $sql = "SELECT * FROM `project_description` where project_id = $project_id";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                if($result){
                                                                                    while($row=mysqli_fetch_assoc($result)){
                                                                                    
                                                                                    $description=$row['description'];

                                                                        ?>
                                                                        <p><?php echo $description?></p>
                                                                        <?php
                                                                                    }
                                                                                }
                                                                        ?>


                                                                        <div class="block-title" style="margin-top:5%">
                                                                            <h2>Key Features</h2>
                                                                        </div>
                                                                        <ul>
                                                                            <?php 
                                                                            $sql = "SELECT * FROM `project_feature` where project_id = $project_id";
                                                                                $result = mysqli_query($conn, $sql);
                                                                                if($result){
                                                                                    while($row=mysqli_fetch_assoc($result)){
                                                                                    
                                                                                    $feature_name=$row['feature_name'];

                                                                        ?>
                                                                            <li><?php echo $feature_name?></li>
                                                                            <?php
                                                                                    }
                                                                                }
                                                                        ?>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </section>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-4 portfolio-block">
                                                <!-- Project Description -->
                                                <div class="project-description">
                                                    <div class="block-title">
                                                        <h3>Description</h3>
                                                    </div>
                                                    <div class="text-justify">
                                                        <p><?php echo $short_description?></p>
                                                    </div>
                                                    <ul class="project-general-info">
                                                        <li>
                                                            <p><i class="fa fa-calendar"></i> <?php echo $date?></p>
                                                        </li>
                                                        <li>
                                                            <p><i class="fa fa-user"></i> <?php echo $purpose?></p>
                                                        </li>
                                                        <?php
                                                        if (!empty($project_demo)) {
                                                        ?>
                                                        <li>
                                                            <p><i class="fa fa-eye"></i> <a
                                                                    href="<?php echo $project_demo?>"
                                                                    target="_blank">Project Demo</a></p>
                                                        </li>
                                                        <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        if (!empty($project_link)) {
                                                        ?>
                                                        <li>
                                                            <p><i class="fa-brands fa-github"></i> <a
                                                                    href="<?php echo $project_link?>"
                                                                    target="_blank">&nbsp;&nbsp;Project Demo</a></p>
                                                        </li>
                                                        <?php
                                                        }
                                                        ?>


                                                    </ul>



                                                    <!-- Tags -->
                                                    <div class="tags-block">
                                                        <div class="block-title">
                                                            <h3>Technology</h3>
                                                        </div>
                                                        <ul class="tags">
                                                        <?php 
                                                            $sql = "SELECT * FROM project_tech WHERE project_id=$project_id";
                                                            $result = mysqli_query($conn, $sql);
                                                                if($result){
                                                                    while($row=mysqli_fetch_assoc($result)){
                                                                        $project_id=$row['project_id'];
                                                                        $tech_id=$row['tech_id'];


                                                                        $sql1 = "SELECT * FROM technology WHERE tech_id=$tech_id";
                                                                        $result1 = mysqli_query($conn, $sql1);
                                                                        $row1=mysqli_fetch_assoc($result1);
                                                                        $tech_name=$row1['tech_name'];

                                                                    ?>
                                                            <li><a><?php echo $tech_name?></a></li>
                                                        <?php
                                                                    }
                                                                }
                                                        ?>
                                                        </ul>
                                                    </div>
                                                    <!-- /Tags -->

                                                    <!-- Share Buttons -->
                                                    <div class="share-buttons">
                                                        <div class="block-title">
                                                            <h3>Contacts</h3>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="https://www.linkedin.com/in/saieef-sarower/" style="margin-right:10px"
                                                                class="btn" title="Share on LinkedIn">
                                                                <i class="fa-brands fa-linkedin"></i>
                                                            </a>
                                                            <a href="https://www.facebook.com/saif.sunny23/" class="btn" style="margin-right:10px"
                                                                target="_blank" title="">
                                                                <i class="fa-brands fa-square-facebook"></i>
                                                            </a>

                                                            <a href="https://twitter.com/Saif_Sunny56" class="btn"
                                                                target="_blank" title="">
                                                                <i class="fa-brands fa-square-twitter"></i>
                                                            </a>


                                                        </div>
                                                    </div>
                                                    <!-- /Share Buttons -->
                                                </div>
                                                <!-- /Project Description -->
                                            </div>
                                        </div>
                                        <div class="block-title" style="margin-top:5%">
                                            <h2>Related Projects</h2>
                                        </div>
                                        <!-- Portfolio Grid -->
                                        <div class="portfolio-grid three-columns">
                                            <?php 
                                                                        $sql = "SELECT * FROM `project` where project_id <> $project_id and cartegory = $category_id";
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
                                                    <img width="1280" height="853" style="filter: brightness(80%)"
                                                        src="./project/<?php echo $project_img?>"
                                                        class="attachment-portfolio-image-three-c size-portfolio-image-three-c wp-post-image"
                                                        alt="<?php echo $project_name?>" decoding="async" title=""
                                                        sizes="(max-width: 768px) 92vw, (max-width: 992px) 450px, (max-width: 1200px) 597px, 25vw," />

                                                    <a href="details.php?id=<?php echo $encoded?>"></a>
                                                    <!-- /Image -->
                                                </div>

                                                <i class="fa fa-file-text"></i>


                                                <h4 class="name"><?php echo $project_name?></h4>
                                                <span class="category"><?php echo $category_name?></span>
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
                        </article>
                    </div>
                </div>
            </div>

            <footer class="site-footer clearfix">
                <div class="footer-social">
                    <ul class="footer-social-links">
                        <li>
                            <a href="https://www.linkedin.com/in/saieef-sarower/" target="_blank">LinkedIn</a>
                        </li>

                        <li>
                            <a href="https://www.facebook.com/saif.sunny23/" target="_blank">Facebook</a>
                        </li>

                        <li>
                            <a href="https://twitter.com/Saif_Sunny56" target="_blank">Twitter</a>
                        </li>
                        <li>
                            <a href="https://github.com/SaifSunny" target="_blank">Github</a>
                        </li>
                        <li>
                            <a href="https://www.behance.net/saifsunny56" target="_blank">Behance</a>
                        </li>
                        <li>
                            <a href="https://codepen.io/SaifSunny" target="_blank">Codepen</a>
                        </li>
                        <li>
                            <a href="https://www.fiverr.com/saifsunny56" target="_blank">Fiver</a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/saifsunny56" target="_blank">Dribble</a>
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