@extends('layouts.app')
@section('content')

<div class="pathway">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="home/index.html">Beranda</a></li>
            <li><a href="subdomain.html">Subdomain</a></li>
        </ul>
    </div>
</div>

<div class="section section-xl">
    <div class="container">
        <div class="row">
            <div class="#"">
				<h2 class=" post-title" style="font-weight: bold;">SUBDOMAIN</h2>
                <hr />
                <br />
                <div id="table-view-grid" class="grid-view">
                    <table class="table table-agenda">
                        <thead>
                            <tr>
                                <th><a class="asc" href="subdomain/indexce4d.html?sort=-judul"
                                        data-sort="-judul">Judul</a></th>
                                <th><a href="subdomain/indexe948.html?sort=url" data-sort="url">Url</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-key="62">
                                <td>Badan Kepegawaian Daerah</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://bkd.jogjaprov.go.id/"
                                        target="_blank">http://bkd.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="47">
                                <td>Badan Kerjasama dan Penanaman Modal</td>
                                <td style="text-align:left;white-space:nowrap;"><a
                                        href="http://jogjainvest.jogjaprov.go.id/"
                                        target="_blank">http://jogjainvest.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="35">
                                <td>Badan Kesatuan Bangsa dan Politik</td>
                                <td style="text-align:left;white-space:nowrap;"><a
                                        href="http://kesbangpol.jogjaprov.go.id/"
                                        target="_blank">http://kesbangpol.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="37">
                                <td>Badan Ketahanan Pangan dan Penyuluhan</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://bkpp.jogjaprov.go.id/"
                                        target="_blank">http://bkpp.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="43">
                                <td>Badan Lingkungan Hidup</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://blh.jogjaprov.go.id/"
                                        target="_blank">http://blh.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="49">
                                <td>Badan Pemberdayaan Perempuan dan Masyarakat</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://bppm.jogjaprov.go.id/"
                                        target="_blank">http://bppm.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="28">
                                <td>Badan Penanggulangan Bencana Daerah</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://bpbd.jogjaprov.go.id/"
                                        target="_blank">http://bpbd.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="52">
                                <td>Badan Pendidikan dan Pelatihan</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://diklat.jogjaprov.go.id/"
                                        target="_blank">http://diklat.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="68">
                                <td>Badan Perencanaan Pembangunan Daerah</td>
                                <td style="text-align:left;white-space:nowrap;"><a
                                        href="http://bappeda.jogjaprov.go.id/"
                                        target="_blank">http://bappeda.jogjaprov.go.id</a></td>
                            </tr>
                            <tr data-key="57">
                                <td>Badan Perpustakaan dan Arsip Daerah</td>
                                <td style="text-align:left;white-space:nowrap;"><a href="http://bpad.jogjaprov.go.id/"
                                        target="_blank">http://bpad.jogjaprov.go.id/</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li class="first disabled"><span>&laquo;</span></li>
                        <li class="prev disabled"><span>&lsaquo;</span></li>
                        <li class="active"><a href="subdomain/index9b19.html?page=1&amp;per-page=10" data-page="0">1</a>
                        </li>
                        <li><a href="subdomain/index35aa.html?page=2&amp;per-page=10" data-page="1">2</a></li>
                        <li><a href="subdomain/index4d6c.html?page=3&amp;per-page=10" data-page="2">3</a></li>
                        <li><a href="subdomain/index4162.html?page=4&amp;per-page=10" data-page="3">4</a></li>
                        <li><a href="subdomain/index4d6f.html?page=5&amp;per-page=10" data-page="4">5</a></li>
                        <li><a href="subdomain/indexd92c.html?page=6&amp;per-page=10" data-page="5">6</a></li>
                        <li><a href="subdomain/index65f3.html?page=7&amp;per-page=10" data-page="6">7</a></li>
                        <li class="next"><a href="subdomain/index35aa.html?page=2&amp;per-page=10"
                                data-page="1">&rsaquo;</a></li>
                        <li class="last"><a href="subdomain/index65f3.html?page=7&amp;per-page=10"
                                data-page="6">&raquo;</a></li>
                    </ul>
                </div> <br />

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
        $('.navigation .navbar-nav > li > a:contains("Link")').parent().addClass('active');
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
            "filterUrl": "\/subdomain",
            "filterSelector": "#table-view-grid-filters input, #table-view-grid-filters select"
        });
        jQuery('#w0').yiiActiveForm([], []);
    });

</script>
@endsection