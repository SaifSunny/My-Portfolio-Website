<?php 
include_once("./database/config.php");
date_default_timezone_set('Asia/Dhaka');

session_start();

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}


if(isset($_POST['submit_project_img'])){

    $project_id = $_POST['project_id'];

    $name = $_FILES['file']['name'];
    $target_dir = "project/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");


        $query = "SELECT * FROM `project_img` WHERE img_link = '$name'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {
                    // Check extension
                    if( in_array($imageFileType,$extensions_arr) ){

                        // Upload file
                        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){

                            // Convert to base64 
                            $image_base64 = base64_encode(file_get_contents('project/'.$name));
                            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

                            // Insert record
                            $query2 = "INSERT INTO `project_img`(project_id, img_link) VALUES ('$project_id', '$name')";
                            $query_run2 = mysqli_query($conn, $query2);
                
                            if ($query_run2) {
                                $cls="success";
                                $error = "Project Image Successfully Added.";
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
            
        }else{
            $cls="danger";
            $error = "Please Change the Image Name";
        }

}

if(isset($_POST['submit_project_description'])){

    $description = $_POST['description'];
    $project_id = $_POST['project_id'];
    
        $query = "SELECT * FROM project_description WHERE `description` = '$description' AND `project_id` = '$project_id'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {

                        // Insert record

                        $query2 = "INSERT INTO project_description(project_id, `description`)
                        VALUES ('$project_id', '$description')";
                        $query_run2 = mysqli_query($conn, $query2);
            
                        if ($query_run2) {
                            $cls="success";
                            $error = "Description Successfully Added.";
                        } 
                        else {
                            $cls="danger";
                            $error = mysqli_error($conn);
                        }

            
        }else{
            $cls="danger";
            $error = "Description Already Exists";
        }


}

if(isset($_POST['submit_feature'])){

    $feature_name = $_POST['feature_name'];
    $project_id = $_POST['project_id'];
    
        $query = "SELECT * FROM project_feature WHERE `feature_name` = '$feature_name' AND `project_id` = '$project_id'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {

                        // Insert record

                        $query2 = "INSERT INTO project_feature(project_id, `feature_name`)
                        VALUES ('$project_id', '$feature_name')";
                        $query_run2 = mysqli_query($conn, $query2);
            
                        if ($query_run2) {
                            $cls="success";
                            $error = "Feature Successfully Added.";
                        } 
                        else {
                            $cls="danger";
                            $error = mysqli_error($conn);
                        }

            
        }else{
            $cls="danger";
            $error = "Feature Already Exists";
        }


}

if(isset($_POST['submit_project_tech'])){

    $tech_id = $_POST['tech_id'];
    $project_id = $_POST['project_id'];
    
        $query = "SELECT * FROM project_tech WHERE `tech_id` = '$tech_id' AND `project_id` = '$project_id'";
        $query_run = mysqli_query($conn, $query);
        if (!$query_run->num_rows > 0) {

                        // Insert record

                        $query2 = "INSERT INTO project_tech(project_id, `tech_id`)
                        VALUES ('$project_id', '$tech_id')";
                        $query_run2 = mysqli_query($conn, $query2);
            
                        if ($query_run2) {
                            $cls="success";
                            $error = "Technology Successfully Added.";
                        } 
                        else {
                            $cls="danger";
                            $error = mysqli_error($conn);
                        }

            
        }else{
            $cls="danger";
            $error = "Technology Already Exists";
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

                                                <div class="row" style="margin-top: 5%">
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">

                                                        <div>
                                                            <p class="login-text"
                                                                style="font-size: 1.5rem; font-weight: 800; margin-top:5%;">
                                                                Add Project Image</p>

                                                            <form action="" method="post" enctype='multipart/form-data'>
                                                                <div class="alert alert-<?php echo $cls;?>">
                                                                    <?php 
                                                                        if (isset($_POST['submit_project_img'])){
                                                                            echo $error;
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Select Project</label>
                                                                    <select class="form-control" id="project_id"
                                                                        name="project_id" required>
                                                                        <option>-- Select Project --</option>
                                                                        <?php
                                                                        $br_option = "SELECT * FROM project";
                                                                        $br_option_run = mysqli_query($conn, $br_option);

                                                                        if (mysqli_num_rows($br_option_run) > 0) {
                                                                            foreach ($br_option_run as $row2) {
                                                                    ?>
                                                                        <option
                                                                            value="<?php echo $row2['project_id']; ?>">
                                                                            <?php echo $row2['project_name']; ?>
                                                                        </option>
                                                                        <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Project Image</label>
                                                                    <input type="file" name="file" id="file"
                                                                        class="form-control">
                                                                </div>
                                                                <button name="submit_project_img"
                                                                    class="btn btn-primary">Add
                                                                    Project Image</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                                        <div>
                                                            <p class="login-text"
                                                                style="font-size: 1.5rem; font-weight: 800;">
                                                                Add Project Description</p>

                                                            <form action="" method="post" enctype='multipart/form-data'>
                                                                <div class="alert alert-<?php echo $cls;?>">
                                                                    <?php 
                                                                        if (isset($_POST['submit_project_description'])){
                                                                            echo $error;
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Select Project</label>
                                                                    <select class="form-control" id="project_id"
                                                                        name="project_id" required>
                                                                        <option>-- Select Project --</option>
                                                                        <?php
                                                                            $br_option = "SELECT * FROM project";
                                                                            $br_option_run = mysqli_query($conn, $br_option);

                                                                            if (mysqli_num_rows($br_option_run) > 0) {
                                                                                foreach ($br_option_run as $row2) {
                                                                        ?>
                                                                        <option
                                                                            value="<?php echo $row2['project_id']; ?>">
                                                                            <?php echo $row2['project_name']; ?>
                                                                        </option>
                                                                        <?php
                                                                                }
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Description</label>
                                                                    <textarea class="form-control" name="description"
                                                                        id="description" placeholder="Description"
                                                                        rows="12"></textarea>

                                                                </div>
                                                                <button name="submit_project_description"
                                                                    class="btn btn-primary">Add
                                                                    Project Description</button>
                                                            </form>


                                                        </div>

                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">

                                                        <p class="login-text"
                                                            style="font-size: 1.5rem; font-weight: 800; margin-top:5%;">
                                                            Add Features</p>
                                                        <div class="alert alert-<?php echo $cls;?>">
                                                            <?php 
                                                                if (isset($_POST['submit_feature'])){
                                                                    echo $error;
                                                                }
                                                            ?>
                                                        </div>
                                                        <form action="" method="post" enctype='multipart/form-data'>
                                                            <div class="form-group">
                                                                <label>Select Project</label>
                                                                <select class="form-control" id="project_id"
                                                                    name="project_id" required>
                                                                    <?php
                                                                        $br_option = "SELECT * FROM project";
                                                                        $br_option_run = mysqli_query($conn, $br_option);

                                                                        if (mysqli_num_rows($br_option_run) > 0) {
                                                                            foreach ($br_option_run as $row2) {
                                                                    ?>
                                                                    <option value="<?php echo $row2['project_id']; ?>">
                                                                        <?php echo $row2['project_name']; ?>
                                                                    </option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Feature Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="feature_name" id="feature_name"
                                                                    placeholder="Feature Name">
                                                            </div>

                                                            <button name="submit_feature" class="btn btn-primary">Add
                                                                Feature</button>
                                                        </form>


                                                        <p class="login-text"
                                                            style="font-size: 1.5rem; font-weight: 800; margin-top:5%;">
                                                            Add Technology</p>
                                                        <div class="alert alert-<?php echo $cls;?>">
                                                            <?php 
                                                                if (isset($_POST['submit_project_tech'])){
                                                                    echo $error;
                                                                }
                                                            ?>
                                                        </div>
                                                        <form action="" method="post" enctype='multipart/form-data'>
                                                            <div class="form-group">
                                                                <label>Select Project</label>
                                                                <select class="form-control" id="project_id"
                                                                    name="project_id" required>
                                                                    <?php
                                                                        $br_option = "SELECT * FROM project";
                                                                        $br_option_run = mysqli_query($conn, $br_option);

                                                                        if (mysqli_num_rows($br_option_run) > 0) {
                                                                            foreach ($br_option_run as $row2) {
                                                                    ?>
                                                                    <option value="<?php echo $row2['project_id']; ?>">
                                                                        <?php echo $row2['project_name']; ?>
                                                                    </option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Select Technology</label>
                                                                <select class="form-control" id="tech_id"
                                                                    name="tech_id" required>
                                                                    <?php
                                                                        $br_option = "SELECT * FROM technology";
                                                                        $br_option_run = mysqli_query($conn, $br_option);

                                                                        if (mysqli_num_rows($br_option_run) > 0) {
                                                                            foreach ($br_option_run as $row2) {
                                                                    ?>
                                                                    <option value="<?php echo $row2['tech_id']; ?>">
                                                                        <?php echo $row2['tech_name']; ?>
                                                                    </option>
                                                                    <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                            <button name="submit_project_tech" class="btn btn-primary">Add
                                                                Project</button>
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