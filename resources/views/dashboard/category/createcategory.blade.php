@extends('dashboard.layouts.main')
@section('content')
<div class="row">

    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create Category</h4>

          <form class="forms-sample" action="{{route('category')}}" method="POST" >
            @csrf
            <div class="form-group">
              <label for="category_name">Category</label>
              <input type="text" class="form-control" name="category_name" placeholder="Category">
            </div>
            {{-- <div class="form-group">
                <label>Category</label>
                <select class="js-example-basic-multiple w-100" name="Category" multiple >
                  <option value="AL">Alabama</option>
                  <option value="WY">Wyoming</option>
                  <option value="AM">America</option>
                  <option value="CA">Canada</option>
                  <option value="RU">Russia</option>
                </select>
              </div>


            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img[]" class="file-upload-default">
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
            </div> --}}
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
          </form>
        </div>
      </div>
    </div>

  </div>
  @endsection
