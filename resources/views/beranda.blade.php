@extends('templates.index')
@section('content')      
<h4>Data Mahasiswa</h4>
 <hr />
<a href="{{URL('input')}}" class="btn btn-link btn-sm">Insert <span class="glyphicon glyphicon-plus-sign"></span></a>
<table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>
    
    @foreach ($mahasiswa as $mhs)
        <tr>
            <td><a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ $mhs -> nama }}</a></td>
            <td>{{ $mhs -> jenis_kelamin }}</td>
            <td>{{ $mhs -> alamat }}</td>
            <td>{{ $mhs -> nim }}</td>
            <td><form method="POST" action="{{ route('siswa.destroy', $mhs->id) }}">
                <input name="_method" type="hidden" value="DELETE">
                <input name="_token" type="hidden" value="{{csrf_token() }}">
                <a href="{{ route('siswa.edit', $mhs->id)}}" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
                <input type="submit" onclick="return confirm('Yakin akan menghapus data?');" title="Delete" value="Delete" class="btn btn-danger btn-sm">
            </form>

        </tr>
    @endforeach
</table>
<br><br>

@stop