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
<div>
    <form action="{{ route('products.update', ['product' => $id]) }}" method="post">
        @csrf
        @method('PUT')
        <p>Scu<br>
            <input type="text" name="scu">
        </p>
        <p>Title<br>
            <input type="text" name="title">
        </p>
        <p>Description<Br>
            <textarea name="description" cols="21" rows="3"></textarea></p>
        <p>Price<br>
            <input type="text" name="price">
        </p>
        <p>Quantity<br>
            <input type="text" name="quantity">
        </p>
        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
