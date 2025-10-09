/*
    BACKEND INTEGRATION NOTE:
    This script creates a data-driven parallax effect. It looks for elements inside `.parallax-hero`
    that have `data-speed-x` or `data-speed-y` attributes. You just needs to
    add these attributes to any element to make it move on scroll.
*/
window.addEventListener('scroll', () => {
    // Select all child elements within any .parallax-hero section
    const parallaxElements = document.querySelectorAll('.parallax-hero > *');
    let value = window.scrollY;

    parallaxElements.forEach(el => {
        // Get speed values from data attributes, defaulting to 0 if not present
        const speedY = parseFloat(el.dataset.speedY || 0);
        const speedX = parseFloat(el.dataset.speedX || 0);

        // Check if the element should move
        if (speedY !== 0 || speedX !== 0) {
            // Calculate translation values
            const translateY = value * speedY;
            const translateX = value * speedX;

            // This moves the element based on scroll position and speed attributes.
            el.style.transform = `translateX(${translateX}px) translateY(${translateY}px)`;
        }
    });
});