<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliacão 01</title>
</head>

<body>
<style>
  body{
    background-color:#a80909ce;
  }
  
  
</style>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $i = 1;
        while ($i <= 6) {
            echo "<h$i>Título $i</h$i>";
            $i++;
        }
    }
    ?>
    <form method="post" id = "style">
        <input type="submit" value="Clique para ver ver os títulos"></form>
</body>

</html>