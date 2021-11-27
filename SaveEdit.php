//salvar as alterações feitas
<?php
    // LISTAR OS PTS E REALIZAR O UPDAT ATARVES DA PAGINA 

    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $pet = $_POST['pet'];
        $raca = $_POST['raca'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];
        $Obs = $_POST['Obs'];
        
        $sqlUpdate = "UPDATE cadastro
        SET nome='$nome',pet='$pet',raca='$raca',sexo='$sexo',idade='$idade',Obs='$Obs'
        WHERE id=$id";
        $result = $conexao->query($sqlUpdate);
       
        print_r($result);
    }
    header('Location: listar.php');

?>
