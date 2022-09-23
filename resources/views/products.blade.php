@extends('layout')

@section('content')
    <div class="row">
        @foreach ($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ $product->image }}" alt="" class="h-75 d-inline-block">
                    <div class="caption">
                        <h4 style="height: 60px">{{ $product->name }}</h4>
                        <p><strong>Ár: </strong> {{ number_format($product->price) }} Ft</p>
                        <form action="{{ route('cart.store', $product->id) }}" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="number" style="width: 100%" name="quantity" value="{{ $product->quantity }}"
                                class="w-6 text-center bg-gray-300" placeholder="Darabszám" required min="1"
                                onkeydown="return event.keyCode !== 69" />
                            <button type="submit" class="btn btn-warning btn-block text-center">Kosárba rak</button>

                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
