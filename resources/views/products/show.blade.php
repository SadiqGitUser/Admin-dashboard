@extends('products.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Info Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Geri</a>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Adı:</strong>
                    {{ $product->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Miqdarı:</strong>
                    {{ $product->count }}
                </div>
                <div class="form-group">
                    <strong>Qiyməti:</strong>
                    {{ $product->sale_price }}
                </div>
                <div class="form-group">
                    <strong>Maya Dəyəri:</strong>
                    {{ $product->maya_deyeri }}
                </div>
                <div class="form-group">
                    <strong>Tarixi:</strong>
                    {{ $product->date }}
                </div>
                <div class="form-group">
                    <strong>Qazanc:</strong>
                    {{ $product->qazanc }}
                </div>

            </div>
        </div>
    </table>

@endsection

