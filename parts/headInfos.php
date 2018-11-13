<?php
  $title = $bdd->query('SELECT title FROM movie');
  $title = $title->fetch();
?>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title><?php echo $title[0] ?></title>
    <link rel="stylesheet" href="./CSS/style.css"/>
</head>
