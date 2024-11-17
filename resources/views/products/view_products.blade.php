<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/view.css')}}">
    <title>View Details</title>
</head>
<body>
    <div class="btn-content">
        <h1>Hey , {{ auth()->user()->name}}</h1>
        @if(session()->has('message'))
            <span class="nav-link">{{ session()->get('message') }}</span>
    @endif
        <button class="btn-link"><a href="{{ route('add.products') }}">Add Products</a></button>
        <button class="btn-link"><a href="{{ route('logout') }}">Logout</a></button>
    </div>
    <table border="2" class="table">
        <thead>
          <tr>
            <th scope="col">SL No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($products as $product)
          <tr>
            <td scope="row">1</th>
            <td>{{ $product->pdt_name }}</td>
            <td>{{ $product->price }}</td>
            <td>@if($product->image)
                <img src="{{ asset('images/'.$product->image) }}" width="100px">
                @else No Image Available
                @endif
            </td>
              <td><button><a href="{{ route('edit.products',$product->product_id) }}" class="btn btn-primary">Edit</a></button></td>
              <td><button onclick="confirmDelete()"><a href="{{ route('delete.products',$product->product_id) }}"  class="btn btn-danger">Delete</a></button></td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <script>
            function confirmDelete()
            {

               alert("Item Deleted Successfully");

            }
      </script>
</body>
</html>
