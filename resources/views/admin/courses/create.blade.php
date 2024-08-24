@extends('admin.layouts.master')
@section('title_dashboard', 'Create New Course')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Create New Course</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.courses.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Course Title</label>
                                    <input value="{{old('title')}}" type="text" name="title" class="form-control"
                                           id="title" required>
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" id="description" rows="5"
                                              required>{{ old('description') }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instructor_name">Instructor Name</label>
                                    <input type="text" value="{{old('instructor_name')}}" name="instructor_name"
                                           class="form-control" id="instructor_name"
                                           required>
                                    @error('instructor_name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" value="{{old('price')}}" name="price" class="form-control"
                                           id="price" required>
                                    @error('price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" name="image" class="form-control" id="cover_image"
                                           required>
                                    @error('image')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Create Course</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
