@extends("layout.app")

@section("content")
<section class="content-header">
	<h1>
		Role
		<small>List</small>
	</h1>
</section>
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Role Name</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
		<tr>
			<td>{{ $role->id }}</td>
			<td><a href="{{ route('role.show', $role->id) }}">{{ $role->name }}</a></td>
			<td><a class="btn btn-primary" href="{{ route('role.edit',$role->id) }}">Edit</a>
			</td>
			<td>
				<form action="{{ route('role.destroy', '1') }}" method="post">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<button class="btn btn-danger">Delete</button>
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

@endsection