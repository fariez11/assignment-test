const BASIC_CONFIGS_DATATABLE = {
    searching: false,
    sorting: false,
    lengthChange: false,
    processing: true,
    ordering: false,
    language: {
        processing: '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>'
    }
}
const CONFIGS_DATATABLE_WITH_SCROLLX = {
    searching: false,
    sorting: false,
    lengthChange: false,
    processing: true,
    ordering: false,
    scrollX:true,
    language: {
        processing: '<div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>'
    }
}

$(document).ready(function () {

    $('#mahasiswa').DataTable({
        ordering: false,
        searching: true,
        lengthChange: false,
        bInfo: true,
        autowidth:false,
        paging:true,
        responsive: true
    });

})
