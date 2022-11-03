<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('includes.cssfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        
        <header>
            <?php echo $__env->make('includes.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <?php echo $__env->make('includes.admin.leftpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Dashboard</li>
                                </ul>
                                <h4>Dashboard</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        
                        

                        <div class="row">
                            
                            <div class="col-md-12"> 
                                <?php echo $__env->make('includes.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns">
                                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Edit user details here.</h4>
                                    </div>

                                    <form action="<?php echo e(route('update.user',$user->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" value="<?php echo e($user->name); ?>" name="fname" class="form-control" required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" value="<?php echo e($user->lname); ?>" name="lname" class="form-control" required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="mail" value="<?php echo e($user->email); ?>" name="email" class="form-control" required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                        </div><!-- row -->
                                  
                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Role</label>
                                                    <select id="fruits" name="role" data-placeholder="Choose One" class="width100p" required>
                                                            <option>-select-</option>

                                                            <option>user</option>
                                                            <option>admin</option>
                                                        
                                                </select>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Enter new password</label>
                                                    <input type="password" name="password" class="form-control"  required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <button class="btn btn-primary">Update Details</button>
                                    </div><!-- panel-footer -->
                                    </form>
                                </div><!-- panel -->
                                
                            </div><!-- col-md-6 -->
                            
                        </div><!-- row -->
                        
                
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        <?php echo $__env->make('includes.jsfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/contents/admin/edituser.blade.php ENDPATH**/ ?>