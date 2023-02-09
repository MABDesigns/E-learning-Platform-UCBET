<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to UCBET Docs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/74e878f173.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../../css/darktheme.css">
    <link rel="stylesheet" href="../../../../../css/custom.css">
  </head>
  <body>
    <style>
 .popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  border: 1px solid gray;
  padding: 20px;
  width: 100%;
  max-width: 1980px;
  z-index: 1;
}

.popup-content {
  position: relative;
}

.close-button1, .close-button2, .close-button3, .close-button4, .close-button5, .close-button6, .close-button7, .close-button8, .close-button9, .close-button10 {
  position: absolute;
  right: 10px;
  top: 10px;
  font-size: 30px;
  cursor: pointer;
  font-weight: bold;
  color: red;
}
@media (max-width: 768px) {
    .close-button1, .close-button2, .close-button3, .close-button4, .close-button5, .close-button6, .close-button7, .close-button8, .close-button9, .close-button10 {
    font-size: 30px;
  }
}

    </style>
  <button id="toggleDarkMode">
      <i class="fa-solid fa-moon" id="icon"></i>
      </button>
  <nav class="navbar bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand mx-auto" href="#">
      <img id="textimg" src="http://univ-eltarf.dz/ucbet/wp-content/uploads/2022/02/cropped-logo.png" alt="Logo"   class="d-inline-block align-text-middle">
      UCBET Docs
    </a>
  </div>
  </nav>
  <div class="container-fluid">
    <br>
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../../../../">Home</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="../../../../">Faculty of Sciences and Technology</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="../../../">Informatics</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="../../">Master 1</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="../">Semestre 1</a></li>
    <li class="breadcrumb-item active" aria-current="page">Architectures et Administration de Base de donnés</a></li>

  </ol>
</nav>
  <h1 class="text-center">Cours / TD / TP</h1>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <a class="text-decoration-none text-primary"  id="toggle1" style="color:white !important">TP1</a>
        <div style="display: none !important;" class="popup" id="content1">
            <div class="popup-content">
                <span class="close-button1">&times;</span>
                <iframe src="../../../../../pdf/AABD/TP1.pdf" width="100%" height="1000"></iframe>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <a class="text-decoration-none text-primary"  id="toggle2" style="color:white !important">Cours</a>
        <div style="display: none !important;" class="popup" id="content2">
            <div class="popup-content">
                <span class="close-button2">&times;</span>
                <iframe src="../../../../../pdf/AABD/Cours.pdf" width="100%" height="1000"></iframe>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <a class="text-decoration-none text-primary"  id="toggle3" style="color:white !important">TP1</a>
        <div style="display: none !important;" class="popup" id="content3">
            <div class="popup-content">
                <span class="close-button3">&times;</span>
                <iframe src="../../../../../pdf/AABD/TP1.pdf" width="100%" height="1000"></iframe>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <a class="text-decoration-none text-primary"  id="toggle4" style="color:white !important">TP1</a>
        <div style="display: none !important;" class="popup" id="content4">
            <div class="popup-content">
                <span class="close-button4">&times;</span>
                <iframe src="../../../../../pdf/AABD/TP1.pdf" width="100%" height="1000"></iframe>
            </div>
        </div>
    </li>
  </ul>
</div>

<br>
<br>
<br>
<br>


  <footer class="bg-light py-3">
  <div class="container">
    <p class="text-center text-secondary">&copy; 2023 Created by Mostepha Amine BDEIRA</p>
  </div>
</footer>


<script>
document.getElementById("toggle1").addEventListener("click", function(){
  document.getElementById("content1").style.display = "block";
});

document.querySelector(".close-button1").addEventListener("click", function(){
  document.getElementById("content1").style.display = "none";
});
/////////////
document.getElementById("toggle2").addEventListener("click", function(){
  document.getElementById("content2").style.display = "block";
});

document.querySelector(".close-button2").addEventListener("click", function(){
  document.getElementById("content2").style.display = "none";
});

///////////////
document.getElementById("toggle3").addEventListener("click", function(){
  document.getElementById("content3").style.display = "block";
});

document.querySelector(".close-button3").addEventListener("click", function(){
  document.getElementById("content3").style.display = "none";
});
/////////////////
document.getElementById("toggle4").addEventListener("click", function(){
  document.getElementById("content4").style.display = "block";
});

document.querySelector(".close-button4").addEventListener("click", function(){
  document.getElementById("content4").style.display = "none";
});
</script>

  <script src="../../../../../js/darktheme.js"></script>
  <script src="https://kit.fontawesome.com/74e878f173.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
