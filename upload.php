<?php
session_start();
include 'header.php';
$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";
$conn= mysqli_connect($server,$username,$password,$data);
if($conn)
{
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql=mysqli_query($conn,"INSERT INTO admin(images,type,size) VALUES ('$file','$file_type','$file_size')");
 
 if($sql)
 {
   '<script>window.href.location="view.php"</script>';
 }
 else
 {
     echo 'hi';
     printf("%s",mysqli_error($conn));
 }

 }
 
 
}
?>

<?php
include 'scripts.php';
include 'footer.php';
?>