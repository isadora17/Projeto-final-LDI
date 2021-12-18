<?php
include_once 'DBConnection.php';

$nome       = $_POST['nome'];
$prontuario = $_POST['prontuario'];

function select($nome, $prontuario){
    $connection = new DBConnection();
    $resultSet  = $connection->query("SELECT *FROM aluno WHERE nome LIKE '%$nome%' AND prontuario LIKE '%$prontuario%';");
    $strOut =  "<hr>"."<table border=1>";
    while ($linha = mysqli_fetch_assoc($resultSet)) {
        $strOut .=
        "<tr>".
        "<td>". $linha['id']           ."</td>".
        "<td>". $linha['nome']           ."</td>".
        "<td>". $linha['prontuario']          ."</td>".
        "<td>". $linha['turma']           ."</td>".
        "</tr>";
    }
    $strOut .= "</table>";
    return ($strOut);
}

echo select($nome, $prontuario);
echo "Aluno encontrado!";

?>