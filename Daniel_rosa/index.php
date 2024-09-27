<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Cadastro de Vinho</h1><br>
    <form action="#" method="post">
        <label for="nome">Nome do Vinho:</label>
        <input type="text" id="nome" name="nome" required><br><br>
 
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required><br><br>
 
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>
 
        <label for="safra">Safra:</label>
        <input type="number" id="safra" name="safra" required><br><br>
        <input type="submit" value="mostrar" name="mostrar"></br>
    </br>
        <input type="submit" value="verificar" name="verificar"></br>
    </form>
        
</body>
</html>
<?php 
    if(isset($_POST['mostrar'])){

        require_once 'Vinho.php';
    
        $vinho = new Vinho();
    
        $vinho->setNome( $_POST['nome']);
        $vinho->setPreco($_POST['preco']);
        $vinho->setTipo($_POST['tipo']);
        $vinho->setSafra($_POST['safra']);
        echo $vinho->mostrarVinho();
    
    }
    
    if(isset($_POST['verificar'])){
    
        require_once 'Vinho.php';
    
        $vinho = new vinho();
    
        $vinho->setNome( $_POST['nome']);
        $vinho->setPreco($_POST['preco']);
        $vinho->setTipo($_POST['tipo']);
        $vinho->setSafra($_POST['safra']);
        $verifc;
        $verific = $vinho->verificarPreco();

        switch ($verific){
            case true:
                echo "Produto em Oferta";
                break;
            case false:
                echo "Produto com o 
                preço normal ";
                break;
        }
    }
    ?>