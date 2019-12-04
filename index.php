<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Galgje</title>
  </head>
  <body>
    <img src="img/background.gif" >
    <form class="form" action="index.php" method="post">
      <input type="text" name="word" value="">
      <input type="submit" name="submit" value="start">
    </form>
  </body>
</html>

<?php

$woord;
$woordString = '';
$lives = 11;
$message = '';
$won = 'false';

$woordenArray = array('bitacademy', 'sciencepark', 'matrixvii', 'jarvis', 'bitcoins', 'pneumonoultramicroscopicsilicovolcanoconiosis', 'iphone');

if (isset($_POST['submit']))
{

  $woord = $_POST['word'];

  if ($woord == '')
  {
    $woord = $woordenArray[0];
  }

  MaakWoordString($woord);

  setcookie('woord', $woord);
  setcookie('woord_string', $woordString);
  setcookie('lives', $lives);
  setcookie('message', $message);
  setcookie('won', $won);

  header('Location: game.php');

}

function MaakWoordString($string)
{
  global $woordString;
  for ($i=0; $i < strlen($string); $i++)
  {
    $woordString = $woordString . '_';
  }
}


 ?>
