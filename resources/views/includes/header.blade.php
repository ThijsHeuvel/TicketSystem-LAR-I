<header>
    <title>TicketShop</title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metamorphous&family=Monoton&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <a href="{{ route('home') }}" class="titlelink"><span class="title">TicketShop</span></a>
    <div class="between">
        <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('events') }}">Events</a>
        <a href="{{ route('schedule') }}">Agenda</a>
        <a href="{{ route('events.index') }}">Admin Login</a>
    </nav>
</header>