
@extends('layouts.app')

@section('content')
<div class="apple-container">
    <div class="single-product-container">
        {{-- Ejemplo de un producto. Deberías usar la variable $product --}}
        <div class="product-image-gallery">
            {{-- Cambia por la imagen real del producto: asset('images/' . $product->image) --}}
            <img src="{{ asset('images/product-placeholder.png') }}" alt="Nombre del Producto">
        </div>
        <div class="product-details">
            {{-- Nombre del producto: $product->name --}}
            <h1>iPhone 17 Pro</h1>
            
            {{-- Precio del producto: $product->price --}}
            <div class="price">$1,199.00</div>
            
            {{-- Descripción del producto: $product->description --}}
            <p class="description">
                El chip A19 Bionic redefine la velocidad. La pantalla ProMotion XDR es más brillante y fluida. Y el sistema de cámaras Pro captura detalles increíbles con poca luz. Es todo lo que amas del iPhone, llevado al extremo.
            </p>
            
            <a href="#" class="btn-apple btn-lg">Comprar ahora</a>
        </div>
        {{-- Fin del ejemplo --}}
    </div>
</div>
@endsection