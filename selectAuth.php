<?php 
session_start();
?>
<?php
if(isset($_POST['login_btn']))
{
    $option = isset($_POST['authenticationType']) ? $_POST['authenticationType'] : false;
   if ($option) {
      $val= htmlentities($_POST['authenticationType'], ENT_QUOTES, "UTF-8");
   } else {
      $_SESSION['status']= 'Select one option';
      header("Location: index.php");
   }
   if($val==1)
      header("Location: http://ec2-52-66-50-224.ap-south-1.compute.amazonaws.com/auth1.php");
   else if($val==2)
      header("Location: http://ec2-13-232-54-26.ap-south-1.compute.amazonaws.com/auth2.php");
   else
      echo $val;

}

?>
