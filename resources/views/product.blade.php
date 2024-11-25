<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        @keyframes blink {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            margin: 0;
            padding: 20px;
            color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            position: relative;
            overflow: hidden;
        }

        .stars {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .stars div {
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            opacity: 0;
            border-radius: 50%;
            animation: blink 2s infinite ease-in-out;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 600px;
            position: absolute;
            top: 20px;
        }

        .search-input {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #fff url('data:image/svg+xml;base64,...') no-repeat 10px center;
            background-size: 20px;
            padding-left: 40px;
            transition: box-shadow 0.3s;
        }

        .search-input:focus {
            box-shadow: 0 0 10px 2px #8a2be2;
        }

        .search-button {
            padding: 10px 20px;
            background-color: #8a2be2;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .search-button:hover {
            background-color: #7a1eae;
            box-shadow: 0 0 15px 2px #8a2be2;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 100px;
            width: 100%;
            max-width: 1400px;
        }

        .card {
            border: 1px solid #444;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 20px;
            width: 280px;
            transition: box-shadow 0.3s, transform 0.6s;
            position: relative;
            perspective: 1000px;
        }

        .card:hover {
            box-shadow: 0 0 20px 4px #4b0082;
        }

        .card.clicked {
            transform: rotateY(15deg);
        }

        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .product-info {
            width: 100%;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #4b0082;
            margin: 10px 0;
        }

        .price, .quantity {
            font-size: 18px;
            color: #4b0082;
            margin: 5px 0;
        }

        .buy {
            width: 100%;
            padding: 10px;
            background-color: #f5f5f5;
            color: #121212;
            font-size: 18px;
            font-weight: bold;
            border: 2px solid #121212;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            margin-top: 10px;
        }

        .buy:hover {
            background-color: #4b0082;
            color: #fff;
            box-shadow: 0 0 15px 4px #4b0082;
        }

        .card-info {
            display: none;
        }

        .card.clicked .card-info {
            display: block;
        }

        /* إضافة تصميم جديد للأسهم */
        .scroll-arrow {
            position: fixed;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #8a2be2;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            transition: background-color 0.3s, box-shadow 0.3s;
            z-index: 100;
        }

        .scroll-arrow:hover {
            background-color: #7a1eae;
            box-shadow: 0 0 15px 2px #8a2be2;
        }

        .scroll-up {
            bottom: 80px;
        }

        .scroll-down {
            bottom: 20px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollUp = document.getElementById('scroll-up');
            const scrollDown = document.getElementById('scroll-down');

            // السهم العلوي للتمرير لأعلى الصفحة
            scrollUp.addEventListener('click', () => {
                window.scrollBy({
                    top: -window.innerHeight,
                    behavior: 'smooth'
                });
            });

            // السهم السفلي للتمرير لأسفل الصفحة
            scrollDown.addEventListener('click', () => {
                window.scrollBy({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</head>
<body>

    <div class="stars">
        <div></div>
        <div></div>
    </div>

    <div class="search-bar">
        <input type="text" id="search-input" class="search-input" placeholder="🔍">
        <button id="search-button" class="search-button">بحث</button>
    </div>

    <div class="card-container">
        @foreach($products->sortBy('name') as $product)
        <div class="card">
            <img class="image" src="{{ $product->image }}" alt="Product Image"/>
            <div class="product-info">
                <h2 class="title">{{ $product->name }}</h2>
                <h3 class="price">Price: {{ $product->price }} euro</h3>
                <h5 class="quantity">Available Quantity: {{ $product->quantity }}</h5>
                <div class="card-info">
                    <p><strong>Processor:</strong> {{ $product->cpu }}</p>
                    <p><strong>RAM:</strong> {{ $product->ram }} GB</p>
                </div>
                <button class="buy">Buy Now</button>
            </div>
        </div>
        @endforeach
    </div>

    <!-- أزرار التمرير -->
    <button id="scroll-up" class="scroll-arrow scroll-up">⬆</button>
    <button id="scroll-down" class="scroll-arrow scroll-down">⬇</button>

</body>
</html>
