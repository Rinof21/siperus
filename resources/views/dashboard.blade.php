@extends('layouts.app')
@section('title', 'Aplikasi Peminjaman Ruangan')
@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="alert alert-primary" role="alert">
                                SELAMAT DATANG, ANDA LOGIN SEBAGAI 
                                {{-- <strong>{{ auth()->user()->role }}</strong> --}}
                            </div>

                            {{-- @foreach ($peminjaman as $row)
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">{{ $row->namaruang}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Antiran {{ $row->jumlah }} Mahasiswa</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach --}}

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Peminjaman
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Waktu Peminjaman</th>
                                            <th>Nama Ruangan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Waktu Peminjaman</th>
                                            <th>Nama Ruangan</th>
                                        </tr>
                                    </tfoot>
                                    {{-- @foreach ($pj as $row)
                                    <tr>
                                        <td>{{ $row->nim }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->nama_prodi }}</td>
                                        <td>{{ $row->tgl_pinjam }}</td>
                                        <td>{{ $row->waktu_pinjam }}</td>
                                        <td>{{ $row->nama_ruangan }}</td>
                                    </tr>
                                    @endforeach --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                @endsection