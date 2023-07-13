const modalEdit = document.querySelectorAll(".modal-edit");
const btnOpenModalEdit = document.querySelectorAll(".btn-open-modal-edit");
const btnCloseModalEdit = document.querySelectorAll(".btn-close-modal-edit");

btnOpenModalEdit.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        modalEdit[index].style.display = "flex";
    });
});

btnCloseModalEdit.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        modalEdit[index].style.display = "none";
    });
});
