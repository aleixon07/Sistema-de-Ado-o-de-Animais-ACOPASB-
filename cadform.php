<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #737373;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 600px; /* Ajuste o valor para a largura total da caixa */
            display: grid;
            grid-template-columns: 1fr 1fr; /* Duas colunas com largura igual */
            gap: 20px; /* Espaço entre as colunas */
        }

        .column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        h2 {
            color: #FAB700;
            text-align: center;
            grid-column: span 2; /* Para ocupar duas colunas */
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #ff8c00;
        }

        input[type="submit"] {
            background-color: #FAB700;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 15px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #e67e00;
        }
    </style>
</head>
<body>
<?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>

    <form action="scripts/cadastro.php" method="POST">
    <div class="container">
    
        <h2>Cadastro</h2>
        <div class="column">

        
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required>
        </div>
        <div class="column">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" required>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" required>

            <label for="senha">Senha:</label>
            <input type="password" name="password" required>
        </div>
        <input type="submit"  value="Cadastrar">
</form>
    </div>
</body>
</html>


