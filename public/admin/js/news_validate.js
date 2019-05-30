$(function() {
    $('#news_form').submit(function() {
        var title = $('#title').val();
        var img = $('#img').val();
        var description = $('#description').val();
        var content = $('input[name=content]').val();

        if(title == '' || title.length < 0) {
            layer.tips('标题不能为空', '#title', {time: 2000, tips: 2});
            $('#title').focus();
            return false;
        }

        if(img == '' || img.length < 0) {
            layer.tips('图片地址不能为空', '#file_upload', {time: 2000, tips: 2});
            $('#file_upload').focus();
            return false;
        }

        if(description == '' || description.length < 0) {
            layer.tips('描述不能为空', '#description', {time: 2000, tips: 2});
            $('#description').focus();
            return false;
        }

        if(content == '' || content.length < 0) {
            layer.tips('内容不能为空', '#editor', {time: 2000, tips: 2});
            $('#editor').focus();
            return false;
        }

        return true;
    });
});