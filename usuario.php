<?php 
        
    include_once ("conexao.php");

    if (isset($_POST['cpf']) === true) {
        $cpf = $_POST['cpf'];
    } else {
        $cpf = false;
    } 
      
    if (isset($_POST['nome']) === true) {
        $nome = $_POST['nome'];
    } else {
        $nome = false;
    } 

    if (isset($_POST['datanasc']) === true) {
        $datanasc = $_POST['datanasc'];
    } else {
        $datanasc = false;
    } 
    
    if (isset($_POST['telefone']) === true) {
        $telefone = $_POST['telefone'];
    } else {
        $telefone = false;
    } 
    
    if (isset($_POST['genero']) === true) {
        $genero = $_POST['genero'];
    } else {
        $genero = false;
    } 
    
    if (isset($_POST['email']) === true) {
        $email = $_POST['email'];
    } else {
        $email = false;
    } 


    $sql = "insert into usuario (cpf, nome, datanasc, telefone, genero, email) values (".$cpf.", '$nome', '$datanasc', '$telefone', '$genero', '$email')";
    if(mysqli_query($conecta, $sql)){
        echo "New record created successfully";
        header('Location: usuario.html');
        die(); 
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
        echo $sql;
    }
    mysqli_close($conecta);


  
?>