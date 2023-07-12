const modal = document.querySelector(".container-modal");
const btnOpenModal = document.querySelector(".btn-open");
const btnCloseModal = document.querySelector(".btn-closeModal");

btnOpenModal.addEventListener("click", () => {
    modal.style.display = "flex";
});

btnCloseModal.addEventListener("click", () => {
    modal.style.display = "none";
});
