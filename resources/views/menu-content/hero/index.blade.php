@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')



@section('content')


<main id="main" class="main">
    {{--  Start Page TITLE --}}
    <div class="pagetitle">
        <h1>Banner</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Banner</li>
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
                      <h5 class="card-title">List | Banner</h5>
                      <!-- Tempatkan konten utama Anda di sini -->
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="{{route('hero.create')}}">
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </a>
                    </div>
                  </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto Banner</th>
                    <th scope="col">Judul Banner</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($hero['data']['resource']['data'] as $banner )
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>ini foto</td>
                            <td>{{$banner['judul']}}</td>
                            <td><a href="{{route('hero.show', $banner['id'])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        </tr>
                    @endforeach --}}
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
