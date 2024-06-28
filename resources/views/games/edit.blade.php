<form action="{{ url('/games/' . $game->id) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $game->name }}" name="name">
    <input type="submit" value="Submit">
</form>
