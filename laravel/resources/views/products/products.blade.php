@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    @can('create', Product::class)
                        <a href="{{ url('/create-product') }}" class="btn btn-xs btn-info pull-right">Izveidot Produktu</a>
                    @endcan
                    @if(is_null($products))
                        <div>Produktu nav</div>
                    @else
                        <br>
                        <br>
                        <table>
                            <tr>
                                <td>Nosaukums</td>
                                <td>Daudzums</td>
                                <td>Cena</td>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                    @can('delete', Product::class)
                                        <button>Dzēst Produktu</button>
                                    @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
