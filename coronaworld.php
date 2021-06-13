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
        <a class="navbar-brand pl-5" href="#">World-covid Meter</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Live Tracker
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><span class="sr-only">(current)</span>
                        <a class="dropdown-item" href="#">Country Wise</a>
                        <a class="dropdown-item" href="coronaindia.php">Indian Statewise</a>

                    </div>
                </li>
             
            </ul>

        </div>
    </nav>

    <!-- Nav bar ends -->
    <!-- Main header -->
    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/group_mask.png" alt="" width="300" height="300">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">

                <div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">

                    <h1>Pandemic will be over if we fight <br> Cor<span class="corona_rotate"> <img
                                src="images/corona.png" width="30" height="40"> </span>na together.....</h1>
                </div>
            </div>


        </div>

    </div>
    <!-- Main header ends -->

    <!-- Corona updates -->


    <section class="corona_update container-fluid" id="home">
        <div class="mb-5">
            <h3 class="text-uppercase text-center">Covid-19 Updates Worldwide</h3>
            <hr>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th class="text-capitalize">Country</th>
                    <th class="text-capitalize confirmed">Total Confirmed<img src="https://img.icons8.com/carbon-copy/100/000000/coronavirus.png"
                        width="30" height="30" /></th>
                    <th class="text-capitalize recovered">Total Recovered <img src="https://img.icons8.com/offices/30/000000/aed.png" width="30"
                        height="30" /></th>
                    <th class="text-capitalize dead">Total Deaths <img src="https://img.icons8.com/pastel-glyph/64/000000/crossbones.png"
                        height="30" width="30" /></th>
                    <th class="text-capitalize">Last updated</th>

                </tr>
                <?php


$data=file_get_contents('https://api.covid19api.com/summary');
$coronalive=json_decode($data,true); 

   
$countriescount= count($coronalive['Countries']);
$i=0;
while($i < $countriescount){
     ?>
     <tr>
     <td><?php echo $coronalive['Countries'][$i]['Country']?></td>
     <td><?php echo $coronalive['Countries'][$i]['TotalConfirmed']?></td>
     <td><?php echo $coronalive['Countries'][$i]['TotalRecovered']?></td>
     <td><?php echo $coronalive['Countries'][$i]['TotalDeaths']?></td>
     <td><?php echo $coronalive['Countries'][$i]['Date']?></td>
     
     </tr>




      <!-- echo $coronalive['Countries'][$i]['Country']."<br>";
      echo $coronalive['Countries'][$i]['TotalConfirmed']."<br>";
      echo $coronalive['Countries'][$i]['TotalRecovered']."<br>";
      echo $coronalive['Countries'][$i]['TotalDeaths']."<br>";
      echo $coronalive['Countries'][$i]['Date']."<br>";  -->
      <?php
      $i++;
}

?>


            </table>





        </div>

    </section>








    <!-- Top cursor -->

    <div class="container scrolltop float-right pr-5">

        <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>




    <!-- Footer -->


    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
            <p>Project by Sagar Aggarwal</p>


        </div>




    </footer>

    <script type="text/javascript">
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>


















</body>