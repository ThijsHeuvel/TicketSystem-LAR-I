@include('includes.header')
<div class="container">
    <h1>Welcome op het Dashboard</h1>
    <p>Je kan op naam van event drukken om hem aan te passen en op de create knop om er eentje aan te maken.</p>
    <a class="createButton" href="{{ route('events.create') }}"><b>+ Create Event</b></a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Plaats</th>
            <th>Start om</th>
            <th>Prijs</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td><b>{{ $event->id }}</b></td>
                <td><b><a href="{{ route('events.show', $event->id)}}">{{$event->name }}</a></b></td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->starts_at }}</td>
                <td>&euro; {{ $event->price }}</td>
            </tr>
        @endforeach
    </table>
</div>
