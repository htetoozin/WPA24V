@extends("layout.app")

@section("content")
<section class="content-header">
	<h1>
		user
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
							<th>User Name</th>
							<th>Email</th>
							<th>Role</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{ $user->id }}</td>
							<td><a href="{{ route('user.show', $user->id) }}">{{ $user->first_name }}</a></td>
							<td>{{ $user->email }}</td>
							<td><a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Edit</a>
							</td>
							<td>{{ $user->roles }}</td>
							<td>
								<form action="{{ route('user.destroy', '1') }}" method="post">
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