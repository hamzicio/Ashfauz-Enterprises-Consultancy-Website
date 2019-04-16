<?php>
$server= "localhost";
$password = "AO0DJXZIHEJE";
$username= "ashfauz_admin";
$data= "ashfauz_members";
$conn= mysqli_connect($server,$username,$password,$data);
if($conn)
{
 echo '<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>' ;
 $sql="SELECT * FROM admin";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result_set))
 {

       echo '<tr>';
       echo '<td>'; echo $row['images']; echo '</td>';
       echo '<td>'; echo $row['type']; echo '</td>';
       echo '<td>'; echo $row['size']; echo '</td>';
       echo '<td><a href="uploads/'; echo $row['images']; echo '>view file</a></td>';
        echo '</tr> ';
 }
echo '</table>';

}
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

<?php

?>