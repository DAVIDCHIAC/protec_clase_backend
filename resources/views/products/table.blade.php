
@extends('admin.layouts.app')

@section('content')
<div class="apple-container" style="margin-top: 40px;">
    <div class="card" style="background: #fff; border-radius: 18px; border: 1px solid rgba(0,0,0,0.06); box-shadow: 0 10px 30px rgba(2,6,23,0.06);">
        <div style="padding: 24px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                <div>
                    <h2 style="margin: 0; font-size: 1.5rem;">Lista de Productos</h2>
                    <p style="margin: 6px 0 0; color: #6e6e73;">Total: {{ count($products) }} productos</p>
                </div>
                <a href="{{ route('admin.product.create') }}" class="btn-apple" style="background: #0071e3;">+ Agregar Producto</a>
            </div>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #f5f5f7;">
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">ID</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Nombre</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Descripción</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Precio</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Stock</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Fecha Creación</th>
                            <th style="text-align: left; padding: 12px; color: #6e6e73; font-weight: 600; font-size: 0.9rem;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr style="border-bottom: 1px solid #f5f5f7; transition: background-color 0.2s ease;">
                            <td style="padding: 12px; color: #1d1d1f; font-size: 0.9rem;">{{ $product->id }}</td>
                            <td style="padding: 12px; color: #1d1d1f; font-weight: 600;">{{ $product->name }}</td>
                            <td style="padding: 12px; color: #6e6e73; font-size: 0.9rem; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {{ Str::limit($product->description, 50) }}
                            </td>
                            <td style="padding: 12px; color: #1d1d1f; font-weight: 600;">${{ number_format($product->price, 2) }}</td>
                            <td style="padding: 12px;">
                                <span style="background: {{ $product->stock > 0 ? '#d1f2eb' : '#fdd0d0' }}; color: {{ $product->stock > 0 ? '#0d6d47' : '#b91919' }}; padding: 4px 8px; border-radius: 6px; font-size: 0.85rem; font-weight: 600;">
                                    {{ $product->stock }} unid.
                                </span>
                            </td>
                            <td style="padding: 12px; color: #6e6e73; font-size: 0.9rem;">
                                {{ $product->created_at->format('d/m/Y') }}
                            </td>
                            <td style="padding: 12px;">
                                <div style="display: flex; gap: 8px;">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn-apple" style="background: #0071e3; padding: 6px 10px; font-size: 0.85rem;">Ver</a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn-apple" style="background: #5ac8fa; padding: 6px 10px; font-size: 0.85rem;">Editar</a>
                                    <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Eliminar este producto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-apple" style="background: #ff6b6b; padding: 6px 10px; font-size: 0.85rem; border: none;">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" style="padding: 24px; text-align: center; color: #a1a1a6;">
                                No hay productos registrados. <a href="{{ route('admin.product.create') }}" style="color: #0071e3; text-decoration: none;">Crear uno ahora</a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    table tbody tr:hover {
        background-color: #f5f5f7 !important;
    }
</style>
@endsection