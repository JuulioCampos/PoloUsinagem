<?php require_once 'conexao.php' ?>

<?php 
session_start();

$conexao = novaConexao();

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql= "SELECT usuario, senha FROM cadastro WHERE usuario = '$usuario' AND senha = '$senha' ";

    $resultado = $conexao->query($sql);

    $rows = $resultado->num_rows;
    
    if($rows > 0){

       ?> <script> alert("Logado com sucesso")</script>
        <?php setcookie("login", $usuario);
        $_SESSION['user'] = $usuario;
        header("location: ../dashboard.php?login=sucesso");
    }else{
        header('Location: ../login.php?login=invalido');
    };  

    $conexao->close(); 

    echo $resultado->num_rows;


  