<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Staatliches&display=swap" rel="stylesheet">
<title>Car Rental Branch Revenues</title>

<style>
  p, h1, h4{
    font-family: 'Montserrat', sans-serif;
  }

form {
    display: inline-block;
    text-align: left;
    font-family: 'Montserrat', sans-serif;
}


body {
  background-image: url('circles-light.png');
 text-align: center;
}
input[type=checkbox] {
    vertical-align: middle;
    position: relative;
    bottom: 1px;
}

 .btn {
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


.btn:hover {opacity: 1}

h1{
    font-family: 'Staatliches', cursive;
    font-size:50px;
    margin: 0px;  }


</style>

<script language="JavaScript">
  function toggle(source) {
  checkboxes = document.getElementsByName('branch[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
</head>
<body>
<br><center><h1>Branch Revenues</h1></center>
<p>Choose the branches you would like to view: </p>


<form action = "details.php" method="post">
  
  <input type="checkbox" id="Scranton-Scott" name="branch[]" value="Scranton-Scott">
  <label for="Scranton-Scott"> Scranton-Scott</label><br>
  <input type="checkbox" id="Scranton-Barnard" name="branch[]" value="Scranton-Barnard">
  <label for="Scranton-Barnard"> Scranton-Barnard</label><br>
  <input type="checkbox" id="Pawnee" name="branch[]" value="Pawnee">
  <label for="Pawnee"> Pawnee</label><br>
    <input type="checkbox" id="Bubba-Gump" name="branch[]" value="Bubba-Gump">
  <label for="Bubba-Gump"> Bubba-Gump</label><br>
    <input type="checkbox" id="Gilmore" name="branch[]" value="Gilmore">
  <label for="Gilmore"> Gilmore</label><br>
    <input type="checkbox" id="Fargo" name="branch[]" value="Fargo">
  <label for="Fargo"> Fargo</label><br>
    <input type="checkbox" id="Isla Nublar" name="branch[]" value="Isla Nublar">
  <label for="Isla Nublar"> Isla Nublar</label><br>
    <input type="checkbox" id="Delorean" name="branch[]" value="Delorean">
  <label for="Delorean"> Delorean</label><br>
    <input type="checkbox" id="Upside Down" name="branch[]" value="Upside Down">
  <label for="Upside Down"> Upside Down</label><br>
  <input type="checkbox" onClick="toggle(this)"/> <strong>Select All</strong> <br><br>
  <center><input type="submit" class= "btn" name="submit" value="Submit"></center>

</form>

</body>
</html>