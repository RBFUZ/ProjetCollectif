/**
 * each page that you want to do some request(ajax) need a Vue
 * Look at the doc of Vuejs
 *
 */
$(document).ready(function() {
    dtable = $("#data_table").DataTable({
        data:[],
        "language": {
            "emptyTable": "No result"
        },
        "ajax":{
            "url":"/search_enterprise",
            "type":"post",
            "data":
                function ( d ) {
                    d.nom_entreprise = $("input[name='nom_entreprise']").val();
                },
        },
        "columns": [

        {data: 'nomentreprise'},
        {data: 'numsiren'},
        {data: 'statutjuridique'},
        {data: 'sitewebentreprise'},
        {data: 'commentaireentreprise'}
        ],

        rowCallback: function (row, data) {},
        filter: false,
        info: false,
        ordering: true,
        processing: true,
        retrieve: true
    });
} );

var recherche_entreprise = new Vue({
    el: '#recherche_entreprise', // the element that you want to control
    data: {
        entreprises:[], // the data to the twig
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to excute
            $("#data_table").show();
            dtable.ajax.reload();

        }
    }
});

