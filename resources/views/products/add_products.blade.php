<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Add Products</title>
</head>
<body>
    <form method="post" action="{{ route('save.products') }}" enctype="multipart/form-data">
    @csrf
    <div id="btn-div"><button class="back-btn"><a href="{{route('view.products')}}">Back</a></button></div>
        <div class="container">

            <h1>Add Product</h1>
            <div class="input">
                <input type="text" name="pdt_name" placeholder="Product Name" value="{{ old('pdt_name') }}">
                @error('pdt_name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="input">
                <input type="text" name="price" placeholder="Price" value="{{ old('price') }}">
                @error('price')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div class="input">
                <input type="file" name="image" placeholder="Image">
                @error('image')
                <p>{{ $message }}</p>
            @enderror
            </div>
            <div class="input">
                <input type="submit" name="submit" value="ADD PRODUCT">
            </div>
        </div>
    </form>
</body>
</html>
