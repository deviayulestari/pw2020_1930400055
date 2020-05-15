const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container-admin');

// //event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  //fetch()
  fetch('../ajax/ajax_cari_admin.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});

