/*
** initialize foundation
*/
$(document).foundation();


/*
** lazy load
*/
function initLazyLoad() {
	$('.lazy').Lazy({
		effect: "fadeIn",
		effectTime: 300,
		threshold: 300,
		afterLoad: function(element) {
			$(element[0]).addClass('lazy-loaded');
		}
	});
}
initLazyLoad();


/*
** ajax - sample
*/
// $.ajax({
// 	type : 'POST',
// 	url  : "/wp-admin/admin-ajax.php",
// 	data : {
// 		'action' : 'load_instagram_posts',
// 	},
// 	dataType : 'JSON',
// 	success: function(data) {
		
// 	}
// });