<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Informática</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <h1>Loja de Informática</h1>
    <form action="processa.php" method="POST">

        <label>Produto:</label>
        <select name="produto">
            <option value="teclado">Teclado Mecânico - R$ 120,00</option>
            <option value="monitor">Monitor - R$ 850,00</option>
            <option value="cadeira">Cadeira Gamer - R$ 950,00</option>
            <option value="mouse">Mouse Gamer - R$ 150,00</option>
        </select>
        <br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="1" required>
        <br><br>
        
        <label>Forma de pagamento:</label>
        <select name="pagamento" id="pagamento">
            <option value="pix">PIX</option>
            <option value="cartao">Cartão de Crédito</option>
        </select>
        <br><br>
        
        <label>Número de parcelas:</label>
        <select name="parcelas" id="parcelas">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>

        <br><br>
        <input type="submit" value="Comprar">
    </form>
</body>
</html>