<div><p>Título: {{$libro->titulo}}</p></div>
<div><p>ISBN:   {{$libro->isbn}}</p></div>
<div><p>Autor:  {{$libro->autor}}</p></div>
<div><img src="{{Storage::url("imagenes/caratulas/$libro->foto")}}" alt="Caratula del libro"></div>
