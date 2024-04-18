@extends('layouts.master')
@section('content')


<section class="content-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">Create User Account</h6>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>

                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Role User</label>
                                    <div class="input-group">
                                        <select class="form-control" name="role">
                                            <option selected disabled>Select Role</option>
                                            <h6>lup roles rol</h6>
                                                <option value="rol rol">rol rol</option>
                                            <h6>akhir lup</h6>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Fullname</label>
                                    <input type="text" name="name" class="form-control" placeholder="Full name">
                                </div>

                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Address</label>
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="text" name="password" class="form-control"
                                        placeholder="Create Password">
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>



@endsection