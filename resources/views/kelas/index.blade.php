@extends('layouts.admin')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-12">
			<div class="panel panel-danger">
			  <div class="panel-heading">Data Kelas
			  	<div class="panel-title pull-right"><a href="{{ route('kelas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
             <div class="table-responsive">
						 <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kelas</th>
					  <th>Wali Kelas</th>
					  <th>Nama Siswa</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($a as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kelas }}</td>
				    	<td>{{ $data->wali_kelas }}</td>
				    	<td>@foreach($data->Siswa as $s)<li>{{ $s->nama }}@endforeach</li></td>
<td>
<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i></a>
</td>
<td>
	<a href="{{ route('kelas.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection