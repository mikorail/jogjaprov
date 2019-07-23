@extends('layouts.app')
@section('content')
    
    <div class="pathway">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home/index.html">Beranda</a></li>
                <li><a href="pengumuman/index.html">Pengumuman</a></li>
            </ul>
        </div>
    </div>

    <div class="section section-xl">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-9" style="border-left: 1px dashed #ddd;min-height: 100vh;">
                    <h2 class="post-title" style="font-weight: bold;">Pengumuman</h2>
                    <hr />
                    <br />
                    <div id="table-view-grid" class="grid-view">
                        <table class="table table-pengumuman">
                            <thead>
                                <tr>
                                    <th><a class="desc" href="pengumuman/index89e3.html?sort=tgl_pengumuman"
                                            data-sort="tgl_pengumuman">Tanggal</a></th>
                                    <th><a href="pengumuman/indexdcee.html?sort=judul" data-sort="judul">Judul
                                            Pengumuman</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-key="53">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Rabu, 03 Juli 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Surat
                                            Edaran HUT ke-74 RI Tahun 2019</a></td>
                                </tr>
                                <tr data-key="52">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Selasa, 02 Juli 2019
                                    </td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Hasil
                                            Seleksi Pegawai Pemerintah Dengan Perjanjian Kerja Tahap I Pemda DIY</a>
                                    </td>
                                </tr>
                                <tr data-key="51">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Selasa, 18 Juni 2019
                                    </td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Penatapan
                                            Lokasi Pembangunan Jalur Kereta Api Akses Bandara NYIA</a></td>
                                </tr>
                                <tr data-key="50">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Kamis, 13 Juni 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Seleksi
                                            Calon Anggota Komisi Informasi Daerah DIY</a></td>
                                </tr>
                                <tr data-key="49">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Jumat, 31 Mei 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Libur
                                            Pelayanan Perizinan dan Non Perizinan</a></td>
                                </tr>
                                <tr data-key="48">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Selasa, 28 Mei 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Program
                                            Pelatihan Ketrampilan Kerja Tahun 2019</a></td>
                                </tr>
                                <tr data-key="47">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Senin, 27 Mei 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Pelatihan
                                            Kerja Kebandarudaraan Tahun 2019</a></td>
                                </tr>
                                <tr data-key="45">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Rabu, 15 Mei 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>SE
                                            Partisipasi Menyemarakkan Hari Kebangkitan Nasional</a></td>
                                </tr>
                                <tr data-key="46">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Rabu, 15 Mei 2019</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>SE
                                            Peringatan Hari Lahir Pancasila 2019</a></td>
                                </tr>
                                <tr data-key="44">
                                    <td style="text-align:left;white-space:nowrap;width:200px;">Selasa, 23 April 2019
                                    </td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href={{route('detailpeng')}}>Pedoman
                                            Pelaksanaan Peringatan Hari Pendidikan Nasional 2019</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="first disabled"><span>&laquo;</span></li>
                            <li class="prev disabled"><span>&lsaquo;</span></li>
                            <li class="active"><a href="pengumuman/index9b19.html?page=1&amp;per-page=10"
                                    data-page="0">1</a></li>
                            <li><a href="pengumuman/index35aa.html?page=2&amp;per-page=10" data-page="1">2</a></li>
                            <li><a href="pengumuman/index4d6c.html?page=3&amp;per-page=10" data-page="2">3</a></li>
                            <li><a href="pengumuman/index4162.html?page=4&amp;per-page=10" data-page="3">4</a></li>
                            <li><a href="pengumuman/index4d6f.html?page=5&amp;per-page=10" data-page="4">5</a></li>
                            <li class="next"><a href="pengumuman/index35aa.html?page=2&amp;per-page=10"
                                    data-page="1">&rsaquo;</a></li>
                            <li class="last"><a href="pengumuman/index4d6f.html?page=5&amp;per-page=10"
                                    data-page="4">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 blog-sidebar"style="background-color:#f5f5f5">
                    <br>
                        <form id="w0" action="https://jogjaprov.go.id/pengumuman/filter" method="post">
                            <input type="hidden" name="frontend-csrf"
                                value="dUJ0dUhpWXgiICQCMlEUIEYsQy0EWgghAHoHRHEaDxkWHRkWegQsSw==">
                            <div class="searchform">
                                <div class="input-group">
                                    <input type="text" id="beritasearch-keyword" class="form-control"
                                        name="PengumumanSearch[keyword]" value="" size="50" placeholder="Cari pengumuman..">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
    
                            <br /><br />
                            <h4>Pengumuman Terbaru</h4>
                            <ul>
                                <li>
                                    <a href="pengumuman/detail/53-surat-edaran-hut-ri-ke-74-tahun-2019.html">
                                        <span class="date">03 Juli 2019</span><br />
                                        Surat Edaran HUT ke-74 RI Tahun 2019 </a>
                                </li>
                                <li>
                                    <a
                                        href="pengumuman/detail/52-hasil-seleksi-pegawai-pemerintah-dengan-perjanjian-kerja-tahap-i-pemerintah-daerah-daerah-istimewa-y.html">
                                        <span class="date">02 Juli 2019</span><br />
                                        Hasil Seleksi Pegawai Pemerintah Dengan Perjanjian Kerja Tahap I Pemda DIY </a>
                                </li>
                                <li>
                                    <a
                                        href="pengumuman/detail/51-penatapan-lokasi-pembangunan-jalur-kereta-api-akses-bandara-nyia.html">
                                        <span class="date">18 Juni 2019</span><br />
                                        Penatapan Lokasi Pembangunan Jalur Kereta Api Akses Bandara NYIA </a>
                                </li>
                                <li>
                                    <a href="pengumuman/detail/50-seleksi-calon-anggota-komisi-informasi-daerah-diy.html">
                                        <span class="date">13 Juni 2019</span><br />
                                        Seleksi Calon Anggota Komisi Informasi Daerah DIY </a>
                                </li>
                                <li>
                                    <a href="pengumuman/detail/49-libur-pelayanan-perizinan-dan-non-perizinan.html">
                                        <span class="date">31 Mei 2019</span><br />
                                        Libur Pelayanan Perizinan dan Non Perizinan </a>
                                </li>
                            </ul>
                    </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.navigation .navbar-nav > li > a:contains("Agenda")').parent().addClass('active');
        });

    </script>
    <script type="text/javascript">
        $(function () {
            $('#footer_link').hide()
        });

    </script>
    <script src="assets/7c5cacc7/yii.gridView.js"></script>
    <script src="assets/7c5cacc7/yii.activeForm.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#table-view-grid').yiiGridView({
                "filterUrl": "\/pengumuman",
                "filterSelector": "#table-view-grid-filters input, #table-view-grid-filters select"
            });
            jQuery('#w1').yiiActiveForm([], []);
        });

    </script>
    @endsection