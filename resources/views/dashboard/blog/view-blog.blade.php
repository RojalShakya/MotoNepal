@extends('dashboard.layouts.main')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Blogs</h4>
        <p class="card-description">
          View,Edit,Delete Blogs
        </p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)

                <tr>
                  <td>{{$blog->title}}</td>
                  <td>
                    <ul>
                        @foreach ($blog->categories as $category)
                            <li>{{$category->category_name}}</li>

                        @endforeach
                    </ul>
                  </td>

                  <td><img src="{{asset($blog->image)}}" height="20px" width="40px"></td>
                  <td>
                      <a href="{{route('edit-blog',['ids'=>$blog->id])}}"><button class="btn btn-primary">Edit</button></a>
                      <a href="{{route('destroy-blog',['ids'=>$blog->id])}}"><button class="btn btn-danger">Delete</button></a>
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
