<html>
<head>
<style>
.baby
{
 text-color:blue;
 color:red;
 text-font:
}
#hr
{
  color:black;
}
#hi
{
  color:blue;
}
</style>
</head>

<body>
<?php
       include 'db.php';
        session_start();

       $fuser=$_SESSION['username'];
       $tuser=$_SESSION['tuser'];
       //$query="SELECT * FROM chatt where (fUser='$fuser' AND tUser='$tuser') OR (fUser='$tuser' AND tUser='$fuser') ORDER BY id ";
       $queryy="UPDATE chatt set status=0 WHERE fUser='$tuser' AND tUser='$fuser' ";
       $ran=$db->query($queryy); 
       $query="SELECT * FROM chatt where (fUser='$fuser' AND tUser='$tuser') OR (fUser='$tuser' AND tUser='$fuser') ORDER BY id ";
       $run=$db->query($query);
       while( $row = $run->fetch_array()) :
      

   ?>


     <div id="chat_data">
      <span class="baby"><font size=4><i><?php echo  $row['fUser'];?></i></font></span>:
        <span id="hr"><font size=4> <?php echo  $row['chat'];?></font</span>
         <span id="hi"><font size=4><?php echo formatDate($row['date']);?></font</span><br>
        
      
     </div> 
     <div>
    
    <?php endwhile;?>

</body>
</html>     
    

