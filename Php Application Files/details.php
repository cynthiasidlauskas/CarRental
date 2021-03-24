<?php

$db = mysqli_connect('localhost', 'root','52596','carrental4') //change to your credentials
or die('Error connecting to MySQL server.')
?>

<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Staatliches&display=swap" rel="stylesheet">
<title>Revenues</title>
<style>
table {
  font-family: 'Montserrat', sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin: auto;
  padding: 10%;
 
}
body {
  background-image: url('circles-light.png');
  opacity: 0.75;
}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
th{
  color: white;
}
tr:nth-child(even) {
  background-color: #E4E5E6;
}
 tr:nth-child(odd){
  background-color: #99CCCC ;
 }
  tr:first-child th {
  background-color: #004466;
  border-bottom:3px solid #dddddd

}

p, h1, h3{
   font-family: 'Montserrat', sans-serif;
  }


   #myButton {
  background-color:  #016699;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  font-size: 12px;
  margin: 4px 2px;
  opacity: 0.7;
  transition: 0.3s;
   border-radius: 16px;
   font-family: 'Montserrat', sans-serif;
}
h1{
    font-family: 'Staatliches', cursive;
    font-size:50px;
    margin: 0px;  }


#myButton:hover {
  opacity: 1
}

</style>
</head>
<body>

<br><center><h1>Branch Revenues</h1></center>
<table>
	<tr>
		<center><th>Branch Name</th></center>
		<center><th>Total Revenue</th></center>
	</tr>
 <?php
 $branch = (isset($_POST['branch'])) ? $_POST['branch'] : array(); //this is calling the selected checkboxes

$branches = implode("', '",$branch); //comma seperated list

$query = "SELECT BranchName, CONCAT('$', (ROUND(SUM(PaymentAmount), 2))) AS TotalRevenue
FROM Payment p
JOIN Reservation r ON p.ReservationID = r.ReservationID 
JOIN Rentals ren ON ren.ReservationID = r.ReservationID
JOIN Branch b ON b.BranchID = ren.BranchID 
WHERE BranchName IN ('$branches')
GROUP BY b.BranchName 
ORDER BY BranchName"; //may need to change to match your mySQL database values


 mysqli_query($db, $query) or die("Error querying the database."); //connects to the databse
$results = mysqli_query($db, $query);


 while($row = mysqli_fetch_array($results))
     { 
         echo "\t<tr><td>".$row['BranchName']."</td><td>".$row['TotalRevenue'] ."</td></tr>\n" ; //puts it into a table
     } 

?>


</table>

<br ><center><button id="myButton" class="float-left submit-button" >Restart</button></center>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "home.php";
    };
</script>
</body>
</html>



