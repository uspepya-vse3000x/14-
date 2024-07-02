<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>
<!DOCTYPE html> 
<html> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" /> 
    <meta name="viewport" 
          content="width=device-width,  
                   initial-scale=1" /> 
  
    
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"/> 
  
    <link rel="stylesheet" href="style 14.css" /> 
    <title>Главная страница</title>
</head>
<body>
<body> 
    <section id="navbar"> 
      <nav class="navbar navbar-expand-lg navbar-light"> 
        <div class="container-fluid"> 
          <a class="navbar-brand" href="#"> 
              CAFE 
            </a> 
              <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-expanded="false">
            <span class="navbar-toggler-icon"></span> 
          </button> 

          <div class="collapse navbar-collapse" 
               id="navbarSupportedContent"> 
            <ul class="navbar-nav m-auto"> 
              <li class="nav-item"> 
                <a class="nav-link"> 
                   
                    
                   <?php if ($login === null): ?>

                <a href="login.php">Авторизация</a>
                <?php else: 
                   ?>
</a>

<li class="nav-item"> <a class="nav-link" href="login.php">Выход</a>
<?php endif; ?>
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" 
                   href="#">Услуги</a> 
               
              <li class="nav-item"> 
                <a class="nav-link" 
                   href="#">Каталог</a> 
              </li> 
               
            </ul> 
          </div> 
        </div> 
      </nav> 
    </section> 


   
    
    <section id="about"> 
      <h1 class="text-center">О нас</h1> 
       
        <div class="row"> 
          <div class="col-md-6" id="about-col"> 
            <h3>Почему мы</h3> 
            <ul> 
              <li> 
                Уютная, домашняя атмосфера. 
              </li> 
              <li>Всегда свежая выпечка и кофе.</li> 
              <li> 
                Контроль за СанПин-нормами. 
              </li> 
              
            </ul> 
          </div> 
           
    
  
    <section id="product"> 
      <h1 class="text-center">Наши продукты</h1> 
      <div class="container-fluid" id="product-container"> 
        <div class="row" id="banner-row"> 
          <div class="col-md-6" id="about-col"> 
            <img
              class="img-responsive rounded mx-auto d-block"
              src="cake.png"
              alt=""
            /> 
          </div> 
          <div class="col-md-6" id="product-col2"> 
            <h3>Список товаров осень-2023</h3> 
  
            <ul> 
              <li>МАФФИН ШОКОЛАДНЫЙ</li> 
              <li>БУЛОЧКА С КОРИЦЕЙ 
                  </li> 
              <li>ТЫКВЕННЫЙ ПИРОГ С КОРИЦЕЙ</li> 
              <li>РУЛЕТ С КЛЕНОВЫМ СИРОПОМ</li> 
            </ul> 
          </div> 
        </div> 
      </div> 
    </section> 
    <hr /> 
    
    
    <section id="footer"> 
      <section id="banner"> 
        <div class="container-fluid" id="banner-container"> 
          <div class="row" id="banner-row"> 
            <div class="col-md-4" id="footer-col1"> 
              <h3>"МАФФИН"</h3> 
                
<p> 
                Наша пекарня работает с 2015 года. Самый разнообразный ассортимент выпечки, кофе.  
              </p> 
  
            </div> 
            <div class="col-md-4" id="footer-col2"> 
              <h3>Контакты</h3> 
                
<p>Номер телефона - 1800-121-6532</p> 
  
                
<p>Email - maffin@mail.ru</p> 
  
            </div> 
   <script
      src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity= 
"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script> 
  </body> 
</html> 
  
            

</body>
</html>