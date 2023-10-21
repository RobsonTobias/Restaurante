<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pedido</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rye&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

        /* Estilos para o corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ca4738;
        }

        /* Estilos para os cabeçalhos */
        h1 {
            color: #f7f7f5;
            font-family: 'Rye', cursive;
            text-shadow: #000000d8 2px 3px 5px;
        }

        h2 {
            color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
        }

        /* Estilos para os formulários */
        .form {
            background-color: #3a3b38;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Estilos para os links */
        a {
            text-decoration: none;
            color: #0074d9;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            padding: 15px;
        }

        a:hover {
            text-decoration: underline;
        }

        footer{
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            text-align: center;
            color: #f7f7f5;
        }
        .php-info{
            background-color: #fffd71;
            width: fit-content;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center; /* Adicionado para centralizar verticalmente */
            margin: 0 auto; /* Adicionado para centralizar horizontalmente */
            padding: 10px;
            border-radius: 5px;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.719);
        }
        .botao{
            font-weight: bold;
            background-color: #d3d3d3;
            padding: 15px;
            border-radius: 50px;
            width: fit-content;
            margin: 0 auto;
            margin-top: 30px;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.719);
        }
    </style>
</head>

<body>
    <div style="display: flex; justify-content: center;">
        <h1>Hamburgueria TaubaTEXAS</h1>
    </div>
    <div class="form">
    <h2>Resumo do Pedido</h2>
    <div class="php-info">
    <?php
    $total_pedido = 0;

    if (isset($_POST['item1'])) {
        $qt_item1 = intval($_POST['item1']);
        if ($qt_item1>0){
        $preco_item1 = 10;
        $total_item1 = $qt_item1 * $preco_item1;
        $total_pedido += $total_item1;
        echo "<p>Hamburguer - Quantidade: $qt_item1 - Total: R$" . number_format($total_item1, 2)."</p>";
    }
    }

    if (isset($_POST['item2'])) {
        $qt_item2 = intval($_POST['item2']);
        if ($qt_item2>0){
        $preco_item2 = 15;
        $total_item2 = $qt_item2 * $preco_item2;
        $total_pedido += $total_item2;
        echo "<p>Pizza - Quantidade: $qt_item2 - Total: R$" . number_format($total_item2, 2)."</p>";
        }
    }

    if (isset($_POST['item3'])) {
        $qt_item3 = intval($_POST['item3']);
        if ($qt_item3>0){
        $preco_item3 = 5;
        $total_item3 = $qt_item3 * $preco_item3;
        $total_pedido += $total_item3;
        echo "<p>Batata Frita - Quantidade: $qt_item3 - Total: R$" . number_format($total_item3, 2) . "</p>";
        }   
    }

    if (isset($_POST['item4'])) {
        $qt_item4 = intval($_POST['item4']);
        if ($qt_item4>0){
        $preco_item4 = 7;
        $total_item4 = $qt_item4 * $preco_item4;
        $total_pedido += $total_item4;
        echo "<p>Refrigerante lata - Quantidade: $qt_item4 - Total: R$" . number_format($total_item4, 2) . "</p>";
        }   
    }

    if (isset($_POST['item5'])) {
        $qt_item5 = intval($_POST['item5']);
        if ($qt_item5>0){
        $preco_item5 = 15;
        $total_item5 = $qt_item5 * $preco_item5;
        $total_pedido += $total_item5;
        echo "<p>Açaí - Quantidade: $qt_item5 - Total: R$" . number_format($total_item5, 2) . "</p>";
        }   
    }

    if ($total_pedido > 0) {
        echo "<p style='font-size: 20px; font-weight: bold;'> Total do Pedido: R$" . number_format($total_pedido, 2)."</p>";
    } 
    else {
        echo "<p><strong> Nenhum item selecionado.</p></strong>";
    }
    ?>
    </div>
    <div class="botao">
    <a href="index.html">Fazer outro pedido</a>
    </div>
    </div>
    <footer>
        <p>Desenvolvimento de Sistemas - Programação Web II</p>
        <p>Developed by Robson Tobias</p>
    </footer>
</body>

</html>