<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Função</title>
    </head>
    <body>
        <?php
        echo "Exercício 1 <br>";
        
        $numero_inicial = 16;
			echo $numero_inicial."<br>";
			function numero_primo ($primo) :bool{
				$cont =0;
				for ($i=1 ; $i <= $primo ; $i++) { 
					if ($primo % $i == 0) {
							$cont++;
						}	
				}
				if ($cont == 2){
					return true;
				}else{
					return false;
				}
			}
			if (numero_primo($numero_inicial)) {
				echo "Número primo";
			}else{
				echo "Número composto";
			}
        
        
        echo "<br> Exercício 2 <br>";
        
        for ($j=1; $j <= 100 ; $j++) { 
				if (numero_primo($j)) {
					echo $j." ";
				}
			}
        
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
