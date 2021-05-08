let isOrderbyOpen = false;

function displayOrderbyPanel() {
    const obBtn = document.getElementById('searchOrderbyBtn');
    const obPanel = document.getElementById('searchOrderbyWindow');

    if(!isOrderbyOpen){
        obBtn.innerHTML = '<i  class="fas fa-times"></i> Fechar';
        obPanel.style.display = 'flex';
        obPanel.className = 'fadeinSearchOrderbyWindow';
    } else {
        obBtn.innerHTML = '<i  class="fas fa-sort-amount-down"></i> Ordenar';
        obPanel.className = 'fadeoutSearchOrderbyWindow';
        setTimeout(() => {
            obPanel.style.display = 'none';
        }, 200)
    }

    isOrderbyOpen = !isOrderbyOpen;
}