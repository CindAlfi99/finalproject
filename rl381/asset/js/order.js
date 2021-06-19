const btn = document.querySelector('.btn-tambah')
btn.addEventListener('click', tambahForm, false)

const formOrder = document.querySelector('#form-order')
formOrder.onsubmit = order

// select get jenis layanan
function getJenisLayanan(str, id) {
  fetch(`helper.php?jenis=${str}`)
  .then(res => res.text())
  .then(data => document.querySelector(`.jenis-item-${id}`).innerHTML = data)
  .catch(err => console.log(err))
}

// tambah select layanan
function tambahForm() {
  const layanan = document.querySelectorAll('.layanan')
  const length = layanan.length
  const jenis = `<div class="form-group col-3 layanan">
  <label>Layanan</label>
  <select name="layanan[${length-1}][jenis]" class="form-control" onchange="getJenisLayanan(this.value, ${length-1});">
    <option selected>Pilih..</option>
    <option value="Kiloan">Kiloan</option>
    <option value="Satuan">Satuan</option>
    <option value="Karpet">Karpet</option>
    <option value="Sepatu">Sepatu</option>
  </select>
  </div>`
  const item = `<div class="form-group col-7 jenis_item">
  <label>Jenis item</label>
  <select name="layanan[${length-1}][item]" class="form-control jenis-item-${length-1}" required>
    <option>Pilih Layanan</option>
  </select>
  </div>`
  const jumlah = `<div class="form-group col-2 jumlah">
  <label>Jumlah</label>
  <input type="number" min="1" max="100" name="layanan[${length-1}][jml_item]" class="form-control" required>
  </div>`
  const after = document.querySelectorAll('.jumlah')
  const form = jenis + item + jumlah
  after[after.length - 1].insertAdjacentHTML('afterend', form)
}

// submit pesanan
function order(e) {
  e.preventDefault();
  const formData = $('form').serialize()
  fetch('helper.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: formData,
  })
  .then(res => res.json())
  .then(({ data }) => {
    try {
      formOrder.reset()
      $('#modal-resi').modal('show')
      $('.modal-body').append(`
        <p>Nomor resi untuk pesanan Anda adalah ${data.no_resi}.</p>
        <p>Petugas Kami akan melakukan konfirmasi melalui nomor telepon yang telah Anda lampirkan.</p>
        <p>Terima kasih telah menggunakan jasa Kami.</p>
      `)
    } catch {
      throw Error(data);
    }
  })
  .catch(err => console.log(err))
}