<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="ຄິດເລື່ອງການສ້າງເວັບໄຊ ຫຼື ແອັບພິເຄຊັນ ທັງ Android ແລະ IOS ຫຼື ຕ້ອງການຮຽນ ຄິດເຖິງພວກເຮົາ ພວກເຮົາພ້ອມແລ້ວທີ່ຈະໃຫ້ບໍລິການທ່ານ">
    <meta name="keywords"
        content="HTML, CSS, JavaScript, ການຮຽນ, ການສອນ, ເປີດການຮຽນ-ການສອນ, ການຮຽນ-ການສອນ, ຫ້ອງຮຽນອອນລາຍ, ຫ້ອງຮຽນຄົນລາວ, ພັດທະນາ, ພັດທະນາເວັບໄຊ, ເວັບໄຊ, ແອັບ, ແອັປ, ແອບ, ແອັບພິເຄຊັນ, ແອັປພິເຄຊັນ, ແອປ, ເວັບໄຊສ໌, ສ້າງເວັບໄຊ, ສ້າງແອັບ, ຂຽນແອັບ, ຂຽນເວັບໄຊ">

    <meta name="author" content="Champadev">

    <link rel="icon" href="{{ asset('Images/Logo/Champadev.png') }}" type="image/gif">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Java Script -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Custom.js') }}" defer></script>
    <script src="{{ asset('js/Admin.js') }}" defer></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}" defer></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


    {{-- Font Awesome --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  -->
    <script src="//code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
</head>

<body onload="tableData()">

    @yield('contents')




    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    @yield('script')
</body>

</html>
