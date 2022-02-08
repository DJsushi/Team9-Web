<!doctype html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Star Learners Pre-School</title>
<style>
    html, body {
    margin : 0px ;
    height : 100% ;
    width : 100% ;
   }
}

#header,  {
 height : 80px ;
 text-align : center ;
 width : 100% ;
}

header
{
    background-color: #56A0E3;
    padding: 35px 35px 35px 35px;
    text-align: center;
    font-size: 28px;
}

.facebook {
  background: #157DC3;
  color: white;
}

.twitter {
  background: #2CA1E9;
  color: white;
}
.instagram {
  background: #BF397A;
  color: white;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
    
</head>
  <body>
    <header>
        <logo>
            <img src="https://logodix.com/logo/346977.png" alt="schoollogo" width=40px height=40px>
        </logo>
        <a href ="starlearners.html"> STAR LEARNERS PRE-SCHOOL</a>
    </header>

    <div class="topnav" id="myTopnav">
        <a class="active" href="starlearners.html">HOME</a>
        <a href="enrollment.html">ENROLLMENT</a>
        <a href="#teachers">TEACHERS</a>
        <a href="#parents">PARENTS</a>
        <a href="#contactus">CONTACT US</a>
        <a href="#about">SEARCH</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
                </a>
            <!-- <div class="search-container">
                <form action="/action_page.php">
                  <input type="text" placeholder="Search..." name="search">
                 
                </form> -->
    </div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>