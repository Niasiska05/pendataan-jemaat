@extends('jemaat.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Show jemaat</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('jemaat.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nik:</strong>
                {{ $fakultas->nik_jemaat }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama:</strong>
                    {{ $jemaat->nama }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jk:</strong>
                    {{ $jemaat->jk }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tmplhr:</strong>
                    {{ $jemaat->tmplhr }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tgllhr:</strong>
                    {{ $jemaat->tgllhr }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>status:</strong>
                    {{ $jemaat->status_baptis }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tglsidi:</strong>
                    {{ $jemaat->tglsidi}}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama ayah:</strong>
                    {{ $jemaat->nama_ayah }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama ibu:</strong>
                    {{ $jemaat->nama_ibu }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>alamat:</strong>
                     {{ $jemaat->alamat }}
            </div>
            </div>
        </div>
    @endsection
