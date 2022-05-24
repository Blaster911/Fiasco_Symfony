// Utils

function isEmpty(str) {
    return (!str || str.length === 0);
}


// account
// Modified info


const btnModifiedInfo = document.getElementById('btn-modified-info-user');

btnModifiedInfo.addEventListener("click", () => {
    const listInfoElt = document.getElementById('list-info-user');
    const listInfoModifiedElt = document.getElementById('list-info-user-modified');
    if (Boolean(listInfoElt.classList.length)) {
        listInfoElt.classList.forEach(element => {
            if (element == "d-flex") {
                listInfoModifiedElt.classList.add("d-flex");
                listInfoModifiedElt.classList.remove("d-none");
                listInfoElt.classList.add("d-none");
                listInfoElt.classList.remove("d-flex");
            }
            if (element == "d-none") {
                listInfoModifiedElt.classList.add("d-none");
                listInfoModifiedElt.classList.remove("d-flex");
                listInfoElt.classList.add("d-flex");
                listInfoElt.classList.remove("d-none");
            }
            console.log(element);
        });
    }
})
