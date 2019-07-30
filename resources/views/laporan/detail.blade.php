@extends('layouts.main')

@section('title', 'Buat Laporan')

@section('content')

    <section class="service-area gray-bg ptb-50">
        <div class="container">
            <div class="row service-all white-bg" style="min-height:500px">
                <div class="{{ (Auth::user()->userrole=='admin')?'col-md-10':'col-md-7' }}">
                    <h3>Detail Laporan</h3>
                    <h4 class="title">Pelapor</h4>
                    Nama : {{ $laporan->nama_pelapor }} <br>
                    Email : {{ $laporan->email_pelapor }} <br>
                    Telepon : {{ $laporan->telepon_pelapor??'-' }} <br>
                    <hr>
                    <h4 class="title">Terlapor</h4>
                    Nama : {{ $laporan->nama_terlapor }} <br>
                    Jabatan : {{ $laporan->jabatan_terlapor }} <br>
                    <hr>
                    <h4 class="title">Kejadian</h4>
                    Jenis : {{ $laporan->jenis_laporan->jenis_laporan }}<br><br>
                    <b>Kronologi</b><br>
                    {{ $laporan->kronologis_kejadian }}
                    <br><br>
                    <b>Detail</b><br>
                    {{ $laporan->detail_kejadian }}
                    <hr>
                    <b>File Pendukung</b><br>
                    @if(!empty($laporan->file))
                        <a class="btn btn-success" href="{{ $laporan->file }}" target="_blank">Download</a>
                    @endif
                    <hr>
                    <h4 class="title">Tanggapan</h4>
                    @if(Auth::user()->userrole!='admin' && $laporan->tanggapan()->count()==0)
                     *belum ada tanggapan...
                    @endif
                    @foreach($laporan->tanggapan as $tanggapan)
                        <p class="tanggapan">
                            Ditanggapi Oleh {{ $tanggapan->petugas->username }}, tanggal {{ $tanggapan->created_at }}<br>
                            <b>Tanggapan</b> : <br>
                            {{ $tanggapan->tanggapan }}
                        </p>
                    @endforeach
                    @if(Auth::user()->userrole=='admin')
                        <form action="{{ route('tanggapan.create') }}" method="post">
                            @csrf
                            <input type="hidden" name="laporan_id" value="{{ $laporan->id }}">
                            <div class="form-group">
                                <label for="detail_kejadian">Beri Tanggapan</label>
                                <textarea required name="tanggapan" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <p>*beri tanggapan atas laporan diatas</p>
                                <input type="submit" value="Beri Tanggapan" class="btn btn-primary pull-right" style="width:150px">
                                <a href="{{ route('laporan.admin') }}" class="pull-right btn btn-warning" style="margin-right:10px">Kembali</a>
                            </div>
                        </form>
                        @endif
                </div>
                @if(Auth::user()->userrole!='admin')
                    <div class="col-md-3 col-md-offset-2">
                        @include('laporan.component.sidebar')
                    </div>
                @endif
            </div>
        </div>
    </section>
    <style>
    p.tanggapan{
        padding:10px;
        background:#eee;
    }
    h4.title{
        font-size:1.1em!important;
        font-weight: bold;
        color:#8B0000;
    }
    hr{
        margin:10px 0;
    }
    textarea{
        background:white;
    }
    </style>
@endsection