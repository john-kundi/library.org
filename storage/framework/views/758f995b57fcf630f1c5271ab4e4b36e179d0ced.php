<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('includes.cssfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signin">
                <div class="panel-body">
                    <?php echo $__env->make('includes.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <h4 class="text-center mb5">Library Management System</h4>
                    <!-- <p class="text-center">User Login</p> -->
                    
                    <div class="mb30"></div>
                    
                    <form action="<?php echo e(route('logins')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div><!-- input-group -->
                        
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="ckbox ckbox-primary mt10">
                                    <input type="checkbox" id="rememberMe" value="1">
                                    <label for="rememberMe">Remember Me</label>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success">Sign In <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>                      
                    </form>
                    
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="<?php echo e(route('signup.user')); ?>" class="btn btn-primary btn-block">Not yet a Member? Create Account Now</a>
                </div><!-- panel-footer -->
            </div><!-- panel -->
            
        </section>


        <?php echo $__env->make('includes.jsfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/welcome.blade.php ENDPATH**/ ?>