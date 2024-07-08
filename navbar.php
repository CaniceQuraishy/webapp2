<!DOCTYPE html>
<html lang="en">

<!--Head Section-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?> Canice Musa Quraishy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Resources/Icon.ico" type="image/x-icon">

    <style>
      html{
        scrollbar-width: normal;
        scrollbar-color:#fff #92cce4;
        scroll-padding-top:100px;
      }
    </style>
    
</head>

    <!--Navbar-->
    <!--Logo-->
    <header class="header">
        <a href="homepage.php"> <img src="Resources/WebsiteLogo.png" alt="logo" width="90" height="50"> </a>
        <nav class="navbar navbar-expand-lg navbar-dark-bg-transparent">
    <div class="container-fluid">
    <!--<a class="navbar-brand" href="#">Offcanvas navbar</a>-->

    <!--Toggle Button-->
    <button 
        class="navbar-toggler shdow-none border-0" 
        type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#offcanvasNavbar" 
        aria-controls="offcanvasNavbar" 
        aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!--SideBar-->
    <div 
        class="offcanvas offcanvas-start"
        tabindex="-1" 
        id="offcanvasNavbar" 
        aria-labelledby="offcanvasNavbarLabel"
    >

    <!-- Sider Header-->
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" 
        id="offcanvasNavbarLabel">Canice Quraishy</h5>
        <button 
        type="button" 
        class="btn-close" 
        data-bs-dismiss="offcanvas" 
        aria-label="Close"
    >
    </button>
      </div>

      <!--Sidebar Body-->
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="homepage.php#home">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="about.php#about">About</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="resume.php#resume">Resume</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="projects.php#projects">Projects</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="services.php#services">Services</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="blog.php#blog">Blog</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="contact.php#contact">Contact Us</a>
          </li>
        </ul>
      
        <!--Login/Sign Up-->

      </div>
    </div>
  </div>
</nav>
</header>