<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('includes.cssfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        
        <header>
            <?php echo $__env->make('includes.user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    <?php echo $__env->make('includes.user.leftpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </div><!-- leftpanel -->
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-folder"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="">Store</a></li>
                                    <li>All Books</li>
                                </ul>
                                <h4>Books Dashboard</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel contentpanel-mediamanager">
                        
                        <div class="media-options">
                            <div class="pull-left">
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        <button id="selectAll" class="btn btn-default btn-sm" type="button">Select All</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm disabled" type="button"><i class="fa fa-envelope mr5"></i> Email</button>
                                        <button class="btn btn-default btn-sm disabled" type="button"><i class="fa fa-download mr5"></i> Download</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-sm disabled" type="button"><i class="fa fa-pencil mr5"></i> Edit</button>
                                        <button class="btn btn-default btn-sm disabled" type="button"><i class="fa fa-trash-o mr5"></i> Delete</button>
                                    </div>
                                </div><!-- btn-toolbar -->
                            </div>
                            <div class="pull-right">
                                Show: 
                                <div class="btn-group media-option-group" data-toggle="buttons">
                                    <label class="btn btn-default btn-sm active">
                                      <input type="radio" name="options" id="opAll" checked> All
                                    </label>
                                    <label class="btn btn-default btn-sm">
                                      <input type="radio" name="options" id="opDoc"> Documents
                                    </label>
                                    <label class="btn btn-default btn-sm">
                                      <input type="radio" name="options" id="opImg"> Images
                                    </label>
                                </div><!-- btn-group -->
                            </div>
                        </div><!-- media-options -->
                        
                        <hr>
      
                        <div class="row">
                          <div class="col-sm-9">
                              <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-line">
                                    <li class="active"><a href="#activities" data-toggle="tab"><strong>Comments</strong></a></li>
                                </ul>
                            
                                <!-- Tab panes -->
                                <div class="tab-content nopadding noborder">
                                    <div class="tab-pane active" id="activities">
                                        <div class="activity-list">  
                                            
                                  
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" src="images/photos/profile.png" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    <strong>John Kundi</strong> posted a new book. <br />
                                            <form action="<?php echo e(route('user.comment',$book->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="media blog-media">
                                                        <div class="media-body">
                                                            <h4 class="media-title">Type Comment here</h4>
                                                            <div class="form-group">
                                                                <div class="col-sm-9">
                                                                <textarea class="form-control" name="comment" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                <button class="btn btn-primary btn-sm">Share Comment</button>
                                                                </div>
                                                            </div><!-- form-group -->
                                                        </div>
                                                      </div><!-- media --> 
                                                      </form>     
                                                </div><!-- media-body -->
                                            </div><!-- media -->
                                  
                                          <?php if($comments->count() && !empty($comments)): ?>
                                          <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" src="/assets/images/photos/profile.png" alt="" />
                                                </a>
                                                <div class="media-body">
                                                    
                                                    <strong><?php echo e(Auth::user()->name); ?></strong> posted a new comment. <br />
                                                    
                                                    <p><?php echo e($comment->message); ?> <a href="">Read more</a></p>
                                                </div>
                                            </div><!-- media -->
                                          
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          <?php else: ?>
                                            <div class="media">
                                                <h5>No comment recently....</h5>
                                            </div>
                                          
                                          <?php endif; ?>

                                        </div><!-- activity-list -->
                                    </div>
                                    </div><!-- tab-pane -->
                          </div><!-- col-sm-9 -->
                          <div class="col-sm-3">
                            <div class="media-manager-sidebar">
                              
                              <button class="btn btn-primary btn-block">Upload Files</button>
                              
                              
                              
                              <div class="mb30"></div>
                              
                              <h5 class="lg-title">Tags</h5>
                              <ul class="tag-list">
                                <li><a href="<?php echo e(route('popular.books')); ?>">Popular Books</a></li>
                              </ul>
                              
                            </div>
                          </div><!-- col-sm-3 -->
                        </div>
                      </div>
                    
                    </div><!-- contentpanel -->

            </div><!-- mainwrapper -->
        </section>


        <?php echo $__env->make('includes.jsfiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </body>
</html>
<?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/contents/user/comments.blade.php ENDPATH**/ ?>