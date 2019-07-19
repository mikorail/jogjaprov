@extends('layouts.app')
@section('content')
    <div class="pathway">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home/index.html">Beranda</a></li>
                <li><a href="external_links.html">External Links</a></li>
            </ul>
        </div>
    </div>

    <div class="section section-xl">
        <div class="container">
            <div class="row">
                <div class="#"">
                <h2 class=" post-title" style="font-weight: bold;">EXTERNAL LINKS</h2>
                    <hr />
                    <br />
                    <div id="table-view-grid" class="grid-view">
                        <table class="table table-agenda">
                            <thead>
                                <tr>
                                    <th><a class="asc" href="external_links/indexce4d.html?sort=-judul"
                                            data-sort="-judul">Judul</a></th>
                                    <th><a href="external_links/indexe948.html?sort=url" data-sort="url">Url</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-key="5">
                                    <td>Jogja Belajar</td>
                                    <td style="text-align:left;white-space:nowrap;"><a href="http://jogjabelajar.org/"
                                            target="_blank">http://jogjabelajar.org/</a></td>
                                </tr>
                                <tr data-key="3">
                                    <td>JogjaPlaza Pasar Online UKM</td>
                                    <td style="text-align:left;white-space:nowrap;"><a href="http://jogjaplaza.com/"
                                            target="_blank">http://jogjaplaza.com/</a></td>
                                </tr>
                                <tr data-key="4">
                                    <td>LPSE Pemda DIY</td>
                                    <td style="text-align:left;white-space:nowrap;"><a
                                            href="https://lpse.jogjaprov.go.id/eproc4"
                                            target="_blank">https://lpse.jogjaprov.go.id/eproc4</a></td>
                                </tr>
                            </tbody>
                        </table>
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
                "filterUrl": "\/external_links",
                "filterSelector": "#table-view-grid-filters input, #table-view-grid-filters select"
            });
            jQuery('#w0').yiiActiveForm([], []);
        });

    </script>
@endsection