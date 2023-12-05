<header>
    <title>TicketShop</title>
    <span class="title">TicketShop</span>
    <div class="between">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('schedule') }}">Agenda</a>
        </nav>
        <nav>
        <a class="login-button" href="{{ route('events.index') }}">Inloggen</a>
        </nav>
    </div>
</header>