<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $__env->yieldContent('page_title'); ?> | AwoofSpin Game</title>
        <meta name="google-site-verification" content="TUmmPtaQnt3okYWDaMejEY-_U_yErtm5dtfia5BUJk8" />
        <meta name="keywords" content="simple awoofspin game, best awoofspin game of nigeria," />
        <meta name="description" content="Best spin game site for Nigeria.For a chance to win 150k and other fantastic prizes sign up and play">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/loader.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('html/font/style.css')); ?>" type="text/css" charset="utf-8" />
        <link rel="stylesheet" href="<?php echo e(asset('plugins/swal/sweetalert2.min.css')); ?>">
        <script src="<?php echo e(asset('plugins/jquery/jquery-3.3.1.min.js')); ?>" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.min.js')); ?>" charset="utf-8"></script>
        <script src="<?php echo e(asset('js/sidebar.js')); ?>" charset="utf-8"></script>
        <script src="<?php echo e(asset('plugins/swal/sweetalert2.min.js')); ?>" charset="utf-8"></script>
        <script data-ad-client="ca-pub-7269954483216817" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <?php echo $__env->yieldContent('page_css'); ?>
    </head>
    <body>
        <audio id="audio_bgm" loop>
            <source src="<?php echo e(asset('music/bgm.mpeg')); ?>">
            <source src="<?php echo e(asset('music/bgm.mp3')); ?>">
        </audio>
        <div class="main-container home-screen">
            <div class="container" style="position: relative;">
                <div class="row navbar-container open">
                    <span class="username_nav"><?php echo e(Auth::user()->name); ?></span>
                    <span class="choosegame_nav">Choose your game</span>
                    <div class="hamburger-btn-container" id="sidebar_click_btn">
                        <img src="<?php echo e(asset('images/hamburger_btn.png')); ?>" class="open_btn" alt="">
                        <img src="<?php echo e(asset('images/hamburger_close_btn.png')); ?>" class="close_btn" alt="">
                    </div>
                </div>
                <div class="row sidebar-container open" id="sidebar_container" style="display: block;">
                    <div class="overlay"></div>
                    <div class="menu-container" style='-webkit-overflow-scrolling:touch;'>
                        <ul>
                            <li> <a href="<?php echo e(route('dashboard')); ?>">dashboard</a> </li>
                            <li> <a href="<?php echo e(url('game')); ?>">select your game</a> </li>
                            <li> <a href="<?php echo e(route('buytokenview')); ?>">buy tokens</a> </li>
                            <li> <a href="<?php echo e(route('faq')); ?>">FAQ's</a> </li>
                            <li > <a style="text-transform: none" href="<?php echo e(route('how_play')); ?>">how to play</a> </li>
                            <li> <a href="<?php echo e(route('invite')); ?>">Invite Friends</a> </li>
                            <li> <a href="<?php echo e(route('contact')); ?>">Contact Us</a> </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- <div class="loading-container">
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


        <script src="<?php echo e(asset('js/global.js')); ?>" charset="utf-8"></script>
        <script type="text/javascript">
            window.onload = function () {
                setTimeout(function () {
                    $('.loading-container').fadeOut('slow');
                }, 500);
            }
        </script>
    </body>
</html>
<?php /**PATH E:\Project\Web\Laravel\spingame\resources\views/layouts/app.blade.php ENDPATH**/ ?>