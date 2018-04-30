var dtable_intern = $("#data_table_intern").DataTable({
    language: {
        "emptyTable": "No result"
    },
    columns: [
        {data: 'idEtudiant.numeroEtudiant'},
        {data: 'idEtudiant.idPersonne.nom'},
        {data: "idEtudiant.idPersonne.prenom"},
        {data: "idContactEtablissementTuteur.idPersonne.nom"},
        {data: "idPersonnelPolytechTuteur.idPersonne.nom"},
        {data: "dateCreation"},
        {data: "idStage.sujetStage"},
        {data: "idSpecialite.idDepartement.libelleDepartement"},
    ],

    filter: true,
    info: false,
    ordering: true,
    processing: true,
    retrieve: true,

});

var dtable_apprenti = $("#data_table_apprenti").DataTable({
    language: {
        "emptyTable": "No result"
    },
    columns: [

        {data: 'idEtudiant.numeroEtudiant'},
        {data: 'idEtudiant.idPersonne.nom'},
        {data: "idEtudiant.idPersonne.prenom"},
        {data: "dateDebutApprentissage"},
        {data: "idSpecialite.idDepartement.libelleDepartement"},
    ],

    filter: true,
    info: false,
    ordering: true,
    processing: true,
    retrieve: true,

});

var dtable_intervenant = $("#data_table_intervenant").DataTable({
    language: {
        "emptyTable": "No result"
    },
    columns: [
        {data: 'idContactEtablissement.idPersonne.nom'},
        {data: 'idContactEtablissement.idPersonne.prenom'},
        {data: "sujetConference"},
        {data: "dateConference"},
        {data: 'idContactEtablissement.mailProfessionnel'},
    ],

    filter: true,
    info: false,
    ordering: true,
    processing: true,
    retrieve: true,

});
