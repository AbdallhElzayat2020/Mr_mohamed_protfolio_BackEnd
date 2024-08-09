@extends('admin.layouts.master')
@section('title_dashboard','Team Page')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Team Page</h1>
            </div>

            <div class="card card-primary">
                <div class="card-body">
                    <form action="{{route('admin.team.update',$team->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Person Name</label>
                            <input type="text" value="{{$team->name}}" required name="name" class="form-control">
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description or Job</label>
                            <input type="text" value="{{$team->description}}" required name="description"
                                   class="form-control">
                            @error('description')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            <img width="70px" height="70px" style="margin-top: 10px" src="{{asset($team->image)}}" alt="">
                            @error('image')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facebook_link">Facebook Link</label>
                            <input type="text" value="{{$team->facebook_link}}" required name="facebook_link"
                                   class="form-control">
                            @error('facebook_link')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="x_link">X Link</label>
                            <input type="text" value="{{$team->x_link}}" required name="x_link"
                                   class="form-control">
                            @error('x_link')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instagram_link">Instagram Link</label>
                            <input type="text" value="{{$team->instagram_link}}" required name="instagram_link"
                                   class="form-control">
                            @error('instagram_link')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
