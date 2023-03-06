<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
      <img src="./img/polytech.png" alt="МосПолитех" class="logo">
      <h1 class="header__text">2.1 Домашняя работа</h1>
    </header>
    <main>
      <?php
        $dynamic_content = "Hello, World!"; 
        echo "<h2>$dynamic_content</h2>"; 
      ?>
    </main>
    <footer>
      <p>Задание для самостоятельной работы</p>
    </footer>


</body>
</html>
