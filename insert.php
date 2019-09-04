<?php
session_start();
ob_start();
include_once("conexao.php");

//receber os dados do formulário
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);


//salvar os dados no DB
$query = "INSERT INTO markers (name, address, lat, lng, type)
            VALUES
             ('".$data['name']."', '".$data['address']."', '".$data['lat']."', '".$data['lng']."', '".$data['type']."')";

$result = mysqli_query($conn,$query);
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<script language='javascript'>alert('Cadastrado com sucesso.');</script>";
    header("Location: insert_form.php");
}else{
    $_SESSION['msg'] = "<script language='javascript'>alert('Erro ao cadastrar!');</script>";
    header("Location: insert_form.php");
}


?>