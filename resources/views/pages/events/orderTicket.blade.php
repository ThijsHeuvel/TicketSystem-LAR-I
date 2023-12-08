@include('includes.header')

<div class="container">
    <h1>Bestel tickets voor {{ $event->name }}</h1>
    <hr>
    <form action="{{ route('events.storeorderticket', $event->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="amount">Aantal tickets</label>
            <input type="number" id="amount" name="amount" class="form-control">
        </div>
        <button type="submit">Bestellen</button>
    </form>
</div>