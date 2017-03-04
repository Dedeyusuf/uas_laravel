@extends('templates.index')
@section('content')
            <h4>Data Mahasiswa &raquo; Tambah Data</h4>
            <hr />
    
    <form class="form-horizontal" action="{{ URL('add_action') }}" method="post" enctype="multipart/form-data">
    <input name="_token" type="hidden" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama :</label>
            <div class="col-sm-4">
                <input class="form-control" type="text" name="nama" placeholder="Nama" required>
            </div>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Gender :</label>
            <div class="col-sm-4">
                <input input class="form-control" type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
                <input input class="form-control" type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
            </div>
        
    <div class="form-group">
        <label class="col-sm-3 control-label">Alamat :</label>
            <div class="col-sm-4">
                <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
            </div>
        
    <div class="form-group">
        <label class="col-sm-3 control-label">NIM :</label>
            <div class="col-sm-4">
                <input type="text" name="nim" class="form-control" placeholder="NIM" required>
            </div>        

        <div class="form-group">
            <label class="col-sm-3 control-label">&nbsp;</label>
            <div class="col-sm-6">
                <button type="submit" name="save" class="btn btn-sm btn-info">Send </button>
            </div>
        </div>
    </form>
@stop