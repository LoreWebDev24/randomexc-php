<?php 

$name = $_POST['name'];
$age  = $_POST['age'];
$int_value_age = (int) $age;
$mail = $_POST['mail'];
$message = '';

if(strlen($name)> 3 && str_contains($mail ,'@') && str_contains($mail ,'.')) {
    $message = 'Accesso Riuscito';
} else {
    $message = 'Accesso Negato o Dati ancora da Inserire';
}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random Exc </title>
</head>

<body>

<style>
    /* form {
        display: flex;
        gap:10px;
    } */
</style>

  <form action="index.php" method="POST">
    <input type="text" name="mail" placeholder="Email">
    <input type="number" name="age" placeholder="Age">
    <input type="text" name="name" placeholder="Name">
    <input type="submit" value="Submit">
  </form>

  <p>
    <?php echo $message; ?>
  </p>
</body>

</html>