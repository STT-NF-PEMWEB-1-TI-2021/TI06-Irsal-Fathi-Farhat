function check(e) {
  e.preventDefault(); 
  // (C1) INIT
  let valid = true, error = "", field = "";
  
  // (C2) NAME
  field = document.getElementById("nama");
  error = document.getElementById("val-1");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "*) Harus lebih dari 1-30 huruf\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  field = document.getElementById("email");
  error = document.getElementById("val-2");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "*) Harus ada \"@\" dan \".\"\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  field = document.getElementById("jam");
  error = document.getElementById("val-3");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "*) Harus diisi\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  field = document.getElementById("tujuan");
  error = document.getElementById("val-4");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "*) Masukkan tempat tujuan\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }

  field = document.getElementById("tiket");
  error = document.getElementById("val-5");
  if (!field.checkValidity()) {
    valid = false;
    field.classList.add("err");
    error.innerHTML = "*) Jumlah tiket harus diisi 1 - 10\r\n";
  } else {
    field.classList.remove("err");
    error.innerHTML = "";
  }
  
  // (C4) RESULT
  return valid;
}

function cetak() {
  let form = document.getElementById("validation")
  let data = document.getElementById("data")
  let hasil = form.querySelectorAll("input:not([type=submit])")
  let teks = form.querySelectorAll("p")
  for (let i = 0; i <= hasil.length; i++) {
    data.innerHTML += teks[i].textContent + " : " + hasil[i].value + "<br>" 
  }
}