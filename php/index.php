<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="subtrair.php" method="GET">
            <label for="nome">Número 1</label>
            <input type="text" name="numero1" id="numero1">
            <br>
            <label for="">Número 2</label>
            <input type="text" name="numero2" id="numero2">
            <button type="submit">subtrair</button>
        </form>

        <br>

        <form action="processar.php" method="GET">
            <label for="nome">Número 1</label>
            <input type="text" name="numero1" id="numero1">
            <br>
            <label for="">Número 2</label>
            <input type="text" name="numero2" id="numero2">
            <button type="submit">Somar</button>
        </form>

        <br>
        
        <form action="multiplicar.php" method="GET">
            <label for="nome">Número 1</label>
            <input type="text" name="numero1" id="numero1">
            <br>
            <label for="">Número 2</label>
            <input type="text" name="numero2" id="numero2">
            <button type="submit">Multiplicar</button>
        </form>

        <br>
        
        <form action="dividir.php" method="GET">
            <label for="nome">Número 1</label>
            <input type="text" name="numero1" id="numero1">
            <br>
            <label for="">Número 2</label>
            <input type="text" name="numero2" id="numero2">
            <button type="submit">Dividir</button>
        </form>
</body>
</html>