header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>



<h3 class="page-title">Tags</h3>
<form action="{{ route('tags.store') }}" method="POST">
@csrf
<div class="panel panel-default">
    <div class="panel-heading">
        Create
    </div>
    
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                <input type="text" name="name" class="form-control" placeholder="name">
                <p class="help-block"></p>
                @if($errors->has('name'))
                    <p class="help-block">
                        {{ $errors->first('name') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                <input type="text" name="color" class="form-control" placeholder="color" id="colorpicker">
                <p class="help-block"></p>
                @if($errors->has('color'))
                    <p class="help-block">
                        {{ $errors->first('color') }}
                    </p>
                @endif
            </div>
        </div>
        
    </div>
</div>

<button type="submit">save</button>

</form>



<script>
    $('#colorpicker').colorpicker({});
</script>


</html>