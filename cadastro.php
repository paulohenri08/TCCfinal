<?php

    if(isset($_POST['submit']))
    {
   //print_r('Nome: ' . $_POST['nome']);

   include_once "conexão.php";

   $nome = $_POST['nome'];
   $nacionalidade = $_POST['nacionalidade'];
   $tipoDocumento = $_POST['tipoDocumento'];
   $documento = $_POST['documento'];
   $telefone = $_POST['telefone'];
   $endereco = $_POST['endereco'];
   $cidade = $_POST['cidade'];
   $estado = $_POST['estado'];
   $data_nascimento = $_POST['data_nascimento'];
   $CNH = $_POST['cnh'];
   $genero = $_POST['genero'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result= mysqli_query($con, "INSERT INTO Clientes (Nome, Nacionalidade, TipoDocumento, Documento, Telefone, Endereco, Cidade, Estado, DataNascimento, CNH, Sexo, Email, Senha, Status_Cliente )
   VALUES('$nome', '$nacionalidade', '$tipoDocumento', '$documento', '$telefone', '$endereco', '$cidade', '$estado', '$data_nascimento', '$CNH', '$genero', '$email', 
   '$senha',
   1)");

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    
	
	
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Astro cars </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <style>
            body{
                color: black;
            }
            .box {
    color: white;
    width: 50%;
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 25%;
    margin: 50%;
    transform: translate(-50%, -50%);
    padding: 15px;
    border-radius: 15px;
}
fieldset {
  border: 5px solid #1abc9c;
}
legend{
  border: 1px solid #1abc9c;
  padding: 10px;
  text-align: center;
  font-size: 300%;
  background-color: #1abc9c;
  border-radius: 10px;
}
.inputBox {
  position: relative;
}
.inputUser {
  background: none;
  border: none;
  border-bottom: 1px solid white;
  outline: none;
  color: white;
  font-size: 15px;
  width: 100%;
  letter-spacing: 2px;
}
.labelInput {
  position: absolute;
  top: 0px;
  left: 0px;
  pointer-events: none;
  transition: .5s;
}

.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput{
  top: -20px;
  font-size: 12px;
  color: #1abc9c;

}

#data_nascimento {
  border: none;
  padding: 8px;
  border-radius: 10px;
  outline: none;
  font-size: 15px;
}
#submit {
  background-color: #1abc9c;;
  width: 100%;
  border: none;
  padding: 15px;
  color: white;
  font-size: 15px;
  border-radius: 10px;
}
#submit:hover {
  background-color: grey;
}
        </style>
    </head>
	
	
	
	
	
	
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
		  	 <a class="navbar-brand" href="tcc.php">Astro cars</a
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="portfolio.php">Veiculos</a>
                           <!-- <Ul class="phantomlist">
                             
                               <li class="lista1" value="picape"><a href="">Picape</a></li>
                               <li class="lista2" value="suv"><a href="">SUV</a></li>                               
                               <li class="lista3" value="hatch"><a href="">Hatch</a></li>
                               <li class="lista4" value="premium"><a href="">Premium</a></li>                               
                               <li class="lista5" value="seda"><a href="">Sedã</a></li>
                               
                          </Ul>-->
                        </li>
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Minhas Reservas</a></li>
				            		<li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.html">Login</a></li>
						
                    </ul>
                </div>
            </div>
        </nav>
	<section class="page-section" id="contact">
        <div class="box">
            <form action="cadastro.php" method="POST">
                <fieldset>
                    <legend><b>Cadastro</b></legend>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nacionalidade" id="nacionalidade" class="inputUser" required>
                    <label for="nacionalidade" class="labelInput">Nacionalidade</label>
                </div>   
                <br><br>
                <p>Tipo Documento:</p>
                <input type="radio" id="cpf" name="tipoDocumento" value="cpf" required>
                <label for="cpf">CPF</label><br>
                <input type="radio" id="rnm" name="tipoDocumento" value="rnm" required>
                <label for="rnm">RNM</label>  
                <br><br>
                <div class="inputBox">
                    <input type="number" name="documento" id="documento" class="inputUser" required>
                    <label for="documento" class="labelInput">Documento</label>
                </div>   
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>  
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div> 
                <br><br>
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
                
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cnh" id="cnh" class="inputUser" required>
                    <label for="cnh" class="labelInput">CNH</label>
                </div>  
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </form action>
        </div>
    </fieldset>
                    
        

    </section>
 </body>
</html>
