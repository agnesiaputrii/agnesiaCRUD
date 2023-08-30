@extends('layout.template')

@section('konten')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">


    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='{{route('datasiswa.create')}}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-3">Kelas</th>
                <th class="col-md-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DataSiswa as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->Jurusan}}</td>
                    <td>{{$item->Kelas}}</td>
                    <td class="align-middle">
                        <div class="group d-flex gap-3" role="group">
                            <a href="{{ route('datasiswa.show', $item->id) }}" type="button" class="btn btn-primary">Show</a>
                            <a href="{{ route('datasiswa.edit', $item->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('datasiswa.destroy', $item->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('delete?')">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA -->
@endsection


