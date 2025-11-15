
@extends('admin.layouts.app')

@section('title', 'Agregar Producto - STORE')

@section('content')
<div class="apple-container">
    <div class="product-card" style="max-width:1100px; margin:48px auto; padding:36px; border-radius:18px;">
        <header style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
            <div>
                <h2 style="margin:0; font-size:1.6rem;">Agregar Nuevo Producto</h2>
                <p style="margin:6px 0 0; color:#6e6e73;">Completa los datos para añadir un producto al catálogo</p>
            </div>
            <a href="{{ route('products.index') }}" class="btn-apple" style="padding:8px 14px; font-size:0.9rem;">Volver al listado</a>
        </header>
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="display:flex; gap:30px; flex-wrap:wrap;">
            @csrf

            {{-- Imagen / Previsualización --}}
            <div style="flex:1 1 360px; min-width:280px;">
                <div style="background:#000; border-radius:12px; padding:18px; text-align:center; border:1px solid rgba(0,0,0,0.08);">
                    <label for="imagen" style="display:block; margin-bottom:12px; color:#a1a1a6;">Imagen principal</label>
                    <div id="previewBox">
                        <img id="imgPreview" src="{{ asset('images/product-placeholder.png') }}" alt="preview" style="max-width:100%; max-height:200px; object-fit:contain; border-radius:8px;">
                    </div>

                    <div style="margin-top:14px;">
                        <div class="file-input">
                            <label class="custom-file-btn" for="imagen">Seleccionar imagen</label>
                            <input id="imagen" type="file" name="imagen" accept="image/*" style="display:none;" class="@error('imagen') is-invalid @enderror">
                        </div>
                        @error('imagen') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        <div class="file-hint">JPG / PNG / WEBP • máx 2MB</div>
                    </div>
                </div>

                <div style="margin-top:18px; display:flex; gap:10px; align-items:center;">
                    <input type="checkbox" id="featured" name="featured" style="transform:scale(1.05); margin-right:8px;">
                    <label for="featured" style="color:#e2e2e2;">Marcar como destacado</label>
                </div>
            </div>

            {{-- Campos --}}
            <div style="flex:2 1 560px; min-width:300px;">
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:12px;">
                    <div class="input-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control-apple @error('name') is-invalid @enderror" placeholder=" " required>
                        <label class="input-label">Nombre</label>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group">
                        <input type="text" name="marca" value="{{ old('marca') }}" class="form-control-apple @error('marca') is-invalid @enderror" placeholder=" " required>
                        <label class="input-label">Marca</label>
                        @error('marca') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="input-group" style="margin-bottom:12px;">
                    <textarea name="descripcion" rows="3" class="form-control-apple @error('descripcion') is-invalid @enderror" placeholder=" " required>{{ old('descripcion') }}</textarea>
                    <label class="input-label">Descripción breve</label>
                    @error('descripcion') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px; margin-bottom:12px;">
                    <div class="input-group">
                        <input type="number" name="precio" step="0.01" value="{{ old('precio') }}" class="form-control-apple @error('precio') is-invalid @enderror" placeholder=" " required>
                        <label class="input-label">Precio</label>
                        @error('precio') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group">
                        <input type="number" name="stock" value="{{ old('stock') ?? 0 }}" class="form-control-apple @error('stock') is-invalid @enderror" placeholder=" " required>
                        <label class="input-label">Stock</label>
                        @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="input-group">
                        <select name="categoria" class="form-control-apple @error('categoria') is-invalid @enderror" required>
                            <option value="" selected disabled>Seleccionar</option>
                            <option value="mac">Mac</option>
                            <option value="ipad">iPad</option>
                            <option value="iphone">iPhone</option>
                            <option value="watch">Watch</option>
                            <option value="airpods">AirPods</option>
                            <option value="tv">TV y Casa</option>
                        </select>
                        <label class="input-label">Categoría</label>
                        @error('categoria') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="input-group" style="margin-bottom:12px;">
                    <textarea name="especificaciones" rows="4" class="form-control-apple @error('especificaciones') is-invalid @enderror" placeholder=" ">{{ old('especificaciones') }}</textarea>
                    <label class="input-label">Especificaciones (opcional)</label>
                    @error('especificaciones') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div style="display:flex; gap:12px; margin-top:18px; justify-content:flex-end;">
                    <a href="{{ route('products.index') }}" class="btn-apple" style="background:#6e6e73; color:#fff;">Cancelar</a>
                    <button type="submit" class="btn-apple" style="background:#0071e3;">Agregar Producto</button>
                </div>
            </div>
        </form>

        </div>
    </div>

{{-- JS: vista previa de imagen, validación sencilla y floating labels --}}
<script>
document.addEventListener('DOMContentLoaded', function(){
    // preview imagen
    const input = document.getElementById('imagen');
    const preview = document.getElementById('imgPreview');
    const customBtn = document.querySelector('.custom-file-btn');

    customBtn?.addEventListener('click', function(){ input?.click(); });

    input?.addEventListener('change', function(e){
        const file = e.target.files && e.target.files[0];
        if (!file) return;
        if (file.size > 2 * 1024 * 1024) {
            alert('La imagen supera 2MB. Elige otra imagen.');
            e.target.value = '';
            return;
        }
        const reader = new FileReader();
        reader.onload = function(ev){
            preview.src = ev.target.result;
        };
        reader.readAsDataURL(file);
    });

    // floating labels: marcar .filled si hay valor
    function refreshFilled(el){
        const group = el.closest('.input-group');
        if(!group) return;
        const val = el.value && String(el.value).trim() !== '';
        if(val) group.classList.add('filled'); else group.classList.remove('filled');
    }

    document.querySelectorAll('.input-group .form-control-apple').forEach(function(el){
        // inicial
        refreshFilled(el);
        // eventos
        el.addEventListener('input', ()=> refreshFilled(el));
        el.addEventListener('change', ()=> refreshFilled(el));
        el.addEventListener('focus', ()=> el.closest('.input-group')?.classList.add('filled'));
        el.addEventListener('blur', ()=> refreshFilled(el));
    });

    // select: refrescar al cambiar
    document.querySelectorAll('.input-group select').forEach(function(sel){
        refreshFilled(sel);
        sel.addEventListener('change', ()=> refreshFilled(sel));
    });
});
</script>
@endsection