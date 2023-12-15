@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
<div id="main" class="main">
    {{--  --}}
    <div class="pagetitle">
        <h1>Input Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori Produk</a></li>
            <li class="breadcrumb-item active">Form Tambah Kategori Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kategori Produk</h5>

              <!-- Produk Form -->
              <form action="{{route('category-content.store')}}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="category_name" name="category_name">
                    <label for="floatingName">Nama Kategori Produk</label>
                  </div>
                </div>
                <div class="row mb-3 my-5">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Uplaod Foto</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="category_photo">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </form><!-- End Produk Form -->
              <a href="{{route('category-content.index')}}"><button type="reset" class="btn btn-secondary">Back</button></a>

            </div>
          </div>
        </div>
      </div>
</div>
@endsection
