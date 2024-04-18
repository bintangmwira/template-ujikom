@extends('layouts.master')
@section('content')
   
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">Lending History</h6>
                </div>
            </div>

            <div class="col-md-2">
                <form action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger btn-sm">Delete all history</button>
                </form>
            </div>

        </div>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table  text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Borrowed Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <h6>lup datas-reverse sebagai data</h6> 
                          
                                <tr>
                                    <td scope="row">itteration</td>
                                    <td>
                                        <img src="data books cover" width="100px"
                                            class="img-fluid" alt="">
                                    </td>
                                    <td>data books title</td>
                                    <td>data borrowed date</td>
                                    <td>data return date</td>
                                    <td>data status</td>
                                    <td>
                                        jika jika
                                    </td>

                                </tr>
                            //akhir
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
