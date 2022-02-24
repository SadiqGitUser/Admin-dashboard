@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>List Səhifəsi</h2><br>
            </div>
            @role('Inzibatci')
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"><i class="fa-solid fa-plus"></i> Əlavə et</a><br>
            </div>
            @endrole
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-hover">
        <tr>
            <th style="text-align: center">Ad</th>
            <th style="text-align: center">Sayı</th>
            <th style="text-align: center">Qiyməti</th>
            <th style="text-align: center">Maya Dəyəri</th>
            <th style="text-align: center">Əlavə olunma tarixi</th>
            <th style="text-align: center">Qazanc</th>
            @role('Inzibatci')
            <th width="320px" style="text-align: center">Idarəetmə</th>
            @endrole
        </tr>
        @foreach ($products as $product)
            <tr>

                <td style="text-align: center">{{ $product->name }}</td>
                <td style="text-align: center">{{ $product->count }}</td>
                <td style="text-align: center">{{ $product->sale_price }}</td>
                <td style="text-align: center">{{ $product->maya_deyeri }}</td>
                <td style="text-align: center">{{ $product->date }}</td>
                <td style="text-align: center">{{ $product->qazanc .' azn'}}</td>
                <td>
                    @role('Inzibatci')
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        <a class="btn btn-info"  href="{{ route('products.show',$product->id) }}"><i class="fa-solid fa-circle-info"></i> Info</a>
                        <a class="btn btn-primary"  href="{{ route('products.edit',$product->id) }}"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit"  class="btn btn-danger  px-3"><i class="fa-solid fa-trash-can"></i> Delete</button>
                    </form>
                    @endrole
                </td>
            </tr>
        @endforeach

    </table>
    {{ $products->links('') }}


@endsection
