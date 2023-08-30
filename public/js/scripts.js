const loaderContainer = document.querySelector('.loader-container');

window.addEventListener('load', () => {
    
    loaderContainer.parentElement.removeChild(loaderContainer);
});