@extends('admin.layout')
@section('admin')
    <div class="col-lg-8" style="margin-left: 300px">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Products Table</strong>
                <a href="products/create" style="margin-left: 800px"><button type="button" class="btn btn-primary">Add</button></a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Sell Times</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row"><img src="storage/products/{{ $product->image }}"></th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->amount }}</td>
                                <td>{{ $product->sell_times }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td><a href="products/{{ $product->id }}/edit">  <button type="button" class="btn btn-success">Update</button></a>
                                <td>
                                <form action="products/{{$product->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
