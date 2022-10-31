<div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="/assets/images/photos/profile.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{ Auth::user()->name }}</h4>
                            <small class="text-muted">{{ Auth::user()->role }}</small>
                        </div>
                    </div><!-- media -->
                    
                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="parent"><a href=""><i class="fa fa-bars"></i> <span>Books</span></a>
                            <ul class="children">
                                <li><a href="{{ route('user.all.books') }}">All Books</a></li>
                            </ul>
                        </li>
                        
                    </ul>