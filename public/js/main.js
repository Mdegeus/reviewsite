if (document.querySelector(".searchbar") && document.querySelector(".item-card")) {
    const itemCards = document.querySelectorAll(".item-card");
    const searchbar = document.querySelector(".searchbar");


    searchbar.addEventListener("input", () => {
        for (let i = 0; i < itemCards.length; i++) {
            let currentItem = itemCards[i];
            const itemId = currentItem.id.toLowerCase();
            const searchValue = searchbar.value.toLowerCase();
            
            if (itemId.match(searchValue)) {
                currentItem.classList.remove("d-none");
                currentItem.parentElement.classList.add("col-sm-2");
                currentItem.parentElement.classList.add("col-md-2");
            } else {
                currentItem.classList.add("d-none");
                currentItem.parentElement.classList.remove("col-sm-2");
                currentItem.parentElement.classList.remove("col-md-2");
            }

        }
    })

}

if (document.querySelectorAll(".form-check-input")) {

    let items = document.querySelectorAll(".form-check-input");

    for (let i = 0; i < items.length; i++) {
        const item = items[i];
        let checkValue = false;
        item.addEventListener('change', () => {
            checkValue = !checkValue; ///////// alter checkValue
            item.value = checkValue; ///////// get altert checkValue
        });
    }
}