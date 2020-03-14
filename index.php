<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Megasena</title>
</head>
<body>
    <?php
        $contador=isset($_GET['temp'])?$_GET['temp']:0;

    ?>
    <div class="topo">
        <h1>Megasena</h1>
    </div>
    <div class="numeros">
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
        <div class="numero"><?php echo $contador ==0 ? "?" :rand(1,60)?></div>
    </div>
    <div class="botao">
        <form action="index.php?temp=1" method="post">
            <button>Estou com Sorte</button>
        </form>
    </div> 
</body>
</html>
