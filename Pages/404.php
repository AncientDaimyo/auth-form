<?php 
  session_start();
  require_once "paths.php"
?>
<head>
  <meta charset="utf-8" />
  <title>404</title>
  <link rel="stylesheet" href="<?php echo $rmBrowserStyle?>" />
  <link rel="stylesheet" href="<?php echo $mainStylePath?>" />
</head>
<body>
    <header><a href="/pages/main.php">Главная</a></header>
    <main>
        Страница не существует!
    </main>
    <footer></footer>
</body>
</html>
