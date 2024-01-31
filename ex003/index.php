<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    $num = 0x1A;
    $nome = "Everton";
    $sobrenome = "Moura";

    echo $num;

    const PAIS = "Brasil ";

    echo "Muito Prazer, $nome $sobrenome voce mora no " . PAIS;

    $nome = " David";
    $sobrenome = "Ribeiro";

    echo "Muito Prazer, $nome $sobrenome";

    echo "Muito Prazer, $nome $sobrenome voce mora no " . PAIS;

    $v = 300;
    var_dump($v);

    $vet = [6,3.5,"unreal",65, true];
    var_dump($vet);

    class Pessoa {
        private string $nome;
    }

     $p = new Pessoa;
     var_dump($p);
?>
</body>
</html>