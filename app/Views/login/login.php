<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">
    
    <title>Penjadwalan Mata Kuliah</title>
    </head> 
    <body body class="bg-secondary">
    <div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-4 m-5 ">
            <div class="card p-3">
                <h3 class="text-center">Login</h3>
                <form action="<?= base_url('/auth');?>" method="post">
                <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby>
                    </div>
                    <div class="form-group">
                        <label for="pass">password</label>
                        <input type="pass" name="pass" id="pass" class="form-control" placeholder="" aria-describedby>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
  </body>
</html>
