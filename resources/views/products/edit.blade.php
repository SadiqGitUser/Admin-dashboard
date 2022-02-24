@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>


    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="fa fa-times"></i>
                </button>
                <strong>Success !</strong> {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adı:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Ad">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sayı:</strong>
                    <textarea class="form-control" style="height:150px" name="count" placeholder="Sayı">{{ $product->count }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Qiyməti:</strong>
                    <textarea class="form-control" style="height:150px" name="sale_price" placeholder="Qiyməti">{{ $product->sale_price }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Maya Dəyəri:</strong>
                    <textarea class="form-control" style="height:150px" name="maya_deyeri" placeholder="Maya Dəyəri">{{ $product->maya_deyeri }}</textarea>
                </div>
                <div class="form-group">
                    <strong>Əlavə olunduğu tarix:</strong>
                    <input type="date" name="date" class="form-control" placeholder="" {{ $product->date }}>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Yenilə</button>
                    </div>
                </div>

            </div>

        </div>

    </form>
@endsection
