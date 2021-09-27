<?php 

$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, accusantium fugit fugiat rerum sapiente quos rem sunt consequatur ab iste maiores explicabo sint quidem inventore excepturi totam, quis, aut adipisci eaque! Fuga magni officiis quaerat minus quod possimus culpa, aliquam, vitae fugiat commodi ipsum saepe. Error voluptatem accusantium deserunt sapiente?';
$paragraph_length = strlen($paragraph);
$badword = $_GET['word'];
$censored_paragraph = str_replace($badword, '***', $paragraph);
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
   echo $paragraph ; 
   ?></h1>
<p>Il paragrafofo contiene <?php echo $paragraph_length?> lettere</p>
</body>

<h2><?php echo $censored_paragraph ?></h2>

</html>