<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Products: </h1>
<p>
    <a href="{{ route('products.create') }}">
        <button type="button">Create New Product</button>
    </a>
</p>
<br>
<hr>
@foreach ($products as $product)
    <p> Product Id: {{ $product->scu }}</p>
    <p> Product Title: {{ $product->title }}</p>
    <p> Product Description: {{ $product->description }}</p>
    <p> Product Price: {{ $product->price }}</p>
    <p> Product Qty: {{ $product->quantity }}</p>
    <a href="{{ route('products.edit', $product->id) }}"><button  type="button">Edit Product</button></a>
    <br><br>
    <a href="{{ route('products.show', $product->id) }}">Show Product</a>
    <br><br>
    <form action="{{ route('products.destroy', $product->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Product</button>
    </form>
    <br>
    <hr>
@endforeach

</body>
</html>
