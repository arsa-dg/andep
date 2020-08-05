<!DOCTYPE html>
<html>
<div>
    <form action="/travelling/{{ $travelling->id }}" method="POST">
        @csrf
        @method("PUT")

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <label for="title">Judul:</label>
        <input type="text" name="title" value="{{ $travelling->title }}" placeholder="Enter judul" id="title">
        <label for="content">Isi:</label>
        <input type="text" name="content" value="{{ $travelling->content }}" placeholder="Enter isi" id="content">

        <button type="submit">Submit</button>
    </form>
</div>
</html>