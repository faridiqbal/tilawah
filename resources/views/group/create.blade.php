@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('member.index') }}">Kemaskini Kumpulan</a>
  </li>
  <li class="breadcrumb-item active">Kumpulan Baru</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-user"></i> Maklumat Kumpulan</div>
  <div class="card-body">
    <form name='frmKemaskiniAhli' method='post' action="{{ route('group.store') }}">
      @csrf
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>Nama Kumpulan</th><td><input type="text" name="nama" class="form-control" value="{{ old('nama') }}" size='20'/></td>
        </tr>
        <tr>
          <th>Penerangan (jika ada)</th><td><input type="text" name="description" class="form-control" value="{{ old('description') }}" /></td>
        </tr>
        <tr>
          <th>Dekorasi Emoticon (jika ada)</th><td><input type="text" name="decoration" class="form-control" value="{{ old('decoration') }}" /></td>
        </tr>
        <tr>
          <th>Minggu Bacaan</th><td><input type="number" name="minggu" class="form-control" value="{{ old('minggu','1') }}" size='2' maxlength="2" /></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td>
            <input class="btn btn-primary" type="submit" name="submit" value="Daftar" />
          </td>
        </tr>
      </table>
      
      
    </form>
  </div>
  {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
</div>

@endsection