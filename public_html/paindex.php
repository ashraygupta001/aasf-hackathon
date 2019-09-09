<?php
session_start();
$_SESSION['message']='';
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital') or die("unable to conect".mysqli_connect_error());
?>
<!DOCTYPE html>
<html>
    <head>
      <style>
        html{
          scroll-behavior: smooth;
        }
      </style>
        <title>hospital</title>
        <link rel="icon" href="sh.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
            <script rel="stylesheet" src="http://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
       
          <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cb1179bc1fe2560f3fe9dbc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div>
                        <a href="http://localhost/hackathon/modernhospital/public_html/index.php"><img src="amigos.png" id="logoami"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="Nav" >
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['signed_in'])==true){
                                ?>
                        <li style="hidden"><a style="cursor:none;" href="#"id="id01"class="id01"></a></li>
                        <li style="hidden"><a style="cursor:none;" href="#"id="button"class="button"></a></li>
                        <li><a href="paprofile.php"id="id11"class="id11"><span class="glyphicon glyphicon-user"></span> <span><?=$_SESSION['patientname'] ?></span></a></li>
                        <li><a href="logout.php"id="id12"class="id12"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <?php
                            }
                            else{
                                ?>
                        <li><a href="#"id="id01"class="id01"><span class="glyphicon glyphicon-user"></span> Sign Up </a> </li>
                        <li><a href="#"id="button"class="button"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>                       
                        <?php
                            }
                        ?>
                        </ul>
                </div>             
            </div>
        </nav>
        <nav class="navbar navbar-toggleable-sm bg-inverse navbar-transpatrent sec navbar-fixed-top">
    <div class="container">
                      <div class="navbar-header">
   
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span> 
                                  </button>
     </div>
    <div class="navbar-collapse collapse" id="navbar2">
       <ul class="nav navbar-nav navbar-right">
                       <li><a href="#what"> facilities </li> 
                        <li><a href="#search"> search</a></li>
                        <li><a href="#blog"> blogs </a></li>
                        <li><a href="#map"> map </a></li>

                      </ul>
    </div>
</div>
</nav>
         <div class="background">
            <img src="1.jpg" class="img-responsive s jo"> 
            <img src="2.jpg" class="img-responsive s jo">
            <img src="3.jpg" class="img-responsive s jo"> 
            <button class="btn" onClick="plusIndex(-1)" id="btn1">&#10094;</button>
             <button class="btn" onClick="plusIndex(1)" id="btn2">&#10095;</button>
        </div>
           <div class="bg-modal">
              <div class="modal-contents">
                <ul style="margin-right: 30px;">
  <li><a href="#"id="doc"class="doc"><h4> doctor login </h4></a> </li>
  <a href="#"id="patient"class="patient"> <h4>patient login</h4> </a> </li>
  </ul> 
            <div class="close">+</div>
                <div class="doctorlogin">
                  <div class="doctorlogin1">
                    <div class="docclose">+</div>
                    <form action="doclogin.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"><?= $_SESSION['message']?></div>
                    <input type="text" required name="docname"placeholder="Enter name"id="username">   
                    <input type="Password" required name="docpass" placeholder="Enter Password"id=""pswrd><br>
                        <input type="Submit"name="submit"value="Submit"><br>
                        <p>Don't have an account!<a href="#"id="id02"class="id02">Sign Up </a></p>
    </form>
                  </div>
                </div>
                 <div class="patientlogin">
                  <div class="patientlogin1">
                    <div class="patclose">+</div>
                    <form action="patlogin.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"><?= $_SESSION['message']?></div>
                    <input type="text" required name="patientname"placeholder="Enter name"id="username">   
                    <input type="Password" required name="patientpass" placeholder="Enter Password"id=""pswrd><br>
                        <input type="Submit"name="submit"value="Submit"><br>
                        <p>Don't have an account!<a href="#"id="id02"class="id02">Sign Up </a></p>
    </form>
                  </div>
                </div>
            </div>
          </div>
        <div class="bg-model">
  <div class="model-contents">
    <ul style="margin-right: 30px;">
  <li><a href="#"id="doc1"class="docsign2"><h4> doctor signup </h4></a> </li>
  <a href="#"id="patient1"class="patientsign2"> <h4>patient signup</h4> </a> </li>
  </ul> 
            <div class="clase">+</div>
            <div class="patientsign">
              <div class="patientsign1">
                <div class="paticlose">+</div>
                 <form class="form" action="index.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"><?= $_SESSION['message']?></div>
          <input type="text" placeholder="Enter name" name="patientname" id="username" required/>
        <input type="email" placeholder="Enter Email" name="patientemail" id="email" required/>
        <input type="password" placeholder="Enter Password" name="patientpass" id="password" autocomplete="new-password" required/>
        <input type="text" placeholder="Enter city" name="patientcity" id="city" required/>
        <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" autocomplete="new-password" required/>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <input type="Submit"name="submit"value="Submit" class="btn btn-block btn-primary">
                </form>
              </div>
            </div>
            <div class="docsign">
              <div class="docsign1">
                <div class="doctclose">+</div>
                 <form class="form" action="docsign.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="alert alert-error"><?= $_SESSION['message']?></div>
          <input type="text" placeholder="Enter name" name="docname" id="username" required/>
        <input type="email" placeholder="Enter Email" name="docemail" id="email" required/>
        <input type="password" placeholder="Enter Password" name="docpass" id="password" autocomplete="new-password" required/>
        <input type="text" placeholder="Enter city" name="doccity" id="city" required/>
        <input type="text" placeholder="Enter hospital"  name="dochospital" id="hospital" required/>
        <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" autocomplete="new-password" required/>
        <input type="text"  placeholder="Enter speciality" name="docspe" id="docspe" required/>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
      <input type="Submit"name="submit"value="Submit" class="btn btn-block btn-primary">
                </form>
              </div>
            </div>
      </div>
        </div>
  <div class="h">
     <center><h1 class="yu" style="font-size:62px;padding-top: 150px;"id="what">What we have!!!</h1></center>
          </div>
 <div class="container">
            <div class="row images ">
                <a href="#"id="id07" class="id07"><div class="col-sm-4">
                    <div class="thumbnail">
                   <img src="5.png" class="img-responsive img-thumbnail">
                    <div class="caption">
                        <center>
                            <h3>
                                Search Expert Nearby
                            </h3>
                            <p style="font-family: Agency FB">Find ✓Consulting Physicians, ✓General Practitioners, ✓Internal Medicine Doctors, ... Reviews, Photos, Maps for top General Physicians Near Me</p>
                        </center>
                </div>
                    </div>
                </div>
                </a>
                <a href="#"id="id08"class="id08"><div class="col-sm-4">
                    <div class="thumbnail">
                    <img src="4.jpg" class="img-responsive img-thumbnail">
                    <div class="caption">
                        <center>
                            <h3>
                                Chat With Experts
                            </h3>
                            <p style="font-family: Agency FB"> Ask a Doctor online when you are unsure about An emergency, Need of a specialist opinion, Your reports & scans, Your Diagnosis, Treatment. </p>
                        </center>
                    </div>
                    </div>
                </div>
                </a>
                <a href="#"id="id09"class="id09"><div class="col-sm-4">
                    <div class="thumbnail">
                   <img src="6.jpg" class="img-responsive img-thumbnail">
                    <div class="caption">
                        <center>
                            <h3>
                                Read Health related Posts.
                            </h3>
                            <p style="font-family: Agency FB">Trying to eat healthy, exercise more, or get into mindfulness and meditation? Healthy living is all about a holistic and balanced approach</p>
                        </center>                     
                    </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
         <div class="q" id="search">
     <center><h1 class="qu" style="font-size:s
            <div>
    <?php
  $output='';
  if(isset($_POST['search'])){
  $searchq=$_POST['search'];
  $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
  $query=mysql_query("SELECT * FROM doctor WHERE docname LIKE '%$searchq%'") or die("could not search");
  print_r($query);exit();
  $count=mysql_num_rows($query);
  if($count==0){
  $output='there waas no search result';
}
else{
    while($row=mysql_fetch_array($query)){
    $fname=$row['docname'];
    $id=$row['docid'];
    $output .='<div>'.$fname.'</div>';
}
}
}
      ?>

 <center>
         <form action="search.php" method="post" style="width: 750px; padding-top: 50px;">
         
            <input type="text" name="search" placeholder="Search for specialist..."/>
            <input type="submit" value=">>"/>
         </form>
         </center>
<?php print("$output");?>
   
    </div>

        </div>
         <div class="t" id="blog">
     <center><h1 class="tu" style="font-size:62px;padding-top: 250px; ">Blogs By The Best Writers</h1></center>
          </div>
        <div class="container">
            <div>
 <div style="padding-bottom:10px;padding-top: 50px;">
    <a href="pallposts.php">
        <center>
            <button type="button" class="btn btn-info btn-lg">
        Read all posts
    </button>
        </center>
    </a>
    </div>
    <div class="container">
      <center>
      <h3 style="font-family: Matura MT Script Capitals;"> Blood Bank </h3>
    </center>
    </div>
<div id="map" style="width: 100%; height: 400px;"></div>
<div id="map">
  <script type="text/javascript">
    var locations = [
      ['blood bank 1', 26.2183, 78.1828, 4],
      ['blood bank 2', 26.21832, 78.15829, 5],
      ['blood bank 3', 26.228, 78.1828, 3],
      ['blood bank 4', 26.2, 78.1828, 2],
      ['blood bank 5', 26.211,78.1928, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(26.2183, 78.1828),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</div>

        <script type="text/javascript" src="logic.js"></script>  
    </body>
</html>