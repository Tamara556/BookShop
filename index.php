<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">BookShop</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="./shop.php">shop</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Contact
                           </a>
                           <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="./register.php">Register</a></li>
                              <li><a class="dropdown-item" href="./login.php">Login</a></li>
                              <li>
                                 <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="./myaccount.php">My Account</a>
                        </li>
                     </ul>
                     <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="https://i.pinimg.com/736x/f0/98/bf/f098bfa21d0e66875a012ba44c867c75.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="https://i.pinimg.com/736x/73/b1/c4/73b1c42784fdca287a34367d6ac95f40.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="https://i.pinimg.com/736x/86/5b/f2/865bf2c88b80d2a6ac020fcf96316614.jpg" class="d-block w-100" alt="...">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>
      </div>
      <div class="container">
         <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
               <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                  <svg class="bi" width="30" height="24" aria-hidden="true">
                     <use xlink:href="#bootstrap"></use>
                  </svg>
               </a>
               <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span> 
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
               <li class="ms-3">
                  <a class="text-body-secondary" href="#" aria-label="Instagram">
                     <svg class="bi" width="24" height="24" aria-hidden="true">
                        <use xlink:href="#instagram"></use>
                     </svg>
                  </a>
               </li>
               <li class="ms-3">
                  <a class="text-body-secondary" href="#" aria-label="Facebook">
                     <svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                     </svg>
                  </a>
               </li>
            </ul>
         </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
   </body>
</html>