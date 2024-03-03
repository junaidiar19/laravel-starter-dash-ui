/**
 * Format Rupiah
 */
function rupiahFormat(angka, prefix = null) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        var separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

// remove rupiah
function removeRupiah(rupiahString) {
    // Check if the input is a string
    if (typeof rupiahString !== "string") {
        throw new Error("Input must be a string");
    }

    // Remove "Rp." and any non-numeric characters
    const numericValue = parseFloat(rupiahString.replace(/[^\d]/g, ""));

    // Check if the result is a valid number
    if (isNaN(numericValue)) {
        throw new Error("Invalid Rupiah format");
    }

    return numericValue;
}

$(".rupiah-format").keyup(function (event) {
    let val = event.target.value;
    let format = rupiahFormat(val, "Rp. ");
    $(this).val(format);
});

$(".number-format").keyup(function (event) {
    let val = event.target.value;
    let format = rupiahFormat(val);
    $(this).val(format);
});

$(document).ready(function () {
    $("#generate-code").on("click", function () {
        let code = Math.random().toString(36).substring(2, 12).toUpperCase();
        $('input[name="code"]').val(code);
    });
});
