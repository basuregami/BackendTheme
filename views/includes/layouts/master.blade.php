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

    {{--commond css styling--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--css style after loading common css--}}
    @yield('after-styles')


</head>
<body class="skin-{{ config('backend.theme') }} {{ config('backend.layout') }}">

    <div id="wrapper">
        @include('includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div id="page-wrapper" class="gray-bg">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('page-header')

                {{-- Change to Breadcrumbs::render() if you want it to error to remind you to create the breadcrumbs for the given route --}}
                {!! Breadcrumbs::renderIfExists() !!}
            </section>

            <!-- Main content -->
            <section class="content">
                @include('includes.partials.messages')
                @yield('content')
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        @include('backend.includes.footer')
    </div><!-- ./wrapper -->

    <!-- JavaScripts -->
    @yield('before-scripts')
    {{--commond css styling--}}
    <script src="{{asset('js/app.js')}}"></script>
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