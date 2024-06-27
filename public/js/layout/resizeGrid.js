export function resizeGridItems() {
    const grid = document.querySelector(".vote-cards");
    const rowHeight = 0;
    const rowGap = 8;

    const items = grid.querySelectorAll(".vote-card");
    items.forEach(item => {
        const rowSpan = Math.ceil((item.getBoundingClientRect().height + rowGap) / (rowHeight + rowGap)) - 1;
        item.style.gridRowEnd = "span " + rowSpan;
    });
}