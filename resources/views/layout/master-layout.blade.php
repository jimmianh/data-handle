<!doctype html>
<html class="fixed">
<head>
    @include('layout.head')

</head>
<body>
<section class="body">

    <!-- start: header -->
@include('layout.header')
<!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
    @include('layout.left-menu')
    <!-- end: sidebar -->

        @include('layout.content')
    </div>

</section>
@include('layout.script')

</body>
</html>
