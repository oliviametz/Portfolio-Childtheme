const backToTopButton = document.getElementById('back-to-top');
const sizeUpButtons = document.querySelectorAll('.size-up-icon');


window.addEventListener('scroll', () => {
    if (window.scrollY > 650) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});


backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});




sizeUpButtons.forEach((button) => {
    button.addEventListener('click', function () {
        fullsizeUrl = this.parentElement.querySelector('img').getAttribute('data-full-size-url');

        overlay = document.createElement('div');
        overlay.id = 'overlay';
        overlay.innerHTML = '<img id="full-image" src="' + fullsizeUrl + '" style="max-width: 90%; max-height: 90%;">';
        document.body.appendChild(overlay);


        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                this.style.display = 'none';
                document.querySelector('nav').classList.remove('d-none');
                backToTopButton.classList.remove('d-none');
            }



        });


        backToTopButton.classList.add('d-none');
        document.querySelector('nav').classList.add('d-none');
    });


})







