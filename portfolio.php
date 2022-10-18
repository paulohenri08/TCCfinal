<!DOCTYPE html>
<html lang="pt-br">
    
	
	
	<head>
        <?php
        include_once "conexão.php";

        ?>
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

        <Style>
            li{

                justify-content: space-between;
                gap: 200px;
            }
            .card{
                height: 500px;
            }
            .minilista{
                display: flex;
                display: inline-block;
                justify-content: space-between;
                gap: 200px;
            }
        </Style>
    </head>
	
	
	
	
	
	
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
		  	 <a class="navbar-brand" href="tcc.php">Astro cars</a
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Veiculos</a>
                           <Ul class="phantomlist">
                             
                               <li class="lista2"><a href="">Picape</a></li>
                               <li class="lista3"><a href="">SUV</a></li>
                               
                               <li class="lista5"><a href="">Hatch</a></li>
                               <li class="lista6"><a href="">Premium</a></li>
                               
                               <li class="lista8"><a href="">Sedã</a></li>
                               
                          </Ul>
                        </li>
                        <li class="nav-item mx-0 mx-lg-2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Minhas Reservas</a></li>
				            		<li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.html">Login</a></li>
						
                    </ul>
                </div>
            </div>
        </nav>

              <section class="page-section portfolio" id="portfolio">
               <div class="container">
                  <!-- Portfolio Section Heading--><br>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Veículos Disponíveis</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
				<!--Carros-->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
                  <?php 
                    $sql = 'SELECT * FROM informacoes_basicas';
                    if ($res=mysqli_query($con, $sql)){
                        $nomeVeiculo = array();
                        $marca = array();
                        $preco = array();
                        $combustivel = array();
                        $anoModelo = array();
                        $Categoria = array();
                        $imagem = array(); 
                        $i = 0;

                        while($reg=mysqli_fetch_assoc($res)){
                            $nomeVeiculo[$i] = $reg['modelo_veiculo'];
                            $marca[$i] = $reg['marca_veiculo'];
                            $preco[$i] = $reg['preco_veiculo'];
                            $combustivel[$i] = $reg['combustivel_veiculo'];
                            $anoModelo[$i] = $reg['anoModelo_veiculo'];
                            $Categoria[$i] = $reg['genero_veiculo'];
                            $imagem[$i] = $reg['imagem_veiculo'];
                            ?>

                         
        
		
		
	                   	<div class="col">
                        <div class="card shadow-sm">
           
		                    <img class="img-fluid" <?php echo '<img src=" ./imagens/'.$imagem[$i].'" ' ?> ; alt="..." />

                       <div class="card-body">
			
			                    <h2><?php echo $nomeVeiculo[$i]; ?></h2>
                                 <p class="card-text">  Diária <br> <?php echo $preco[$i]; ?></p>
			                     <p class="card-text"> <?php echo $marca[$i]; ?></p>
                                 <div class="d-flex justify-content-between align-items-center"></div>
                                 <div class="btn-group"></div>


				                <icon-kilometer _ngcontent-wqs-c72=""><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6454_50991)"><path d="M11.9527 2.08005L11.9436 2.07043C11.9389 2.06553 11.934 2.06081 11.9291 2.05609L11.9187 2.04611C10.6032 0.735731 8.82211 0 6.96532 0C5.10854 0 3.32741 0.735731 2.0119 2.04611L2.0021 2.05555C1.99683 2.06045 1.99157 2.06589 1.98794 2.06971L1.97868 2.07933C1.3271 2.73413 0.810877 3.51087 0.459482 4.36518C0.108087 5.21949 -0.0715985 6.13465 -0.0693144 7.0584C-0.0670304 7.98216 0.117178 8.89642 0.472794 9.74898C0.828409 10.6015 1.34847 11.3757 2.00328 12.0273C2.65808 12.6789 3.43482 13.1951 4.28913 13.5465C5.14344 13.8979 6.0586 14.0776 6.98235 14.0753C7.90611 14.073 8.82037 13.8888 9.67293 13.5332C10.5255 13.1776 11.2997 12.6575 11.9512 12.0027C13.2629 10.6847 13.9993 8.90108 13.9996 7.04167C13.9999 5.18227 13.2639 3.3984 11.9527 2.08005ZM6.96523 10.1656C6.77675 10.1656 6.59251 10.1097 6.43581 10.0049C6.27911 9.9002 6.15699 9.75135 6.08489 9.5772C6.01278 9.40306 5.99394 9.21144 6.03073 9.02659C6.06752 8.84173 6.1583 8.67194 6.29159 8.53867C6.42488 8.40541 6.59469 8.31466 6.77956 8.2779C6.96442 8.24115 7.15603 8.26003 7.33016 8.33217C7.50429 8.4043 7.65312 8.52645 7.75783 8.68317C7.86254 8.83989 7.91843 9.02414 7.91843 9.21262C7.91781 9.46522 7.81718 9.70729 7.63855 9.88588C7.45992 10.0645 7.21783 10.1651 6.96523 10.1656ZM5.45583 10.4379L5.52354 10.5145C5.7041 10.7188 5.92601 10.8824 6.17458 10.9945C6.42314 11.1065 6.69267 11.1645 6.96532 11.1645C7.23797 11.1645 7.50751 11.1065 7.75607 10.9945C8.00463 10.8824 8.22655 10.7188 8.4071 10.5145L8.47499 10.4379H11.9645L11.6699 10.8064C11.1059 11.5127 10.3902 12.0829 9.57574 12.4747C8.76132 12.8666 7.86912 13.0701 6.96532 13.0701C6.06153 13.0701 5.16933 12.8666 4.35491 12.4747C3.54049 12.0829 2.82475 11.5127 2.26077 10.8064L1.96633 10.4379H5.45583ZM8.91683 9.21335C8.91501 8.81133 8.7891 8.41967 8.5563 8.0919C8.3235 7.76414 7.99518 7.51624 7.61619 7.3821L7.46461 7.32873V4.85597C7.46461 4.72357 7.41202 4.5966 7.3184 4.50298C7.22478 4.40936 7.09781 4.35677 6.96541 4.35677C6.83302 4.35677 6.70604 4.40936 6.61243 4.50298C6.51881 4.5966 6.46621 4.72357 6.46621 4.85597V7.32873L6.31464 7.3821C5.93562 7.5162 5.60727 7.76408 5.37446 8.09186C5.14166 8.41963 5.01577 8.81131 5.014 9.21335V9.43953H1.64648C1.62546 9.43958 1.60449 9.44165 1.58386 9.4457L1.44517 9.47366L1.37456 9.29939C1.17821 8.81477 1.04615 8.30653 0.981731 7.78763L0.950145 7.5335H1.88265C2.01505 7.5335 2.14202 7.4809 2.23564 7.38728C2.32926 7.29366 2.38185 7.16669 2.38185 7.0343C2.38185 6.9019 2.32926 6.77493 2.23564 6.68131C2.14202 6.58769 2.01505 6.5351 1.88265 6.5351H0.949782L0.981731 6.27987C1.11687 5.2075 1.53901 4.19151 2.20359 3.33913L2.36152 3.13672L3.01847 3.79367C3.11218 3.88738 3.23928 3.94003 3.37181 3.94003C3.50434 3.94003 3.63144 3.88738 3.72515 3.79367C3.81886 3.69996 3.87151 3.57286 3.87151 3.44033C3.87151 3.3078 3.81886 3.1807 3.72515 3.08698L3.06839 2.43004L3.27079 2.27229C4.12317 1.60776 5.13918 1.18574 6.21153 1.05079L6.46621 1.01866V1.95153C6.46621 2.08393 6.51881 2.2109 6.61243 2.30452C6.70604 2.39814 6.83302 2.45073 6.96541 2.45073C7.09781 2.45073 7.22478 2.39814 7.3184 2.30452C7.41202 2.2109 7.46461 2.08393 7.46461 1.95153V1.01866L7.71984 1.05079C8.79218 1.18577 9.80819 1.60779 10.6606 2.27229L10.863 2.43004L10.2062 3.08698C10.1599 3.13333 10.1231 3.18834 10.098 3.24889C10.073 3.30944 10.06 3.37434 10.06 3.43987C10.06 3.57223 10.1126 3.69917 10.2062 3.79276C10.2998 3.88635 10.4268 3.93893 10.5591 3.93893C10.6246 3.93893 10.6895 3.92603 10.7501 3.90095C10.8106 3.87587 10.8657 3.8391 10.912 3.79276L11.5689 3.136L11.7267 3.3384C12.3914 4.19073 12.8135 5.20675 12.9486 6.27914L12.981 6.5351H12.0482C11.9158 6.5351 11.7888 6.58769 11.6952 6.68131C11.6016 6.77493 11.549 6.9019 11.549 7.0343C11.549 7.16669 11.6016 7.29366 11.6952 7.38728C11.7888 7.4809 11.9158 7.5335 12.0482 7.5335H12.9807L12.9489 7.78763C12.8846 8.3063 12.7526 8.8143 12.5563 9.29867L12.4857 9.47293L12.3477 9.4457C12.3271 9.44166 12.3061 9.43959 12.2851 9.43953H8.91683V9.21335Z" fill="black"></path></g><defs><clipPath id="clip0_6454_50991"><rect width="14" height="14" fill="white"></rect></clipPath></defs></svg></icon-kilometer> <label _ngcontent-wqs-c72=""><?php echo $combustivel[$i]; ?></label>
				                
				                <li class="minilista"_ngcontent-wqs-c72=""><icon-calendar _ngcontent-wqs-c72=""><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.6667 2.66663H3.33333C2.59695 2.66663 2 3.26358 2 3.99996V13.3333C2 14.0697 2.59695 14.6666 3.33333 14.6666H12.6667C13.403 14.6666 14 14.0697 14 13.3333V3.99996C14 3.26358 13.403 2.66663 12.6667 2.66663Z" stroke="#231F20" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 6.66663H14" stroke="#231F20" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path><path d="M10.667 1.33337V4.00004" stroke="#231F20" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.33301 1.33337V4.00004" stroke="#231F20" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path></svg></icon-calendar><label _ngcontent-wqs-c72=""><?php echo $anoModelo[$i]; ?></label>
                     </div>
                        </div>
                        </div>
		

                            <?php
                            $i++;
                        }

                    }
                
                 ?>
				</div> 
           
				<?php 


                ?>
				
				 
				
                </div>
              
            </div>
          </div>
        </div>



    </body>
</html>

