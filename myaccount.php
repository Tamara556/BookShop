<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="./style.css">
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
            <div class="container">
               <div class="main-body">
                  <!-- Breadcrumb -->
                  <nav aria-label="breadcrumb" class="main-breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                     </ol>
                  </nav>
                  <!-- /Breadcrumb -->
                  <div class="row gutters-sm">
                     <div class="col-md-4 mb-3">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex flex-column align-items-center text-center">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                 <div class="mt-3">
                                    <h4>Tamara Murazyan</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card mt-3">
                           <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                 <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                       <circle cx="12" cy="12" r="10"></circle>
                                       <line x1="2" y1="12" x2="22" y2="12"></line>
                                       <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                    Website
                                 </h6>
                                 <span class="text-secondary">https://bootdey.com</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                 <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                       <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>
                                    Github
                                 </h6>
                                 <span class="text-secondary">bootdey</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                 <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                       <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                    Twitter
                                 </h6>
                                 <span class="text-secondary">@bootdey</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                 <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                       <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                       <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                       <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                    Instagram
                                 </h6>
                                 <span class="text-secondary">bootdey</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                 <h6 class="mb-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                       <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                    Facebook
                                 </h6>
                                 <span class="text-secondary">bootdey</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="card mb-3">
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                    Kenneth Valdez
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                    fip@jukmuh.al
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                    (239) 816-9029
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                    (320) 380-4539
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                 </div>
                                 <div class="col-sm-9 text-secondary">
                                    Bay Area, San Francisco, CA
                                 </div>
                              </div>
                              <hr>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row gutters-sm">
                           <div class="col-sm-6 mb-3">
                              <div class="card h-100">
                                 <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 mb-3">
                              <div class="card h-100">
                                 <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                       <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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