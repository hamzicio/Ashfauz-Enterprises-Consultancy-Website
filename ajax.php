<style type = "text/css">
 
body
{
  font-family: 'Oxygen', sans-serif;
font-family: 'Libre Franklin', sans-serif;
}

@media screen and (max-width: 35.5em) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 8px 0;
  }
  table td
  {
    font-size: 12px;
  }
  table tbody tr td {
    padding-left: 45%;
    margin-bottom: 12px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    position: absolute;
    font-weight: 700;
    width: 40%;
    left: 10px;
    top: 0;
  }
  body
{
  font-family: 'Oxygen', sans-serif;
font-family: 'Libre Franklin', sans-serif;
}


}


h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 20px;
  color: #00664d;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 15px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
}
section{
  margin: 50px;
}




/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

 </style>
<?php
include "db.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
$Name=$_POST['search'];
//Search query.

$Query="SELECT Name, Phone,Email,Image,Designation FROM search WHERE Name LIKE '%$Name%' LIMIT 5";
//Query execution
$ExecQuery=MySQLi_query($con, $Query);
?>
<table>
<tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Photo</th>
                </tr> 
 <?php
   //Fetching result from database.

 
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
 
       ?>
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
   <a  onclick='fill("<?php echo $Result['Name']?>")'>
 
 

                <?php echo"<tr>
                    <td>".$Result['Name']."</td>
                    <td>".$Result['Phone']."</td>
                    <td>".$Result['Email']."</td>
                    <td>".$Result['Designation']."</td>
                    <td>";
                    echo '<img src="data:image/png;base64,'.base64_encode($Result['Image']).' "height=30" width="30" />';
                    echo "</td></tr>";?>
     
 
   </a>
 
   <?php
}}
?>
