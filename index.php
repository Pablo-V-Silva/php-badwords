<?php
$text='Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolore, eum nobis est odit sed quo modi facere rerum a, consequatur beatae numquam illum. Culpa amet dolores consectetur laudantium quidem.';

$word_censored= $_GET['word_censored'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Random Text</h1>

  <p><?= $text ?></p>

  <h2>Lunghezza e testo censurato</h2>
  <p><?= strlen($text)?></p>
  <p><?= str_replace(strtolower($word_censored), '***', strtolower($text))?></p>
  <h3>Lunghezza Frase Censurata</h3>
  <p><?= strlen(str_replace(strtolower($word_censored), '***', strtolower($text)))?></p>
</body>
</html>