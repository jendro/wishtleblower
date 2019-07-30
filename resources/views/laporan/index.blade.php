@extends('layouts.main')

@section('title', 'Buat Laporan')

@section('content')

    <section class="service-area gray-bg ptb-50">
        <div class="container">
            <div class="row service-all white-bg" style="min-height:500px">
                <div class="col-md-9">
                    <h3>Daftar Laporan</h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width:10px">NO</th>
                                <th>TERLAPOR</th>
                                <th style="width:50%">KEJADIAN</th>
                                <th>TANGGAPAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($laporan_r as $laporan)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>
                                        Nama Terlapor : {{ $laporan->nama_terlapor }}<br>
                                        Jabatan Terlapor : {{ $laporan->jabatan_terlapor }}
                                    </td>
                                    <td>
                                        Jenis Kejadian : {{ $laporan->jenis_laporan->jenis_laporan }}<br>
                                        Waktu Kejadian : {{ $laporan->waktu_kejadian }}
                                        <br>
                                        <br>
                                        <b>Kronologi Kejadian :</b><br>
                                        {{ $laporan->kronologis_kejadian }}
                                        <br>
                                        <br>
                                        <b>Detail Kejadian :</b><br>
                                        {{ $laporan->detail_kejadian }}
                                        <br>
                                        <br>
                                        <b>File Pendukung :</b><br>
                                        @if(!empty($laporan->file))
                                            <a class="text-blue" href="{{ $laporan->file }}" target="_blank">Download</a>
                                        @endif
                                    </td>
                                    <td>
                                        {{ ($laporan->tanggapan->count() == 0)?'belum':'sudah' }}<br><br>
                                        <a class="text-success" href="{{ route('laporan.detail',['laporan'=>$laporan->id]) }}">Lihat Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center" style="margin-top:30px;padding-top:30px;border-top:1px solid #eee">
                        {{ $laporan_r->links() }}
                    </div>
                </div>
                <div class="col-md-3">
                    @include('laporan.component.sidebar')
                </div>
            </div>
        </div>
    </section>
    
@endsection