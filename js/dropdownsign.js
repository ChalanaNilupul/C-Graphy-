function popsign() {
    const modal = document.querySelector("#modalsign");
    const openModal = document.querySelector("#popsign");
    const closeModal = document.querySelector("#closesign");

    openModal.addEventListener('click', () => {
        modal.showModal();
    })

    closeModal.addEventListener('click', () => {
        modal.close();
    })
}