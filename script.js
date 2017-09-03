

window.onload=start;

function start(){
  startTime();
  startData();
  startImieniny();
  wypisz();
  sprawdz_kolejke();
}

function startImieniny() {
  var today = new Date();
  var dzien = today.getDate();
  var miesiac = today.getMonth();
  var imiona = [
    ['0','0'],  // styczen
    ['0','0'],  // luty
    ['0','0'],  // ... reszta do uzupełnienia
    ['0','0'],
    ['0','0'],
    ['0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','Ireneusza', 'Pawła', 'Lucyny'], // czerwiec
    ['Haliny', 'Jagody', 'Tomasza', 'Malwiny', 'Atanazego', 'Odo', 'Dominika', 'Adriana', 'Weroniki', 'Olgi', 'Filipa', 'Paulina', 'Sary', 'Marcela', 'Dawida', 'Mariki', 'Bogdana', 'Emiliana', 'Radomiły', 'Hieronima', 'Daniela', 'Leny', 'Brygidy', 'Krystyny', 'Jakuba', 'Mirosławy', 'Natalii', 'Wiktora', 'Marty', 'Julity', 'Ignacego'],
    ['Justyna', 'Gustawa', 'Nikodema', 'Dominika', 'Oswalda', 'Sławy', 'Konrada', 'Emiliana', 'Ireny', 'Wawrzyńca', 'Zuzany', 'Lecha', 'Kasjany', 'Maksymiliana', 'Miriam'],
    ['Idziego', 'Stefana', 'Szymona', 'Selli', 'Doroty', 'Eugeniusza', 'Melchiora', 'Marii', 'Sergiusza', 'Mikołaja', 'Jacka', 'Gwidona', 'Jana', 'Bernarda', 'Albina', 'Kamili', 'Roberta', 'Ireny', 'Teodora', 'Filipy', 'Miry', 'Joahima', 'Bogusława', 'Gerarda', 'Kleofasa'],  // wrzesien
    ['0','0'],  // ..
    ['0','0'],
    ['0','0']   // grudzien
  ]
  document.getElementById('imieniny').innerHTML = 'Dziś imieniny: ' + imiona[miesiac][dzien-1];
  console.log(dzien);
  console.log(miesiac);
}

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('clock').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}

function startData(){
    var today = new Date();
    var dzien = today.getDate();
    var miesiace = ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień'];
    document.getElementById('datka').innerHTML = dzien + '   ' + miesiace[today.getMonth()] + '   ' + today.getFullYear();
  }


function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

/*-------image-gallery---------------*/
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
