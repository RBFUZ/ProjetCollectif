/**
 * each page that you want to do some request(ajax) need a Vue
 * Look at the doc of Vuejs
 *
 */

var recherche_entreprise = new Vue({
    el: '#recherche_entreprise', // the element that you want to control
    data: {
        entreprises:[], // the data to the twig
        type:1
    },
    delimiters: ['${', '}'],
    methods:{
        get_data: function (event) { // the methods that you want to excute
            var url = "/recherche_entreprise";
            //empty the array
            recherche_entreprise.entreprises.splice(0);
            $.post(url,{
                nom_entreprise:$("input[name='nom_entreprise']").val(),
            },function(data){
                // insert the data into array
                for(i = 0;i<data.data.length;i++){
                    Vue.set(recherche_entreprise.entreprises, i,  data.data[i])
                }
            });
        }
    }
});

