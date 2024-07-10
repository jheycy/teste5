<?php

// isso é um comentario
echo "Hello word";
echo "<br> Olá Mundo </b>";

$nome= 'fulano';
define("PI" , 3.14);

echo PI;
echo $nome;


echo "Meu nome é:" . $nome . "<br>";
echo "Meu nome é: $nome<br>";

echo strlen($nome);

echo rand(0, 10);
echo "<br>";
$frutas = array('maça','banana', 'manga');

echo $frutas[0];

foreach($frutas as $elementos){
    echo $elementos . "<br>";
}

$idades = array("pedro"=>18, "magno"=>40);

echo $idades['magno'] . "<br>";

foreach($idades as $nome=>$idade){
    echo "$nome tem $idade anos <br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO mundo</h1>
</body>
</html>