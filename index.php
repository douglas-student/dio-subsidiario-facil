<html>

<head>
<title>Cadastro de Subsidiárias</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

// Configurações de conexão com o banco de dados
$servername = "SEU_ENDERECO_IP"; // Coloque o IP ou nome do host do seu banco de dados
$username = "SEU_USUARIO"; // Coloque o usuário do banco de dados
$password = "SUA_SENHA"; // Coloque a senha do banco de dados
$database = "meubanco"; // Nome do banco de dados

// Criar conexão
$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Função para gerar CNPJ
function gerarCNPJ($quantidade) {
    $cnpjs = [];

    while (count($cnpjs) < $quantidade) {
        $cnpj = sprintf('%02d.%03d.%096d', rand(1, 99), rand(0, 999), rand(0, 999999999));
        $cnpj = substr($cnpj, 0, 14); // Formato: 00.000.000/0000-00
        if (!in_array($cnpj, $cnpjs)) {
            $cnpjs[] = $cnpj;
        }
    }

    return $cnpjs;
}

// Gera 10 CNPJs e insere no banco
$cnpjs = gerarCNPJ(10); // Gera 10 CNPJs
foreach ($cnpjs as $cnpj) {
    $nome_fantasia = "Nome Fantasia " . rand(1, 100); // Nome fantasia aleatório

    $query = "INSERT INTO empresas_subsidiarias (NomeFantasia, CNPJ) VALUES ('$nome_fantasia', '$cnpj')";

    if ($link->query($query) === TRUE) {
        echo "Novo registro criado com sucesso: $nome_fantasia - $cnpj <br>";
    } else {
        echo "Erro: " . $link->error . "<br>";
    }
}

?>
</body>
</html>
