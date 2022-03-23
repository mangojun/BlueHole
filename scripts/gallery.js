function search() {
    var name, item, i;
    name = document.getElementById("searchbar").value;
    item = document.getElementsByClassName("document");

    for (i = 0; i < item.length; i++) {
        if (item[i].innerHTML.toUpperCase().includes(name)) {
            item[i].style.display = "inline";
        } else {
            item[i].style.display = "none";
        }
    }
}