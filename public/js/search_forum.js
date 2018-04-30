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


	// row click event
	$("#libelleDropDown").dropdown({
	    onChange: function (val) {
			// Requete SQL qui retourne l'année la plus ancienne pour ce forum (val)
	        alert(val);
	    }
	});

	$("#myButton").click(function() {
		$("#data_table").show();
		dtable.ajax.reload();

		$('#myDropDown').append('<div class="item" data-value="2">Autre</div>');
	});
});
