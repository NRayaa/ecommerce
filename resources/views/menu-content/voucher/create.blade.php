@extends('layouts.layout')

@section('title', 'Dashboard | Ecommerce')

@section('content')
<div id="main" class="main">
    {{--  --}}
    <div class="pagetitle">
        <h1>Input Voucher</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Voucher</a></li>
            <li class="breadcrumb-item active">Form Tambah Voucher</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Voucher</h5>
              <!-- Produk Form -->
              <form class="row g-3">
                <div class="text-end mb-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Nama Voucher</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Potongan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Limit</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">{coba produk}</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City">
                      <label for="floatingCity">Kode</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="date" class="form-control">
                        <label for="floatingCity">Due Date</label>
                      </div>
                    </div>
                  </div>
                <section class="section dashboard">
                    <div class="row">

                        <!-- Left side columns -->
                        <div class="col-lg-12">
                        <div class="row">

                            <!-- List Produk -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto">

                                <div class="card-body pb-0">
                                    <h5 class="card-title">List Produk <span>| untuk voucher</span> </h5>

                                    <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                        <th scope="col">Preview</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Price</th>
                                        <th scope="col" class="d-flex justify-content-center">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('assets/img/product-1.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Sepatu</a></td>
                                        <td>$64</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="checkbox" id="gridCheck1">
                                              </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('assets/img/product-2.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Sepatu</a></td>
                                        <td>$46</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="checkbox" id="gridCheck1">
                                              </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('assets/img/product-3.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Sepatu</a></td>
                                        <td>$59</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="checkbox" id="gridCheck1">
                                              </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('assets/img/product-4.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Sepatu</a></td>
                                        <td>$32</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="checkbox" id="gridCheck1">
                                              </div>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('assets/img/product-5.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                                        <td><a href="#" class="text-primary fw-bold">Sepatu</a></td>
                                        <td>$79</td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input mt-4" type="checkbox" id="gridCheck1">
                                              </div>
                                        </td>
                                        </tr>
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

              </form><!-- End Produk Form -->
              <div class="text-start m-4">
                <a href="{{route('voucher.index')}}"><button type="reset" class="btn btn-secondary">Back</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
