@include('includes.header')
<div class="container">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
            <th>Starts at</th>
            <th>Price</th>
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

    <a href="{{ route('events.create') }}"><b>+ Create Event</b></a>
</div>
