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
    <link rel="icon" type="image/png" href="{{asset('img/icon.png')}}">
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
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="font-size:20px">
        <form action="/post" method="POST" name="article" onsubmit="return check()">
            <div class="input-group mb-3" style="margin-top:50px">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">標題</span>
                </div>
                <input type="text" name="title" class="form-control" placeholder="標題" aria-label="Username"
                    aria-describedby="basic-addon1">
                <input type="submit" class="btn btn-info" value="發文">
            </div>
            <div class="input-group mb-3" style="margin-top:10px;margin-bottom:30px;">
                <div class="input-group-prepend">
                    <span class="input-group-text">內文</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" name="editor"></textarea>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('postfooter');

    <!-- Bootstrap core JavaScript -->
    <script src={{asset('vendor/jquery/jquery.min.js')}}></script>
    <script src={{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("editor");
        CKEDITOR.config.height = '300px';
        CKEDITOR.config.width = '100%';
        CKEDITOR.config.allowedContent = true;

        function check() {
            if (document.article.title == "" || CKEDITOR.instances["editor"].getData() == "") {
                alert("標題或是內文沒填喔!");
                return false;
            }
        }

    </script>

</body>

</html>
