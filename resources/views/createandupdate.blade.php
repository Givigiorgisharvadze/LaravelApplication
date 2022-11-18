<!DOCTYPE html>
<html>
<body>
    <form> title: <br>
    <input type="text" value="{{ $item->title ?? '' }}" name='title' >
    <br>
    <form> author: <br>
    <input type="text" value="{{ $item->author ?? '' }}" name='author'>
    <br>
    <form> body: <br>
    <input type="text" value="{{ $item->body ?? '' }}" name='body'>
    <br>
    <form> active: <br>
    <input type="number" value="{{ $item->active ?? '' }}" name='active'>
    <br><br>
    <input type='submit' value='submit'>
    </form>
</body>
</html>