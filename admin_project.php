<?php 
include_once("./database/config.php");
date_default_timezone_set('Asia/Dhaka');

session_start();

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if(isset($_POST['submit_certificate'])){

    $title = $_POST['title'];
    $cred_id = $_POST['cred_id'];
    $date = $_POST['date'];
 
    $name = $_FILES['file']['name'];
    $target_dir = "certificate/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");


        $query = "SELECT * FROM `certificate` WHERE img_link = '$name'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {

            $query = "SELECT * FROM `certificate` WHERE title = '$title' AND cred_id = '$cred_id'";
            $query_run = mysqli_query($conn, $query);
            if(!$query_run->num_rows > 0){

                // Check extension
                if( in_array($imageFileType,$extensions_arr) ){

                    // Upload file
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){

                        // Convert to base64 
                        $image_base64 = base64_encode(file_get_contents('certificate/'.$name));
                        $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

                        // Insert record

                        $query2 = "INSERT INTO `certificate`(title,cred_id,`date`,img_link) VALUES ('$title', '$cred_id', '$date', '$name')";
                        $query_run2 = mysqli_query($conn, $query2);
            
                        if ($query_run2) {
                            $cls="success";
                            $error = "Certificate Successfully Added.";
                        } 
                        else {
                            $cls="danger";
                            $error = mysqli_error($conn);
                        }

                    }else{
                        $cls="danger";
                        $error = 'Unknown Error Occurred.';
                    }
                }else{
                    $cls="danger";
                    $error = 'Invalid File Type';
                }
            }
            else{
                $cls="danger";
                $error = "Certificate Already Exists";
            }
            
        }else{
            $cls="danger";
            $error = "Please Change the Image Name";
        }

}


if(isset($_POST['submit_project'])){

    $project_name = $_POST['project_name'];
    $project_link = $_POST['project_link'];
    $project_demo = $_POST['project_demo'];
    $project_subtitle = $_POST['project_subtitle'];
    $purpose = $_POST['purpose'];
    $date = $_POST['date'];
    $category_id = $_POST['category_id'];
    $short_description = $_POST['short_description'];
 
    $name = $_FILES['file']['name'];
    $target_dir = "project/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");


        $query = "SELECT * FROM `project` WHERE project_img = '$name'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {

            $query = "SELECT * FROM `project` WHERE project_name = '$project_name'";
            $query_run = mysqli_query($conn, $query);
            if(!$query_run->num_rows > 0){

                $query = "SELECT * FROM `project` WHERE project_link = '$project_link'";
                $query_run = mysqli_query($conn, $query);
                if(!$query_run->num_rows > 0){
                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){

                        // Upload file
                        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){

                            // Convert to base64 
                            $image_base64 = base64_encode(file_get_contents('project/'.$name));
                            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

                            // Insert record
                            $query2 = "INSERT INTO `project`(category_id, project_img, project_name, project_subtitle, project_link, project_demo, `date`, purpose, short_description) 
                            VALUES ('$category_id', '$name', '$project_name', '$project_subtitle', '$project_link', '$project_demo', '$date', '$purpose', '$short_description')";
                            $query_run2 = mysqli_query($conn, $query2);
                
                            if ($query_run2) {
                                $cls="success";
                                $error = "Project Successfully Added.";
                            } 
                            else {
                                $cls="danger";
                                $error = mysqli_error($conn);
                            }

                        }else{
                            $cls="danger";
                            $error = 'Unknown Error Occurred.';
                        }
                    }else{
                        $cls="danger";
                        $error = 'Invalid File Type';
                    }
                }
                else{
                    $cls="danger";
                    $error = "Project Link Exists";
                }
            }
            else{
                $cls="danger";
                $error = "Project Already Exists";
            }
            
        }else{
            $cls="danger";
            $error = "Please Change the Image Name";
        }

}

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Admin Home - Saieef Sunny</title>
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
                        <a href="index.php\">
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
                                <a href="admin_home.php" aria-current="page" data-hover="1">Home</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="admin_project.php" aria-current="page" data-hover="1">Project</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="admin_detail.php" aria-current="page" data-hover="1">Project Details</a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174 current-menu-item">
                                <a href="logout.php" aria-current="page" data-hover="1">Logout</a>
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
                            <article id="post-157" class="post-157 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="fw-page-builder-content">
                                        <section class="fw-main-row ">
                                            <div class="container">

                                                <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                        <p class="login-text"
                                                            style="font-size: 1.5rem; font-weight: 800;">
                                                            Add Project</p>
                                                        <div class="alert alert-<?php echo $cls;?>">
                                                            <?php 
                                                                if (isset($_POST['submit_project'])){
                                                                    echo $error;
                                                                }
                                                            ?>
                                                        </div>
                                                        <form action="" method="post" enctype='multipart/form-data'>
                                                            <div class="form-group">
                                                                <label>Project Image</label>
                                                                <input type="file" name="file" id="file"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Project Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="project_name" id="project_name"
                                                                    placeholder="Project Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Project Subtitle</label>
                                                                <input type="text" class="form-control"
                                                                    name="project_subtitle" id="project_subtitle"
                                                                    placeholder="Project Subtitle">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Category</label>
                                                                <select class="form-control" id="category_id"
                                                                    name="category_id" required>
                                                                    <option>-- Select Category --</option>
                                                                    <?php
                                                                        $br_option = "SELECT * FROM category";
                                                                        $br_option_run = mysqli_query($conn, $br_option);

                                                                        if (mysqli_num_rows($br_option_run) > 0) {
                                                                            foreach ($br_option_run as $row2) {
                                                                    ?>
                                                                    <option value="<?php echo $row2['category_id']; ?>">
                                                                        <?php echo $row2['category_name']; ?> </option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Project Link</label>
                                                                <input type="text" class="form-control"
                                                                    name="project_link" id="project_link"
                                                                    placeholder="Project Link">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Project Demo</label>
                                                                <input type="text" class="form-control"
                                                                    name="project_demo" id="project_demo"
                                                                    placeholder="Project Demo">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" class="form-control" name="date"
                                                                    id="date" placeholder="Date">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Purpose</label>
                                                                <input type="text" class="form-control" name="purpose"
                                                                    id="purpose" placeholder="Purpose">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Short Description</label>
                                                                <textarea class="form-control" name="short_description"
                                                                    id="short_description"
                                                                    placeholder="Short Description" rows="8"></textarea>

                                                            </div>
                                                            <button name="submit_project" class="btn btn-primary">Add
                                                                Project</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                        <p class="login-text"
                                                            style="font-size: 1.5rem; font-weight: 800;">
                                                            Add Certificate</p>
                                                        <div class="alert alert-<?php echo $cls;?>">
                                                            <?php 
                                                                if (isset($_POST['submit_certificate'])){
                                                                    echo $error;
                                                                }
                                                            ?>
                                                        </div>
                                                        <form action="" method="post" enctype='multipart/form-data'>
                                                            <div class="form-group">
                                                                <label>Cirtificate Image</label>
                                                                <input type="file" name="file" id="file"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Cirtificate Title</label>
                                                                <input type="text" class="form-control" name="title"
                                                                    id="title" placeholder="Cirtificate Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Credencial ID</label>
                                                                <input type="text" class="form-control" name="cred_id"
                                                                    id="cred_id" placeholder="Credencial ID">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" class="form-control" name="date"
                                                                    id="date" placeholder="Date">
                                                            </div>
                                                            <button name="submit_certificate"
                                                                class="btn btn-primary">Add Certificate</button>
                                                        </form>

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