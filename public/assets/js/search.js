const search = document.querySelector("#input-search");
const btnSearch = document.querySelector("#btn-search");
const btnCloseSearch = document.querySelector("#btn-close-search");

const cards = document.querySelectorAll(".card-note");
const sectionCards = document.querySelector(".container-notes");

btnSearch.addEventListener("click", () => {
    btnCloseSearch.style.display = "block";
    const valueSearch = search.value.toLowerCase();
    cards.forEach((card) => {
        const cardText = card.children[1].children[0].outerText.toLowerCase();
        if (!cardText.includes(valueSearch)) {
            card.style.display = "none";
        }
    });
});

btnCloseSearch.addEventListener("click", () => {
    search.value = "";
    cards.forEach((card) => {
        if (card.style.display.includes("none")) {
            card.style.display = "block";
        }
    });
});
