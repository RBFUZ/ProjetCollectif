$(document).ready(function(){
	$("#toHide").hide();
	$("#searchButton").click(function(){
		$("#toHide").show();

		dtable = $("#data_table").DataTable({
	        data:[],
	        "language": {
	            "emptyTable": "No result"
	        },
	        "ajax":{
	            "url":"/search_forum",
	            "type":"post",
	            "data":
	                function ( d ) {
	                    d.nom_forum = $("input[name='nom_forum']").val();
	                },
	        },
	        "columns": [
	        	{data: 'nomEtablissement'},
	        ],

	        rowCallback: function (row, data) {},
	        filter: false,
	        info: false,
	        ordering: true,
	        processing: true,
	        retrieve: true
	    });
	});
})
