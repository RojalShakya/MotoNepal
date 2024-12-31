@extends('dashboard.layouts.main')
@section('content')
<div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create Blogs</h4>

          <form class="forms-sample" action="{{route('blog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="js-example-basic-multiple w-100" name="category[]" multiple >
                    @foreach ($categories as $category)
                    <option value={{$category->id}}>{{$category->category_name}}</option>
                    @endforeach
                    <option value="others">Other</option>
                </select>
              </div>


            <div class="form-group">
                <label for="image">File upload</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                  </span>
                </div>
              </div>

            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control" id="myeditorinstance" name="desc" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  @endsection
