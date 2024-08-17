document.addEventListener('DOMContentLoaded', function () {
    const flesh = document.querySelector('.flesh');
    const sideUl = document.querySelector('.side--ul');
    const cancelBtn = document.querySelector('.side--ul .cancel img');

    flesh.addEventListener('click', function () {
        sideUl.style.display = 'block';
        flesh.style.display = 'none';
    });

    cancelBtn.addEventListener('click', function () {
        sideUl.style.display = 'none';
        flesh.style.display = 'block';
    });
});

//--------------------hero-----------------//

let currentIndex = 0;
const contents = document.querySelectorAll('.content-element');
const numbers = document.querySelectorAll('.slider .number p');
const prevButton = document.querySelector('.slider button:first-of-type');
const nextButton = document.querySelector('.slider button:last-of-type');

function showContent(index) {
    contents.forEach(content => {
        content.hidden = true;
        content.style.opacity = '0';
    });
    numbers.forEach(num => num.classList.remove('active'));

    const contentToShow = contents[index];
    if (contentToShow) {
        contentToShow.hidden = false;
        setTimeout(() => contentToShow.style.opacity = '1', 50);
        numbers[index].classList.add('active');
    }
}

function nextContent() {
    currentIndex = (currentIndex + 1) % contents.length;
    showContent(currentIndex);
}

function prevContent() {
    currentIndex = (currentIndex - 1 + contents.length) % contents.length;
    showContent(currentIndex);
}

let sliderInterval = setInterval(nextContent, 5000);

numbers.forEach((number, index) => {
    number.addEventListener('click', () => {
        clearInterval(sliderInterval);
        showContent(index);
        currentIndex = index;
        sliderInterval = setInterval(nextContent, 5000);
    });
});

prevButton.addEventListener('click', () => {
    clearInterval(sliderInterval);
    prevContent();
    sliderInterval = setInterval(nextContent, 5000);
});

nextButton.addEventListener('click', () => {
    clearInterval(sliderInterval);
    nextContent();
    sliderInterval = setInterval(nextContent, 5000);
});

showContent(currentIndex);
