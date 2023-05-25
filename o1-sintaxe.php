<?php 
//Sintaxe e variáveis

#comentário de uma linha só

/*comentario
de varias linhas */

echo "Olá";
echo "<h1>PHP - Estudando</h1>";
print("<h3>Aula 02</h3>");
print_r("Vamos Estudar!!!");

echo "<h3>Mensagem</h3>";
echo 9.99;

$nome = "Henrique"; //texto = string
$idade = 18; // númerico intiro = integer
$altura= 1.75; //númerico decimal = double
$solteiro = false; //booleano = boolean

echo "<br>";
echo gettype($nome) . "<br>";
echo gettype($idade) . "<br>";
echo gettype($altura) . "<br>";
echo gettype($solteiro) . "<br>";

echo $nome;
echo "<br>";
echo $nome . $idade;
echo "<br>";
echo $nome . " - " . $idade ."<br>";
echo "Nome: " . $nome . "<br>";
echo "Nome: $nome <br>";
echo 'Nome: $nome <br>';


echo "<h1>Operações</h1>";
$n1 =10;
$n2 = 2;

echo $n1+$n2;
echo"<br>";
echo "$n1 + $n2 = " . $n1+$n2 . "<br>";
echo $n1 - $n2 ."<br>";
echo $n1 * $n2 . "<br>";
echo $n1 / $n2 . "<br>";
echo $n1 % $n2 . "<br>";
echo $n1 ** $n2 . "<br>";
?>