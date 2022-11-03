<?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><?php echo e($error); ?></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php elseif(session()->has('status')): ?>
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><?php echo e(session('status')); ?></strong>
                                </div>
                                <?php endif; ?><?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/includes/status.blade.php ENDPATH**/ ?>