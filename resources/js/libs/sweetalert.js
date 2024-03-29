import Swal from "sweetalert2/dist/sweetalert2.js";
import "sweetalert2/dist/sweetalert2.min.css";

// avaliable everywhere
window.Swal = Swal;

// action delete
$(document).on("click", ".action-delete", function (e) {
    e.preventDefault();
    var url = $(this).attr("data-url");
    var title = $(this).attr("data-title") ?? "Apakah anda yakin?";
    var redirect = $(this).attr("data-redirect") ?? null;
    deleteData(url, title, redirect);
});

// delete data
function deleteData(url, title, redirect = null) {
    var csrf_token = $('meta[name="csrf-token"]').attr("content");

    Swal.fire({
        title: title,
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#6c757d",
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal",
        showLoaderOnConfirm: true,
        preConfirm: (data) => {
            return $.ajax({
                url: url,
                type: "POST",
                data: {
                    _method: "DELETE",
                    _token: csrf_token,
                },
                success: function (data) {
                    return data;
                },
                error: function (err) {
                    var error = err.responseJSON;
                    console.log(error);

                    Swal.fire({
                        title: "Gagal!",
                        text: error.message,
                        icon: "error",
                        confirmButtonColor: "#3085d6",
                        confirmButtonText: "OK",
                    });
                },
            });
        },
        allowOutsideClick: () => !Swal.isLoading(),
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil dihapus.",
                icon: "success",
                confirmButtonColor: "#3085d6",
                confirmButtonText: "OK",
            }).then((result) => {
                if (result.isConfirmed) {
                    if (redirect) {
                        location.href = redirect;
                    } else {
                        location.reload();
                    }
                }
            });
        }
    });
}
