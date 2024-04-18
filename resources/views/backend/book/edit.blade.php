@extends('layouts.master')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <h6 style="margin-bottom: -3px">Edit Book Data</h6>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                       
                       patch
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Books Category</label>
                                    <div class="input-group">
                                        <select class="form-control" name="category_id">
                                            <option selected="selected">Select Category</option>
                                            category row
                                                <option value="row id">row name</option>
                                            akhir
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Title</label>
                                    <input type="text" name="title" class="form-control" value="data title">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Author</label>
                                    <input type="text" name="author" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Publisher</label>
                                    <input type="text" name="publisher" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputPassword1">Year of Publication</label>
                                    <input type="text" name="year" class="form-control" value="">
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Book Cover</label>
                                    <br>
                                    <input type="file" name="cover" id="fileUpload" accept="image/*">
                                </div>
                                <div class="form-group col-md-12">
                                    <img id="imagePreview" src="" alt="Book Cover" style="max-width: 100px; max-height: 100px;">
                                </div>
                            </div>
                            

                            //script untuk UI form gambar (input type file)
                            {{-- <script>
                                document.getElementById('fileUpload').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            document.getElementById('imagePreview').setAttribute('src', e.target.result);
                                        }
                                        reader.readAsDataURL(file);
                                    }
                                });
                            </script> --}}
                            

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