<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table border="1px">

<tr>


    <td>id</td>
    <td>title</td>
    <td>author</td>
    <td>body</td>
    <td>active</td>
    <td>options</td>

</tr>
        @foreach($item as $item)
            <tr>
                <td><a href="{{ route('read', ['id' => $item->id]) }}">{{$item->id}}</a></td>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->body}}</td>
                <td>{{$item->active}}</td>
                <td><a href="{{ route('edit', ['item' => $item->id]) }}">Edit</a>
                <a href="{{ route('deleteitem', ['item' => $item->id]) }}">Delete</a></td>


            </tr>

            @endforeach

</table>

<a href="/">list</a>
<a href="{{ route('edit') }}">Add Somethin'</a>

</body>
</html>