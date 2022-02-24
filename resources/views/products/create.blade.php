@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb" >
            <div class="pull-left">
                <h3>Məhsul əlavə etmə </h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"><i class="fa-solid fa-circle-chevron-left"></i> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Xəta!</strong> Boş xanaları doldurrmağınız xaiş olunur.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group"><br>
                    <strong>Adı:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Məhsulun adını yazın">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group"><br>
                    <strong>Miqdar:</strong>
                    <input type="text" name="count" class="form-control" placeholder="Miqdarını yazın">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Satış qiyməti:</strong>
                    <input type="text" name="sale_price" class="form-control" placeholder="Satış qiymətini yazın">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Maya Dəyəri:</strong>
                    <input type="text" name="maya_deyeri" class="form-control" placeholder="Maya Dəyərini yazın">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 ">
                <div class="form-group">
                    <strong>Əlavə olunduğu tarix:</strong>
                    <input type="date" name="date" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="submit" class="btn btn-primary">Göndər</button>
            </div>
        </div>

    </form>
@endsection
