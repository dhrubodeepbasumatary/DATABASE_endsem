
<html>
<head>

</head>
<style>
.baby
{
 text-color:blue;
 color:solid black;
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
<body>
<?php
       include 'db.php';
       session_start();
       $fuser=$_SESSION['username'];
       $tuser=$_SESSION['tuser'];
      // $query="SELECT * FROM chatting where (fromUser='$fuser' AND toUser='$tuser') OR (fromUser='$tuser' AND toUser='$fuser') ORDER BY id "; 
       $queryy="UPDATE chatt set status=0 WHERE fUser='$tuser' AND tUser='$fuser' ";
       $ran=$db->query($queryy);
       $query="SELECT * FROM chatt where (fUser='$fuser' AND tUser='$tuser') OR (fUser='$tuser' AND tUser='$fuser') ORDER BY id ";
       $run=$db->query($query);
       while( $row = $run->fetch_array()) :
      

   ?>


     <div id="chat_data">
      <span class="baby"><font size=4><i><?php echo  $row['fUser'];?></i></font></span>:
        <span id="hr"><font size=4> <?php echo  $row['chat'];?></font></span>&nbsp;&nbsp;&nbsp;
         <span id="hi"> <font size=4><?php echo formatDate($row['date']);?></font></span>
      
     </div> 
     <div>
    
    <?php endwhile;?>

</body>
</html>
