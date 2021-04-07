<?php
    $cursos = array();

    $cursos[] = array("id" => 1, "curso" => "Assistente administrativo  ",     "preco" => "R$ 23,00");
    $cursos[] = array("id" => 2, "curso" => "Java do básico ao Avançado ",     "preco" => "R$ 23,00");
    $cursos[] = array("id" => 3, "curso" => "Photoshop  ",                     "preco" => "R$ 23,00");
    $cursos[] = array("id" => 4, "curso" => "InDesign   ",                     "preco" => "R$ 23,00");
    $cursos[] = array("id" => 5, "curso" => "Sql do zero ao avançado    ",     "preco" => "R$ 23,00");
    $cursos[] = array("id" => 6, "curso" => "Informática Básica     ",         "preco" => "R$ 23,00");
?>

<table class = "listarcurso" border = "1">

<tr>
    <th>ID</th>
    <th>Curso</th>
    <th>Preço</th>
</tr>

<?php
    foreach($cursos as $curso){
?>
<tr>
    <td><?php echo $curso['id'];?></td>
    <td><?php echo $curso['curso'];?></td>
    <td><?php echo $curso['preco'];?></td>
</tr>
<?php
    }
?>
</table>