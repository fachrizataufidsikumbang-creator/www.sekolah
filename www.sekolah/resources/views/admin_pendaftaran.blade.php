<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran | Universitas Erlangga Teknologi</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
        }
        .dashboard-wrapper {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 260px;
            background-color: #0f172a;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: fixed;
            height: 100vh;
        }
        .sidebar-logo {
            padding: 20px 0;
            border-bottom: 1px solid #1e293b;
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar-logo h2 {
            font-size: 1.2rem;
            letter-spacing: 1px;
            color: #3b82f6;
        }
        .nav-menu {
            flex-grow: 1;
        }
        .nav-menu ul {
            list-style: none;
        }
        .nav-menu li {
            margin-bottom: 8px;
        }
        .nav-menu a {
            color: #94a3b8;
            text-decoration: none;
            padding: 12px 15px;
            display: block;
            border-radius: 8px;
            transition: all 0.3s;
            font-size: 0.95rem;
        }
        .nav-menu li.active a, .nav-menu a:hover {
            background-color: #1e293b;
            color: #3b82f6;
            font-weight: 600;
        }
        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid #1e293b;
        }
        .main-container {
            flex-grow: 1;
            margin-left: 260px;
            display: flex;
            flex-direction: column;
        }
        .topbar {
            background: white;
            padding: 15px 40px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .user-name {
            font-weight: 600;
            color: #334155;
        }
        .content-area {
            padding: 40px;
        }
        .page-header {
            margin-bottom: 30px;
        }
        .page-header h1 {
            color: #0f172a;
            font-size: 1.8rem;
        }
        .table-container {
            background: white;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            border: 1px solid #e5e7eb;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }
        th {
            background-color: #f8fafc;
            font-weight: 600;
            color: #475569;
        }
        tr:hover {
            background-color: #f8fafc;
        }
        .badge-online {
            background: #dcfce7;
            color: #15803d;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .btn-logout {
            width: 100%;
            padding: 12px;
            background-color: #ef4444;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .btn-logout:hover {
            background-color: #dc2626;
        }
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="dashboard-wrapper">
        <aside class="sidebar">
            <div class="sidebar-logo">
                <h2>ADMIN SYSTEM KAMPUS</h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active"><a href="{{ route('admin.pendaftaran') }}">Data Pendaftaran</a></li>
                    <li><a href="#">Calon Mahasiswa</a></li>
                    <li><a href="#">Pengaturan</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        Logout
                    </button>
                </form>
            </div>
        </aside>
        <main class="main-container">
            <header class="topbar">
                <div class="user-profile">
                    <span class="badge-online">Online</span>
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </div>
            </header>
            <section class="content-area">
                <div class="page-header">
                    <h1>Data Pendaftaran Mahasiswa Baru</h1>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Fakultas</th>
                                <th>Prodi</th>
                                <th>Tanggal Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pendaftar as $p)
                            <tr>
                                <td>{{ $p->idpendaftar }}</td>
                                <td>{{ $p->namalengkap }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->no_hp }}</td>
                                <td>{{ $p->tgllahir }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->namafakulitas }}</td>
                                <td>{{ $p->namaprodi }}</td>
                                <td>{{ $p->created_at->format('d M Y H:i') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="empty-state">Belum ada data pendaftaran</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

