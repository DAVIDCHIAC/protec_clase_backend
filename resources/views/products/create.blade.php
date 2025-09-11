@extends('layouts.app')

@section('title', 'Finalizar Compra - STORE')

@section('content')
<div class="container-small">
    <div class="page-header">
        <h2 class="page-title">Finalizar Compra</h2>
        <p class="page-subtitle">Complete sus datos para procesar el pedido</p>
    </div>

    <div class="order-summary">
        <h3 class="summary-title">Resumen del pedido</h3>
        <div class="summary-items">
            <div class="summary-item">
                <span class="item-description">Camiseta Básica x1</span>
                <span class="item-price">$29.99</span>
            </div>
            <div class="summary-item">
                <span class="item-description">Envío</span>
                <span class="item-price">$5.99</span>
            </div>
            <div class="summary-total">
                <span class="total-label">Total</span>
                <span class="total-price">$35.98</span>
            </div>
        </div>
    </div>

    <form class="checkout-form" action="#" method="POST">
        @csrf
        
        <div class="form-section">
            <h3 class="section-title">Información personal</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" name="nombre" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" name="telefono" class="form-input" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-input" required>
            </div>
        </div>

        <div class="form-section">
            <h3 class="section-title">Dirección de envío</h3>
            
            <div class="form-group">
                <label class="form-label">Dirección completa</label>
                <input type="text" name="direccion" class="form-input" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Ciudad</label>
                    <input type="text" name="ciudad" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Código postal</label>
                    <input type="text" name="codigo_postal" class="form-input" required>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3 class="section-title">Método de pago</h3>
            
            <div class="form-group">
                <label class="form-label">Seleccionar método</label>
                <select name="metodo_pago" class="form-select" required>
                    <option value="">Seleccionar método de pago</option>
                    <option value="tarjeta">Tarjeta de crédito/débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="transferencia">Transferencia bancaria</option>
                    <option value="contraentrega">Contra entrega</option>
                </select>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('products.index') }}" class="btn-secondary">
                Continuar comprando
            </a>
            <button type="submit" class="btn-primary">
                Confirmar pedido
            </button>
        </div>
    </form>
</div>
@endsection