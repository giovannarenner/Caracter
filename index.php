<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Caracteres</title>
</head>
<body>
   
        <h1 class="titulo" >Digite uma palavra: </h1>
<form  method="POST">
           <input class="input" type="text" name="palavra" />
 
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['palavra'])){
      $palavra = $_POST['palavra'];
      $tamanho = strlen($palavra);
      $op = 0;

        echo "A palavra possui $tamanho caracteres <br>";
        
        while($op < $tamanho){
          $op++;
          echo $op."<br>"; 
        }

      }
            
         ?>
        </form>
        </div>
</body>
</html>