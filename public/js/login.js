document.addEventListener('DOMContentLoaded', function () {

    /* Animasi tampilan awal */
    const elementsToAnimate = document.querySelectorAll('.fade-in-up');

    elementsToAnimate.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('show');
        }, index * 150); // delay 150ms per elemen
    });

    //logic loginnya belom ada, nunggu data duls..
});


