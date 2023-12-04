<h1>
    listar usuarios
</h1>

<?php 

$sql = " SELECT * FROM usuários";

$res = $conn ->query($sql);

$qdt = $res ->num_rows;

if($qdt > 0){
    echo "<table class='table table-dark table-striped table-hover table-bordered'>";
    echo "<tr>";
    echo "<td>"."#"."</td>";
    echo "<td>"."Nome"."</td>";
    echo "<td>"."E-mail"."</td>";
    echo "<td>"."Data de nascimento"."</td>";
    echo "<td>"."Ações"."</td>";
    echo "</tr>";
   while($row = $res->fetch_object()){
    echo "<tr>";
    echo "<td>".$row->id."</td>";
    echo "<td>".$row->nome."</td>";
    echo "<td>".$row->email."</td>";
    echo "<td>".$row->data_nasc."</td>";
    echo "<td> 
        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" 
    class='btn btn-success btn-sm'> Editar </button>

        <button onclick=\"if(confirm('Tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger btn-sm'> Excluir 
        
        
        </button>


    </td>";
    echo "</tr>";
   };
   echo "</table>";

}else{
    echo "<p class='alert alert-danger>Não encontrou usuarios";
}



?>