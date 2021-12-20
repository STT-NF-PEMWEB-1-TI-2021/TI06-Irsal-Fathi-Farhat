function login() {
    const nama = document.getElementById("nama").value
    const pass = document.getElementById("pass").value
    if (nama == "ahmad2017" && pass == "integrity") {
        alert("Login Sukses")
        location.href = "sukses.html"
    }
    else {
        alert("Login Gagal")
        window.location.reload()
    }
}