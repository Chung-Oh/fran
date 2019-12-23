<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Daniel Chung">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- External Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('templates.navbar')

    <main>
        @yield('content')
    </main>

    @include('templates.footer')
    <!-- JS -->
    <script> // Logo Name 'FranBeauty'
        var windowWidth = window.innerWidth;

        window.onscroll = function() {
            (windowWidth >= 1200) ? renderTitleNavBar(30, 80) : renderTitleNavBar(20, 42);
        };

        var glow = document.querySelector('.glow');

        function renderTitleNavBar(min, max) {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                glow.style.fontSize = min + 'px';
                lightNameDesktop(false);
            } else {
                glow.style.fontSize = max + 'px';
                lightNameDesktop(true);
            }
        }

        function lightNameDesktop(status) {
            (status) ? glow.classList.add('glow-lg') : glow.classList.remove('glow-lg');
        }
    </script>
    <script> // Animation of name bar navigation line
        var path = window.location.pathname;
        var pages = document.querySelectorAll('.page');

        pages.forEach(function(page) {
            var target = page.parentElement;
            target.addEventListener('mouseover', function() {
                page.classList.add('page-active');
            });
            target.addEventListener('mouseout', function() {
                page.classList.remove('page-active');
            });
        });

        function verifyPath(path) {
            switch (path) {
                case '/':
                    currentPage(0);
                    break;
                case '/services':
                    currentPage(1);
                    break;
                case '/about':
                    currentPage(2);
                    break;
                case '/jobs':
                    currentPage(3);
                    break;
                case '/contact':
                    currentPage(4);
                    break;
            }
        }

        function currentPage(index) {
            pages[index].parentElement.classList.add('active');
            pages[index].classList.add('page-current');
        }

        verifyPath(path);
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>