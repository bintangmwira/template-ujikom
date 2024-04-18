@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">Generate Aktivitas Peminjaman user</h6>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Export Data</th>
                                </tr>
                            </thead>
                            <tbody>
                                <h6>users user</h6>
                                <tr>
                                    <td>iteration</td>
                                    <td>name</td>
                                    <td>email</td>
                                    <td style="display: flex;">
                                        
                                        
                                        {{-- apabila user-sudah meminjam buku --}}
                                            <a href="" class="btn btn-sm btn-info btn-sm" style="margin-right: 5px;">PDF</a>
                                            <a href="" class="btn btn-sm btn-danger btn-sm" style="margin-right: 5px;">Excel</a>
                                            </form>
                                        {{-- lain --}}
                                            <button class="btn btn-sm btn-info btn-sm disabled" style="margin-right: 5px;">PDF</button>
                                            <button class="btn btn-sm btn-danger btn-sm disabled">Excel</button>
                                        {{-- akhir --}}
                                    </td>
                                </tr>
                            <h6></h6>
                            
                            

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection