<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title><?php echo $classificationName; ?> vehicles | PHP Motors, Inc.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/phpmotors/styles/small.css" type="text/css" rel="stylesheet" media="screen">
  <link href="/phpmotors/styles/large.css" type="textt/css" rel="stylesheet" media="screen">
</head>

<body>


<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php';?>

<nav><?php echo $navList; ?></nav> 
<main>
<h1><?php echo $classificationName; ?> vehicles</h1>
<?php if(isset($message)){
 echo $message; }
 ?>

<?php if(isset($vehicleDisplay)){
 echo $vehicleDisplay;
} ?>

<hr>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php';?>

<script>
// function myFunction() {
//   var x = document.getElementById("myTopnav");
//   if (x.className === "topnav") {
//     x.className += " responsive";
//   } else {
//     x.className = "topnav";
//   }
// }
</script>

</body>
</html>