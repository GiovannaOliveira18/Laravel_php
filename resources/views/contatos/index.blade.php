@extends('layout.site')
<br><h3 style="color:crimson"> OS DADOS DOS CONTATOS: </h3>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Celular</th>
    </tr>

@section('titulo','$Contato')

@section('conteudo')
    @foreach ($contatos as $contato)
        <tr style="background-color:indianred" >
            <td style="color:darkred">{{ $contato['nome'] }}</td>
            <td style="color:beige">{{ $contato['cel'] }}</td>
        </tr>
    @endforeach
@endsection

</table>
