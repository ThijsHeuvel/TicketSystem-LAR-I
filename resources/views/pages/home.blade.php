  @yield('content')
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

    <body>
        @include('includes.header') <!-- Voegt header toe -->
    
        <main class="wrapper">
            <h1>Welcome bij de TicketShop</h1>
            <p>Welkom bij onze betoverende ticketshop, waar passie en beleving samenkomen! Stap binnen in een wereld van onbegrensde mogelijkheden, waar we een uitgebreide selectie van tickets voor de meest opwindende evenementen aanbieden. Of je nu op zoek bent naar de pulserende beats van een muziekfestival, de adembenemende uitvoeringen van wereldberoemde artiesten, of de spanning van sportevenementen, wij hebben het allemaal voor jou.</p>
            <p>Onze ticketshop is meer dan alleen een plek om kaartjes te kopen; het is een portal naar onvergetelijke ervaringen. Verlies jezelf in de magie van live-optredens, voel de energie van de menigte, en creëer herinneringen die een leven lang meegaan. Van intieme theatervoorstellingen tot grootschalige sportevenementen, ons diverse assortiment zorgt ervoor dat er voor elk wat wils is.</p>
            <p>Ons toegewijde team staat klaar om je te begeleiden bij het vinden van de perfecte tickets die aansluiten bij jouw interesses en voorkeuren. Ontdek een wereld vol entertainment en vier het leven met onze uitgebreide collectie evenemententickets. Welkom bij de start van jouw onvergetelijke reis door de meest betoverende gebeurtenissen die de wereld te bieden heeft!</p>
        </main>
    </body>
</html>
