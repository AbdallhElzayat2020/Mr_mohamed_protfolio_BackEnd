@extends('admin.layouts.master')
@section('title_dashboard', 'Create New Video')
@section('content')
    <div class="main-content">
        <div class="section">
            <div class="section-header">
                <h1>Create New Video</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="video-upload-form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="course_id">Select Course</label>
                                    <select name="course_id" id="course_id" class="form-control" required
                                            onchange="fetchCourseVideos(this.value)">
                                        <option value="" disabled selected>Select a course</option>
                                        @foreach($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Video Title</label>
                                    <input type="text" value="{{ old('title') }}" name="title" id="title"
                                           class="form-control" required>
                                    @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="video">Upload Video</label>
                                    <input type="file" name="video" id="video" class="form-control" required>
                                    @error('video')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Video Description</label>
                                    <textarea name="description" id="description"
                                              class="form-control">{{ old('description') }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="duration">Video Duration</label>
                                    <input type="text" value="{{ old('duration') }}" name="duration" id="duration"
                                           class="form-control" required>
                                    @error('duration')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Video</button>
                            </form>
                        </div>
                    </div>

                    <h3>Existing Videos in Selected Course</h3>
                    <div id="course-videos">
                        <!-- Videos will be loaded here by JavaScript -->
                    </div>

                    <div id="loading-indicator" style="display: none;">Uploading...</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('video-upload-form').addEventListener('submit', function (event) {
            event.preventDefault();
            showLoading();

            let formData = new FormData(this);

            fetch('{{ route('admin.videos.store') }}', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => response.json())
                .then(data => {
                    hideLoading();
                    alert('Video uploaded successfully');
                    document.getElementById('video-upload-form').reset();
                    fetchCourseVideos(document.getElementById('course_id').value);
                })
                .catch(error => {
                    hideLoading();
                    console.error('Error:', error);
                });
        });

        function fetchCourseVideos(courseId) {
            if (courseId) {
                fetch(`/admin/courses/${courseId}/videos`)
                    .then(response => response.json())
                    .then(data => {
                        const courseVideosDiv = document.getElementById('course-videos');
                        courseVideosDiv.innerHTML = '';
                        if (data.videos.length > 0) {
                            data.videos.forEach(video => {
                                const videoElement = document.createElement('div');
                                videoElement.innerHTML = `
                                    <h4>${video.title}</h4>
                                    <video src="${video.url}" controls width="100%"></video>
                                    <p>${video.description || ''}</p>
                                    <span>Duration: ${video.duration}</span>
                                `;
                                courseVideosDiv.appendChild(videoElement);
                            });
                        } else {
                            courseVideosDiv.innerHTML = '<p>No videos available for this course.</p>';
                        }
                    });
            }
        }

        function showLoading() {
            document.getElementById('loading-indicator').style.display = 'block';
        }

        function hideLoading() {
            document.getElementById('loading-indicator').style.display = 'none';
        }
    </script>
@endsection
