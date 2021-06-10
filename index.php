<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>

<!-- Nav bar starts -->
<nav class="navbar navbar-dark navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">Covimeter</a>
  <button class="navbar-toggler "  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Live Tracker
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Country Wise</a>
          <a class="dropdown-item" href="#">Indian Statewise</a>
         
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>

<!-- Nav bar ends -->
<!-- Main header -->
<div class="main_header">
<div class="row w-100 h-100">
 <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
   <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center" >
    <img src="images/group_mask.png" alt="" width="300" height="300" >
   </div>
 </div>

 <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
 
   <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
 
       <h1>Pandemic will be over if we fight <br> Cor<span class="corona_rotate"> <img src="images/corona.png" width="30" height="40" > </span>na together.....</h1>
   </div>
 </div>


</div>

</div>
<!-- Main header ends -->
<!-- Covid latest updates  -->
<section class="corona_update">
   <div class="mb-3">
      <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
      <hr>
   </div>
   <div class="d-flex justify-content-around align-items-center caseno";>
     <div>
        <h1 class="count">29191213</h1>
        <p class="cc">Confirmed cases <img src="https://img.icons8.com/carbon-copy/100/000000/coronavirus.png" width="30" height="30" /> </p>
        
     </div>

     <div>
        <h1 class="count">1171615</h1>
        <p class="ac">Active <img src="https://img.icons8.com/ios-filled/50/000000/patient-oxygen-mask.png"  width="30" height="30"/></p>
     </div>

     <div>
        <h1 class="count">27648076</h1>
        <p class="re">Recovered <img src="https://img.icons8.com/offices/30/000000/aed.png" width="30" height="30"/></p>
     </div>

     <div>
        <h1 class="count">359857</h1>
        <p class="de">Deceased <img src="https://img.icons8.com/pastel-glyph/64/000000/crossbones.png" height="30" width="30" /></p> 
     </div>

     
   </div>

</section>
<!-- Updates end -->

<!-- About -->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid" >
   <div class="section_header text-center mb-5 mt-4">
      <h1>About Covid-19</h1>
      <hr>
   </div>
   <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5">
      <img src="images/sars.jpg" alt="" class="img-fluid">
      </div>
     
      <div class="col-lg-6 col-md-6 col-12">
      
      <h2>What is Covid-19?</h2>
      <p>COVID-19 is the disease caused by a new coronavirus called SARS-CoV-2.  WHO first learned of this new virus on 31 December 2019, following a report of a cluster of cases of ‘viral pneumonia’ in Wuhan, People’s Republic of China.</p>
      <p>Stay safe by taking some simple precautions, such as physical distancing, wearing a mask, especially when distancing cannot be maintained, keeping rooms well ventilated, avoiding crowds and close contact, regularly cleaning your hands, and coughing into a bent elbow or tissue. Check local advice where you live and work. Do it all!</p>
      </div>

   </div>

</div>
<!-- About ends -->
<!-- Covid Symptoms-->
<div class="container-fluid  pt-5 pb-5" id="aboutid" >
   <div class="section_header text-center mb-5 mt-4">
      <h1>Common Covid Symptoms</h1>
      <hr>
   </div>

</body>
</html>