@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{route('category.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Category</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Category</label>
                                        <input type="text" name="name" id="" class="form-control">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <button class="btn btn-primary">Add Category</button>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

        {{-- <div class="row">
            <div class="col md-12">
                {{$courses->links('pagination::bootstrap-4')}}
            </div>
        </div> --}}
    </main>
@endsection
