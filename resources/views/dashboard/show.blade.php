@include('includes.header')
<div class="container">
    <h1><b>Event Detailpagina</b></h1>
    <a href="{{ route('events.index') }}" class="backtoevents terugknop">Terug naar Evenementen</a>
    <hr>
   
    <h2><b>{{ $event->name }}</b></h2>
    <p><b>Beschrijving:</b> {{ $event->description }}</p>
    <p><b>Start:</b> {{ $event->starts_at }}</p>
    <p><b>Eind:</b> {{ $event->ends_at }}</p>
    <p><b>Locatie:</b> {{ $event->location }}</p>
    <p><b>Prijs:</b> &euro; {{ $event->price }}</p>

    <nav class="eventcontrolbuttons">
        <a href="{{ route('events.edit', $event->id) }}" class="editknop">Edit Event</a>
    </nav>
    <hr>
    <div class="eventcontrolbuttons">
        <form action="{{ route('events.delete', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="deletevent deleteknop">Delete Event</button>
        </form>
    </div>
</div>
</div>