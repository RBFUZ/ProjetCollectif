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
            "complete": function(data) {
                // $("#list_cities").empty();
                // console.log(data["responseJSON"].data[0]);
                // var d = data["responseJSON"].data;
                // for(var i = 0;i<d.length;i++){
                //     $("#list_cities").append('<div class="item"  data-value="'+d[i].idAdresse.idVille.id+'">'+d[i].idAdresse.idVille.nomVille+'</div>');
                // }
            }
        },
        columns: [

        {data: 'nomEtablissement'},
        {data: 'numSiret'},
        {data: "idAdresse.idVille.nomVille"},
        ],


        filter: true,
        info: false,
        ordering: true,
        processing: true,
        retrieve: true,

    });

    // hide search bar
    $(".dataTables_filter").hide();

    // bind to new filter bar
    $( "input[name='ville']").unbind().bind( 'change', function () {
       // alert(11);
        console.log(this.value);
        dtable.columns(2).search(this.value).draw();
    } );

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
        cities:[]
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to excute
            $("#data_table").show();
            dtable.ajax.reload();
            $.

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

