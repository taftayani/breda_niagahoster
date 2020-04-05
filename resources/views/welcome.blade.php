<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
    @include('layouts.navbar')
    {{-- Navbar Section --}}
        <div class="container-fluid" style="padding-top:20px;padding-bottom:20px;border-bottom:1px solid #DEDEDE">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <h1 class="header-first">PHP HOSTING</h1>
                        <h1 class="subheader-first">Cepat,Handal,penuh dengan modul PHP yang Anda butuhkan</h1>
                        <div class="row" style="margin-top:20px">
                            <ul class="list-first">
                                <li class="list-first-hosting">Solusi PHP untuk peforma query lebih cepat</li>
                                <li class="list-first-hosting">Konsumsi Memory Lebih Rendah</li>
                                <li class="list-first-hosting">Support PHP 5.5, PHP 5.6, PHP 7</li>
                                <li class="list-first-hosting">Fitur enkripsi IonCube dan Zend Guard Loaders</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <img src="{{asset('/images/svg/illustration banner PHP hosting-01.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    {{-- first Section --}}
        <div class="container-fluid" style="padding-bottom:50px;padding-top:50px">
            <div class="container">
                <div class="row col-12"style="text-align:center">
                    <div class="col-xl-4 col-12">
                        <img src="/images/svg/zen.svg" class="img-vendor" alt=""><br/>
                        <label for="" class="label-vendor">PHP Zend Guard Loader</label>
                    </div>
                    <div class="col-xl-4 col-12">
                        <img src="{{asset('/images/svg/composer.svg')}}" class="img-vendor-second" alt=""><br/>
                        <label for="" class="label-vendor-second">PHP composer</label>
                    </div>
                    <div class="col-xl-4 col-12">
                        <img src="{{asset('/images/svg/ion.svg')}}" class="img-vendor" alt=""><br/>
                        <label for="" class="label-vendor">PHP ionCube Holder</label>
                    </div>
                </div>
            </div>
        </div>
    {{-- Second Section  --}}
        <div class="container-fluid" style="padding-bottom:50px;padding-top:50px">
            <div class="container">
                <div class="row" style="text-align:center">
                    <div class="col-12">
                        <h1 class="header-packet">Paket Hosting Singapura yang Tepat</h1>
                        <h4 class="subheader-packet">Diskon 40% Domain dan SSL Gratis untuk Anda</h4>
                    </div>
                </div>
            </div>
        </div>
    {{-- Third Section  --}}
    @include('layouts.card')
    {{-- Card Section  --}}
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <h1 class="header-powerful">Powerful dengan Limit PHP yang Lebih Besar</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- header powerful  --}}
    <div class="container-fluid" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <ul class="list-first list-margin">
                        <li>max execution time 300s</li>
                        <li>max execution time 300s</li>
                        <li>php memory limit 1024 MB</li>
                    </ul>
                </div>

                <div class="col-xl-6">
                    <ul class="list-first">
                        <li>post max size 128 MB</li>
                        <li>Upload max filesize 128 MB</li>
                        <li>Max input vars 2500</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- powerful card  --}}
    <div class="container-fluid" style="margin-top:50px">
        <div class="container">
            <div class="divider-card"></div>
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <h1 class="header-powerful">Semua Paket Hosting Sudah Termasuk</h1>
                </div>
            </div>
        </div>
    </div>
 {{-- header powerful  --}}
    <div class="container-fluid" style="margin-top:40px">
        <div class="container">
            <div class="row" style="text-align:center">
                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/html.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">PHP Semua Versi</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Pilih mulai dari PHP 5.3 s/d 7. <br> Ubah Sesuka Anda!</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/sql.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">MySQL versi 5.6</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Nikmati MySQL Versi terbaru, tercepat, dan kaya akan fitur</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/cpanel.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">Panel Hosting cPanel</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Kelola website dengan panel canggih yang familiar di hati Anda </p>
                    </div>
                </div>
            </div>

            <div class="row" style="text-align:center;margin-top:100px">
                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/garanty.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">Garansi Uptime 99.9%</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Data center yang mendukung kelangsungan website Anda 24/7</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/db.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">Database InnoDB Unlimited</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div>
                        <img src="/images/svg/wildcard.svg" alt="">
                    </div>
                    <div>
                        <h4 class="header-list-packet">Wildcard Remote MySQL</h4>
                    </div>
                    <div>
                        <p class="paragraph-list-packet">Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- strenght section  --}}
        {{-- powerful card  --}}
        <div class="container-fluid" style="margin-top:50px">
            <div class="container">
                <div class="divider-card"></div>
                <div class="row">
                    <div class="col-12" style="text-align:center">
                        <h1 class="header-powerful">Mendukung Penuh Framework Laravel</h1>
                    </div>
                </div>
            </div>
        </div>
     {{-- header powerful  --}}
       @include('layouts.laravel')
{{-- laravel layout  --}}
<div class="container-fluid" style="padding-top:50px;margin-top:40px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6" style="padding-bottom:30px">
                <div>
                    <h1 class="header-powerful" style="width:70%">Linux Hosting yang Stabil dengan Teknologi LVE</h1>
                </div>
                <div>
                    <p class="paragraph-laravel-packet">SuperMicro <b>Intro Xeon 24-Cores </b> server dengan RAM <b>128 GB </b>
                        dan teknologi <b>LVE CloudLinu x</b> untuk stabilitas Anda. Dilengkapi dengan SSD untuk kecepatan MySQL dan caching.
                         Apache load balancer berbasis LiteSpeed Technologies, <b>CageFs </b> security, <b>Raid-10 </b> protection dan auto 
                         backup untuk keamanan website PHP anda 
                    </p>
                </div>
                <div>
                    <button class="btn-choose-packet-second" style="margin-top:10px">Pilih Hosting Anda</button>
                </div>
            </div>
            <div class="col-xl-6">
                <img style="width:100%" src="/images/svg/support.svg" alt="">
            </div>
        </div>
    </div>
</div>
{{-- last section  --}}
    <div class="container-fluid" style="background:#DEDEDE;padding-top:20px;padding-bottom:20px">
        <div class="container">
            <div class="row">
                <label for="" class="label-share">Bagikan jika Anda menyukai halaman ini</label>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background:#007bff;padding-top:50px;padding-bottom:50px">
        <div class="container">
            <div class="row">
                <div class="col-xl-8" style="border-right:1px solid white;">
                    <h1 for="" class="header-share">Perlu <b>Bantuan</b> ? Hubungi kami : <b>0274-5305505</b></h1>
                </div>
                <div class="col-xl-4">
                    <button class="btn-chat">
                        <i class="fa fa fa-comments"></i>
                        <label class="label-contact" for="">Live Chat</label>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
        @include('layouts.footer')
    </body>
</html>
