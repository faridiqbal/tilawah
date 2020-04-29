@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{ route('jadual.index') }}">Jadual Tilawah</a>
	</li>
	<li class="breadcrumb-item active">{{ $group->nama }}</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
	<div class="card-header">
		<h4><i class="fa fa-calendar"></i> Minggu ke-{{ $group->minggu }}
		<div class='btn-group' style="float: right">
			<button class='btn btn-default' onclick="copyText()" style="margin-right: 10px"><i class="fa fa-copy"></i> Copy Senarai</button>
			<a href="{{ route('jadual.tambahJuzu', $group->id) }}"><button class='btn btn-info'><i class="fa fa-plus"></i> Tambahkan Juzu'</button></a>
		</div>
		</h4>
	</div>

	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th width='30'>Bil</th>
				<th>Nama Ahli</th>
				<th width='100'>Juz</th>
				<th width='200'>&nbsp;</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($members as $member)
			<tr>
				<td align='center'>{{ $loop->iteration }}.</td>
				<td>
					{{ $member->nama }}
				</td>
				<td align='center'>{{ $member->juz }}</td>
				<td align='center'>
					<a href="{{ route('member.edit',$member->id) }}"><button class='btn btn-primary'>Kemaskini Ahli</button></a>
				</td>
			</tr>
			@endforeach

		</tbody>
	</table>



	<div class="card-body" id='listMember' style="display:">
		<h5>@php for ($i=0; $i <= 5; $i++) echo $group->decoration; @endphp</h5>
		<h5>{{ $group->decoration }}<b><u>{{ $group->nama }} </u></b>{{ $group->decoration }}</h5>
		<h5>{{ $dekoLast }} {{ $group->description }} {{ $dekoLast }}</h5>
		<h5>{{ $dekoFirst }} <b>Minggu ke-{{ $group->minggu }}</b> {{ $dekoFirst }}</h5>
		<h5>{{ $dekoLast }} <b>{{ $tarikhMingguMula }} - {{ $tarikhMingguAkhir }}</b> {{ $dekoLast }}</h5>
		<h5>@php for ($i=0; $i <= 5; $i++) echo $group->decoration; @endphp</h5><br />
		@forelse ($members as $member)
		@php 
		$jumlahSpace = 20 - (strlen($member->nama));
		@endphp
		{{ $loop->iteration }}. {{ $member->nama }} 
		@php for ($i=0; $i <= $jumlahSpace; $i++) echo '&nbsp;'; @endphp
		- Juz {{ $member->juz }}<br />
		@empty
		[ Tiada ahli ]
		@endforelse
	</div>
	<div>&nbsp;</div>
	<div class="card-footer small text-muted">
		<a data-toggle="modal" data-target="#resetJuzuModal"><button class='btn btn-danger'>Reset Juzu'</button></a>
		<a href="{{ route('jadual.tolakJuzu', $group->id) }}"><button class='btn btn-warning'><i class="fa fa-minus"></i> Kurangkan Juzu'</button></a>

	</div>
</div>



<!-- Reset Juzuk Modal-->
<div class="modal fade" id="resetJuzuModal" tabindex="-1" role="dialog" aria-labelledby="resetJuzuLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="resetJuzuLabel">Reset Juzu' Bacaan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Adakah anda pasti untuk reset juzu bacaan ahli?</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="{{ route('jadual.resetJuzu', $group->id) }}">Reset</a>
			</div>
		</div>
	</div>
</div>
@endsection