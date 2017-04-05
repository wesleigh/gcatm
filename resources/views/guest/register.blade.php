<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel</title>
        <link href="https://fonts.googleapis.com/resources/assets/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet">
        <link href="/resources/assets/css/icons/icomoon/styles.css" rel="stylesheet">
        <link href="/resources/assets/css/minified/bootstrap.min.css" rel="stylesheet">
        <link href="/resources/assets/css/minified/core.min.css" rel="stylesheet">
        <link href="/resources/assets/css/minified/components.min.css" rel="stylesheet">
        <link href="/resources/assets/css/minified/colors.min.css" rel="stylesheet">
        <script src="/resources/assets/js/plugins/loaders/pace.min.js"></script>
        <script src="/resources/assets/js/core/libraries/jquery.min.js"></script>
        <script src="/resources/assets/js/core/libraries/bootstrap.min.js"></script>
        <script src="/resources/assets/js/plugins/loaders/blockui.min.js"></script>
        <script src="/resources/assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script src="/resources/assets/js/core/app.js"></script>
        <script src="/resources/assets/js/pages/login.js"></script>
    </head>
    <body class="bg-slate-800">
    <div class="page-container login-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content">
                  @if (Session::has('error'))
                    <center>
                        <div class="alert bg-danger alert-styled-left" style="width:20%;margin-top:2.5%;">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                            <span class="text-semibold">{{ Session::get('error') }}</span>
                        </div>
                    </center>
                  @endif
                    <form method="post">
                      {{ csrf_field() }}
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
                                <h5 class="content-group-lg">Create an accountt  <small class="display-block">Enter your credentials</small></h5>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control" placeholder="Email" name="email">
                                <div class="form-control-feedback">
                                    <i class="icon-envelop text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-success btn-block">Register</button>
                                <a href="/login" class="btn bg-blue btn-block">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
