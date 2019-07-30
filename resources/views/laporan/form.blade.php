@extends('layouts.main')

@section('title', 'Buat Laporan')

@section('content')

    <section class="service-area gray-bg ptb-50">
        <div class="container">
            <div class="row service-all white-bg" style="min-height:500px">
                <div class="col-md-7">
                    
                    <h3 class="title">Formulir Pelaporan Whistleblowing System</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="{{ route('laporan.create') }}">
                        @csrf
                        <h4 class="form-title">Pelapor</h4>
                        <div class="form-group">
                            <label for="nama_pelapor">Nama Pelapor</label>
                            <input required required type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" />
                        </div>
                        <div class="form-group">
                            <label for="telepon_pelapor">Telepon Pelapor</label>
                            <input required type="text" class="form-control" id="telepon_pelapor" name="telepon_pelapor" value="{{ old('telepon_pelapor') }}">
                        </div>
                        <div class="form-group">
                            <label for="email_pelapor">Email Pelapor</label>
                            <input required type="text" class="form-control" id="email_pelapor" name="email_pelapor" value="{{ old('email_pelapor') }}">
                        </div>
                        <hr>
                        <h4 class="form-title">Terlapor</h4>
                        <div class="form-group">
                            <label for="nama_terlapor">Nama Terlapor</label>
                            <input required type="text" class="form-control" id="nama_terlapor" name="nama_terlapor" value="{{ old('nama_terlapor') }}">
                        </div>
                        <div class="form-group">
                            <label for="jabatan_terlapor">Jabatan Terlapor</label>
                            <input required type="text" class="form-control" id="jabatan_terlapor" name="jabatan_terlapor" value="{{ old('jabatan_terlapor') }}">
                        </div>
                        <hr>
                        <h4 class="form-title">Dokumen Pendukung</h4>
                        <div class="form-group">
                            <label for="jenis_laporan_id">File/Foto/Video</label>
                            <input type="file" class="form-control" id="file" name="file" value="{{ old('file') }}">
                            <p>* Silahkan upload dokumen, gambar atau video<br>ukuran maximal 5 MB</p>
                        </div>
                        <hr>
                        <h4 class="form-title">Detail Kejadian</h4>
                        <div class="form-group">
                            <label for="jenis_laporan_id">Jenis Kejadian</label>
                            <select name="jenis_laporan_id" id="jenis_laporan_id" class="form-control">
                                <option value="">- Silahkan Pilih Jenis Laporan -</option>
                                @foreach($jenis_laporan_r as $jenis_laporan_id=>$jenis_laporan)
                                    <option @if(old('jenis_laporan_id')==$jenis_laporan_id) selected @endif value="{{ $jenis_laporan_id }}">{{ $jenis_laporan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="waktu_kejadian">Waktu Kejadian</label>
                            <input required type="text" class="form-control" id="waktu_kejadian" name="waktu_kejadian" placeholder="misal : sekitar bulan desember, sore hari tanggal 17 maret 2019" value="{{ old('waktu_kejadian') }}">
                        </div>
                        <div class="form-group">
                            <label for="lokasi_kejadian">Lokasi Kejadian</label>
                            <input required type="text" class="form-control" id="lokasi_kejadian" name="lokasi_kejadian" value="{{ old('lokasi_kejadian') }}">
                        </div>
                        <div class="form-group">
                            <label for="kronologis_kejadian">Kronologis Kejadian</label>
                            <textarea required name="kronologis_kejadian" id="" cols="30" rows="5">{{ old('kronologis_kejadian') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="detail_kejadian">Detail Kejadian</label>
                            <textarea required name="detail_kejadian" id="" cols="30" rows="10">{{ old('detail_kejadian') }}</textarea>
                        </div>
                        <div class="form-group">
                            <p>*pastikan semua data benar, setelah membuat laporan, laporan tidak dapat dihapus ataupun diedit</p>
                            <input type="submit" name="Buat Laporan" class="btn btn-primary pull-right" style="width:150px">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-2">
                    @include('laporan.component.sidebar')
                </div>
            </div>
        </div>
    </section>
    
    <style>
    .title{
        border-bottom:1px solid #ccc;
        padding-bottom:10px;   
        margin-bottom:10px;
    }
    form label{
        font-size:1em;
    }
    form h4.form-title{
        font-size:1.1em!important;
        font-weight: bold;
        color:#8B0000;
    }
    form hr{
        margin:10px 0;
    }
    form textarea{
        background:white;
    }
    </style>
@endsection