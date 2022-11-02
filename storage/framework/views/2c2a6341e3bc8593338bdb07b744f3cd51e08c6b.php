<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('page_title'); ?> | AwoofSpin Game</title>
        <meta name="google-site-verification" content="TUmmPtaQnt3okYWDaMejEY-_U_yErtm5dtfia5BUJk8" />
        <meta name="keywords" content="simple awoofspin game,best awoofspin game of nigeria," />
        <meta name="description" content="Best spin game site for Nigeria.For a chance to win 150k and other fantastic prizes play">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <!-- <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo e(asset('plugins/swal/sweetalert2.min.css')); ?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>"> -->
        <!-- <link rel="stylesheet" href="<?php echo e(asset('css/loader.css')); ?>"> -->
        <script src="<?php echo e(asset('plugins/jquery/jquery-3.3.1.min.js')); ?>" charset="utf-8"></script>
        <script src="<?php echo e(asset('plugins/swal/sweetalert2.min.js')); ?>" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>" charset="utf-8"></script>
        <script src="<?php echo e(asset('plugins/validator/jquery.validate.min.js')); ?>" charset="utf-8"></script>
        

         <link rel="stylesheet" href="<?php echo e(asset('html/plugins/bootstrap/css/bootstrap.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('html/plugins/swal/sweetalert2.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('html/css/style.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('html/css/auth.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('html/css/loader.css')); ?>" />
        <!-- <script src="<?php echo e(asset('html/plugins/jquery/jquery-3.3.1.min.js')); ?> charset="utf-8"></script>
        <script src="<?php echo e(asset('html/plugins/swal/sweetalert2.min.js')); ?> charset="utf-8"></script>
        <script src="<?php echo e(asset('html/plugins/bootstrap/js/bootstrap.min.js')); ?> charset="utf-8"></script>
        <script src="<?php echo e(asset('html/plugins/validator/jquery.validate.min.js')); ?> charset="utf-8"></script>
         -->
        <?php echo $__env->yieldContent('page_style'); ?>
        <script data-ad-client="ca-pub-7269954483216817" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        <audio id="audio_bgm" loop>
            <source src="<?php echo e(asset('html/music/bgm.mpeg')); ?>" />
            <source src="<?php echo e(asset('html/music/bgm.mp3')); ?>" />
        </audio>
        
        <?php echo $__env->yieldContent('content'); ?>
        <!-- <div class="loading-container" style="background: linear-gradient(#7b000d, #db0018, #7b000d)">
            <div class="spin-container">
                <img
                    src="<?php echo e(asset('html/images/try.png')); ?>"
                    class="spin-bg-image"
                    style="     left: 10px;   width: 100%;top:-50px"
                    alt=""
                />
                <img src="<?php echo e(asset('html/images/turn_bg_spin.png')); ?>" class="spin-bg-image" alt="" />
                <img src="<?php echo e(asset('html/images/turning_spin.png')); ?>" class="spin-turnning-image" alt="" />
                <img src="<?php echo e(asset('html/images/spin_pin.png')); ?>" class="spin-pin-image" alt="" />
                <img
                    src="<?php echo e(asset('html/images/spin-content.png')); ?>"
                    class="spin-bg-image"
                    style="top:270px;    left: 37px;    width: 70%;"
                    alt=""
                />
            </div>
        </div> -->

        <script src="<?php echo e(asset('js/auth.js')); ?>" charset="utf-8"></script>
        <script src="<?php echo e(asset('js/global.js')); ?>" charset="utf-8"></script>
        <script type="text/javascript">
            window.onload = function() {
                setTimeout(function() {
                    $(".loading-container").fadeOut("slow");
                }, 500);
            };
        </script>
    </body>
</html>
<?php /**PATH E:\Project\Web\Laravel\spingame\resources\views/layouts/authmaster_first.blade.php ENDPATH**/ ?>