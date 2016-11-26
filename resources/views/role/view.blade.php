@extends("layout.app")

@section("content")
<section class="content-header">
  <h1>
    Role
    <small>Detail</small>
</h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">

                    <div class="col-md-12">
                        <form action="{{ url('backend/role') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="role">Role</label>
                                <br>
                               <p>{{ $role->name }}</p>
                            </div>
                            <div class="form-group">
                               <label class="control-label" for="slug">Slug</label>
                               <br>
                               <p>{{ $role->slug }}</p>
                           </div>
                            
                            <label>Permission</label>
                           @foreach( $role->permissions as $key =>   $permission )
                                <p>{{ $key  }}</p>
                           @endforeach
                    </form>
                </div>                    
            </div>
        </div>            
    </div>        
</div>    
</div>
@endsection