<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMILLING FRIENDS</title>
</head>
<body>
    <div>
        <button class="btn">Entrar</button>
        <button class="btn">Cadastrar-se</button>
    </div>

    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button class="btn" type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>