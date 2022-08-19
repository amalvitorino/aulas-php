<?php
//Header
include_once 'includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="ligth">Novo Aluno</h3>
        <div class="row">
            <form action="php_action/create.php" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input  name="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="apelido" type="text" class="validate">
                        <label for="apelido">Apelido</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="date" class="validate" name="data_nascimento">
                        <label for="data_nascimento">Data de nascimento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div> 
                <button type="submit" class="btn" name="btn_registar">Registar</button>
                <a href="index.php" class="btn green">Listar Alunos</a>
            </form>
        </div>
    </div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>