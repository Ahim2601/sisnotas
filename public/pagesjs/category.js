/**
 * Page User List
 */

'use strict';
    const baseUrl = document.querySelector('html').getAttribute('data-base-url');
    const assetsPath = document.querySelector('html').getAttribute('data-assets-path');
    const totalregistros = document.querySelector('total_categories');
// Datatable (jquery)
$(function () {
    let borderColor, bodyBg, headingColor;

    if (isDarkStyle) {
        borderColor = config.colors_dark.borderColor;
        bodyBg = config.colors_dark.bodyBg;
        headingColor = config.colors_dark.headingColor;
    } else {
        borderColor = config.colors.borderColor;
        bodyBg = config.colors.bodyBg;
        headingColor = config.colors.headingColor;
    }

  // Variable declaration for table
    var dt_user_table = $('.datatables-data');

    // Users datatable
    if (dt_user_table.length) {
        var dt_user = dt_user_table.DataTable({
        ajax: baseUrl + '/categorias', // JSON file to add data
        columns: [
            { data: 'name' },
            { data: 'actions' }
        ],
        dom:
            '<"row"' +
            '<"col-md-2 d-flex align-items-center justify-content-md-start justify-content-center"<"dt-action-buttons mt-5 mt-md-0"B>>' +
            '<"col-md-10"<"d-flex align-items-center justify-content-md-end justify-content-center"<"me-4"f><"add-new">>>' +
            '>t' +
            '<"row"' +
            '<"col-sm-12 col-md-6"i>' +
            '<"col-sm-12 col-md-6"p>' +
            '>',
        language: {
            sinfo: 'Mostrando página _PAGE_ de _PAGES_',
            sLengthMenu: 'Mostrar _MENU_',
            search: '',
            searchPlaceholder: 'Buscar',
            processing: 'Procesando...',
            zeroRecords: 'No se encontraron resultados',
            emptyTable: 'Ningún dato disponible en esta tabla',
            infoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
            infoFiltered: '(filtrado de un total de _MAX_ registros)',
            infoThousands: ',',
            loadingRecords: 'Cargando...',
            paginate: {
                next: '<i class="ri-arrow-right-s-line"></i>',
                previous: '<i class="ri-arrow-left-s-line"></i>',
            },

        },
        // Buttons with Dropdown
        buttons: [

        ],
        // contar todos los registros y totalizarlos
        initComplete: function () {
            const api = this.api();
            const total = api.rows().count();

            $('#total_categories').html(total);
        }
    });
    $('.add-new').html(
        "<a href='/categorias/create' class='btn btn-primary waves-effect waves-light'  ><i class='ri-add-line me-0 me-sm-1 d-inline-block d-sm-none'></i><span class= 'd-none d-sm-inline-block'>Nueva Categoria</span ></a>"
    );
    }
});

function deleteRecord(id) {
    Swal.fire({
        title: '¿Está seguro de eliminar esta Categoría?',
        text: "No podra recuperar la información!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
            cancelButton: 'btn btn-outline-danger waves-effect'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href =
                "/categorias/"+id+"/destroy";
        }
    })
}
