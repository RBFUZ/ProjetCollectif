var wb;
var rABS = false;
var result;
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
        result = JSON.stringify( XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[0]]) );
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

$("#file_submit").click(function () {
    if($("#type").val()===""||result===null){
        alert("Il faut choisir un type un un fichier!");
    }
    else{
        $.post("/import/data",
            {
                "data":result,
                "type":$("#type").val()
            },
            function (data) {
                if(data.status===200){
                    alert("Réussi!");
                    // refresh the page
                    //location.reload();
                }
                else{
                    alert("Erreur!");
                }
            });
    }
})


