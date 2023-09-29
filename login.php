<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="estilo02.css">
    <style>
       
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: blue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: gray;
            cursor: pointer;
        }
    </style>
</head>
<body>
<video src="./comercio.mp4"
loop
muted
autoplay
width="100%">

</video>
    <a href="loginfor.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" placeholder="email">
        <br><br>
        <input type="password" placeholder="senha">
        <br><br>
        <input class="inputSubmit" type="submit" nome="submit" value="entrar">
        
    </div>

    
    
    
  
</body>
</html>