<span class="titulo">Listar Usuario</span>

<?php

$sql_usuarios = "SELECT * FROM tb_usuarios";


$res = $conn->query($sql_usuarios);

$qtd = $res->num_rows;

$tabela = "";

if ($qtd > 0) {
    $tabela .= "<table class='table table-hover table-striped table-bordered'>";
    while ($row = $res->fetch_object()) {
        $tabela .= "<tr>";
        $tabela .= "<td>" . $row->id_usuario . "</td>";
        $tabela .= "<td>" . $row->usr_nome . "</td>";
        $tabela .= "<td>" . $row->usr_email . "</td>";
        $tabela .= "<td>" . $row->usr_cpf . "</td>";
        $tabela .= "<td>" . $row->idusr_tipo . "</td>";


        $tabela .= "<td><button onclick=\"location.href='?page=editar-usuario&id_usuario=". $row->id_usuario ."';\" class='btn btn-success'>Editar</button>
        
        <button onclick=\"if(confirm('Tem certeza que deseja excuir?')){location.href='?page=salvar-usuario&acao=excluir&id_usuario=". $row->id_usuario."'};\" class='btn btn-danger'>Excluir</button> </td>";
        $tabela .= "</tr>";
    }

    $tabela .= "</table>";
}

echo $tabela;
?>