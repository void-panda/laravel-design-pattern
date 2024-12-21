@extends('layouts.app', ['title' => 'Posts'])

@section('content')
    <h1 class="mt-5">Posts</h1>
    <div class="row my-5">
        <div class="col">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero iusto esse corrupti excepturi necessitatibus,
                commodi, error molestias ut aliquam dolorem dignissimos? Distinctio ex a quibusdam blanditiis amet facere
                ducimus suscipit.
            </p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title">List of Posts</h5>
                    <a href="#create-post-form" class="btn btn-success">Create Post</a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <input type="search" name="search" id="search" class="form-control w-50"
                            placeholder="Search...">
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Post Title</th>
                                  <th scope="col">Content</th>
                                  <th scope="col">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($posts as $index => $post)
                                  <tr>
                                      <td>{{ $index + 1 }}</td>
                                      <td class="text-truncate" style="max-width: 300px;">{{ $post->title }}</td>
                                      <td class="text-truncate" style="max-width: 500px;">{{ $post->content }}</td>
                                      <td>
                                          <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">🖉</a>
                                          <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                              @csrf
                                              @method('DELETE')
                                              <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-danger">✖</button>
                                          </form>
                                      </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end pt-4">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col">
            <form class="card" id="create-post-form" action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="card-header">
                    <h5 class="card-title">Create new Post.</h5>
                </div>
                <div class="card-body">
                    <div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Password</label>
                            <textarea class="form-control" id="content" rows="6" name="content"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="my-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Create Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
