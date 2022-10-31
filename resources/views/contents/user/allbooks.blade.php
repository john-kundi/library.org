<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.cssfiles')
    </head>

    <body>
        
        <header>
            @include('includes.user.header')
        </header>
        
        <section>
            <div class="mainwrapper">
                <div class="leftpanel">
                    @include('includes.user.leftpanel')
                    
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
                            @include('includes.status')
                            <div class="row media-manager">
                              @if(!empty($books) && $books->count())
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

            <li><a href="{{ route('mark.fav',$book->id) }}"><i class="fa fa-share"></i>Mark Favorite</a></li>
            @foreach($favorites as $favorite)
            @if(($favorite->status == 'yes') && ($favorite->user_id == Auth::user()->id) && ($favorite->book_id == $book->id))
            <li><a href="{{ route('unmark.fav',$book->id) }}"><i class="fa fa-share"></i>Unmark Favorite</a></li>
            @elseif(($favorite->status == 'no') && ($favorite->user_id == Auth::user()->id) && ($favorite->book_id == $book->id))
            <li><a href="{{ route('unmark.fav',$book->id) }}"><i class="fa fa-share"></i>Mark Favorite</a></li>
            @endif
            @endforeach

            <li><a href="{{ route('like.book',$book->id) }}"><i class="fa fa-envelope-o"></i> Like</a></li>
            <li><a href="#"><i class="fa fa-download"></i> Comment</a></li>
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
                            @endif
                            </div><!-- row -->
                            
                            <br />
                            <ul class="pagination pagination-split mt5">
                                <li><a href="#">{{ $books->links() }}</a></li>
                            </ul>
                            
                            
                          </div><!-- col-sm-9 -->
                          <div class="col-sm-3">
                            <div class="media-manager-sidebar">
                              
                              <button class="btn btn-primary btn-block">Upload Files</button>
                              
                              
                              
                              <div class="mb30"></div>
                              
                              <h5 class="lg-title">Tags</h5>
                              <ul class="tag-list">
                                <li><a href="{{ route('popular.books') }}">Popular Books</a></li>
                              </ul>
                              
                            </div>
                          </div><!-- col-sm-3 -->
                        </div>
                      </div>
                    
                    </div><!-- contentpanel -->

            </div><!-- mainwrapper -->
        </section>


        @include('includes.jsfiles')

    </body>
</html>
