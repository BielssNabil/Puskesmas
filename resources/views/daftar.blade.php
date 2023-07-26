@extends('layouts.main')

@section('container')
    <h3>Daftar Pasien</h3>

    <!-- Button trigger modal -->
    <nav class="navbar">
      <div class="container"  >
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahAntrian">
          Tambah Data
        </button>
      </div>
    </nav>

    <P>
    <table class="table table-bordered table-striped">
      <thead>
          <tr>
              <td align="center">NIK</td>
              <td align="center">Nama</td>
              <td align="center">Alamat</td>
              <td align="center">Aksi</td>
          </tr>
      </thead>
      <tbody>
        @foreach ($daftarAntrian as $index=>$p)
            <tr>
                <td align="center">{{$p->nik}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->alamat}}</td>
                <td align="center">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editAntrian{{$p->nik}}"> 
                        Edit
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="editAntrian{{$p->nik}}" tabindex="-1" role="dialog" aria-labelledby="EditAntrianLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="EditAntrian{{$p->nik}}">Form Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form name="EditAntrian" id="EditAntrian{{$p->nik}}" action="/edit/antrian/{{$p->nik}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group row">
                                  <label for="Kode Penarikan" class="col-sm-4 col-form-label">NIK</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK" value="{{$p->nik}}">
                                  </div>
                              </div>

                              <p>
                              <div class="form-group row">
                                  <label for="Nama" class="col-sm-4 col-form-label">Nama</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="{{$p->nama}}">
                                  </div>
                              </div>

                              <p>
                              <div class="form-group row">
                                  <label for="jml pinjaman" class="col-sm-4 col-form-label">Alamat</label>
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="{{$p->alamat}}">
                                  </div>
                              </div>

                              <p>
                                
                              <p>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                  <button type="submit" name="daftaredit" class="btn btn-success">Edit</button>
                                </div>
                              </p>

                          </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <a href="daftar/hapus/{{$p->nik}}" onclick="return confirm('Yakin mau dihapus?')">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>


    <!-- Modal -->
    <div class="modal fade" id="TambahAntrian" tabindex="-1" role="dialog" aria-labelledby="TambahAntrianLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TambahAntrian">Form Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form name="TambahAntrian" id="TambahAntrian" action="/tambah/antrian" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                  <label for="Kode Penarikan" class="col-sm-4 col-form-label">NIK</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan NIK">
                  </div>
              </div>

              <p>
              <div class="form-group row">
                  <label for="Nama" class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                  </div>
              </div>

              <p>
              <div class="form-group row">
                  <label for="jml pinjaman" class="col-sm-4 col-form-label">Alamat</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                  </div>
              </div>

              <p>
                
              <p>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="daftartambah" class="btn btn-success">Tambah</button>
                </div>
              </p>

          </form>
          </div>
          
        </div>
      </div>
    </div>
    
    
      
@endsection