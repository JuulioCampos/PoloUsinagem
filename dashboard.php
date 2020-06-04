<?php require_once 'session/acesso_autorizado.php';?>

<h1 class="display-4">DASHBOARD ADMINISTRATIVO</h1>
<?php require_once "cabecalho.html";?>
<link rel="stylesheet" href="css/dashboard.css">

<?php
    require_once 'session/conexao.php' ;

 ?>

<div class="nav-bar menu">
    <span class="loger">Bem vindo &nbsp; <span class="user-data"><?php echo $_SESSION['user']; ?></span>  </span>
    <span class="logout-bt"><a href="session/logout.php">(Sair)</a></span>
    <hr />
    <nav class="menu-items">
        <ul class="nav nav-bar">
            <li class="nav-item">
            <a class="nav-link" href="session/banco.php"> Criar banco de dados</a>
            <?php if (isset($_GET['banco']) && $_GET['banco'] == 'sucesso') 
                echo " <script>alert('Banco criado com sucesso!')</script>"
            ?>     
            </li>
            <li class="nav-item">
            <a class="nav-link" href="session/tabelas_bd.php"> Criar tabelas de dados</a>
            <?php if (isset($_GET['tabela']) && $_GET['tabela'] == 'sucesso') 
                echo " <script>alert('Tabela criada com sucesso!')</script>"
            ?>
            </li>
            <li class="nav-item" >
            <a class="nav-link" href="session/inserir_dados.php">Inserir dados de usuário</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="session/consulta_dados.php">Consultar dados de usuários</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="session/inserir_produtos_fresamento.php">Cadastrar produtos de fresamento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link danger" href="session/excluir_produtos_fresamento.php">Excluir produtos de fresamento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="session/inserir_produtos_torneamento.php">Cadastrar produtos de torneamento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link danger" href="session/excluir_produtos_torneamento.php">Excluir produtos de torneamento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="nav-item">Alterar imagens do carrousel</a>
            </li>
        </ul>

        
    </nav>  
</div>