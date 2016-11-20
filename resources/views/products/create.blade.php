@extends("layout.app")

@section("content")
<section class="content-header">
  <h1>
    Product
    <small>create</small>
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
                                <label class="control-label" for="product_name">Product Name</label>
                                <br>
                                @if($errors->has('product_name'))
                                <label class="text-danger" for="product_name"><small>{{ $errors->first('product_name') }}</small></label>
                                @endif
                                <input class="form-control" type="text" name="product_name" value="{{ old('product_name') }}" />
                            </div>
                            <div class="form-group">
                                <label for="body">Product Description</label>
                                <br>
                                @if($errors->has('body'))
                                <label class="text-danger" for="description"><small>{{ $errors->first('description') }}</small></label>
                                @endif
                                <textarea id="summernote" name="description" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>                    
                </div>
            </div>            
        </div>        
    </div>    
</div>
@endsection