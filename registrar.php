<?php 
    include_once ("conexao.php");

    if (isset($_POST['cpfemp']) === true) {
        $cpfemp = $_POST['cpfemp'];
    } else {
        $cpfemp = false;
    } 
      
    if (isset($_POST['usuario']) === true) {
        $usuario = $_POST['usuario'];
    } else {
        $usuario = false;
    } 

    if (isset($_POST['isbnemp']) === true) {
        $isbnemp = $_POST['isbnemp'];
    } else {
        $isbnemp = false;
    } 

    if (isset($_POST['livro']) === true) {
        $livro = $_POST['livro'];
    } else {
        $livro = false;
    } 

    $sql = "insert into emprestimo (cpfemp, usuario, isbnemp, livro) values ('$cpfemp', '$usuario', '$isbnemp', '$livro')";
    
    if(mysqli_query($conecta, $sql)){
        echo "New record created successfully";
        header('Location: registrar.html');
        die();  
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
        echo $sql;
    }
    mysqli_close($conecta);

?>