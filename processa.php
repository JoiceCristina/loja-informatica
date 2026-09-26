<?php
    $produto = $_POST["produto"];
    $quantidade = $_POST["quantidade"];
    $pagamento = $_POST["pagamento"];
    $parcelas = $_POST["parcelas"] ?? 1;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resumo da Compra</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        if ($quantidade <= 0) {
            echo "<h1>Erro</h1>";
            echo "<p>A quantidade deve ser maior que 0.</p>";
            echo "<a class='botao-voltar' href='index.php'>Voltar ao início</a>";
        } else {
            if ($produto == "teclado") {
                $nome = "Teclado Mecânico";
                $preco = 120;
            } else if ($produto == "monitor") {
                $nome = "Monitor";
                $preco = 850;
            } else if ($produto == "cadeira") {
                $nome = "Cadeira Gamer";
                $preco = 950;
            } else if ($produto == "mouse") {
                $nome = "Mouse Gamer";
                $preco = 150;
            } else if ($produto == "headset") {
                $nome = "Headset Gamer";
                $preco = 250;
            } else if ($produto == "webcam") {
                $nome = "Webcam Full HD";
                $preco = 180;
            } else if ($produto == "notebook") {
                $nome = "Notebook";
                $preco = 3500;
            } else if ($produto == "ssd") {
                $nome = "SSD 1TB";
                $preco = 450;
            }

            $subtotal = $preco * $quantidade;
            echo "<h1>Resumo da Compra</h1>";
            echo "<p><strong>Produto:</strong> $nome</p>";
            echo "<p><strong>Valor unitário:</strong> R$ "
                . number_format($preco, 2, ',', '.')
                . "</p>";
            echo "<p><strong>Quantidade:</strong> $quantidade</p>";
            echo "<p><strong>Subtotal:</strong> R$ "
                . number_format($subtotal, 2, ',', '.')
                . "</p>";

            if ($pagamento == "pix") {
                $desconto = $subtotal * 0.05;
                $total = $subtotal - $desconto;
                echo "<p><strong>Forma de pagamento:</strong> PIX</p>";
                echo "<p><strong>Desconto:</strong> R$ "
                    . number_format($desconto, 2, ',', '.')
                    . "</p>";
                echo "<p><strong>Valor total:</strong> R$ "
                    . number_format($total, 2, ',', '.')
                    . "</p>";
            } else {
                echo "<p><strong>Forma de pagamento:</strong> Cartão de Crédito</p>";
                if ($parcelas >= 1 && $parcelas <= 3) {
                    $total = $subtotal;
                    $valorParcela = $total / $parcelas;
                    echo "<p><strong>Parcelas:</strong> $parcelas</p>";
                    echo "<p><strong>Juros:</strong> Sem juros</p>";
                    echo "<p><strong>Valor de cada parcela:</strong> R$ "
                        . number_format($valorParcela, 2, ',', '.')
                        . "</p>";
                    echo "<p><strong>Valor total:</strong> R$ "
                        . number_format($total, 2, ',', '.')
                        . "</p>";
                } else {
                    $juros = $subtotal * 0.015 * $parcelas;
                    $total = $subtotal + $juros;
                    $valorParcela = $total / $parcelas;
                    echo "<p><strong>Parcelas:</strong> $parcelas</p>";
                    echo "<p><strong>Juros:</strong> R$ "
                        . number_format($juros, 2, ',', '.')
                        . "</p>";
                    echo "<p><strong>Valor de cada parcela:</strong> R$ "
                        . number_format($valorParcela, 2, ',', '.')
                        . "</p>";
                    echo "<p><strong>Valor total:</strong> R$ "
                        . number_format($total, 2, ',', '.')
                        . "</p>";
                }
            }
            echo "<a class='botao-voltar' href='index.php'>Voltar ao início</a>";
        }
        ?>
    </div>
</body>

</html>