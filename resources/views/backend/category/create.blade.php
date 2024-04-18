@extends('layouts.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">Create Book Categories</h6>
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
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Category Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Book Category">
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