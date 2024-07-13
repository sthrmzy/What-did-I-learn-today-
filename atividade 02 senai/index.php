<?php
include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $turma = $POST['turma'];
    $datadeteccao = $_POST['datadeteccao'];
    $sintomas = $_POST['sintomas'];

    $sql = "INSERT INTO monitoramento (nome, sobrenome, telefone, turma, datadetecção, sintomas) VALUES ('$nome', '$sobrenome', '$telefone', '$turma', '$datadeteccao', '$sintomas')";
    
    if ($conn->query($query) === TRUE){
    echo 'Registro criado com sucesso!';
   } else{
    echo 'Erro ao criar seu registro:' . $conn->error;
   }
}   
?>

<form method="POST">
        

            <fieldset class="nome_completo">
                <div class="nome">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" nome="sobrenome" id="sobrenome" required>
                </div>
            </fieldset>

            <div>
                <label for="telefone">telefone</label>
                <input type="text" nome="telefone" id="telefone" required>
            </div>

            <div>
             <label for="turma">Turma</label>
             <input type="text" nome="turma" id="turma" required>
            </div>

            <div>
              <label for="datadeteccao">Data de detecção</strong></label>
              <input type= "date" nome="datadeteccao" id="datadeteccao" required>
        
            <div>
              <label for="sintomas">Sintomas</label>
              <input type="boolean" nome="sintomas" id="sintomas" required>
            </div>

              <button class="botao" type="submit" onsubmit="">Concluido</button>

        </form>
