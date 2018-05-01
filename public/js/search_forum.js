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
			var year = new Date().getFullYear();
		    $.ajax({
		        type:'post',
		        url: "/search_forum_year",
		        async:false,
				data:{"libelleTypeForum":val},
		        success:function (data) {
		            if(data.data) {
		                year =  data.data;
						$('#myDropDown').append('<div class="item">'+year+'</div>');
		            }
		        }
		    });
	    }
	});

	$("#myButton").click(function() {
		$("#data_table").show();
		dtable.ajax.reload();
	});
});
