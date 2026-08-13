<?php
require 'model/dao/conexao.php';
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['test'])){
        try{
            conexao::getConexao();
            $msg = "<p style='color:green;' >Conexão realizada com sucesso!</p>";
       } catch (Exception $e) {$msg = '<p style="color:red;">Erro na conexão: ' . $e->getMessage() . "</p>";}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h2>SISTEMA ESCOLAR</h2>
<?php echo $msg; ?>
<form method="POST">
    <button type="submit" name="test">Testar conexao
    </button>
</form>

<hr>

<form method="post">
    <h3>Cadastrar Usuário</h3>

    <input type="text" name="nome" placeholder="Nome" require><br><br>
    <input type="email" name="email" placeholder="E-mail" require><br><br>
    <input type="password" name="senha" placeholder="Senha" require><br><br>
        <select name="perfil_id">
            <option value="1">Administrador</option>
            <option value="2" selected>Cliente</option>
        </select><br><br>

<button type="submit" name="btn_cadastrar">Cadastrar</button>

</form>


</body>
</html>