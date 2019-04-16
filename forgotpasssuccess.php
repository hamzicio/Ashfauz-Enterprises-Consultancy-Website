<?php
$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";
$conn= mysqli_connect($server,$username,$password,$data);
if($conn)
{
if(isset($_POST['pno']) && isset($_POST['cnic']))
{
  $pno=$_POST['pno'];
  $cnic=$_POST['cnic'];
  if(!empty($pno)  && (!empty($cnic)))
  {
      
     $query=mysqli_query($conn,"SELECT * FROM  members WHERE pnum='$pno' AND cnic='$cnic'");
      $que=mysqli_num_rows($query);
      if($que==1) 
      {
      $row=mysqli_fetch_assoc($query);
      if($query==1)
      {
      $pass=$row['password'];  
      $msg = "Your Login Credentails Are:\n P.NO : $pno \n Password : $pass\n";
      $msg = wordwrap($msg,70);
      mail($row['email'],"EXCISE CLUB PASSWORD",$msg);
   
      echo '<script>alert("Your Password Has Been Mailed To You");</script>';
      echo '<script>
      window.location.href = "https://www.ashfauz.com/exciseclub.php";
      </script>';
      }
      else
      {
      echo '<script>alert("You Are Not Registered With Us");</script>';
      echo '<script>
      window.location.href = "https://www.ashfauz.com/exciseclub.php";
      </script>';
      }
  }
  }
  else
  {
     echo '<script>alert("Enter Credentials First");</script>';
     echo '<script>
     window.location.href = "https://www.ashfauz.com/exciseclub.php";
     </script>';
  }
}
  else
  {
     echo '<script>alert("Enter Credentials First");</script>';
     echo '<script>
     window.location.href = "https://www.ashfauz.com/forgotpass.php";
     </script>';
  }
}
?>



<?php>
include 'scripts.php';
include 'footer.php';

?>

