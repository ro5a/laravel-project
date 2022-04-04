<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Recruitment</title>
    <style>
        html,body{
background-image: url('images/960x0.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}


.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}
.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}
.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: rgb(87, 111, 126);
}
    </style>
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
   <div><br><br><br></div>

   <div><br><br><br></div>
   <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Subscribe to post </h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					
					<div class="form-group mt-5">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
                </div></div>
                </div>
                </div>
                

    <div class="text-center mt-5"><h2>Companies</h2></div>
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
    
    <div class="container mt-5 my-2">
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