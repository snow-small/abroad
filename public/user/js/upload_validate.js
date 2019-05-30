$(function () {
    $('#upload_submit').submit(function () {
        var photo = $('#photo').val();
        if(photo == '' || photo.length < 0) {
            layer.tips('护照照片不能为空', '#photo', {time: 2000, tips: 2});
            $('#photo').focus();
            return false;
        }

        var photoCopy = $('#photoCopy').val();
        if(photoCopy == '' || photoCopy.length < 0) {
            layer.tips('护照照片复印件不能为空', '#photoCopy', {time: 2000, tips: 2});
            $('#photoCopy').focus();
            return false;
        }

        var highest = $('#highest').val();
        if(highest == '' || highest.length < 0) {
            layer.tips('最高学历证书不能为空', '#highest', {time: 2000, tips: 2});
            $('#highest').focus();
            return false;
        }

        var transcript = $('#transcript').val();
        if(transcript == '' || transcript.length < 0) {
            layer.tips('成绩单不能为空', '#transcript', {time: 2000, tips: 2});
            $('#transcript').focus();
            return false;
        }

        var confirm = $('#confirm').val();
        if(confirm == '' || confirm.length < 0) {
            layer.tips('确认签名不能为空', '#confirm', {time: 2000, tips: 2});
            $('#confirm').focus();
            return false;
        }

        return true;


    });
});