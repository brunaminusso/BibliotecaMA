<?php 
        
    include_once ("conexao.php");

    if (isset($_POST['isbn']) === true) {
        $isbn = $_POST['isbn'];
    } else {
        $isbn = false;
    } 

    if (isset($_POST['titulo']) === true) {
        $titulo = $_POST['titulo'];
    } else {
        $titulo = false;
    } 

    if (isset($_POST['autor']) === true) {
        $autor = $_POST['autor'];
    } else {
        $autor = false;
    } 
    
    if (isset($_POST['tema']) === true) {
        $tema = $_POST['tema'];
    } else {
        $tema = false;
    } 
    
    if (isset($_POST['data']) === true) {
        $data = $_POST['data'];
    } else {
        $data = false;
    } 

    if (isset($_POST['cat']) === true) {
        $cat = $_POST['cat'];
    } else {
        $cat = false;
    } 
    
    if (isset($_POST['qtde']) === true) {
        $qtde = $_POST['qtde'];
    } else {
        $qtde = false;
    } 
    
    $sql = "insert into livro (isbn, titulo, autor, tema, data, categoria, qtde) values ('$isbn', '$titulo', '$autor', '$tema', '$data', '$cat', '$qtde')";
    if(mysqli_query($conecta, $sql)){
        echo "New record created successfully";
        header('Location: cadastrar.html');
        die(); 
    }else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
        echo $sql;
    }
    mysqli_close($conecta);

?>