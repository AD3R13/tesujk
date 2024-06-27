@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-lg-12">
        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div align="left" class="mb-3">
                    </div>
                </div>
                <h1 class="text-center">TAMBAH PENGGUNA</h1>
            </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 475px">
                        <div class="table-responsive">
                            <form class="justify-content-center" action="{{ ' pengguna . store ' }}" method="post">
                                <div class="form-group mb-3">
                                    <label for="">Birthday:</label>
                                    <input type="date" name="lahir" placeholder="Masukkan Lahir" class="form-control"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Place of birth:</label>
                                    <input type="text" name="tempat_lahir" placeholder="Masukkan Email"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Age:</label>
                                    <input type="text" name="umur" placeholder="Masukan Umur" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">City:</label>
                                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Phone:</label>
                                    <input name="phone" id="" placeholder="Masukkan No Tlp" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email:</label>
                                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Gender:</label>
                                    <input type="text" name="gender" placeholder="Masukkan Gender" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Religion</label>
                                    <input type="text" name="agama" placeholder="Masukkan Agama" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="submit" class="btn btn-primary" value="Simpan">
                                    <a href="" class="btn btn-danger">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
