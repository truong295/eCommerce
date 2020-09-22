@extends('admin.layout')
@section('admin')
    <div class="col-lg-6" style="margin-left: 450px">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Categories Table</strong>
                <a href="categories/create" style="margin-left: 520px"><button type="button" class="btn btn-primary">Add</button></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td><a href="categories/{{ $category->id }}/edit">  <button type="button" class="btn btn-success">Update</button></a>
                                <td>
                                <form action="categories/{{$category->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
