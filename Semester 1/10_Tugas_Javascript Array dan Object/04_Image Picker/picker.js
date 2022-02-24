const hs = document.getElementById("hasil")
function imagePicker() {
    if (hewan.value == "b") {
        return hs.src = "img/bison.png"
    } else if (hewan.value == "g") {
        return hs.src = "img/gorilla.png"
    } else if (hewan.value == "m") {
        return hs.src = "img/monyet.png"
    } else if (hewan.value == "s") {
        return hs.src = "img/sapi.png"
    } else {
        return hs.src = "img/unta.png"
    }
}
function imageConfirmation() {
    alert(hs.src)
}