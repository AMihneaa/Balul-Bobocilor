<?php
 require_once "controllerUserData.php";


if (isset($_POST['numeconcurent'])) {
    
  
    $emailus=$_SESSION["email"];

    $usercheck=(string)$_POST['numeconcurent'];
    
    echo $usercheck;
    
       $sql1_=$con->query("SELECT vot_fete FROM usertable WHERE email='$emailus'");
 
 
    
    if($sql1_->fetch_assoc()["vot_fete"])
    
    {    
    
    
   $sql1=$con->query("SELECT count_votes FROM concurenti WHERE name='$usercheck'");
   
   $sql2=(int)$sql1->fetch_assoc()["count_votes"]+1;
    $sql=$con->query("UPDATE concurenti SET count_votes=$sql2 WHERE name='$usercheck'");
    $sql12=$con->query("UPDATE usertable SET vot_fete=0 WHERE email='$emailus'");
     $sql13=$con->query("UPDATE usertable SET afisare_fete='$usercheck' WHERE email='$emailus'");
    $_SESSION["OKF"]= 1;
    
        
    }
 
      header('location: index.php');
    
}
 
?>