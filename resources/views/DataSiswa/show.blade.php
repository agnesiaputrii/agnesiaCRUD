@extends('layout.template')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="group">
                        <h5>{{ $DataSiswa->Nama }}</h5>
                        <h5>{{ $DataSiswa->Jurusan }}</h5>
                        <h5>{{ $DataSiswa->Kelas }}</h5>
                    </div>
                    <div class="group">
                        <a href="{{ route('datasiswa.index') }}" class="btn btn-success">Back</a>
                        <a href="{{ route('datasiswa.edit', $DataSiswa->id) }}" class="btn btn-secondary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
