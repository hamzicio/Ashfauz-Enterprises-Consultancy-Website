<?php
include 'header.php';
$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";
$conn= mysqli_connect($server,$username,$password,$data);
if($conn)
{
if(isset($_POST['pno'])  && isset($_POST['password']))
{
  $pno=$_POST['pno'];
  $password=$_POST['password'];
  if(!empty($pno) && (!empty($password)))
  {
      
     $query=mysqli_query($conn,"SELECT * FROM  members WHERE pnum='$pno' AND password='$password'");
      $que=mysqli_num_rows($query);
      if($que==1) 
      {
      $row=mysqli_fetch_assoc($query);      
      session_start();  
      $_SESSION["id"] = $row["id"];
      $_SESSION['name']=$row["name"];
      $status=$row["status"];
      if($status==1)
      {
      echo '<script>
      window.location.href = "https://www.ashfauz.com/loginsuccess.php";
      </script>';
      }
      else
      {
      echo '<script>alert("Incorrect Credentials");</script>';
      echo '<script>
      window.location.href = "https://www.ashfauz.com/exciseclub.php";
      </script>';
      }
  }
  else
  {
        echo '<script>alert("Incorrect Credentials");</script>';
      echo '<script>
      window.location.href = "https://www.ashfauz.com/exciseclub.php";
      </script>';
      
  }
  }
  else
  {
     echo '<script>alert("Enter Details First");</script>';
     echo '<script>
     window.location.href = "https://www.ashfauz.com/exciseclub.php";
     </script>';
  }
}
}
?>



<?php>
include 'scripts.php';

include 'footer.php';

?>

