<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="anasayfa.css">
    
    </head>
<body>
  
  
    <!-- Navbar -->
        <nav class="navbar">
        <div class="logo">
          
        </div>
        <ul class="nav-links">
            <li><a href="#">Anasayfa</a></li>
            <li><a href="#">Kategoriler</a></li>
            <li><a href="#">Hakkımızda</a></li>
             </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- İçerik -->

    
    <div class="container">
      <div class="header">
        <h1>Trend</h1>
      </div>
      <div class="row">
        <div class="slider">
        <?php include 'trend.php'; ?>
          <div class="slides"></div>
          <div class="btn btn-left">&#8249;</div>
          <div class="btn btn-right">&#8250;</div>
        </div>
      </div>
    </div>      
       
    
      <div class="container">
      <div class="header">
        <h1>POP Müzik</h1>
      </div>
     
      <div class="row">
        <div class="slider">
        <?php include 'pop.php'; ?>
             <div class="slides"></div>
            <div class="btn btn-left">&#8249;</div>
          <div class="btn btn-right">&#8250;</div>
        </div>
      </div>
    </div>
   




       
</body>
</html>
