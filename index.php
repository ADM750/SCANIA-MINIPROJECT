<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="navbar.css">
  <title>SCANIA</title>
</head>
<body>
  <header>
    <div class="logo">SCANIA</div>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="nav-bar">
      <ul>
        <li>
          <a href="index.html" class="active">Home</a>
        </li>
        <li>
          <a href="health.html">Health</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
        <li>
          <a href="signout.php">Signout</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="card-container">
    <div class="card">
      <img src="images/upload.png" alt="upload">
      <h2>Upload CXR Image</h2>
      <p>Upload the images to be examined for Pneumonia</p>
      <a href="upload_img.html" class="card-btn">Upload</a>
    </div>
    <div class="card">
      <img src="images/result.png" alt="upload">
      <h2>Check Result</h2>
      <p>Click the result button to view the result of the latest uploaded image</p>
      <a href="#" class="card-btn">Result</a>
    </div>
    <div class="card">
      <img src="images/history.png" alt="upload">
      <h2>History</h2>
      <p>Click the history button to view the results</p>
      <a href="#" class="card-btn">History</a>
    </div>
  </div>
  <div class="footer">
    <div class="footer-el">
      <h3>Our Services</h3>
      <ul>
        <li>State of the art diagnostic tool</li>
        <li>Information on pneumonia</li>
        <li>Symptom checker</li>
        <li>Treatment options</li>
      </ul>
    </div>
    <div class="footer-el">
      <h3>Testimonials</h3>
      <p>"Thanks to Scania - Pneumonia Detection, I was able to detect my pneumonia early and get the treatment I needed"<br><br> "The diagnostic tool on Scania - Pneumonia Detection was incredibly accurate and easy to use. Highly recommended"</p>
    </div>
  </div>
  <script>
    hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
      navBar = document.querySelector(".nav-bar");
      navBar.classList.toggle("active");
    }
  </script>
</body>
</html>
