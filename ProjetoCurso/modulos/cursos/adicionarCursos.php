<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/Cursos.class.php");
    include("classes/DB.class.php");

    $curso = new Curso();

    $curso->setCurso($_POST['curso']);
    $curso->setPreco($_POST['preco']);
    $curso->adicionar();

}
?>


<h1>Adicionar Curso</h1>

<form class = "adicionarcursos" method="post" action="">
Nome do Curso: <input type='text' name='curso'> <br/><br/>
Preço do Curso: <input type='text' name='preco'><br/><br/>
<input type='submit' name='botao' value="Salvar">
</form>
