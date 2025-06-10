/* ini untuk input file */
document.getElementById('studentForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Mencegah pengiriman form
    const formData = {
        id: crypto.randomUUID(),
        foto: document.getElementById('foto').files[0]?.name, // Menampilkan nama file yang diupload
        nama: document.getElementById('namaSiswa').value,
        tempat: document.getElementById('tempatLahir').value,
        tanggal_lahir: document.getElementById('tanggalLahir').value,
        email: document.getElementById('email').value,
        alamat: document.getElementById('alamat').value,
        nama_orang_tua: document.getElementById('namaOrangTua').value,
        nisn: document.getElementById('nisn').value,
        kata_sandi: document.getElementById('kataSandi').value,
        kelas: document.getElementById('kelas').value,
    };
    console.log(formData); // Menampilkan data form sebagai objek di konsol
    insert(formData)
});

const url = 'https://sheetdb.io/api/v1/szrcspxk81wtf'
const token = 'alpd026r8bd4lrt847hxl96spq5bsz7gozdvn42d'
async function insert(data) {
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`
            },
            body: JSON.stringify(data)
        })
        if (response.ok) {
            alert("Berhasil menambahkan data")
        } else {
            alert("Gagal menambahkan data")
        }
    } catch (error) {
        console.log(error)
        alert("Internal error!")
    }
}

/* ini untuk input link */

// const inputFoto = document.getElementById('foto')
// inputFoto.addEventListener('change', (e) => {
//     e.preventDefault(); // Mencegah pengiriman form

//     const elImg = document.getElementById('profile')
//     elImg.src = inputFoto.value
// })
// document.getElementById('studentForm').addEventListener('submit', function (event) {
//     event.preventDefault(); // Mencegah pengiriman form
//     const formData = {
//         foto: document.getElementById('foto').value, // Menampilkan nama file yang diupload
//         namaSiswa: document.getElementById('namaSiswa').value,
//         tempatLahir: document.getElementById('tempatLahir').value,
//         tanggalLahir: document.getElementById('tanggalLahir').value,
//         email: document.getElementById('email').value,
//         alamat: document.getElementById('alamat').value,
//         namaOrangTua: document.getElementById('namaOrangTua').value,
//         nisn: document.getElementById('nisn').value,
//         kataSandi: document.getElementById('kataSandi').value,
//         kelas: document.getElementById('kelas').value,
//     };
//     console.log(formData); // Menampilkan data form sebagai objek di konsol
// });