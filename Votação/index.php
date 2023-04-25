<!DOCTYPE html>
<html>
    <head>
        <title>Votação</title>
</head>
    <body>
        <div>
        <form method = "POST" action="">
        <b>Qual seu Voto?</b><br>
        <input type=radio name="op1" value="1"> Opção 1
        <input type=radio name="op2" value="2"> Opção 2
        <input type=radio name="op3" value="3"> Opção 3
        <br><br>
        <input type=submit name="Votar" value="Votar">
        <br><br>
        <?php
            $resulta = 0 ;
            $resultb = 0 ;
            $resultc = 0 ;

            if(isset($_POST["op1"])){
                $resulta++;
            }
            if(isset($_POST["op2"])){
                $resultb++;    
            }
            
            if(isset($_POST["op3"])){
                $resultc++;
            }
            echo "<b>Resultados</b>";
            echo("<br>Opção 1:".$resulta);
            echo("<br>Opção 2:".$resultb);
            echo("<br>Opção 3:".$resultc);
        ?>
        </form>
        </div>
    </body>
</html>