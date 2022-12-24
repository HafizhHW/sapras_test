// wrong username and password
var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'warning',
        title: 'Warning',
        text: flash
    })
}

var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: flash,
        showConfirmButton: false,
        timer: 1500
    })
}

var flash = $('#flash').data('flash');
if (flash) {
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: flash,
        // footer: '<a href="">Why do I have this issue?</a>'
    })
}

$(document).on('click', '#btn-hapus', function (e) {
    e.preventDefault();
    var link = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = link;
        }
    })
})

$(document).on('click', '#btn-logout', function (e) {
    e.preventDefault();
    var link = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin Akan Keluar?',
        text: "Pilih 'Logout' untuk keluar",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Logout'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = link;
        }
    })
})