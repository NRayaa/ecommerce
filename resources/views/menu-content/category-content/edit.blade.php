@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
<div id="main" class="main">
    {{--  --}}
    <div class="pagetitle">
        <h1>Edit Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Kategori Produk</a></li>
            <li class="breadcrumb-item active">Form Edit Kategori Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Kategori Produk</h5>

              <!-- Produk Form -->
              <form class="row g-3" action="{{ route('category-content.update', $category['data']['resource']['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="floatingName" placeholder="category_name" name="category_name" value="{{ old('category_name', $category['data']['resource']['category_name']) }}">
                        <label for="floatingName">Nama Kategori Produk</label>
                        @error('category_name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3 my-5">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Upload Foto</label>
                    <div class="col-sm-10">
                        <input class="form-control @error('category_photo') is-invalid @enderror" type="file" id="formFile" name="category_photo">
                        @error('category_photo')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('category-content.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form><!-- End Produk Form -->

              <form action="{{route('category-content.destroy',$category['data']['resource']['id'])}}" method="post">
                @csrf
                @method('delete')
                <button type="reset" class="btn btn-danger">Delete</button>
              </form>

            </div>
          </div>
        </div>
      </div>
</div>
@endsection
