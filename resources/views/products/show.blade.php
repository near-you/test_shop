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
<h1>Product: </h1>
<p> Product Id: {{ $product->scu }}</p>
<p> Product Title: {{ $product->title }}</p>
<p> Product Description: {{ $product->description }}</p>
<p> Product Price: {{ $product->price }}</p>
<p> Product Qty: {{ $product->quantity }}</p>
</body>
</html>
