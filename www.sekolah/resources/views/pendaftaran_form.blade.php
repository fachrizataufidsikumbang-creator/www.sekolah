<main class="main-content">
    <div class="pendaftaran-Section">
        {{-- Menggunakan Variabel dari Route --}}
<h2> Formulir Pendaftaran Mahasiswa Baru Tahun {{ $tahun_pendaftaran ?? date('Y') }}</h2>
        <p style="text-align: center;">Isi formulir di bawah ini dengan data yang benar
            dan lengkapi untuk mendafatar di {{ $nama_kampus }}.</p>
            @if(session('success'))
            <div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
               <strong>Berhasil</strong> {{ session('success') }}
            </div>
            @endif
            @if(session('error'))
             <div style="padding: 15px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
                <strong>Gagal</strong> {{ session('error') }}
             </div>
            @endif
             {{-- Jika ada error validasi (misal email tidak valid atau ada field kosong) --}}
            @if ($errors->any())
                <div style="padding: 15px; background-color: #fff3cd; color: #856404; border: 1px solid #ffeeba; border-radius: 5px; margin-buttom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="registration-form-container">
            {{-- Form action diarahkan ke route POST di web.php --}}
            <form action="{{ route('pendaftaran.proses') }}" method="POST" class="registration-form">
                {{-- Wajib ada @csrf untuk keamanan Laravel --}}
                @csrf
            <h3>Data Pribadi Calon Mahasiswa</h3>
          <table>
    <tr>
        <td width="30%"><label for="nama_lengkap">Nama Lengkap</label></td>
        <td width="5%">:</td>
        <td><input type="text" id="nama_lengkap" name="nama_lengkap" 
        placeholder="Masukkan nama lengkap" required></td>
    </tr>

    <tr>
        <td><label for="email">Email Aktif</label></td>
        <td>:</td>
        <td><input type="email" id="email" name="email" 
        placeholder="contoh@email.com" required></td>
    </tr>

    <tr>
        <td><label for="telepon">Nomor Telepon/WA</label></td>
        <td>:</td>
        <td><input type="tel" id="telepon" name="telepon" 
        placeholder="0812345xxx" required></td>
    </tr>

    <tr>
        <td><label for="tanggal_lahir">Tanggal Lahir</label></td>
        <td>:</td>
        <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" required></td>
    </tr>

    <tr>
        <td style="padding: 10px 5px; vertical-align: top;"><label for="alamat">Alamat Lengkap</label></td>
        <td>:</td>
        <td><textarea id="alamat" name="alamat" rows="3" placeholder="Alamat rumah sekarang" required></textarea></td>
    </tr>
</table>
            <hr>
            <h3>Pilihan Program Studdi</h3>
            <table>
                <tr>
                    <td width="30%"><label for="fakulitas_pilihan">Fakulitas Pilihan</label></td>
                    <td width="5%">:</td>
                    <td>
                        <select id="fakulitas_pilihan" name="fakulitas_pilihan" required>
                        <option value="">-- Pilih Fakulitas --</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TK">Teknik Komputer</option>
                        <option value="TE">Teknik Elektro</option>
                        <option value="TS">Teknik Sipil</option> 
                    </select>
                </td>   
            </tr>
            <tr>
                <td><label for="prodi_pilihan">Program Studi Pilihan</label></td>
                <td>:</td>
                <td><select id="prodi_pilihan" name="prodi_pilihan" required>
                    <option value="">-- Pilih Program Studi --</option>
                    <option value="ILKOM">Ilmu Komputer</option>
                    <option value="MANBIZ">Manajemen Bisnis</option>
                    <option value="AKUNT">Akuntansi</option>
                    <option value="ARSI">Arsitektur</option>
                </select>
            </td>
        </tr>
    </table>
    <hr>
    <div class="form-group" style="padding: 10px 0;">
        <input type="checkbox" id="persetujuan" name="persetujuan" required>
        <label for="persetujuan" style="font-weight: normal;">Saya Menyatakan bahwa data yang saya isi itu benar</label>
    </div>
    <button type="submit" class="cta-button submit-button">Kirim Pendaftaran</button>
    </from>
</div>
        