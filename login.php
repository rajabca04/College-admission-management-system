
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<style>
    a{
        text-decoration: none;
    }

</style>
</head>
<body style="background-color:white;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="navbar-brand mx-auto">Admission management system</div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <div class="card shadow border-primary border-small" style="border-radius: 0;">
                    <div class="card-header "><h5>Login your account</h5></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-5">
                                <input type="email" name="user_id" placeholder="Enter Registered email_ID." class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-5">
                                <input type="password" name="password" placeholder="Enter password." class="form-control shadow border-success border-small">
                            </div>
                            <div class="mb-5">
                                 
                                     <input type="submit" name="login" value="Login"  class="btn btn-primary shadow border-danger border-small " style="width: 45%; padding:2%;"> <a href=""><button class="btn btn-success shadow border-danger border-small" style="width: 45%; padding:2%; margin-left:9%;" >Ragister</button></a>
                                     <a href="" style="text-decoration: none; color:red;">Lost my password <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg> </a>
                                     
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>