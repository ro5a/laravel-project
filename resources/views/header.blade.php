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