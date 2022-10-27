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
                          <div class="col-sm-9">
                            <div class="row media-manager">
                              
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
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-doc.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">MyDocuments.doc</a></h5>
                                  <small class="text-muted">Added: Jan 03, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 image">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check2" value="1" />
                                    <label for="check2"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <a href="images/photos/media1.jpg" data-rel="prettyPhoto">
                                      <img src="/assets/images/photos/media1.jpg" class="img-responsive" alt="" />
                                    </a>
                                  </div>
                                  <h5 class="fm-title"><a href="">Vegetarian.png</a></h5>
                                  <small class="text-muted">Added: Jan 02, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 video">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check3" value="1" />
                                    <label for="check3"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media5.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">DogAnimation.mp4</a></h5>
                                  <small class="text-muted">Added: Jan 02, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 audio">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check7" value="1" />
                                    <label for="check7"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-audio.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">WreckingBall.mp3</a></h5>
                                  <small class="text-muted">Added: Jan 01, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 image">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check4" value="1" />
                                    <label for="check4"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <a href="images/photos/media3.png" data-rel="prettyPhoto">
                                      <img src="/assets/images/photos/media3.png" class="img-responsive" alt="" />
                                    </a>
                                  </div>
                                  <h5 class="fm-title"><a href="">MyFirstArt.png</a></h5>
                                  <small class="text-muted">Added: Jan 01, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 document">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check5" value="1" />
                                    <label for="check5"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-doc.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">MyResume.docx</a></h5>
                                  <small class="text-muted">Added: Jan 01, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 video">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check6" value="1" />
                                    <label for="check6"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media4.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">MyFirstMovie.mp4</a></h5>
                                  <small class="text-muted">Added: Jan 01, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                                          
                              <div class="col-xs-6 col-sm-4 col-md-3 image">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check13" value="1" />
                                    <label for="check13"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <a href="images/photos/media2.png" data-rel="prettyPhoto">
                                      <img src="/assets/images/photos/media2.png" class="img-responsive" alt="" />
                                    </a>
                                  </div>
                                  <h5 class="fm-title"><a href="">MeAndFriends.png</a></h5>
                                  <small class="text-muted">Added: Jan 01, 2014</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 audio">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check8" value="1" />
                                    <label for="check8"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-audio.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">IWillSurvive.mp3</a></h5>
                                  <small class="text-muted">Added: Dec 31, 2013</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 document">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check9" value="1" />
                                    <label for="check9"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media-doc.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">MyDocuments.doc</a></h5>
                                  <small class="text-muted">Added: Dec 31, 2013</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 image">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check10" value="1" />
                                    <label for="check10"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <a href="/assets/images/photos/media6.png" data-rel="prettyPhoto">
                                      <img src="/assets/images/photos/media6.png" class="img-responsive" alt="" />
                                    </a>
                                  </div>
                                  <h5 class="fm-title"><a href="">GreatCity.png</a></h5>
                                  <small class="text-muted">Added: Dec 30, 2013</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
                              <div class="col-xs-6 col-sm-4 col-md-3 video">
                                <div class="thmb">
                                  <div class="ckbox ckbox-default">
                                    <input type="checkbox" id="check11" value="1" />
                                    <label for="check11"></label>
                                  </div>
                                  <div class="btn-group fm-group">
                                      <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu fm-menu pull-right" role="menu">
                                        <li><a href="#"><i class="fa fa-share"></i> Share</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i> Email</a></li>
                                        <li><a href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                                        <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                        <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                      </ul>
                                  </div><!-- btn-group -->
                                  <div class="thmb-prev">
                                    <img src="/assets/images/photos/media7.png" class="img-responsive" alt="" />
                                  </div>
                                  <h5 class="fm-title"><a href="">InTheSea.mp4</a></h5>
                                  <small class="text-muted">Added: Dec 30, 2013</small>
                                </div><!-- thmb -->
                              </div><!-- col-xs-6 -->
                              
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
                          <div class="col-sm-3">
                            <div class="media-manager-sidebar">
                              
                              <button class="btn btn-primary btn-block">Upload Files</button>
                              
                              <div class="mb30"></div>
                              
                              <h5 class="lg-title">Folders <a href="" class="pull-right">+ Add New Folder</a></h5>
                              <ul class="folder-list">
                                <li><a href=""><i class="fa fa-folder-o"></i> My Collection</a></li>
                                <li><a href=""><i class="fa fa-folder-o"></i> Downloaded Books</a></li>
                                <li><a href=""><i class="fa fa-folder-o"></i> Already Read E-book</a></li>
                              </ul>
                              
                              <div class="mb30"></div>
                              
                              <h5 class="lg-title">Tags</h5>
                              <ul class="tag-list">
                                <li><a href="">Popular Books</a></li>
                                <li><a href="">Marked Books</a></li>
                                <li><a href="">E-book Documentation</a></li>
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
