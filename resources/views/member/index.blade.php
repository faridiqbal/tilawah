@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Kemaskini Ahli</a>
  </li>
  <li class="breadcrumb-item active">Senarai Ahli</li>
</ol>
@endsection



@section('content')

<div class="card mb-3">
  <div class="card-header"><a href="{{ route('member.create') }}"><button class='btn btn-success' style="float: right"><i class="fa fa-plus"></i> Daftar Ahli Baru</button></a></div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Bil</th>
            <th>Nama Ahli</th>
            <th>Kumpulan Tilawah</th>
            <th>Juz</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>

          @forelse ($members as $member)
          <tr>
            <td align='center'>{{ $loop->iteration }}</td>
            <td>
              <a href="{{ route('member.edit',$member->id) }}">{{ $member->nama }}</a>
            </td>
            <td align='center'>{{ $member->group->nama }}</td>
            <td align='center'>{{ $member->juz }}</td>
            <td align='center'>
              <a href="{{ route('member.edit',$member->id) }}"><button class='btn btn-primary'>Kemaskini</button></a>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan='5' align='center'><i>[ Tiada rekod dijumpai ]</i></td>
          </tr>
          @endforelse

        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">&nbsp;</div>
</div>


@endsection

