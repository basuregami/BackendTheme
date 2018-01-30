<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>R4G | Custom Error</title>

    <link href="{{asset('admin_template/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_template/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('admin_template/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin_template/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">


<div class="middle-box text-center animated fadeInDown">
    <h4>Custom Error</h4>
    <div class="error-desc">
        <h2> CUSTOM ERROR!! </h2>
        <P> @if(isset($error)) {{$error}} @endif </P>
        <br/>
       <!--  <form class="form-inline m-t" role="form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search for page">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form> -->
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{asset('admin_template/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap.min.js')}}"></script>

</body>

</html>
