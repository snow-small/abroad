$(function () {
    $('#school_form').submit(function () {
        var name = $('#name').val();
        var p_id = $('#p_id').val();
        var icon = $('#icon').val();
        var bgImg = $('#bgImg').val();
        var students = $('#students').val();
        var websit = $('#websit').val();

        if (name == '' || name.length < 0) {
            layer.tips('名称不能为空', '#name', {time: 2000, tips: 2});
            $('#name').focus();
            return false;
        }

        if (p_id == '' || p_id.length < 0) {
            layer.tips('省份不能为空', '#p_id', {time: 2000, tips: 2});
            $('#p_id').focus();
            return false;
        }

        if (icon == '' || icon.length < 0) {
            layer.tips('校徽不能为空', '#icon_upload', {time: 2000, tips: 2});
            $('#icon_upload').focus();
            return false;
        }

        if (bgImg == '' || bgImg.length < 0) {
            layer.tips('背景不能为空', '#bg_upload', {time: 2000, tips: 2});
            $('#bg_upload').focus();
            return false;
        }

        if (students == '' || students.length < 0) {
            layer.tips('学生不能为空', '#students', {time: 2000, tips: 2});
            $('#students').focus();
            return false;
        }

        if (websit == '' || websit.length < 0) {
            layer.tips('网址不能为空', '#websit', {time: 2000, tips: 2});
            $('#websit').focus();
            return false;
        }


        return true;
    });
});