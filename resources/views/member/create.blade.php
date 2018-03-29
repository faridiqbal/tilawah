@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('member.index') }}">Kemaskini Ahli</a>
  </li>
  <li class="breadcrumb-item active">Ahli Baru</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-user"></i> Maklumat Ahli</div>
  <div class="card-body">
    <form name='frmKemaskiniAhli' method='post' action="{{ route('member.store') }}">
      @csrf
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>Nama</th><td><input type="text" name="nama" class="form-control" value="{{ old('nama') }}" size='20'/></td>
        </tr>
        <tr>
          <th>Kumpulan</th><td><select name="kumpulan" class="form-control">
            <option value=""> -- Select One --</option>
            @foreach ($groups as $group)
                <option value="{{ $group->id }}">{{ $group->nama }}</option>
            @endforeach
          </select></td>
        </tr>
        <tr>
          <th>Juz</th><td><input type="number" name="juz" class="form-control" value="{{ old('juz','0') }}" size='2' maxlength="2" /></td>
        </tr>
        <tr>
          <th>&nbsp;</th><td>
            <input class="btn btn-primary" type="submit" name="submit" value="Daftar" /></td>
        </tr>
      </table>
      
      
    </form>
  </div>
  {{-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> --}}
</div>

@endsection