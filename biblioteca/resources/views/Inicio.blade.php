@extends('layouts.nav')

@section('titulo', 'Página Principal')

@section('content')
    <h1>{{ __('Biblioteca de la musaraña') }}</h1>
    <h3>{{ __('Noticia literaria') }}</h3>
    <p>
        {{ __('La autora ganadora del Premio Nobel de Literatura 2023, María Pérez, ha anunciado el lanzamiento de su nueva novela titulada El susurro de las hojas. Este libro promete ser una obra maestra que explorará los misterios de la naturaleza y la profundidad de las emociones humanas.') }}
    </p> 
    <img src="{{ asset('resources\img\libro.png') }}" alt="{{ __('Portada del libro') }}" class="img-thumbnail">
    <h3>{{ __('Libro recomendado') }}</h3>
    <p> 
        {{ __('El jardín de las mariposas de Lucía González es una novela que te atrapará desde la primera página. La historia sigue a una joven que descubre un jardín mágico lleno de mariposas que le enseñarán lecciones inolvidables sobre la vida y el amor.') }}
    </p>
    <img src="https://via.placeholder.com/150" alt="{{ __('Portada del libro') }}" class="img-thumbnail">
    <h3>{{ __('Próximos eventos') }}</h3>
    <p>
        {{ __('Presentación del libro El susurro de las hojas de María Pérez el 15 de mayo a las 6:00 p.m. en la librería en La musaraña dorada.') }}
    </p>
    <img src="https://via.placeholder.com/150" alt="{{ __('Portada del libro') }}" class="img-thumbnail">
    <p>
        {{ __('Taller de escritura creativa para jóvenes el 20 de mayo a las 4:00 p.m. en la biblioteca municipal.') }}
    </p>
    <img src="https://via.placeholder.com/150" alt="{{ __('Portada del libro') }}" class="img-thumbnail">
    <h3>{{ __('¡Visita nuestra biblioteca y descubre un mundo de historias!') }}</h3>
@endsection

