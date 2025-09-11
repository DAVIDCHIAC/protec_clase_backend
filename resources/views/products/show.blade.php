@extends('layouts.app')

@section('title', 'Producto - STORE')

@section('content')
<div class="container">
    <div class="back-link">
        <a href="{{ route('products.index') }}" class="back-button">
            <svg class="back-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="m12 19-7-7 7-7"/>
                <path d="M19 12H5"/>
            </svg>
            Volver a productos
        </a>
    </div>
    
    <div class="product-detail">
        <div class="product-detail-image">
            <div class="product-detail-placeholder"></div>
        </div>
        
        <div class="product-detail-info">
            <div class="product-detail-header">
                <p class="product-detail-category">ROPA</p>
                <h1 class="product-detail-name">Camiseta Básica</h1>
                <p class="product-detail-price">$29.99</p>
            </div>
            
            <div class="product-description">
                <h3 class="description-title">Descripción</h3>
                <p class="description-text">
                    Producto de alta calidad con diseño minimalista. Perfecto para el uso diario, 
                    combina funcionalidad y estética en un diseño atemporal.
                </p>
            </div>
            
            <form class="product-form" action="{{ route('products.create') }}" method="GET">
                <div class="form-group">
                    <label class="form-label">Talla</label>
                    <select name="talla" class="form-select">
                        <option value="">Seleccionar talla</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" value="1" min="1" class="form-input quantity-input">
                </div>
                
                <button type="submit" class="btn-primary">
                    Comprar ahora
                </button>
            </form>
        </div>
    </div>
</div>
@endsection