const modal = document.querySelector(".modal-create");
const btnOpenModal = document.querySelector(".btn-open-modal-create");
const btnCloseModal = document.querySelector(".btn-close-modal-create");

btnOpenModal.addEventListener("click", () => {
    modal.style.display = "flex";
});

btnCloseModal.addEventListener("click", () => {
    modal.style.display = "none";
});
