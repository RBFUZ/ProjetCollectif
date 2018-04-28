/**
 * each page that you want to do some request(ajax) need a Vue
 * Look at the doc of Vuejs
 *
 */
$(document).ready(function() {
    dtable = $("#data_table").DataTable({
        language: {
            "emptyTable": "No result"
        },
        ajax:{
            "url":"/search_enterprise",
            "type":"post",
            "data":
                function ( d ) {
                    d.nom_enterprise = $("input[name='nom_enterprise']").val();
                },
        },
        columns: [
            {data: 'nomEtablissement'},
            {data: 'numSiret'},
            {data: "idAdresse.idVille.nomVille"},
        ],

        filter: false,
        info: false,
        ordering: true,
        processing: true,
        retrieve: true,

    });

    // row click event
    $('#data_table tbody').on('click', 'tr', function () {
        var data = dtable.row( this ).data();

        console.log(data);
        window.location = "/establishment/detail/"+data.id;
    } );

} );

var recherche_entreprise = new Vue({
    el: '#search_enterprise', // the element that you want to control
    data: {
        entreprises:[], // the data to the twig
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to execute
            $("#data_table").show();
            dtable.ajax.reload();
        }
    }
});
