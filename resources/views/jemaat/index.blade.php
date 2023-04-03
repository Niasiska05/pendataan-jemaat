@extends('jemaat.layout')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Detail Data Jemaat</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('jemaat.create') }}"> Ubah Data Jemaat</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Jk</th>
            <th>Tmp_lhr</th>
            <th>Tgl_lhr</th>
            <th>Status_Baptis</th>
            <th>Tgl_sidi</th>
            <th>Nama_Ayah</th>
            <th>Nama_Ibu</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @php($nomor = 1)
        @foreach ($jemaat as $jemaat)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $jemaat->nik }}</td>
                <td>{{ $jemaat->nama }}</td>
                <td>{{ $jemaat->jk }}</td>
                <td>{{ $jemaat->tmp_lhr }}</td>
                <td>{{ $jemaat->tgl_lhr }}</td>
                <td>{{ $jemaat->status_baptis }}</td>
                <td>{{ $jemaat->tgl_sidi }}</td>
                <td>{{ $jemaat->nama_ayah }}</td>
                <td>{{ $jemaat->nama_ibu }}</td>
                <td>{{ $jemaat->alamat }}</td>
                <td>
                    <form action="{{ route('jemaat.destroy', $jemaat->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('jemaat.show', $jemaat->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('jemaat.edit', $jemaat->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- <div class="row text-center">
        {!! $fakultas->links() !!}
    </div> --}}
@endsection
