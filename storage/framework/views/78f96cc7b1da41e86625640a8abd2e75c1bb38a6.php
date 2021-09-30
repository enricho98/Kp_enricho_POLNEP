<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!-- Team member -->
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-xs-12 col-sm-6 col-md-4 ">
    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
        <div class="mainflip">
            <div class="frontside">
                <div class="card">
                    <div class="card-body text-center">
                        <?php if(isset($p->profile_photo_path) && $p->profile_photo_path): ?>

                        <img class="img-fluid" src="<?php echo e(asset('storage/'.$p->profile_photo_path)); ?>" />

                        <?php else: ?>

                        <img class="img-fluid" src="img/Geisha_5120.png" />

                        <?php endif; ?>


                        <h4 class="card-title"><?php echo e($p->name); ?></h4>
                        <p class="card-text"><?php echo e($p->nim); ?></p>
                        <p class="card-text"><?php echo e($p->prodi); ?></p>
                        <p class="kerja"><?php echo e($p->pekerjaan); ?></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="backside scrollingOptions" id="avoidOptions">
                <div class="card">
                    <div class="card-body text-center mt-4">
                        <h4 class="card-title"><?php echo e($p->name); ?></h4>
                        <p class="card-text1 likeavoid avoid1" style="overflow-x:hidden;"><?php echo e($p->message); ?></p>

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.instagram.com/mediapolnep/?hl=id">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://id-id.facebook.com/POLNEP.Politeknik.Negeri.Pontianak/">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.youtube.com/c/PoliteknikNegeriPontianak/videos">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon text-xs-center" target="_blank" href="https://www.polnep.ac.id/">
                                    <i class="fa fa-globe"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<footer> <?php echo e($users->links()); ?></footer>



<script>
    var div = document.getElementById(scroll);


    You need to animate a little bit at a time.. <
        script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" >
</script><?php /**PATH /home/testimon/testimoni-polnep/resources/views/livewire/home.blade.php ENDPATH**/ ?>