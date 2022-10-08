@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Banner List</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" name="title" type="text" placeholder="Enter Banner Title">
                            </div>
                            <div class="mt-3 form-group">
                                <input class="form-control" name="images" type="file" placeholder="Enter Banner Title"
                                accept="image/jpg, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $banner)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        @if ($banner->done == 0)
                                            <span class="btn btn-warning btn-sm">Not Completed</span>
                                        @else
                                        <span class="btn btn-success btn-sm">Completed</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($banner->done == 0)
                                            <a href="{{ route('banner.status', $banner->id) }}" class="btn btn-success">Done</a>
                                        @else
                                            <a href="{{ route('banner.status', $banner->id) }}" class="btn btn-warning">Undo</a>
                                        @endif
                                        <a href="{{ route('banner.delete', $banner->id) }}" class="btn btn-danger">Delete</a>
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

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 5rem;
            color: #4fbf4b;
        }
    </style>
@endpush
