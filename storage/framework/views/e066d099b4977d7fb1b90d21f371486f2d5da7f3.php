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
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns">
                                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Fill the form to add book</h4>
                                    </div>

                                    <form action="<?php echo e(route('add.book')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Book Name</label>
                                                    <input type="text" name="bookname" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Author</label>
                                                    <input type="text" name="author" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Code</label>
                                                    <input type="text" name="code" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                        </div><!-- row -->
                                  
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Published Date</label>
                                                    <input type="date" name="date" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select id="fruits" name="category" data-placeholder="Choose One" class="width100p" required>
                                                            <option>-select-</option>

                                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($cat->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Shelf</label>
                                                    <select id="fruits" name="shelf" data-placeholder="Choose One" class="width100p" required>
                                                            <option>-select-</option>

                                                        <?php $__currentLoopData = $shelves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shelf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($shelf->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">File</label>
                                                    <input type="file" name="book" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <button class="btn btn-primary">Add Book</button>
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
<?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/contents/admin/bookform.blade.php ENDPATH**/ ?>