@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="callout callout-info">
                    <h5><i class="fas fa-info"></i> Note:</h5>
                    This page has been enhanced for printing. Click the print button at the bottom of the invoice to
                    test.
                </div>
            </div>

            lup datas data
                <div class="col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info">
                            <img src="" width="200px" class="img-fluid" alt="">
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Title : data title</span>
                            <span class="info-box-text" style="margin-top: -9px">Author : data author</span>
                            <a href="" style="margin-top: -10px">see details</a>
                            <div class="d-flex flex-row">
                                //apabila data available yy benar
                                    <form action="" method="POST"
                                        class="mr-2">
                                        @method('PATCH')
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-info mtw-2">Borrow</button>
                                    </form>
                                //lain
                                    <button class="btn btn-sm btn-dark mr-2" disabled>Borrow</button>
                                //akhir

                                <form action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="book_id" value="data-id">//INI
                                    <button type="submit" class="btn btn-sm btn-success">Add To Collection</button>
                                </form>
                            </div> 


                        </div>
                    </div>
                </div>
                akhir lup

        </div>
    </div>
</section>



@endsection