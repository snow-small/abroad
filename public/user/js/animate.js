// 得到元素
var getElem = function(cls) {
	return document.querySelector(cls)
}
// 得到所有的元素
var getAllElem = function(cls) {
	return document.querySelectorAll(cls);
}
// 得到所有的类
var getCls = function(elem) {
	return elem.getAttribute('class');
}
// 设置得到的类
var setCls = function(elem, cls) {
	return elem.setAttribute('class', cls);
}
// 添加类
var addCls = function(elem, cls) {
	var baseCls = getCls(elem);
	if(baseCls.indexOf(cls) === -1) {
		setCls(elem, baseCls + ' ' + cls);
	}
}
// 删除类
var delCls = function(elem, cls) {
	var baseCls = getCls(elem);
	if(baseCls.indexOf(cls) != -1) {
		setCls(elem, baseCls.split(cls).join(' ').replace(/\s+/g, ' '));
	}
}

// 要加动画的元素
var screenAnimateElement = {
	'.screen-1': ['.screen-1__wrap'],
	'.screen-2': [
		'.screen-2__first',
		'.screen-2__about',
		'.screen-2__text-item-i-1',
		'.screen-2__text-item-i-2',
		'.screen-2__text-item-i-3',
		'.screen-2__fix-item-i-1',
		'.screen-2__fix-item-i-2',
		'.screen-2__fix-item-i-3'
	],
	'.screen-3': [
		'.screen-3__second',
		'.screen-3__about',
		'.screen-3__img'
	],
	'.screen-5': [
		'.screen-5__news',
		'.screen-5__abroad',
		'.screen-5__img',
		'.screen-5__art-item-i-1',
		'.screen-5__art-item-i-2',
		'.screen-5__art-item-i-3',
		'.screen-5__more'
	]
};

// 给所有的加init
var setScreenAnimateInit = function(screenCls) {
	var animateElements = screenAnimateElement[screenCls];   // 得到所有的动画类
	for(var i=0; i<animateElements.length; i++) {
		var elem = document.querySelector(animateElements[i]);   // 得到类的元素
		var baseCls = elem.getAttribute('class');   // 得到所有的类
		setCls(elem, baseCls + ' ' + animateElements[i].substr(1) + '_animate_init');   // 给类加init
	}
} 

// 把init转换为done
var playScreenAnimateDone = function(screenCls) {
	var animateElements = screenAnimateElement[screenCls];   // 得到所有的动画类
	for(var i=0; i<animateElements.length; i++) {
		var elem = document.querySelector(animateElements[i]);   // 得到类的元素
		var baseCls = elem.getAttribute('class');   // 得到所有的类
		setCls(elem, baseCls.replace('_animate_init', '_animate_done'));   // 转换
	}
}


// 页面加载时，给所有的加init
window.onload = function() {
	for(var k in screenAnimateElement) {
		setScreenAnimateInit(k);
	}

	// 导航条滑动
	var navTip = getElem('.header__nav-tip');  // 导行条的下划线
	var navItems = getAllElem('.header__nav-item_tip');  // 导航条
	var setTip = function(index, lib) {
		var item = lib[index];
		item.onmouseover = function() {
			navTip.style.left = index*108 + 'px';
		};
		item.onmouseout = function() {
			for(var i=0; i<lib.length; i++) {
				if(getCls(lib[i]).indexOf('header__nav-item_status_active') != -1) {
					navTip.style.left = i*108 + 'px';
				}
			}
		}
	}
	for(var i=0; i<navItems.length; i++) {
		
		setTip(i, navItems);
	}
}

// 添加定时器，过0.2秒，第一屏显示
setTimeout(function(){
	playScreenAnimateDone('.screen-1')
}, 200);

// 滚动条的高度
window.onscroll = function() {
	//var top = document.body.scrollTop;  当<!DOCTYPE>不存在的时候用它
	var top = document.documentElement.scrollTop;
	if(top > 80) {
		addCls(getElem('.header'), 'header_status_back');
	} else {
		delCls(getElem('.header'), 'header_status_back');
	}
	if(top > 80+80) {
		playScreenAnimateDone('.screen-2');
	}
	if(top > 80+120+450) {
		playScreenAnimateDone('.screen-3');
	}
	if(top > 80+120+500+400) {
		playScreenAnimateDone('.screen-5');
	}
}



