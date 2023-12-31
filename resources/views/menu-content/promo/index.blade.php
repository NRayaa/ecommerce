@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')



@section('content')


<main id="main" class="main">
    {{--  Start Page TITLE --}}
    <div class="pagetitle">
        <h1>Diskon</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Diskon</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

</section>
<div class="row">
  <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-8">
                <h5 class="card-title">List | Promo</h5>
                <!-- Tempatkan konten utama Anda di sini -->
              </div>
              <div class="d-flex justify-content-end">
                  <a href="{{route('promo.create')}}">
                      <button type="button" class="btn btn-primary">Tambah</button>
                  </a>
              </div>
            </div>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Promo</th>
              <th scope="col">Discount</th>
              <th scope="col">Due Date</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($promos['data']['resource']['data'] as $promo )
                  <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$promo['title']}}</td>
                      <td>{{$promo['discount']}} %</td>
                      <td>{{$promo['duedate']}}</td>
                      <td><a href="{{route('promo.edit', $promo['id'])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                  </tr>
              @endforeach
          </tbody>
        </table>
        <!-- End Table with stripped rows -->

      </div>
    </div>

  </div>
</div>
</section>

</main>
@endsection
