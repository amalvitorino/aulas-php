<?php
//Header
include_once 'includes/header.php';
include_once 'php_action/db_connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `alunos` WHERE `id` = $id";
    $resultado = mysqli_query($conexao,$sql);
    $dados = mysqli_fetch_array($resultado);
}


?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="ligth">Editar Aluno</h3>
        <div class="row">
            <form action="php_action/update.php" method="POST" class="col s12">
                <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                <div class="row">
                    <div class="input-field col s6">
                        <input  name="nome" type="text" class="validate" value="<?php echo $dados['nome']; ?>">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="apelido" type="text" class="validate" value="<?php echo $dados['apelido']; ?>">
                        <label for="apelido">Apelido</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="date" class="validate" name="data_nascimento" value="<?php echo $dados['data_nascimento']; ?>">
                        <label for="data_nascimento">Data de nascimento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" type="email" class="validate" value="<?php echo $dados['email'];?>">
                        <label for="email">Email</label>
                    </div>
                </div> 
                <button type="submit" class="btn" name="btn_editar">Editar</button>
                <a href="index.php" class="btn green">Listar Alunos</a>
            </form>
        </div>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>