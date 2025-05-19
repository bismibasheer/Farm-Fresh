<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Glassmorphism Login</title>
  <link rel="stylesheet" href="<?php echo e(asset('Login/style.css')); ?>">

</head>
<body>
<!-- partial:index.partial.html -->
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="<?php echo e(route('adminlogin_process')); ?>" method="POST">
      <?php echo csrf_field(); ?>
        <h2>Login</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="text" name="username" required>
          <label for="">Username</label>
          <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" required>
          <label for="">Password</label>
          <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="forget">
          <label>
            <input type="checkbox"> Remember me
          </label>
          <label>
            <a href="#">Forgot password?</a>
          </label>
        </div>
        <button>Log in</button>
        <div class="register">
          <p>Don't have a account ? <a href="<?php echo e(asset('customerregister')); ?>">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</section>
<?php if(session('Error')): ?>
                  <script>
                    alert('<?php echo e(session('Error')); ?>');
                    </script>
                    <?php endif; ?>

<!-- partial -->
  <script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
</body>
</html>
<?php /**PATH C:\laravel projects\AgricultureShopping\resources\views/Guest/Login.blade.php ENDPATH**/ ?>