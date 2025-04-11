document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById('menu-toggle');
    const mainMenu = document.getElementById('main-menu');

    menuToggle.addEventListener('click', function () {
        if (mainMenu.classList.contains('menu-popin')) {
            mainMenu.classList.remove('menu-popin');
            mainMenu.style.display = 'none';
            menuToggle.classList.toggle('open');
        } else {
            mainMenu.style.display = 'flex';
            setTimeout(() => {
                mainMenu.classList.add('menu-popin');
                menuToggle.classList.toggle('open');
                mainMenu.classList.remove('close-menu');
            }, 10);
        }
    });

    const mainMenus = mainMenu.querySelectorAll('a');
    if (window.innerWidth < 700) {
        mainMenus.forEach(link => {
            link.addEventListener('click', function () {
                mainMenu.classList.remove('menu-popin');
                mainMenu.classList.add('close-menu');
                menuToggle.classList.toggle('open');
            });
        });
    }
});