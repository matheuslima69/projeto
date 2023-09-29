<?php
   if(isset($_POST["submit"]))
 {
   
   include_once('config.php');

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $data_nasc = $_POST['data_nasc'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];
 
  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
  VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
 }
 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | MSG</title>
    <link rel="stylesheet" href="estilosite11.css">
  
     
</head>
<body>


    <div class = "menu">
           
</div>
<div class = "fundo">
    <center>
    <img src="pitoco.jpg" alt="imagemfundo" width="110%" height = "80%">
</div>
    <div class="box">
        <form action="msg.php" method="POST">
            <fieldset>
                <legend><b>MSG Imports</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="nome" class="labelInput">senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="sexo" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="sexo" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="sexo" name="sexo" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
   

    <!DOCTYPE html>
<html lang="pt">
<head>
  <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

  <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>empresa</h4>
          <ul>
            <li><a href="#">sobre nós</a></li>
            <li><a href="#">nossos serviços</a></li>
            <li><a href="#">politica de privacidade</a></li>
            <li><a href="#">programas de afiliados</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>obter ajuda</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">envio</a></li>
            <li><a href="#">retornar</a></li>
            <li><a href="#">status do pedido</a></li>
            <li><a href="#">opções de pagamento</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>loja online </h4>
          <ul>
            <li><a href="#">assistir</a></li>
            <li><a href="#">bolsas</a></li>
            <li><a href="#">chuteiras</a></li>
            <li><a href="#">uniformes</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>redes sociais</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>
  <a href="loginfor.php">Voltar</a>
</body>
</html>