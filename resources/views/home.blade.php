<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from jogjaprov.go.id/home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:35:46 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="content-type" content="application/json; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="{{URL::asset('static/images/client-logo.png')}}">
    <meta name="description" content="">
    <meta name="Keywords" content="jogja,budaya">
    <meta itemprop="image" content="{{URL::asset('static/images/client-logo.png')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portal Pemda DIY">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="{{URL::asset('static/images/client-logo.png')}}">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="650" />
    <meta property="og:image:height" content="366" />
    <!-- Open Graph meta information -->
    <meta property="og:title" content="Portal Pemda DIY">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="{{URL::asset('static/images/client-logo.png')}}">
    <meta property="og:description" content="">
    <link rel="manifest" href="manifest.json" />
    <script src="{{URL::asset('portal/cdn.onesignal.com/sdks/OneSignalSDK.js')}}" async='async'></script>
    <link href="{{URL::asset('portal/vjs.zencdn.net/7.2.3/video-js.css')}}" rel="stylesheet">

    <meta name="csrf-param" content="frontend-csrf">
    <meta name="csrf-token" content="aU55NzFvZ18.LClAS1cqB1ogTm99XDYGHHYKBggcMT4KERRUAwISbA==">
    <title>Portal Pemda DIY</title>
    <link rel="manifest" href="static/js/portal/manifest.json">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107210355-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-107210355-1');

    </script>
    <link href="{{URL::asset('static/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/lineicon/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/slick/slick.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/slick/slick-theme.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/fancybox/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/css/portal/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/css/portal/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/plugins/sweet-alert/sweet-alert.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{URL::asset('static/js/portal/jquery-migrate-1.2.1.min.js')}}" async="async"></script>
    <script src="{{URL::asset('static/js/portal/bootstrap.min.js')}}" async="async"></script>
    <script src="{{URL::asset('static/js/portal/script.js')}}" async="async"></script>
    <script src="{{URL::asset('static/plugins/slick/slick.min.js')}}" async="async"></script>
    <script src="{{URL::asset('static/plugins/sweet-alert/sweet-alert.min.js')}}" async="async"></script>
    <script src="{{URL::asset('static/plugins/fancybox/jquery.fancybox.min.js')}}" async="async"></script>
</head>

<body>
    <style>
        .fancybox-infobar {
            display: none;
        }

        .fancybox-button--zoom {
            display: none !important;
        }

        .fancybox-caption:after {
            border-bottom: 0px
        }

        .fancybox-navigation .disabled {
            display: none;
        }

    </style>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "8cc96c30-7a1e-4875-ab11-a29dce8cf78c",
            autoRegister: true,
            /* Set to true to automatically prompt visitors */
            httpPermissionRequest: {
                enable: false
            },
            notifyButton: {
                enable: false /* Set to false to hide */
            },
            promptOptions: {
                actionMessage: "Aktifkan notifikasi untuk menerima pemberitahuan.",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: "TERIMA",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: "TIDAK"
            },
            welcomeNotification: {
                disable: true
            }
        }]);

        OneSignal.push(function () {
            OneSignal.registerForPushNotifications({
                httpPermissionRequest: true,
                modalPrompt: false
            });
            OneSignal.on('subscriptionChange', function (isSubscribed) {
                OneSignal.getUserId(function (userId) {
                    console.log(userId);
                    user(userId);
                });
            });

            OneSignal.on('notificationDisplay', function (event) {
                var audio = new Audio('static/onesignal_default_sound.html');
                audio.play();
            });
        });

        function user(userId) {
            console.log("OneSignal User ID:", userId);
            var url = 'site/subscribe/index.html';
            $.ajax({
                url: url + userId,
                type: "post",
                async: true,
                dataType: "json",
                success: function (data) {

                },
                error: function (textStatus, errorThrown) {

                }
            });

        }

    </script>

    <form id="w0" action="https://jogjaprov.go.id/search/filter" method="post">
        <input type="hidden" name="frontend-csrf" value="aU55NzFvZ18.LClAS1cqB1ogTm99XDYGHHYKBggcMT4KERRUAwISbA==">
        <div id="searchform" class="collapse">
            <div class="container">
                <input type="text" class="form-control" name="keywords" value="" size="50"
                    placeholder="Cari Informasi Seputar DIY di sini!.." required=""> </div>
        </div>
    </form>
    <nav class="topnav">
        <div class="container">
            <div class="pull-left">
                <ul>
                    <li><a href="http://www.facebook.com/humaspemdadiy" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a href="http://www.twitter.com/humas_jogja" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UC6vcKVVzPxWw3eVxfa-gkJQ" target="_blank"><i
                                class="fa fa-youtube"></i></a></li>
                    <li><a href="http://www.instagram.com/humasjogja" target="_blank"><i
                                class="fa fa-instagram"></i></a></li>
                    <li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://plus.google.com/u/0/106286731015404899251" target="_blank"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li><a href="rss" target="_blank"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
            <div class="pull-right">
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
    <nav class="navbar navbar-default header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="static/images/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse navigation">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.html">Beranda</a></li>
                    <li><a href="#">Layanan <i class="caret"></i></a>
                        <ul>
                            <li><a href="#">BISNIS<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://ptsp.jogjaprov.go.id/" target="_blank">Perizinan </a></li>
                                    <li><a href="http://jogjainvest.jogjaprov.go.id/" target="_blank">Jogja Invest </a>
                                    </li>
                                    <li><a href="http://www.plutjogja.com/" target="_blank">Pendampingan UMKM </a></li>
                                </ul>
                            </li>
                            <li><a href="#">BUDAYA<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://disbud.jogjaprov.go.id/" target="_blank">Jogja Budaya </a></li>
                                    <li><a href="http://www.sonobudoyo.com/" target="_blank">Museum Sonobudoyo </a></li>
                                    <li><a href="http://tamanbudayayogyakarta.com/" target="_blank">Taman Budaya </a>
                                    </li>
                                    <li><a href="http://mam.jogjaprov.go.id/cctv" target="_blank">CCTV Tempat Wisata
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="#">E-GOV<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://mail.jogjaprov.go.id/" target="_blank">Email Pemda DIY </a></li>
                                    <li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Sengguh </a></li>
                                    <li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Jogjaplan </a></li>
                                    <li><a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/ZFVsaFJTOTVjSGhaZVdrMFlqZHVRMGxpTWtFMGVtMVBXbUZSTkU1cWFtRXpWSGd6VEZwb2I"
                                            target="_blank">e-LHKPN </a></li>
                                    <li><a href="http://ppid.jogjaprov.go.id/" target="_blank">PPID D.I. Yogyakarta </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">JOGJA APPS<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="https://play.google.com/store/apps/details?id=id.go.jogjaprov.jogjaistimewa&amp;hl=in"
                                            target="_blank">Jogja Istimewa </a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy&amp;hl=in"
                                            target="_blank">E-Lapor DIY </a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=mam.reader.ijogja&amp;hl=in"
                                            target="_blank">iJogja </a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=org.btkp_diy.aksara_jawa&amp;hl=in"
                                            target="_blank">Hanacaraka </a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=org.btkpdiy.lumbungbudayajogja&amp;hl=in"
                                            target="_blank">Lumbung Budaya Jogja </a></li>
                                    <li><a href="https://play.google.com/store/apps/details?id=sutadi.da.bbi&amp;hl=in"
                                            target="_blank">Belajar Bahasa Indonesia </a></li>
                                </ul>
                            </li>
                            <li><a href="#">JOGJAWARA<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="profil/4-visi-misi-tujuan-dan-sasaran.html" target="_blank">Profil </a>
                                    </li>
                                    <li><a href="http://birohukum.jogjaprov.go.id/" target="_blank">Produk Hukum </a>
                                    </li>
                                    <li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Perencanaan
                                            Pembangunan </a></li>
                                    <li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Transparansi Anggaran
                                        </a></li>
                                    <li><a href="http://bappeda.jogjaprov.go.id/dataku/" target="_blank">Jogja Data </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">KESEHATAN<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://103.255.15.70:8087/spgdt/" target="_blank">Fasilitas Kesehatan
                                        </a></li>
                                    <li><a href="http://www.duniaremaja.jogjaprov.go.id/" target="_blank">Konsultasi
                                            Remaja </a></li>
                                    <li><a href="http://dinkes.jogjaprov.go.id/dinkes/home" target="_blank">Jogja Sehat
                                        </a></li>
                                    <li><a href="http://grhasia.jogjaprov.go.id/" target="_blank">RS Jiwa Grhasia </a>
                                    </li>
                                    <li><a href="http://rsprespira.jogjaprov.go.id/" target="_blank">RS Paru Respira
                                        </a></li>
                                    <li><a href="http://jamkesos.jogjaprov.go.id/" target="_blank">Jaminan Kesehatan
                                            Sosial </a></li>
                                    <li><a href="http://labkes.jogjaprov.go.id/" target="_blank">Laboratorium Kesehatan
                                        </a></li>
                                    <li><a href="http://bapelkes.jogjaprov.go.id/" target="_blank">Pelatihan Kesehatan
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="#">PARIWISATA<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="agenda.html" target="_blank">Agenda </a></li>
                                    <li><a href="http://visitingjogja.jogjaprov.go.id/" target="_blank">Wisata Jogja
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="#">PENDIDIKAN<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://ijinpenelitian.jogjaprov.go.id/izin/public/pzn"
                                            target="_blank">Izin Penelitian </a></li>
                                    <li><a href="http://jogjabelajar.jogjaprov.go.id/" target="_blank">Jogja Belajar
                                        </a></li>
                                    <li><a href="http://dikpora.jogjaprov.go.id/" target="_blank">Data Pendidikan </a>
                                    </li>
                                    <li><a href="http://ppdb.jogjaprov.go.id/" target="_blank">PPDB Online </a></li>
                                </ul>
                            </li>
                            <li><a href="#">TANGGAP DARURAT<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://portal.jogjaprov.go.id/layanan/9-penanggulangan-bencana"
                                            target="_blank">Nomor Telepon Penting </a></li>
                                    <li><a href="http://bpbd.jogjaprov.go.id/home" target="_blank">Pusdalops </a></li>
                                </ul>
                            </li>
                            <li><a href="#">TRANSPORTASI<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://dishub.jogjaprov.go.id/trans-jogja" target="_blank">Trans Jogja
                                        </a></li>
                                    <li><a href="http://mam.jogjaprov.go.id/atcs" target="_blank">ATCS </a></li>
                                </ul>
                            </li>
                            <li><a href="#">WARGA<i class="fa fa-chevron-right pull-right"></i></a>
                                <ul>
                                    <li><a href="http://kependudukan.jogjaprov.go.id/" target="_blank">Info Kependudukan
                                        </a></li>
                                    <li><a href="http://infonjkbdiy.com/" target="_blank">Info Pajak Kendaraan Bermotor
                                        </a></li>
                                    <li><a href="http://infokerja.kemnaker.go.id/" target="_blank">Lowongan Kerja </a>
                                    </li>
                                    <li><a href="http://tpid-diy.org/" target="_blank">Harga Bahan Pokok </a></li>
                                    <li><a href="pengumuman.html" target="_blank">CPNS 2018 </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Artikel <i class="caret"></i></a>
                        <ul>
                            <li><a href="artikel/index/19-budaya-dan-pariwisata.html">Budaya dan Pariwisata</a></li>
                            <li><a href="artikel/index/15-ekonomi-dan-bisnis.html">Ekonomi dan Bisnis</a></li>
                            <li><a href="artikel/index/18-hukum.html">Hukum</a></li>
                            <li><a href="artikel/index/7-pekerjaan.html">Kepegawaian dan Ketenagakerjaan</a></li>
                            <li><a href="artikel/index/11-kesehatan.html">Kesehatan</a></li>
                            <li><a href="artikel/index/24-komunikasi-dan-informatika.html">Komunikasi dan
                                    Informatika</a></li>
                            <li><a href="artikel/index/6-pendidikan.html">Pendidikan</a></li>
                            <li><a href="artikel/index/22-perhubungan.html">Perhubungan</a></li>
                            <li><a href="artikel/index/12-perizinan.html">Perizinan</a></li>
                            <li><a href="artikel/index/21-pertanian-dan-perkebunan.html">Pertanian dan Perkebunan</a>
                            </li>
                            <li><a href="artikel/index/1-tanggap-darurat.html">Tanggap Darurat</a></li>
                        </ul>
                    </li>
                    <li><a href="berita.html">Berita</a></li>
                    <li><a href="#">Agenda <i class="caret"></i></a>
                        <ul>
                            <li><a href="agenda.html">Agenda</a></li>
                            <li><a href="pengumuman.html">Pengumuman</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Profil<i class="caret"></i></a>
                        <ul>
                            <li><a href="profil/6-instansi.html">Instansi</a></li>
                            <li><a href="profil/5-profil.html">Lambang Daerah</a></li>
                            <li><a href="profil/7-satriya-sebagai-budaya-pemerintahan-di-diy.html">SATRIYA</a></li>
                            <li><a href="profil/3-sejarah.html">Sejarah</a></li>
                            <li><a href="profil/4-visi-misi-tujuan-dan-sasaran.html">Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Media <i class="caret"></i></a>
                        <ul>
                            <li><a href="media.html">Galeri</a></li>
                            <li><a href="download.html">Download</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Link <i class="caret"></i></a>
                        <ul>
                            <li><a href="subdomain.html">Subdomain</a></li>
                            <li><a href="external_links.html">External Links</a></li>
                        </ul>
                    </li>
                    <li><a href="kontak.html">Kontak Kami</a></li>
                    <li><a href="#" class="hidden-xs" data-toggle="collapse" data-target="#searchform"><i
                                class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="pathway">
        <div class="container">
        </div>
    </div>




    <div class="section" id="slideshow">
        <a href="berita/detail/7526-penerapan-sakip-pemda-diy-terbaik-se-indonesia.html" class="thumbnail"
            target="_blank">
            <div style="height: 480px;background-size: contain;background-position: center;
				background-repeat: no-repeat;
				background-image: url('view_image/resize_no_frame/1349/480/6190/Banner%20Website%20jogjaprov.jpg');"></div>
        </a>
        <a href="index.html" class="thumbnail" target="_blank">
            <div style="height: 480px;background-size: contain;background-position: center;
				background-repeat: no-repeat;
				background-image: url('view_image/resize_no_frame/1349/480/4250/banner.jpg');"></div>
        </a>
        <a href="pengumuman/detail/50-seleksi-calon-anggota-komisi-informasi-daerah-diy.html" class="thumbnail"
            target="_blank">
            <div style="height: 480px;background-size: contain;background-position: center;
				background-repeat: no-repeat;
				background-image: url('view_image/resize_no_frame/1349/480/7118/Info%20Grafis(700x250.jpg)pixels.jpg');"></div>
        </a>
        <a href="https://play.google.com/store/apps/details?id=id.go.jogjaprov.jogjaistimewa" class="thumbnail"
            target="_blank">
            <div style="height: 480px;background-size: contain;background-position: center;
				background-repeat: no-repeat;
				background-image: url('view_image/resize_no_frame/1349/480/115/2.jpg');"></div>
        </a>
    </div>


    <div class="section section-lg" id="frontpage" style="background:#fff;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <div class="row">
                        <h4 class="heading">BERITA <span style="color:#c0392b;">TERBARU</span></h4>
                        <hr>
                        <div class="col-sm-7">
                            <div class="headline">
                                <br />
                                <a href="berita/detail/7848-pembangunan-gedung-pkk-resmi-dimulai.html"
                                    class="title">Pembangunan Gedung PKK Resmi Dimulai</a>
                                <div class="meta">
                                    <span><i class="fa fa-calendar"></i> 03 Juli 2019</span>
                                    &nbsp;&nbsp;<i class="fa fa-user"></i> Humas &nbsp;&nbsp;<i class="fa fa-tag"></i>
                                    <a href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a
                                        href="berita/tag/fasilitas.html">Fasilitas</a> </div>
                                <br />
                                <p style="text-align: justify;">Yogyakarta (02/07/2019)-&nbsp;Pemda DIY senantiasa
                                    berupaya&nbsp;memberikan pelayanan terbaik kepada masyarakat. Hal tersebut dapat
                                    diwujudkan dengan peningkatan kualitas pelayanan termasuk sarana ...</p>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="media media-news-list">
                                <div class="media-body">
                                    <a href="berita/detail/7847-sri-paduka-buka-gelar-pengawasan-daerah-diy-2019.html"
                                        class="title"> Sri Paduka Buka Gelar Pengawasan Daerah DIY 2019</a>
                                    <div class="meta">
                                        <span><i class="icons icon-calendar"></i> 03 Juli 2019</span>
                                        &nbsp;&nbsp;<i class="fa fa-tag"></i> <a
                                            href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a
                                            href="berita/tag/berita.html">Berita</a>, <a
                                            href="berita/tag/20-daerah-istimewa-yogyakarta.html">Daerah Istimewa
                                            Yogyakarta</a>, <a href="berita/tag/22-pemda-diy.html">Pemda DIY</a>, <a
                                            href="berita/tag/17-pemerintahan.html">Pemerintahan</a> </div>
                                </div>
                            </div>
                            <div class="media media-news-list">
                                <div class="media-left">
                                    <div class="thumbs">
                                        <div class="bg"
                                            style="background-image: url('view_image/resize_no_frame/300/300/7271/Syawalan_Gembiraloka_Wagub%20(03.jpg).jpg')">
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="berita/detail/7846-wakil-gubernur-diy-hadiri-syawalan-bersama-gl-zoo.html"
                                        class="title"> Wakil Gubernur DIY Hadiri Syawalan Gembira Loka Zoo</a>
                                    <div class="meta">
                                        <span><i class="icons icon-calendar"></i> 02 Juli 2019</span>
                                        &nbsp;&nbsp;<i class="fa fa-tag"></i> <a
                                            href="berita/tag/agenda-kegiatan.html">Agenda Kegiatan</a>, <a
                                            href="berita/tag/berita.html">Berita</a>, <a
                                            href="berita/tag/21-jogja.html">Jogja</a> </div>
                                </div>
                            </div>
                            <div class="media media-news-list">
                                <div class="media-left">
                                    <div class="thumbs">
                                        <div class="bg"
                                            style="background-image: url('view_image/resize_no_frame/300/300/7279/02072019-Audiensi_LIPI_Wilis2.jpg')">
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="berita/detail/7845-merapi-merbabu-menoreh-diusulkan-jadi-cagar-biosfer-dunia.html"
                                        class="title"> Merapi, Merbabu, Menoreh Diusulkan Jadi Cagar Biosfer Dunia</a>
                                    <div class="meta">
                                        <span><i class="icons icon-calendar"></i> 02 Juli 2019</span>
                                        &nbsp;&nbsp;<i class="fa fa-tag"></i> <a
                                            href="berita/tag/berita.html">Berita</a> </div>
                                </div>
                            </div>
                            <div class="media media-news-list">
                                <div class="media-left">
                                    <div class="thumbs">
                                        <div class="bg"
                                            style="background-image: url('view_image/resize_no_frame/800/800/7280/Antrax%20KP_1.jpg')">
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <a href="berita/detail/7844-jelang-idul-adha-kulon-progo-antisipasi-penyakit-antraks.html"
                                        class="title"> Jelang Idul Adha, Kulon Progo Antisipasi Penyakit Antraks  </a>
                                    <div class="meta">
                                        <span><i class="icons icon-calendar"></i> 02 Juli 2019</span>
                                        &nbsp;&nbsp;<i class="fa fa-tag"></i> <a
                                            href="berita/tag/berita.html">Berita</a>, <a
                                            href="berita/tag/20-daerah-istimewa-yogyakarta.html">Daerah Istimewa
                                            Yogyakarta</a>, <a href="berita/tag/21-jogja.html">Jogja</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br />
                    <hr />


                    <div class="row">
                        <div class="col-sm-3">
                            <a href="https://ppid.jogjaprov.go.id/" class="thumbnail" style="height: 100px;"
                                target="_blank">
                                <span class="bg bg-contain"
                                    style="background-image: url('view_image/view/7233/logoppid3.png');"></span>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy" class="thumbnail"
                                style="height: 100px;" target="_blank">
                                <span class="bg bg-contain"
                                    style="background-image: url('view_image/view/4275/E%20LAPOR%20DIY.png');"></span>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="https://play.google.com/store/apps/details?id=id.go.jogjaprov.jogjaistimewa"
                                class="thumbnail" style="height: 100px;" target="_blank">
                                <span class="bg bg-contain"
                                    style="background-image: url('view_image/view/4273/JIMA2.png');"></span>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="https://lpse.jogjaprov.go.id/eproc4" class="thumbnail" style="height: 100px;"
                                target="_blank">
                                <span class="bg bg-contain"
                                    style="background-image: url('view_image/view/4260/lpse-logo.png');"></span>
                            </a>
                        </div>

                        <div class="col-sm-12" style="margin-top:10px;">
                            <section id="happy-news" class="counter-all">
                                <section class="center sliders">
                                    <div class="col-sm-3">
                                        <a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/ZFVsaFJTOTVjSGhaZVdrMFlqZHVRMGxpTWtFMGVtMVBXbUZSTkU1cWFtRXpWSGd6VEZwb2IwRklZV1JqVUhocWFYRkxkRXczVDB0d04zTlhTMll2VkE9PQ=="
                                            class="thumbnail" style="height: 100px;" target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/7123/logo%20lhkpn.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://www.lapor.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/5101/lapor.jpg');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://mail.jogjaprov.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4456/mail.jpg');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://bantulkab.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4269/bantulkab.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="http://www.kulonprogokab.go.id/" class="thumbnail"
                                            style="height: 100px;" target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4267/kulonprogokab.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="http://gunungkidulkab.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4266/gunungkidulkab.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="http://www.slemankab.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4262/slemankab.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="https://www.jogjakota.go.id/" class="thumbnail" style="height: 100px;"
                                            target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/4261/jogjakota.png');"></span>
                                        </a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="http://omahjogja.jogjaprov.go.id/" class="thumbnail"
                                            style="height: 100px;" target="_blank">
                                            <span class="bg bg-contain"
                                                style="background-image: url('view_image/view/7226/omahjogja2.png');"></span>
                                        </a>
                                    </div>
                                </section>
                            </section>
                        </div>
                    </div> <br />

                    <h4 class="heading">INFORMASI <span style="color:#c0392b;">PUBLIK</span></h4>
                    <p>
                        Melalui fasilitas ini jogjaprov mendistribusikan berbagai informasi publik untuk dapat
                        didownload oleh pengunjung dan dimanfaatkan sebagaimana mestinya, melalui informasi ini kami
                        berupaya untuk menyajikan informasi secara transparan dan akuntabel.
                    </p>
                    <div class="row row-info-publik text-center">
                        <div class="col-sm-4">
                            <a class="icon"><i class="icons icon-event"></i></a>
                            <div class="title">Informasi Setiap Saat</div>
                            <p>
                                Informasi yang disediakan untuk bisa langsung diberikan kepada masyarakat
                                ketika ada permohonan terhadap informasi tersebut
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <a class="icon"><i class="icons icon-clock"></i></a>
                            <div class="title">Informasi Berkala</div>
                            <p>
                                Informasi yang wajib diperbaharui dan diumumkan kepada publik secara rutin/ berkala
                                sekurang-kurangnya setiap 6 bulan sekali
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <a class="icon"><i class="icons icon-list"></i></a>
                            <div class="title">Informasi Serta Merta</div>
                            <p>
                                Informasi yang berkaitan dengan hajat hidup orang banyak dan ketertiban umum dan wajib
                                diumumkan secara serta merta tanpa penundaan
                            </p>
                        </div>
                    </div> <br />
                    <hr />
                    <br />
                    <div class="row">
                        <div class="col-sm-6">
                            <h4><i class="fa fa-desktop"></i> STREAMING <span style="color:#e74c3c;">JOGJA ISTIMEWA
                                    TELEVISI</span></h4>
                            <video id='my-video' class="video-js vjs-default-skin"
                                poster="../tv.jogjaprov.go.id/images/logo_jogja_tv.png"
                                style="width:100%;height:300px;">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="col-sm-6">
                            <h4><i class="fa fa-calendar"></i> Jadwal Acara<span style="color:#e74c3c;"> Hari Ini</span>
                            </h4>
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <!-- <tr v-for="playlist in playlists | filterBy publishdate"> -->

                                    <tr>
                                        <td class="text-muted col-lg-3">10:00:00</td>
                                        <td>JENDELA JOGJA - Salam Aspal Nggronjal, Tilik, Panggon</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">12:00:00</td>
                                        <td>I JOGJA</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">12:10:00</td>
                                        <td>JOGJAPEDIA - Batik Motif Purbakala</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">12:40:00</td>
                                        <td>IMAJI - Komunitas dan Distribusi Film</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">13:10:00</td>
                                        <td>JOGJA BELAJAR - Trigonometri, Matematika SMP, Surat Lamaran Pekerjaan</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">15:10:00</td>
                                        <td>KELILING JOGJA - Simphony Kerontjong Moeda "Sewindu", Garebeg Besar Tahun
                                            Dal 1951, Abdi Dalem, Beksan Menak Umarmaya Umarmadi</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">16:00:00</td>
                                        <td>JENDELA JOGJA - Rinding Gumbeng, Ratu Sehari</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">18:00:00</td>
                                        <td>I JOGJA</td>
                                    </tr>

                                    <tr>
                                        <td class="text-muted col-lg-3">18:10:00</td>
                                        <td>SARASEHAN - Mitigasi Menghadapi Erupsi Gunung Merapi, Abu Vulkanik dan
                                            Pencegahannya, Film Akuntansi Akrual DPPKA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">

                    <div class="widget-tabs">
                        <ul class="nav nav-tabs agendas" role="tablist">
                            <li class="active"><a href="#pengumuman" data-toggle="tab">PENGUMUMAN</a></li>
                            <li><a href="#agenda" data-toggle="tab">AGENDA</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="pengumuman">
                                <ul class="list-pengumuman">
                                    <li>
                                        <a href="pengumuman/detail/53-surat-edaran-hut-ri-ke-74-tahun-2019.html">
                                            <span class="date">03 Juli 2019</span>
                                            Surat Edaran HUT ke-74 RI Tahun 2019 </a>
                                    </li>
                                    <li>
                                        <a
                                            href="pengumuman/detail/52-hasil-seleksi-pegawai-pemerintah-dengan-perjanjian-kerja-tahap-i-pemerintah-daerah-daerah-istimewa-y.html">
                                            <span class="date">02 Juli 2019</span>
                                            Hasil Seleksi Pegawai Pemerintah Dengan Perjanjian Kerja Tahap I Pemda DIY
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="pengumuman/detail/51-penatapan-lokasi-pembangunan-jalur-kereta-api-akses-bandara-nyia.html">
                                            <span class="date">18 Juni 2019</span>
                                            Penatapan Lokasi Pembangunan Jalur Kereta Api Akses Bandara NYIA </a>
                                    </li>
                                    <li>
                                        <a
                                            href="pengumuman/detail/50-seleksi-calon-anggota-komisi-informasi-daerah-diy.html">
                                            <span class="date">13 Juni 2019</span>
                                            Seleksi Calon Anggota Komisi Informasi Daerah DIY </a>
                                    </li>
                                    <li>
                                        <a href="pengumuman/detail/49-libur-pelayanan-perizinan-dan-non-perizinan.html">
                                            <span class="date">31 Mei 2019</span>
                                            Libur Pelayanan Perizinan dan Non Perizinan </a>
                                    </li>
                                    <li><a href="pengumuman.html" class="text-center">SELENGKAPNYA <i
                                                class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="agenda">
                                <ul class="list-pengumuman">
                                    <li>
                                        <a href="agenda/detail/845.html">
                                            <span class="date">07 Desember 2019 - 09:00 - 07 Desember 2019 -
                                                00:00</span>
                                            Sendratari/Dramatari Sekar Pembayun </a>
                                    </li>
                                    <li>
                                        <a href="agenda/detail/844.html">
                                            <span class="date">02 November 2019 - 09:00 - 02 November 2019 -
                                                00:00</span>
                                            Sendratari/Dramatari Sekar Pembayun </a>
                                    </li>
                                    <li>
                                        <a href="agenda/detail/843.html">
                                            <span class="date">28 September 2019 - 09:00 - 28 September 2019 -
                                                00:00</span>
                                            Sendratari/Dramatari Sekar Pembayun </a>
                                    </li>
                                    <li>
                                        <a href="agenda/detail/842.html">
                                            <span class="date">24 Agustus 2019 - 09:00 - 24 Agustus 2019 - 00:00</span>
                                            Sendratari/Dramatari Sekar Pembayun </a>
                                    </li>
                                    <li>
                                        <a href="agenda/detail/863.html">
                                            <span class="date">21 Juli 2019 - 00:00 - 25 Juli 2019 - 00:00</span>
                                            Kemah Budaya Kaum Muda </a>
                                    </li>
                                    <li><a href="agenda.html" class="text-center">SELENGKAPNYA <i
                                                class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br /><br />
                    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                    <div id="gpr-kominfo-widget-container"></div>
                    <br /><br />


                    <div class="widget-tabs">
                        <ul class="nav nav-tabs domain" role="tablist">
                            <li class="active"><a href="#sub-domain" data-toggle="tab">SUBDOMAIN</a></li>
                            <li><a href="#external-link" data-toggle="tab">EXTERNAL LINKS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="sub-domain">
                                <ul class="link-subdomain">
                                    <li><a href="http://birotapem.jogjaprov.go.id/" target="_blank">Biro Tata
                                            Pemerintahan, Setda DIY</a></li>
                                    <li><a href="http://okkpd.jogjaprov.go.id/" target="_blank">Sistem Informasi
                                            Manajemen OKKPD (BKPP)</a></li>
                                    <li><a href="http://komisi-informasi.jogjaprov.go.id/" target="_blank">Komisi
                                            Informasi DIY (Diskominfo)</a></li>
                                    <li><a href="http://ptsp.jogjaprov.go.id/" target="_blank">Kantor Pelayanan
                                            Perizinan Terpadu Satu Pintu</a></li>
                                    <li><a href="http://tv.jogjaprov.go.id/" target="_blank">Streaming Jogja Istimewa
                                            Televisi (Diskominfo)</a></li>
                                    <li><a href="subdomain/index.html" class="text-center"><b>SELENGKAPNYA <i
                                                    class="fa fa-long-arrow-right"></i></b></a></li>

                                </ul>
                            </div>
                            <div class="tab-pane" id="external-link">
                                <ul class="link-subdomain">
                                    <li><a href="http://jogjabelajar.org/" target="_blank">Jogja Belajar</a></li>
                                    <li><a href="https://lpse.jogjaprov.go.id/eproc4" target="_blank">LPSE Pemda DIY</a>
                                    </li>
                                    <li><a href="http://jogjaplaza.com/" target="_blank">JogjaPlaza Pasar Online UKM</a>
                                    </li>
                                    <li><a href="external_links/index.html" class="text-center"><b>SELENGKAPNYA <i
                                                    class="fa fa-long-arrow-right"></i></a></b></li>
                                </ul>
                            </div>
                        </div>
                    </div> <br />
                    <div class="widget-tabs">
                        <ul class="nav nav-tabs domain" role="tablist">
                            <li class="active"><a href="#elapor" data-toggle="tab">E-LAPOR DIY</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="elapor">
                                <ul class="lapor-list">
                                    <li>
                                        <div class="name">Diva Nian</div>
                                        <div class="time">Rabu, 03 Juli 2019 - 16:50:53</div>
                                        <div class="cat"><i class="fa fa-tag"></i> APILL, LPJU</div>
                                        <div class="text">
                                            Kabel tidak rapi. Mohon dirapikan. Karena menutupi jalan masuk pemukiman dan
                                            berbahaya bila malam hari. Terimakasih </div>
                                        <div class="meta">
                                            <a href="../lapor.jogjaprov.go.id/view_image/view/993/file.jpg"
                                                class="btn btn-default btn-xs" data-fancybox=""><i
                                                    class="fa fa-file-image-o"></i> Foto</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">Diva Nian</div>
                                        <div class="time">Rabu, 03 Juli 2019 - 16:50:44</div>
                                        <div class="cat"><i class="fa fa-tag"></i> APILL, LPJU</div>
                                        <div class="text">
                                            Kabel tidak rapi. Mohon dirapikan. Karena menutupi jalan masuk pemukiman dan
                                            berbahaya bila malam hari. Terimakasih </div>
                                        <div class="meta">
                                            <a href="../lapor.jogjaprov.go.id/view_image/view/992/file.jpg"
                                                class="btn btn-default btn-xs" data-fancybox=""><i
                                                    class="fa fa-file-image-o"></i> Foto</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">Diva Nian</div>
                                        <div class="time">Rabu, 03 Juli 2019 - 16:47:59</div>
                                        <div class="cat"><i class="fa fa-tag"></i> Jalan</div>
                                        <div class="text">
                                            Kabel tidak rapi, bahkan sampai menyentuh jalan. Mohon kabel listrik
                                            dirapikan. Karena membahayakan sekitar terutama di malam hari. Mengingat
                                            jalan tersebut merupakan jalan masuk ke pemukiman dan ... </div>
                                        <div class="meta">
                                            <a href="../lapor.jogjaprov.go.id/view_image/view/991/file.jpg"
                                                class="btn btn-default btn-xs" data-fancybox=""><i
                                                    class="fa fa-file-image-o"></i> Foto</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">Diva Nian</div>
                                        <div class="time">Rabu, 03 Juli 2019 - 16:47:44</div>
                                        <div class="cat"><i class="fa fa-tag"></i> Jalan</div>
                                        <div class="text">
                                            Kabel tidak rapi, bahkan sampai menyentuh jalan. Mohon kabel listrik
                                            dirapikan. Karena membahayakan sekitar terutama di malam hari. Mengingat
                                            jalan tersebut merupakan jalan masuk ke pemukiman dan ... </div>
                                        <div class="meta">
                                            <a href="../lapor.jogjaprov.go.id/view_image/view/990/file.jpg"
                                                class="btn btn-default btn-xs" data-fancybox=""><i
                                                    class="fa fa-file-image-o"></i> Foto</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="name">Diva Nian</div>
                                        <div class="time">Rabu, 03 Juli 2019 - 16:43:45</div>
                                        <div class="cat"><i class="fa fa-tag"></i> Jalan</div>
                                        <div class="text">
                                            Mohon kabel listrik dirapikan. Karena membahayakan sekitar. Terutama
                                            penduduk sekitar dan pengunjung pasar niten. </div>
                                    </li>

                                </ul>
                                <div style="padding:15px;">
                                    <a class="btn btn-block btn-danger"
                                        href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy"
                                        target="_blank"><i class="fa fa-android"></i> Download E-Lapor</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-lg" id="info-populer">
        <div class="bg bg-dark-opacity" style="background-image:url('static/images/hero/info-publik.jpg')"></div>
        <div class="container">

            <h2>Layanan Terpopuler</h2>
            <br /><br />
            <div class="row row-layanan-populer">
                <div class="col-sm-3">
                    <div class="item">
                        <h3>Pemerintahan</h3>
                        <ul>
                            <li><a href="http://ppid.jogjaprov.go.id/" target="_blank">PPID D.I. Yogyakarta</a></li>
                            <li><a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/ZFVsaFJTOTVjSGhaZVdrMFlqZHVRMGxpTWtFMGVtMVBXbUZSTkU1cWFtRXpWSGd6VEZwb2I"
                                    target="_blank">e-LHKPN</a></li>
                            <li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Jogjaplan</a></li>
                            <li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Sengguh</a></li>
                            <li><a href="http://mail.jogjaprov.go.id/" target="_blank">Email Pemda DIY</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <h3>Bisnis</h3>
                        <ul>
                            <li><a href="http://tpid-diy.org/" target="_blank">Harga Bahan Pokok</a></li>
                            <li><a href="http://www.plutjogja.com/" target="_blank">Pendampingan UMKM</a></li>
                            <li><a href="http://jogjainvest.jogjaprov.go.id/" target="_blank">Jogja Invest</a></li>
                            <li><a href="http://ptsp.jogjaprov.go.id/" target="_blank">Perizinan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <h3>Warga</h3>
                        <ul>
                            <li><a href="pengumuman.html" target="_blank">CPNS 2018</a></li>
                            <li><a href="http://infokerja.kemnaker.go.id/" target="_blank">Lowongan Kerja</a></li>
                            <li><a href="http://infonjkbdiy.com/" target="_blank">Info Pajak Kendaraan Bermotor</a></li>
                            <li><a href="http://kependudukan.jogjaprov.go.id/" target="_blank">Info Kependudukan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="item">
                        <h3>Pariwisata</h3>
                        <ul>
                            <li><a href="http://visitingjogja.jogjaprov.go.id/" target="_blank">Wisata Jogja</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="media">
        <div class="row">
            <div class="col-sm-4">
                <div class="media-item big">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/A0TrPZ68qFE" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="view_image/view/7106/DSC00208%20copy.jpg" class="media-item fancybox thumbnail" id="996"
                    data-fancybox="gallery"
                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>">
                    <div class="bg"
                        style="background-image:url('view_image/view/7106/DSC00208%20copy.jpg');background-size:contain;">
                    </div>
                    <i class="fa fa-camera icon fa-2x"
                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="view_image/view/7105/DSC00353%20copy.jpg" class="media-item fancybox thumbnail" id="995"
                    data-fancybox="gallery"
                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>">
                    <div class="bg"
                        style="background-image:url('view_image/view/7105/DSC00353%20copy.jpg');background-size:contain;">
                    </div>
                    <i class="fa fa-camera icon fa-2x"
                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="view_image/view/7104/DSC00631%20copy.jpg" class="media-item fancybox thumbnail" id="994"
                    data-fancybox="gallery"
                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>">
                    <div class="bg"
                        style="background-image:url('view_image/view/7104/DSC00631%20copy.jpg');background-size:contain;">
                    </div>
                    <i class="fa fa-camera icon fa-2x"
                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="view_image/view/7103/DSC00176%20copy.jpg" class="media-item fancybox thumbnail" id="993"
                    data-fancybox="gallery"
                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>">
                    <div class="bg"
                        style="background-image:url('view_image/view/7103/DSC00176%20copy.jpg');background-size:contain;">
                    </div>
                    <i class="fa fa-camera icon fa-2x"
                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                </a>
            </div>


        </div>
    </div>


    <div class="section" id="contact">
        <div class="row">

            <div class="col-sm-6">
                <!-- <a href="/kontak#map">
        <img src="http://maps.google.com/maps/api/staticmap?key=AIzaSyCEX1mHOvKwbQB6onAxpfcPn8WdqxW66JQ&center=-7.795187,110.365968&zoom=15&size=674x550&markers=color:red|-7.795187,110.365968&sensor=false" border=0 width="100%" height="550px"/>
    </a> -->
                <div id="map_canvas" style="height:674px;"></div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <h3>KONTAK KAMI</h3>
                    <br />
                    <div class="media">
                        <div class="media-left"><i class="icons icon-location-pin"></i></div>
                        <div class="media-body">
                            Komplek Kepatihan, Danurejan Yogyakarta </div>
                    </div>
                    <div class="media">
                        <div class="media-left"><i class="icons icon-phone"></i></div>
                        <div class="media-body">
                            Phone : +62 274 562811 </div>
                    </div>
                    <div class="media">
                        <div class="media-left"><i class="icons icon-envelope"></i></div>
                        <div class="media-body">
                            Email : santel@jogjaprov.go.id </div>
                    </div>
                    <br />

                    <div
                        style="background:rgba(0,0,0,0.2);padding:15px;margin:0 0 15px;color:#aaa;font-style: italic;font-family:serif;">
                        Silahkan Kirim Tanggapan Anda Mengenai Website Ini Atau Sistem Kami Saat Ini. Tanggapan Anda
                        Sangat Membantu Untuk Meningkatkan Pelayanan Kami Kepada Masyarakat. Dan Untuk Menangani Segala
                        Permasalahan Dan Keluhan-Keluhan Di Sekitar Provinsi Daerah Istimewa Yogyakarta, Silahkan
                        Download Aplikasi E-lapor.
                        <br>
                        <a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy" target="_blank"
                            class="btn btn-danger">Download E-Lapor</a>
                    </div>

                    <form id="myform" action="https://jogjaprov.go.id/kontak/create?back_controller=home" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="frontend-csrf"
                            value="aU55NzFvZ18.LClAS1cqB1ogTm99XDYGHHYKBggcMT4KERRUAwISbA==">
                        <div class="form">
                            <div class="form-group">
                                <div class="form-group field-feedback-nama required">

                                    <div><input type="text" id="feedback-nama" class="form-control"
                                            name="Feedback[nama]" maxlength="50" placeholder="Nama"></div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group field-feedback-email required">

                                    <div><input type="text" id="feedback-email" class="form-control"
                                            name="Feedback[email]" maxlength="100" placeholder="Email"></div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group field-feedback-pesan required">

                                    <div><textarea id="feedback-pesan" class="form-control" name="Feedback[pesan]"
                                            placeholder="Isi Pesan"></textarea></div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group field-feedback-verifycode required">

                                    <div>
                                        <div class="row">
                                            <div class="col-lg-6"><input type="text" id="feedback-verifycode"
                                                    class="form-control" name="Feedback[verifyCode]" style="width:100%;"
                                                    placeholder="Kode Verifikasi"></div>
                                            <div class="col-lg-3"><img id="feedback-verifycode-image"
                                                    src="site/captcha54c8.png?v=5d1d594a90d6c" alt=""></div>
                                            <div class="col-lg-3" style="padding:0px;"><a href="#" id="fox"
                                                    class="btn btn-primary"><span class="fa fa-refresh"></span>
                                                    Recaptcha</a></div>
                                        </div>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEX1mHOvKwbQB6onAxpfcPn8WdqxW66JQ&amp;sensor=false">
            </script>
            <script type="text/javascript">
                var directionsDisplay;
                var directionsService = new google.maps.DirectionsService();
                var gmarkers = [];
                var map = null;

                function initialize() {
                    // create the map
                    directionsDisplay = new google.maps.DirectionsRenderer();
                    var myOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng(-7.795187, 110.365968),
                        navigationControl: true,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        panControl: true,
                        panControlOptions: {
                            position: google.maps.ControlPosition.TOP_RIGHT
                        },
                        zoomControl: true,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE,
                            position: google.maps.ControlPosition.TOP_RIGHT
                        },
                        mapTypeControl: true,
                        mapTypeControlOptions: {
                            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                            position: google.maps.ControlPosition.RIGHT_BOTTOM
                        }
                    }
                    map = new google.maps.Map(document.getElementById("map_canvas"),
                        myOptions);
                    directionsDisplay.setMap(map);
                    google.maps.event.addListener(map, 'click', function () {
                        infowindow.close();
                    });

                    var info = '<h4>JOGJAPROV.GO.ID</h4>' +
                        '<p>Komplek Kepatihan, Danurejan Yogyakarta</p>' +
                        '<p>+62 274 562811</p>' +
                        '<p>santel@jogjaprov.go.id</p>';

                    var point = new google.maps.LatLng(-7.795187, 110.365968);

                    var marker = createMarker(point, "JOGJAPROV", info);
                }

                var infowindow = new google.maps.InfoWindow({
                    size: new google.maps.Size(150, 50)
                });

                function myclick(i) {
                    google.maps.event.trigger(gmarkers[i], "click");
                    var pos = parseInt($('#map').offset().top) - 100;
                    $('body,html').animate({
                        'scrollTop': pos
                    }, 200);
                }

                function createMarker(latlng, name, html) {
                    var contentString = html;
                    var marker = new google.maps.Marker({
                        position: latlng,
                        map: map,
                        zIndex: Math.round(latlng.lat() * -100000) << 5
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.setContent(contentString);
                        infowindow.open(map, marker);
                    });
                    // save the info we need to use later for the side_bar
                    gmarkers.push(marker);
                }

                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                    } else {
                        x.innerHTML = "Geolocation is not supported by this browser.";
                    }
                }

                function showPosition(position) {
                    var start = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    var end = new google.maps.LatLng(-7.795187, 110.365968);
                    var request = {
                        origin: start,
                        destination: end,
                        travelMode: google.maps.TravelMode.DRIVING
                    };
                    directionsService.route(request, function (result, status) {
                        if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(result);
                        }
                    });
                }
                $(function () {
                    initialize();
                });

            </script>


        </div>
    </div>


    <style type="text/css">
        ul.lapor-list {
            list-style: none;
            margin: 0;
            padding: 0;
            max-height: 500px;
            overflow: auto;
        }

        ul.lapor-list li {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        ul.lapor-list li:last-child {
            border: none;
        }

        ul.lapor-list .name {
            font-weight: bold;
        }

        ul.lapor-list .time {
            color: #aaa;
            font-size: 12px;
            margin: 0 0 10px;
        }

    </style>
    <!-- <link rel="stylesheet" href="/static/css/portal/default.css"> -->
    <!-- <script src="https://vjs.zencdn.net/7.3.0/video.js"></script> -->
    <script src="https://unpkg.com/video.js%407.2.4/dist/video.js"></script>
    <script src="http://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls%405.15.0/dist/videojs-contrib-hls.js"></script>
    <script src="https://unpkg.com/@videojs/http-streaming@1.10.4/dist/videojs-http-streaming.min.js"></script>
    <script src="static/js/portal/videojs-resolution-switcher.js"></script>
    <script type="text/javascript">
        $('.media-item').click(function () {
            var id_galeri = $(this).attr('id');

            var href = "/media/set_view/" + id_galeri;
            $.ajax({
                url: href,
                success: function (data) {}
            });

        });
        $('#slideshow').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: false,
            autoplay: true,
            autoplaySpeed: 8000,
            dots: true,
            arrows: false,
            pauseOnHover: true,
            prevArrow: '<button type="button" class="slick-arrow slick-prev"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="slick-arrow slick-next"><i class="fa fa-angle-right"></i></button>',
            responsive: [{
                breakpoint: 768,
                settings: {
                    dots: true,
                    arrows: false
                }
            }]
        });
        $(".center").slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4
        });

    </script>
    <script type="text/javascript">
        $("#fox").on('click', function (e) {
            //#testimonials-captcha-image is my captcha image id
            $("img[id$='-verifycode-image']").trigger('click');
            e.preventDefault();
        });

        videojs('my-video', {
            controls: true,
            width: 300,
            hls: {
                withCredentials: true
            },
            hlsjsConfig: {
                debug: true
            },
            plugins: {
                videoJsResolutionSwitcher: {
                    default: 'low', // Default resolution [{Number}, 'low', 'high'],
                    dynamicLabel: true
                }
            }
        }, function () {
            var player = this;
            window.player = player
            player.updateSrc([{
                    src: 'http://202.169.224.76:1935/tv/tvonline.stream_160p/playlist.m3u8',
                    type: 'application/x-mpegURL',
                    label: 'Phone',
                    res: 160,
                    withCredentials: true
                },
                {
                    src: 'http://202.169.224.76:1935/tv/tvonline.stream_360p/playlist.m3u8',
                    type: 'application/x-mpegURL',
                    label: 'SD',
                    res: 360,
                    withCredentials: true
                },
                {
                    src: 'http://202.169.224.76:1935/tv/tvonline.stream_720p/playlist.m3u8',
                    type: 'application/x-mpegURL',
                    label: 'HD',
                    res: 720,
                    withCredentials: true
                }
            ])
            player.on('resolutionchange', function () {
                console.info('Source changed to %s', player.src())
            })
        });

    </script>
    <div id="footer">
        <div class="container">
            Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.navigation .navbar-nav > li > a:contains("Beranda")').parent().addClass('active');
        });

    </script>
    <script type="text/javascript">
        $(function () {
            $('#footer_link').hide()
        });

    </script>
    <script src="assets/7c5cacc7/yii.validation.js"></script>
    <script src="assets/7c5cacc7/yii.captcha.js"></script>
    <script src="assets/7c5cacc7/yii.activeForm.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#feedback-verifycode-image').yiiCaptcha({
                "refreshUrl": "\/site\/captcha?refresh=1",
                "hashKey": "yiiCaptcha\/site\/captcha"
            });
            jQuery('#myform').yiiActiveForm([{
                "id": "feedback-nama",
                "name": "nama",
                "container": ".field-feedback-nama",
                "input": "#feedback-nama",
                "validateOnChange": false,
                "validateOnBlur": false,
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {
                        "message": "Nama tidak boleh kosong."
                    });
                    yii.validation.string(value, messages, {
                        "message": "Nama harus berupa string.",
                        "max": 50,
                        "tooLong": "Nama harus memiliki paling banyak 50 karakter.",
                        "skipOnEmpty": 1
                    });
                }
            }, {
                "id": "feedback-email",
                "name": "email",
                "container": ".field-feedback-email",
                "input": "#feedback-email",
                "validateOnChange": false,
                "validateOnBlur": false,
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {
                        "message": "Email tidak boleh kosong."
                    });
                    yii.validation.email(value, messages, {
                        "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,
                        "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,
                        "allowName": false,
                        "message": "Email bukan alamat email yang valid.",
                        "enableIDN": false,
                        "skipOnEmpty": 1
                    });
                    yii.validation.string(value, messages, {
                        "message": "Email harus berupa string.",
                        "max": 100,
                        "tooLong": "Email harus memiliki paling banyak 100 karakter.",
                        "skipOnEmpty": 1
                    });
                }
            }, {
                "id": "feedback-pesan",
                "name": "pesan",
                "container": ".field-feedback-pesan",
                "input": "#feedback-pesan",
                "validateOnChange": false,
                "validateOnBlur": false,
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {
                        "message": "Pesan tidak boleh kosong."
                    });
                    yii.validation.string(value, messages, {
                        "message": "Pesan harus berupa string.",
                        "skipOnEmpty": 1
                    });
                }
            }, {
                "id": "feedback-verifycode",
                "name": "verifyCode",
                "container": ".field-feedback-verifycode",
                "input": "#feedback-verifycode",
                "validateOnChange": false,
                "validateOnBlur": false,
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.required(value, messages, {
                        "message": "Kode Verifikasi tidak boleh kosong."
                    });
                    yii.validation.captcha(value, messages, {
                        "hash": 764,
                        "hashKey": "yiiCaptcha/site/captcha",
                        "caseSensitive": false,
                        "message": "Kode Verifikasi salah."
                    });
                }
            }], []);
            jQuery('#w0').yiiActiveForm([], []);
        });

    </script>
</body>

<!-- Mirrored from jogjaprov.go.id/home by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:37:30 GMT -->

</html>
