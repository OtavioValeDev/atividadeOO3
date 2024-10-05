<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultor de Bebidas</title>
</head>

<body>
    <h1>Consultor de Bebidas</h1>
    <form action="" method="post">
        <p>Selecionar Bebida:</p>
        <select name="bebida" id="bebida">
            <option value="refri">Refrigerante</option>
            <option value="suco">Suco</option>
            <option value="vinho">Vinho</option>
        </select>
        <br><br>
        <input type="submit" name="mostrarBebida" value="Mostrar Bebida">
        <input type="submit" name="verificaPreco" value="Verificar Preço">
    </form>

    <?php
    require_once 'Refrigerante.php';
    require_once 'Suco.php';
    require_once 'Vinho.php';

    // Declaração dos objetos
    $objRefri = new Refrigerante();
    $objSuco = new Suco();
    $objVinho = new Vinho();

    // Definindo alguns valores para os objetos
    $objRefri->setNome("Coca-Cola");
    $objRefri->setPreco(4.5);
    $objRefri->setRetorno(true);

    $objSuco->setNome("Suco de Laranja");
    $objSuco->setPreco(2.0);
    $objSuco->setSabor("Laranja");

    $objVinho->setNome("Vinho Tinto");
    $objVinho->setPreco(20.0);
    $objVinho->setSafra("2020");
    $objVinho->setTipo("Seco");



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $bebidaSelecionada = $_POST['bebida'];

        switch ($bebidaSelecionada) {
            case 'refri':
                if (isset($_POST['mostrarBebida'])) {
                    echo $objRefri->mostrarBebida();
                }
                if (isset($_POST['verificaPreco'])) {
                    echo "Verificação do Preço: " . ($objRefri->verificarPreco() ? "Abaixo de 5" : "Acima de 5") . "<br>";
                }
                break;

            case 'suco':
                if (isset($_POST['mostrarBebida'])) {
                    echo $objSuco->mostrarBebida();
                }
                if (isset($_POST['verificaPreco'])) {
                    echo "Verificação do Preço: " . ($objSuco->verificarPreco() ? "Abaixo de 2.5" : "Acima de 2.5") . "<br>";
                }
                break;

            case 'vinho':
                if (isset($_POST['mostrarBebida'])) {
                    echo $objVinho->mostrarBebida();
                }
                if (isset($_POST['verificaPreco'])) {
                    echo "Verificação do Preço: " . ($objVinho->verificarPreco() ? "Abaixo de 25" : "Acima de 25") . "<br>";
                }
                break;

            default:
                echo "Selecione uma bebida válida.";
                break;
        }
    }
    ?>
</body>

</html>