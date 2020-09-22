@extends('admin.layout')
@section('admin')
    <div class="col-lg-8" style="margin-left: 300px">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Manufacturers Table</strong>
                <a href="manufacturers/create" style="margin-left: 700px"><button type="button" class="btn btn-primary">Add</button></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manufacturers as $manufacturer)
                            <tr>
                                <th scope="row"><img src="storage/manufacturers/{{ $manufacturer->image }}"></th>
                                <td>{{ $manufacturer->name }}</td>
                                <td>{{ $manufacturer->created_at }}</td>
                                <td>{{ $manufacturer->updated_at }}</td>
                            <td><a href="{{route('productsWithManu',$manufacturer->id)}}">  <button type="button" class="btn btn-success">Show</button></a>
                                <td><a href="manufacturers/{{ $manufacturer->id }}/edit">  <button type="button" class="btn btn-success">Update</button></a>
                                <td>
                                <form action="manufacturers/{{$manufacturer->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $manufacturers->links() }}
            </div>
        </div>
    </div>
@endsection
