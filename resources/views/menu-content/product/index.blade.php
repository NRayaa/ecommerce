@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')



@section('content')


<main id="main" class="main">
    {{--  Start Page TITLE --}}
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">

                <!-- Produk Total -->
                <div class="col-xxl-6 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-boxes"></i>
                        </div>
                        <div class="ps-3">
                        <h6>0</h6>
                        <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div><!-- End Produk Card -->

                <!-- Order Total -->
                <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">

                        <div class="card-body">
                        <h5 class="card-title">Produk Baru</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-box"></i>
                            </div>
                            <div class="ps-3">
                            <h6>0</h6>
                            <span class="text-success small pt-1 fw-bold">0%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div><!-- End Order Total Card -->

                <!-- List Produk -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">


                    <div class="card-body pb-0">
                        <h5 class="card-title">List Produk </h5>
                        <a href="{{route("product.create")}}"><button type="button" class="btn btn-primary my-3"><i class="bi bi-plus-lg me-1"></i> Tambah</button></a>
                        <table class="table table-borderless">
                        <thead>
                            <tr>
                            <th scope="col">Preview</th>
                            <th scope="col">Product</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Price</th>
                            <th scope="col" class="d-flex justify-content-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product['data']['resource']['data'] as $content)
                            <tr>
                                <th scope="row">
                                    @if(isset($content['photos'][0]['id']))
                                        <!-- Menampilkan ID foto pertama -->
                                        <!-- atau menggunakan ID foto sebagai bagian dari URL -->
                                        <img src="{{$content['photos'][0]['photo']}}" alt="">
                                    @endif
                                </th>
                                <td>{{$content['content_title']}}</td>
                                <td>{{$content['category_content_id']}}</td>
                                <td>{{$content['price']}}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <button type="button" class="btn btn-info mx-1 mt-2"><i class="bi bi-info-circle"></i></button>
                                    <button type="button" class="btn btn-warning mx-1 mt-2"><i class="bi bi-pencil"></i></button>
                                    <button type="button" class="btn btn-danger mx-1 mt-2"><i class="bi bi-trash"></i></button>
                                </td>
                                </tr>
                            @endforeach

                        </tbody>
                        </table>

                    </div>

                    </div>
                    </div>
                </div><!-- End Produk -->
            </div>
            </div><!-- End Left side columns -->

        </div>
    </section>
</main>
@endsection
