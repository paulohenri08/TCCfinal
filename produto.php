DOCTYPE html>
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
            .container1{
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: calc(100vh - 85px);
                gap: 100px;
            }
            .left-side{
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .items1{
                align-self: flex-end;
                
                border-radius: 10px;
            }
            .select-image{
                max-width: 500px;
            }
            .select-image img{
                width: 100%;
                border-radius: 10px;
            }
            .thumbnails{
                display: flex;
                justify-content: space-evenly;
                gap: 10px;
                max-width: 500px;
            }
            .thumbnail img{
                width: 100%;
                border-radius: 10px;
            }
            .right-side{
                width: 100%;
                display:flex;
                flex-direction: column;
            }
            .content1{
                max-width: 500px;
                display:flex;
                flex-direction: column;

            }
            .right-side p{
                color:black;
            }
            .price{
                font-size: 20px;
                font-weight: 700;
            }
            .data{
                display: flex;
                align-items: center;
                position: relative;
                text-decoration: none;
                border-bottom: 2px;
                border-color: black;
                border-width: 1px;
            }
            #data_Retirada {
                padding: 8px;
                border-radius: 5px;
                outline: none;
                font-size: 15px;
                display: flex;
                height: 10px;
            }
            #data_Devolucao {
                padding: 8px;
                border-radius: 5px;
                outline: none;
                font-size: 15px;
                display: flex;
                height: 10px;
            }
            .button1{
                background-color: #33005f;
                width: 120px;
                border-radius: 5px;
                text-align: center;

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
                           <Ul class="phantomlist">
                               <li class="lista1"><a href="">Hatch</a></li>
                               <li class="lista2"><a href="">Picape</a></li>
                               <li class="lista3"><a href="">SUV</a></li>
                               <li class="lista4"><a href="">Minivan</a></li>                             
                               <li class="lista5"><a href="">Premium</a></li>
                               <li class="lista6"><a href="">Sedã</a></li>                           
                          </Ul>
                        </li>
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Minhas Reservas</a></li>
				        <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
						
                    </ul>
                </div>
            </div>
        </nav>
<br>
<br>
<br>
<br>
<br>
        <section>
            <div class="container1">
                <div class="left-side">
                    <div class="items1">
                        <div class="select-image">
                            <img src="imagens/fiat-argo_1_vermelho.jpg">
                        </div><br>
                            <div class="thumbnails">
                                <div class="thumbnail">
                                    <img src="imagens/lateral_argo2019.jpg">
                                </div>
                                <div class="thumbnail">
                                    <img src="imagens/portamalas_argo2019.jpg">
                                </div>
                                <div class="thumbnail">
                                    <img src="imagens/interior2_argo2019.jpg">
                                </div>
                                <div class="thumbnail">
                                    <img src="imagens/interior1_argo2019.jpg">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="content1">
                        <H1>Fiat Argo Drive GSR 1.3</H1>
                        <H6>Flex</H6>
                        <p>Ocupantes=5; Câmbio=manual sequencial com modo automático de 5 marchas; Tração=dianteira; Direção=elétrica; Motorização=1.3; Potência(cv)=109; Torque(kgf.m)=14,2; Velocidade Máxima(km/h)=184; Consumo cidade(km/l)=8,98; Consumo estrada(km/l)=10</p>
                        <H5>Preço Diária: <span class="price">R$59.99</span></H5>
                        <div class="data">
                            <label for="data_Retirada"><b>Data de Retirada:</b></label>
                            <input type="date" name="data_retirada" id="data_retirada" required>
                            <label for="data_Devolucao"><b>Data de Devolução:</b></label>
                            <input type="date" name="data_devolucao" id="data_devolucao" required>
                        </div><br>
                        <a href="" class="button1"><H3> Alugar</H3> </a>
                    </div>
                </div>
            </div>
        </section>

        
    </body>
</html>