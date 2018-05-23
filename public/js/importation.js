var wb;
var rABS = false;
var result = null;
function importf(obj) {
    if(!obj.files) {
        return;
    }
    var f = obj.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
        var data = e.target.result;
        if(rABS) {
            wb = XLSX.read(btoa(fixdata(data)), {
                type: 'base64'
            });
        } else {
            wb = XLSX.read(data, {
                type: 'binary'
            });
        }
        if($("#type").val()==="Apprentissage"){
            result = {"DII3":JSON.stringify( XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[0]]) ),
                "DII4":JSON.stringify( XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[1]]) ),
                "DII5":JSON.stringify( XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[2]]) )
            }
        }
        else{
            result = JSON.stringify( XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[0]]) );
        }

        console.log(result);
    };
    if(rABS) {
        reader.readAsArrayBuffer(f);
    } else {
        reader.readAsBinaryString(f);
    }
}

function fixdata(data) {
    var o = "",
        l = 0,
        w = 102400; // file size
    for(; l < data.byteLength / w; ++l) o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w + w)));
    o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
    return o;
}

$("#type").on("change",function(){
    console.log();
    if($("#type").val()==="Forum")
    {
        $("#forum_date").show();
    }
    else{
        $("#forum_date").hide();
    }

    if($("#type").val()==="Taxe")
    {
        $("#taxe_date").show();
    }
    else{
        $("#taxe_date").hide();
    }
});

var importApprentissage = function(year,school_year){
    var error = false;
    $.ajax({
        url: "/import/apprentissage",
        type:"post",
        data: {
            "data":result[year],
            "type":$("#type").val(),
            "school_year": school_year
        },
        dataType: "json",
        async:false,
        success:function (data) {
            if(data.status===200){

            }
            else{
                error = true;
            }
        },
        error: function(r){
            error = true;
        }
    });
    return error;
}
$("#file_submit").click(function () {
    var that = $(this);
    //console.log(result);
    if($("#type").val()===""||result===null){
        alert("Il faut choisir un type un un fichier!");
    }
    else{
        $(this).attr('disabled','disabled');
        // forum
        if($("#type").val()==="Forum"){
            $.ajax({
                url: "/import/forum",
                type:"post",
                data: {
                    "data":result,
                    "type":$("#type").val(),
                    "date_forum":$("#date").val()
                },
                dataType: "json",
                success:function (data) {
                    that.removeAttr('disabled');
                    if(data.status===200){
                        alert("Réussi!");
                    }
                    else{
                        alert("Erreur!");
                    }
                },
                error: function(r){
                    alert("Erreur!");
                    that.removeAttr('disabled');
                }

            });
        }
        else if($("#type").val()==="Stage"){
            $.ajax({
                url: "/import/internship",
                type:"post",
                data: {
                    "data":result,
                    "type":$("#type").val()
                },
                dataType: "json",
                success:function (data) {
                    that.removeAttr('disabled');
                    if(data.status===200){
                        alert("Réussi!");
                    }
                    else{
                        alert("Erreur!");
                    }
                },
                error: function(r){
                    alert("Erreur!");
                    that.removeAttr('disabled');
                }

            });
        }
        else if($("#type").val()==="Taxe"){
            $.ajax({
                url: "/import/TA",
                type:"post",
                data: {
                    "data":result,
                    "type":$("#type").val(),
                    "date_taxe":$("#taxe_year").val()
                },
                dataType: "json",
                success:function (data) {
                    that.removeAttr('disabled');
                    if(data.status===200){
                        alert("Réussi!");
                    }
                    else{
                        alert("Erreur!");
                    }
                },
                error: function(r){
                    alert("Erreur!");
                    that.removeAttr('disabled');
                }

            });
        }

        else if($("#type").val()==="Alternance"){
            $.ajax({
                url: "/import/alternance",
                type:"post",
                data: {
                    "data":result,
                    "type":$("#type").val(),
                },
                dataType: "json",
                success:function (data) {
                    that.removeAttr('disabled');
                    if(data.status===200){
                        alert("Réussi!");
                    }
                    else{
                        alert("Erreur!");
                    }
                },
                error: function(r){
                    alert("Erreur!");
                    that.removeAttr('disabled');
                }


        else if($("#type").val()==="Apprentissage"){

            if(importApprentissage("DII3",3)||importApprentissage("DII4",4)||importApprentissage("DII5",5)){
                alert("Erreur!");
            }
            else{
                alert("Réussi!");
            }
            that.removeAttr('disabled');
        }
    }
})


