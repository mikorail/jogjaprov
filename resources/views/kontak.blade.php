@extends('layouts.app')
@section('content')

    <div class="pathway">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home/index.html">Beranda</a></li>
                <li><a href="kontak/index.html">Kontak Kami</a></li>
            </ul>
        </div>
    </div>


    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEX1mHOvKwbQB6onAxpfcPn8WdqxW66JQ&amp;sensor=false">
    </script>
    <div class="section section-xl">
        <div class="container">
            <h2 class="post-title" style="font-weight: bold;">KONTAK KAMI</h2>
            <hr />
            <br />
            <div class="row row-contact">
                <div class="col-sm-3">

                    <h4>KANTOR</h4>
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
                </div>
                <div class="col-sm-3">
                    <h4>JAM KERJA</h4>
                    <div class="media">
                        <div class="media-left"><i class="icons icon-clock"></i></div>
                        <div class="media-body">
                            Senin - Kamis 08:00 - 16:00
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left"><i class="icons icon-clock"></i></div>
                        <div class="media-body">
                            Jumat 08:00 - 15:00
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left"><i class="icons icon-clock"></i></div>
                        <div class="media-body">
                            Sabtu - Minggu Libur
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h4>HUBUNGI KAMI</h4>
                    <div
                        style="background:#eee;padding:15px;margin:0 0 15px;color:#aaa;font-style: italic;font-family:serif;">
                        Silahkan Kirim Tanggapan Anda Mengenai Website Ini Atau Sistem Kami Saat Ini. Tanggapan Anda
                        Sangat Membantu Untuk Meningkatkan Pelayanan Kami Kepada Masyarakat. Dan Untuk Menangani Segala
                        Permasalahan Dan Keluhan-Keluhan Di Sekitar Provinsi Daerah Istimewa Yogyakarta, Silahkan
                        Download Aplikasi E-Lapor.
                        <br>
                        <a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy" target="_blank"
                            class="btn btn-danger">Download E-Lapor</a>
                    </div>
                    <form id="myform" action="https://jogjaprov.go.id/kontak/create" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="frontend-csrf"
                            value="b25kTXpIdGs4DDQ6AHA5M1wAUxU2eyUyGlYXfEM7IgoMMQkuSCUBWA==">
                        <div class="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group field-feedback-nama required">

                                            <div><input type="text" id="feedback-nama" class="form-control"
                                                    name="Feedback[nama]" maxlength="50" placeholder="Nama"></div>
                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-group field-feedback-email required">

                                            <div><input type="text" id="feedback-email" class="form-control"
                                                    name="Feedback[email]" maxlength="100" placeholder="Email"></div>
                                            <div class="help-block"></div>
                                        </div>
                                    </div>
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
                                                    src="site/captchacc1c.png?v=5d1d59649aaca" alt=""></div>
                                            <div class="col-lg-3" style="padding:0px;"><a href="#" id="fox"
                                                    class="btn btn-primary"><span class="fa fa-refresh"></span>
                                                    Recaptcha</a></div>
                                        </div>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">Kirim PESAN <i
                                        class="icons icon-check"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br />
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63249.785322420554!2d110.35158091127059!3d-7.7779919649505915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5827fa1a923b%3A0x586d2a1569956082!2sKantor+Gubernur+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sid!2sid!4v1497639946824" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        -->
            <div class="col-sm-12">
                <h4>PETA LOKASI</h4>
                <div id="map" style="height:400px;"></div>
            </div>
        </div>
    </div>
    <script>
        $("#fox").on('click', function (e) {
            //#testimonials-captcha-image is my captcha image id
            $("img[id$='-verifycode-image']").trigger('click');
            e.preventDefault();
        })

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
            map = new google.maps.Map(document.getElementById("map"),
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

    <div id="footer">
        <div class="container">
            Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.navigation .navbar-nav > li > a:contains("Kontak Kami")').parent().addClass('active');
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
@endsection