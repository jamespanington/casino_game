<?php $__env->startSection('page_title'); ?> Home <?php $__env->stopSection(); ?>
<?php $__env->startSection('page_css'); ?>
    <style media="screen">
        @media  only screen
        and (device-width : 375px)
        and (device-height : 812px)
        and (-webkit-device-pixel-ratio : 3) {
            .home_container > .circle-img-container {
                margin-top: 75px;
            }
        }
        body {
                font-family: 'Lemon/Milk Bold';
            }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .certain-container::before{
        background-image:none
    } 
    .circle-img-container > img {
        width:40%;
    }
    @media (max-width: 767px){
        .circle-img-container > img {
            width: 100%;
        }
    }
    
</style>
    <div class="row certain-container" >
        <!-- <div class="sound-icon-container">
            <a href="#" onclick="bgm_on(1)" style="display: inline-block;cursor: pointer;"><img src="<?php echo e(asset('images/sound_icon.png')); ?>" alt=""></a>
        </div> -->
        <div class="home_container">
            <div class="logo-container">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
            </div>
            <div class="circle-img-container" style="">
                <img src="<?php echo e(asset('html/images/new_spin.png')); ?>" alt="">
            </div>
            <div class="text-container">
                <img src="<?php echo e(asset('images/home_bottom_text.png')); ?>" alt="">
            </div>
        </div>
    </div>
<script>
$(document).ready(function(){
    $('.overlay').unbind("click");
    $( "#sidebar_click_btn").unbind( "click" );
    
});    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Web\Laravel\spingame\resources\views/home.blade.php ENDPATH**/ ?>