<!DOCTYPE>
<?php 
   include 'db.php';
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style >
.container
{
   position: relative;
   top: -120px;
   right: -1196px;
  }
</style>>



<style type="text/css">
body{
       background:url('https://previews.123rf.com/images/digitalgenetics/digitalgenetics1003/digitalgenetics100300164/8224243-3d-man-walking-on-arrows-Stock-Photo-man-direction-arrow.jpg');    
       padding-top:100px;     


    }
#nav1{  
	 margin-top:350px;
         margin-right: 100px;
         margin-left: 450px;
         margin-top: 200px;
	

     }
#nav1>a{
            background:grey;
            color: black;
            margin-right: 110px;
            padding: 100px;
            border-radius: 50px;
            opacity: .60;
            
          }
.chat_q{
    background-color: lightgrey;
    width: 300px;
    border: 25px solid green;
    padding: 25px;
    margin-left: 15px;
    margin-top:-350px;
}

</style>
</head>
<body>

    <div class="container">


        <a href="index.php?log=logout" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>

    </div>   
   



	<nav id="nav1">
    <a href="home1.php" ><strong>Go to chat</strong></a>
    <a href="discussion.php?id=0"><strong>Discussion Forum</strong></a>
   	</nav>


   <?php

     $sql="SELECT * FROM userInfo ORDER BY id DESC LIMIT 1";
  
     $run=$db->query($sql); 


     while($row = $run->fetch_array()) :
   
   ?>
    <div class="chat_q">
        <i><font size="5" color="maroon"><strong>Notification !</strong></font></i><br>
        <span id="hr"> <font size="4.5" font color="blue"><b><?php echo  $row['username'];?></font></b></span> <b>of</b><br>
        <span id="hr"> <font size="4" color="brown"><?php echo  $row['college'];?></font></span><b> registered  on</b><br>
        <span id="hr"> <font size="4" color="orange"><?php echo  $row['dat'];?></font></span> <br><b>you can go to the chat room and talk to him/her</b>.
          
     </div> 
    <?php  endwhile; ?>



 </body>
 </html>
