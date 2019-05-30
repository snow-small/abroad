window.onload = function() {
	var people_title = document.querySelector('.wrap__manage__people-title');
	var people_manage = document.querySelector('.wrap__manage__people-manage');

	var admin_title = document.querySelector('.wrap__manage__admin-title');
	var admin_manage = document.querySelector('.wrap__manage__admin-manage');

	var news_title = document.querySelector('.wrap__manage__news-title');
	var news_manage = document.querySelector('.wrap__manage__news-manage');

	var profession_title = document.querySelector('.wrap__manage__profession-title');
	var profession__manage = document.querySelector('.wrap__manage__profession-manage');

	var city_title = document.querySelector('.wrap__manage__city-title');
	var city_manage = document.querySelector('.wrap__manage__city-manage');

	var school_title = document.querySelector('.wrap__manage__school-title');
	var school_manage = document.querySelector('.wrap__manage__school-manage');

	var program_title = document.querySelector('.wrap__manage__program-title');
	var program_manage = document.querySelector('.wrap__manage__program-manage');

	var order_title = document.querySelector('.wrap__manage__order-title');
	var order_manage = document.querySelector('.wrap__manage__order-manage');

	function toggle(elem_title, elem_manage) {
		elem_title.onclick = function() {
			if(elem_manage.style.display == 'none') {
				elem_manage.style.display = 'block';
			} else {
				elem_manage.style.display = 'none';
			}
		}
	}

	toggle(people_title, people_manage);
	toggle(admin_title, admin_manage);
	toggle(news_title, news_manage);
	toggle(profession_title, profession__manage);
	toggle(city_title, city_manage);
	toggle(school_title, school_manage);
	toggle(program_title, program_manage);
	toggle(order_title, order_manage);
}