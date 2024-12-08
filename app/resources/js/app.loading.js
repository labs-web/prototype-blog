// Loading ...

export function showLoading() {
    let tableForm = document.getElementById('tableForm');
    if (tableForm) {
        let loadingDiv = document.createElement('div');
        loadingDiv.id = 'loading';
        loadingDiv.innerHTML = '<div class="spinner"></div>';
        tableForm.appendChild(loadingDiv);
    }else{
        return false;
    }
}
export function hideLoading() {
    let tableForm = document.getElementById('tableForm');
    let loadingDiv = document.getElementById('loading');
    loadingDiv.remove();
}
