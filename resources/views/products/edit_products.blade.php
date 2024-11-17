<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Edit Product</title>
</head>
<body>
    <form method="post" action="{{ route('update.products') }}" enctype="multipart/form-data">
    @csrf
        <div class="container">
            <button class="back-btn"><a href="{{route('view.products')}}">Back</a></button>
            <h1>Edit Product</h1>
            <input type="hidden" value="{{ $product->product_id }}" name="product_id">
            <div class="input">
                <input type="text" name="pdt_name" value="{{ $product->pdt_name}}" placeholder="Product Name">
                @error('pdt_name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="input">
                <input type="text" name="price" value="{{ $product->price}}" placeholder="Price">
                @error('price')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div class="image">
                <input type="file" name="image">
                <img width ="100px" src="{{ asset('images/'.$product->image) }}">
            </div>
            <div class="input">
                <input type="submit" name="submit" value="UPDATE">
            </div>
        </div>
    </form>
</body>
</html>
