<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - {{ $page }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet">
    <link href="/resources/assets/css/icons/icomoon/styles.css" rel="stylesheet">
    <link href="/resources/assets/css/minified/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/assets/css/minified/core.min.css" rel="stylesheet">
    <link href="/resources/assets/css/minified/components.min.css" rel="stylesheet">
    <link href="/resources/assets/css/minified/colors.min.css" rel="stylesheet">
    <script src="/resources/assets/js/core/libraries/jquery.min.js"></script>
    <script src="/resources/assets/js/core/libraries/bootstrap.min.js"></script>
    <script src="/resources/assets/js/core/app.js"></script>

</head>

<body data-spy="scroll" data-target=".sidebar-detached" class="has-detached-right">
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand"><i class="icon icon-fire" style="margin-right:6px;"></i> Admin Panel </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-mobile">

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <span>{{ $user->username }}</span>
                    <i class="caret"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="/logout"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="page-container">
    <div class="page-content">
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left">
                              <img src="/resources/assets/images/default_avatar.png">
                            </a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">{{ $user->username }}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-shield2 text-size-small"></i> &nbsp; Administrator
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">
                            <!-- Quick Links -->
                            <li class="navigation-header"><span> Quick Links </span> </li>
                            <li> <a href="/dashboard"> <i class="icon-home"></i> <span> Dashboard </span> </a> </li>

                            <!-- Administration -->
                            <li class="navigation-header"><span> Administration </span> </li>
                            <li> <a href="/devices/list"> <i class="icon-wrench"></i> Manage Devices </a> </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main content -->
        <div class="content-wrapper">
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Admin Panel</span> - {{ $page }}</h4>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Admin Panel </a></li>
                        <li class="active">{{ $page }}</li>
                    </ul>
                </div>
            </div>
            <div class="content">

              @if(Session::has('success'))
                <div class="alert bg-success alert-styled-left">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Good Job!</span>  {{ Session::get('success') }}.
								</div>
              @elseif(Session::has('error'))
                <div class="alert bg-danger alert-styled-left">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Oh snap!</span> {{ Session::get('error') }}.
								</div>
              @endif
