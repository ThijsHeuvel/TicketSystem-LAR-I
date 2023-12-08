@include('includes.header')
<div class="container">
    <h1>Edit Event</h1>
    <hr>
    @if($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('events.update', $event->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name Event</label>
            <input type="text" id="name" name="name" class="form-control" value={{ $event->name }}>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="3">{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="location" id="location" name="location" class="form-control">Location</label>
            <input type="text" id="location" name="location" class="form-control" value="{{ $event->location }}">
        </div>
        <div class="form-group">
            <label for="starts_at">Starts at</label>
            <input type="datetime-local" id="starts_at" name="starts_at" class="form-control" value="{{ $event->starts_at }}">
        </div>
        <div class="form-group">
            <label for="ends_at">Ends at</label>
            <input type="datetime-local" id="ends_at" name="ends_at" class="form-control" value="{{ $event->ends_at }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" id="price" name="price" class="form-control" value="{{ $event->price }}">
        </div>
        <button type="submit">Opslaan</button>
    </form>
</div>