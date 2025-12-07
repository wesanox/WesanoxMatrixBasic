document.addEventListener('DOMContentLoaded', function () {
    const baseConfig = {
        enabled: true,
        containerSelector: '.smooth_scroll',
        itemSelector: '.snap-item',
        stickyOffsetTop: 120,
        stickyOffsetBottom: 120,
        itemGap: 50
    };

    function getNumberAttr(el, name, fallback) {
        const v = el.getAttribute(name);
        return v != null && v !== '' && !isNaN(+v) ? +v : fallback;
    }

    function measureCalcHeight(calcStr) {
        const tmp = document.createElement('div');
        tmp.style.height = calcStr;
        tmp.style.position = 'absolute';
        tmp.style.visibility = 'hidden';
        tmp.style.pointerEvents = 'none';
        document.body.appendChild(tmp);
        const px = tmp.offsetHeight;
        document.body.removeChild(tmp);
        return px;
    }

    function initStickyScrollForContainer(container, defaults) {
        if (container.dataset.stickyInit === '1') return;
        container.dataset.stickyInit = '1';

        const config = {
            ...defaults,
            stickyOffsetTop:   getNumberAttr(container, 'data-sticky-top', defaults.stickyOffsetTop),
            stickyOffsetBottom:getNumberAttr(container, 'data-sticky-bottom', defaults.stickyOffsetBottom),
            itemGap:           getNumberAttr(container, 'data-item-gap', defaults.itemGap)
        };

        const items = container.querySelectorAll(config.itemSelector);
        if (!items.length) return;

        items.forEach((item, i) => {
            if (i < items.length - 1) {
                const spacer = document.createElement('div');
                spacer.className = 'sticky-spacer';
                spacer.style.height = `${config.itemGap}px`;
                item.insertAdjacentElement('afterend', spacer);
            }
        });

        const applyLayout = () => {
            const itemHeightCalc = `calc(100vh - ${config.stickyOffsetTop}px - ${config.stickyOffsetBottom}px)`;

            items.forEach(item => {
                item.style.height = itemHeightCalc;
                item.style.position = 'sticky';
                item.style.top = `${config.stickyOffsetTop}px`;
                item.style.willChange = 'transform'; // micro-optimierung
                item.style.overflow = 'hidden';
            });
        };

        applyLayout();

        let rAF;
        const onResize = () => {
            if (rAF) cancelAnimationFrame(rAF);
            rAF = requestAnimationFrame(applyLayout);
        };
        window.addEventListener('resize', onResize);
        window.addEventListener('orientationchange', onResize);

        // Cleanup, falls du SPA/Navigo/htmx verwendest:
        container.addEventListener('sticky:destroy', () => {
            window.removeEventListener('resize', onResize);
            window.removeEventListener('orientationchange', onResize);
            container.querySelectorAll('.sticky-spacer').forEach(n => n.remove());
            items.forEach(item => {
                item.style.height = '';
                item.style.position = '';
                item.style.top = '';
                item.style.willChange = '';
                item.style.overflow = '';
            });
            container.dataset.stickyInit = '0';
        });
    }

    function initAll() {
        if (!baseConfig.enabled) return;
        document.querySelectorAll(baseConfig.containerSelector).forEach(container => {
            initStickyScrollForContainer(container, baseConfig);
        });
    }

    initAll();
});