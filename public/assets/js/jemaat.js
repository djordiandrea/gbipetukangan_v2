console.log('ini jemaat')


var jemaat = {

    getJemaat:function(){
        ajax.loadingContent(0)
        var url = '/getjemaat';
        ajax.ajaxGet(url, function(result){
            console.log(result);
            let jemaatBody = '';
            for (let i = 0; i < result.length; i++) {
                const jmt = result[i];
                jemaatBody += '<tr>';
                jemaatBody += '<td>'+(i+1)+'</td>';
                jemaatBody += '<td>'+jmt.fullname+'</td>';
                jemaatBody += '<td>'+jmt.dob+'</td>';
                jemaatBody += '<td>'+jmt.number+'</td>';
                jemaatBody += '<td>'+jmt.address+'</td>';
                jemaatBody += '<td><button class="btn btn-primary btn-edit" type="button" value"">Edit </button> <button class="btn btn-danger" type="button">Delete</button></td>';
                jemaatBody += '</tr>';
            }
            $('#tbodyJemaat').html(jemaatBody);
            ajax.loadingContent(1)
        });
    },

}

$(document).ready(function () { 
    jemaat.getJemaat();
});