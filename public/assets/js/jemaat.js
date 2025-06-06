console.log('ini jemaat')


var jemaat = {

    getJemaat: function (next) {
        $('#tbodyJemaat').html('');
        ajax.loadingContent(0)
        var url = '/getjemaat';
        ajax.ajaxGet(url, function (result) {
            console.log(result);
            let jemaatBody = '';
            for (let i = 0; i < result.length; i++) {
                const jmt = result[i];
                jemaatBody += '<tr>';
                jemaatBody += '<td>' + (i + 1) + '</td>';
                jemaatBody += '<td>' + jmt.fullname + '</td>';
                jemaatBody += '<td>' + jmt.dob + '</td>';
                jemaatBody += '<td>' + jmt.number + '</td>';
                jemaatBody += '<td>' + jmt.address + '</td>';
                jemaatBody += '<td><button class="btn btn-primary btn-edit" type="button" value"">Edit </button> <button class="btn btn-danger" type="button">Delete</button></td>';
                jemaatBody += '</tr>';
            }
            $('#tbodyJemaat').html(jemaatBody);
            ajax.loadingContent(1)
            next();
        });
    },
    bindUIAction: function () {
        $('#add-jemaat').click(function () {
            console.log('modal');
            $('#modalbody').load('/jemaat/add-form');
            $('.modal-title').html('Add Jemaat');
            $('#myModal').modal('show');
        });

        $('#submit_jemaat').click(function () {
            // alert('asd');
            const fullname = $('#jmt_fullname').val();
            const dob = $('#jmt_dob').val();
            const numb = $('#jmt_number').val();
            const addr = $('#jmt_address').val();
            const isactive = $('#jmt_isactive').val();
            const id = $('#jmt_id').val();

            var json = {
                fullname: fullname,
                dob: dob,
                number: numb,
                addr: addr,
                isactive: isactive,
                id: id
            };
            const url = '/setjemaat';
            ajax.ajaxPost(url, json, function (result) {
                if (result[0].err == '') {
                    alert("Success Input Jemaat");
                    $('#myModal').modal('hide');
                    jemaat.getJemaat(function () {
                        jemaat.bindUIAction();
                    });
                } else {
                    alert("Failed Input Jemaat")
                }
            });

        });
    },
}

$(document).ready(function () {
    jemaat.getJemaat(function () {
        jemaat.bindUIAction();
    });
});