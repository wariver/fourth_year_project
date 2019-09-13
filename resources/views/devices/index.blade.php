@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
   		<div class="col-sm-12">
			<div class="card border-warning mb-3">
			  <div class="card-header"><a href="{{url('device/create')}}">Create Device</a></div>
			  <div class="card-body">
			  	<table class="table table-hover">
				  <tbody>
				  	@foreach($device as $dvc)
				    <tr>
				      <th>{{$dvc->name}}</th>
				      <td>
				      	<a class="btn btn-xs btn-primary" href="{{url('device/'.$dvc->id.'/edit')}}">edit</a>
				      	<form method="POST"
								action="{{ route('device.destroy', $dvc->id) }}"
								style="display: inline">
								{{ csrf_field() }} {{ method_field('DELETE') }}
								<button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">delete</button>
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

@endsection
