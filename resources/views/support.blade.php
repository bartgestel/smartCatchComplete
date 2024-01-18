<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Catch</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Smart Catch">
    <meta name="author" content="Safa Hassan">
    <link rel="stylesheet" href="{{URL::asset('css/style_support.css')}}">
    <script src="{{URL::asset('js/script.js')}}" defer></script>
</head>


<body>
    @include('partials.header')

    <section class="img-section">
        <div class="img-overlay"></div>
        <img src="{{URL::asset('video/support.mov')}}" alt="" width="100%" height="300px">
        <div class="overlay-container">
            <h1 class="contact-header">CONTACT US</h1>
            <p>Bij de Stille Oceaan staat Smart Catch voor innovatie.</p>
        </div>
        <div class="video-overlay"></div>
    </section>


    <div class="contact-container contact-section">
        <div class="left-box">
            <div class="text-container">
            <h1>CONTACT</h1>
            <h2>Rachelsmolen 1,5612MA Eindhoven</h2>
            </div>

            <div class="Map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.381971622239!2d5.477202275524909!3d51.45114301481298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d9bbf31bd8fb%3A0xbb209e5872fefac8!2sFontys%20Hogeschool%20ICT%20locatie%20Eindhoven!5e0!3m2!1snl!2snl!4v1705406261170!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="right-box">
            <div class="form-group">
                <div class="name-email-container">
                    <label for="name">Name</label>
                    <label for="email">E-mail</label>
                </div>
                <div class="input-container">
                    <input type="text" id="name" name="name" placeholder="Your name">
                    <input type="email" id="email" name="email" placeholder="Your email">
                </div>
            </div>

            <div class="form-group">
                <div class="phone-address-container">
                    <label for="phone">Phone</label>
                    <label for="address">Address</label>
                </div>
                <div class="input-container">
                    <input type="tel" id="phone" name="phone" placeholder="Your phone">
                    <input type="text" id="address" name="address" placeholder="Your address">
                </div>
            </div>

            <div class="form-group">
                <div class="subject-container">
                    <label for="subject">Subject</label>
                </div>
                <div class="input-container2">
                    <input type="text" id="subject" name="subject" placeholder="Your message subject">
                </div>
            </div>

            <div class="form-group">
                <div class="message-container">
                    <label for="subject">Place your message here</label>
                </div>
                <div class="input-container2">
                    <input type="text" id="subject" name="subject">
                </div>
            </div>

            <div class="button-container">
                <a href="contact.html">
                    <button class="buy-now-button">Send</button>
                </a>
            </div>
            <div class="thanks">
            <h1>Thanks for the submission! </h1>
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
