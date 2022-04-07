<?php
    require __DIR__ . "/vendor/autoload.php";

    use \App\entity\add;

    if (isset($_POST['nomeAluno'], $_POST['email'], $_POST['cep'], $_POST['rua'], $_POST['senha'])){
        $obAdd = new add;
        $obAdd->nomeAluno = $_POST['nomeAluno'];
        $obAdd->email = $_POST['email'];
        $obAdd->cep = $_POST['cep'];
        $obAdd->rua = $_POST['rua'];
        $obAdd->senha = $_POST['senha'];
        $obAdd->cadastrar();
        
        header('location: index.php?status=success');
        exit;
    }

    include __DIR__ . "/includes/header.php";
    include __DIR__ . "/includes/formulario.php";
    include __DIR__ . "/includes/footer.php";