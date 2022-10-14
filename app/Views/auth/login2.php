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
    <body body>
    <div class="container">
    <div class="row" style="margin-top: 45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Sign In</h4><hr>
            <form action="<?= base_url('auth/check') ?>" method="post">
            <?= csrf_field(); ?>

            <?php if(!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail')?></div>
                <?php endif ?>
                <div class="form-group">
                    <label for="text">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email" 
                    value="<?= set_value('email')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'email'): '' ?></span>
                </div>
                <div class="form-group">
                    <label for="text">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter password">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                </div>
                <br>
                <a href="<?=site_url('auth/register'); ?>">Create new account.</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
