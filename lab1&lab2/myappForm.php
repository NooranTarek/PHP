
<?php
    if(isset($_GET['errors'])){
        $errors = json_decode($_GET["errors"], true);

    }
    if(isset($_GET['old_data'])){
      $old_data = json_decode($_GET["old_data"], true);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="myapp.css" rel="stylesheet">

</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
        <form action="validationForm.php" method="post">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://images.pexels.com/photos/3194518/pexels-photo-3194518.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height: 600px;" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Student registration form</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example1m" class="form-control form-control-lg" name="firstname"
                            value="<?php echo $old_data['firstname']? $old_data['firstname']: ''; ?>"/>
                            <label class="form-label" for="form3Example1m">First name</label>
                            <label style="color: red; font-weight: bold">
                           <?php echo $errors['firstname']? $errors["firstname"]: ""; ?>

                          </label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lastname"
                            value="<?php echo $old_data['lastname']? $old_data['lastname']: ''; ?>"/>
                            <label class="form-label" for="form3Example1n">Last name</label>
                            <label style="color: red; font-weight: bold">
                           <?php echo $errors['lastname']? $errors["lastname"]: ""; ?>

                        </label>
                          
                          </div>
                        </div>
                      </div>
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form3Example8" class="form-control form-control-lg" name="address"
                        value="<?php echo $old_data['address']? $old_data['address']: ''; ?>"/>
                        <label class="form-label" for="form3Example8">Address</label>
                        <label style="color: red; font-weight: bold">
                        <?php echo $errors['address']? $errors["address"]: ""; ?>

                      </label>
                      </div>
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form3Example8" class="form-control form-control-lg" name="password" 
                        value="<?php echo $old_data['password']? $old_data['password']: ''; ?>"/>
                        <label class="form-label" for="form3Example8">Password</label>
                        <label style="color: red; font-weight: bold">
                       <?php echo $errors['password']? $errors["password"]: ""; ?>

                        </label>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
      
                          <select class="select">
                            <option value="1">City</option>
                            <option value="2">Helwan</option>
                            <option value="3">Giza</option>
                            <option value="4">Cairo</option>
                          </select>
      
                        </div>
                      </div>
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form3Example90" class="form-control form-control-lg" name="age"
                        value="<?php echo $old_data['age']? $old_data['age']: ''; ?>"/>
                        <label class="form-label" for="form3Example90">Age</label>
                        <label style="color: red; font-weight: bold">
                       <?php echo $errors['age']? $errors["age"]: ""; ?>

                      </label>
                      </div>
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="form3Example99" class="form-control form-control-lg" name="track"
                        value="<?php echo $old_data['track']? $old_data['track']: ''; ?>"/>
                        <label class="form-label" for="form3Example99">Track</label>
                        <label style="color: red; font-weight: bold">
                        <?php echo $errors['track']? $errors["track"]: ""; ?>

                        </label>
                      </div>
      
                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form3Example97" class="form-control form-control-lg" name="email"
                        value="<?php echo $old_data['email']? $old_data['email']: ''; ?>"/>
                        <label class="form-label" for="form3Example97">Email</label>
                        <label style="color: red; font-weight: bold">
                         <?php echo $errors['email']? $errors["email"]: ""; ?>

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