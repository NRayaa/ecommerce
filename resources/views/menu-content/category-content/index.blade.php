@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')



@section('content')


<main id="main" class="main">
    {{--  Start Page TITLE --}}
    <div class="pagetitle">
        <h1>Kategori Produk</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
            <div class="row">

                <!-- List Produk -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">List Kategori Produk</h5>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('category-content.create')}}">
                                <button type="button" class="btn btn-primary">Tambah</button>
                            </a>
                        </div>
                        <table class="table table-borderless">
                        <thead>
                            <tr>
                            <th scope="col">Preview</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col" class="d-flex justify-content-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contentCategory['data']['resource']['data'] as $category)
                            <tr>
                                <th scope="row"><div class="image-frame"><img src="{{ $category['category_photo'] }}" alt=""></div></th>
                                <td><a href="#" class="text-primary fw-bold">{{ $category['category_name'] }}</a></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('category-content.show', $category['id'])}}"><button type="button" class="btn btn-warning mx-1 mt-2"><i class="bi bi-pencil"></i></button></a>
                                    <form action="" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger mx-1 mt-2"><i class="bi bi-trash"></i></button>
                                    </form>
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
