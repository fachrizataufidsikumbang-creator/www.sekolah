<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman Utama - {{ $nama_kampus }} </title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>
    <header class="main-header">
        <div class="logo">
            <h1>{{ $nama_kampus }}</h1>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="javascript:void(0)" onclick="gantikonten('view-berita')">Beranda</a></li>
                <li><a href="javascript:void(0)" onclick="gantikonten('view-tentang')">Tentang Kami</a></li>
                <li><a href="javascript:void(0)" onclick="gantikonten('view-fakulitas')">Fakulitas</a></li>
                <li><a href="{{ url('/pendaftaran') }}">Pendaftaran</a></li>
                <li><a href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
        </nav>
</header>

    <main class="main-content">
        <section class="hero">
            <h2>Selamat Datang di {{ $nama_kampus }}</h2>
            <p>{{ $slogan }}</p>
            <a href="javascript:void(0)" onclick="gantikonten('view-pendaftaran')" class="cta-button">Daftar Sekarang</a></li>
        </section>

        <div id="konten-tukar">
            <div id="view-berita">
                <section class="barita-terbaru">
                    <h3> Berita Terbaru </h3>
                    <div class="cards-container">
                        <article class="news-card">
                            <h4>Seminar Nasional Teknologi AI</h4>
                            <p>Kampus kami mengadakan seminar besar tentang kecerdasan buatan.</p>
                        </article>
                    </div>
                </section>
            </div>
       </div>
       <div id="view-tentang" style="display: none;">
    <section class="berita-terbaru" style="background-color: #fff; padding: 40px; border-radius: 8px; margin: 20px 5%;">
        <div style="text-align: left; color: #333;">
            @include('profile.tentang')
        </div> </section>
</div>

<div id="view-fakulitas" style="display: none;">
    <section class="berita-terbaru" style="background-color: #fff; padding: 40px; border-radius: 8px; margin: 20px 5%;">
        @include('profile.fakulitas')
    </section>
</div>

<div id="view-pendaftaran" style="display: none;">
    <section class="berita-terbaru" style="background-color: #fff; padding: 40px; border-radius: 8px; margin: 20px 5%;">
        @include('pendaftaran_form') {{-- kita pindahkan kode form ke file  terpisah agar rapi --}}
    </section>
</div>  
            <section class="unggulan">
                <h3>Mengapa Memilih Kami?</h3>
                <ul>
                    <li style="display: inline-block; margin: 0 15px;">Akreditas Unggulan</li>
                    <li style="display: inline-block; margin: 0 15px;">Fasilitas Modern</li>
                    <li style="display: inline-block; margin: 0 15px;">Dosen Berpengalaman</li>
                </ul>
            </section>
        </main>

        <footer class="main-footer">
            <p>&copy;{{ date('Y')}} {{ $nama_kampus }} | Fachriza Taufid Sikumbang</p>
    </footer>
    <script>
        function gantikonten(idTujuan) {
            var daftarId = ['view-berita', 'view-tentang', 'view-fakulitas', 'view-pendaftaran'];
            daftarId.forEach(function(id) {
                var element = document.getElementById(id);
                if (element) {
                    element.style.display = 'none';
                }
            });
            var targetElement = document.getElementById(idTujuan);
            if (targetElement) {
                targetElement.style.display = 'block';
                if (idTujuan !== 'view-berita') {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }
    </script>
</body>
</html>