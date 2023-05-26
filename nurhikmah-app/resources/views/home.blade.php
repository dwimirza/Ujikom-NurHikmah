<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing Page For to take the exam for prospective new students" />
    <meta name="author" content="Haritsdev0981" />
    <title>Daftar SMPIT</title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Icon from Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JS -->
    <script src=""></script>

    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid container-nav">
            <a class="navbar-brand text-uppercase me-4" href="#">Smpit Nur Hikmah</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav gap-4  text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('siswa.store')}}">PPDB</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tahapan">Tahapan Seleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end Navbar -->

    <!-- header -->

    <section class="header" id="header">
        <div class="header-content container-fluid">
            <div class="row rww">
                <div class="col-md-6 center-costume text-white">
                    <p class="desc-header">Berakhlak | Mandiri | Berprestasi</p>
                    <p class="visi">Mencetak generasi berakhlakul karimah, mandiri dan berprestasi akademik optimal</p>
                    <p style="margin-bottom: 2rem;" class="desc-header">Menjadikan Nur Hikmah sebagai sekolah
                        percontohan & lembaga dakwah berbasis pendidikan</p>
                    <a href="{{route('siswa.store')}}" class="btn-daftar">Mulai Sekarang</a>
                </div>
                <div class="col-md-6 hidden-costume">
                    <img src="img/img-content-h.png" alt="img-content" class="img-header">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="svg-header" viewBox="0 0 1440 320">
            <path fill="#058F42" fill-opacity="1"
                d="M0,192L80,165.3C160,139,320,85,480,69.3C640,53,800,75,960,122.7C1120,171,1280,245,1360,282.7L1440,320L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </section>
    <!-- end header -->

    <!-- seleksi -->
    <section class="section tahapan " id="tahapan">
        <div class="container-nav">
            <div class="title-content">
                <p class="title-judul">Tahapan Seleksi</p>
                <p class="desc-desk">berikut merupakan tahapan yang harus dilalui ketika
                    mendaftar di SMPIT Nur Hikmah</p>
            </div>
            <div class="content-petunjuk row">
                <div class="container-petunjuk col-md ">
                    <i class="bi bi-person-vcard bi-tt"></i>
                    <p class="tt-seleksi m-0">Daftar Ujian</p>
                    <p style="text-transform: capitalize;" class="desc-tahapan">calon siswa akan diminta untuk daftar dan
                        mengirimkan seluruh bukti pembayaran dan biodata </p>
                </div>
                <div class="container-petunjuk col-md ">
                    <i class="bi bi-person-vcard bi-tt"></i>
                    <p class="tt-seleksi m-0">Ujian Seleksi</p>
                    <p style="text-transform: capitalize;" class="desc-tahapan">Calon siswa diminta untuk mengerjakan soal terkait test kemampuan diri untuk memasuki smpit- nurhimah</p>
                </div>
                <div class="container-petunjuk col-md ">
                    <i class="bi bi-person-vcard bi-tt"></i>
                    <p class="tt-seleksi m-0">Pengumuman Penerimaan</p>
                    <p style="text-transform: capitalize;" class="desc-tahapan">Pengumuman hasil ujian yang akan diumumkan oleh pengurus PPDB lewat media tertentu dan waktu yang telah ditentukan</p>
                </div>
            </div>
        </div>
    </section>

    <!-- end seleksi -->

    <!-- testimoni -->
    <section class="section  testimoni">
        <div class="container-nav">
            <div class="row">
                <div class="col-lg-5 flex-row">
                    <P class="title-judul center-respon">Pesan dari Guru</P>
                    <p class="desc-desk fs-5 center-respon">Pesan dari para Guru untuk calon siswa SMPIT Nur Hikmah </p>
                </div>

                <div class="col-lg-7">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide px-4 pt-4">
                                <div class="swiper-text fs-5">
                                    <p>Bagi dunia, kamu mungkin hanya seorang guru, tetapi bagi siswamu, kamu adalah pahlawan</p>
                                    <i class="bi bi-quote bi-rotate"></i>
                                </div>
                                <div class="border"></div>
                                <div class="swiper-bio d-flex align-items-center mt-3">
                                    <img src="img/logo-nurhikmah.png" class="pp-guru" alt="">
                                    <div class="flex-row ms-4">
                                        <p class="m-0 fs-guru">Agusriwarman, SE. M.Pd.</p>
                                        <p class="m-0 desc-desk desc-jabatan">Kepala Sekolah Ketiga SMPIT, Sejak 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide px-4 pt-4">
                                <div class="swiper-text fs-5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit, voluptates voluptatum autem eius</p>
                                    <i class="bi bi-quote bi-rotate"></i>
                                </div>
                                <div class="border"></div>
                                <div class="swiper-bio d-flex align-items-center mt-3">
                                    <img src="img/logo-nurhikmah.png" class="pp-guru" alt="">
                                    <div class="flex-row ms-4">
                                        <p class="m-0 fs-guru">Agusriwarman, SE. M.Pd.</p>
                                        <p class="m-0 desc-desk desc-jabatan">Kepala Sekolah Ketiga SMPIT, Sejak 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide px-4 pt-4">
                                <div class="swiper-text fs-5">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non impedit, voluptates voluptatum autem eius</p>
                                    <i class="bi bi-quote bi-rotate"></i>
                                </div>
                                <div class="border"></div>
                                <div class="swiper-bio d-flex align-items-center mt-3">
                                    <img src="img/logo-nurhikmah.png" class="pp-guru" alt="">
                                    <div class="flex-row ms-4">
                                        <p class="m-0 fs-guru">Agusriwarman, SE. M.Pd.</p>
                                        <p class="m-0 desc-desk desc-jabatan">Kepala Sekolah Ketiga SMPIT, Sejak 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide px-4 pt-4">
                                <div class="swiper-text fs-5">
                                    <p>Bagi dunia, kamu mungkin hanya seorang guru, tetapi bagi siswamu, kamu adalah pahlawan</p>
                                    <i class="bi bi-quote bi-rotate"></i>
                                </div>
                                <div class="border"></div>
                                <div class="swiper-bio d-flex align-items-center mt-3">
                                    <img src="img/logo-nurhikmah.png" class="pp-guru" alt="">
                                    <div class="flex-row ms-4">
                                        <p class="m-0 fs-guru">Agusriwarman, SE. M.Pd.</p>
                                        <p class="m-0 desc-desk desc-jabatan">Kepala Sekolah Ketiga SMPIT, Sejak 2021</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="swiper-pagination bg-warning"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end testimoni -->

    <section class="section footer m-0 p-0" id="footer">
        <div class="container-nav bg-success">
            <div class="container py-4 margin-respon ">
                <div class="row mt-2 gap-1">
                    <div class="col-md mt-2 hidden-costume">
                        <img src="img/logo-nurhikmah.png" alt="img-content" class="img-footer">
                    </div>
                    <div class="col-md text-white">
                        <p class="fs-4 text-footer">Kontak Kami</p>
                        <table class="table table-borderless">
                            <tr>
                                <td>phone</td>
                                <td>:</td>
                                <td>(021) 84599575</td>
                            </tr>
                        </table>
                        <div class="sosmed d-flex justify-content-start">
                            <a href="#" class="icf-links"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="#" class="icf-links"><i class="bi bi-youtube fs-5"></i></a>
                            <a href="#" class="icf-links"><i class="bi bi-facebook fs-5"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3  text-white">
                        <div class="card-black text-uppercase">
                            <p class="fs-4 text-footer">Lokasi Kami</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8323.82448792056!2d106.92390107080396!3d-6.308351833826043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69929647524c2d%3A0x166eeed3af2d0a2c!2sSMPIT%20NUR%20HIKMAH!5e0!3m2!1sid!2sid!4v1679891610596!5m2!1sid!2sid" style="border:0; max-width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <script>
        // Swiper js code
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1.25,
            spaceBetween: 24,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

    </script>

</body>

</html>


<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L80,165.3C160,139,320,85,480,69.3C640,53,800,75,960,122.7C1120,171,1280,245,1360,282.7L1440,320L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg> -->
