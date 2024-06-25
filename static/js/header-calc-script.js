document.addEventListener('DOMContentLoaded', function() {
    const currentUrl = window.location.href;
    const calculatorLink = document.querySelector('.navigation__link[href$="#calc"]');
    const commencerButton = document.querySelector('.header__rightItem a[href="#calc"]');
    
    function smoothScrollToCalc(event) {
        event.preventDefault();
        document.getElementById('calc').scrollIntoView({ behavior: 'smooth' });
    }

    if (calculatorLink) {
        calculatorLink.addEventListener('click', function(event) {
            if (!currentUrl.includes(baseUrl)) {
                event.preventDefault();
                window.location.href = baseUrl + '/#calc';
            } else {
                smoothScrollToCalc(event);
            }
        });
    }

    if (commencerButton) {
        commencerButton.addEventListener('click', smoothScrollToCalc);
    }

    if (currentUrl.includes('#calc')) {
        document.getElementById('calc').scrollIntoView({ behavior: 'smooth' });
    }
});