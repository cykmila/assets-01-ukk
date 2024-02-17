@extends('main')
@section('content')
    <div class="" style="max-width: 1200px;">
        <div class="">
            <div class="card">
              <div class="row">

                <div class="col-md-4">
                    <img src="{{ asset('img/novel1.jpg') }}" class="img-fluid rounded-start m-2" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">MATAHARI</h5>
                        <p class="card-text">category : Action</p>
                        <p class="card-text">Book ID : 001</p>
                        <p class="card-text">Author : TereLiye</p>
                        <p class="card-text">Publication : 2 january 2021</p>
                        <p class="card-text">Publisher : Sinar Buku</p>
                        <p class="card-text">Rating : 5/5 <i class="bi bi-star-fill"></i></p>
                        <p class="card-text">Stock : 23</p>
                        <p class="card-text">Synopsis</p>
                        <p>Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily saat
                            pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut
                            merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi. Saat mereka
                            kembali ke klan Bumi, seperti biasa, disambut oleh tugas-tugas selayaknya anak sekolahan pada
                            umumnya.
                            Lantas, bagaimanakah nasib ketiga sekawan itu? Akankah ada kekuatan yang dapat mengeluarkan dan
                            membebaskan mereka dari ruangan tersebut? Ikut keseruan kisah petualangan Raib, Ali, dan Seli
                            dalam menghadapi berbagai pertarungan yang terjadi di klan Bintang dengan membaca novel ketiga
                            dari serial Bumi, yakni Matahari.
                        </p>

                        <a href="/borrowing/create">
                            <button type="button" class="btn btn text-light button-borrowing">Borrowing</button></a>
                        <a href="/bookmark">
                            <button type="button" class="btn text-white button-bookmark">Bookmark
                                <i class="bi bi-bookmark-fill"></i>
                            </button>
                        </a>
              

                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Review</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label" for="review">Review</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="review" class="form-control" name="review"
                                            placeholder="review">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="rating">Rating</label><br>
                                    <div class="rating d-flex justify-content-start">
                                      <input value="5" name="rating" id="star5" type="radio">
                                      <label title="text" for="star5"></label>
                                      <input value="4" name="rating" id="star4" type="radio">
                                      <label title="text" for="star4"></label>
                                      <input value="3" name="rating" id="star3" type="radio">
                                      <label title="text" for="star3"></label>
                                      <input value="2" name="rating" id="star2" type="radio">
                                      <label title="text" for="star2"></label>
                                      <input value="1" name="rating" id="star1" type="radio">
                                      <label title="text" for="star1"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn light text-white me-1 mb-1"
                            style="background-color: rgb(133, 65, 85)">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
