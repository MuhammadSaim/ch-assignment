import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// make table trs clickable
let table_trs = document.querySelectorAll(".click-link");

table_trs.forEach((tr) => {
    tr.addEventListener("click", () => {
        window.location = tr.getAttribute("data-href");
    });
});
