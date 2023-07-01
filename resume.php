<?php 
include_once("./database/config.php");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/styles.min.css' />

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

                        <div id="content" class="page-content site-content single-post" role="main">

                            <div class="entry-content">
                                <div class="fw-page-builder-content">
                                    <section class="fw-main-row ">
                                        <div class="fw-container">
                                            <div id="reshome_content" class="reshome-content">
                                                <div class="row flex-v-align">
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="reshome-photo">
                                                            <div class="reshp-inner"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-md-8 col-lg-8">
                                                        <div class="reshome-text hp-left" style="text-align:left">
                                                            <div class="owl-carousel text-rotation">
                                                                <div class="item">
                                                                    <h4>Full Stack Web Developer.</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>UI/UX Designer.</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>Android Developer.</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>Graphics Designer.</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>Machine Learning Engineer.</h4>
                                                                </div>
                                                            </div>
                                                            <h1>Saieef Sunny</h1>
                                                            <p>Hello! I'm Saieef Sarower Sunny, a versatile BSc
                                                                graduate with expertise in Full Stack Web
                                                                Development, Graphic Design, UI/UX Design, Machine
                                                                Learning Engineering, and Android Development. I am
                                                                based in Dhaka, Bangladesh, and I am passionate
                                                                about creating innovative and user-friendly digital
                                                                experiences.</p>
                                                            <div class="reshome-buttons">
                                                                <a href="" target="_blank"
                                                                    class="btn btn-primary">Download CV</a>
                                                                <a href="" target="_self"
                                                                    class="btn btn-secondary">Contact</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:5%">
                                                <div class=" col-xs-12 col-sm-12 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="fw-divider-space" style="padding-top: 50px;">
                                                        </div>

                                                        <div class="block-title">
                                                            <h2>What I Do</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--whhat do i do-->
                                            <div class="row">


                                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="info-list-w-icon">

                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa fa-laptop-code"></i>


                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>Full-Stack Web Development</h4>
                                                                    <p>With expertise in Bootstrap, MySQL, and Pup,
                                                                        I craft dynamic and responsive websites that
                                                                        deliver a seamless user experience.
                                                                        Additionally, I possess proficiency in React
                                                                        and Vite, enabling me to build modern and
                                                                        interactive web applications. Explore my
                                                                        GitHub for a glimpse into my diverse range
                                                                        of web development projects.</p>
                                                                </div>
                                                            </div>
                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa-solid fa-robot"></i>
                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>Machine Learning</h4>
                                                                    <p>As a machine learning engineer, I have
                                                                        developed software for disease prediction,
                                                                        ensemble learning, and deep learning
                                                                        applications. Currently, I'm working on
                                                                        cutting-edge projects involving NLP and
                                                                        image processing. Check out my GitHub and
                                                                        Kaggle profiles for a glimpse into my
                                                                        machine learning projects, where innovation
                                                                        meets data-driven solutions.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="info-list-w-icon">

                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa-brands fa-figma"></i>
                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>UI/UX Design</h4>
                                                                    <p>Creating intuitive and visually appealing
                                                                        user interfaces is my passion. Through my
                                                                        designs, I strive to enhance user
                                                                        experiences and optimize usability. Discover
                                                                        my expertise in UI/UX design on my Dribbble
                                                                        and Behance profiles, where you'll find
                                                                        projects that showcase my ability to combine
                                                                        aesthetics with functionality.</p>
                                                                </div>
                                                            </div>
                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa-solid fa-dragon"></i>
                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>Graphic Design</h4>
                                                                    <p>From captivating logos to eye-catching
                                                                        posters, I excel in various graphic design
                                                                        domains. With a portfolio showcasing
                                                                        projects like logo design, poster design,
                                                                        phamplate design, and advertisements, you'll
                                                                        witness my creativity and attention to
                                                                        detail. Visit my Dribbble and Behance
                                                                        profiles to explore my visually stunning
                                                                        designs.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="info-list-w-icon">

                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa-brands fa-android"></i>
                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>Android Development</h4>
                                                                    <p>With a focus on Android app development, I
                                                                        create robust and user-friendly mobile
                                                                        applications. Through my expertise in
                                                                        Android Studio and Java, I ensure seamless
                                                                        functionality and exceptional user
                                                                        experiences. Explore my GitHub to discover
                                                                        the diverse range of Android projects I have
                                                                        worked on, showcasing my ability to
                                                                        transform ideas into reality.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="info-block-w-icon">
                                                                <div class="ci-icon">
                                                                    <i class="fa-solid fa-briefcase"></i>
                                                                </div>
                                                                <div class="ci-text">
                                                                    <h4>Freelancing</h4>
                                                                    <p>As a freelancer, I have successfully
                                                                        completed numerous projects in web
                                                                        development, graphic design, UI/UX design,
                                                                        and machine learning engineering. While most
                                                                        of my work has been for local clients, you
                                                                        can find a selection of my projects on my
                                                                        GitHub profile. I am always open to new
                                                                        opportunities and challenges, so feel free
                                                                        to reach out for collaborations.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--edu and exp-->

                                            <div class="row" style="margin-top:7%">

                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Education</h2>
                                                        </div>


                                                        <div class="timeline clearfix">
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">2018 - 2022</h5><br>
                                                                <h4 class="item-title">Bachelor in Computer Science
                                                                </h4>
                                                                <span class="item-company">University of Liberal
                                                                    Arts Bangladesh</span>
                                                                <span class="item-company" style="float:right">CGPA:
                                                                    3.65/4.00</span>
                                                                <div class="text">
                                                                    Throughout my undergraduate studies, I delved
                                                                    into various aspects of computer science,
                                                                    gaining a solid foundation in programming,
                                                                    algorithms, and software development. With a
                                                                    focus on practical applications, I worked on
                                                                    diverse projects that honed my problem-solving
                                                                    skills and fostered a passion for innovation.
                                                                </div>

                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">2015 - 2017</h5><br>
                                                                <h4 class="item-title">Higher Secondary Certicate
                                                                </h4>
                                                                <span class="item-company">Mohammadpur Central
                                                                    University College</span>
                                                                <span class="item-company" style="float:right">GPA:
                                                                    4.08/5.00</span>
                                                                <div class="text">
                                                                    During my higher secondary education, I explored
                                                                    subjects ranging from mathematics to computer
                                                                    science. This period exposed me to the
                                                                    fundamentals of programming and problem-solving,
                                                                    nurturing my curiosity and igniting my desire to
                                                                    pursue a career in technology.</div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">2013 - 2015</h5><br>
                                                                <h4 class="item-title">Secondary School Certicate
                                                                </h4>
                                                                <span class="item-company">Mohammadpur Govt. High
                                                                    School</span>
                                                                <span class="item-company" style="float:right">GPA:
                                                                    4.39/5.00</span>
                                                                <div class="text">
                                                                    My secondary school education provided a solid
                                                                    academic foundation and instilled in me a strong
                                                                    work ethic. It was during this time that I
                                                                    discovered my passion for computer science and
                                                                    began exploring programming languages, fueling
                                                                    my drive to pursue a career in the field.</div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Experience</h2>
                                                        </div>


                                                        <div class="timeline clearfix">
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period "> February 2022 - October
                                                                    202</h5><br>
                                                                <h4 class="item-title">Teachers Assistant</h4>
                                                                <span class="item-company"
                                                                    style="margin-top:0; padding-top:0;">University
                                                                    of Liberal Arts Bangladesh</span>
                                                                <div class="text">
                                                                    Accomplishments:
                                                                    <ul style="margin-top:0; padding-top:5px;">
                                                                        <li>Assisted teachers in classroom
                                                                            management and student support</li>
                                                                        <li>Created educational materials and aids
                                                                        </li>
                                                                        <li>Conducted tutoring sessions to improve
                                                                            student performance</li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period "> July 2021 - November 2021
                                                                </h5><br>
                                                                <h4 class="item-title">Junior Software Developer</h4>
                                                                <span class="item-company">i1Class.com</span>
                                                                <div class="text">
                                                                    Accomplishments:
                                                                    <ul style="margin-top:0; padding-top:5px;">
                                                                        <li>Effectively managed and maintained the web
                                                                            system, ensuring its smooth operation.</li>

                                                                        <li>Played a vital role in training employees on
                                                                            the efficient utilization of the web system.
                                                                        </li>
                                                                        <li>Successfully optimized website SEO,
                                                                            resulting in a 12% increase in organic
                                                                            traffic.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>


                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">December 2019 - May 2020
                                                                </h5><br>
                                                                <h4 class="item-title">PR and Creative Executive
                                                                </h4>
                                                                <span class="item-company">Center for Excellence in
                                                                    Teaching and Learning, ULAB</span>
                                                                <div class="text">
                                                                    Accomplishments:
                                                                    <ul style="margin-top:0; padding-top:5px;">
                                                                        <li>Successfully executed PR campaigns,
                                                                            resulting in increased brand visibility.
                                                                        </li>
                                                                        <li>Designed and produced engaging
                                                                            promotional materials for events and
                                                                            workshops.</li>
                                                                        <li>Coordinated social media strategies to
                                                                            enhance online presence.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">


                                                <div class=" col-xs-12 col-sm-12 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="fw-divider-space" style="padding-top: 20px;">
                                                        </div>

                                                        <div class="block-title">
                                                            <h2>Certificates</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--certificate-->
                                            <div class="row">
                                                <?php 
                                                            $sql = "SELECT * FROM `certificate`";
                                                                $result = mysqli_query($conn, $sql);
                                                                if($result){
                                                                    while($row=mysqli_fetch_assoc($result)){
                                                                    $certificate_id=$row['certificate_id'];

                                                                    $title=$row['title'];
                                                                    $cred_id=$row['cred_id'];
                                                                    $date=$row['date'];
                                                                    $img_link=$row['img_link'];

                                                        ?>

                                                <div class=" col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <a href="certificate/<?php echo $img_link?>" class="lightbox">
                                                            <div class="certificate-item clearfix">
                                                                <div class="certi-logo">
                                                                    <img src="certificate/<?php echo $img_link?>"
                                                                        alt="logo">
                                                                </div>
                                                                <div class="certi-content">
                                                                    <div class="certi-title">
                                                                        <h4><?php echo $title?></h4>
                                                                    </div>
                                                                    <div class="certi-id">
                                                                        <span>Credential ID:
                                                                            <?php echo $cred_id?></span>
                                                                    </div>
                                                                    <div class="certi-date">
                                                                        <span><?php echo $date?></span>
                                                                    </div>
                                                                    <div class="certi-company">
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>

                                                    </div>

                                                </div>

                                                <?php 
                                                                }
                                                            }
                                                        ?>
                                            </div>

                                            <div class="row" style="margin-top:5%">


                                                <div class=" col-xs-12 col-sm-12 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="fw-divider-space" style="padding-top: 40px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--skill-->
                                            <div class="row">


                                                <div class=" col-xs-12 col-sm-6 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Design Skills</h2>
                                                        </div>


                                                        <div class="skills-info skills-first-style">
                                                            <div class="clearfix">
                                                                <h4>UI/UX Design</h4>
                                                                <div class="skill-value">95%</div>
                                                            </div>
                                                            <div data-value="95" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 95%;">
                                                                </div>
                                                            </div>

                                                            <div class="clearfix">
                                                                <h4>Graphic Design</h4>
                                                                <div class="skill-value">90%</div>
                                                            </div>
                                                            <div data-value="75" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 90%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>Branding and Identity Design</h4>
                                                                <div class="skill-value">100%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>Adobe Photoshop</h4>
                                                                <div class="skill-value">95%</div>
                                                            </div>
                                                            <div data-value="85" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 95%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>Adobe Illustrator</h4>
                                                                <div class="skill-value">95%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 95%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>Adobe XD</h4>
                                                                <div class="skill-value">95%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 95%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>Figma</h4>
                                                                <div class="skill-value">85%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 85%;">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" col-xs-12 col-sm-6 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Coding Skills</h2>
                                                        </div>


                                                        <div class="skills-info skills-first-style">
                                                            <div class="clearfix">
                                                                <h4>Python</h4>
                                                                <div class="skill-value">88%</div>
                                                            </div>
                                                            <div data-value="100" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 88%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>HTML / CSS</h4>
                                                                <div class="skill-value">95%</div>
                                                            </div>
                                                            <div data-value="100" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 95%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>JavaScript</h4>
                                                                <div class="skill-value">80%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 80%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>PHP</h4>
                                                                <div class="skill-value">90%</div>
                                                            </div>
                                                            <div data-value="90" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 90%;">
                                                                </div>
                                                            </div>

                                                            <div class="clearfix">
                                                                <h4>Java</h4>
                                                                <div class="skill-value">85%</div>
                                                            </div>
                                                            <div data-value="100" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 85%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>C/C++</h4>
                                                                <div class="skill-value">90%</div>
                                                            </div>
                                                            <div data-value="100" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 90%;">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                                <h4>React</h4>
                                                                <div class="skill-value">75%</div>
                                                            </div>
                                                            <div data-value="85" data-color="#54ca95"
                                                                class="skill-container">
                                                                <div class="skill-percentage" style="width: 75%;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:7%">

                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Extracurricular Activities</h2>
                                                        </div>


                                                        <div class="timeline clearfix">

                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">June 2023</h5><br>
                                                                <h4 class="item-title">IELTS Exam
                                                                </h4>
                                                                <span class="item-company">British Council</span>
                                                                <span class="item-company" style="float:right">Band:
                                                                    7.00</span>
                                                                <div class="text">
                                                                    In addition to my academic pursuits, I undertook
                                                                    the International English Language Testing
                                                                    System (IELTS) exam and achieved a score of 7.
                                                                    This test assessed my proficiency in the English
                                                                    language, covering areas such as listening,
                                                                    reading, writing, and speaking. This
                                                                    accomplishment demonstrates my ability to
                                                                    effectively communicate and comprehend complex
                                                                    ideas in English, enhancing my versatility and
                                                                    global outlook.
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">January 2022</h5><br>
                                                                <h4 class="item-title">Member of IEEE and Computer
                                                                    Society
                                                                </h4>
                                                                <span class="item-company"> Institute of Electrical
                                                                    and Electronics Engineers (IEEE)</span>
                                                                <div class="text">
                                                                    Since 2021, I have been an active member of the
                                                                    Institute of Electrical and Electronics
                                                                    Engineers (IEEE), a renowned global community of
                                                                    professionals in the field of technology. During
                                                                    my higher secondary education, I explored
                                                                    subjects ranging from mathematics to computer
                                                                    science, which laid the foundation for my
                                                                    passion for technology and my commitment to
                                                                    continuous learning and professional growth.
                                                                </div>
                                                            </div>


                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">March 2020 - October 2022
                                                                </h5><br>
                                                                <h4 class="item-title">Former Member ULAB
                                                                    Computer Programming Club
                                                                </h4>
                                                                <span class="item-company">ULAB
                                                                    Computer Programming Club (UCPC)</span>

                                                                <div class="text">
                                                                    As an active member of the ULAB Computer
                                                                    Programming Club
                                                                    during my higher secondary education, I engaged
                                                                    in various programming-related activities and
                                                                    projects. This experience provided me with
                                                                    invaluable opportunities to collaborate, learn
                                                                    from peers, and further develop my programming
                                                                    skills. It strengthened my passion for
                                                                    technology and solidified my commitment to a
                                                                    career in the field.</div>
                                                            </div>

                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">March 2020 - October 2022
                                                                </h5><br>
                                                                <h4 class="item-title">Former Member ULAB Indoor
                                                                    Games Club
                                                                </h4>
                                                                <span class="item-company">ULAB Indoor
                                                                    Games Club (UIGC)</span>

                                                                <div class="text">
                                                                    During my higher secondary education, I actively
                                                                    participated in the ULAB Indoor Games Club as a
                                                                    member. I honed my skills in badminton and table
                                                                    tennis, regularly participating in club
                                                                    activities and tournaments. Additionally, I
                                                                    actively engaged in the club's general meetings,
                                                                    fostering teamwork, leadership, and a sense of
                                                                    camaraderie. These experiences further shaped my
                                                                    holistic development and instilled in me the
                                                                    importance of balance in life.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Volenteer Works</h2>
                                                        </div>


                                                        <div class="timeline clearfix">
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">8 September 2022</h5>
                                                                <br>
                                                                <h4 class="item-title">Seminar Volenteer: Cyber Security
                                                                    Seminar</h4>
                                                                <span class="item-company">University of Liberal Arts
                                                                    Bangladesh</span>
                                                                <div class="text">
                                                                    <ul style="margin-top:0; padding-top:0;">
                                                                        <li> Successfully volunteered at the Cyber
                                                                            Security Seminar, assisting in educating
                                                                            students about the importance of online
                                                                            safety and security.</li>
                                                                        <li> Effectively managed the crowd and ensured
                                                                            smooth attendance during the event,
                                                                            contributing to a well-organized and
                                                                            engaging experience for participants.
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">27 August 2022</h5>
                                                                <br>
                                                                <h4 class="item-title">Workshop Volenteer: Writing a
                                                                    Scientific Research Paper Using LaTeX </h4>
                                                                <span class="item-company">University of Liberal Arts
                                                                    Bangladesh</span>
                                                                <div class="text">
                                                                    <ul style="margin-top:0; padding-top:0;">
                                                                        <li>Successfully managed and organized the crowd
                                                                            during the workshop, ensuring a smooth and
                                                                            engaging learning experience for all
                                                                            participants.</li>
                                                                        <li>Provided valuable assistance and guidance to
                                                                            students throughout the workshop, addressing
                                                                            their queries and helping them overcome
                                                                            challenges in using LaTeX for their research
                                                                            papers.
                                                                        </li>
                                                                        <li>Assisted students in learning and using
                                                                            LaTeX effectively for scientific research
                                                                            paper writing.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">10 August 2022</h5>
                                                                <br>
                                                                <h4 class="item-title">Seminar Volenteer: IT Career
                                                                    Opportunities in Japan</h4>
                                                                <span class="item-company">University of Liberal Arts
                                                                    Bangladesh</span>
                                                                <div class="text">
                                                                    <ul style="margin-top:0; padding-top:0;">
                                                                        <li>Conducted informative and well-received
                                                                            information seminars, effectively conveying
                                                                            the benefits of volunteering and encouraging
                                                                            student participation.</li>
                                                                        <li>Ensured smooth and efficient catering and
                                                                            crowd management during the events, creating
                                                                            a positive and enjoyable experience for all
                                                                            attendees.
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period ">7 March 2020</h5>
                                                                <br>
                                                                <h4 class="item-title">Seminar Volunteer: Quality
                                                                    Teaching and
                                                                    Learning Workshop</h4>
                                                                <span class="item-company">Center for Excellence in
                                                                    Teaching and Learning, ULAB</span>
                                                                <div class="text">
                                                                    <ul style="margin-top:0; padding-top:0;">
                                                                        <li>Actively listened to students' problems and
                                                                            provided effective solutions during the
                                                                            Quality Teaching and Learning Workshop.</li>
                                                                        <li>Successfully facilitated open and engaging
                                                                            discussions with students, creating a safe
                                                                            space for them to express their concerns and
                                                                            share their ideas.
                                                                        </li>
                                                                        <li>Ensured smooth and efficient catering
                                                                            arrangements, contributing to a positive and
                                                                            comfortable experience for all participants
                                                                            at the event.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="timeline-item clearfix">
                                                                <h5 class="item-period "> 22-23 January 2020</h5>
                                                                <br>
                                                                <h4 class="item-title">Workshop
                                                                    Volenteer: Moodle Training Workshop
                                                                </h4>
                                                                <span class="item-company">Center for Excellence in
                                                                    Teaching and Learning, ULAB</span>
                                                                <div class="text">
                                                                    <ul style="margin-top:0; padding-top:0;">
                                                                        <li>Assisted in organizing and facilitating
                                                                            Moodle Training Workshops, ensuring a smooth
                                                                            and efficient learning experience for
                                                                            participants.</li>
                                                                        <li>Provided valuable support to workshop
                                                                            attendees, addressing their questions and
                                                                            concerns regarding Moodle usage and
                                                                            troubleshooting technical issues.
                                                                        </li>
                                                                        <li>Collaborated with the workshop team to
                                                                            develop comprehensive training materials and
                                                                            resources, contributing to the overall
                                                                            success of the training program.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">


                                                <div class=" col-xs-12 col-sm-12 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="block-title">
                                                            <h2>Interests</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class=" col-xs-12 col-sm-6 col-md-3 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="lm-info-block gray-default">
                                                            <i class="fa-solid fa-futbol"></i>
                                                            <h3>Sports</h3>
                                                            <span class="lm-info-block-text"></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" col-xs-12 col-sm-6 col-md-3 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="lm-info-block gray-default">
                                                            <i class="fa-solid fa-music"></i>
                                                            <h3>Music</h3>
                                                            <span class="lm-info-block-text"></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" col-xs-12 col-sm-6 col-md-3 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="lm-info-block gray-default">
                                                            <i class="fa-solid fa-plane"></i>
                                                            <h3>Traveling</h3>
                                                            <span class="lm-info-block-text"></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class=" col-xs-12 col-sm-6 col-md-3">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="lm-info-block gray-default">
                                                            <i class="fa-solid fa-gamepad"></i>
                                                            <h3>Video Games</h3>
                                                            <span class="lm-info-block-text"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top:5%">


                                                <div class=" col-xs-12 col-sm-12 ">
                                                    <div class="fw-col-inner" data-paddings="0px 0px 0px 0px">

                                                        <div class="fw-divider-space" style="padding-top: 20px;">
                                                        </div>

                                                        <div class="block-title">
                                                            <h2>References</h2>
                                                        </div>


                                                        <div id="testimonials" class="testimonials owl-carousel"
                                                            data-mobile-items="1" data-tablet-items="2" data-items="2">

                                                            <div class="testimonial-item testimonial-testimonials">

                                                                <!-- Testimonial Content -->
                                                                <div class="testimonial-content">
                                                                    <!-- Picture -->
                                                                    <div class="testimonial-picture">
                                                                        <img src="img/kibriya sir.jpg" alt="" />
                                                                    </div>
                                                                    <!-- /Picture -->

                                                                    <!-- Testimonial Text -->
                                                                    <div class="testimonial-text">
                                                                        <p>Saieef Sarower has been an exceptional
                                                                            student and TA during his time in our
                                                                            department. His dedication, expertise in
                                                                            algorithms and operating systems, and
                                                                            ability to effectively communicate
                                                                            complex concepts have made him an
                                                                            invaluable asset. His commitment to
                                                                            excellence is commendable, and I have no
                                                                            doubt he will excel in his future
                                                                            endeavors.</p>
                                                                    </div>
                                                                    <!-- /Testimonial Text -->

                                                                    <!-- Testimonial author information -->
                                                                    <div class="testimonial-author-info">
                                                                        <h5 class="testimonial-author">Muhammad
                                                                            Golam Kibria, PhD
                                                                        </h5>
                                                                        <p class="testimonial-firm">Associate
                                                                            Professor & Department Head | CSE
                                                                            Department, ULAB
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial author information -->

                                                                    <div class="testimonial-icon">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>

                                                                    <div class="testimonial-icon-big">
                                                                        <i class="fa fa-quote-right"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /Testimonial Content -->

                                                            </div>


                                                            <div class="testimonial-item testimonial-testimonials">

                                                                <!-- Testimonial Content -->
                                                                <div class="testimonial-content">
                                                                    <!-- Picture -->
                                                                    <div class="testimonial-picture">
                                                                        <img src="img/nafees sir.jpg" alt="" />
                                                                    </div>
                                                                    <!-- /Picture -->

                                                                    <!-- Testimonial Text -->
                                                                    <div class="testimonial-text">
                                                                        <p>Saieef was an exceptional TA during our
                                                                            time together. His depth of knowledge in
                                                                            database systems and automata theory was
                                                                            evident in his teaching and assistance
                                                                            to students. He displayed strong
                                                                            analytical skills and effectively
                                                                            communicated complex concepts. Saieef's
                                                                            dedication and expertise greatly
                                                                            contributed to the success of our
                                                                            courses.
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial Text -->

                                                                    <!-- Testimonial author information -->
                                                                    <div class="testimonial-author-info">
                                                                        <h5 class="testimonial-author">Nafees
                                                                            Mansoor, PhD
                                                                        </h5>
                                                                        <p class="testimonial-firm">Associate
                                                                            Professor, CSE Department, ULAB
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial author information -->

                                                                    <div class="testimonial-icon">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>

                                                                    <div class="testimonial-icon-big">
                                                                        <i class="fa fa-quote-right"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /Testimonial Content -->

                                                            </div>

                                                            <div class="testimonial-item testimonial-testimonials">

                                                                <!-- Testimonial Content -->
                                                                <div class="testimonial-content">
                                                                    <!-- Picture -->
                                                                    <div class="testimonial-picture">
                                                                        <img src="img/farhana mam.jpg" alt="" />
                                                                    </div>
                                                                    <!-- /Picture -->

                                                                    <!-- Testimonial Text -->
                                                                    <div class="testimonial-text">
                                                                        <p>
                                                                            Saieef's dedication and skills in
                                                                            developing our online code editor
                                                                            project were remarkable. He consistently
                                                                            demonstrated a deep understanding of
                                                                            programming concepts and exhibited
                                                                            excellent problem-solving abilities. His
                                                                            commitment to delivering a high-quality
                                                                            solution, coupled with his strong work
                                                                            ethic, made him an invaluable asset to
                                                                            the team.
                                                                            Impressive work!</p>
                                                                    </div>
                                                                    <!-- /Testimonial Text -->

                                                                    <!-- Testimonial author information -->
                                                                    <div class="testimonial-author-info">
                                                                        <h5 class="testimonial-author">Dr. Farhana
                                                                            Sarker
                                                                        </h5>
                                                                        <p class="testimonial-firm">
                                                                            Associate Professor, CSE Department,
                                                                            ULAB
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial author information -->

                                                                    <div class="testimonial-icon">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>

                                                                    <div class="testimonial-icon-big">
                                                                        <i class="fa fa-quote-right"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /Testimonial Content -->

                                                            </div>


                                                            <div class="testimonial-item testimonial-testimonials">

                                                                <!-- Testimonial Content -->
                                                                <div class="testimonial-content">
                                                                    <!-- Picture -->
                                                                    <div class="testimonial-picture">
                                                                        <img src="img/tareq sir.jpg" alt="" />
                                                                    </div>
                                                                    <!-- /Picture -->

                                                                    <!-- Testimonial Text -->
                                                                    <div class="testimonial-text">
                                                                        <p>Saieef Sarower demonstrated exceptional
                                                                            ethical values and a strong commitment
                                                                            to academic integrity during his time as
                                                                            my student. His work under the CETL
                                                                            showcased his dedication to promoting
                                                                            excellence in education. He consistently
                                                                            displayed professionalism and a deep
                                                                            understanding of ethical principles in
                                                                            his academic endeavors.</p>
                                                                    </div>
                                                                    <!-- /Testimonial Text -->

                                                                    <!-- Testimonial author information -->
                                                                    <div class="testimonial-author-info">
                                                                        <h5 class="testimonial-author">Mohammad
                                                                            Tareque Rahman, PhD
                                                                        </h5>
                                                                        <p class="testimonial-firm">Director, Center
                                                                            for Excellence in Teaching and Learning,
                                                                            Associate Professor, GED Department
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial author information -->

                                                                    <div class="testimonial-icon">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>

                                                                    <div class="testimonial-icon-big">
                                                                        <i class="fa fa-quote-right"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /Testimonial Content -->

                                                            </div>

                                                            <div class="testimonial-item testimonial-testimonials">

                                                                <!-- Testimonial Content -->
                                                                <div class="testimonial-content">
                                                                    <!-- Picture -->
                                                                    <div class="testimonial-picture">
                                                                        <img src="img/ajad sir.jpg" alt="" />
                                                                    </div>
                                                                    <!-- /Picture -->

                                                                    <!-- Testimonial Text -->
                                                                    <div class="testimonial-text">
                                                                        <p>
                                                                            Saieef Sarower is an exceptional student
                                                                            and a dedicated Teaching Assistant. His
                                                                            strong grasp of mathematics, combined
                                                                            with his excellent communication skills,
                                                                            made him an invaluable asset in the
                                                                            classroom. Saieef's commitment to
                                                                            helping his peers understand complex
                                                                            concepts truly set him apart. I have no
                                                                            doubt he will excel in his future
                                                                            endeavors.</p>
                                                                    </div>
                                                                    <!-- /Testimonial Text -->

                                                                    <!-- Testimonial author information -->
                                                                    <div class="testimonial-author-info">
                                                                        <h5 class="testimonial-author">T. M. Abul
                                                                            Kalam Azad, PhD
                                                                        </h5>
                                                                        <p class="testimonial-firm">
                                                                            Associate Professor, CSE Department,
                                                                            ULAB
                                                                        </p>
                                                                    </div>
                                                                    <!-- /Testimonial author information -->

                                                                    <div class="testimonial-icon">
                                                                        <i class="fa fa-quote-left"></i>
                                                                    </div>

                                                                    <div class="testimonial-icon-big">
                                                                        <i class="fa fa-quote-right"></i>
                                                                    </div>
                                                                </div>
                                                                <!-- /Testimonial Content -->

                                                            </div>
                                                        </div>

                                                        <div class="fw-divider-space" style="padding-top: 20px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- .entry-content -->

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

    <script type='text/javascript' src='js/bootstrap.min.js' </script> <script
        src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script>
        var typed = new Typed('#subtitle', {
            strings: ['Full Stack Web Developer.', 'UI/UX Designer.', 'Android Developer',
                'Graphics Designer',
                'Machine Learning Engineer.'
            ],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });
    </script>
</body>

</html>