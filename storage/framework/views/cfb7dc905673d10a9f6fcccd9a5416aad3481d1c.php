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
                                <?php echo $__env->make('includes.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                            <div class="panel panel-primary-head">
                            <div class="panel-heading">
                                <h4 class="panel-title">List of all registered users.</h4>
                            </div><!-- panel-heading -->
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->lname); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->role); ?></td>
                                <td><a href="<?php echo e(route('edituser',$user->id)); ?>">Edit</a> | <a href="<?php echo e(route('deleteuser',$user->id)); ?>">Delete</a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div><!-- panel -->
                        
                
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        <?php echo $__env->make('includes.jsfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/contents/admin/allusers.blade.php ENDPATH**/ ?>