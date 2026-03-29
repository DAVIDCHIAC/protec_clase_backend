
@extends('layouts.app')

@section('content')
<div class="apple-container">
    <h1 class="text-center display-4 fw-bold mb-5">Nuestros Productos</h1>

    <div class="product-grid">
        {{-- Ejemplo de un producto. Deberías usar un bucle @foreach($products as $product) --}}
        <div class="product-card">
            {{-- Cambia 'images/product-placeholder.png' por la ruta real de tu imagen --}}
            <img src="{{ asset('images/product-placeholder.png') }}" alt="Nombre del Producto">
            <h3>iPhone 17 Pro</h3>
            <p>El futuro ya está aquí. Más potente y eficiente que nunca.</p>
            {{-- Reemplaza '#' con la ruta al producto individual, ej: route('products.show', $product->id) --}}
            <a href="#" class="btn-apple">Ver más</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/product-placeholder.png') }}" alt="Nombre del Producto">
            <h3>MacBook Air</h3>
            <p>Potencia que vuela. El portátil perfecto para el día a día.</p>
            <a href="#" class="btn-apple">Ver más</a>
        </div>

        <div class="product-card">
            <img src="{{ asset('images/product-placeholder.png') }}" alt="Nombre del Producto">
            <h3>Apple Watch</h3>
            <p>El compañero definitivo para una vida saludable.</p>
            <a href="#" class="btn-apple">Ver más</a>
        </div>
        {{-- Fin del ejemplo --}}
    </div>
</div>
@endsection