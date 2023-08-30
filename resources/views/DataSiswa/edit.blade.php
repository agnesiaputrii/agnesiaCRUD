@extends('layout.template')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>Form Edit</h3>
                        <a href="{{ route('datasiswa.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('datasiswa.update', $DataSiswa->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $DataSiswa->Nama }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="{{ $DataSiswa->Jurusan }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control" value="{{ $DataSiswa->Kelas }}"
                                    required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
