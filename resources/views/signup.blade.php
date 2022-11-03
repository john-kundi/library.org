<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Library - Registration</title>

        <link href="/assets/css/style.default.css" rel="stylesheet">

    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signup">
                <div class="panel-body">
                    <br />
                    <h4 class="text-center mb5">Create a new account</h4>
                    <p class="text-center">Please enter your credentials below</p>
                    
                    <div class="mb30"></div>
                    
                    <form action="{{ route('register.user') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter Firstname">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="lname" class="form-control" placeholder="Enter Lastname">
                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                                </div><!-- input-group -->
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                </div><!-- input-group -->
                            </div>
                        </div><!-- row -->
                        <br />

                        <div class="clearfix">
                            <div class="pull-left">
                                
                        <label for="agree"><a href="{{ route('welcome') }}">Alredy have an account? Login</a></label>
                                
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Register<i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>
                    
                </div><!-- panel-body -->
                </form>
            </div><!-- panel -->
            
        </section>


        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/modernizr.min.js"></script>
        <script src="/assets/js/pace.min.js"></script>
        <script src="/assets/js/retina.min.js"></script>
        <script src="/assets/js/jquery.cookies.js"></script>

        <script src="/assets/js/custom.js"></script>

    </body>
</html>
