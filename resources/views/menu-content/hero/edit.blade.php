@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
<div id="main" class="main">
    {{--  --}}
    <div class="pagetitle">
        <h1>Edit Banner</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Banner</a></li>
            <li class="breadcrumb-item active">Form Edit Banner</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Banner</h5>

              <!-- Produk Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="judul" value="{{$hero['data']['resource']['judul']}}">
                    <label for="floatingName">Judul Banner</label>
                  </div>
                </div>
                <div class="row mb-3 my-5">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Foto</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="photo" value="#">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </form><!-- End Produk Form -->
              <a href="{{route('hero.index')}}"><button type="reset" class="btn btn-secondary">Back</button></a>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
