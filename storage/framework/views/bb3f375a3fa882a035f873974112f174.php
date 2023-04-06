<?php $__env->startSection('title','About Us'); ?>
<?php $__env->startSection('content'); ?>
    <section class="header-title section-padding" style="background: url( <?php echo e(asset('/')); ?>assets/frontend/images/sub/about-bg.jpg)">
        <div class="container">
            <h2 class="title">Our Team</h2>
            <span class="sub-title">Home / <span class="text-color">Our Team</span></span>
        </div>
    </section> <!-- header-title -->

    <section class="team-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card rounded-0" style="box-shadow: 0 0 5px 2px #e3e3e3;border: 1px solid #e3e3e3;padding: 15px;">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, amet consectetur debitis dolores doloribus ducimus est facere inventore nam necessitatibus odio odit optio porro sapiente similique sint soluta, tempora voluptas.</p>
                            <hr class="border border-bottom" style="border-color: #e3e3e3;"/>
                            <div class="">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- team-section -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Milon Kumar Tailwind Css\Laravel\The Camical Project\Agriculture\resources\views/frontend/pages/carrer/create.blade.php ENDPATH**/ ?>