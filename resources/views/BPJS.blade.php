@extends('layouts.main')

@section('container')
<h1>Antrian BPJS</h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDaftarTambah  ">
    Tambah Data Antrian BPJS
    </button>

    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <td align="center">No Antrian</td>
            <td align="center">NIK</td>
            <td align="center">Nama</td>
            <td align="center">Alamat</td>
            <td align="center">Waktu Daftar</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($AntrianBPJS as $ab)
          <tr>
            {{-- <td align="center" scope="row">{{ $layoutsmain + $container->firstItem() }}</td> --}}
            <td>{{ $ab->no_antrian }}</td>
            <td>{{ $ab->nik }}</td>
            <td>{{ $ab->nama }}</td>
            <td>{{ $ab->alamat }}</td>
            <td>{{ $ab->tg_daftar }}
            <td align="center">
              <button class="btn-warning">
                Edit
              </button>
              <a href="BPJS/hapus/{{ $ab->nik }}" onclick="return confirm('Yakin Mau DiHapus?')">
                <button class="btn-danger">
                  Delete
                </button>
              </a>
            </td>
          </tr>
        </tbody>
      </table>

@endsection
