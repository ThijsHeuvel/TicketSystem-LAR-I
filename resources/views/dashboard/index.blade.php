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
            <th>&nbsp;</th>
        </tr>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->starts_at }}</td>
                <td>{{ $event->price }}</td>
                <td><a href="#">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>
</div>
