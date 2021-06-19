let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('alert');

tombolCari.addEventListener('click', () => {
    //buat object ajax
    let keyword = document.getElementById('no-resi');

    let ajax = new XMLHttpRequest();
    // cek kesiapan ajax
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            container.innerHTML = ajax.responseText;
        }
    }
    //ekseskusi ajax
    ajax.open('GET', 'resi.php?keyword=' + keyword.value, true);
    ajax.send();
})
