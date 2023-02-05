import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.setTimeout(() => {
    setTimeout(() => {
        let alertElement = document.querySelector('#alert-session');
        alertElement.style.opacity = 0;
        setTimeout(() => {
            alertElement.remove();
        }, 500);
    }, 3000);
}, 0);
