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
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Prevention</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Live Tracker
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Country Wise</a>
                        <a class="dropdown-item" href="#">Indian Statewise</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Contact</a>
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
    <!-- Covid latest updates  -->
    <section class="corona_update" id="home">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
            <hr>
        </div>
        <div class="d-flex justify-content-around align-items-center  count_style" ;>
            <div>
                <h1 class="count">29191213</h1>
                <p class="cc">Confirmed cases <img src="https://img.icons8.com/carbon-copy/100/000000/coronavirus.png"
                        width="30" height="30" />
                </p>

            </div>

            <div>
                <h1 class="count">1171615</h1>
                <p class="ac">Active <img src="https://img.icons8.com/ios-filled/50/000000/patient-oxygen-mask.png"
                        width="30" height="30" /></p>
            </div>

            <div>
                <h1 class="count">27648076</h1>
                <p class="re">Recovered <img src="https://img.icons8.com/offices/30/000000/aed.png" width="30"
                        height="30" /></p>
            </div>

            <div>
                <h1 class="count">359857</h1>
                <p class="de">Deceased <img src="https://img.icons8.com/pastel-glyph/64/000000/crossbones.png"
                        height="30" width="30" /></p>
            </div>


        </div>

    </section>
    <!-- Updates end -->

    <!-- About -->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About Covid-19</h1>
            <hr>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                <img src="images/sars.jpg" height="300" width="350" alt="" class="img-fluid">
                <hr>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                
                <h2>What is Covid-19?</h2>
                <p>COVID-19 is the disease caused by a new coronavirus called SARS-CoV-2. WHO first learned of this new
                    virus on 31 December 2019, following a report of a cluster of cases of ‘viral pneumonia’ in Wuhan,
                    People’s Republic of China.</p>
                <p>Stay safe by taking some simple precautions, such as physical distancing, wearing a mask, especially
                    when distancing cannot be maintained, keeping rooms well ventilated, avoiding crowds and close
                    contact, regularly cleaning your hands, and coughing into a bent elbow or tissue. Check local advice
                    where you live and work. Do it all!</p>
            </div>

        </div>

    </div>
    <!-- About ends -->
    <!-- Covid Symptoms-->
    <div class="container-fluid  pt-5 pb-5" id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Common Covid Symptoms</h1>
            <hr>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="https://img.icons8.com/plasticine/100/000000/coughing.png" class="img-fluid"
                            width="120" height="120" />
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">

                        <img src="https://img.icons8.com/color/96/000000/runny-nose--v1.png" class="img-fluid"
                            width="120" height="120" />
                        <figcaption>Runny Nose</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="https://img.icons8.com/doodle/96/000000/fever.png" class="img-fluid" width="120"
                            height="120" />

                        <figcaption>Fever</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="https://img.icons8.com/emoji/96/000000/cold-face.png" class="img-fluid" width="120"
                            height="120" />
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="https://img.icons8.com/ios/100/000000/slouch.png" class="img-fluid" width="120"
                            height="120" />
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <figure class="text-center">
                        <img src="https://img.icons8.com/color/96/000000/breath.png" class="img-fluid" width="120"
                            height="120" />
                        <figcaption>Difficulty in breathing(Severe cases)</figcaption>
                    </figure>
                </div>

            </div>

            <div class="row">
                <hr>
                <br>
                <p>The most common symptoms of COVID-19 are

                    Fever
                    Dry cough
                    Fatigue
                    Other symptoms that are less common and may affect some patients include:

                    Loss of taste or smell,
                    Nasal congestion,
                    Conjunctivitis (also known as red eyes)
                    Sore throat,
                    Headache,
                    Muscle or joint pain,
                    Different types of skin rash,
                    Nausea or vomiting,
                    Diarrhea,
                    Chills or dizziness.


                    Symptoms of severe COVID‐19 disease include:

                    Shortness of breath,
                    Loss of appetite,
                    Confusion,
                    Persistent pain or pressure in the chest,
                    High temperature (above 38 °C).
                    Other less common symptoms are:

                    Irritability,
                    Confusion,
                    Reduced consciousness (sometimes associated with seizures),
                    Anxiety,
                    Depression,
                    Sleep disorders,
                    More severe and rare neurological complications such as strokes, brain inflammation, delirium and
                    nerve damage.
                    People of all ages who experience fever and/or cough associated with difficulty breathing or
                    shortness of breath, chest pain or pressure, or loss of speech or movement should seek medical care
                    immediately. If possible, call your health care provider, hotline or health facility first, so you
                    can be directed to the right clinic.
                </p>





            </div>




        </div>
    </div>
    <!-- Covid Symptoms end -->
    <!-- 6 step prevention -->
    <div class="container-fluid sub_section pt-5 pb-5" id="preventid">

        <div class="section_header text-center mb-5 mt-4">
            <h1>6 Steps Prevention Against Coronavirus</h1>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">

                                <img src="https://img.icons8.com/bubbles/100/000000/sanitizer.png" class="img-fluid"
                                    width="90" height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> Wash your hands regularly for 20 seconds, with soap and water or
                                alcohal-based hand rub.</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">
                                <img src="https://img.icons8.com/flat-round/100/000000/protection-mask.png"
                                    class="img-fluid" width="90" height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> Cover yourNose and mouth with a disposable tissue or fixed elbow when you cough or
                                sneeze.</p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">

                                <img src="https://img.icons8.com/cotton/100/000000/distance--v14.png" class="img-fluid"
                                    width="90" height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> Avoid close contact (1 meter or 3 feet)with people who are unwell</p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">

                                <img src="https://img.icons8.com/dusk/128/000000/home.png" class="img-fluid" width="90"
                                    height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> Stay home and self-isolate from others in the household if you feel unwell</p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">

                                <img src="https://img.icons8.com/doodle/192/000000/news.png" class="img-fluid"
                                    width="90" height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> Stay informed by watching or reading news & follow the recommended practices</p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <figure class="text-center">

                                <img src="https://img.icons8.com/plasticine/100/000000/fever.png" class="img-fluid"
                                    width="90" height="90" />

                            </figure>
                        </div>

                        <div class="col-lg8 col-md-8 col-12">

                            <p> If you have fever,cough or difficulty in breathing, seek medical help early</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>




    </div>


    </div>
    </div>
    <!-- 6 step prevention ends -->
    <!-- contact -->
    <div class="container-fluid  pt-5 pb-5" id="contactid">

        <div class="section_header text-center mb-5 mt-4">
            <h1>Contact if medical help needed</h1>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">

                    <form action="" method="POST">




                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="name"
                                autocomplete="off" required>
                        </div>






                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="name@example.com"
                                required autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" placeholder="mobile"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label>Select Symptoms</label>
                            <br>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox1"
                                    name="coronasym[]" value="fever">
                                <label for="customcheckbox1" class="custom-control-label">Fever</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox2"
                                    name="coronasym[]" value="tired">
                                <label for="customcheckbox2" class="custom-control-label">Feeling Weak</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox3"
                                    name="coronasym[]" value="cold">
                                <label for="customcheckbox3" class="custom-control-label">Cold</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                <input type="checkbox" class="custom-control-input" id="customcheckbox4"
                                    name="coronasym[]" value="Breath"> 
                                <label for="customcheckbox4" class="custom-control-label">Breathing-difficulty</label>
                            </div>


                        </div>




                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Describe Symptoms</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="msg"
                                rows="3"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                    </form>


                </div>


            </div>


        </div>










    </div>


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

</html>





<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
   $username =$_POST['username'];
   $email =$_POST['email'];
   $mobile =$_POST['mobile'];
   $symp =$_POST['coronasym'];
   $msg =$_POST['msg'];

    $chk = "";
    foreach($symp as $chk1)
    {
        $chk .=$chk1.",";
    }
    $insertquery = " insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg)";
     
    $query = mysqli_query($con,$insertquery);

    if($query){
        ?>
<script>
alert("insert successful");
</script>


<?php
   
   }
   else{
        ?>
<script>
alert("insert not successful")
</script>


<?php
   
   
   }







}








?>