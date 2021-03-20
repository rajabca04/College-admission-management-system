<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-brand mx-auto">Admission management system</div>
    </nav>

<div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow border-primary border-small" style="border-radius: 0;">
                    <div class="card-header "><h5>Fill registation form.</h5></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Student full name.</label>
                                <input type="text" name="name" placeholder="Enter name." class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-3">
                                <label for="">Student working email.</label>
                                <input type="email" name="email" placeholder="Enter  valid email." class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-3">
                            <label for="">Student avalable mobile no.</label>
                                <input type="text" name="phone" placeholder="Enter  valid contact no." class="form-control shadow border-success border-small">
                            </div>
                            
                            <div class="mb-3">
                                <label for="">Student heigest qualification.</label>
                                <input type="text" name="class" placeholder="Enter  qualifiction. " class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-3">
                                <label for="">Student date of barth.</label>
                                <input type="text" name="dob" placeholder="Enter date_of_barth. " class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-3">
                                <label for=""> Select current profile photo.</label>
                                <input type="file" name="photo"  class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-2">
                                 
                                <input type="submit" name="signup" value="Register"  class="btn btn-primary shadow border-danger border-small " style="width: 100%; padding:2%;">
                                       
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>