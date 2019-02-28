<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Função</title>
    </head>
    <body>
        <?php
        echo "Exercício 1 <br>";
        
        $num=1;
        
        function numero_primo ($num){
        $count=0;
         for ($i=1;$i<=$num;$i++){
             if ($num % $i == 0){
                 $count=$count+1;
             }
         }
         if ($count == 2 ){
             echo "É primo!";
             
         }else{
             echo "É composto!";
         }
        }
        numero_primo($num);
        
        echo "<br> Exercício 2 <br>";
        
        
        ?>
        <ul>
        <?php
         echo "<br> Exercício 3 <br>";
         
         $color = array (
             'Azul',
             'Rosa',
             'Roxo',
             'Amarelo',
             'Verde',
             'Cinza',
             'Marrom',
             'Preto',
             'Vermelho',
             'Laranja'
         );
         
         function cores ($color){
             for($i = 0;$i < count($color);$i++){
        ?>
            <li>
            <?php
                
                 echo $color[$i];
            ?>
            </li>
        <?php
             }
         }
         cores($color);
        ?>
        </ul>
    </body>
</html>
