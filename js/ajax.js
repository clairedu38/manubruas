let categoryChoice = "";

document.addEventListener("DOMContentLoaded", function() {    
    filterListeners();
    load_ajax();
});

function filterListeners() {
    const options = document.querySelectorAll('.bloc-filtres .filtre-option');

    options.forEach(function(option) {
        option.addEventListener('click', function() {
            updateSelectedClass(option); // <- ici
            changeFilter(option);
        });
    });
}

// Cette fonction met à jour la classe "selectionne"
function updateSelectedClass(selectedOption) {
    const options = document.querySelectorAll('.bloc-filtres .filtre-option');
    options.forEach(opt => opt.classList.remove('selectionne'));
    selectedOption.classList.add('selectionne');
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