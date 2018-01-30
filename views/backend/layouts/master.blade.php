<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--Application name--}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('meta_author', 'Basu Regami')">

    @yield('meta')

    <!-- css styles before common css-->
    @yield('before-styles')


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{--css style after loading common css--}}
    @yield('after-styles')
</head>

<body>

<div id="wrapper">

    {{--start of header wrapper--}}
    <div  class="header-wrapper">
        @include('backend.includes.sidebar')
    </div>

    <!-- Content Wrapper. Contains page content -->
    <div id="page-wrapper" class="section-wrapper gray-bg">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @include('backend.includes.header')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
        @include('backend.includes.footer')
    </div><!-- /page-wrapper -->
</div>


<!-- JavaScripts -->
@yield('before-scripts')
{{--commond css styling--}}
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('after-scripts')


</body>

</html>
