<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dorm Management | Student</title>
    <base href="{{ asset('') }}">

    <!-- Bootstrap CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/custom/style.css">

    <!-- Font-Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
    @include('student.layout.header')

    @yield('main-content')
    
    @include('student.layout.footer')

    @include('student.layout.script')
  
</body>

</html>