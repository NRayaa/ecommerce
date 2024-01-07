@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
    <div id="main" class="main">
        {{--  --}}
        <div class="pagetitle">
            <h1>Input Promo</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Promo</a></li>
                    <li class="breadcrumb-item active">Form Tambah Promo</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Voucher</h5>
                <!-- Produk Form -->
                <form class="row g-3" method="post" action="{{route('promo.store')}}">
                    @csrf
                    <div class="text-end mb-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" placeholder="Title Promo" name="title">
                            <label for="floatingName">Title Promo</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" placeholder="discount" name="discount">
                            <label for="floatingEmail">Discount</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" placeholder="limit" name="limit">
                            <label for="floatingPassword">Limit</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Address" style="height: 100px;" name="caption"></textarea>
                            <label for="floatingTextarea">Description</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="date" class="form-control">
                                <label>Due Date</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <select class="form-select" name="product_id" id="floatingSelect" aria-label="State">
                                    @foreach ($product['data']['resource']['data'] as $listproduct )
                                        <option value="{{$listproduct['id']}}">{{$listproduct['content_title']}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingCity">Pilih Product</label>
                            </div>
                        </div>
                    </div>
                </form><!-- End Produk Form -->
            <div class="text-start m-4">
                <a href="{{ route('promo.index') }}"><button type="reset" class="btn btn-secondary">Back</button></a>
            </div>
        </div>
    </div>
@endsection
