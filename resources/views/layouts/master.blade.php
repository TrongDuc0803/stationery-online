<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            /* Áp dụng phông chữ cho toàn bộ body */
        }
    </style>
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('head')
</head>

<body>
    @include('layouts.partials.header')

    @yield('content')
    @include('layouts.partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Lấy phần tử menu và nút toggle
        const menuToggle = document.querySelector(".menu-toggle");
        const menu = document.querySelector(".menu");

        // Thêm sự kiện click vào nút toggle
        menuToggle.addEventListener("click", () => {
            menu.classList.toggle("open");
        });
    </script>
</body>

</html>