<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<h4>Tags list</h4>
<table>
    @forelse($tags as $tag)

    @empty
    <tr>
        <td>
            <p>There are no tags.</p>
        </td>
    </tr>
    @endforelse
</table>
</body>
</html>
