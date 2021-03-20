<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-brand mx-auto">Admission management system</div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card shadow border-info ">
                    <div class="card-header">
                        <h5>Create your account.</h5>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Enter your name.</label>
                            <input type="text" name="name" placeholder="Enter your full name." class="form-control shadow border-primary">
                        </div>
                        <div class="mb-3">
                            <label for="">Enter your email.</label>
                            <input type="email" name="email" placeholder="Enter your email." class="form-control shadow border-primary">
                        </div>
                        <div class="mb-3">
                            <label for="">Enter your mobile no.</label>
                            <input type="text" name="phone" placeholder="Enter your mobile no." class="form-control shadow border-primary">
                        </div>
                        <div class="mb-3">
                            <label for="">Set strong password [combination of A-Z,a-z,0-9,~!@#$%^&*]</label>
                            <input type="text" name="password" placeholder="Set password." class="form-control shadow border-primary border-small">
                        </div>
                        <div class="mb-2">
                            <input type="submit" name="signup" value="Signup" class="btn btn-success w-100 shadow">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>