<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Yearbook</title>
    <link href="{{ asset('css/login_style.css') }}" rel="stylesheet">
</head>
<body>


    <div class="wrapper fadeInDown">
        <div id="formContent">
    {{--        <h1>Yearbook</h1>--}}
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{asset('fixed/images/AtecLogoComp.png')}}" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form>
                <h3>Entrar no Yearbook</h3>
                <input type="text" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="palavra-passe">
                <input type="submit" class="fadeIn fourth" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="./recuperacaoemail.html">Recuperar palavra-passe</a>
            </div>

        </div>
    </div>

</body>
</html>
