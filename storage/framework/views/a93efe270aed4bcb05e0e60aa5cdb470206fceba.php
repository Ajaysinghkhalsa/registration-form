       
       <?php $__env->startSection('title','Login'); ?>
           

       <?php $__env->startSection('content'); ?>


       <?php if(session('error')): ?>
       <div class="alert alert-danger">
            <center><p> <?php echo e(session('error')); ?></p></center>
            </div>
        <?php endif; ?> 

       
<div align="center">
       <form method="post" action="<?php echo e(route('login')); ?>" class="login100-form validate-form" >
            <?php echo csrf_field(); ?>
        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100">Email Id</span>
            <input class="input100" type="email" name="email_id" placeholder="Enter Email">
            <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="phone_number" placeholder="Enter password">
            <span class="focus-input100"></span>
        </div>
        <button class="login100-form-btn">
            Login
        </button>
        
</form>
       <?php $__env->stopSection(); ?>
        
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\form\resources\views/login.blade.php ENDPATH**/ ?>