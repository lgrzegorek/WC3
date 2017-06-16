<?php include('menu.php'); ?>
<h1> Tapety</h1>
<div class="row">
<div class="column">
<img src="Grafika/skriny/warcraft_skrin1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
<div class="column">
<img src="Grafika/skriny/warcraft_skrin2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
<div class="column">
<img  src="Grafika/skriny/warcraft_skrin3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
<div class="column">
<img  src="Grafika/skriny/warcraft_skrin4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
<div class="column">
<img  src="Grafika/skriny/warcraft_skrin5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
<div class="column">
<img  src="Grafika/skriny/warcraft_skrin6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor" style="width:200px; height:150px;">
</div>
</div>

    
<div id="myModal" class="modal2">
  <span class="close" onclick="closeModal()">&#10060;</span>
  <div class="modal-content2">

    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin1.jpg" style="width:800px;  height:650px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin2.jpg" style="width:800px; height:650px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin3.jpg" style="width:800px;  height:650px;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin4.jpg" style="width:800px;  height:650px;">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin5.jpg" style="width:800px; height:650px;">
    </div>
      
    <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="Grafika/skriny/warcraft_skrin6.jpg" style="width:800px; height:650px;">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin1.jpg" style="width:200px;  height:150px; " onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin2.jpg" style="width:200px;  height:150px;" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin3.jpg" style="width:200px;  height:150px;" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin4.jpg" style="width:200px;  height:150px;" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin5.jpg" style="width:200px;  height:150px;" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="Grafika/skriny/warcraft_skrin6.jpg" style="width:200px;  height:150px;" onclick="currentSlide(4)" >
    </div>
  </div>
</div>
  
<script src="script.js"></script> 
<?php include('stopka.php'); ?>
