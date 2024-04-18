@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>My Collection</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Collection</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <div class="container-fluid">
    <div class="row">
        <h6>datas data</h6>
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info">
                    <img src="data-book-cover" width="200px" class="img-fluid" alt="">
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Title : data book title</span>
                    <span class="info-box-text" style="margin-top: -9px">Author : data book author</span>
                    <a href="" style="margin-top: -10px">see details</a>
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus dari Koleksi</button>
                    </form>
                </div>
            </div>
        </div>
        <h6></h6>
    </div>
</div>


@endsection