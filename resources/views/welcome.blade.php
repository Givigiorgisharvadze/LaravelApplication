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

</tr>
        @foreach($item as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->body}}</td>
                <td>{{$item->active}}</td>

            </tr>

            @endforeach

</table>
<a href="/crud">Full List</a>
</body>
</html>