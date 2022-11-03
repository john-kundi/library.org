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
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        @include('includes.status')
                                        <div class="panel-btns">
                                            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
                                            <a href="" class="panel-close tooltips" data-toggle="tooltip" title="Close Panel"><i class="fa fa-times"></i></a>
                                        </div><!-- panel-btns -->
                                        <h4 class="panel-title">Fill the form to add book</h4>
                                    </div>

    <form action="{{ route('admin.update.book',$book->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Book Name</label>
                                                    <input type="text" value="{{ $book->name }}" name="bookname" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->
                                            
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Author</label>
                                                    <input type="text" value="{{ $book->author }}" name="author" class="form-control" />
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Code</label>
                                                    <input type="text" value="{{ $book->code }}" name="code" class="form-control" />
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

                                                        @foreach($category as $cat)
                                                            <option>{{ $cat->name }}</option>
                                                        @endforeach
                                                </select>
                                                </div><!-- form-group -->
                                            </div><!-- col-sm-6 -->

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Shelf</label>
                                                    <select id="fruits" name="shelf" data-placeholder="Choose One" class="width100p" required>
                                                            <option>-select-</option>

                                                        @foreach($shelves as $shelf)
                                                            <option>{{ $shelf->name }}</option>
                                                        @endforeach
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
                                        <button class="btn btn-primary">Update Book</button>
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
