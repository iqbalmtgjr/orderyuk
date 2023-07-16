@extends('layouts.user.apps')

@section('content')
    <div class="container g-5">
        <div class="row">
            <h2>Menu {{ $toko->toko->nama_toko }}</h2>
            <p>{{ $toko->toko->alamat }}</p>
        </div>
        <div class="row">
            <h3>Menu Makanan</h3>
            @foreach ($makanan as $item)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 12rem;width: 18rem; object-fit: cover; object-position: center;"
                            src="{{ asset('assets/img/menu/' . $item->foto . '') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>{{ $item->nama_produk }}</h5>
                            <p class="card-text">@rupiah($item->harga)</p>
                            <button class="btn btn-primary">Order</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h3>Menu Minuman</h3>
            @foreach ($minuman as $item)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 12rem;width: 18rem; object-fit: cover; object-position: center;"
                            src="{{ asset('assets/img/menu/' . $item->foto . '') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>{{ $item->nama_produk }}</h5>
                            <p class="card-text">@rupiah($item->harga)</p>
                            <button class="btn btn-primary">Order</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h3>Snack</h3>
            @foreach ($snack as $item)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 12rem;width: 18rem; object-fit: cover; object-position: center;"
                            src="{{ asset('assets/img/menu/' . $item->foto . '') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5>{{ $item->nama_produk }}</h5>
                            <p class="card-text">@rupiah($item->harga)</p>
                            <button class="btn btn-primary">Order</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
