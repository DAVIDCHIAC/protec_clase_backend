@extends('admin.layouts.app')

@section('content')
 <div class="card">
    

    <div card-body>
        <h3>Lista de Productos</h3> 


        <table class="table align-items-center mb-0">
            <thead>
                <th class="text-uppercase text-secondary texr-xxs font-weight-bolder opacity-7">ID</th>
                <th class="text-uppercase text-secondary texr-xxs font-weight-bolder opacity-7">Nombre</th>
                <th class="text-uppercase text-secondary texr-xxs font-weight-bolder opacity-7">Precio</th>
                <th class="text-uppercase text-secondary texr-xxs font-weight-bolder opacity-7">Stock</th>
                <th class="text-uppercase text-secondary texr-xxs font-weight-bolder opacity-7">Fecha Creación</th>

            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $product->id }}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $product->name }}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">${{ number_format($product->price, 2) }}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $product->stock }} unid.</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $product->created_at->format('d/m/Y') }}</p>
                    </td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
            
 </div>
@endsection