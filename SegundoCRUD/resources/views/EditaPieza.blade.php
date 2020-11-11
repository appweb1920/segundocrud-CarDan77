<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CreaPieza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       </head>
    <body style="background-color: rgb(218,87,0)">
        <div class="container" style="text-align: center">
            <form action="/GuardaEdicion" method="POST">
                    @csrf
                    <br>
                    <h1>Edita Pieza</h1>
                    <br>
                    <input type="hidden" name="id" value="{{$pieza->id}}">
                    <br>
                    <input type="text" class="form-control" name="Nombre" value="{{$pieza->Nombre}}">
                    <br>
                    <input type="text" class="form-control" name="Descripcion" value="{{$pieza->Descripcion}}">
                    <br>
                    <input type="text" class="form-control" name="NumeroPiezas" value="{{$pieza->NumeroPiezas}}">
                    <br>
                    <input type="text" class="form-control" name="Costo" value="{{$pieza->Costo}}">
                    <br>
                    <button type="submit" class="btn btn-dark" style="float: right">Guardar</button>
            </form>

        </div>
    </body>
</html>