$(function () {
    $('#apply_submit').submit(function () {
        var firstName = $('#firstName').val();
        if(firstName == '' || firstName.length < 0) {
            layer.tips('姓不能为空', '#firstName', {time: 2000, tips: 2});
            $('#firstName').focus();
            return false;
        }

        var lastName = $('#lastName').val();
        if(lastName == '' || lastName.length < 0) {
            layer.tips('名不能为空', '#lastName', {time: 2000, tips: 2});
            $('#lastName').focus();
            return false;
        }

        var cName = $('#cName').val();
        if(cName == '' || cName.length < 0) {
            layer.tips('中文名不能为空', '#cName', {time: 2000, tips: 2});
            $('#cName').focus();
            return false;
        }

        var nation = $('#nation').val();
        if(nation == '' || nation.length < 0) {
            layer.tips('国籍不能为空', '#nation', {time: 2000, tips: 2});
            $('#nation').focus();
            return false;
        }

        var passport = $('#passport').val();
        if(passport == '' || passport.length < 0) {
            layer.tips('护照号不能为空', '#passport', {time: 2000, tips: 2});
            $('#passport').focus();
            return false;
        }

        var begin = $('#begin').val();
        if(begin == '' || begin.length < 0) {
            layer.tips('开始时间不能为空', '#begin', {time: 2000, tips: 2});
            $('#begin').focus();
            return false;
        }

        var end = $('#end').val();
        if(end == '' || end.length < 0) {
            layer.tips('结束不能为空', '#end', {time: 2000, tips: 2});
            $('#end').focus();
            return false;
        }

        var birth = $('#birth').val();
        if(birth == '' || birth.length < 0) {
            layer.tips('出生日期不能为空', '#birth', {time: 2000, tips: 2});
            $('#birth').focus();
            return false;
        }

        var birthPlace = $('#birthPlace').val();
        if(birthPlace == '' || birthPlace.length < 0) {
            layer.tips('出生地不能为空', '#birthPlace', {time: 2000, tips: 2});
            $('#birthPlace').focus();
            return false;
        }

        var language = $('#language').val();
        if(language == '' || language.length < 0) {
            layer.tips('母语不能为空', '#language', {time: 2000, tips: 2});
            $('#language').focus();
            return false;
        }

        var history = $('#history').val();
        if(history == '' || history.length < 0) {
            layer.tips('病历不能为空', '#history', {time: 2000, tips: 2});
            $('#history').focus();
            return false;
        }

        var address = $('#address').val();
        if(address == '' || address.length < 0) {
            layer.tips('通讯地址不能为空', '#address', {time: 2000, tips: 2});
            $('#address').focus();
            return false;
        }

        var zip = $('#zip').val();
        if(zip == '' || zip.length < 0) {
            layer.tips('邮政编码不能为空', '#zip', {time: 2000, tips: 2});
            $('#zip').focus();
            return false;
        }

        var tel = $('#tel').val();
        if(tel == '' || tel.length < 0) {
            layer.tips('电话不能为空', '#tel', {time: 2000, tips: 2});
            $('#tel').focus();
            return false;
        }

        var email = $('#email').val();
        if(email == '' || email.length < 0) {
            layer.tips('邮箱不能为空', '#email', {time: 2000, tips: 2});
            $('#email').focus();
            return false;
        }

        var home = $('#home').val();
        if(home == '' || home.length < 0) {
            layer.tips('家庭地址不能为空', '#home', {time: 2000, tips: 2});
            $('#home').focus();
            return false;
        }

        var cLevel = $('#cLevel').val();
        if(cLevel == '' || cLevel.length < 0) {
            layer.tips('中文水平不能为空', '#cLevel', {time: 2000, tips: 2});
            $('#cLevel').focus();
            return false;
        }

        var hsk = $('#hsk').val();
        if(hsk == '' || hsk.length < 0) {
            layer.tips('HSK不能为空', '#hsk', {time: 2000, tips: 2});
            $('#hsk').focus();
            return false;
        }

        var school = $('#school').val();
        if(school == '' || school.length < 0) {
            layer.tips('学校或机构不能为空', '#school', {time: 2000, tips: 2});
            $('#school').focus();
            return false;
        }

        var occupation = $('#occupation').val();
        if(occupation == '' || occupation.length < 0) {
            layer.tips('职业不能为空', '#occupation', {time: 2000, tips: 2});
            $('#occupation').focus();
            return false;
        }

        var highest = $('#highest').val();
        if(highest == '' || highest.length < 0) {
            layer.tips('最高学术学位不能为空', '#highest', {time: 2000, tips: 2});
            $('#highest').focus();
            return false;
        }

        var sfrom = $('#sfrom').val();
        if(sfrom == '' || sfrom.length < 0) {
            layer.tips('开始时间不能为空', '#sfrom', {time: 2000, tips: 2});
            $('#sfrom').focus();
            return false;
        }

        var sto = $('#sto').val();
        if(sto == '' || sto.length < 0) {
            layer.tips('结束时间不能为空', '#sto', {time: 2000, tips: 2});
            $('#sto').focus();
            return false;
        }

        var mAge = $('#mAge').val();
        if(mAge == '' || mAge.length < 0) {
            layer.tips('母亲年龄不能为空', '#mAge', {time: 2000, tips: 2});
            $('#mAge').focus();
            return false;
        }

        var mName = $('#mName').val();
        if(mName == '' || mName.length < 0) {
            layer.tips('母亲名不能为空', '#mName', {time: 2000, tips: 2});
            $('#mName').focus();
            return false;
        }

        var mTel = $('#mTel').val();
        if(mTel == '' || mTel.length < 0) {
            layer.tips('母亲电话不能为空', '#mTel', {time: 2000, tips: 2});
            $('#mTel').focus();
            return false;
        }

        var mEmail = $('#mEmail').val();
        if(mEmail == '' || mEmail.length < 0) {
            layer.tips('母亲邮箱不能为空', '#mEmail', {time: 2000, tips: 2});
            $('#mEmail').focus();
            return false;
        }

        var mOccupation = $('#mOccupation').val();
        if(mOccupation == '' || mOccupation.length < 0) {
            layer.tips('母亲职业不能为空', '#mOccupation', {time: 2000, tips: 2});
            $('#mOccupation').focus();
            return false;
        }

        var fAge = $('#fAge').val();
        if(fAge == '' || fAge.length < 0) {
            layer.tips('父亲年龄不能为空', '#fAge', {time: 2000, tips: 2});
            $('#fAge').focus();
            return false;
        }

        var fName = $('#fName').val();
        if(fName == '' || fName.length < 0) {
            layer.tips('父亲名不能为空', '#fName', {time: 2000, tips: 2});
            $('#fName').focus();
            return false;
        }

        var fTel = $('#fTel').val();
        if(fTel == '' || fTel.length < 0) {
            layer.tips('父亲电话不能为空', '#fTel', {time: 2000, tips: 2});
            $('#fTel').focus();
            return false;
        }

        var fEmail = $('#fEmail').val();
        if(fEmail == '' || fEmail.length < 0) {
            layer.tips('父亲邮箱不能为空', '#fEmail', {time: 2000, tips: 2});
            $('#fEmail').focus();
            return false;
        }

        var fOccupation = $('#fOccupation').val();
        if(fOccupation == '' || fOccupation.length < 0) {
            layer.tips('父亲职业不能为空', '#fOccupation', {time: 2000, tips: 2});
            $('#fOccupation').focus();
            return false;
        }

        var city = $('#city').val();
        if(city == '' || city.length < 0) {
            layer.tips('城市不能为空', '#city', {time: 2000, tips: 2});
            $('#city').focus();
            return false;
        }

        var country = $('#country').val();
        if(country == '' || country.length < 0) {
            layer.tips('国家不能为空', '#country', {time: 2000, tips: 2});
            $('#country').focus();
            return false;
        }

        var detail = $('#detail').val();
        if(detail == '' || detail.length < 0) {
            layer.tips('详细地址不能为空', '#detail', {time: 2000, tips: 2});
            $('#detail').focus();
            return false;
        }

        var place = $('#place').val();
        if(place == '' || place.length < 0) {
            layer.tips('当前位置不能为空', '#place', {time: 2000, tips: 2});
            $('#place').focus();
            return false;
        }

        return true;






    });
});