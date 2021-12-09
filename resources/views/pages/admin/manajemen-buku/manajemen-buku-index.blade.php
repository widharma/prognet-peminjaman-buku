@extends('layouts.main-layout.main-layout')

@section('tittle','Data Desa')
@push('css')
    <style>
        .sampul{
            width: 210px;
            height: 290px;
            object-fit: cover;
        }
    </style>
@endpush


@section('content')
    <section class="content-header">
        <div class="container-fluid border-bottom">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data List Buku</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data List Buku</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-3">
            <div class="sticky-top mb-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Filter Pencarian Buku</h4>
                    </div>
                    <div class="card-body">
                        <!-- SidebarSearch Form -->
                        <div class="form-inline m-0 mt-3">
                            <div class="input-group" data-widget="">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append bg-white border">
                                <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>

        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12 col-sm-3" data-category="1" data-sort="white sample">
                    <a href="">
                        <div class="card p-2 shadow cursor" role="button">
                            <img src="{{asset('base-template/dist/img/sampul/percy.jpg')}}" style="height:220px; object-fit:cover;" alt="white sample"/>
                            <div class="text-center text-dark p-1 fs-4">
                                <label class="m-0">BK01</label>
                                <p class="text-center text-dark m-0 font-weight-bold">Percy Jakson</p>
                                <div class="row justify-content-center">
                                    Oleh :<p class="text-center text-dark m-0"> Tiga Serangkai</p>
                                </div>
                                <p class="text-center text-dark m-0">2021</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-3" data-category="1" data-sort="white sample">
                    <a href="">
                        <div class="card p-2 shadow cursor" role="button">
                            <img src="{{asset('base-template/dist/img/sampul/marvel.jpg')}}" style="height:220px; object-fit:cover;" alt="white sample"/>
                            <div class="text-center text-dark p-1 fs-4">
                                <label class="m-0">BK01</label>
                                <p class="text-center text-dark m-0 font-weight-bold">Percy Jakson</p>
                                <div class="row justify-content-center">
                                    By :<p class="text-center text-dark m-0"> Tiga Serangkai</p>
                                </div>
                                <p class="text-center text-dark m-0">2021</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-3" data-category="1" data-sort="white sample">
                    <a href="">
                        <div class="card p-2 shadow cursor" role="button">
                            <img src="{{asset('base-template/dist/img/sampul/titanic.png')}}" style="height:220px; object-fit:cover;" alt="white sample"/>
                            <div class="text-center text-dark p-1 fs-4">
                                <label class="m-0">BK01</label>
                                <p class="text-center text-dark m-0 font-weight-bold">Percy Jakson</p>
                                <div class="row justify-content-center">
                                    By :<p class="text-center text-dark m-0"> Tiga Serangkai</p>
                                </div>
                                <p class="text-center text-dark m-0">2021</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-sm-3" data-category="1" data-sort="white sample">
                    <a href="">
                        <div class="card p-2 shadow cursor" role="button">
                            <img src="{{asset('base-template/dist/img/sampul/percy.jpg')}}" style="height:220px; object-fit:cover;" alt="white sample"/>
                            <div class="text-center text-dark p-1 fs-4">
                                <label class="m-0">BK01</label>
                                <p class="text-center text-dark m-0 font-weight-bold">Percy Jakson</p>
                                <div class="row justify-content-center">
                                    By :<p class="text-center text-dark m-0"> Tiga Serangkai</p>
                                </div>
                                <p class="text-center text-dark m-0">2021</p>
                            </div>
                        </div>
                    </a>
                </div>


            </div>

        </div>
    </div>






@endsection

@push('js')

    <script type="text/javascript">
        $(document).ready(function(){
            $('#side-manajemen-buku').addClass('menu-open');
            $('#side-manajemen-buku-data').addClass('active');
        });
    </script>

@endpush