<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href="{{URL::asset('css/style_index.css')}}">
    <script src="{{URL::asset('js/script.js')}}" defer></script>
</head>

<body>
@include('partials.header')
<section class="video-section">
  <div class="overlay"></div>
  <video autoplay loop width="100%" height="100%">
    <source src="{{URL::asset('video/Homepage.mp4')}}" type="video/mp4">
  </video>
  <div class="overlay-container">
    <h1>Welcome to <span class="highlight">Smart Catch</span>!</h1>
    <h2>Sustainable Fishing starts here</h2>
    <div class="button-container">
      <button class="read-more-button" onclick="scrollToAboutSection()">Read more</button>
    </div>
  </div>
</section>


  <div class="video-overlay">
    <div class="text">
        <h1>About the company</h1>
        <h2>Key features for our company</h2>
        </div>
  </div>


    <section class="about-section" id="about-section">

        <div class="image-container1">
            <img src="{{URL::asset('img/computer.png')}}" alt="">
            <img src="{{URL::asset('img/Hartje.png')}}" alt="">
            <img src="{{URL::asset('img/Diamond.png')}}" alt="">
            <img src="{{URL::asset('img/Moer.png')}}" alt="">
        </div>

        <div class="text-container">
            <h1>Responsive</h1>
            <h2>Passion</h2>
            <h3>Design</h3>
            <h4>Support</h4>
        </div>
    </section>


    <section class="additional-section">
        <div class="content-container">
            <div class="text">
                <h1>WELCOME TO THE FUTURE OF FISHING!</h1>
                <p>We are excited to introduce our innovative fish sorting system Smart Catch to you. In a world where we strive for a good balance with nature, we believe that our technology can contribute to a sustainable future. With our system we want to help fishermen protect the sea, so that overfishing is a thing of the past and our oceans are full of life again. Discover the simple and effective way our system is shaping the future of fishing!</p>
              <a href="/support">
                <button class="contact-button">Contact us</button>
              </a>
              </div>
            <div class="image-container2">
                <img src="{{URL::asset('img/Wat-is-overbevissing-Desktop.jpg')}}" alt="Additional Image">
            </div>
        </div>
    </section>


    <div class="titel">
        <h1>Meet the team</h1>
    </div>

    <div class="scroll-container">

        <div class="scroll-item">
            <img src="{{URL::asset('img/bart.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
              <div class="name">Bart van Gestel</div>
            </div>
        </div>

        <div class="scroll-item">
            <img src="{{URL::asset('img/dylan.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
              <div class="name">Dylan van den Heuvel</div>
            </div>
        </div>

        <div class="scroll-item">
            <img src="{{URL::asset('img/tim.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
              <div class="name">Tim Iracá</div>
            </div>
        </div>

        <div class="scroll-item">
            <img src="{{URL::asset('img/igor.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
              <div class="name">Igor Golański</div>
            </div>
          </div>

          <div class="scroll-item">
            <img src="{{URL::asset('img/Leon 2024-01-16 om 13.11.21.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
                <div class="name">Leon Hardenbol</div>
            </div>
          </div>

          <div class="scroll-item">
            <img src="{{URL::asset('img/Safa 2024-01-16 om 13.11.33.png')}}" alt="" class="image" style="width:100%">
            <div class="middle">
              <div class="name">Safa Hassan</div>
            </div>
            </div>
      </div>

    <div class="info-container">
            <div class="text-container2">
                <h1>14+</h1>
                <p>Partners</p>
            </div>

            <div class="text-container2">
                <h1>8+</h1>
                <p>Projects done</p>
            </div>

            <div class="text-container2">
                <h1>22+</h1>
                <p>Happy clients</p>
            </div>

            <div class="text-container2">
                <h1>10+</h1>
                <p>Meetings</p>
            </div>
    </div>

        <div class="new-section">
        <h1>Become part of the future of fishing now</h1>
        <p>Explore our amazing products in our <a href="/shop">shop</a>.</p>
        </div>


    <footer>
      <h1>SmartCatch</h1>
      <p>info@mysite.com</p>
      <p>&copy; 2023 SmartCatch. Alle rechten voorbehouden.</p>
    </footer>

</body>
</html>
