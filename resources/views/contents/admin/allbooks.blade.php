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
                                <h4 class="panel-title">All books in the library</h4>
                            </div><!-- panel-heading -->
                            
                            <table id="basicTable" class="table table-striped table-bordered responsive">
                                <thead class="">
                                    <tr>
                                        <th>Name</th>
                                        <th>Author</th>
                                        <th>Published</th>
                                        <th>category</th>
                                        <th>shelf</th>
                                        <th>code</th>
                                        <th>Book copy</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                    @foreach($books as $book)
                                    <tr>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->date }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td>{{ $book->shelf }}</td>
                                        <td>{{ $book->code  }}</td>
                                        <td>{{ $book->pdf }}</td>
                                        <td>Edit | Delete</td>
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
