<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master5.css">
</head>

<body> 
<button class="btn btn-success btn-lg" type="button" onclick="myFunction()" >Back To Home</button> 
<div class="mainform">


Thanks! <?php echo $_POST["fullname"]; ?><br>
<br>
Your Request : <?php echo $_POST["consultation"]; ?>            /// Was Delivered!<br>
<br>
An answer will be sent to : <?php echo $_POST["email"]; ?>
<br>

</div>



<script>
  function myFunction() {
    location.href = "index.html";
  }
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>









</body>
</html>
