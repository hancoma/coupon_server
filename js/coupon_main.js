function category_view(no) {
	var category=no;
	$.post("http://hancoma.com/coupon/category.php",
	{
		category:category
	},function(data) {
		$(".content").html(data);
	});

}

function company_view(no) {
	var no=no;
	$.post("http://hancoma.com/coupon/company.php",
	{
		no:no
	},function(data) {
		$(".content").html(data);
	});

}
// 더보기 파일 

 
