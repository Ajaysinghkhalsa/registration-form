    
<?php $__env->startSection('content'); ?>
    


<?php if(session('error')): ?>
<div class="alert alert-danger">
                <center><p> <?php echo e(session('error')); ?></p></center>
                </div>
            <?php endif; ?> 

<div class="container">
  
<form   method="post" action="<?php echo e(route('register')); ?>" class="login100-form validate-form" > 
    
	<?php echo csrf_field(); ?>

<div class="wrap-input100 validate-input m-b-18" data-validate = "Name is required">
     <span class="label-input100">Name</span>
     <input class="input100" type="text" name="name" id="name" placeholder="Enter Name">
     <span class="focus-input100"></span>
</div>

<div class="wrap-input100 validate-input m-b-18" data-validate = "Phone number is required">
        <span class="label-input100">Phone number</span>
        <input class="input100" type="number" id="phone_number" name="phone_number" placeholder="Enter phone number">
        <span class="focus-input100"></span>
    </div>

 <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
     <span class="label-input100">Email Id</span>
     <input class="input100" type="email" id="email_id" name="email_id" placeholder="Enter Email">
     <span class="focus-input100"></span>
 </div>

 


 <div class="container-login100-form-btn">
    
    <button class="login100-form-btn">
        Register
    </button>
 </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\form\resources\views/register.blade.php ENDPATH**/ ?>