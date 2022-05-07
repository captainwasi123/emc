<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title') | Event Management System</title>

    <link rel="icon" href="{{URL::to('/assets/')}}/img/logo.png" type="image/png">
    @include('includes.style')
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
     <!-- sidebar  -->
        @include('includes.sidebar')
     <!--/ sidebar  -->


    <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
            @include('includes.header')
        <!--/ menu  -->
        
        <div class="main_content_iner ">
            @yield('content')
        </div>

        <!-- footer part -->
        @include('includes.footer')
    </section>

<!-- main content part end -->

<!-- scripts -->
    @include('includes.script')

</body>

</html>
