// import $ from 'admin-lte/plugins/jquery/jquery.min.js';
import '/node_modules/jquery/dist/jquery.js'
import '/node_modules/bootstrap/dist/js/bootstrap.min.js'
import '/node_modules/popper.js/dist/popper.min.js'
import '/node_modules/select2/dist/js/select2.full.js'
import '/node_modules/admin-lte/dist/js/adminlte.min.js'

$(function () {

    //Initialize Select2 Elements
    $('.select2').select2()

    $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
})