@extends('layouts.app')
@section('content')
<div class="card card-default">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $err)
            <li class="list-group-item">{{$err}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card-header">
        Create Category
    </div>

    <div class="card-body">
        <form action="{{isset($category)?route('categories.update',$category->id):route('categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{isset($category)?$category->name:''}}" class="form-control" />
            </div>
            <input type="submit" value="{{isset($category)?'Update Category':'Add Category'}}" class="btn btn-success" />
        </form>
    </div>
</div>

@endsection