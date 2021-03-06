/**
     * See: http://www.css-101.org/articles/ken-burns_effect/css-transition.php
     */

    /**
     * The idea is to cycle through the images to apply the "js-animating class to them every n seconds.
     * We can't simply set and remove that class though, because that would make the previous image move back into its original position while the new one fades in.
     * We need to keep the class on two images at a time (the two that are involved with the transition).
     */

    (function() {

        // Set the 'js-animating' class on the first image when the page loads
        // document.getElementById('slideshow').getElementsByTagName('img')[0].classList.add("js-animating");

        window.setInterval(kenBurns, 7000);

        // the third variable is to keep track of where we are in the loop
        // if it is set to 1 (instead of 0) it is because the first image is styled when the page loads
        var images = document.getElementById('js-slideshow').getElementsByTagName('img'),
            numberOfImages = images.length,
            i = 1;

        function kenBurns() {
            if (i == numberOfImages) {
                i = 0;
            }
            images[i].classList.add("js-animating");

            // we can't remove the class from the previous element or we'd get a bouncing effect so we clean up the one before last
            // (there must be a smarter way to do this though)
            if (i === 0) {
                images[numberOfImages - 2].classList.remove("js-animating");
            }
            if (i === 1) {
                images[numberOfImages - 1].classList.remove("js-animating");
            }
            if (i > 1) {
                images[i - 2].classList.remove("js-animating");
            }
            i++;

        }
    })();
