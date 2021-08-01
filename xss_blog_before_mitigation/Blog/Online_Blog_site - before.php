<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal">
<h1>VIT Student Blogs</h1>
</div>
<br><center> <form name="XSS" action="#" method="GET">
			<input type="text" name="name">
			<button >Search</button>
		</form></center>
        
<div class="w3-content">

<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image1.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Blog by Mahith Kumar</h2>
  <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image2.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Monterosso</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image3.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Vernazza</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>
<div class="w3-row w3-margin">

<div class="w3-third">
  <img src="image4.jpg" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <h2>Manarola</h2>
   <br>
  <button>Click here to read more </button>
</div>

</div>

</div>

<?php

if(!array_key_exists ("name", $_GET) || $_GET['name'] == NULL || $_GET['name'] == ''){

 $isempty = true;

} else {
        
 echo ' ' . $_GET['name'];
    
}
?>
</body>
</html>
