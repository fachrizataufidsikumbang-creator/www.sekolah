# TODO: Sinkronisasi Admin Login & Dashboard

## Step 1: Fix AuthConroller.php
- [x] Sinkronkan login pakai username
- [x] Perbaiki validasi credentials
- [x] Perbaiki onlyInput('username')

## Step 2: Fix routes/web.php
- [x] Ganti AdminController::dashboard → index
- [x] Perbaiki typo ROUTE::get → Route::get
- [x] Perbaiki route admin.dashboard

## Step 3: Fix AdminController.php
- [x] Ganti view layouts.admin → admin
- [x] Pastikan variabel tetap dikirim

## Step 4: Fix admin.blade.php
- [x] Hapus duplikat @extends('layouts.app')
- [x] Perbaiki typo HTML/CSS
- [x] Perbaiki struktur tag penutupan
- [x] Perbaiki route admin.dashboard
- [x] Tampilkan data PendaftarTerbaru
- [x] Perbaiki badge-online placement

## Step 5: Fix login.blade.php
- [x] Hapus duplikat @extends('layouts.app')
- [x] Perbaiki typo class form-group
- [x] Pertahankan login pakai username

## Step 6: Fix Migration Pendaftaran
- [x] Perbaiki in+teger → integer
- [x] Perbaiki down() drop pendaftars

## Step 7: Run migration & seeder
- [x] php artisan migrate:fresh --seed
- [x] UserSeeder berhasil (admin created)

## Step 8: Test login admin
- [x] Akun admin tersedia: username `admin`, password `admin123`
- [x] Route /login → AuthConroller → validasi username & password → redirect /admin
- [x] Dashboard /admin menampilkan total pendaftar & pendaftar terbaru
- [x] Menu sidebar link ke Data Pendaftaran aktif

