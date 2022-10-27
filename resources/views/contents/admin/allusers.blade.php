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
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->lname }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                <td><a href="{{ route('edituser',$user->id) }}">Edit</a> | <a href="{{ route('deleteuser',$user->id) }}">Delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- panel -->
                        
                
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        @include('includes.jsfiles')

    </body>
</html>
