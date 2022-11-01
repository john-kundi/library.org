<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.cssfiles')
    </head>

    <body>
        
        <header>
            @include('includes.admin.header')
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    @include('includes.admin.leftpanel')
                    
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
                                @include('includes.status')
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-btns">
                                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Register new user here.</h4>
                                    </div>

                                    <form action="{{ route('add.user') }}" method="post">
                                        @csrf
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">First Name</label>
                                                    <input type="text" name="fname" class="form-control" required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Last Name</label>
                                                    <input type="text" name="lname" class="form-control" required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="mail" name="email" class="form-control" required/>
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
                                                    <label class="control-label">Password</label>
                                                    <input type="password" name="password" class="form-control"  required/>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                        </div><!-- row -->
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <button class="btn btn-primary">Register</button>
                                    </div><!-- panel-footer -->
                                    </form>
                                </div><!-- panel -->
                                
                            </div><!-- col-md-6 -->
                            
                        </div><!-- row -->
                        
                
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        @include('includes.jsfiles')

    </body>
</html>
