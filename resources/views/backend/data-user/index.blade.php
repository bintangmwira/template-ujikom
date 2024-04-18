@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">User Account</h6>
                </div>
            </div>

            <div class="col-md-2 mb-3 mr-3">
                <a href="" class="btn btn-info">
                    <i class="fas fa-plus"></i> Add User
                </a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="" class="btn btn-success" style="margin-left: -70px;">
                    <i class="fas fa-filter"></i> Excel 
                </a>
            </div>
            <div class="col-md-2 mb-3">
                <a href="" class="btn btn-success" style="margin-left: -70px;">
                    <i class="fas fa-filter"></i> PDF
                </a>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Role</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <h6>lup user users</h6>
                                    <tr>
                                        <td>itteration</td>
                                        <td>role</td>
                                        <td>name</td>
                                        <td>username</td>
                                        <td>email</td>
                                        <td>address</td>
                                        <td style="display: flex;">
                                            <a href=""
                                                class="btn btn-sm btn-info btn-sm" style="margin-right: 5px;">Edit</a>
                                            <form action="" method="POST">
                                                @csrf
                                                <h6>metode hapus</h6>
                                                <button type="submit"
                                                    class="btn btn-sm btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <h6>akhir lup</h6>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

@endsection