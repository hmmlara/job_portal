@extends('layouts.main')

@section('content')

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Category</strong></h1>

            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="{{route('category.create')}}" class="btn btn-success">Add New Category</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">

                        <table class="table table-hover my-0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- {{ $categories->links() }} --}}
                            @foreach ($categories as $key => $category)
                                <form action="{{route('category.destroy', $category->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <tr>
                                        <td>{{$categories->firstItem() + $key}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="d-none d-md-table-cell">
                                            {{-- <a href="{{route('job-type.show', $category->id)}}" class="btn btn-success">View</a> --}}
                                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">Edit</a>
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
                    Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }}
                    of total {{ $categories->total() }}
                </div>
                <div class="pagination">
                    {{$categories->links('pagination::bootstrap-4')}}
                </div>
            </div>


        </div>
    </main>


@endsection
