<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/style_aboutus.css')}}">
    <script src="{{URL::asset('js/script.js')}}" defer></script>
</head>
<body>
    @include('partials.header')
    <div class="content-container">
        <div class="image-container1">
          <div class="image-overlay"></div>
          <img src="{{URL::asset('img/Scherm­afbeelding 2024-01-15 om 15.14.15.png')}}" alt="Additional Image">
        </div>
        <div class="text">
          <h1>ABOUT US</h1>
          <p>Smart Catch is a revolutionary fish sorting system dedicated to combating overfishing. Our technology selectively separates target species, minimizing bycatch and promoting responsible fishing practices. </p>
          <p>With a commitment to sustainability, efficiency, and reducing environmental impact, Smart Catch is shaping the future of fishing for a healthier and more balanced marine ecosystem.                </p>
          <p>Join us on our mission to preserve oceans, empower fishermen, and create a more sustainable and harmonious relationship with the sea. Smart Catch — redefining the way we fish for a better and brighter future.</p>
          <a href="/support"
          class="contact-button">Read more</a>
        </div>
      </div>


      <div class="image-container">
        <img src="{{URL::asset('img/dylan.png')}}" alt="Dylan van den Heuvel">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Dylan van den Heuvel</h2>
            <p>Software student</p>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="{{URL::asset('img/tim.png')}}" alt="Tim">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Tim Iracá</h2>
            <p>Software student</p>
          </div>
        </div>
      </div>


      <div class="image-container">
        <img src="{{URL::asset('img/bart.png')}}" alt="Bart">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Bart van Gestel</h2>
            <p>Software student</p>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="{{URL::asset('img/igor.png')}}" alt="Igor">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Igor Golański</h2>
            <p>Software student</p>
          </div>
        </div>
      </div>



      <div class="image-container">
        <img src="{{URL::asset('img/Leon 2024-01-16 om 13.11.21.png')}}" alt="Image">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Leon Hardenbol</h2>
            <p>Technology student</p>
          </div>
        </div>
      </div>

      <div class="image-container">
        <img src="{{URL::asset('img/Safa 2024-01-16 om 13.11.33.png')}}" alt="Image">
        <div class="overlay">
          <div class="text-overlay">
            <h2>Safa Hassan</h2>
            <p>Media student</p>
          </div>
        </div>
      </div>


      <footer>
        <h1>SmartCatch</h1>
        <p>info@mysite.com</p>
        <p>&copy; 2023 SmartCatch. Alle rechten voorbehouden.</p>
      </footer>



</body>
</html>
