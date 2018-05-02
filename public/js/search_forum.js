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
        info: true,
        ordering: true,
        processing: true,
        retrieve: true,
		autoWidth:true,
    });

	$('.ui.dropdown.dp_year').addClass("disabled"); // Disable year dropdown before selecting forum label.

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
						$('.ui.dropdown.dp_year').removeClass("disabled");
						$('#dropdown_year option').remove(); // Remove all items from the dropdown
						$('#dropdown_year').append('<option value="'+year+'">'+year+'</option>'); // Add the item to the dropdown
						$('.ui.dropdown').dropdown('refresh'); // Refresh items of the dropdown
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
