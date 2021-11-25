<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @include('bootstrap')
</head>
<body>
    @include('navbar')

    <div id="carouselExampleInterval" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="https://www.namesnack.com/images/namesnack-nombres-para-tiendas-de-alimentaci%C3%B3n-1920x1280-20210310.jpeg?crop=40:21,smart&width=1200&dpr=2" class="d-block w-75 mx-auto" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://i.blogs.es/410d97/calendario/450_1000.jpg" class="d-block w-75 mx-auto" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="https://as01.epimg.net/diarioas/imagenes/2021/11/22/actualidad/1637583921_025089_1637586596_noticia_normal_recorte1.jpg" class="d-block w-75 mx-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    
</body>
</html>