$(function () {
    $('#profession_form').submit(function () {
        var title = $('#title').val();
        var name = $('#name').val();
        var answer1 = $('#answer1').val();
        var answer2 = $('#answer2').val();
        var score1 = $('#score1').val();
        var score2 = $('#score2').val();

        if (title == '' || title.length<0) {
            layer.tips('标题不能为空', '#title', {time: 2000, tips: 2});
            $('#title').focus();
            return false;
        }

        if (name == '' || name.length<0) {
            layer.tips('name不能为空', '#name', {time: 2000, tips: 2});
            $('#name').focus();
            return false;
        }

        if (answer1 == '' || answer1.length<0) {
            layer.tips('答案一不能为空', '#answer1', {time: 2000, tips: 2});
            $('#answer1').focus();
            return false;
        }

        if (answer2 == '' || answer2.length<0) {
            layer.tips('答案二不能为空', '#answer2', {time: 2000, tips: 2});
            $('#answer2').focus();
            return false;
        }

        if (score1 == '' || score1.length<0) {
            layer.tips('分数一不能为空', '#score1', {time: 2000, tips: 2});
            $('#score1').focus();
            return false;
        }

        if (score2 == '' || score2.length<0) {
            layer.tips('分数二不能为空', '#score2', {time: 2000, tips: 2});
            $('#score2').focus();
            return false;
        }

        return true;
    });
});