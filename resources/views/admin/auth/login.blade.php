<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Login Page &mdash; Amtec</title>

        <meta name="description" content="">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">


    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('/assets/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">Sign In</h3>
                            
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
													@if ($errors->has('email'))
                                                    <div class="alert alert-danger">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                  @endif
                                    
                                                   @if ($errors->has('password'))
                                                        <div class="alert alert-danger">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </div>
                                                    @endif
												
												
                                                <h1 class="mb-2">Amtec</h1>
                                                <p>Welcome, please login.</p>

                                                <!-- Sign In Form -->
                                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                                <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
														{{ csrf_field() }}
                                                    <div class="py-3">
                                                        <div class="form-group">
															<input id="email" type="email" class="form-control form-control-alt form-control-lg" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                                        </div>
                                                        <div class="form-group">
															<input id="password" type="password" class="form-control form-control-alt form-control-lg" name="password" placeholder="Password"  required>	
                                                        </div>
                                                        <div class="form-group">
                                                         <div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember" {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                         </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 col-xl-5">
                                                            <button type="submit" class="btn btn-block btn-primary">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END Sign In Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full font-size-sm text-muted text-center">
                            Copyright &copy; <strong>Amtec</strong> - <?php echo date("Y"); ?>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

 
        <script src="assets/js/oneui.core.min.js"></script>

        <script src="assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="/assets/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>
