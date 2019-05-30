$(function () {
    $('#program_form').submit(function () {
        var p_id = $('#p_id').val();
        var duration = $("#duration").val();
        var language = $('#language').val();
        var tution = $('#tution').val();

        if (p_id == '' || p_id.length<0) {
            layer.tips('专业不能为空', '#p_id', {time: 2000, tips: 2});
            $('#p_id').focus();
            return false;
        }

        if (duration == '' || duration.length<0) {
            layer.tips('年份不能为空', '#duration', {time: 2000, tips: 2});
            $('#duration').focus();
            return false;
        }

        if (language == '' || language.length<0) {
            layer.tips('授课语言不能为空', '#language', {time: 2000, tips: 2});
            $('#language').focus();
            return false;
        }

        if (apply == '' || apply.length<0) {
            layer.tips('申请费用不能为空', '#apply', {time: 2000, tips: 2});
            $('#apply').focus();
            return false;
        }

        if (tution == '' || tution.length<0) {
            layer.tips('学费不能为空', '#tution', {time: 2000, tips: 2});
            $('#tution').focus();
            return false;
        }

        return true;
    });
});