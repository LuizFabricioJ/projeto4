<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <style>
    
    body{
    font-family: Arial, Helvetica, sans-serif;
    background: rgb(116,138,246);
    background: radial-gradient(circle, rgba(116,138,246,0.6979166666666667) 32%, rgba(250,140,163,0.6979166666666667) 100%);
    padding: 30px 0px; /*espaço ao redor do elemento dentro das bordas*/
    transition: 0.5s;
}
    .tela-login{
    background-color: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    border-radius: 20px;
    color:white;
}
        
    input{
            padding: 15px;
            border: none;
            outline: none;
            border-radius: 5px;
}
.inputSubmit{
    background-color: rgb(182, 114, 245);
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
}
.inputSubmit:hover{
        background-color: blueviolet;
        cursor: pointer;
}
    button{
        background-color: rgb(182, 114, 245);
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        color: white;
}
    button:hover{
        background-color: blueviolet;
        cursor: pointer;
}
       
    </style>
</head>
<body>
    <a href="../pagesalao/index.php">Voltar</a>
     <div class="tela-login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br>
        </form>
        <a href="formulario.php"><button>Cadastre-se</button></a>
    </div>

</body>
</html>