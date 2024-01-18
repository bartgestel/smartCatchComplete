<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href="{{URL::asset('css/style_shop.css')}}">
</head>


<body>

@include('partials.header')

<section class="additional-section">
    <div class="content-container">
        <div class="image-container1">
            <img src="{{URL::asset('img/blanco-vierkant-kalkpapier-200.480.p1.png')}}" alt="Additional Image" id="mainImage">
        </div>

        <div class="text">
            <h1>SmartCatch</h1>
            <h2>Een revolutionaire vissorteersysteem.</h2>
            <h3>€1200</h3>
            <h4>Quantity</h4>
            <input type="number" name="quantity" id="quantity" min="1">
            <div class="button-container">
                <a href="/contact">
                    <button class="buy-now-button">Buy Now</button>
                </a>
            </div>
        </div>
    </div>
</section>


<footer>
  <h1>SmartCatch</h1>
  <p>info@mysite.com</p>
  <p>&copy; 2023 SmartCatch. Alle rechten voorbehouden.</p>
</footer>

</body>
</html>
