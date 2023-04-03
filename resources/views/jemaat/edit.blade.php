@extends('fakultas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Ubah Data Jemaat</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('Jemaat.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jemaat.update', $Jemaat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nik:</strong>
                    <input type="text" name="nik_jemaat" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="nik_jemaat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama:</strong>
                    <input type="text" name="nama" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jk:</strong>
                    <input type="text" name="jk" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="jk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tmplhr:</strong>
                    <input type="text" name="tmplhr" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="tmplhr">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tgllhr:</strong>
                    <input type="text" name="tgllhr" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="tgllhr">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status baptis:</strong>
                    <input type="text" name="status_baptis" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="status_baptis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tgl sidi:</strong>
                    <input type="text" name="tgl_sidi" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="tgl_sidi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama ayah:</strong>
                    <input type="text" name="nama_ayah" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="nama_ayah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama_ibu:</strong>
                    <input type="text" name="nama_ibu" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="nama_ibu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>alamat:</strong>
                    <input type="text" name="alamat" value="{{ $jemaat->name }}" class="form-control"
                        placeholder="alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
@endsection
