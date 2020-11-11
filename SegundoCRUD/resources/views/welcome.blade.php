<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Refaccionaria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        
    </head>
    <body style="background-color: rgb(218,87,0)">

        <div class="container" style="text-align: center">
            <h1>Refaccionaria</h1>
            <button type="button" class="btn btn-dark"  style="float: right" onclick="location.href='/CreaPieza'">+ Añadir Pieza</button>
            <br> <br>
            <table class="table table-bordered table-dark" >
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Numero de Piezas</th>
                        <th>Costo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($piezas as $p)
                    <tr>
                    <td>{{$p->id}}</td>    
                    <td>{{$p->Nombre}}</td>
                    <td>{{$p->Descripcion}}</td>
                    <td>{{$p->NumeroPiezas}}</td>
                    <td>{{$p->Costo}}</td>
                    <td><a href="/editapieza/{{$p->id}}">Edita</a> </td>
                    <td><a href="/borrapieza/{{$p->id}}">Borrar</a></td>
                   
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

        </div>
               
    </body>
</html>
