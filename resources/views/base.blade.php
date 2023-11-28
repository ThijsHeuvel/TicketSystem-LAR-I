  @yield('content')
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TicketStyeem</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metamorphous&family=Monoton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
        <span class="title">TicketShop</span>
            <nav>
                <a href="">Home</a>
                <a href="">Events</a>
                <a href="">Agenda</a>
            </nav>
        </header>
        <main class="wrapper">
            <h1>Welkom op de TicketShop</h1>
        </main>
    </body>
</html>
