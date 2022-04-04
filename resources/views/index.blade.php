<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Recruitment</title>
</head>
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light ">
            <div class="container-fluid">
              <a class=" ms-5 navbar-brand navbar-left" href="dashboard.html" style="color: #FFC312;font-weight: bolder;font-size: 30px;">
               Jobs
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav   nav navbar-center">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  style="color: #fff;" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: #fff;" href="career.html">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: #fff;" href="services.html">Our services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: #fff;" href="companies.html">Companies</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color: #fff;" href="CV.html">CV</a>
                  </li>

                
                  <li class="nav-item">
                    <a class="nav-link"  style="color: #fff;" href="contuct.html">Contuct us</a>
                  </li>
                  
                 
                 
                </ul>
               
                
              </div>
              <ul class="nav navbar-nav navbar-right">
               
                <li class="nav-item">
                 <a class="nav-link login"  style="color: #fff;" > <button type="button"style="background-color: #233d7b;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa fa-user"></i>&nbsp; Login
                </button></a>
                </li>
            </ul>
            </div>
          </nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" class="needs-validation" novalidate>
      <div class="modal-body">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="validationCustomEmail" placeholder="name@example.com"name="email" required>
          <div class="invalid-feedback">
            Please choose a email.
          </div>
        </div>
        <div class="col-auto">
          <label for="inputPassword2" class="visually-hidden">Password</label>
          <input type="password" class="form-control" id="validationCustom05" placeholder="Password"name="pswd" required>
          <div class="invalid-feedback">
            Please provide a valid password.
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"style="background-color: #233d7b;" class="btn btn-primary">Submit</button>
        <a class="nav-link login"  style="color: #fff;" > <button type="button"style="background-color: #233d7b;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Sign up
        </button></a>
      </div>
    </form>
    </div>
  </div>
</div>

    </header>
    <div><br><br></div>
    <div id="carouselExampleIndicators " class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="images/pexels-photo-3183197.jpeg " class="d-block w-100"style="height: 360px;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/photo-1578091879915-33ee869e2cd7.jfif" class="d-block w-100" style="height: 360px;"  alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/certified block chain expert.jfif" class="d-block w-100" style="height: 360px;" alt="...">
        </div>
       
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div style="background-color: #f9f9f9;padding: 10px;">
      <div class="lh-sm ms-5 mt-5 justify-content-center align-items-center" >
        <p class="fw-bold">Find the pest job</p>
        <h3>Search from 25000 jobs</h3>
          <div class="col-md-8 ">
              <div class="search input-group-text"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Find a job"> <input type="text" aria-label="Location" class="form-control"placeholder="Location"><button style="background-color: #233d7b;" class="btn btn-primary">Search</button> </div>

          </div>
          
      </div>
    </div>
    <div class="ms-5 mt-5"><h2>Latest jobs</h2></div>
    <div class="flex">
      
      <div class="card " style="width: 18rem;">
        <img src="images/img2.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Assistente Editor</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <span class="text-muted fs-6">pound 3000-4000/Weekely</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Devlopments Apps</li>
          
        </ul>
        
      </div>
      <div class="card " style="width: 18rem;">
        <img src="images/img2.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Assistente Editor</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <span>pound 3000-4000/Weekely</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Engineering</li>
          
        </ul>
        
      </div>
      <div class="card " style="width: 18rem;">
        <img src="images/img2.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Assistente Editor</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <span>pound 3000-4000/Weekely</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Coutomer Services</li>
          
        </ul>
        
      </div>
      <div class="card " style="width: 18rem;">
        <img src="images/img2.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Assistente Editor</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <span class="text-muted fs-6">pound 3000-4000/Weekely</span>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Devlopments Apps</li>
          
        </ul>
        </div>
    </div>
    <div class="text-center mt-5"><h2>Top Hire</h2></div>
    <div class="container mt-5">
      <div class="d-flex justify-content-between">
        
      </div>
      <div class="row mt-2 g-1">
          <div class="col-md-3">
              <div class="card p-2">
                  
                  <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/color/96/000000/google-logo.png" width="60" /> <span class="d-block font-weight-bold">Google</span>
                     
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card p-2">
                  
                  <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" width="60" /> <span class="d-block font-weight-bold">Instagram</span>
                     
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card p-2">
                  
                  <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/officel/80/000000/dribbble.png" width="60" /> <span class="d-block font-weight-bold">Dribbble</span>
                      
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card ">
                  
                  <div class="text-center mt-2 p-3"> <img src="https://img.icons8.com/color/96/000000/behance.png" width="60" /> <span class="d-block font-weight-bold">Behance</span>
                     
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
    <footer>
<form action="" class="margin"  ><div class="row g-3  ">

  <div class="col-auto" class="card " >
  <h3 class="card-title">subscribe to our Newsletter</h3>
  <p class="card-text">Are you intersted in Jobs new features and update?</p>
</div>
<div class="col-auto">
  <div class="input-group mb-3">
    <input type="email" class="form-control " placeholder="Enter Email" aria-label="enter email" style="margin:auto;" aria-describedby="button-addon2">
    <button class="btn btn-outline-primary" type="button" id="button-addon2"><i class="	fa fa-long-arrow-right"></i></button>
  </div>
</div>
</div>
</form>
<div class="flex1">
  <div><h4>job location</h4>
  <ul><li>sololearn</li>
    <li>google</li>
    <li>facebook</li>
  </ul></div>
  <div class="text"><h4 style="color: #FFC312;">Jobs</h4>
  <p class="text-wrap">this the place where you find your job, you wanted.</p><div>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-twitter"></i>
    <i class="fa fa-pinterest"></i>
  </div>
</div>
  <div><h4>Hot links</h4>
  <ul>
    <li>about</li>
    <li>blog</li>
    <li>contuct</li>
  </ul> </div>
  
</div>
<div class="copy"><p>all reverse Jobs company &copy copyright 2022</p></div>
    </footer>
    <script src="js/app.js">
    
    </script>
     <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

</body>
</html>