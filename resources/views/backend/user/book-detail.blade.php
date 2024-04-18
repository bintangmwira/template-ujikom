@extends('layouts.master')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5>book title by book author</h5>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="info-box" style="padding: 20px;">


                        <div class="row">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                        href="#product-desc" role="tab" aria-controls="product-desc"
                                        aria-selected="true">About</a>
                                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                        href="#product-rating" role="tab" aria-controls="product-rating"
                                        aria-selected="false">Ratings</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                    aria-labelledby="product-desc-tab">

                                    <div class="d-flex">
                                        <span class="bg-info mr-3">
                                            <img src="asset assets upload book cover" width="250px" class="img-fluid"
                                                alt="">
                                        </span>

                                        <div class="info-box-content">
                                            <table class="table text-nowrap">
                                                <tr>
                                                    <td>Category</td>
                                                    <td>:</td>
                                                    <td>book category name</td>
                                                </tr>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>:</td>
                                                    <td>book title</td>
                                                </tr>
                                                <tr>
                                                    <td>Tahun</td>
                                                    <td>:</td>
                                                    <td>book year</td>
                                                </tr>
                                                <tr>
                                                    <td>Author</td>
                                                    <td>:</td>
                                                    <td>book author</td>
                                                </tr>
                                                <tr>
                                                    <td>Publisher</td>
                                                    <td>:</td>
                                                    <td>book publisher</td>
                                                </tr>
                                                <tr>
                                                    <td>Year of Publication</td>
                                                    <td>:</td>
                                                    <td>book year</td>
                                                </tr>
                                            </table>

                                            <div style="width: fit-content;">
                                                <a href="" class="btn btn-block btn-info"
                                                    style="margin-top: -10px; margin-left:5px;">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="product-rating" role="tabpanel"
                                    aria-labelledby="product-rating-tab">
                                    <div class="row">

                                        <button type="button" class="btn btn-sm btn-info float-right" data-toggle="modal"
                                            data-target="#myModal">
                                            Add your Rating
                                        </button>


                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="">

                                                            @csrf
                                                            <input type="hidden" name="book_id"
                                                                value="book-id">
                                                            <div class="form-group">
                                                                <label for="rating">Rating:</label><br>
                                                                //for
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Comment:</label>
                                                                <textarea class="form-control" id="comment" name="review" rows="3" required></textarea>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            lup ratings rating
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm"
                                                        src="user-pfp.jpg" alt="">
                                                    <span class="username">
                                                        <a href="#">User : rating-user-name</a>
                                                    </span>
                                                    <span class="description">Shared publicly -
                                                        //jika is Today
                                                    </span>
                                                </div>

                                                <p>
                                                    Rating: rating rating <br>
                                                    Review: rating review
                                                </p>
                                            </div>
                                            akhir lup

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
