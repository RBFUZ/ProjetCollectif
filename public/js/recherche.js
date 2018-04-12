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
                    d.nom_enterprise = $("input[name='nom_enterprise']").val();
                    d.id_ville = $("input[name='ville']").val();
                },
        },
        "columns": [

        {data: 'nomEtablissement'},
        {data: 'numSiret'},
        {data: "idAdresse.idVille.nomVille"},
        // {data: 'identreprise.nomentreprise'},
        // {data: 'commentaireentreprise'}
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
    el: '#search_enterprise', // the element that you want to control
    data: {
        entreprises:[], // the data to the twig
        cities:[]
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to excute
            $("#data_table").show();
            dtable.ajax.reload();
        }
    }
});

$.get('city.json',function (data) {
    //console.log(data);
    //recherche_entreprise.cities = data;
    // alert(data[1]);
    // var i = 0;
    // data.foreach(function (d) {
    //     console.log(d);
    //     i++;
    //     $("#list_cities").append('<div class="item"  data-value="'+i+'">'+d+'</div>')
    // })

})

