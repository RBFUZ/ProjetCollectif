var dtable_conventions = $("#data_table_conventions").DataTable({
    language: {
        "emptyTable": "No result"
    },
    columns: [
        {data: 'idEtablissement.nomEtablissement'},
        {data: "sujetConference"},
        {data: "dateConference"},
        {data: 'idContactEtablissement.idPersonne.nom'},
		{data: 'idContactEtablissement.mailProfessionnel'},
    ],

    filter: true,
    info: true,
    ordering: true,
    processing: true,
    retrieve: true,

});
