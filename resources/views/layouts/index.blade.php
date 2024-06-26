<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <!-- Include any CSS or meta tags needed for your layout -->
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('funcionarios.index') }}">Employees</a></li>
            <li><a href="{{ route('departamentos.index') }}">Departments</a></li>
            <li><a href="{{ route('horarios.index') }}">WorkingHours</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>
<script>document.querySelectorAll('[action]').forEach((form)=>{
    if(!window.location.href.includes('localhost') && !window.location.href.includes('127.0.0.1')) {
        form.action = form.action.replace('http', 'https');
    }

    })</script>

</body>
</html>
