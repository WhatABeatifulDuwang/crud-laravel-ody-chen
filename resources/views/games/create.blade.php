<h1>Maak een game aan</h1>
<a href="{{ url('/games') }}">Ga terug</a>
<form action="{{ url('/games') }}" method="post">
    @csrf
    <label for="name">Naam van het spel</label>
    @error('name') {{ $message }} @enderror
    <input type="text" name="name" id="" value="{{ old('name') }}">
    <input type="submit" value="Maak een nieuwe game aan">
</form>
