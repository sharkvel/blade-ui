const CONFIG = {
    itemHight: 32
};

const select = document.querySelector(`select`);

select.addEventListener('change', handleChange);

function getOptionOffset(select) {
    const list = select.querySelector('.list');
    const selectedOptionIndex = [...list.children].findIndex(child => child === select.selectedOptions[0]);
    return selectedOptionIndex * CONFIG.itemHight + 'px';
}

function setSelectedOptionOffset(select) {
    select.style.setProperty('--_selected-option-offset', getOptionOffset(select));
}

function handleChange(e) {
    const select = e.currentTarget;
    // transitionend
    select.addEventListener('input', () => setSelectedOptionOffset(select), { once: true });
}

(() => {
    setSelectedOptionOffset(select);
})()


