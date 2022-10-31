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
                            @include('includes.status')
                          <div class="col-sm-12">
                            <div class="row media-manager">
                              
                              @foreach($books as $book)
                              <div class="col-xs-6 col-sm-4 col-md-3 document">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check1" value="1" />
                                    <label for="check1"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="{{ route('admin.edit.book',$book->id) }}"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="{{ route('admin.delete.book',$book->id) }}"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-doc.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">{{ $book->name }}</a></h5>
                                  <small class="text-muted">Published: {{ $book->date }}</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              @endforeach
                               
                            </div><!-- row -->
                            
                            <br />
                            <ul class="pagination pagination-split mt5">
                                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                            
                            
                          </div><!-- col-sm-9 -->
                        </div>
                      </div>
                    
                    </div><!-- contentpanel -->

            </div><!-- mainwrapper -->
        </section>


        @include('includes.jsfiles')

    </body>
</html>
