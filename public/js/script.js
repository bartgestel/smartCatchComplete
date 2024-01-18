const contentEditable = document.getElementById("content-editable");
const placeholder = document.getElementById("placeholder");

function handleInput(event) {
  console.log("handleInput called");
  console.log("event.key:", event.key);

  if (event.key === "Enter") {
    console.log("Enter pressed");
    const searchText = contentEditable.textContent.trim().toLowerCase();
    console.log("searchText:", searchText);

    if (searchText === "ship1") {
      console.log("Redirecting to schip1.html");
      window.location.href = "schip1.html";
    }
  }

  if (contentEditable.textContent.trim() === "") {
    placeholder.style.display = "block";
  } else {
    placeholder.style.display = "none";
  }
}



function scrollToAboutSection() {
        var aboutSection = document.getElementById("about-section");
        var headerHeight = document.querySelector("header").offsetHeight;
        var aboutSectionTop = aboutSection.offsetTop - headerHeight;

       
        window.scrollTo({
            top: aboutSectionTop,
            behavior: "smooth"
        });
    }








document.addEventListener("DOMContentLoaded", function () {
    var imageContainer = document.querySelector('.image-container2 img');
    var overlay = document.querySelector('.image-container2 .overlay');

    window.addEventListener('scroll', function () {
        var scrollPosition = window.scrollY;
        var offset = imageContainer.offsetTop;

        if (scrollPosition > offset - window.innerHeight / 2) {
            imageContainer.style.opacity = 1;
            imageContainer.style.transform = 'translateY(0)';
            overlay.style.opacity = 1;
            overlay.style.transform = 'translateY(0)';
        }
    });
});

    



window.addEventListener('scroll', function() {
  var body = document.body;
  var scrollPosition = window.scrollY;

  if (scrollPosition > 50) {
    body.classList.add('scrolled');
  } else {
    body.classList.remove('scrolled');
  }
});




window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  document.querySelector('.video-section::after').style.transform = 'translateX(' + scrollPosition + 'px)';
});


document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    var aboutSection = document.querySelector(".about-section");
    var additionalSection = document.querySelector(".additional-section");

    var aboutSectionOffset = aboutSection.getBoundingClientRect().top;
    var additionalSectionOffset = additionalSection.getBoundingClientRect().top;

    var screenHeight = window.innerHeight;

    if (aboutSectionOffset < screenHeight) {
      aboutSection.classList.add("show");
    }

    if (additionalSectionOffset < screenHeight) {
      additionalSection.classList.add("show");
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    var titelSection = document.querySelector(".titel h1");
    var titelOffset = titelSection.getBoundingClientRect().top;
    var screenHeight = window.innerHeight;

    if (titelOffset < screenHeight) {
      titelSection.classList.add("show");
    }
    var scrollContainer = document.querySelector(".scroll-container");
    var scrollContainerOffset = scrollContainer.getBoundingClientRect().top;

    if (scrollContainerOffset < screenHeight) {
      scrollContainer.classList.add("show");
    }

  });
});

  document.addEventListener("DOMContentLoaded", function () {
    const infoContainer = document.querySelector(".info-container");

    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function handleScroll() {
      if (isInViewport(infoContainer)) {
        infoContainer.classList.add("animate");
        window.removeEventListener("scroll", handleScroll);
      }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // 

  });



  document.addEventListener("DOMContentLoaded", function () {
    const newSection = document.querySelector(".new-section");

    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    function handleScroll() {
      if (isInViewport(newSection)) {
        newSection.classList.add("animate");
        window.removeEventListener("scroll", handleScroll);
      }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); 

    
  });



  function changeImage(src, text, event) {
    document.getElementById('mainImage').src = src;

    
    const fotos = document.querySelectorAll('.Foto');
    fotos.forEach(foto => {
        foto.classList.remove('active');
    });

  
    const clickedFoto = event.currentTarget;
    clickedFoto.classList.add('active');
}

function search(){
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("search-input");
  filter = input.value.toUpperCase();
  ul = document.getElementById("search-items");
  li = ul.getElementsByTagName("li");

  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];

    txtValue = a.textContent || a.innerText;

    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    }
    else {
      li[i].style.display = "none";
    }
  }
}
