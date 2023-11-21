



<?php
 $name = 'karim';
 $nome= $_POST['replace'];

 $text='Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eaque unde praesentium enim repellendus quia possimus numquam
 consequuntur officiis quos similique, doloremque sunt aut architecto corporis quibusdam iste quo libero
 ex voluptas voluptatem ut officia omnis.ex voluptas voluptatem ut officia omnis.ex voluptas voluptatem ut officia omnis.
 Maxime fugit quo harum laborum, minus laboriosam dolores dolorum repudiandae atque saepe modi assumenda! Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eaque unde praesentium enim repellendus quia possimus numquam
 consequuntur officiis quos similique, doloremque sunt aut architecto corporis quibusdam iste quo libero
 ex voluptas voluptatem ut officia omnis.ex voluptas voluptatem ut officia omnis.ex voluptas voluptatem ut officia omnis.
 Maxime fugit quo harum laborum, minus laboriosam dolores dolorum repudiandae atque saepe modi assumenda!';


 $new_text= str_replace($nome,"*** ", $text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro php</title>
</head>
<body>
    <p><?php echo $text ?></p>
    <p>Lunghezza:<?php echo strlen($text) ?> caratteri </p>
    <p>
        <?php echo  $new_text?>
    </p>
    <p> Lunghezza: <?php echo strlen($new_text) ?> caratteri </p>

</body>
</html>