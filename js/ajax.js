let categoryChoice = "";

document.addEventListener("DOMContentLoaded", function() {    
    filterListeners();
    load_ajax();
});

function filterListeners() {
    const options = document.querySelectorAll('.bloc-filtres .filtre-option');

    options.forEach(function(option) {
        option.addEventListener('click', function() {
            changeColorFilter();
            changeFilter(option);
        });
    });
}

function changeColorFilter () {
   
    const options = document.querySelectorAll('.bloc-filtres .filtre-option');

    options.forEach(option => {
        option.addEventListener('click', function() {
            options.forEach(opt => opt.classList.remove('selectionne'));
            this.classList.add('selectionne');
        });
    });
}

function changeFilter(option) {
    if (option.classList.contains('tout-filtre')) {
        categoryChoice = "";
    } else if (option.classList.contains('choix-filtre')) {
        const texteElement = option.querySelector('p');
        if (texteElement) {
            categoryChoice = texteElement.textContent;
        }
    }
    load_ajax();
    console.log(categoryChoice);
}

// Fonction pour charger les données sans recharger la page via AJAX
function load_ajax() {
    let category = categoryChoice;

    const data = {
        'action': 'filter_posts',
        'category': category,
        'ajax_nonce' : ajax_object.nonce
    }

    fetch(ajax_object.ajax_url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Cache-Control': 'no-cache',
        },
        body: new URLSearchParams(data),
    })
    .then(response => response.text())
    .then(body => {
        const cataloguePortfolio = document.querySelector('.portfolio');
        cataloguePortfolio.innerHTML = body;
    });

}