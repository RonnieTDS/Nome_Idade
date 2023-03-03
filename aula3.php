  <!DOCTYPE html>
<html>
    <head>
        <title>Aula 3</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Idade:</td>
                    <td><input type="text" name="idade"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{
    
    $nome  = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($nome == $idade)
    {
        echo "<br>Você digitou seu nome e idade com valores iguais, corrija por favor um deles!";
    }
    else
    {
        echo"<br>Você digitou seu nome e idade com valores diferentes, agora está ok!";

    }


    echo "<br>O Valor da variável nome é igual a:".$nome;

    echo "<br>";

    echo "O Valor da variável idade é igual a:".$idade;

}

?>