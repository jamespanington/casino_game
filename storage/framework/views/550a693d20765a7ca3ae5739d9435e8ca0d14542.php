
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="robots" content="noindex">
    <title>Thrift Gift Admin panel</title>

    <!-- Vendor css -->
    <link href="<?php echo e(asset('lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/Ionicons/css/ionicons.css')); ?>" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/slim.css')); ?>">
    <style>
      .form-group .from-control{
        font-family: arial;
      }
    </style>
  </head>
  <body>

    <div class="signin-wrapper">

      <div class="signin-box">
          <form action="<?php echo e(route('admin.login')); ?>" method="post">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
            <h2 class="slim-logo">Awoof Spin<span>.</span></h2>
            <h2 class="signin-title-primary">Welcome back!</h2>
            <h3 class="signin-title-secondary">Sign in to continue.</h3>

            <div class="form-group">
              <input type="text" name="admin_id" class="form-control" placeholder="Enter admin ID">
            </div><!-- form-group -->
            <div class="form-group mg-b-50">
              <input type="password" name="admin_password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->
            <button class="btn btn-primary btn-block btn-signin">Sign In</button>
            
        </form>
      </div><!-- signin-box -->

    </div><!-- signin-wrapper -->

    <script src="<?php echo e(asset('lib/jquery/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/popper.js/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/bootstrap/js/bootstrap.js')); ?>"></script>

    <script src="<?php echo e(asset('js/slim.js')); ?>"></script>

  </body>
</html>
<?php /**PATH E:\Project\Web\Laravel\spingame\resources\views/admin/login.blade.php ENDPATH**/ ?>