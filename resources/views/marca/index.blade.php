<div>
    Contenido
    @yield('contenido')
</div>

<button class="btn">Crear</button>

<table>
    <thead>
        <tr>Id</tr>
        <tr>Marca</tr>
    </thead>
    <tbody>
        @foreach($marca as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->nombre}}</td>
        </tr>
        @endforeach
    </tbody>
</table>