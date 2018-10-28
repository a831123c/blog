<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>保羅的雜談園地</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand">
                <font color="white">保羅的雜談園地</font>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">關於保羅
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">文章</a>
                        <span class="sr-only">(current)</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">
                @if(!isset($count))

                @foreach ($post as $posts)
                <!-- Title -->
                <a href="post/{{ $posts['id'] }}">
                    <h1 class="mt-4">{{$posts['title']}}</h1>
                </a>
                <!-- Author -->
                <hr>

                <!-- Date/Time -->
                <p>Posted on {{$posts['post_date']}}</p>

                <hr>
                <p class="lead">
                    {{$posts['content']}}
                </p>
                <hr>
                @endforeach

                @else

                <h1 class="mt-4">{{$post['title']}}</h1>

                <!-- Author -->
                <hr>

                <!-- Date/Time -->
                <p>Posted on {{$post['post_date']}}</p>

                <hr>
                <p class="lead">
                    {{$post['content']}}
                </p>
                <hr>

                @endif


                <!-- Preview Image >
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>
          <-->
                <!-- Post Content -->

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature
                        the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('postfooter');

    <!-- Bootstrap core JavaScript -->
    <script src={{asset('vendor/jquery/jquery.min.js')}}></script>
    <script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

</body>

</html>
