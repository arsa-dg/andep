<!DOCTYPE html>
<html>
<div>
    <form action="/gaming" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
        <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
        <label for="title">Judul:</label>
        <input type="text" name="title" placeholder="Enter judul" id="title">
        <label for="content">Isi:</label>
        <input type="text" name="content" placeholder="Enter isi" id="content">

        <button type="submit">Create!</button>
    </form>
</div>
</html>