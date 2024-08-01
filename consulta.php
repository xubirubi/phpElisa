<?php
include "conecta.php";
$sql = "SELECT id, nome, senha, email FROM usuario";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
echo "<br><b>Mostrando todos os registros<b><br>";
if(mysqli_num_rows($resultado) > 0){
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email: " . $registro["email"].
        "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
echo "<br><b>Nomes que começa com 'c'<b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario where nome like 'c%';";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if(mysqli_num_rows($resultado) > 0){
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email: " . $registro["email"].
        "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
echo "<br><b>Ordenar registros por email<b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario order by email;";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if(mysqli_num_rows($resultado) > 0){
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email: " . $registro["email"].
        "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
echo "<br><b>Verificar se existe usuario'Carlos' e senha='Carluxo e mostrar o seu email. Caso não existir, mostra uma mensagem '<b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario where nome = 'Carlos' and senha = 'Carluxo';";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if(mysqli_num_rows($resultado) > 0){
    while($registro = mysqli_fetch_assoc($resultado)){
        echo "id: " . $registro["id"]. " - Nome: " . $registro["nome"].
        " " . $registro["senha"]. " - Email: " . $registro["email"].
        "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}


?>