
<!DOCTYPE html>
<html lang="id">

<!-- Mirrored from jogjaprov.go.id/subdomain by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:50:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="content-type" content="application/json; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="static/images/client-logo.png">
	<meta name="description" content="">
	<meta name="Keywords" content="jogja,budaya">
	<meta itemprop="image" content="static/images/client-logo.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">    
    <meta name="twitter:title" content="Subdomain | Portal Pemda DIY">
    <meta name="twitter:description" content="">    
    <meta name="twitter:image:src" content="static/images/client-logo.png">
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="650" />
	<meta property="og:image:height" content="366" />
    <!-- Open Graph meta information -->
    <meta property="og:title" content="Subdomain | Portal Pemda DIY">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="static/images/client-logo.png">
    <meta property="og:description" content="">
    <link rel="manifest" href="manifest.json" />
    <script src="{{URL::asset('portal/cdn.onesignal.com/sdks/OneSignalSDK.js')}}" async='async'></script>
    <link href="{{URL::asset('portal/vjs.zencdn.net/7.2.3/video-js.css')}}" rel="stylesheet">

    <meta name="csrf-param" content="frontend-csrf">
    <meta name="csrf-token" content="NWlWckVlWm9iCwYFP10XNwYHYSoJVgs2QFElQ3wWDA5WNjsRdwgvXA==">
    <title>Subdomain | Portal Pemda DIY</title>
    <link rel="manifest" href="static/js/portal/manifest.json">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107210355-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
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
    		.fancybox-infobar{ display: none; }
    		.fancybox-button--zoom{ display: none!important; }
			.fancybox-caption:after {border-bottom: 0px }
			.fancybox-navigation .disabled {display:none;}
    	</style>
		<script>
			var OneSignal = window.OneSignal || [];
			OneSignal.push(["init", {
			  appId: "8cc96c30-7a1e-4875-ab11-a29dce8cf78c",
			  autoRegister: true, /* Set to true to automatically prompt visitors */
			  httpPermissionRequest: {
				enable: false
			  },
			  notifyButton: {
				  enable: false /* Set to false to hide */
			  },
			   promptOptions: {
					actionMessage 	: "Aktifkan notifikasi untuk menerima pemberitahuan.",
					/* acceptButtonText limited to 15 characters */
					acceptButtonText: "TERIMA",
					/* cancelButtonText limited to 15 characters */
					cancelButtonText: "TIDAK"
				},
				welcomeNotification : {
					disable: true
				}
			}]);
			
			OneSignal.push(function() {
				OneSignal.registerForPushNotifications({
					httpPermissionRequest: true,
					modalPrompt: false
				});
			OneSignal.on('subscriptionChange', function (isSubscribed) {
					  OneSignal.getUserId(function(userId) {
						  console.log(userId);
						  user(userId);
					  });
					});
		  
				OneSignal.on('notificationDisplay', function (event) {
					var audio = new Audio('static/onesignal_default_sound.html');
					audio.play();
				});
			});
			
			function user(userId){
				console.log("OneSignal User ID:", userId);
				var url = 'site/subscribe/index.html';
				$.ajax({
						url 	: url + userId,
						type 	: "post",
						async 	: true,
						dataType: "json",
						success	: function(data) {
							
						},
						error 	: function (textStatus, errorThrown) {
							
						}
					});
				
			}
		</script>
		
		<form id="w0" action="https://jogjaprov.go.id/search/filter" method="post">
<input type="hidden" name="frontend-csrf" value="NWlWckVlWm9iCwYFP10XNwYHYSoJVgs2QFElQ3wWDA5WNjsRdwgvXA==">			<div id="searchform" class="collapse">
			<div class="container">
				<input type="text" class="form-control" name="keywords" value="" size="50" placeholder="Cari Informasi Seputar DIY di sini!.." required="">			</div>
			</div>
		</form>		
		<nav class="topnav">
			<div class="container">
				<div class="pull-left">
					<ul>
													<li><a href="http://www.facebook.com/humaspemdadiy" target="_blank"><i class="fa fa-facebook"></i></a></li>
																			<li><a href="http://www.twitter.com/humas_jogja" target="_blank"><i class="fa fa-twitter"></i></a></li>
																			<li><a href="https://www.youtube.com/channel/UC6vcKVVzPxWw3eVxfa-gkJQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
																			<li><a href="http://www.instagram.com/humasjogja" target="_blank"><i class="fa fa-instagram"></i></a></li>
																			<li><a href="http://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
																			<li><a href="https://plus.google.com/u/0/106286731015404899251" target="_blank"><i class="fa fa-google-plus"></i></a></li>
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
					
<ul class="nav navbar-nav navbar-right"><li><a href="home.html">Beranda</a></li>
<li><a href="#">Layanan <i class="caret"></i></a>
<ul>
<li><a href="#">BISNIS<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://ptsp.jogjaprov.go.id/" target="_blank">Perizinan </a></li>
<li><a href="http://jogjainvest.jogjaprov.go.id/" target="_blank">Jogja Invest </a></li>
<li><a href="http://www.plutjogja.com/" target="_blank">Pendampingan UMKM </a></li>
</ul>
</li>
<li><a href="#">BUDAYA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://disbud.jogjaprov.go.id/" target="_blank">Jogja Budaya </a></li>
<li><a href="http://www.sonobudoyo.com/" target="_blank">Museum Sonobudoyo </a></li>
<li><a href="http://tamanbudayayogyakarta.com/" target="_blank">Taman Budaya </a></li>
<li><a href="http://mam.jogjaprov.go.id/cctv" target="_blank">CCTV Tempat Wisata </a></li>
</ul>
</li>
<li><a href="#">E-GOV<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://mail.jogjaprov.go.id/" target="_blank">Email Pemda DIY </a></li>
<li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Sengguh </a></li>
<li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Jogjaplan </a></li>
<li><a href="https://elhkpn.kpk.go.id/portal/user/pengumuman_lhkpn/ZFVsaFJTOTVjSGhaZVdrMFlqZHVRMGxpTWtFMGVtMVBXbUZSTkU1cWFtRXpWSGd6VEZwb2I" target="_blank">e-LHKPN </a></li>
<li><a href="http://ppid.jogjaprov.go.id/" target="_blank">PPID D.I. Yogyakarta </a></li>
</ul>
</li>
<li><a href="#">JOGJA APPS<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="https://play.google.com/store/apps/details?id=id.go.jogjaprov.jogjaistimewa&amp;hl=in" target="_blank">Jogja Istimewa </a></li>
<li><a href="https://play.google.com/store/apps/details?id=io.jmc.elapordiy&amp;hl=in" target="_blank">E-Lapor DIY </a></li>
<li><a href="https://play.google.com/store/apps/details?id=mam.reader.ijogja&amp;hl=in" target="_blank">iJogja </a></li>
<li><a href="https://play.google.com/store/apps/details?id=org.btkp_diy.aksara_jawa&amp;hl=in" target="_blank">Hanacaraka </a></li>
<li><a href="https://play.google.com/store/apps/details?id=org.btkpdiy.lumbungbudayajogja&amp;hl=in" target="_blank">Lumbung Budaya Jogja </a></li>
<li><a href="https://play.google.com/store/apps/details?id=sutadi.da.bbi&amp;hl=in" target="_blank">Belajar Bahasa Indonesia </a></li>
</ul>
</li>
<li><a href="#">JOGJAWARA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="profil/4-visi-misi-tujuan-dan-sasaran.html" target="_blank">Profil </a></li>
<li><a href="http://birohukum.jogjaprov.go.id/" target="_blank">Produk Hukum </a></li>
<li><a href="http://jogjaplan.jogjaprov.go.id/" target="_blank">Perencanaan Pembangunan </a></li>
<li><a href="http://sengguh.jogjaprov.go.id/" target="_blank">Transparansi Anggaran </a></li>
<li><a href="http://bappeda.jogjaprov.go.id/dataku/" target="_blank">Jogja Data </a></li>
</ul>
</li>
<li><a href="#">KESEHATAN<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://103.255.15.70:8087/spgdt/" target="_blank">Fasilitas Kesehatan </a></li>
<li><a href="http://www.duniaremaja.jogjaprov.go.id/" target="_blank">Konsultasi Remaja </a></li>
<li><a href="http://dinkes.jogjaprov.go.id/dinkes/home" target="_blank">Jogja Sehat </a></li>
<li><a href="http://grhasia.jogjaprov.go.id/" target="_blank">RS Jiwa Grhasia </a></li>
<li><a href="http://rsprespira.jogjaprov.go.id/" target="_blank">RS Paru Respira </a></li>
<li><a href="http://jamkesos.jogjaprov.go.id/" target="_blank">Jaminan Kesehatan Sosial </a></li>
<li><a href="http://labkes.jogjaprov.go.id/" target="_blank">Laboratorium Kesehatan </a></li>
<li><a href="http://bapelkes.jogjaprov.go.id/" target="_blank">Pelatihan Kesehatan </a></li>
</ul>
</li>
<li><a href="#">PARIWISATA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="agenda.html" target="_blank">Agenda </a></li>
<li><a href="http://visitingjogja.jogjaprov.go.id/" target="_blank">Wisata Jogja </a></li>
</ul>
</li>
<li><a href="#">PENDIDIKAN<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://ijinpenelitian.jogjaprov.go.id/izin/public/pzn" target="_blank">Izin Penelitian </a></li>
<li><a href="http://jogjabelajar.jogjaprov.go.id/" target="_blank">Jogja Belajar </a></li>
<li><a href="http://dikpora.jogjaprov.go.id/" target="_blank">Data Pendidikan </a></li>
<li><a href="http://ppdb.jogjaprov.go.id/" target="_blank">PPDB Online </a></li>
</ul>
</li>
<li><a href="#">TANGGAP DARURAT<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://portal.jogjaprov.go.id/layanan/9-penanggulangan-bencana" target="_blank">Nomor Telepon Penting </a></li>
<li><a href="http://bpbd.jogjaprov.go.id/home" target="_blank">Pusdalops </a></li>
</ul>
</li>
<li><a href="#">TRANSPORTASI<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://dishub.jogjaprov.go.id/trans-jogja" target="_blank">Trans Jogja </a></li>
<li><a href="http://mam.jogjaprov.go.id/atcs" target="_blank">ATCS </a></li>
</ul>
</li>
<li><a href="#">WARGA<i class="fa fa-chevron-right pull-right"></i></a>
<ul>
<li><a href="http://kependudukan.jogjaprov.go.id/" target="_blank">Info Kependudukan </a></li>
<li><a href="http://infonjkbdiy.com/" target="_blank">Info Pajak Kendaraan Bermotor </a></li>
<li><a href="http://infokerja.kemnaker.go.id/" target="_blank">Lowongan Kerja </a></li>
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
<li><a href="artikel/index/24-komunikasi-dan-informatika.html">Komunikasi dan Informatika</a></li>
<li><a href="artikel/index/6-pendidikan.html">Pendidikan</a></li>
<li><a href="artikel/index/22-perhubungan.html">Perhubungan</a></li>
<li><a href="artikel/index/12-perizinan.html">Perizinan</a></li>
<li><a href="artikel/index/21-pertanian-dan-perkebunan.html">Pertanian dan Perkebunan</a></li>
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
<li><a href="#" class="hidden-xs" data-toggle="collapse" data-target="#searchform"><i class="fa fa-search"></i></a></li></ul>				</div>
			</div>
		</nav>
	
		<div class="pathway">
			<div class="container">
				<ul class="breadcrumb"><li><a href="home/index.html">Beranda</a></li>
<li><a href="subdomain.html">Subdomain</a></li>
</ul>			</div>
		</div>
					
		<div class="section section-xl">
	<div class="container">
		<div class="row">
			<div class="#"">
				<h2 class="post-title" style="font-weight: bold;">SUBDOMAIN</h2>
				<hr/>
				<br/>
				<div id="table-view-grid" class="grid-view"><table class="table table-agenda"><thead>
<tr><th><a class="asc" href="subdomain/indexce4d.html?sort=-judul" data-sort="-judul">Judul</a></th><th><a href="subdomain/indexe948.html?sort=url" data-sort="url">Url</a></th></tr>
</thead>
<tbody>
<tr data-key="62"><td>Badan Kepegawaian Daerah</td><td style="text-align:left;white-space:nowrap;"><a href="http://bkd.jogjaprov.go.id/" target="_blank">http://bkd.jogjaprov.go.id</a></td></tr>
<tr data-key="47"><td>Badan Kerjasama dan Penanaman Modal</td><td style="text-align:left;white-space:nowrap;"><a href="http://jogjainvest.jogjaprov.go.id/" target="_blank">http://jogjainvest.jogjaprov.go.id</a></td></tr>
<tr data-key="35"><td>Badan Kesatuan Bangsa dan Politik</td><td style="text-align:left;white-space:nowrap;"><a href="http://kesbangpol.jogjaprov.go.id/" target="_blank">http://kesbangpol.jogjaprov.go.id</a></td></tr>
<tr data-key="37"><td>Badan Ketahanan Pangan dan Penyuluhan</td><td style="text-align:left;white-space:nowrap;"><a href="http://bkpp.jogjaprov.go.id/" target="_blank">http://bkpp.jogjaprov.go.id</a></td></tr>
<tr data-key="43"><td>Badan Lingkungan Hidup</td><td style="text-align:left;white-space:nowrap;"><a href="http://blh.jogjaprov.go.id/" target="_blank">http://blh.jogjaprov.go.id</a></td></tr>
<tr data-key="49"><td>Badan Pemberdayaan Perempuan dan Masyarakat</td><td style="text-align:left;white-space:nowrap;"><a href="http://bppm.jogjaprov.go.id/" target="_blank">http://bppm.jogjaprov.go.id</a></td></tr>
<tr data-key="28"><td>Badan Penanggulangan Bencana Daerah</td><td style="text-align:left;white-space:nowrap;"><a href="http://bpbd.jogjaprov.go.id/" target="_blank">http://bpbd.jogjaprov.go.id</a></td></tr>
<tr data-key="52"><td>Badan Pendidikan dan Pelatihan</td><td style="text-align:left;white-space:nowrap;"><a href="http://diklat.jogjaprov.go.id/" target="_blank">http://diklat.jogjaprov.go.id</a></td></tr>
<tr data-key="68"><td>Badan Perencanaan Pembangunan Daerah</td><td style="text-align:left;white-space:nowrap;"><a href="http://bappeda.jogjaprov.go.id/" target="_blank">http://bappeda.jogjaprov.go.id</a></td></tr>
<tr data-key="57"><td>Badan Perpustakaan dan Arsip Daerah</td><td style="text-align:left;white-space:nowrap;"><a href="http://bpad.jogjaprov.go.id/" target="_blank">http://bpad.jogjaprov.go.id/</a></td></tr>
</tbody></table><ul class="pagination"><li class="first disabled"><span>&laquo;</span></li>
<li class="prev disabled"><span>&lsaquo;</span></li>
<li class="active"><a href="subdomain/index9b19.html?page=1&amp;per-page=10" data-page="0">1</a></li>
<li><a href="subdomain/index35aa.html?page=2&amp;per-page=10" data-page="1">2</a></li>
<li><a href="subdomain/index4d6c.html?page=3&amp;per-page=10" data-page="2">3</a></li>
<li><a href="subdomain/index4162.html?page=4&amp;per-page=10" data-page="3">4</a></li>
<li><a href="subdomain/index4d6f.html?page=5&amp;per-page=10" data-page="4">5</a></li>
<li><a href="subdomain/indexd92c.html?page=6&amp;per-page=10" data-page="5">6</a></li>
<li><a href="subdomain/index65f3.html?page=7&amp;per-page=10" data-page="6">7</a></li>
<li class="next"><a href="subdomain/index35aa.html?page=2&amp;per-page=10" data-page="1">&rsaquo;</a></li>
<li class="last"><a href="subdomain/index65f3.html?page=7&amp;per-page=10" data-page="6">&raquo;</a></li></ul></div>                <br/>
               
			</div>
		</div>
	</div>
</div>

		<div id="footer">
			<div class="container">
				Copyright &copy; 2017 Pemerintah Daerah Istimewa Yogyakarta			</div>
		</div>
	
				<script type="text/javascript">
			$(function(){
				$('.navigation .navbar-nav > li > a:contains("Link")').parent().addClass('active');
			});
		</script>
		<script type="text/javascript">
			$(function(){
				$('#footer_link').hide()
			});
		</script>
    <script src="assets/7c5cacc7/yii.gridView.js"></script>
<script src="assets/7c5cacc7/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#table-view-grid').yiiGridView({"filterUrl":"\/subdomain","filterSelector":"#table-view-grid-filters input, #table-view-grid-filters select"});
jQuery('#w0').yiiActiveForm([], []);
});</script></body>

<!-- Mirrored from jogjaprov.go.id/subdomain by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 03:50:14 GMT -->
</html>


