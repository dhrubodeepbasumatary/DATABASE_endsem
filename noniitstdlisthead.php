
<?php  
session_start();
?>

<!DOCTYPE>
<html>
<title>
chat page
</title>
<head>


<style>
#hi
{
color:green;

}

</style>

</head>

<body>

<div class="center">

<?php
       include 'db.php';

       $username=$_SESSION['username'];

       $query="SELECT  distinct fUser FROM chatt where tUser='$username' AND status=1 ORDER BY id DESC"; 
       $run=$db->query($query);
       //echo "hii bro ";
      // echo $username;
       while( $row = $run->fetch_array()) :
       

   ?>


     <div id="chat_data">
      
      <a href="iitchat.php?names=<?php echo $row['fUser']; ?>" > <span id="hi"><font size=4><?php echo $row['fUser'];?>&nbsp; </font><font size=4 color="blue">* new text</font></span> </a>

  
       
     </div> 
     <div>
    
     <?php endwhile;?>



<?php
       //include 'db.php';

      // $username=$_SESSION['username'];

       $queryy="SELECT  distinct fUser FROM chatt where tUser='$username'AND status=0 ORDER BY id  DESC"; 
       $ran=$db->query($queryy);
       //echo "hii bro ";
      // echo $username;
       while( $raw = $ran->fetch_array()) :
       

   ?>


     <div id="chat_data">

      <a href="iitchat.php?names=<?php echo $raw['fUser']; ?>" > <span id="hi"><font size=4><?php echo $raw['fUser'];?></font></span> </a>

  
       
     </div> 
     <div>
    
     <?php endwhile;?>



</div>

</body>
</html>

