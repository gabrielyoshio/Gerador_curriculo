<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Currículo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #e0f7fa, #ffffff);
        }
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.1);
            max-width: 700px;
            margin-top: 50px;
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
        .btn-success {
            background: #007bff;
            border: none;
            border-radius: 50px;
            padding: 10px 30px;
            transition: all 0.3s;
        }
        .btn-success:hover {
            background: #0056b3;
            transform: scale(1.05);
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.5);
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Gerador de Currículo</h1>

    <form action="gerar.php" method="post">

        <div class="mb-3">
            <label class="form-label">Nome Completo</label>
            <input type="text" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Endereço (Cidade, Estado, País)</label>
            <input type="text" name="endereco" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Formação Acadêmica</label>
            <input type="text" name="formacao" class="form-control" placeholder="Curso, Instituição, Ano" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Objetivo Profissional</label>
            <textarea name="objetivo" class="form-control" rows="3" placeholder="Descreva seu objetivo profissional" required></textarea>
        </div>

        <h3>Experiências Profissionais</h3>
        <div id="experiencias">
            <div class="mb-3">
                <input type="text" name="experiencias[]" class="form-control" placeholder="Digite uma experiência">
            </div>
        </div>
        <button type="button" id="addExp" class="btn btn-sm btn-primary mb-3">+ Adicionar Experiência</button>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success btn-lg">Gerar Currículo</button>
        </div>
    </form>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script para adicionar experiências -->
<script>
$(document).ready(function() {
    $("#addExp").click(function() {
        $("#experiencias").append(`
            <div class="mb-3">
                <input type="text" name="experiencias[]" class="form-control" placeholder="Digite uma experiência">
            </div>
        `);
    });
});
</script>

</body>
</html>
