<?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  //  SEARCH script
  require "admin/dashboard/search.php";

  //  DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf("<div>%s - %s</div>", $r['name'], $r['email']);
    }
  } else { echo "No results found"; }
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    
	<!-- font Awesome Icons CDN -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

	<!-- Bootstrap icon CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head> 
<div class="main-menu  mt-0">
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5" style="background-color: #0c2461;">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<body>    
<div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Search Secondary Schools</h1>
		    <div class="page-intro single-col-max mx-auto">Search for a school's profile  online.</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form method="POST" action="search.php" class="search-form w-100">
		            <input type="text" placeholder="Search schools..." name="search" class="form-control search-input">
		            <button type="submit" name="search" class="btn search-btn" value="Search"><i class="bi bi-search"></i></i></button>
		        </form>
             </div>
	    </div>
    </div><!--//page-header-->
   <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-map-signs"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Introduction</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
							    </div>
							    <a class="card-link-mask" href="docs-page.html#section-1"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-arrow-down"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Installation</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
							    </div>
							    <a class="card-link-mask" href="docs-page.html#section-2"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-box fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">APIs</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-3"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-cogs fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Integrations</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-4"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-tools"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Utilities</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-5"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-laptop-code"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Web</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-6"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-tablet-alt"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Mobile</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-7"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-book-reader"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Resources</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-8"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-12 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder me-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">FAQs</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-9"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->
<!--
    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h3 class="mb-2 text-white mb-3">Launch Your Software Project Like A Pro</h3>
		    <div class="section-intro text-white mb-3 single-col-max mx-auto">Want to launch your software project and start getting traction from your target users? Check out our premium <a class="text-white" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Bootstrap 5 startup template CoderPro</a>! It has everything you need to promote your product.</div>
		    <div class="pt-3 text-center">
			    <a class="btn btn-light" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Get CoderPro<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
		    </div>
	    </div>
    </section><!--//cta-section

    <footer class="footer">

	    <div class="footer-bottom text-center py-5">
		    
		    <ul class="social-list list-unstyled pb-4 mb-0">
			    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
	            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
	        </ul><!--//social-list
	        
	        /* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
            
	        
	    </div>
-->	    
    </footer>
       
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

	<!-- separate -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script> 

</body>
</html> 
