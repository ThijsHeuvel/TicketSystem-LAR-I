<!DOCTYPE html>
<html lang="nl">
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

    @include('includes.header') <!-- Voegt header toe -->
    <body>
        <div class="container">
            <h1>Aankomende Evenementen</h1>
            <div class="grid">
                @foreach ($events as $event)
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <p class="card-text"><b>Datum:</b> {{ $event->starts_at }}</p>
                            <a href="{{ route('events.orderticket', $event->id) }}" class="btn btn-primary ticketbutton">Koop Tickets</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>
</html>