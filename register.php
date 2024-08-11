<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <?php
    session_start();
    require 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
        $senha = $_POST['senha'];

        if (empty($nome) || empty($senha)) {
            $erro = "Nome de usuário e senha são obrigatórios.";
        } else {
            // Verificar se o usuário já existe
            $usuarioExistente = $collection->findOne(['nome' => $nome]);
            if ($usuarioExistente) {
                $erro = "Nome de usuário já está em uso.";
            } else {
                // Hash da senha
                $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

                // Inserir o novo usuário
                $result = $collection->insertOne([
                    'nome' => $nome,
                    'Password' => $senhaHash
                ]);

                if ($result->getInsertedCount() > 0) {
                    $mensagem = "Cadastro realizado com sucesso!";
                } else {
                    $erro = "Erro ao cadastrar o usuário.";
                }
            }
        }
    }
    ?>
    <main class="position-absolute top-50 start-50 translate-middle">
        <form method="POST">
            <img class="m-3" src="img/Design sem nome(10).png" alt="">
            <h1 class="text-center mb-4">Cadastro</h1>
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="Nome" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Senha" class="form-label">Senha:</label>
                <input type="password" name="senha" id="Senha" class="form-control" required>
            </div>
            <?php if (!empty($erro)): ?>
                <div class="alert alert-danger"><?php echo $erro; ?></div>
            <?php endif; ?>
            <?php if (isset($mensagem)): ?>
                <div class="alert alert-success"><?php echo $mensagem; ?></div>
            <?php endif; ?>
            <button type="submit" class="btn btn-danger px-5" style="width: 250px;">Cadastrar</button>
            <div class="text-center mt-3">
                <a href="index.php">Já tem uma conta?</a>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </main>
</body>
</html>
