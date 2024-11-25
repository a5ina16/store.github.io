<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #1e1e1e;
            color: #f5f5f5;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #555;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            margin: 5px 0;
        }
        input {
            background-color: #555;
            color: #f5f5f5;
        }
        button {
            cursor: pointer;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }
        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        .input1 {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .input1 input,
        .input1 button {
            flex: 1;
            min-width: 150px;
        }
        .product-image {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #555;
        }
    </style>
</head>
<body>

    <h2>Admin Panel</h2>
    <table id="productTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name Product</th>
                <th>Price</th>
                <th>Count</th>
                <th>CPU</th>
                <th>RAM</th>
                <th>Save</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <form action="{{ route('updateProduct', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <td><img src="{{ $product->image }}" alt="Product Image" class="product-image"></td>
                        <td><input type="text" name="name" value="{{ $product->name }}" required></td>
                        <td><input type="number" name="price" value="{{ $product->price }}" required></td>
                        <td><input type="number" name="quantity" value="{{ $product->quantity }}" required></td>
                        <td><input type="text" name="cpu" value="{{ $product->cpu }}" required></td>
                        <td><input type="text" name="ram" value="{{ $product->ram }}" required></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </td>
                    </form>
                    <td>
                        <form action="{{ route('deleteProduct', $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا المنتج؟');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="input1">
        <form action="{{ route('addProduct') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="اسم المنتج" required>
            <input type="number" name="price" placeholder="السعر" required>
            <input type="number" name="quantity" placeholder="الكمية" required>
            <input type="text" name="image" placeholder="رابط الصورة" required>
            <input type="text" name="cpu" placeholder="المعالج" required>
            <input type="text" name="ram" placeholder="الذاكرة العشوائية" required>
            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
    </div>

</body>
</html>
