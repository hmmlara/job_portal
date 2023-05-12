@extends('layouts.main')

@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3"><strong>Job</strong> Type</h1>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{route('job-type.create')}}" class="btn btn-success">Add New Job Type</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">

                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Job Type</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($jobtypes as $key => $jobtype)
                                <form action="{{route('job-type.destroy', $jobtype->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{$jobtypes->firstItem() + $key}}</td>
                                        <td>{{$jobtype->job_type}}</td>
                                        <td class="d-none d-md-table-cell">
                                            {{-- <a href="{{route('job-type.show', $jobtype->id)}}" class="btn btn-success">View</a> --}}
                                            <a href="{{route('job-type.edit', $jobtype->id)}}" class="btn btn-warning">Edit</a>
                                            <button class="btn btn-danger">Delete</button>
                                        </td>

                                    </tr>
                                </form>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-around">
                <div>
                    Showing {{ $jobtypes->firstItem() }} to {{ $jobtypes->lastItem() }}
                    of total {{ $jobtypes->total() }}
                </div>
                <div class="pagination">
                    {{$jobtypes->links('pagination::bootstrap-4')}}
                </div>
            </div>

        </div>
    </main>


@endsection
