<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $formacao = $_POST['formacao'];
    $objetivo = $_POST['objetivo'];
    $experiencias = $_POST['experiencias'];
} else {
    $nome = $email = $telefone = $endereco = $formacao = $objetivo = '';
    $experiencias = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #e0f7fa, #ffffff);
        }
        .curriculo {
            max-width: 800px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
        h3 {
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
            color: #007bff;
            margin-top: 30px;
        }
        .info-box {
            background-color: #e7f1ff;
            padding: 10px 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .info-box i {
            margin-right: 8px;
            color: #007bff;
            font-size: 1.2rem;
        }
        .card-body {
            background-color: #d6ecff;
            border-radius: 10px;
        }
        .btn-warning {
            border-radius: 50px;
        }
    </style>
</head>
<body>
<div class="curriculo">
    <h1>Currículo</h1>

    <h3>Dados Pessoais</h3>
    <div class="info-box"><i class="bi bi-person-fill"></i> <strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></div>
    <div class="info-box"><i class="bi bi-envelope-fill"></i> <strong>Email:</strong> <?php echo htmlspecialchars($email); ?></div>
    <div class="info-box"><i class="bi bi-telephone-fill"></i> <strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></div>
    <div class="info-box"><i class="bi bi-geo-alt-fill"></i> <strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></div>

    <h3>Formação Acadêmica</h3>
    <div class="info-box"><?php echo htmlspecialchars($formacao); ?></div>

    <h3>Objetivo Profissional</h3>
    <div class="info-box"><?php echo htmlspecialchars($objetivo); ?></div>

    <?php if(!empty($experiencias)): ?>
        <h3>Experiências Profissionais</h3>
        <div class="row">
        <?php foreach ($experiencias as $exp): ?>
            <?php if(!empty($exp)): ?>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <?php echo htmlspecialchars($exp); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="text-center mt-4">
        <button class="btn btn-warning btn-lg" onclick="window.print();">
            🖨️ Baixar / Imprimir Currículo
        </button>
    </div>
</div>
</body>
</html>
