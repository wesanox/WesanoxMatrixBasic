document.addEventListener('DOMContentLoaded', function () {

    const stickyScrollConfig = {
        enabled: true,          // Master switch to enable/disable the sticky scroll effect
        containerSelector: '.smooth_scroll',
        itemSelector: '.snap-item',
        stickyOffsetTop: 120,      // Top offset for sticky position in pixels.
        stickyOffsetBottom: 120,     // Bottom offset to create a "window" for the sticky item. The item's height will be calculated based on this and the top offset.
        itemGap: 50              // The amount of scroll (in pixels) to "pause" between one item sticking and the next one starting to scroll over it.
    };

    /**
     * Initializes the sticky scroll effect
     * @param {object} config - The configuration object for the sticky scroll effect.
     */
    function initStickyScroll(config) {
        if (!config.enabled) {
            return;
        }

        const container = document.querySelector(config.containerSelector);
        if (!container) {
            console.warn(`Sticky scroll container not found: ${config.containerSelector}`);
            return;
        }

        const items = container.querySelectorAll(config.itemSelector);
        if (items.length === 0) {
            return;
        }

        // Inject spacer divs between items to create a reliable scroll pause.
        items.forEach((item, index) => {
            if (index < items.length - 1) { // No spacer after the last item.
                const spacer = document.createElement('div');
                spacer.style.height = `${config.itemGap}px`;
                item.insertAdjacentElement('afterend', spacer);
            }
        });

        // 1. Calculate the dynamic height of each item and the total container height.
        const itemHeightCalc = `calc(100vh - ${config.stickyOffsetTop}px - ${config.stickyOffsetBottom}px)`;
        const totalGapHeight = (items.length - 1) * config.itemGap;

        // Set the container height.
        // Create a temporary item to measure its height.
        const tempItem = document.createElement('div');
        tempItem.style.height = itemHeightCalc;
        tempItem.style.position = 'absolute';
        tempItem.style.visibility = 'hidden';
        document.body.appendChild(tempItem);
        const itemHeightInPixels = tempItem.offsetHeight;
        document.body.removeChild(tempItem);


        // 2. Apply sticky positioning and individual styles to each item.
        items.forEach((item, index) => {
            item.style.height = itemHeightCalc;
            item.style.position = 'sticky';
            item.style.top = `${config.stickyOffsetTop}px`;
        });
    }

    // Initialize the component with the configuration
    initStickyScroll(stickyScrollConfig);

});
