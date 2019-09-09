        <?php
        session_start();
        if(isset($_SESSION['signed_in'])!=true){
            header("location:index.php");
        }
         $mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
         $id=$_SESSION['patientid'];
        //$query="SELECT Count(postID) as totalposts FROM patient,posts WHERE patientid=user_id AND user_id='$id'";
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
                        <a href="http://localhost/hackathon/modernhospital/public_html/paindex.php"><img src="amigos.png" id="logoami"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="Nav" >
                    <ul class="nav navbar-nav navbar-right">   
                        <!--<li><a href="paprofile.php" id="id11" class="id11"><span class="glyphicon glyphicon-user"></span> <span><?=$_SESSION['patientname'] ?></span></a></li>-->
                        <?php echo ($_SESSION["patientname"]); ?>
                        <li><a href="logout.php"id="id12"class="id12"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                    </ul>
               </div>
               </div>      
        </nav> 

    <?php
                                    $mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
                                    $query="SELECT * FROM doctor,posts WHERE docid=user_id ORDER BY postsID desc";
                                    $data = mysqli_query($mysqli,$query);
                                    $p = 2;
                                         while($row = mysqli_fetch_assoc($data)) {
                                          //echo("ggggg");
                                        $p++;
                                    $content=$row['postsCount'];
                                    $username=$row['docname'];
                                    $title=$row['postsTitle'];
                                    ?>  

        <div class="container" data-toggle="modal" data-target="#myModal<?php echo $p; ?>" style="padding-top: 50px; ">
            <div class="images2">
                        <a href="#">
                                <div class="thumbnail">
                                    <center><p class="gy" style="font-size:20px; font-family:MV Boli "> <?php echo $title; ?> </p></center>
                                    <div class="row">
                                        <div class="col-sm-3">
                                    
                                  </div>
                                </div>
                                    <center>  <p> by- <?php echo $username;?> </p>      </center>
                    </div>
                </a>
            </div>
        </div>
    <div class="container">
    <div class="modal fade" id="myModal<?php echo $p; ?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b> 
                  <center>
                       <?php echo $title; ?>
                  </center>
                </b></h4>
        </div>
        <div class="modal-body">
          
                <p style="font-family: Agency FB; text-align:justify; "> <?php echo $content; ?></p>
        </div>
        <div class="modal-footer">
            <p style="float: left;" > by- <?php echo $username;?></p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    </div>
            <?php
       }
       ?>
    </body>
</html>