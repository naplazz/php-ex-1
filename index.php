<?php
$stringa = 'Lorem ipsum dolor sit amet';
$parola = $_GET["name"];
$output = str_replace($parola, "***", $stringa)
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title></title>
  <!-- Jquery --> <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <!-- Hendlebars --> <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <!-- font --> <script src="https://kit.fontawesome.com/a74e6d607f.js"></script>
  <!-- charts js --><script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<!-- mystyle -->  <link rel="stylesheet" href="style.css">
</head>

<body>
<h2><?php echo $output ?></h2>

<!-- My Js --> <script src="main.js" charset="utf-8"></script>
</body>

</html>
