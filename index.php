<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>URL Shorener -Short & Custem Free</title>
  <link rel = "icon" href = "img/favicon.ico" type = "image/x-icon">


  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
	include 'db.php';

	$db = new Database("localhost", "url_short", "root", "");
	$db = $db->connect();

	$stmt = $db->query("SELECT * FROM urls");
	$urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
       <img src="img/bitly_logo (1).svg"/>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Why Bitly?	
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fa fa-folder-open-o"></i>Bitly 101 <br><span>An Introduction on bitly's feautures</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-expand"></i>Integrations & API<br><span>Connect Bitly with the tools you love </span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-stop-circle-o"></i>Entreprise Class<br><span>Bitly scales to the size you need</span></a>
            

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Solutions
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fa fa-thumbs-o-up"></i>Social Media <br><span>Ampmify your brand on Social</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-random"></i>Digital Marketing<br><span>Drive omnl-channel engagement</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-comment-o"></i>Customer Service<br><span>Conect with costomer</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-file-code-o"></i>For Developers<br><span>Buid links with any Workflow</span></a>

              </div>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Feautures
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><i class="fa fa-link"></i>Link Management <br><span style="font-size: 12px;color:#707a80;">Build and share powerful links</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-anchor"></i>Branded Links<br><span style="font-size: 12px;color:#707a80;">Increase engagement and exposure</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-mobile"></i>Mobile links<br><span style="font-size: 12px;color:#707a80;">Create a seamless user experience </span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-pie-chart"></i>Campaing Management & Analytics <br><span style="font-size: 12px;color:#707a80;">Track and optimize every touchpoint</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-qrcode"></i>QR codes <br><span style="font-size: 12px;color:#707a80;">Bridge offline to online experiences</span></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  id="right" href="#">Ressources</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="#">Sign up free</a>
            </li>
            <li class="nav-item">
              
              <a class="btn btn-prima w-100" href="#">Get a Quote</a>
            </li>
            
          </ul>
        </div>

      </div>
    </nav>

    <div class="container">
      <div class="row  ">
             <div class="col-xl-6 col-xl-6 col-md-6 col-xm-12">
               
              <h1>Short links, big results</h1>
              <p>A URL shortener built with powerful tools to help you grow and protect your brand.</p>
    
          
              <a class="btn btn-prim" href="liste.php">Get started for Free</a>
                  <h6><a class="link " href="#" >Get a Quote</a></h6>
             
        </div>

           <div class="col-xl-6 col-xl-6 col-md-6 col-xm-12">
            <img src="img/Sat.png"/>
  
           </div>

      </div>
    </div>
  </header>



<div class="container-fluid">
  <div class="container">
           <div class="row">
                <div class="col-xl-4 col-xl-4 col-md-4 col-xm-12"><img src="img/bitly.png"></div>
                <div class="col-xl-6 col-xl-6 col-md-6 col-xm-12"><p> is excited to announce the acquisition of QR Code Generator, the <br> world’s leading QR code platform. Check out our combined capabilities.</p></div>
                <div class="col-xl-2 col-xl-2 col-md-2 col-xm-12">  <a class="btn btn-learn" href="#">learn More</a></div>
           </div>

  </div> 
</div>



<div class="page-section banner-seo-check">
  <div class="row">
    <div class="container text-center">
      <div class="row justify-content-center wow fadeInUp">
        <div class="col-lg-12">
         
          <form action="insert.php" method="post">
        
            <input type="text" class="form-control"  name="long_url" id="long_url" placeholder="https://example.com"placeholder="Shorten your link">
            <button type="submit" class="btn btn-success">Shorten</button>
          </form>
          <span></span>
          By clicking SHORTEN, you are agreeing to Bitly’s Terms of Service and Privacy Policy
        </div>
      </div>
    </div> 
  </div> 
</div> 
  

    <div class="container">
      <h5 class="text-secondary text-center">Scroll to learn more</h5>
         
      <h2 class="text-center"><b> link shortener that has your brand’s back</b></h3>
      <h5 class="text-secondary text-center">Your brand wasn’t built to be hidden. Help it stand out with branded links that drive more clicks.</h5>
      <div class="row">
      
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/Homepage-Branded-Links-Illustration-1.png" alt="">
            </div>
            <div class="body">
              <h3 class="text-secondary"><b>Inspire trust</b></h5>
              <p>With more clicks comes increased brand recognition and consumer trust in your communications—which in turn inspires even more engagement with your links. (It’s a wonderful cycle.)</p>
            
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/Homepage-Branded-Links-Illustration-2.png" alt="">
            </div>
            <div class="body">
              <h3 class="text-secondary"><b>Boost results</b></h5>
              <p>On top of better deliverability and click-through, rich link-level data gives you crucial insight into your link engagement so your team can make smarter decisions around its content and communications.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="img/Site_Check-you.png" alt="">
            </div>
            <div class="body">
              <h3 class="text-secondary"><b> Gain control</b></h3>
              <p>Take credit for your content and learn more about how it’s consumed by enabling auto-branding—a feature that ensures your brand remains in any link someone shortens pointing to your website.</p>
             
            </div>
          </div>
        </div>
      </div>

     <div class="row"><a class="btn btn-get" href="#">Get started for Free</a>
      
    </div>




    <h6 class=" text-secondary text-center"><a href="#"></a>learn More</a></h6>
  
        </div> <!-- .container -->
        <div class="page-getstarted">
          <div class="row">
            <div class="container text-center">
              
              <p>More than a free link shortener</p>
              <a class="btn btn-get" href="#">Get started for Free</a>
              
            </div> <!-- .container -->
          </div> <!-- .wrap -->
        </div>
            
 

 

  <footer class="page-footer bg-image" >
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
             <h3>Why Bitly?</h3>
             <p><a href="#">Bitly 101</a>
             <a href="#">Bitly 101</a>
             <a href="#"> Integrations & API</a>
             <a href="#">Enterprise Class </a>
              <a href="#">Pricing</a></p>
        </div>
          

        <div class="col-lg-2">
          <h3>Solution</h3>
          <p><a href="#">Social Media</a>           
           <a href="#">Digital Marketing </a>
           <a href="#">Customer Service</a>
            <a href="#">For Developers</a>
          </p>

          <h3>Feautures</h3>
          <p><a href="#">Link Management</a>
            <a href="#">  Branded Links</a> 
              <a href="#">Mobile Links</a>
                <a href="#">Campaign Management & Analytics</a>
                  <a href="#">  QR Codes  </a>
          </p>
        </div>

        <div class="col-lg-2">
          <h3>Resources</h3>
          <p>
            <a href="#">Blog
              <a href="#">Resource Library</a>
                <a href="#">Developers  </a>
                  <a href="#"> Support  </a>
                    <a href="#"> Tools  </a>
          </p>
             <h3>Legal</h3>
             <p>
             <a href="#">Privacy Policy</a>
              <a href="#">Terms of Service</a>
                <a href="#">Acceptable Use Polic</a>
              </p>
          
        </div>

        <div class="col-lg-2">
          <h3>Company</h3>
          <p>
            <a href="#">About Bitly</a>
              <a href="#">Careers</a>
                <a href="#"> Partners</a>
                  <a href="#">Press</a>
                    <a href="#"> Contact</a>
                      <a href="#"> Reviews</a>
          </p>

       
        </div>
        <div class="col-lg-4">
          <h1 style="margin-top: 0; text-align: left;color:tomato ; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Bitly</h1>
          <p>
            <a href="#"> © 2022 Bitly | Handmade in San Francisco, Denver, New York City, Bielefeld, and all over the world.</a>
          </p>

          <div class="social-media-button">
            <a href="#"><span class="fa fa-facebook-square"></span></a>
            <a href="#"><span class="fa fa-twitter-square"></span></a>
            <a href="#"><span class="fa fa-linkedin-square "></span></a>
            <a href="#"><span class="fa fa-envelope"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
       
      </div>

    </div>
  </footer>

<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/theme.js"></script> 
  
</body>
</html>