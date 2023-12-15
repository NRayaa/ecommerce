@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
<div id="main" class="main">
    {{--  --}}
    <div class="pagetitle">
        <h1>Input Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Produk</a></li>
            <li class="breadcrumb-item active">Form Tambah Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Produk</h5>

              <!-- Produk Form -->
              <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="product_id" id="floatingSelect" aria-label="State">
                            @foreach ($productlist['data']['resource']['data'] as $namaproduct )
                                <option value="{{$namaproduct['id']}}">{{$namaproduct['product_name']}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Kategori</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="price" id="floatingEmail" placeholder="Harga">
                        <label for="floatingEmail">Harga</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="color" id="floatingPassword" placeholder="Warna">
                        <label for="floatingPassword">Warna</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Deskripsi" id="floatingTextarea" style="height: 100px;"></textarea>
                        <label for="floatingTextarea">Deskripsi</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="tags[]" id="floatingCity" placeholder="City">
                            <label for="floatingCity">Tag</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="floatingSelect" aria-label="State">
                            <option selected></option>
                            <option value="1">Smartphone</option>
                            <option value="2">Laptop</option>
                        </select>
                        <label for="floatingSelect">Kategori</label>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" name="photos[]" id="formFileMultiple" multiple>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Back</button>
                </div>
            </form><!-- End Produk Form -->

            </div>
          </div>
        </div>
      </div>
</div>
@endsection
