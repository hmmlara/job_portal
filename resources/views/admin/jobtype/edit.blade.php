@extends('layouts.main')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{route('job-type.index')}}" class="btn btn-success">Back</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Job Type</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('job-type.update', $jobtype->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Job Type</label>
                                        <input type="text" name="job_type" id="" class="form-control" value="{{$jobtype->job_type}}">
                                        @error('job_type')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="row my-3">
                                        <div class="col-md-12">
                                            <button class="btn btn-success">Update</button>
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
