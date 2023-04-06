<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('public.logo_text')</title>
    @include('frontend.includes.header_links')
</head>
<body class="homePageOne">
@include('sweetalert::alert')
<!-- start preloader -->
@include('frontend.components.preloader')
<!-- end preloader -->
@include('frontend.includes.header')

@yield('content')

@include('frontend.includes.footer')
<!-- Off-Canvas View Only -->
<span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

@include('frontend.components.overlay_canvas_menu')


<div id="toTop" class="hidden-xs">
    <i class="fa fa-chevron-up"></i>
</div> <!-- totop -->

@include('frontend.includes.footer_links')
</body>
</html>
