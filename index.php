<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title> Dream Makeup | Loja Online </title>

        <link rel="icon" href="img/nuvem-logo.jpeg">
        </head>
        <body  style="background:#FFF7FF;">

        <div style="float: none; margin-left:0%; background: black;" id="banner">
        <img id="img-banner"  style=" width: 60%; background: black;"> 
        </div>

        <div style="float: none; margin-left:0%;" id="logo"> 
   <img id="img_logo" style=" width: 29%; background:#FFC1E4;" src="img/Dream-1.jpeg">
   <img id="img-logo" style=" width: 37%; background:#FFC1E4; margin-left:5%;" src="img/Dream-4.jpeg">
   <img id="img__logo" style=" width: 10%; margin-left:15%;" src="img/Dream-6.jpeg">
</div>

<div style="float: none; margin-left:0%; background: black;" id="banner">
<img id="img-banner"  style=" width: 50%; background: black;"> 
</div>

<br>
<br>



    <div class="container">
  <div class="row align-items-start">
    <div class="col">
    
    <a href="categoria.php?slcCategoria=1"> <button type="button" style=" width: 102%;" class="btn btn-outline-dark">MAQUIAGENS </button></a>
  
    </div>

    <div class="col">
     
   <a href="categoria.php?slcCategoria=2"> <button type="button" style=" width: 102%;" class="btn btn-outline-dark">PINCÉIS</button> </a>

    </div>

    <div class="col">
     
  <a href="categoria.php?slcCategoria=3"> <button type="button" style=" width: 102%;" class="btn btn-outline-dark">SKIN-CARE</button></a>

    </div>
  </div>
<br>
<br>

<?php

 if(isset($_COOKIE['codcategoria'])){
   //se o cookie existe
   if($_COOKIE['codcategoria'] == 1){
     //carrega a categoria 1 em primeiro

     echo("

     <h2 style='font-family: Amalfi Coast;'> Nossos Produtinhos: </h2>
<br>

     <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

  <div class='card' style='width: 12.3rem'> 
  <img style='width: 95%;' src='img/maquiagen-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
   <h6 class='card-title'>Base e Corretivo 
   <br>  
   Mari-Maria. 
   <br>
   Tom 4</h6>
   <br>
   
   <a href='#' class='btn btn-outline-dark'>Comprar - R$30,90</a>
   </div>
  </div> 


  <div class='col'>
      <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/maquiagem-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Paleta de Sombra 18 Cores
    <br>  
    Ruby Rose Glow</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$45,90</a>
  </div>
</div>

    </div>


    <div class='col'>
    <div class='card' style='width: 12.2rem; margin-left: 11.9%;'>
<img style='width: 99%;'src='img/maquiagem-3.jpeg' class='card-img-top' alt='...'>
<div class='card-body'>
  <h6 class='card-title'> Batom Líquido Vermelho Matte 4ml
  <br>  
  Niina Secrets Skinny  </h6>
  <br>
  <a href='#' class='btn btn-outline-dark'>Comprar - R$19,99</a>
</div>
</div>

  </div>


  <div class='col'>
  <div class='card' style='width: 12.2rem; margin-left: 11%'>
  <img style='width: 98%;' src='img/maquiagem-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Contorno Powder light Medium
    <br>  
    Ruby Kisses - 3D</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
  </div>
</div>

  </div>


  <div class='col'>
  <div class='card' style='width: 12.2rem; margin-left:9%;'>
<img style='width: 99%;'src='img/mquiagem-5.jpeg' class='card-img-top' alt='...'>
<div class='card-body'>
  <h6 class='card-title'> Lápis para Olhos Retrátil 
  <br>  
  Vult - Preto Opaco</h6>
  <br>
  <a href='#' class='btn btn-outline-dark'>Comprar - R$12,00</a>
</div>
</div>

  </div>

  </div>

    

<br>
<br>

<div style=' margin-left: 0%;' id='carouselSite' class='carousel slide' data-ride='carousel' Style='width: 100%;'>

      <div class='carousel-inner'>

        <div class='carousel-item active'>

          <img src='img/banner.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        <div class='carousel-item'>

          <img src='img/banner2.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        

      <a class='carousel-control-prev' href='#carouselSite' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon'></span>
        <span class='sr-onlyn'></span>
      </a>
      <a class='carousel-control-next' href='#carouselSite' role='button' data-slide='next'>
        <span class='carousel-control-next-icon'></span>
        <span class='sr-only'>Avançar</span>
      </a>
    </div>
<br>
<br>

  </div>
  </div>

  <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

  <div class='card' style='width: 12.5rem; margin-left:0%;'>
  <img style='width: 100%;'src='img/pimceis-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Pincéis Macrilan
    <br>  
    Contém 12 pincéis</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$40,00</a>
  </div>
</div>
      
   
    <div class='col'>

<div class='card' style='width: 12.2rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/skin-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Skin-Glow Green
    <br>  
    2 Produtos</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$99,99</a>
  </div>
</div>
   
    </div>

    <div class='col'>
  
      <div class='card' style='width: 12.2rem; margin-left:10%;'>
  <img style='width: 100%;'src='img/pincel-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Esponja Flat Blend
    <br>  
    Mariana Saad by Océane</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$25,90</a>
  </div>
</div>
      
    
    </div>

    <div class='col'>
      
      <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/skin-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Sérum Facial Rosa Mosqueta
    <br>  
    Max Love</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$13,50</a>
  </div>
</div>

    </div>


    <div class='col'>

      <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
  <img style='width: 92%;'src='img/skin-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Demaquilante (Removedor de Maquiagem)
    <br>  
    Mary Key</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$70,00,</a>
  </div>
</div>

    </div>
  
   
  </div>
</div>
   
    </div> 
    <br>
    <br>
  
    <div style='float: none; margin-left:6.5%;' id='banner'>
<img id='img-banner'  style=' width: 93%;' src='img/banner-3.jpeg'> 
</div>
    
<br>
<br>

<div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

      <div class='card' style='width: 12.2rem'>
  <img style='width: 100%;' src='img/pincel-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Escova para Aplicar Base
      <br>
    <br>
     Beautybox Glam</h6>
    <br>
  
    <a href='#' class='btn btn-outline-dark'>Comprar - R$15,00</a>
  </div>
</div>

   
    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/pincel-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Leque Para Iluminar seu Rosto
    <br>  
    <br>
    Sephora</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$10,00</a>
  </div>
</div>

    </div>

    <div class='col'>
  
      <div class='card' style='width: 12.4rem; margin-left:10%;'>
  <img style='width: 98%;'src='img/skin-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'> Máscara Facial Detox Antioleosidade e Antioxidante
    <br>  
    Vult - Care 50g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
  </div>
</div>
      
    
    </div>

    <div class='col'>
      
      <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/pincel-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'>Pincél para Pó ou Blush B101
    <br>  
    <br>
    Macrilan</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$18,90</a>
  </div>
</div>

    </div>


    <div class='col'>

      <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
  <img style='width: 92%;'src='img/skin-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Hidratante Em Gel Facial - Ácido Hialorônico e pepino
      <br>
      <br>
      <br>
    Niva - 100g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$35,90,</a>
  </div>
</div>

    </div>
  
   
  </div>
</div>
   
    </div> 


    <br>
    <br>
<br> 


<div class='container'>
  <div class='row'>
    <div  class='col-9'>

    <h6 style=' font-size: 190%; margin-left:1%;' >Cadastre-se para receber nossas Novidades!</h6>


    <form class='row gy-2 gx-3 align-items-center'>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInput'></label>
    <input type='text' class='form-control' id='autoSizingInput' placeholder='Nome'>
  </div>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInputGroup'></label>
    <div class='input-group'>
      <div class='input-group-text'>@</div>
      <input type='text' class='form-control' id='autoSizingInputGroup' placeholder='E-mail'>
    </div>
  </div>
  <div class='col-auto'>
  </div>
  <div class='col-auto'>
    <br>
    <button style='width: 150%;' type='submit' class='btn btn-outline-dark'>Cadastrar</button>
  </div>
</form>

    </div>



</div>
</div>

<br>
<br>
<br>

    
<div style='float: none; margin-left:0%; background: black;' id='banner'>
<img id='img-banner'  style='' width: 60%; background: black;''> 
</div>


    <footer style='width: 100%; background:#FFC1E4 ;' >
<h6 style='background:#FFC1E4 ; color: white; margin-left: 0%;' ><br>

  <src= style='margin-left: 1%;  color: black;'>REDES SOCIAIS:</src>  


  
   <a href='https://pt-br.facebook.com/' > <img  src='img/img-face.jpeg'  width='3%' style='margin-left: 1%; border-radius: 5%;'></a>
     <src= style='margin-left: 0%;'> <src style='margin-left: 2%;'>
     
     <a href='https://twitter.com/i/flow/login' > <img  src='img/twitter.jpeg'  width='3%' style='margin-left: 0%; border-radius: 5%;'></a>
     <src= style='margin-left: 2%;'> <src style='margin-left: 0%;'>
    
    <a href='https://www.instagram.com/'><img src='img/img-insta.jpeg' width='3%'style='margin-left: 0%; border-radius: 5%;'></a> 

      <src= style='margin-left: 9%;'> FORMAS DE PAGAMENTO: </src>

      <img src='img/visa.jpeg' width='5%' style='margin-left: 2%; border-radius: 5%;'> 
        <img src='img/master.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/elo.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/pix.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'> 
        <img src='img/boleto.jpeg' width='5%' style='margin-left: 4%; border-radius: 5%;'> 
        <br>
  
<BR>


</h6>
</footer>


     ");



   }
   else if($_COOKIE['codcategoria'] == 2){
     //carrega a categoria 2 primeiro

     echo("
     
     <h2 style='font-family: Amalfi Coast;'> Nossos Produtinhos: </h2>
     <br>
     
          <div class='container'>
       <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>
     
       <div class='card' style='width: 12.5rem; margin-left:0%;'>
       <img style='width: 98%;'src='img/pimceis-1.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'> Kit Pincéis Macrilan
         <br>  
         Contém 12 pincéis</h6>
         <br>
         <br>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$40,00</a>
       </div>
     </div>
     
     
     <div class='col'>
       
     <div class='card' style='width: 12.2rem; margin-left:10%;'>
 <img style='width: 100%;'src='img/pincel-2.jpeg' class='card-img-top' alt='...'>
 <div class='card-body'>
   <h6 class='card-title'> Esponja Flat Blend
   <br>  
   Mariana Saad by Océane</h6>
   <br>
   <br>
   <a href='#' class='btn btn-outline-dark'>Comprar - R$25,90</a>
 </div>
</div>
    
   </div>
     
     
         <div class='col'>

         <div class='card' style='width: 12.2rem; margin-left: 11%' >
       <img style='width: 100%;' src='img/pincel-3.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'> Pincél Escova para Aplicar Base
           <br>
         <br>
          Beautybox Glam</h6>
         <br>
       
         <a href='#' class='btn btn-outline-dark'>Comprar - R$15,00</a>
       </div>
     </div>
     
       </div>

     
       <div class='col'>
     
       <div class='card' style='width: 12.3rem; margin-left:9%;'>
     <img style='width: 98.5%;'src='img/pincel-4.jpeg' class='card-img-top' alt='...'>
     <div class='card-body'>
       <h6 class='card-title'> Pincél Leque Para Iluminar seu Rosto
       <br>  
       <br>
       Sephora</h6>
       <br>
       <a href='#' class='btn btn-outline-dark'>Comprar - R$10,00</a>
     </div>
   </div>
   
       </div>

     
       <div class='col'>

       <div class='card' style='width: 12.3rem; margin-left:11%;'>
       <img style='width: 96%;'src='img/pincel-5.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <br>
         <h6 class='card-title'>Pincél para Pó ou Blush B101
         <br>  
         <br>
         Macrilan</h6>
         <br>
         
         <a href='#' class='btn btn-outline-dark'>Comprar - R$18,90</a>
       </div>
     </div>
     

       </div>
       </div>
     
         
     
     <br>
     <br>
     
     <div style=' margin-left: 0%;' id='carouselSite' class='carousel slide' data-ride='carousel' Style='width: 100%;'>
     
           <div class='carousel-inner'>
     
             <div class='carousel-item active'>
     
               <img src='img/banner.jpeg' style='width: 100%;' class='img-fuid d-block'>
     
             </div>
             <div class='carousel-item'>
     
               <img src='img/banner2.jpeg' style='width: 100%;' class='img-fuid d-block'>
     
             </div>
             
     
           <a class='carousel-control-prev' href='#carouselSite' role='button' data-slide='prev'>
             <span class='carousel-control-prev-icon'></span>
             <span class='sr-onlyn'></span>
           </a>
           <a class='carousel-control-next' href='#carouselSite' role='button' data-slide='next'>
             <span class='carousel-control-next-icon'></span>
             <span class='sr-only'>Avançar</span>
           </a>
         </div>
     <br>
     <br>
     
       </div>
       </div>
     
       <div class='container'>
       <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>
     
       <div class='card' style='width: 12.3rem'> 
       <img style='width: 95%;' src='img/maquiagen-1.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
        <h6 class='card-title'>Base e Corretivo 
        <br>  
        Mari-Maria. 
        <br>
        Tom 4</h6>
        <br>
        
        <a href='#' class='btn btn-outline-dark'>Comprar - R$30,90</a>
        </div>
       </div> 

           
        
         <div class='col'>
     
     <div class='card' style='width: 12.2rem; margin-left:9%;'>
       <img style='width: 100%;'src='img/skin-1.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'> Kit Skin-Glow Green
         <br>  
         2 Produtos</h6>
         <br>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$99,99</a>
       </div>
     </div>
        
         </div>
     
       
         <div class='col'>
         <div class='card' style='width: 12.3rem; margin-left:11%;'>
     <img style='width: 99%;'src='img/maquiagem-2.jpeg' class='card-img-top' alt='...'>
     <div class='card-body'>
       <h6 class='card-title'>Paleta de Sombra 18 Cores
       <br>  
       Ruby Rose Glow</h6>
       <br>
       <a href='#' class='btn btn-outline-dark'>Comprar - R$45,90</a>
     </div>
   </div>
   
       </div>

     
         <div class='col'>
           
           <div class='card' style='width: 12.3rem; margin-left:11%;'>
       <img style='width: 99%;'src='img/skin-2.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'>Sérum Facial Rosa Mosqueta
         <br>  
         Max Love</h6>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$13,50</a>
       </div>
     </div>
     
         </div>
     
     
         <div class='col'>
     
           <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
       <img style='width: 92%;'src='img/skin-3.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'> Demaquilante (Removedor de Maquiagem)
         <br>  
         Mary Key</h6>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$70,00,</a>
       </div>
     </div>
     
         </div>
       
        
       </div>
     </div>
        
         </div> 
         <br>
         <br>
       
         <div style='float: none; margin-left:6.5%;' id='banner'>
     <img id='img-banner'  style=' width: 93%;' src='img/banner-3.jpeg'> 
     </div>
         
     <br>
     <br>
     
     <div class='container'>
       <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

       <div class='card' style='width: 12.2rem;'>
       <img style='width: 98%;'src='img/maquiagem-3.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
       
         <h6 class='card-title'> Batom Líquido Vermelho Matte 4ml
         <br>  
        
         Niina Secrets Skinny  </h6>
         <br>
         <br>
  <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$19,99</a>
       </div>
       </div>
     
        
       <div class='col'>
       <div class='card' style='width: 12.2rem; margin-left: 11%'>
       <img style='width: 100%;' src='img/maquiagem-4.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'>Contorno Powder light Medium
         <br>  
         Ruby Kisses - 3D</h6>
         <br>
         <br>
         <br>
         
         <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
       </div>
     </div>
     
       </div>

     
         <div class='col'>
       
           <div class='card' style='width: 12.4rem; margin-left:10%;'>
       <img style='width: 100%;'src='img/skin-4.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
      
         <h6 class='card-title'> Máscara Facial Detox Antioleosidade e Antioxidante
         <br>  
         Vult - Care 50g</h6>
         <br>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
       </div>
     </div>
           
         
         </div>
     
         <div class='col'>

         <div class='card' style='width: 12.2rem; margin-left:9%;'>
         <img style='width: 100%;'src='img/mquiagem-5.jpeg' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h6 class='card-title'> Lápis para Olhos Retrátil 
           <br>  
           Vult - Preto Opaco</h6>
           <br>
           <br>
           <br>
           <a href='#' class='btn btn-outline-dark'>Comprar - R$12,00</a>
         </div>
         </div>
           
     
         </div>
     
     
         <div class='col'>
     
           <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
       <img style='width: 92%;'src='img/skin-5.jpeg' class='card-img-top' alt='...'>
       <div class='card-body'>
         <h6 class='card-title'> Hidratante Em Gel Facial - Ácido Hialorônico e pepino
           <br>
           <br>
           <br>
         Niva - 100g</h6>
         <br>
         <br>
         <a href='#' class='btn btn-outline-dark'>Comprar - R$35,90,</a>
       </div>
     </div>
     
         </div>
       
        
       </div>
     </div>
        
         </div> 
     
     
         <br>
         <br>
     <br> 
     
     
     <div class='container'>
       <div class='row'>
         <div  class='col-9'>
     
         <h6 style=' font-size: 190%; margin-left:1%;' >Cadastre-se para receber nossas Novidades!</h6>
     
     
         <form class='row gy-2 gx-3 align-items-center'>
       <div class='col-auto'>
         <label class='visually-hidden' for='autoSizingInput'></label>
         <input type='text' class='form-control' id='autoSizingInput' placeholder='Nome'>
       </div>
       <div class='col-auto'>
         <label class='visually-hidden' for='autoSizingInputGroup'></label>
         <div class='input-group'>
           <div class='input-group-text'>@</div>
           <input type='text' class='form-control' id='autoSizingInputGroup' placeholder='E-mail'>
         </div>
       </div>
       <div class='col-auto'>
       </div>
       <div class='col-auto'>
         <br>
         <button style='width: 150%;' type='submit' class='btn btn-outline-dark'>Cadastrar</button>
       </div>
     </form>
     
         </div>
     
     
     
     </div>
     </div>
     
     <br>
     <br>
     <br>
     
         
     <div style='float: none; margin-left:0%; background: black;' id='banner'>
     <img id='img-banner'  style='' width: 60%; background: black;''> 
     </div>
     
     
         <footer style='width: 100%; background:#FFC1E4 ;' >
     <h6 style='background:#FFC1E4 ; color: white; margin-left: 0%;' ><br>
     
       <src= style='margin-left: 1%;  color: black;'>REDES SOCIAIS:</src>  
     
     
       
        <a href='https://pt-br.facebook.com/' > <img  src='img/img-face.jpeg'  width='3%' style='margin-left: 1%; border-radius: 5%;'></a>
          <src= style='margin-left: 0%;'> <src style='margin-left: 2%;'>
          
          <a href='https://twitter.com/i/flow/login' > <img  src='img/twitter.jpeg'  width='3%' style='margin-left: 0%; border-radius: 5%;'></a>
          <src= style='margin-left: 2%;'> <src style='margin-left: 0%;'>
         
         <a href='https://www.instagram.com/'><img src='img/img-insta.jpeg' width='3%'style='margin-left: 0%; border-radius: 5%;'></a> 
     
           <src= style='margin-left: 9%;'> FORMAS DE PAGAMENTO: </src>
     
           <img src='img/visa.jpeg' width='5%' style='margin-left: 2%; border-radius: 5%;'> 
             <img src='img/master.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
             <img src='img/elo.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
             <img src='img/pix.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'> 
             <img src='img/boleto.jpeg' width='5%' style='margin-left: 4%; border-radius: 5%;'> 
             <br>
       
     <BR>
     
     
     </h6>
     </footer>
     
     
          ");
     


   }
   else{
     //carrega a categoria 3 primeiro
 echo("

     <h2 style='font-family: Amalfi Coast;'> Nossos Produtinhos: </h2>
<br>

     <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>


  <div class='card' style='width: 12.3rem;'>
  <img style='width: 92%;'src='img/skin-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Hidratante Em Gel Facial - Ácido Hialorônico e pepino
      <br>
      <br>
     
    Nieva - 100g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$35,90,</a>
  </div>
</div>


  <div class='col'>

  <div class='card' style='width: 12.2rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/skin-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Skin-Glow Green
    <br>  
    2 Produtos</h6>
    <br>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$99,99</a>
  </div>
</div>

    </div>

    

    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/skin-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Sérum Facial Rosa Mosqueta
    <br>  
    Max Love</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$13,50</a>
  </div>
</div>

  </div>


  <div class='col'>

  <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
  <img style='width: 92%;'src='img/skin-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Demaquilante (Removedor de Maquiagem)
    <br>  
    Mary Key</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$70,00,</a>
  </div>
</div>

  </div>


  <div class='col'>

  <div class='card' style='width: 12.4rem; margin-left:10%;'>
  <img style='width: 96%;'src='img/skin-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'> Máscara Facial Detox Antioleosidade e Antioxidante
   
    Vult - Care 50g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
  </div>
</div>

  </div>

  </div>


<br>
<br>

<div style=' margin-left: 0%;' id='carouselSite' class='carousel slide' data-ride='carousel' Style='width: 100%;'>

      <div class='carousel-inner'>

        <div class='carousel-item active'>

          <img src='img/banner.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        <div class='carousel-item'>

          <img src='img/banner2.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        

      <a class='carousel-control-prev' href='#carouselSite' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon'></span>
        <span class='sr-onlyn'></span>
      </a>
      <a class='carousel-control-next' href='#carouselSite' role='button' data-slide='next'>
        <span class='carousel-control-next-icon'></span>
        <span class='sr-only'>Avançar</span>
      </a>
    </div>
<br>
<br>

  </div>
  </div>

  <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

  <div class='card' style='width: 12.5rem; margin-left:0%;'>
  <img style='width: 100%;'src='img/pimceis-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Pincéis Macrilan
    <br>  
    Contém 12 pincéis</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$40,00</a>
  </div>
</div>
      
   
    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-left:11%;'>
    <img style='width: 99%;'src='img/maquiagem-2.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h6 class='card-title'>Paleta de Sombra 18 Cores
      <br>  
      Ruby Rose Glow</h6>
      <br>
      <a href='#' class='btn btn-outline-dark'>Comprar - R$45,90</a>
    </div>
  </div>
  
   
    </div>

    <div class='col'>
  
      <div class='card' style='width: 12.2rem; margin-left:10%;'>
  <img style='width: 100%;'src='img/pincel-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Esponja Flat Blend
    <br>  
    Mariana Saad by Océane</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$25,90</a>
  </div>
</div>
      
    
    </div>

    <div class='col'>
      
    <div class='card' style='width: 12.2rem; margin-left: 11.9%;'>
    <img style='width: 99%;'src='img/maquiagem-3.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h6 class='card-title'> Batom Líquido Vermelho Matte 4ml
      <br>  
      Niina Secrets Skinny  </h6>
      <br>
      <a href='#' class='btn btn-outline-dark'>Comprar - R$19,99</a>
    </div>
    </div>

    </div>


    <div class='col'>

    <div class='card' style='width: 12.2rem; margin-left: 11%'>
    <img style='width: 98%;' src='img/maquiagem-4.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h6 class='card-title'>Contorno Powder light Medium
      <br>  
      Ruby Kisses - 3D</h6>
      <br>
      <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
    </div>
  </div>

    </div>
  
   
  </div>
</div>
   
    </div> 
    <br>
    <br>
  
    <div style='float: none; margin-left:6.5%;' id='banner'>
<img id='img-banner'  style=' width: 93%;' src='img/banner-3.jpeg'> 
</div>
    
<br>
<br>

<div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

      <div class='card' style='width: 12.2rem'>
  <img style='width: 100%;' src='img/pincel-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Escova para Aplicar Base
      <br>
    <br>
     Beautybox Glam</h6>
    <br>
  <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$15,00</a>
  </div>
</div>

   
    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/pincel-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Leque Para Iluminar seu Rosto
    <br>  
    <br>
    Sephora</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$10,00</a>
  </div>
</div>

    </div>

    <div class='col'>
  
    <div class='card' style='width: 12.2rem; margin-left:6%;'>
  
    <img style='width: 100%;'src='img/mquiagem-5.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h6 class='card-title'> Lápis para Olhos Retrátil 
      <br>
      <br>  
      Vult - Preto Opaco</h6>
      <br>
      <br>
    
      <a href='#' class='btn btn-outline-dark'>Comprar - R$12,00</a>
    </div>
    </div>
    
    
    </div>

    <div class='col'>
      
      <div class='card' style='width: 12.3rem; margin-left:3%;'>
  <img style='width: 99%;'src='img/pincel-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'>Pincél para Pó ou Blush B101
    <br>  
    <br>
    Macrilan</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$18,90</a>
  </div>
</div>

    </div>


    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-lefth: 11%;'> 
    <img style='width: 100%;' src='img/maquiagen-1.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
     <h6 class='card-title'>Base e Corretivo 
     <br>  
     Mari-Maria. 
     <br>
     Tom 4</h6>
     <br>
     <br><br>
     <a href='#' class='btn btn-outline-dark'>Comprar - R$30,90</a>
     </div>
    </div> 

    </div>
  
   
  </div>
</div>
   
    </div> 


    <br>
    <br>
<br> 


<div class='container'>
  <div class='row'>
    <div  class='col-9'>

    <h6 style=' font-size: 190%; margin-left:1%;' >Cadastre-se para receber nossas Novidades!</h6>


    <form class='row gy-2 gx-3 align-items-center'>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInput'></label>
    <input type='text' class='form-control' id='autoSizingInput' placeholder='Nome'>
  </div>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInputGroup'></label>
    <div class='input-group'>
      <div class='input-group-text'>@</div>
      <input type='text' class='form-control' id='autoSizingInputGroup' placeholder='E-mail'>
    </div>
  </div>
  <div class='col-auto'>
  </div>
  <div class='col-auto'>
    <br>
    <button style='width: 150%;' type='submit' class='btn btn-outline-dark'>Cadastrar</button>
  </div>
</form>

    </div>



</div>
</div>

<br>
<br>
<br>

    
<div style='float: none; margin-left:0%; background: black;' id='banner'>
<img id='img-banner'  style='' width: 60%; background: black;''> 
</div>


    <footer style='width: 100%; background:#FFC1E4 ;' >
<h6 style='background:#FFC1E4 ; color: white; margin-left: 0%;' ><br>

  <src= style='margin-left: 1%;  color: black;'>REDES SOCIAIS:</src>  


  
   <a href='https://pt-br.facebook.com/' > <img  src='img/img-face.jpeg'  width='3%' style='margin-left: 1%; border-radius: 5%;'></a>
     <src= style='margin-left: 0%;'> <src style='margin-left: 2%;'>
     
     <a href='https://twitter.com/i/flow/login' > <img  src='img/twitter.jpeg'  width='3%' style='margin-left: 0%; border-radius: 5%;'></a>
     <src= style='margin-left: 2%;'> <src style='margin-left: 0%;'>
    
    <a href='https://www.instagram.com/'><img src='img/img-insta.jpeg' width='3%'style='margin-left: 0%; border-radius: 5%;'></a> 

      <src= style='margin-left: 9%;'> FORMAS DE PAGAMENTO: </src>

      <img src='img/visa.jpeg' width='5%' style='margin-left: 2%; border-radius: 5%;'> 
        <img src='img/master.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/elo.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/pix.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'> 
        <img src='img/boleto.jpeg' width='5%' style='margin-left: 4%; border-radius: 5%;'> 
        <br>
  
<BR>


</h6>
</footer>


     ");


   }
 }
 else{
   //se o cookie não existe
   //carrega os produtos de forma padrãp
 
   echo("

     <h2 style='font-family: Amalfi Coast;'> Nossos Produtinhos: </h2>
<br>

     <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

  <div class='card' style='width: 12.3rem'> 
  <img style='width: 95%;' src='img/maquiagen-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
   <h6 class='card-title'>Base e Corretivo 
   <br>  
   Mari-Maria. 
   <br>
   Tom 4</h6>
   <br>
   
   <a href='#' class='btn btn-outline-dark'>Comprar - R$30,90</a>
   </div>
  </div> 


  <div class='col'>

  <div class='card' style='width: 12.5rem; margin-left:10%;'>
  <img style='width: 100%;'src='img/pimceis-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Pincéis Macrilan
    <br>  
    Contém 12 pincéis</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$40,00</a>
  </div>
</div>

    </div>


    <div class='col'>
    <div class='card' style='width: 12.2rem; margin-left: 11.9%;'>
<img style='width: 99%;'src='img/maquiagem-3.jpeg' class='card-img-top' alt='...'>
<div class='card-body'>
  <h6 class='card-title'> Batom Líquido Vermelho Matte 4ml
  <br>  
  Niina Secrets Skinny  </h6>
  <br>
  <a href='#' class='btn btn-outline-dark'>Comprar - R$19,99</a>
</div>
</div>

  </div>


  <div class='col'>

  <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/skin-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Sérum Facial Rosa Mosqueta
    <br>  
    Max Love</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$13,50</a>
  </div>
</div>

  </div>


  <div class='col'>
  <div class='card' style='width: 12.2rem; margin-left:9%;'>
<img style='width: 99%;'src='img/mquiagem-5.jpeg' class='card-img-top' alt='...'>
<div class='card-body'>
  <h6 class='card-title'> Lápis para Olhos Retrátil 
  <br>  
  Vult - Preto Opaco</h6>
  <br>
  <a href='#' class='btn btn-outline-dark'>Comprar - R$12,00</a>
</div>
</div>

  </div>

  </div>

    

<br>
<br>

<div style=' margin-left: 0%;' id='carouselSite' class='carousel slide' data-ride='carousel' Style='width: 100%;'>

      <div class='carousel-inner'>

        <div class='carousel-item active'>

          <img src='img/banner.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        <div class='carousel-item'>

          <img src='img/banner2.jpeg' style='width: 100%;' class='img-fuid d-block'>

        </div>
        

      <a class='carousel-control-prev' href='#carouselSite' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon'></span>
        <span class='sr-onlyn'></span>
      </a>
      <a class='carousel-control-next' href='#carouselSite' role='button' data-slide='next'>
        <span class='carousel-control-next-icon'></span>
        <span class='sr-only'>Avançar</span>
      </a>
    </div>
<br>
<br>

  </div>
  </div>

  <div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>
      
<div class='card' style='width: 12.3rem;'>
  <img style='width: 99%;'src='img/maquiagem-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'>Paleta de Sombra 18 Cores
    <br>  
    Ruby Rose Glow</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$45,90</a>
  </div>
</div>


    <div class='col'>

<div class='card' style='width: 12.2rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/skin-1.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Kit Skin-Glow Green
    <br>  
    2 Produtos</h6>
    <br>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$99,99</a>
  </div>
</div>
   
    </div>

    <div class='col'>
  
      <div class='card' style='width: 12.2rem; margin-left:10%;'>
  <img style='width: 100%;'src='img/pincel-2.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Esponja Flat Blend
    <br>  
    Mariana Saad by Océane</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$25,90</a>
  </div>
</div>
      
    
    </div>

    <div class='col'>
      
    <div class='card' style='width: 12.2rem; margin-left: 11%'>
    <img style='width: 98%;' src='img/maquiagem-4.jpeg' class='card-img-top' alt='...'>
    <div class='card-body'>
      <h6 class='card-title'>Contorno Powder light Medium
      <br>  
      Ruby Kisses - 3D</h6>
      <br>
      <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
    </div>
  </div>


    </div>

  

    <div class='col'>

      <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
  <img style='width: 92%;'src='img/skin-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Demaquilante (Removedor de Maquiagem)
    <br>  
    Mary Key</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$70,00,</a>
  </div>
</div>

    </div>
  
   
  </div>
</div>
   
    </div> 
    <br>
    <br>
  
    <div style='float: none; margin-left:6.5%;' id='banner'>
<img id='img-banner'  style=' width: 93%;' src='img/banner-3.jpeg'> 
</div>
    
<br>
<br>

<div class='container'>
  <div class='row row-cols-2 row-cols-lg-5 g-2 g-lg-3'>

      <div class='card' style='width: 12.2rem'>
  <img style='width: 100%;' src='img/pincel-3.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Escova para Aplicar Base
      <br>
    <br>
     Beautybox Glam</h6>
    <br>
  
    <a href='#' class='btn btn-outline-dark'>Comprar - R$15,00</a>
  </div>
</div>

   
    <div class='col'>

    <div class='card' style='width: 12.3rem; margin-left:9%;'>
  <img style='width: 100%;'src='img/pincel-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Pincél Leque Para Iluminar seu Rosto
    <br>  
    <br>
    Sephora</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$10,00</a>
  </div>
</div>

    </div>

    <div class='col'>
  
      <div class='card' style='width: 12.4rem; margin-left:10%;'>
  <img style='width: 98%;'src='img/skin-4.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'> Máscara Facial Detox Antioleosidade e Antioxidante
    <br>  
    Vult - Care 50g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$29,90</a>
  </div>
</div>
      
    
    </div>

    <div class='col'>
      
      <div class='card' style='width: 12.3rem; margin-left:11%;'>
  <img style='width: 99%;'src='img/pincel-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <br>
    <h6 class='card-title'>Pincél para Pó ou Blush B101
    <br>  
    <br>
    Macrilan</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$18,90</a>
  </div>
</div>

    </div>


    <div class='col'>

      <div class='card' style='width: 12.3rem; margin-left: 11.9%;'>
  <img style='width: 92%;'src='img/skin-5.jpeg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h6 class='card-title'> Hidratante Em Gel Facial - Ácido Hialorônico e pepino
      <br>
      <br>
      <br>
    Niva - 100g</h6>
    <br>
    <a href='#' class='btn btn-outline-dark'>Comprar - R$35,90,</a>
  </div>
</div>

    </div>
  
   
  </div>
</div>
   
    </div> 


    <br>
    <br>
<br> 


<div class='container'>
  <div class='row'>
    <div  class='col-9'>

    <h6 style=' font-size: 190%; margin-left:1%;' >Cadastre-se para receber nossas Novidades!</h6>


    <form class='row gy-2 gx-3 align-items-center'>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInput'></label>
    <input type='text' class='form-control' id='autoSizingInput' placeholder='Nome'>
  </div>
  <div class='col-auto'>
    <label class='visually-hidden' for='autoSizingInputGroup'></label>
    <div class='input-group'>
      <div class='input-group-text'>@</div>
      <input type='text' class='form-control' id='autoSizingInputGroup' placeholder='E-mail'>
    </div>
  </div>
  <div class='col-auto'>
  </div>
  <div class='col-auto'>
    <br>
    <button style='width: 150%;' type='submit' class='btn btn-outline-dark'>Cadastrar</button>
  </div>
</form>

    </div>



</div>
</div>

<br>
<br>
<br>

    
<div style='float: none; margin-left:0%; background: black;' id='banner'>
<img id='img-banner'  style='' width: 60%; background: black;''> 
</div>


    <footer style='width: 100%; background:#FFC1E4 ;' >
<h6 style='background:#FFC1E4 ; color: white; margin-left: 0%;' ><br>

  <src= style='margin-left: 1%;  color: black;'>REDES SOCIAIS:</src>  


  
   <a href='https://pt-br.facebook.com/' > <img  src='img/img-face.jpeg'  width='3%' style='margin-left: 1%; border-radius: 5%;'></a>
     <src= style='margin-left: 0%;'> <src style='margin-left: 2%;'>
     
     <a href='https://twitter.com/i/flow/login' > <img  src='img/twitter.jpeg'  width='3%' style='margin-left: 0%; border-radius: 5%;'></a>
     <src= style='margin-left: 2%;'> <src style='margin-left: 0%;'>
    
    <a href='https://www.instagram.com/'><img src='img/img-insta.jpeg' width='3%'style='margin-left: 0%; border-radius: 5%;'></a> 

      <src= style='margin-left: 9%;'> FORMAS DE PAGAMENTO: </src>

      <img src='img/visa.jpeg' width='5%' style='margin-left: 2%; border-radius: 5%;'> 
        <img src='img/master.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/elo.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'>
        <img src='img/pix.jpeg' width='5%' style='margin-left: 3%; border-radius: 5%;'> 
        <img src='img/boleto.jpeg' width='5%' style='margin-left: 4%; border-radius: 5%;'> 
        <br>
  
<BR>


</h6>
</footer>


     ");



 }
?>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>