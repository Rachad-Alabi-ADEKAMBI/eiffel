function displayMenu() {
    document.getElementById("header__list").style.display = "block";
    document.getElementById("open").style.display = "none";
    document.getElementById("close").style.display = "block";

}

function closeMenu() {
    document.getElementById("header__list").style.display = "none";
    document.getElementById("close").style.display = "none";
    document.getElementById("open").style.display = "block";
}



var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
