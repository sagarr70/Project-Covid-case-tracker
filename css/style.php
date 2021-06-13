<style type="text/css">
html{

    scroll-behavior:smooth ;
}
*{margin: 0; padding: 0; box-sizig;border-box;font-family: 'Muli', sans-serif;}



.row{margin-left: 0!important; margin-right: 0!important;}
.nav_style{
    
    background-image: linear-gradient(-90deg,#d38312,#a83279);
}

.nav_style a{
    
    color:white;
}

.dropdown-menu{
    background: linear-gradient(-90deg,#d38312,#a83279);
}


/* main header */
.main_header{
    height:450px;
    width:100%;
    background-color:#FFFFE0 ;
}
.rightside h1{
  font-size: 3rem;
}
.corona_rotate img{
    animation: gocorona 3s linear infinite;

}
@keyframes gocorona{
    0% { transform: rotate(0);}
    100% { transform:rotate(360deg);}
}
 .leftside img{animation: heartbeat 5s linear infinite;}
@keyframes heartbeat
{
  0%{ transform:scale(.75);}
  20%{ transform:scale(1);}
  40%{ transform:scale(.75);}
  60%{ transform:scale(1);}
  80%{ transform:scale(.75);}
  100%{transform:scale(.75);}
} 
/* corona update */
.corona_update{
    margin: 30px 0 30px 0;
}
.corona_update h3{
    color:#ff7675;
}
.corona_update h1{
  font-size:2rem; text-align:center;
}
.cc{
    color:red;
}
.ac{
    color:blue;
}
.re{
    color:green;
}
.de{
    color:#F52E04;
}
.caseno{
    margin-top:30px;
}
 /* about section */
 .sub_section{
     background-color: #fbfafd;
 }

/* Footer */
.footer_style{
    background-image: linear-gradient(-90deg,#d38312,#a83279);
}
.footer_style p{
    margin-bottom: 0!important;
}
/* Top scroll */
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}

/* Responsive */


@media(max-width:768px){

.main_header{ height: 700px; text-align: center;}
.main_header h1{
    text-align:center;
    padding: 0;
    width: 100%;
    font-size: 30px;
}

.count_style{
    display: inline!important;

}
.count_style p{ text-align: center;}
.about_res{margin-left: 0!important;}
}



.confirmed{
    color: red;
}
.recovered{
    color: green;
}
.dead{
    color: darkred;
}
.world{
    font-size: 50px;
    text-align: center;
    
}

</style>