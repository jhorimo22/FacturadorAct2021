<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="application/pdf; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kardex por lotes</title>
       
    </head>
    <body>
        <div>
            <p align="center" class="title"><strong>Reporte Kardex - Lotes</strong></p>
        </div>
        <div style="margin-top:20px; margin-bottom:20px;">
            <table>
                <tr>
                    <td>
                        <p><strong>Empresa: </strong>{{$company->name}}</p>
                    </td>
                    <td>
                        <p><strong>Fecha: </strong>{{date('Y-m-d')}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p><strong>Ruc: </strong>{{$company->number}}</p>
                    </td>
                    <td>
                        <p><strong>Establecimiento: </strong>{{$establishment->address}} - {{$establishment->department->description}} - {{$establishment->district->description}}</p>
                    </td>
                </tr>
            </table>
        </div> 
        @if(!empty($records))
            <div class="">
                <div class=" ">
                    <table class="">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Und</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Lote</th>
                                <th class="text-center">Vcto</th>
                                <th class="text-center">Dias x vencer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $key => $row)
                                <tr> 
                                    <td class="celda">{{ $loop->iteration }}</td>
                                    <td class="celda">{{ $row['code_item'] }}</td>
                                    <td class="celda">{{ $row['name_item'] }}</td>
                                    <td class="celda">{{ $row['und_item'] }}</td>
                                    <td class="celda text-center">{{ $row['quantity'] }}</td>
                                    <td class="celda text-center">{{ $row['code'] }}</td>
                                    <td class="celda text-center">{{ $row['date_of_due'] }}</td>
                                    <td class="celda text-center">{{ $row['diff_days'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="callout callout-info">
                <p>No se encontraron registros.</p>
            </div>
        @endif
    </body>
</html>
