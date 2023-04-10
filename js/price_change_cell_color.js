const cells = document.querySelectorAll('.price-change');

cells.forEach(cell => {
    const value = parseFloat(cell.innerText);
    if (value > 0) {
        cell.classList.add('positive');
    } else if (value < 0) {
        cell.classList.add('negative');
    }
});