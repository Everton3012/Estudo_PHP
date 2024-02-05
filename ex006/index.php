<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $altura = $_POST['altura'] ?? null;
        $peso = $_POST['peso'] ?? null;
    ?>
    <main>    
        <h1>Calcule o seu IMC</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="altura">Altura</label>
            <input type="number" name="altura" id="altura" value="<?=$altura?>" step="0.01"/>
            <label for="peso">Peso</label>
            <input type="number" name="peso" id="peso" value="<?=$peso?>" step="0.01"/>
            <input type="submit" value="Calcular" />
        </form>
    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $imc = $peso / ($altura * $altura) ?? 0;

            $faixa = "";

            if ($imc < 18.5) {
                $faixa = "Magreza";
            } else if( $imc >= 18.5 && $imc <= 25 ) {
                $faixa = "Normal";
            }else if( $imc >= 25 && $imc <= 30 ) {
                $faixa = "Sobrepeso";
            } else {
                $faixa = "Obesidade";
            }
            
            echo "<p> com o imc de :<strong> $imc </strong> sua faixa atual se enquandra em <strong> $faixa </strong> </p>"
        ?>
    </section>
</body>
</html>
