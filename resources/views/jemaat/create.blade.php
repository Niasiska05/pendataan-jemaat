@extends('jemaat.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Detail Data Jemaat</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('jemaat.index') }}"> Back</a>
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

    <form action="{{ route('jemaat.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nik:</strong>
                    <input type="text" name="nik_jemaat" class="form-control" placeholder="nik jemaat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jk:</strong>
                    <input type="text" name="jk" class="form-control" placeholder="jk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tmp lhr:</strong>
                    <input type="text" name="tmplhr" class="form-control" placeholder="tmplhr">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tgl lhr:</strong>
                    <input type="text" name="tgllhr" class="form-control" placeholder="tgllhr">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Baptis:</strong>
                    <input type="text" name="status_baptis" class="form-control" placeholder="status_baptis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tgl sidi:</strong>
                    <input type="text" name="tglsidi" class="form-control" placeholder="tglsidi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ayah:</strong>
                    <input type="text" name="nama_ayah" class="form-control" placeholder="nama_ayah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Ibu:</strong>
                    <input type="text" name="nama_ibu" class="form-control" placeholder="nama_ibu">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="alamat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
@endsection
