
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//cdn.rawgit.com/twbs/bootstrap/v4.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    
</body>
</html>




<table class="table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Color</th>
            <th> </th>
        </tr>
    </thead>
    
    <tbody>
        @if (count($tags) > 0)
            @foreach ($tags as $tag)
                <tr data-entry-id="{{ $tag->id }}">
                    <td field-key='name'>{{ $tag->name }}</td>
                    <td style="background-color:{{ $tag->color }}"></td>
                    <td>
                        <a href="{{ route('tags.edit',[$tag->id]) }}" class="btn btn-xs btn-info">Edit</a>
                      {{--  {!! Form::open(array(
                            'style' => 'display: inline-block;',
                            'method' => 'DELETE',
                            'onsubmit' => "return confirm('Are you sure?');",
                            'route' => ['admin.tags.destroy', $tag->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                        {!! Form::close() !!}--}}
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3">No entries in table</td>
            </tr>
        @endif
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
<script>
    $('.colorpicker').colorpicker();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>