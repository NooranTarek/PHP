<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="myapp.css" rel="stylesheet">

</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
        <form action="loginFormVAlidation.php" method="post">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://media.istockphoto.com/id/1416048929/photo/woman-working-on-laptop-online-checking-emails-and-planning-on-the-internet-while-sitting-in.jpg?s=612x612&w=0&k=20&c=mt-Bsap56B_7Lgx1fcLqFVXTeDbIOILVjTdOqrDS54s="
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height: 400px;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student Login form</h3>
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form3Example97" class="form-control form-control-lg" name="email"
                        value="<?php echo $old_data['email']? $old_data['email']: ''; ?>"/>
                        <label class="form-label" for="form3Example97">Email</label>
                        <label style="color: red; font-weight: bold">
                         <?php echo $errors['email']? $errors["email"]: ""; ?>

                      </label>
                      </div>

                      <div class="row">


                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password" 
                        value="<?php echo $old_data['password']? $old_data['password']: ''; ?>"/>
                        <label class="form-label" for="form3Example8">Password</label>
                        <label style="color: red; font-weight: bold">
                       <?php echo $errors['password']? $errors["password"]: ""; ?>

                        </label>
                      </div>
      

      

                      <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </section>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>