<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- am 6 -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <title> @yield('title')</title> -->
    <!-- am 9 -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @livewireStyles

</head>

<body>
    <div class="container">
        @include('layouts.includes.sidebar')

        <main class="main-content">
            @yield('content')

        </main>
    </div>

    <script>
        function setActive(e) {
            e.preventDefault();
            document.querySelectorAll('.sidebar-menu a').forEach(link => {
                link.classList.remove('active');
            });
            e.currentTarget.classList.add('active');

            const section = e.currentTarget.getAttribute('href').substring(1);
            document.querySelector('.header h1').textContent = section.charAt(0).toUpperCase() + section.slice(1);
        }

        function handleLogout() {
            if (confirm('Are you sure you want to logout?')) {
                alert('Logging out...');
            }
        }
    </script>
</body>

</html>
