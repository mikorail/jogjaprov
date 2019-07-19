@extends('layouts.app')
@section('content')
    <div class="pathway">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home/index.html">Beranda</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="media/index.html">Galeri</a></li>
            </ul>
        </div>
    </div>

    <div class="section section-xl">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 blog-sidebar">



                    <h4>KATEGORI</h4>
                    <ul>
                        <li class="active"><a href="media.html">Galeri</a></li>
                        <li><a href="media/instagram_feed/index.html">Instagram</a></li>
                    </ul>


                </div>
                <div class="col-sm-9" style="border-left: 1px dashed #ddd;min-height: 100vh;">
                    <h2 class="post-title" style="font-weight: bold;">GALERI</h2>
                    <hr />
                    <br />
                    <form id="form-search" action="https://jogjaprov.go.id/media/filter" method="post">
                        <input type="hidden" name="frontend-csrf"
                            value="RVctdG5pZkESNX0DFFErGXY5GiwiWjcYMG9eRVcaMCAmCEAXXAQTcg==">
                        <div class="form-group field-galerisearch-id_galeri_kategori">
                            <div class="kv-plugin-loading loading-galerisearch-id_galeri_kategori">&nbsp;</div><select
                                id="galerisearch-id_galeri_kategori" class="form-control search"
                                name="GaleriSearch[id_galeri_kategori]" data-s2-options="s2options_d6851687"
                                data-krajee-select2="select2_1e4f2d59" style="display:none">
                                <option value="">Pilih Album</option>
                                <option value="7">20171029 Gubernur DIY Mengapresiasi Festival Gerobak Sapi</option>
                                <option value="9">20171105 Sanding Dalang 1.000 Bocah</option>
                                <option value="8">20171120 Courtesy Call Gubernur DIY dengan Dubes Jepang untuk RI
                                </option>
                                <option value="6">20171124 Gubernur DIY, Wakil Gubernur DIY, dan Sekda DIY Meninjau
                                    Revitalisasi Kepatihan</option>
                                <option value="10">20171127 Gubernur DIY Sri Sultan HB X meninjau revitalisasi malioboro
                                    dan toilet underground</option>
                                <option value="12">20171129 Gubernur DIY Sri Sultan HB X Meninjau Lokasi Terdampak
                                    Siklon Tropis Cempaka</option>
                                <option value="11">20171130 Gubernur Meninjau 4 Lokasi Terdampak Siklon Cempaka</option>
                                <option value="13">20180201 SPATS dan SPAM Jadi Solusi Warga Gunungkidul Peroleh Air
                                    Bersih</option>
                                <option value="15">20180202 Wakil Gubernur DIY Terima Audiensi DPW Inkalindo</option>
                                <option value="14">20180205 Wagub DIY Terima Audiensi FT UGM</option>
                                <option value="16">20180211 Gubernur DIY Membesuk Romo Prier di RS Panti Rapih</option>
                                <option value="23">20180214 Deklarasi Damai anti Kekerasan, Intoleransi dan Radikalisme
                                    di Kepatihan Yogyakarta</option>
                                <option value="19">20180214 Gubernur DIY menerima audiensi Kanwil Pajak DIY </option>
                                <option value="25">20180215 Gubernur DIY Menerima Panitia Jogja Air Show 2018</option>
                                <option value="24">20180215 Sosialisasi KASN di Gedhong Pracimasana, Kepatihan</option>
                                <option value="26">20180216 Pengetan Hadeging Karaton Ngayogyakarta</option>
                                <option value="27">20180217 Joyflight Gubernur DIY dalam Jogja Airshow 2018</option>
                                <option value="28">20180218 Gubernur DIY Menghadiri Jogja Air Show 2018 Menggunakan
                                    Helikopter</option>
                                <option value="31">20180220 20180220 Wakil Gubernur DIY Terima Audiensi Dompet Dhuafa
                                </option>
                                <option value="30">20180220 Dubes RI Untuk Moskow Temui Gubernur DIY</option>
                                <option value="29">20180220 Gubernur DIY Menerima Kunjungan KJRI New York</option>
                                <option value="32">20180224 Pembukaan Pekan Budaya Tionghoa Yogyakarta 2018</option>
                                <option value="33">20180225 Pembukaan Liga Pekerja Indonesia DIY oleh Wagub DIY</option>
                                <option value="34">20180227 Rapat Koordinas Teknis Perencanaan Pembangunan 2018</option>
                                <option value="17">20180228 Gubernur DIY Sri Sultan HB X Menerima Kunjungan Direktur IMF
                                </option>
                                <option value="35">20180301 Pembukaan Pameran Serangan Oemoem 1 Maret di Vredeburg
                                </option>
                                <option value="18">20180303 Kunjungan Gubernur DIY ke beberapa rumah cagar budaya
                                </option>
                                <option value="38">20180305 Perpadi DIY Audiensi dengan Wakil Gubernur DIY</option>
                                <option value="37">20180305 Wagub DIY Menerima Kunjungan Panitia World Kidney Day 2018
                                </option>
                                <option value="36">20180306 Peresmian Jalan Siliwangi di Surabaya </option>
                                <option value="40">20180309 Gubernur DIY Menerima Kunjungan Dubes India </option>
                                <option value="20">20180311 Dialog Nasional ke-8 Indonesia Maju</option>
                                <option value="39">20180312 Soft Opening Taman Budaya Kulon Progo</option>
                                <option value="42">20180313 Dinner Investment Regional Forum</option>
                                <option value="21">20180313 Wagub DIY Hadiri Konsolidasi Perencanaan dan Pelaksanaan
                                    Penanaman Modal Nasional (KP3MN)</option>
                                <option value="41">20180313 Wagub DIY Terima Kunjungan AIIB</option>
                                <option value="43">20180314 Rakorda BKKBN 2018</option>
                                <option value="44">20180315 Gubernur DIY Menerima Kunjungan KBRI Singapura</option>
                                <option value="45">20180315 Pelantikan Perwosi DIY Oleh GKR Hemas</option>
                                <option value="46">20180319 Wagub DIY Buka Popda DIY di GOR Among Raga</option>
                                <option value="50">2018032 Rapat Paripurna 23 Maret 2018</option>
                                <option value="47">20180320 Wagub DIY Menerima Audiensi Semnas Internal Audit</option>
                                <option value="48">20180320 Wagub DIY Menerima Panitia Tour de Jogja</option>
                                <option value="49">20180321 ATPUSI DIY Audiensi dengan Wagub DIY</option>
                                <option value="51">20180325 Tour de Jogja di Prambanan Dilepas Wagub DIY</option>
                                <option value="52">20180326 Laporan BPKP Diterima Wagub DIY</option>
                                <option value="53">20180329 Paripurna DPRD DIhadiri Wagub DIY</option>
                                <option value="54">20180402 Audiensi BPOM DIY kepada Wagub DIY</option>
                                <option value="55">20180403 Arahan Wagub Bersama BPK</option>
                                <option value="56">20180406 Gubernur DIY Menerima Audiensi KPU</option>
                                <option value="58">20180406 Panitia Rally Otomotif Yogyakarta Audiensi dengan Wagub DIY
                                </option>
                                <option value="57">20180406 Wagub DIY Menerima Audiensi Panitia Panahan</option>
                                <option value="60">20180409 Audiensi BPOM DIY kepada Gubernur DIY</option>
                                <option value="59">20180409 Wagub DIY Buka Muswil ABP PTSI di Inna Garuda</option>
                                <option value="61">20180411 Gubernur DIY Meresmikan Gedung Olifant School </option>
                                <option value="22">20180411 Peringatan Hari Bapak Pramuka Indonesia</option>
                                <option value="62">20180412 Wagub DIY Menerima Audiensi Panitia Dies Natalis UNY
                                </option>
                                <option value="63">20180412 Wagub DIY Menerima Kunjungan LPPOM MUI DIY</option>
                                <option value="66">20180413 Gubernur DIY Menerima Kunjungan IHGMA</option>
                                <option value="65">20180413 Gubernur DIY Terima Audiensi KONI DIY</option>
                                <option value="67">20180413 Wakil Gubernur DIY Membuka Jumputan on The Street</option>
                                <option value="68">20180416 Wakil Gubernur DIY Hadiri Milad ke-75 UII</option>
                                <option value="69">20180418 Staf Ahli Sosbud Membuka Seminar ATPUSI</option>
                                <option value="71">20180419 Foto Sekjen Kementrian Lingkungan Hidup Diterima Gubernur
                                    DIY</option>
                                <option value="70">20180419 Sosialisasi Pengutamaan Penggunaan Bahasa Negara</option>
                                <option value="72">20180420 Pelantikan Menwa oleh Wagub DIY di Bangsal Kepatihan
                                </option>
                                <option value="73">20180422 Pemda DIY Muhibah Budaya di Kabupaten Magetan</option>
                                <option value="75">20180423 Gubernur DIY Buka Nordicway di UGM</option>
                                <option value="76">20180423 Jamuan Sekda DIY Bersama Dubes Negara Nordic</option>
                                <option value="74">20180423 Wakil Gubernur DIY Hadiri 3rd Asia Pacific Rainforest Summit
                                    2018</option>
                                <option value="77">20180424 Wakil Gubernur DIY Hadiri Peresmian Koleksi Baru Museum
                                    Dirgantara</option>
                                <option value="79">20180425 KPU Kota Yogya Coklit Data Wakil Gubernur DIY </option>
                                <option value="78">20180425 Upacara Hari Otonomi Daerah ke-22 di Kepatihan</option>
                                <option value="80">20180426 Upacara Hari Kesiapsiagaan Bencana di BPBD</option>
                                <option value="81">20180427 Audiensi PKK Provinsi Riau kepada Ibu Wakil Gubernur DIY
                                </option>
                                <option value="92">20180502 Wagub DIY Terima Kunjungan Komisi VI DPR RI</option>
                                <option value="82">20180503 Launching Toko Tani BKPP</option>
                                <option value="199">20180505 Gubernur DIY Hadiri Raker IHGMA di Hotel Mercure</option>
                                <option value="200">20180506 Gubernur DIY Hadiri Halun Pantai Baru Bantul</option>
                                <option value="84">20180508 Dinner Jogja International Travel Mart</option>
                                <option value="83">20180508 Pantauan Harga di Pasar Wates Dipimpin Asisten Perekonomian
                                </option>
                                <option value="85">20180512 Pisah Sambut Forkopimda dengan Gubernur DIY di Kepatihan
                                </option>
                                <option value="91">20180516 Gubernur DIY Lantik Pejabat di Lingkungan Pemda DIY</option>
                                <option value="86">20180518 Safari Tarawih Pemda DIY di Bangsal Kepatihan</option>
                                <option value="87">20180520 Ziarah Makam dr. Wahidin Hari Kebangkitan Nasional</option>
                                <option value="201">20180522 Gubernur DIY Menerima Kunjungan Wakil Ketua DPR RI</option>
                                <option value="88">20180524 Dialog Gubernur DIY dengan PNS Luar Negeri</option>
                                <option value="89">20180528 Dirjen Kebudayaan Temui Gubernur DIY</option>
                                <option value="93">20180528 Wakil Ketua DPR RI Fadli Zon Audiensi dengan Gubernur DIY
                                </option>
                                <option value="202">20180529 Gubernur DIY Hadiri Waisak di Candi Sewu</option>
                                <option value="204">20180530 Gubernur DIY Menerima Audiensi Panitia YGF</option>
                                <option value="203">20180530 Gubernur DIY Menerima Kunjungan Dubes Srilanka</option>
                                <option value="90">20180531 Gubernur DIY Menerima Audiensi Kadin DIY</option>
                                <option value="97">20180602 Safari Tarawih dan Nuzulul Quran Pemda DIY di Kraton
                                    Yogyakarta</option>
                                <option value="101">20180604 Alumni SMA 6 Yogyakarta Audiensi dengan Gubernur DIY
                                </option>
                                <option value="102">20180604 Gubernur DIY Menerima Audiensi KPU DIY</option>
                                <option value="103">20180606 Konferensi Pers Bulan Pancasila</option>
                                <option value="99">20180612 Wagub DIY Pantau Posko Mudik Jelang Lebaran</option>
                                <option value="98">20180615 Sholat Idul Fitri dan Grebeg Syawal di Alun-alun Utara
                                    Yogyakarta</option>
                                <option value="95">20180621 Open House di Kepatihan Yogyakarta</option>
                                <option value="205">20180622 Syawalan Pejabat di Bangsal Kepatihan</option>
                                <option value="96">20180622 Wagub DIY Terima Kunjungan Paguyuban Werkreise</option>
                                <option value="100">20180625 Syawalan Gubernur DIY di Pemkab Bantul</option>
                                <option value="206">20180626 Syawalan Gubernur DIY di Pemkab Sleman</option>
                                <option value="94">20180628 Gubernur DIY Beri Tali Asih Pebalap Jogja Berprestasi
                                </option>
                                <option value="207">20180629 Syawalan Gubernur DIY di Pemkot Yogya</option>
                                <option value="208">20180703 Syawalan Gubernur DIY ke Pemkab Kulonprogo</option>
                                <option value="210">20180705 Kunker DPRD Sumbar ke Pemda DIY</option>
                                <option value="115">20180705 Pembukaan Porwada oleh Gubernur DIY</option>
                                <option value="209">20180705 Wagub DIY Hadiri Pamitan Haji di Bangsal Kepatihan</option>
                                <option value="215">20180706 PWI Audiensi dengan Gubernur DIY di Kraton Kilen</option>
                                <option value="216">20180709 Syawalan Wagub DIY di Gembira Loka Yogyakarta</option>
                                <option value="112">20180709 Wagub DIY Menerima Audiensi ORARI DIY</option>
                                <option value="217">20180711 Jumpa Pers Kowani Dihadiri Sekda DIY</option>
                                <option value="107">20180711 Wagub DIY Menerima Audiensi Forum Edukasi</option>
                                <option value="118">20180711 Wagub DIY Menerima Audiensi Perkumpulan Layang-layang
                                </option>
                                <option value="113">20180712 Pelantikan BPSK oleh Sekda DIY di Gedhong Pracimosono
                                    Kepatihan Yogyakarta</option>
                                <option value="108">20180714 Gubernur DIY Resmikan Masjid Al Mukarom Gamping Sleman
                                </option>
                                <option value="106">20180716 Gubernur DIY Menerima Audiensi Direksi Angkasa Pura I
                                </option>
                                <option value="218">20180717 Gubernur DIY Menerima Kunjungan Gubernur New South Wales
                                    Australia</option>
                                <option value="219">20180717 Gubernur DIY Sambut Obor Api Asian Games di DIY</option>
                                <option value="117">20180717 Wagub DIY Resmikan Baksos TNI-KB</option>
                                <option value="220">20180718 Penerimaan Obor Api Asian Games 2018 di Kraton Yogyakarta
                                </option>
                                <option value="104">20180718 Wapres RI Menyalakan Api Obor Asian Games di Candi
                                    Prambanan</option>
                                <option value="105">20180719 Gubernur DIY Menerima Audiensi BPOM</option>
                                <option value="221">20180719 Wagub DIY Menerima Audiensi KR</option>
                                <option value="110">20180720 Wagub DIY Hadiri HUT Bantul di Lapangan Trirenggo</option>
                                <option value="114">20180723 Pembukaan FKY oleh Sekda DIY di Malioboro</option>
                                <option value="169">20180723 Pemda DIY Terima Penghargaan Dalam Peringatan Hari Anak
                                    Nasional 2018</option>
                                <option value="222">20180723 Wagub DIY Terima Penghargaan Hari Anak di Surabaya
                                </option>
                                <option value="223">20180725 Gelar Pengawasan Daerah Inspektorat</option>
                                <option value="111">20180725 HUT 56 PWRI DI WIYATA PRAJA</option>
                                <option value="224">20180727 Gubernur DIY Hadiri Orasi Kebangsaan di Bangsal Kepatihan
                                </option>
                                <option value="116">20180728 Gubernur DIY Buka Pagelaran Wayang di Museum Sandi</option>
                                <option value="229">20180729 Gubernur DIY Hadiri Hari Bakti TNI AU</option>
                                <option value="109">20180731 Sekda DIY Hadiri Hari Keluarga di Stadion Sultan Agung
                                    Bantul</option>
                                <option value="171">20180805 Gubernur DIY Meninjau Kebun Percontohan Yayasan Bakti Yogya
                                </option>
                                <option value="230">20180806 Gubernur DIY Menerima Audiensi Junior Chamber International
                                </option>
                                <option value="121">20180807 Dahar Kembul Bersama Gubernur DIY</option>
                                <option value="124">20180809 Sekda DIY Hadiri Perayaan Hari Anak di Taman Budaya
                                    Yogyakarta</option>
                                <option value="123">20180813 Gubernur DIY Menerima Kunjungan UNESCO</option>
                                <option value="231">20180813 Gubernur DIY Menghadiri Launching SDGs </option>
                                <option value="125">20180814 Upacara Hari Pramuka Dihadiri Gubernur DIY</option>
                                <option value="129">20180817 Resepsi Hari Kemerdekaan RI di Kepatihan</option>
                                <option value="128">20180817 Upacara Hari Kemerdekaan di Istana Kepresidenan Yogyakarta
                                </option>
                                <option value="232">20180818 Gubernur DIY Kunjungi Korban Gempa di Lombok</option>
                                <option value="126">20180823 Wagub DIY Hadiri LPPD di Royal Darmo Yogyakarta</option>
                                <option value="122">20180824 Gubernur DIY Menerima Kunjungan Tamu Kyoto</option>
                                <option value="120">20180827 Gubernur DIY Menerima Audiensi Basarnas </option>
                                <option value="127">20180830 Wagub DIY Hadiri Pimnas di GOR UNY</option>
                                <option value="119">20180831 Gubernur DIY Menerima Audiensi Bapenas</option>
                                <option value="142">20180901 Gubernur DIY Ikuti Simposium Budaya</option>
                                <option value="132">20180903 Wagub DIY Hadiri Konges IAHR di Ambarrukmo</option>
                                <option value="136">20180907 Wagub DIY Melepas Rombongan PMI DIY</option>
                                <option value="143">20180908 Wagub DIY Hadiri Tanam Pohon Komunitas Peugeout</option>
                                <option value="138">20180912 Perekaman Data Taspen untuk Gubernur dan Wagub DIY</option>
                                <option value="131">20180914 Kongres ICW Dibuka Presiden di Inna Garuda</option>
                                <option value="133">20180914 NPC Pamitan ke Wagub DIY untuk Asian Para Games</option>
                                <option value="137">20180917 Pembukaan OOSN Dihadiri Mendikbud di UMY</option>
                                <option value="134">20180918 Gubernur DIY Menerima Audiensi Organda DIY</option>
                                <option value="140">20180919 Gubernur DIY Menerima Kunjungan Presiden Parlemen Ceko
                                </option>
                                <option value="139">20180921 Gubernur DIY Menerima Audiensi Perisai Diri</option>
                                <option value="130">20180923 Deklarasi Kampanye Damai KPU di Kepatihan</option>
                                <option value="144">20180924 Wagub DIY Hadiri Upacara Agraria di STPN</option>
                                <option value="135">20180927 Wagub DIY Menerima Peserta MTQ dan Pesparani Pamitan
                                </option>
                                <option value="141">20180929 Sekda DIY Hadiri Seminar Bencana di Amikom</option>
                                <option value="64">20181001 Upacara Peringatan Hari Kesaktian Pancasila tahun 2018
                                </option>
                                <option value="151">20181003 Gubernur DIY Hadiri Diskusi Impact of Batik</option>
                                <option value="147">20181004 Gubernur DIY Menerima Audiensi Forum Dokter Kandungan
                                </option>
                                <option value="156">20181005 Wagub DIY Hadiri Wayangan di Kepatihan</option>
                                <option value="148">20181008 Gubernur DIY Menerima Audiensi Kadin Terkait Jogja Heboh
                                </option>
                                <option value="153">20181008 Gubernur DIY Menerima Panitia Hari Santri</option>
                                <option value="149">20181009 Kunjungan APPSI di Kepatihan Yogyakarta</option>
                                <option value="154">20181010 Peresmian Sekolah Siaga Bencana Gunungkidul</option>
                                <option value="150">20181011 Kunjungan Kerja DPRD Bali</option>
                                <option value="155">20181015 Gubernur DIY Menerima Kunjungan BPPT</option>
                                <option value="152">20181016 Wagub DIY Menerima Audiensi Action UGM</option>
                                <option value="145">20181018 Gubernur DIY Hadiri Dinner SDM Polda se-Indonesia</option>
                                <option value="146">20181020 FGD Keluarga Anti Narkoba di Pracimasono</option>
                                <option value="159">20181024 Pertemuan Menteri ASEAN-Asia di Hyatt</option>
                                <option value="158">20181025 Wagub DIY Hadiri Kongres ATCSA di Ambarrukmo</option>
                                <option value="157">20181026 Wagub DIY Menerima Audiensi Alma Ata</option>
                                <option value="164">20181101 Penandatanganan MoU Kepala Daerah dan Penegak Hukum DIY
                                </option>
                                <option value="167">20181101 Pengarahan Gubernur DIY kepada Peserta Diklat PNS</option>
                                <option value="163">20181102 Gubernur DIY Menyaksikan MoU dari BPD DIY</option>
                                <option value="166">20181110 Sekda DIY Hadiri Upacara Hari Pahlawan di TMP Kusumanegara
                                </option>
                                <option value="165">20181116 Panitia Hari Ibu Audiensi ke GKR Hemas</option>
                                <option value="162">20181118 Lomba Baris Berbaris Pelajar Dibuka Sekda DIY</option>
                                <option value="161">20181121 Kongres Kebudayaan Jawa di Surabaya</option>
                                <option value="160">20181125 Gubernur DIY Menerima Kunjungan Dubes Polandia</option>
                                <option value="168">20181128 Sekda DIY Hadiri Hari Guru di Pemkab Sleman</option>
                                <option value="184">20181202 Sekda DIY Hadiri Upacara Hari Bhakti PU</option>
                                <option value="185">20181203 GKR Hemas Diskusi di Bangunjiwo</option>
                                <option value="180">20181204 Rakorda Harga Pasar oleh Kemendag di Inna Garuda Hotel
                                </option>
                                <option value="170">20181205 Gerakan Tanam Sayur BKKP di Gunungkidul</option>
                                <option value="186">20181205 Gubernur DIY Menerima Audiensi Imigrasi</option>
                                <option value="187">20181205 Gubernur DIY Menerima Audiensi KPPN</option>
                                <option value="188">20181206 Diskominfo DIY Terima Penghargaan IT Telco </option>
                                <option value="179">20181206 Satu Abad Mualimin Yogyakarta Dihadiri Presiden RI</option>
                                <option value="183">20181210 Gubernur DIY Menerima Audiensi MMTC</option>
                                <option value="189">20181213 Penghargaan Sidakarya oleh Sekda DIY</option>
                                <option value="173">20181214 Deklarasi Cegah Stunting Dinkes DIY di Among Raga</option>
                                <option value="190">20181214 Gubernur DIY Menyerahkan Anugerah Kebudayaan </option>
                                <option value="177">20181215 Peresmian Balai Desa Caturtunggal oleh Gubernur DIY
                                </option>
                                <option value="191">20181218 Festival India di Taman Budaya Yogyakarta</option>
                                <option value="175">20181218 Penyerahan DIPA oleh Gubernur DIY</option>
                                <option value="192">20181219 Gubernur DIY Hadiri Dies Natalis UGM</option>
                                <option value="182">20181220 Gubernur DIY Menerima Audiensi Migas</option>
                                <option value="193">20181220 Konferensi Pers Gubernur DIY di Balaikota Yogya</option>
                                <option value="174">20181220 Penyerahan Bantuan LPSK ke Korban Teroris Gereja Gamping
                                </option>
                                <option value="176">20181220 Penyerahan SK Pensiun oleh Sekda DIY</option>
                                <option value="181">20181220 Rapat Forkopimda Jelang Natal &amp; Tahun Baru 2019
                                </option>
                                <option value="194">20181221 Pelantikan FKPPI oleh Sekda DIY</option>
                                <option value="195">20181221 Pencanangan Pedestrian Kota Baru oleh Gubernur DIY</option>
                                <option value="196">20181221 Pencanangan Pedestrian Malioboro oleh Gubernur DIY</option>
                                <option value="172">20181223 Gubernur DIY Resmikan Gereja di Cupuwatu Kalasan Sleman
                                </option>
                                <option value="197">20181227 Sekda DIY Hadiri Rakor Forkopimda </option>
                                <option value="178">20181228 Perpisahan Asisten Keistimewaan di Ruang Sekda DIY</option>
                                <option value="212">20190123 Sekda DIY Buka Munas Hiswana Migas</option>
                                <option value="211">20190124 Rakordal Triwulan IV/2018 </option>
                                <option value="214">20190129 Gubernur DIY Resmikan Masjid Musyawaroh Kasihan Bantul
                                </option>
                                <option value="213">20190129 Press Conference Pelaksanaan Pekerjaan Jl. Gito-gati,
                                    Sleman</option>
                                <option value="226">20190130 Gubernur DIY Menerima Audiensi Danlanal Yogyakarta</option>
                                <option value="225">20190130 Gubernur DIY Menerima Audiensi Kepala Pengadilan Tinggi
                                    Agama DIY</option>
                                <option value="227">20190130 Jumpa Pers Hadeging Pakualaman</option>
                                <option value="228">20190130 Wagub DIY Hadiri Sosialisasi DAK BKKN di Hotel Ambarrukmo
                                </option>
                                <option value="233">20190131 Gubernur DIY Membuka Jogja Heboh 2019</option>
                                <option value="234">20190202 Gubernur DIY Resmikan Gedung Akademi Komunitas Seni dan
                                    Budaya Yogyakarta</option>
                                <option value="236">20190202 Wagub DIY Hadiri Peresmian Gedung IsDB UNY Oleh
                                    Menristekdikti</option>
                                <option value="235">20190204 Kunjungan Universitas Wiralodra Indramayu ke Pemda DIY
                                </option>
                                <option value="237">20190205 Pengetan Hadeging Nagari Karaton Ngayogyakarta Hadiningrat
                                </option>
                                <option value="238">20190207 Wagub DIY Sambut Negara Perwakilan MIKTA di Abhayagiri
                                </option>
                                <option value="239">20190212 Gubernur DIY Hadiri Advocacy Horizontal Learning di
                                    Makassar</option>
                                <option value="240">20190213 Pembukaan PBTY 2019</option>
                                <option value="242">20190219 Pemda DIY Raih Predikat AA</option>
                                <option value="241">20190219 Wagub DIY Menerima Kunjungan Wamenlu dan Dubes Hungaria
                                </option>
                                <option value="243">20190225 Wagub DIY Menerima Audiensi Danlanud</option>
                                <option value="244">20190225 Wagub DIY Menerima Panitia Hari Down Syndrom </option>
                                <option value="245">20190225 Wagub DIY Menerima Panitia HUT RSUP Dr Sardjito</option>
                                <option value="246">20190226 Gubernur DIY Menerima Audiensi Panitia Earth Hour</option>
                                <option value="247">20190227 Gubernur DIY Menerima Audiensi Direksi RSPU Dr Sardjito
                                </option>
                                <option value="248">20190227 Pembukaan Forum Desentralisasi Asimetris Indonesia
                                    (FORDASI)</option>
                                <option value="250">20190301 Closing Ceremony Jogja Heboh</option>
                                <option value="249">20190301 Gubernur DIY Menyambut Dubes Thailand</option>
                                <option value="251">20190302 Pagelaran Wayang Kulit Dalam Rangka Peringatan Serangan
                                    Umum 1 Maret</option>
                                <option value="252">20190304 Gubernur DIY Menerima Kunjungan Dubes RI untuk Rusia
                                </option>
                                <option value="253">20190304 Rombongan Walikota Bukittinggi Temui Gubernur DIY</option>
                                <option value="254">20190305 Pembukaan Simposium Internasional Budaya Jawa dan Naskah
                                    Keraton Yogyakarta</option>
                                <option value="259">20190307 Sultan HB X Buka Pameran Naskah Kraton Yogyakarta</option>
                                <option value="258">20190312 Wagub DIY Hadiri Rakor Pengembangan Destinasi Wisata
                                </option>
                                <option value="256">20190314 Gubernur DIY Kunjungi Stand DIY Dalam International Reform
                                    Symposium &amp; Regional Workshop </option>
                                <option value="255">20190314 Gubernur DIY Menjadi Narasumber Dalam International Reform
                                    Symposium &amp; Regional Workshop </option>
                                <option value="257">20190314 Sekda DIY Jadi Inspektur Upacara HUT Satpol PP</option>
                                <option value="260">20190320 Gubernur DIY Hadiri Dialog Kebangsaan Pujakesuma Palembang
                                </option>
                                <option value="261">20190322 Gubernur DIY Kunjungi Lokasi Banjir di Bantul</option>
                                <option value="262">20190323 Wagub DIY Hadiri Perayaan Nyepi di Bangsal Kepatihan
                                </option>
                                <option value="263">20190327 Gubernur DIY Menerima Audiensi Dirjen Bina Marga KemenPUPR
                                </option>
                                <option value="264">20190328 Gubernur DIY Jadi Penguji Kehormatan Pascasarjana ISI
                                    Surakarta</option>
                                <option value="265">20190401 Wagub DIY Hadiri Donor Darah Hari Kesetiakawanan Nasional
                                </option>
                                <option value="269">20190410 Yogya Semesta - Keraton Milenial</option>
                                <option value="267">20190411 Wagub DIY Hadiri Musrenbang RKPD DIY</option>
                                <option value="266">20190415 DIY Siap Fasilitasi SOMMLAT ASEAN</option>
                                <option value="270">20190415 Gubernur DIY Menerima Audiensi Kemenkumham RI</option>
                                <option value="268">20190416 Doa Bersama Jelang Pemilu di Gedhong Pracimasono</option>
                                <option value="271">20190424 Gubernur DIY Mendampingi Menteri Perhubungan dan Menteri
                                    Hukum dan HAM Meninjau Bandara YIA</option>
                                <option value="272">20190425 Gubernur DIY bersama Menteri Kominfo RI Menghadiri Rakordal
                                    Triwulan I 2019</option>
                                <option value="273">20190425 Pemutaran Film Ramavatar Dihadiri Sekda DIY</option>
                                <option value="274">20190426 Gubernur DIY Menerima Kunjungan Wakil PM Thailand</option>
                                <option value="276">20190501 Courtesy Call Gubernur DIY dan Dubes Bulgaria di Kraton
                                    Kilen</option>
                                <option value="275">20190502 Penanaman Pohon Cemara Udang di Pantai Glagah</option>
                                <option value="277">20190503 Senam Rakyat, Perwujudan Jogja untuk Indonesia</option>
                                <option value="278">20190507 Wakil Gubernur DIY Menerima Audiensi DPD GIPI DIY</option>
                                <option value="279">20190513 DIY Bersama 6 Provinsi Se-Jawa Bali Tandatangani Komitmen
                                    Eliminasi Malaria</option>
                                <option value="280">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                </option>
                            </select>
                        </div>
                    </form>
                    <br /><br />

                    <div class="row media-row">
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7106/DSC00208%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="996">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7106/DSC00208%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7105/DSC00353%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="995">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7105/DSC00353%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7104/DSC00631%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="994">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7104/DSC00631%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7103/DSC00176%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="993">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7103/DSC00176%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7102/DSC00502%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="992">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7102/DSC00502%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7101/DSC00532%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="991">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7101/DSC00532%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7100/DSC00587%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="990">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7100/DSC00587%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7099/DSC00357%20copy.jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="989">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7099/DSC00357%20copy.jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="album-item">
                                <a href="view_image/resize_no_frame/800/800/7098/10062019_Open_House_Pemda_DIY%20(01).jpg"
                                    data-fancybox="gallery" class="thumbnail"
                                    title="Open House Gubernur dan Wakil Gubernur DIY di Kepatihan"
                                    data-caption="<p style='font-weight:bold;color:#c0392b;'>OPEN HOUSE GUBERNUR DAN WAKIL GUBERNUR DIY DI KEPATIHAN</p>"
                                    id="988">
                                    <div class="bg"
                                        style="background-image: url('view_image/resize_no_frame/800/800/7098/10062019_Open_House_Pemda_DIY%20(01.jpg).jpg');background-size:contain;"
                                        title=""></div>
                                    <i class="fa fa-camera icon fa-2x"
                                        style="color: lightgray;right: 10px;position: absolute;top: 7px;"></i>
                                </a>
                                <div class="info">
                                    <div class="title">20190610 Open House Gubernur dan Wakil Gubernur DIY di Kepatihan
                                    </div>
                                    <div class="cat">Open House Gubernur dan Wakil Gubernur DIY di Kepatihan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />

                    <div class="paging text-center">
                        <ul class="pagination">
                            <li class="active"><a href="media/index6b43.html?page=1&amp;per-page=9" data-page="0">1</a>
                            </li>
                            <li><a href="media/index98b2.html?page=2&amp;per-page=9" data-page="1">2</a></li>
                            <li><a href="media/index4128.html?page=3&amp;per-page=9" data-page="2">3</a></li>
                            <li><a href="media/indexdd9e.html?page=4&amp;per-page=9" data-page="3">4</a></li>
                            <li><a href="media/index8e62.html?page=5&amp;per-page=9" data-page="4">5</a></li>
                            <li><a href="media/index5be6.html?page=6&amp;per-page=9" data-page="5">6</a></li>
                            <li><a href="media/indexabb3.html?page=7&amp;per-page=9" data-page="6">7</a></li>
                            <li><a href="media/index49ed.html?page=8&amp;per-page=9" data-page="7">8</a></li>
                            <li><a href="media/index1739.html?page=9&amp;per-page=9" data-page="8">9</a></li>
                            <li><a href="media/index674c.html?page=10&amp;per-page=9" data-page="9">10</a></li>
                            <li class="next"><a href="media/index98b2.html?page=2&amp;per-page=9"
                                    data-page="1">&rsaquo;</a></li>
                            <li class="last"><a href="media/index8e1c.html?page=108&amp;per-page=9"
                                    data-page="107">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.search').change(function () {
            $('#form-search').submit();
            return false;
        });
        $('.thumbnail').click(function () {
            var id_galeri = $(this).attr('id');

            var href = "/media/set_view/" + id_galeri;
            $.ajax({
                url: href,
                success: function (data) {}
            });

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
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery.when(jQuery('#galerisearch-id_galeri_kategori').select2(select2_1e4f2d59)).done(
                initS2Loading('galerisearch-id_galeri_kategori', 's2options_d6851687'));

            jQuery('#form-search').yiiActiveForm([{
                "id": "galerisearch-id_galeri_kategori",
                "name": "id_galeri_kategori",
                "container": ".field-galerisearch-id_galeri_kategori",
                "input": "#galerisearch-id_galeri_kategori",
                "validate": function (attribute, value, messages, deferred, $form) {
                    yii.validation.number(value, messages, {
                        "pattern": /^\s*[+-]?\d+\s*$/,
                        "message": "Album harus berupa integer.",
                        "skipOnEmpty": 1
                    });
                }
            }], []);
            jQuery('#w0').yiiActiveForm([], []);
        });

    </script>
@endsection