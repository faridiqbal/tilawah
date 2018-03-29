@extends('template.main')

@section('breadcrumb')
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            Jadual Tilawah
          </li>
        </ol>
@endsection

@section('content')

  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Nama Kumpulan</th>
          <th>Bil Ahli</th>
          <th>Minggu Ke</th>
        </tr>
      </thead>
      <tbody>
        
      @forelse ($groups as $group)
        <tr>
          <td>
            <a href="{{ route('jadual.show',$group->id) }}">{{ $group->nama }}</a><br />
            <i>{{ $group->description }}</i>
          </td>
          <td align='center'>
            {{ $group->members->count() }}
          </td>
          <td align='center'>
            {{ $group->minggu }}
          </td>
        </tr>
          @empty
          <tr>
            <td colspan='3' align='center'><i>[ Tiada rekod dijumpai ]</i></td>
          </tr>
          @endforelse

      </tbody>
    </table>
  </div>
@endsection
    
