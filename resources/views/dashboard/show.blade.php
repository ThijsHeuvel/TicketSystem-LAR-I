@include('includes.header')
<div class="container">
    <h1><b>Event Detailpagina</b></h1>
    <hr>
   
    <h2><b>{{ $event->name }}</b></h2>
    <p><b>Beschrijving:</b> {{ $event->description }}</p>
    <p><b>Start:</b> {{ $event->starts_at }}</p>
    <p><b>Eind:</b> {{ $event->ends_at }}</p>
    <p><b>Locatie:</b> {{ $event->location }}</p>
    <p><b>Prijs:</b> &euro; {{ $event->price }}</p>

    <nav class="eventcontrolbuttons">
        <a href="{{ route('events.edit', $event->id) }}" class="editevent">Edit Event</a>
        <a href="{{ route('events.delete', $event->id) }}" class="deletevent">Delete Event</a>
        <a href="{{ route('events.index') }}" class="backtoevents">Terug naar Evenementen</a>
    </nav>
</div>
</div>