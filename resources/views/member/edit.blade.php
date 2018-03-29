@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('member.index') }}">Kemaskini Ahli</a>
  </li>
  <li class="breadcrumb-item active">{{ $member->nama }}</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-user"></i> Maklumat Ahli</div>
  <div class="card-body">
    <form name='frmKemaskiniAhli' method='post' action="{{ route('member.update',$member) }}">
      @csrf
      @method('PUT')
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>Nama</th><td><input type="text" name="nama" class="form-control" value="{{ old('nama',$member->nama) }}" size='20'/></td>
        </tr>
        <tr>
          <th>Kumpulan</th><td><select name="kumpulan" class="form-control">
            @foreach ($groups as $group)
                <option value="{{ $group->id }}" <?php if ($member->group->id == $group->id) echo "selected" ?>>{{ $group->nama }}</option>
            @endforeach
          </select></td>
        </tr>
        <tr>
          <th>Juz</th><td><input type="number" name="juz" class="form-control" value="{{ old('juz',$member->juz) }}" size='2' maxlength="2" /></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan" />
            <a data-toggle="modal" data-target="#hapusAhliModal"><button class="btn btn-danger" />Hapus</button></a>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <div class="card-footer small text-muted">&nbsp;</div>
</div>




<!-- Hapus Member Modal-->
<div class="modal fade" id="hapusAhliModal" tabindex="-1" role="dialog" aria-labelledby="hapusAhliLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusAhliLabel">Hapus Ahli</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Adakah anda pasti untuk menghapuskan ahli ini?</div>
      <div class="modal-footer">
        <form name='frmDelete' method='POST' action="{{ route('member.destroy', compact('member')) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <input type="submit" name="btnHapus" value="Hapus" class="btn btn-danger" />
        </form>
      </div>
    </div>
  </div>
</div>
@endsection