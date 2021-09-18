<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link href="{{ asset('css/backOffice_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backOffice_style_header.css') }}" rel="stylesheet">

</head>
<body>

<header class="menu_intro">
    <a href="{{ route('logout') }}">Log Out</a>
</header>

<section >
    <div class="login_student_error">
        <h4 >Ainda não tens uma turma associada. Pede ao teu coordenador de turma para te incluir numa</h4>
    </div>
</section>

</body>
</html>
