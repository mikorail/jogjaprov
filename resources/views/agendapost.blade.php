@extends('layouts.app')
@section('content')
	<div class="pathway">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="../../home/index.html">Beranda</a></li>
				<li><a href="../../agenda.html">Agenda</a></li>
				<li><a href="88.html">Jogja Color Run 2016</a></li>
			</ul>
		</div>
	</div>


	<div class="section section-xl">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9 post" style="border-left: 1px dashed #ddd;min-height: 100vh;">
					<h2 class="post-title">Jogja Color Run 2016</h2>
					<div class="agenda-meta">
						<span class="badge badge-info"><i class="fa fa-tags"></i> <a href="../index/lomba.html" style="color:#fff">Lomba</a></span>

						<span class="badge badge-info" style="background-color:darkolivegreen"><i class="fa fa-calendar fa-fw"></i> 06 November 2016 - 07:00 - 06 November 2016 -
							23:55</span>
					</div>
					
					<br />
					Jogja Color Run 2016 merupakan acara perlombaan sekaligus olahraga. Diadakan pada:<br>
					<ul>
						<li>Tanggal : 06 Nov 2016 </li>
						<li>Pukul : 07:00:00 - 24:00:00 </li>
						<li>Tempat : Lapangan Parkir Mandala Krida</li>
					</ul><br>
					<div class="agenda-btn">
						<a href="https://maps.google.com/?q=-7.795804,110.384289" class="btn" target="_blank"><i
								class="fa fa-map-marker"></i> Lihat Lokasi</a>
					</div>
				</div>
				<div class="col-sm-3 blog-sidebar" style="background-color:#f5f5f5;border-radius:5px">
					<br>
					<form id="w0" action="https://jogjaprov.go.id/agenda/index" method="post">
						<input type="hidden" name="frontend-csrf"
							value="SWhRbWx5TWseCgEaFkEAM3oGZjUgShwyPFAiXFUKGwoqNzwOXhQ4WA==">
						<div class="searchform">
							<div class="input-group">
								<input type="text" id="beritasearch-keyword" class="form-control"
									name="AgendaSearch[keyword]" value="" size="50" placeholder="Cari agenda.."> <span
									class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>

						<br /><br />
						<h4>Agenda Terbaru</h4>
						<ul>
							<li>
								<a href="845.html">
									<span class="date">07 Desember 2019 - 09:00 - 07 Desember 2019 - 00:00</span>
									<br />
									Sendratari/Dramatari Sekar Pembayun </a>
							</li>
							<li>
								<a href="844.html">
									<span class="date">02 November 2019 - 09:00 - 02 November 2019 - 00:00</span>
									<br />
									Sendratari/Dramatari Sekar Pembayun </a>
							</li>
							<li>
								<a href="843.html">
									<span class="date">28 September 2019 - 09:00 - 28 September 2019 - 00:00</span>
									<br />
									Sendratari/Dramatari Sekar Pembayun </a>
							</li>
							<li>
								<a href="842.html">
									<span class="date">24 Agustus 2019 - 09:00 - 24 Agustus 2019 - 00:00</span>
									<br />
									Sendratari/Dramatari Sekar Pembayun </a>
							</li>
							<li>
								<a href="863.html">
									<span class="date">21 Juli 2019 - 00:00 - 25 Juli 2019 - 00:00</span>
									<br />
									Kemah Budaya Kaum Muda </a>
							</li>
						</ul>
						<br>
				</div>
			</div>
			
		</div>
	</div>

	<style type="text/css">
		.agenda-meta {
			color: #555;
			margin: 15px 0 15px;
		}

		.agenda-meta span {
			display: inline-block;
			margin-right: 10px;
		}

		.agenda-btn {}

		.agenda-btn a {
			display: inline-block;
			padding: 5px 15px;
			border: 1px solid #ddd;
			border-radius: 50px;
			font-size: 11px;
			color: #aaa;
		}

		.agenda-btn a:hover {
			background: #333;
			color: #fff;
		}
	</style>
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
	<script src="../../assets/d6b16473/yii.activeForm.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function () {
			jQuery('#w1').yiiActiveForm([], []);
		});
	</script>
@endsection