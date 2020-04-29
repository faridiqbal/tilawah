@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('group.index') }}">Kemaskini Kumpulan</a>
  </li>
  <li class="breadcrumb-item active">{{ $group->nama }}</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-area-chart"></i> Maklumat Kumpulan</div>
  <div class="card-body">
    <form name='frmKemaskiniAhli' method='post' action="{{ route('group.update',$group) }}">
      @csrf
      @method('PUT')
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>Nama Kumpulan</th><td><input type="text" name="nama" class="form-control" value="{{ old('nama',$group->nama) }}" size='20'/></td>
        </tr>
        <tr>
          <th>Penerangan (jika ada)</th><td><input type="text" name="description" class="form-control" value="{{ old('description',$group->description) }}" /></td>
        </tr>
        <tr>
          <th>Dekorasi Emoticon (jika ada)</th><td><input type="text" name="decoration" class="form-control" value="{{ old('decoration',$group->decoration) }}" /></td>
        </tr>
        <tr>
          <th>Minggu Bacaan</th><td><input type="number" name="minggu" class="form-control" value="{{ old('minggu',$group->minggu) }}" size='2' maxlength="2" /></td>
        </tr>
        <tr>
          <th>Jumlah Ahli</th><td><b>{{ $group->members->count() }}</b></td>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan" />
            <a data-toggle="modal" data-target="
            	@php 
            	if ($group->members->count() > 0) echo '#hapusGagalModal';
            	else echo '#hapusGroupModal';
            	@endphp
            "><button class="btn btn-danger" />Hapus</button></a>
          </td>
        </tr>
      </table>
    </form>
  </div>
  </div>
  <div class="card-footer small text-muted">&nbsp;</div>
</div>


<!-- Hapus Group Modal-->
<div class="modal fade" id="hapusGroupModal" tabindex="-1" role="dialog" aria-labelledby="hapusGroupLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="hapusGroupLabel">Hapus Kumpulan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Adakah anda pasti untuk menghapuskan kumpulan ini?</div>
			<div class="modal-footer">
				<form name='frmDelete' method='POST' action="{{ route('group.destroy', compact('group')) }}">
				@csrf
				@method('DELETE')
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<input type="submit" name="btnHapus" value="Hapus" class="btn btn-danger" />
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Hapus Group Gagal-->
<div class="modal fade" id="hapusGagalModal" tabindex="-1" role="dialog" aria-labelledby="hapusGagalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="hapusGagalLabel">Hapus Kumpulan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Kumpulan tidak boleh dihapuskan kerana masih mempunyai ahli</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
@endsection