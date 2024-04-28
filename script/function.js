document.addEventListener("DOMContentLoaded", function() {
    var modalBtns = document.querySelectorAll('.openModalBtn');

    modalBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var modal = btn.nextElementSibling;

            // Show the modal
            modal.style.display = 'block';
            var closeBtn = modal.querySelector('.close');
            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });
        });
    });

    window.addEventListener('click', function(event) {
        modalBtns.forEach(function(btn) {
            var modal = btn.nextElementSibling;
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
});

// --------------Login/Register-----------

const container = document.getElementById('container');

const registerBtn = document.getElementById('register');

const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active")
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active")
});

// -------Avoid going back-----------

window.onload = function () {
    if (window.history && window.history.pushState) {
        window.history.pushState('forward', null, './#forward');
        window.onpopstate = function () {
            window.history.pushState('forward', null, './#forward');
            location.replace('index.php');
        };
    }
};

// -------------modal logout-------------

document.addEventListener("DOMContentLoaded", function() {
    const logoutLink = document.querySelector(".logout");

    logoutLink.addEventListener("click", function(e) {
        e.preventDefault();
        $('#exampleModal').modal('show');
    });
});

function redirectToAnotherPage() {
    window.location.href = 'index.php';
}

// modal for adding successfully
document.addEventListener('DOMContentLoaded', () => {
    const openModalBtn = document.getElementById('openModalBtn');
    const modal = document.getElementById('myModal');
    const closeBtn = document.getElementsByClassName('close')[0];

    openModalBtn.addEventListener('click', () => {
        modal.style.display = 'block';
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
