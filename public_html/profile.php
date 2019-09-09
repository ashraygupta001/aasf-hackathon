        <?php
        session_start();
        if(isset($_SESSION['signed_in'])!=true){
            header("location:index.php");
        }
        $mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
        $docid=$_SESSION['docid'];
        $query="SELECT Count(postsID) as totalposts FROM doctor,posts WHERE docid=user_id AND user_id='$docid'";
        $data = mysqli_query($mysqli,$query);

            
                                  
        ?>
<!DOCTYPE html>
<html>
    <head>
       <title>hospital</title>
        <link rel="icon" href="sh.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
            <script rel="stylesheet" src="http://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <style>
          .id12{
            margin-right: 10px;

          }
            
            .id11{
                color:#969696;
            }
 
.dropdown {
  position: relative;
  display: inline-block;
      line-height: 3.428571;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    margin-left: -100px;
}

.dropdown-content h1 {
  color: #878787;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content h1:hover {color:black;}
.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .id11 {color: white;}

        #z a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 11px;
  color: white;
  border-radius: 0 5px 5px 0;
}
.x{
  text-align: center;
}
#z a:hover {
  left: 0;
}
#ti{
  border-radius: 10px;
}
#ti1{
  align-self: center;
  width: 80%;
  margin-left: 10%;

}
.sub{
 
  border-radius: 10px;
  width: 50%;
}
.btn{
  text-decoration: none;
  margin-left:90%;

}
#about {
  top: 240px;
  background-color: #4CAF50;
}
.ava{
  margin-right: 50%;
  
}
        

        </style>
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
                     <li>  <h3 style="color: white;"><center> <?php 
                 echo $_SESSION['docname'];
                 ?></center></h3></li>
                     <!--<li><a href="#" id="id11" class="id11"><span class="glyphicon glyphicon-user"></span> <span><? $_SESSION['docname'] ?></span></a></li>-->
                                                <li><a href="logout.php"id="id12"class="id12"><button class="btn"><span class="glyphicon glyphicon-log-in"></span> Logout</button></a></li>

                    </ul>
               </div>
               </div>      
        </nav> 
        
             <div id="z" class="x">
                 <a href="feedbackform.php"id="about">FEEDBACK FORM</a>

</div>
   
        <div class="container re">
            <center>
                <h2 class="footer1">
                    <p style="font-family: Matura MT Script Capitals;">  Write a post.....</p>
            </h2>
            </center>
      
            <div class="box1">
                <form action="recent.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="text" placeholder="Enter Title" name="title"id="ti" class="title" required/>  
                <textarea cols="80" rows="10" type="text" placeholder="Enter description" name="description"id="ti1" class="title1" required></textarea> 
                 <input type="Submit"name="submit"value="Submit" class="sub"><br>
                </form>
            </div>
        </div>
        <div class="h">
     <center><h1 class="yu" style="font-size:62px; ">AMIGOS</h1></center>
          </div>
          <div class="footer">
                <center>
                    <div style="background-color: #000; height: 20px">
                        <p style="color: white;">Copyright © Amigos. All Rights Reserved | Contact Us: +91 90000 00000</p>
                </div>
                </center>
            </div> 
         <div class="a23">
              <div class="a24">
                  <div class="close9">+</div>
                <form action="profile.php" method="post" enctype="multipart/form-data" autocomplete="off">
                    <input type="password" required name="password1"placeholder="Enter New Password"id="password1">   
                    <input type="password" required name="cpassword1" placeholder="Confirm New Password"id="cpassword1"><br>
                        <input type="Submit"name="submit"value="Submit"><br>
    </form>
            </div>
          </div>
        <script type="text/javascript" src="logics.js"></script>  
            </body>
</html> 