@extends('layouts.app')

@section('title', 'Productos - STORE')

@section('content')
<div class="container">
    <div class="page-header">
        <h2 class="page-title">Productos</h2>
        <p class="page-subtitle">Descubre nuestra colección minimalista</p>
    </div>
    
    <div class="products-grid">
        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'camiseta-basica', 'categori' => 'ropa']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Camiseta Básica</h3>
                    <p class="product-category">Ropa</p>
                    <p class="product-price">$29.99</p>
                </div>
            </a>
        </div>

        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'pantalon-clasico', 'categori' => 'ropa']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Pantalón Clásico</h3>
                    <p class="product-category">Ropa</p>
                    <p class="product-price">$79.99</p>
                </div>
            </a>
        </div>

        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'zapatillas-minimalistas', 'categori' => 'calzado']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Zapatillas Minimalistas</h3>
                    <p class="product-category">Calzado</p>
                    <p class="product-price">$129.99</p>
                </div>
            </a>
        </div>

        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'chaqueta-ligera', 'categori' => 'ropa']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Chaqueta Ligera</h3>
                    <p class="product-category">Ropa</p>
                    <p class="product-price">$99.99</p>
                </div>
            </a>
        </div>

        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'reloj-simple', 'categori' => 'accesorios']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Reloj Simple</h3>
                    <p class="product-category">Accesorios</p>
                    <p class="product-price">$199.99</p>
                </div>
            </a>
        </div>

        <div class="product-card">
            <a href="{{ route('products.show', ['name' => 'bolso-esencial', 'categori' => 'accesorios']) }}" class="product-link">
                <div class="product-image">
                    <div class="product-placeholder"></div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Bolso Esencial</h3>
                    <p class="product-category">Accesorios</p>
                    <p class="product-price">$69.99</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection