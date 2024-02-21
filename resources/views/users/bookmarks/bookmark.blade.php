@extends('main')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-end mb-4">
            <a href="/book" class="btn icon icon-left btn" style="background-color: rgb(160, 100, 118)"><i
                    class="bi bi-bookmark-plus-fill"></i> Add</a>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset('img/novel1.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-3">MATAHARI</h4>
                        <p class="card-text" style="font-size: 65%">
                            Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily
                            saat pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut
                            merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi. Saat mereka
                            kembali ke klan Bumi, seperti biasa, disambut oleh tugas-tugas selayaknya anak sekolahan pada
                            umumnya.
                            Lantas, bagaimanakah nasib ketiga sekawan itu? Akankah ada kekuatan yang dapat mengeluarkan dan
                            membebaskan mereka dari ruangan tersebut? Ikut keseruan kisah petualangan Raib, Ali, dan Seli
                            dalam menghadapi berbagai pertarungan yang terjadi di klan Bintang dengan membaca novel ketiga
                            dari serial Bumi, yakni Matahari.

                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset("img/novel2.jpg") }}" alt="Card image cap">
                        <h4 class="card-title mt-3">BULAN</h4>
                        <p class="card-text" style="font-size: 65%">
                            Dalam novel Bulan petualangan antara Raib dan kedua kawannya masih berlanjut. Miss Selena akhirnya muncul di sekolah saat beberapa bulan setelah kejadian di klan Bulan. Miss Selena memberikan kabar menyenangkan bagi para murid yang mempunyai jiwa petualang, seperti Raib, Ali, dan Seli. 
                            Lantas, bagaimana akhir pertarungan mereka? Baca kisah petualangan dan pertempuran mereka di novel kedua dari serial Bumi, yakni Bulan.
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset('img/novel3.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-3">CEROS DAN BATOZAR</h4>
                        <p class="card-text" style="font-size: 65%">
                            Awalnya kami hanya mengikuti karyawisata biasa seperti murid-murid sekolah lain. Hingga Ali, dengan kegeniusan dan keisengannya, memutuskan menyelidiki sebuah ruangan kuno. Kami tiba di bagian dunia paralel lainnya, menemui petarung kuat, mendapat kekuatan baru serta teknik-teknik menakjubkan. Dunia paralel ternyata sangat luas, dengan begitu banyak orang hebat di dalamnya.
                            Kisah ini tentang petualangan tiga sahabat. Raib bisa menghilang. Seli bisa mengeluarkan petir. Dan Ali bisa melakukan apa saja.

                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset('img/novel4.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-3">LUMPUR</h4>
                        <p class="card-text" style="font-size: 65%">
                            Awal mula cerita novel Lumpu, saat Raib, Ali, dan Seli memutuskan membuat misi penyelamatan kepada guru Matematika mereka, yakni Miss Selena. Hal utama yang mereka cari ialah keberadaan Tamus. Mengapa? Sebab mereka bertiga tahu bahwa Tamus adalah orang kedua yang hendak diincar oleh Lumpu.
                            Lantas, apa yang selanjutnya terjadi? Akankah mereka menyerah begitu saja dalam menghadapi Lumpu? Bagaimana dengan nasib Miss Selena.
                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset('img/novel5.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-3">MOON</h4>
                        <p class="card-text" style="font-size: 65%">
                            Ini petualangan keempat kami. Setelah tiga kali berhasil menyelamatkan dunia paralel dari kehancuran besar, kami harus menyaksikan bahwa kamilah yang melepaskan “musuh besar”nya. Ini ternyata bukan akhir petualangan, ini justru awal dari semuanya.

                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
