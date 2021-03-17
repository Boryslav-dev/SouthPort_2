var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-sb-whatever')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.

    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = 'Заказ товара: ' + recipient
    modalBodyInput.value = recipient
})

document.addEventListener('click', function (e) {
    if (e.target.classList.contains("increase")) {
        ++e.target.parentElement.querySelector("input").value;
    } else if (e.target.classList.contains("decrease")) {
        if(e.target.parentElement.querySelector("input").value !== '0')
        --e.target.parentElement.querySelector("input").value;
    }
})
