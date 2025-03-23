import './bootstrap';
// resources/js/app.js

// resources/js/app.js

document.addEventListener('DOMContentLoaded', function () {
    // Manejar el despliegue del menú móvil
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Manejar el despliegue de subítems en desktop
    const categoriesButton = document.getElementById('categories-button');
    const categoriesDropdown = document.getElementById('categories-dropdown');

    if (categoriesButton && categoriesDropdown) {
        categoriesButton.addEventListener('click', function () {
            categoriesDropdown.classList.toggle('hidden');
        });
    }

    // Manejar el despliegue de subítems en móvil
    const categoriesButtonMobile = document.getElementById('categories-button-mobile');
    const categoriesDropdownMobile = document.getElementById('categories-dropdown-mobile');

    if (categoriesButtonMobile && categoriesDropdownMobile) {
        categoriesButtonMobile.addEventListener('click', function () {
            categoriesDropdownMobile.classList.toggle('hidden');
        });
    }
});