<html>
<head>
 <link rel="stylesheet" href="CSS/index.css">
</head>
<Body>
	<div>
<div class="header">
	<img src="IMAGE/cool.jpg" class="image" style="border-radius: 7px;" width="40px" height="40px"></img>
  <a href="#default" class="logo"> INTEGRATED ENGINEERS POINTS</a>

  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
</div>
<!-- <Marquee>	<H1>Welcome</H1></Marquee> -->
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="IMAGE/img3.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Text</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="IMAGE/img4.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Two</div>
</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="IMAGE/img5.jpeg" style="width:100%" height="400px">
  <div class="text">Caption Two</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!-- <img src="wall.jpg" width="auto" height="60%" ><p>HELLO World!</p></img> -->
</Body>
<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</html>


