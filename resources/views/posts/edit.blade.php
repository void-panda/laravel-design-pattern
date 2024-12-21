@extends('layouts.app', ['title' => 'Edit Post'])

@section('content')
    <div class="row my-5">
        <div class="col">
            <form class="card" id="create-post-form" action="{{ route('posts.update', $post) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-header">
                    <h5 class="card-title">Edit Post.</h5>
                </div>
                <div class="card-body">
                    <div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input value="{{ $post->title }}" type="text" class="form-control" id="title"
                                name="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Post Content</label>
                            <textarea class="form-control" id="content" rows="6" name="content">
                                {{ $post->content }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="my-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
