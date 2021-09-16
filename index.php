<html>
<head>
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
     <!-- Google Font -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
     <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     <!-- FontAwesome JS-->
     <!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
	
     <!-- Bootstrap icon CDN -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
 
     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <script type="text/javascript" src="jquery.js"></script> -->
<script type="text/javascript">
function do_search()
{
 var search_term=$("#search_term").val();
 $.ajax
 ({
  type:'post',
  url:'get_results.php',
  data:{
   search:"search",
   search_term:search_term
  },
  success:function(response) 
  {
   document.getElementById("result_div").innerHTML=response;
  }
 });
 
 return false;
}
</script>
</head>

<body>
<div class="bs-example animate__animated animate__slideInDown">
   

</div>
<div id="wrapper">
    <!-- <div class="page-header theme-bg-dark py-5 text-center position-relative"> -->
	    <!-- <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div> -->
	    <!-- <div class="container"> -->
<div id="search_box">
    <div class="justify-content-center"><h1 class="animate__animated animate__slideInRight">Know more about Secondary Schools in Cross River State</h1></div>
 <form class="animate__animated animate__slideInUp" method="post"action="get_results.php" onsubmit="return do_search();">
  <input type="text" id="search_term" name="search_term" placeholder="Search Schools" onkeyup="do_search();">
  <input type="submit" name="search" value="SEARCH">
 </form>
</div>

<hr>
<!-- </div> -->
<!-- </div> -->


<div class="row">
    <div class="col">
        <div id="result_div"></div>
     </div>
</div>
<!-- <div id="result_div"></div> -->
<hr>
</div>
<footer class="container-fluid py-2 mb-0 bg-light animate__animated animate__slideInLeft">
      <!-- <div class="row">
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Cool stuff</a></li>
            <li><a class="text-light" href="#">Random feature</a></li>
            <li><a class="text-light" href="#">Team feature</a></li>
            <li><a class="text-light" href="#">Stuff for developers</a></li>
            <li><a class="text-light" href="#">Another one</a></li>
            <li><a class="text-light" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5 class"text-ligt">Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Resource</a></li>
            <li><a class="text-light" href="#">Resource name</a></li>
            <li><a class="text-light" href="#">Another resource</a></li>
            <li><a class="text-light" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Business</a></li>
            <li><a class="text-light" href="#">Education</a></li>
            <li><a class="text-light" href="#">Government</a></li>
            <li><a class="text-light" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-light" href="#">Team</a></li>
            <li><a class="text-light" href="#">Locations</a></li>
            <li><a class="text-light" href="#">Privacy</a></li>
            <li><a class="text-light" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
          <hr>
      <div class="text-light col-12 col-md"> -->
            
          <p class="d-block mb-3 text-dark bg-transparent">&copy; 2021 SSPMS</p>
        </div>
      </div>
    </footer> 


<style>
footer {
    --bs-bg-opacity: 1;
    background-color: f2f2f2;
}
.navbar{
    background: #1e3799; 
    
    color: #fff;
}
.bs-example{
    margin: 20px;
}
    body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#F2F2F2;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#1e3799;
}
#wrapper h1 p
{
 font-size:18px;
}
#search_box input[type="text"]
{
 width:450px;
 height:45px;
 padding-left:10px;
 font-size:18px; 
 margin-top: 15vh;
 margin-bottom:15px;
 background: #d1d8e0;
 color:#1e3799;
 border:none;
}
#search_box input[type="submit"]
{
 width:100px;
 height:45px;
 background-color:#1e3799;
 color:white;
 border:none;
}
#result_div
{
 width:555px; 
 margin-left:220px;
}
#result_div li
{ 
 margin-bottom:20px;
 list-style-type:none;
}
#result_div li a
{
 text-decoration:none;
 display:block;
 text-align:left;
}
#result_div li a .title
{
 font-weight:bold;
 font-size:18px;
 color:#5882FA;
}
#result_div li a .desc
{
 color:#6E6E6E;
}
a{
    text-decoration: none;
}
h5{
    color: #fff;
}
</style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>

</html>