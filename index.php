<?php 

$badword = 'Camillo';
$badWords = array(
    'Bastard' => '***',
    'Beaver' => '***',
    'Beef curtains' => '***',
    'Bellend'=> '***',
    'Bloodclaat'=> '***',
    'Clunge'=> '***',
    'Cock'=> '***',
    'Dick'=> '***',
    'Dickhead'=> '***',
    'Fanny'=> '***',
    'Flaps'=> '***',
    'Gash'=> '***',
    'Knob'=> '***',
    'Minge'=> '***',
    'Prick'=> '***',
    'Punani'=> '***',
    'Pussy'=> '***',
    'Snatch'=> '***',
    'Twat'=> '***',
);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
   <h1> <?php 
   echo $badword . ' è una parola lunga: ' . strlen($badword) . ' lettere'; 
   ?></h1>

<form name="form" action="" method="get">
  <input type="text" name="word" id="word" >
</form>
</body>

<h2><?php echo strtr($_GET['word'], $badWords);; ?></h2>

</html>