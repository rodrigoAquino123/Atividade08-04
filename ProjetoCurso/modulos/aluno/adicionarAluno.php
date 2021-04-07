<?php include('classes/Aluno.class.php');

?>

<h1>Adicionar Aluno</h1>

<form class="adicionaraluno" method="post" action="">
 Nome: <input type='text' name='nome'> <br/><br/>
 Idade: <input type='text' name='idade'><br/><br/>
 Email: <input type='text' name='email'><br/><br/>
<input type='submit' name='botao' value="Salvar">
</form>
<br/><br/>
<?php

if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){

$aluno = new Aluno();    
$aluno->setNome($_POST['nome']);
$aluno->setIdade($_POST['idade']);
$aluno->setEmail($_POST['email']);


echo "<br/>  O nome digitado do Aluno: ".$aluno->getNome();
echo "<br/>  A idade digitada: ".$aluno->getIdade();
echo "<br/>  O Email digitado do Aluno: ".$aluno->getEmail();

}
    
?>