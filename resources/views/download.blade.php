@extends('layouts.app')
@section('content')
    <div class="pathway">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home/index.html">Beranda</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="download/index.html">Download</a></li>
            </ul>
        </div>
    </div>

    <div class="section section-xl">
        <div class="container">
            <div class="row">
                <div class="#">
                    <h2 class="post-title" style="font-weight: bold;">DOWNLOAD</h2>
                    <hr />
                    <form id="form-search" action="https://jogjaprov.go.id/download/filter" method="post">
                        <input type="hidden" name="frontend-csrf"
                            value="aS11TFc4SEQ.TyU7LQAFHFpDQhQbCxkdHBUGfW5LHiUKchgvZVU9dw==">
                        <div class="form-group field-downloadsearch-id_download_kategori">
                            <div class="kv-plugin-loading loading-downloadsearch-id_download_kategori">&nbsp;</div>
                            <select id="downloadsearch-id_download_kategori" class="form-control search"
                                name="DownloadSearch[id_download_kategori]" data-s2-options="s2options_d6851687"
                                data-krajee-select2="select2_1b41adec" style="display:none">
                                <option value="">Pilih Kategori</option>
                                <option value="4">Budaya</option>
                                <option value="12">CPNS</option>
                                <option value="8">Informasi</option>
                                <option value="10">Jogja Wara</option>
                                <option value="14">Kelengkapan Upacara</option>
                                <option value="13">Komunikasi dan Informatika</option>
                                <option value="7">Kuliner</option>
                                <option value="15">Pariwisata</option>
                                <option value="17">Pemerintahan</option>
                                <option value="6">Pendidikan</option>
                                <option value="9">Pengumuman</option>
                                <option value="16">PPPK</option>
                                <option value="11">Sambutan Gubernur</option>
                                <option value="3">Umum</option>
                            </select>
                        </div>
                    </form> <br />
                    <br />
                    <div id="table-view-grid" class="grid-view">
                        <table class="table table-agenda">
                            <thead>
                                <tr>
                                    <th><a href="download/indexdcee.html?sort=judul" data-sort="judul">Judul</a></th>
                                    <th><a href="download/indexe164.html?sort=id_download_kategori"
                                            data-sort="id_download_kategori">Kategori</a></th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-key="115">
                                    <td>Surat Edaran HUT RI ke 74 Tahun 2019</td>
                                    <td>Pengumuman</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/Surat%20Edaran%20HUT%20RI%20ke%2074%20Tahun%202019.pdf"
                                            data-pjax="0"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="114">
                                    <td>Hasll Seleksi Pegawai Pemerintah Dengan Perjanjian Kerja Tahap I Pemerintah
                                        Daerah Daerah Istimewa Y</td>
                                    <td>Pengumuman</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/PENGUMUMAN%20DAN%20LAMPIRAN%20PPPK.pdf"
                                            data-pjax="0"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="113">
                                    <td>Jogjawara Edisi Juni 2019 - PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%20Juni.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="112">
                                    <td>Pengumuman Penetapan Jalur Kereta Api akses NYIA</td>
                                    <td>Pengumuman</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/Scan%20Pengumuman%20Penetapan%20Lokasi%20Pengadaan%20Tanah%20Rel%20Kereta%20Api.pdf"
                                            data-pjax="0"><i class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="111">
                                    <td>Jogjawara Edisi Mei 2019 versi PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%205.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="110">
                                    <td>Jogjawara Edisi April 2019 versi PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%204.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="109">
                                    <td>Jogjawara Edisi Maret 2019 versi PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%203.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="108">
                                    <td>Jogjawara Edisi Februari 2019 versi PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%202.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                                <tr data-key="107">
                                    <td>Jogjawara Edisi Januari 2019 versi PDF</td>
                                    <td>Jogja Wara</td>
                                    <td title="Download" style="text-align:center;white-space:nowrap;width:60px;"><a
                                            href="download/download/jogjawara%20edisi%201.pdf" data-pjax="0"><i
                                                class="fa fa-download"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="first disabled"><span>&laquo;</span></li>
                            <li class="prev disabled"><span>&lsaquo;</span></li>
                            <li class="active"><a href="download/index6b43.html?page=1&amp;per-page=9"
                                    data-page="0">1</a></li>
                            <li><a href="download/index98b2.html?page=2&amp;per-page=9" data-page="1">2</a></li>
                            <li><a href="download/index4128.html?page=3&amp;per-page=9" data-page="2">3</a></li>
                            <li><a href="download/indexdd9e.html?page=4&amp;per-page=9" data-page="3">4</a></li>
                            <li><a href="download/index8e62.html?page=5&amp;per-page=9" data-page="4">5</a></li>
                            <li><a href="download/index5be6.html?page=6&amp;per-page=9" data-page="5">6</a></li>
                            <li><a href="download/indexabb3.html?page=7&amp;per-page=9" data-page="6">7</a></li>
                            <li><a href="download/index49ed.html?page=8&amp;per-page=9" data-page="7">8</a></li>
                            <li><a href="download/index1739.html?page=9&amp;per-page=9" data-page="8">9</a></li>
                            <li><a href="download/index674c.html?page=10&amp;per-page=9" data-page="9">10</a></li>
                            <li class="next"><a href="download/index98b2.html?page=2&amp;per-page=9"
                                    data-page="1">&rsaquo;</a></li>
                            <li class="last"><a href="download/indexbe0d.html?page=11&amp;per-page=9"
                                    data-page="10">&raquo;</a></li>
                        </ul>
                    </div> <br />

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.search').change(function () {
            $('#form-search').submit();
            return false;
        });

    </script>

    <div id="footer">
        <div class="container">
            Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.navigation .navbar-nav > li > a:contains("Media")').parent().addClass('active');
        });

    </script>
    <script type="text/javascript">
        $(function () {
            $('#footer_link').hide()
        });

    </script>
    <script src="assets/60e711c4/js/select2.full.min.js"></script>
    <script src="assets/60e711c4/js/select2-krajee.min.js"></script>
    <script src="assets/60e711c4/js/i18n/id.js"></script>
    <script src="assets/7c5cacc7/yii.validation.js"></script>
    <script src="assets/7c5cacc7/yii.activeForm.js"></script>
    <script src="assets/7c5cacc7/yii.gridView.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery.when(jQuery('#downloadsearch-id_download_kategori').select2(select2_1b41adec)).done(
                initS2Loading('downloadsearch-id_download_kategori', 's2options_d6851687'));

            jQuery('#form-search').yiiActiveForm([{
                "id": "downloadsearch-id_download_kategori",
                "name": "id_download_kategori",
                "container": ".field-downloadsearch-id_download_kategori",
                "input": "#downloadsearch-id_download_kategori",
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.number(value, messages, {
                        "pattern": /^\s*[+-]?\d+\s*$/,
                        "message": "Kategori harus berupa integer.",
                        "skipOnEmpty": 1
                    });
                }
            }], []);
            jQuery('#table-view-grid').yiiGridView({
                "filterUrl": "\/download",
                "filterSelector": "#table-view-grid-filters input, #table-view-grid-filters select"
            });
            jQuery('#w0').yiiActiveForm([], []);
        });

    </script>
@endsection