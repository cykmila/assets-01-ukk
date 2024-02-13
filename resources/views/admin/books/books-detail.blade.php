@extends('main')
@section('content')
<div class="card mb-3" style="max-width: 1200px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('img/novel1.jpg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">MATAHARI</h5>
          <p class="card-text">category     :  Action</p>
          <p class="card-text">Book ID      :  Action</p>
          <p class="card-text">Author       :  Action</p>
          <p class="card-text">Publication  :  Action</p>
          <p class="card-text">Publisher    :  Action</p>
          <p class="card-text">Synopsis</p>
          <p>Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily saat pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi. Saat mereka kembali ke klan Bumi, seperti biasa, disambut oleh tugas-tugas selayaknya anak sekolahan pada umumnya.
            Lantas, bagaimanakah nasib ketiga sekawan itu? Akankah ada kekuatan yang dapat mengeluarkan dan membebaskan mereka dari ruangan tersebut? Ikut keseruan kisah petualangan Raib, Ali, dan Seli dalam menghadapi berbagai pertarungan yang terjadi di klan Bintang dengan membaca novel ketiga dari serial Bumi, yakni Matahari.
            </p>
            <button type="button" class="btn btn text-light button-borrowing">Borrowing</button>
            <button type="button" class="btn text-white button-bookmark">Bookmark
                <i class="bi bi-bookmark-fill"></i>
            </button>

        </div>
      </div>
    </div>
  </div>
  @endsection