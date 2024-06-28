<h1>Dit is de game: {{ $game->name }}</h1>
<button><a href="{{ url('/games/' . $game->id . '/edit') }}">Edit</a></button>
<form action="{{ url('/games/' . $game->id) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
