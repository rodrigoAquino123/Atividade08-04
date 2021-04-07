<?php
    $alunos = array();
    $alunos[] = array("id" => 1, "nome" => "Felipe Silva",  "idade" => 19,"email" => "felipesilva@gmail.com");
    $alunos[] = array("id" => 2, "nome" => "Camila Eduarda","idade" => 18, "email" => "camilaeduarda@gmail.com");
    $alunos[] = array("id" => 3, "nome" => "Pedro Monte",   "idade" => 23, "email" => "pedromonte@gmail.com");
    $alunos[] = array("id" => 4, "nome" => "Caio Eduardo",  "idade" => 17,"email" => "caio@gmail.com");            
?>
<table class = "listarAluno" border = "1">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Email</th>
</tr>

<?php
    foreach($alunos as $aluno){
?>
    <tr>
        <td><?php echo $aluno['id'];?></td>
        <td><?php echo $aluno['nome'];?></td>
        <td><?php echo $aluno['idade'];?></td>
        <td><?php echo $aluno['email'];?></td>
    </tr>
<?php
    }
?>
</table>