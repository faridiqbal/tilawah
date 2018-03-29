@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{ route('group.index') }}">Kumpulan</a>
	</li>
	<li class="breadcrumb-item active">{{ $group->nama }}</li>
</ol>
@endsection

@section('content')
<div class="card mb-3">
	<div class="card-header">
		<i class="fa fa-users"></i> Senarai Ahli
		<button class='btn-black' onclick="copyText()" style="float: right"><i class="fa fa-copy"></i> Copy Senarai</button>
	</div>
	<div class="card-body" id='listMember'>
		@forelse ($group->members as $member)
			{{ $loop->iteration }}. {{ $member->nama }} &nbsp;&nbsp;&nbsp;- Juz {{ $member->juz }}
		@empty
			[ Tiada ahli ]
		@endforelse
	</div>
	<div>&nbsp;</div>
	<div class="card-footer small text-muted">
		<button class='btn btn-danger'>Reset Juzu'</button>
		<button class='btn btn-warning'><i class="fa fa-minus"></i> Kurangkan Juzu'</button>

		<button class='btn btn-primary' style="float: right"><i class="fa fa-plus"></i> Tambahkan Juzu'</button>
	</div>
</div>

@endsection