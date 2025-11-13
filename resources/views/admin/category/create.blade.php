@extends('admin.layouts.app')
@section('content')
    <h1>Add New Category</h1>

    <div class="car">
        <div class="car-body">
            <form action="{{route ('admin.category.store')}}" method="post">
                @csrf
                
                <div class="input-group input-group-outline mp-4">
                    <label for="name" class="form-label"></label>
                    <input type="text" name="name" class="form-control">
                </div>
                
        <input type="text" name="name">
        <input type="submit" class="btn bg-gradient-succes" value="Save">

    </form>

        </div>


    </div>
    

    
@endsection