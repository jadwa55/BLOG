





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>BLOG!</title>
  </head>
  <body>
    <div class="container">
        <div class="row m-5 p-5 shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="src/login.jpg" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-5 bg-white p-5">
                <h3 class="pb-3">Login</h3>
                <div class="form-style">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group pb-3"> <!-- pb = padding-bottom (spacing) -->
                            <input type="email" placeholder="Email" class="form-control">   
                        </div>
                        <div class="form-group pb-3">   
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div><a href="#">Forget Password?</a></div>
                        <div class="pb-2">
                            <button type="submit" name="submit" class="btn btn-primary w-100 mt-2">Sing In</button>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>
  </body>
</html>