@extends('template')

@section('main')
<div>
    <h2>Detail Data {{ $mahasiswa->nama_mahasiswa}}</h2>
    
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>NPM:</th>
                <td>{{ $mahasiswa->npm}}</td>
            </tr>
            <tr>
                <th>Nama Mahasiswa:</th>
                <td>{{ $mahasiswa->nama_mahasiswa}}</td>
            </tr>
            <tr>
                <th>Program Studi: </th>
                <td>{{ $mahasiswa->prodi->nama_prodi}}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir:</th>
                <td>{{ $mahasiswa->tanggal_lahir->format('d-m-Y')}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td>{{ $mahasiswa->jenis_kelamin}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('footer')
@include('footer')
@endsection
