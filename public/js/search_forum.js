$(document).ready(function(){
	dtable = $("#data_table").DataTable({
        data:[],
        "language": {
            "emptyTable": "No result"
        },
        "ajax":{
            "url":"/search_forum_custom",
            "type":"post",
            "data":
                function ( d ) {
                    d.nom_forum = $("input[name='nom_forum']").val();
                },
        },
        "columns": [
        	{data: 'idEtablissement.nomEtablissement'},
			{data: 'idEtablissement.numSiret'},
        ],

        filter: true,
        info: false,
        ordering: true,
        processing: true,
        retrieve: true,
		autoWidth:true,
    });
});

var list_forum = new Vue({
    el: '#search_forum_custom', // the element that you want to control
    data: {
        establishment:[], // the data to the twig
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to execute
            $("#data_table").show();
            dtable.ajax.reload();
        }
    }
});
