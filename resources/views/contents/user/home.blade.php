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
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Statistics</h5>
                                        <div id="basicFlotLegend" class="flotLegend"></div>
                                        <div id="basicflot" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>$9,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline2" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>$8,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Visitors</h5>
                                        <div id="basicFlotLegend2" class="flotLegend"></div>
                                        <div id="basicflot2" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline3" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>52,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline4" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>11,201</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-body padding15">
                                        <h5 class="md-title mt0 mb10">Site Impressions</h5>
                                        <div id="basicFlotLegend3" class="flotLegend"></div>
                                        <div id="basicflot3" class="flotChart"></div>
                                    </div><!-- panel-body -->
                                    <div class="panel-footer">
                                        <div class="tinystat pull-left">
                                            <div id="sparkline5" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Average</span>
                                                <h4>37,101</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                        <div class="tinystat pull-right">
                                            <div id="sparkline6" class="chart mt5"></div>
                                            <div class="datainfo">
                                                <span class="text-muted">Total</span>
                                                <h4>18,899</h4>
                                            </div>
                                        </div><!-- tinystat -->
                                    </div><!-- panel-footer -->
                                </div><!-- panel -->
                            </div>
                            
                        </div><!-- row -->
                        
                
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


        @include('includes.jsfiles')

    </body>
</html>
