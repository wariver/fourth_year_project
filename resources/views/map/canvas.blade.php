@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
   		<div class="col-sm-12">			
			<div class="card border-warning mb-3">
			  <div class="card-header">Canvas<a href="{{url('maps/create')}}">Create Point</a></div>
			  <div class="card-body">
			  	<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Title</th>
				      <th scope="col">Latitude</th>
				      <th scope="col">Longitude</th>
				      <th scope="col">Radius</th>
				      <th scope="col">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($maps as $map)
				    <tr>
				      <th>{{$map->title}}</th>
				      <td>{{$map->latitude}}</td>
				      <td>{{$map->longitude}}</td>
				      <td>{{$map->radius}}</td>
				      <td>
				      	<a class="btn btn-xs btn-primary" href="{{url('maps/'.$map->id.'/edit')}}">edit</a>
				      	<form method="POST"
								action="{{ route('maps.destroy', $map->id) }}"
								style="display: inline">
								{{ csrf_field() }} {{ method_field('DELETE') }}
								<button class="btn btn-xs btn-danger"
									onclick="return confirm('¿Estás seguro de querer eliminar esta publicación?')"
								>delete</button>
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
