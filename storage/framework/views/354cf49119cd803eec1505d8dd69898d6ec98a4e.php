<div class="headerwrapper">
                <div class="header-left">
                    <a href="<?php echo e(route('admin.login')); ?>" class="logo">
                        <img src="/assets/images/logo.png" alt="" /> 
                    </a>
                    <div class="pull-right">
                        <a href="" class="menu-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                </div><!-- header-left -->
                
                <div class="header-right">
                    
                    <div class="pull-right">
                        
                        <form class="form form-search" action="search-results.html">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                        <div class="btn-group btn-group-option">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                              <li class="divider"></li>
                              <li><a href="#">
                              <a  href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            </ul>
                        </div><!-- btn-group -->
                        
                    </div><!-- pull-right -->
                    
                </div><!-- header-right -->
                
            </div><!-- headerwrapper --><?php /**PATH C:\Users\GJB STAFF\Desktop\library\resources\views/includes/admin/header.blade.php ENDPATH**/ ?>