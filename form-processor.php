<?php
  if(!isset($_POST["submit"])) {
    // This page should only be accessed after submitting the form
    echo "Error! You need to submit the form.";
  }
  // Collecting information
  $name = $_POST["name"];
  $visitor_email = $_POST["email"];
  $message = $_POST["message"];
  // Validating information
  if(empty($name) || empty($visitor_email)) {
    echo "Name and email are mandatory!";
    exit;
  }
  $apo_email = "isfroooozen@gmail.com";
  $email_subject = "Form Submission From APO Website";
  $email_body = "There is a new form submission from $name ($visitor_email).
  Here is the message(not required): $message";
  mail($apo_email, $email_subject, $email_body);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.">
    <link rel="canonical" href="https://y7kim.github.io/~gammapi/">


    <!-- Custom CSS & Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link rel="stylesheet" href="static/style.css">


    <!-- Custom Fonts -->
    <link rel="stylesheet" href="http://umich.edu/~gammapi/css/font-awesome/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/slideshowIndex.js"></script>
</head>

<body onload="loadSlides('static/bannerImages/', 1, 'c')">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html"><img class="APO-logo" src="http://static1.squarespace.com/static/55932a81e4b0a456270ffbf7/t/55934c43e4b023c4ffd64980/1547783092973/?format=1500w"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about_us.html">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="families.html">Families</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="media.html">Media</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="meet_exec.html">Meet Exec</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <div id="slides-index" class="slideshow-container-index">
            <div id="slide-wrapper" class="slideshow-container-index">
                <!-- This will be populated with the newsletter pages via slideshow.js-->
            </div>
            <div class="fade-out"></div>
    </div>
    <!-- Header close-->
    <section id="get-involved">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 text-center">
                  <h2>Thank you for your interest!</h2>
                  <p>We have received your submission. Hope to meet you soon!</p>
                </div>
            </div>
            <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <span class="copyright">Copyright &copy; APO Gamma Pi 2019</span>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-inline social-buttons">
                                    <li><a href="https://twitter.com/APOuofm"><i class="fa fa-twitter"></i></a>
                                    </li>

                                    <li><a href="https://www.facebook.com/apogammapi"><i class="fa fa-facebook"></i></a>
                                    </li>

                                    <li><a href="https://instagram.com/apouofm/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </footer>
        </div>
    </section>


    <script src="js/contactUs.js"></script>
    <!-- jQuery Version 1.11.0 -->
    <script src="http://umich.edu/~gammapi/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="http://umich.edu/~gammapi/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://umich.edu/~gammapi/js/jquery.easing.min.js"></script>
    <script src="http://umich.edu/~gammapi/js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
</body>
