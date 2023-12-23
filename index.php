<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  <div class="bg-slate-300">

    Hello, Docker!
  </div>
</body>
</html> -->

<?php
$a = 1;
$b = 2;
$c = $a + $b;
echo $c;
$request = $_SERVER['REQUEST_URI'];
$viewDir = __DIR__ . '/views';



switch ($request){

  case '/' :
    require $viewDir . '/index.php';
    break;
  }
?>
