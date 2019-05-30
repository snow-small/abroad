$(function () {
    $('#province_form').submit(function () {
        var name = $('#name').val();
        if (name == '' || name.length < 0) {
            layer.tips('名称不能为空', '#name', {time: 2000, tips: 2});
            $('#name').focus();
            return false;
        }

        return true;
    });

});