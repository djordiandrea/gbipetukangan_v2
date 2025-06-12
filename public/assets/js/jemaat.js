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
                const strjmt = JSON.stringify(jmt);
                jemaatBody += '<tr>';
                jemaatBody += '<td>' + (i + 1) + '</td>';
                jemaatBody += '<td>' + jmt.fullname + '</td>';
                jemaatBody += '<td>' + jmt.dob + '</td>';
                jemaatBody += '<td>' + jmt.number + '</td>';
                jemaatBody += '<td>' + jmt.address + '</td>';
                jemaatBody += '<td><button class="btn btn-primary btn-edit" type="button" data-json=\'' + strjmt + '\' value' + jmt.id + '>Edit </button> <button class="btn btn-danger" type="button" value=' + jmt.id + '>Delete</button></td>';
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

        $('.btn-edit').click(function () {
            jsonData = $(this).data('json');
            console.log(jsonData);
            console.log(jsonData.fullname);

            $('#modalbody').load('/jemaat/add-form', function () {
                $('.modal-title').html('Update Jemaat');

                $('#jmt_fullname').val(jsonData.fullname);
                $('#jmt_dob').val(jsonData.dob);
                $('#jmt_number').val(jsonData.number);
                $('#jmt_address').val(jsonData.address);
                $('#jmt_isactive').val(1);
                $('#jmt_id').val(jsonData.id);

                $('#myModal').modal('show');
            });
        });

        $('#submit_jemaat').off('click').on('click', function () {
            // alert('asd');
            ajax.loadingContent(0)
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
                    alert(result[0].res);
                    $('#myModal').modal('hide');
                    jemaat.getJemaat(function () {
                        jemaat.bindUIAction();
                    });
                } else {
                    alert(result[0].err)
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