<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Universitas Erlangga Teknologi</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        .tentang-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .tentang-section {
            margin-bottom: 40px;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .tentang-section h2, .tentang-section h3 {
            color: #004a99;
            margin-bottom: 15px;
        }
        .tentang-section p {
            line-height: 1.6;
            color: #333;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .stat-item {
            text-align: center;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            color: #004a99;
        }
    </style>
</head>
<body>
    <div class="tentang-container">
        <div class="tentang-section">
            <h2>Tentang Universitas Erlangga Teknologi</h2>
            <p>Universitas Erlangga Teknologi (UET) adalah sebuah institusi pendidikan tinggi yang berfokus pada bidang
                teknologi dan inovasi. UET didirikan dengan tujuan untuk memberikan pendidikan berkualitas tinggi dalam bidang teknologi,
                serta mendorong penelitian dan pengembangan di berbagai disiplin ilmu terkait.</p>
        </div>

        <div class="tentang-section">
            <h3>Visi Kami</h3>
            <p>Menjadi universitas teknologi unggulan yang mendorong inovasi dan karya ilmiah yang bermakna untuk kemajuan bangsa dan kesejahteraan manusia.</p>
        </div>

        <div class="tentang-section">
            <h3>Misi Kami</h3>
            <ul>
                <li>Menyediakan pendidikan teknologi berkualitas tinggi yang sesuai dengan kebutuhan industri dan masyarakat</li>
                <li>Mendorong penelitian inovatif dalam bidang teknologi untuk menyelesaikan masalah-masalah global</li>
                <li>Membangun kemitraan strategis dengan industri dan lembaga internasional</li>
                <li>Mengembangkan sumber daya manusia yang kompeten dan berintegritas</li>
            </ul>
        </div>

        <div class="tentang-section">
            <h3>Sejarah Singkat</h3>
            <p>Universitas Erlangga Teknologi didirikan pada tahun 2020 sebagai respons terhadap kebutuhan akan tenaga ahli teknologi di era digital.
                Dengan dukungan dari pemerintah dan komunitas bisnis, UET berkembang pesat menjadi salah satu universitas teknologi terkemuka di Indonesia.</p>
        </div>

        <div class="tentang-section">
            <h3>Fakultas dan Program Studi</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                <div>
                    <h4>Fakultas Teknik Informatika</h4>
                    <ul>
                        <li>Teknik Informatika</li>
                        <li>Sistem Informasi</li>
                        <li>Teknologi Informasi</li>
                    </ul>
                </div>
                <div>
                    <h4>Fakultas Teknik Elektro</h4>
                    <ul>
                        <li>Teknik Elektro</li>
                        <li>Teknik Telekomunikasi</li>
                        <li>Teknik Komputer</li>
                    </ul>
                </div>
                <div>
                    <h4>Fakultas Teknik Sipil</h4>
                    <ul>
                        <li>Teknik Sipil</li>
                        <li>Arsitektur</li>
                        <li>Teknik Lingkungan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">5000+</div>
                <p>Mahasiswa Aktif</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">200+</div>
                <p>Dosen & Staf</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <p>Program Studi</p>
            </div>
            <div class="stat-item">
                <div class="stat-number">95%</div>
                <p>Tingkat Kelulusan</p>
            </div>
        </div>

        <div class="tentang-section">
            <h3>Komitmen Kami</h3>
            <p>Kami berkomitmen untuk:</p>
            <ul>
                <li>Memberikan pendidikan yang inklusif dan berkualitas</li>
                <li>Mendorong inovasi dan kreativitas mahasiswa</li>
                <li>Membangun lingkungan kampus yang aman dan nyaman</li>
                <li>Berkontribusi pada pembangunan masyarakat melalui penelitian dan pengabdian</li>
            </ul>
        </div>
    </div>
</body>
</html>