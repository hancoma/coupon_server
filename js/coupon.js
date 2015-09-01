$("#save_btn").click(
	function () {
		
		var code=$("#code").val();
		var company=$("#company").val();
		var telephone=$("#telephone").val();
		var zip=$("#zip").val();
		var address=$("#address").val();
		var address2=$("#address2").val();
		var category=$("#category").val();
		var contents=$("#menu_contents").val();
		var map=$("#map").val();
		var time=$("#time").val();
		var pay=$("#pay").val();
		var point=$("#point").val();

		$.post("company_save.php",{
			code:code,
			company:company,
			telephone:telephone,
			zip:zip,
			address:address,
			address2:address2,
			category:category,
			contents:contents,
			map:map,
			time:time,
			pay:pay,
			point:point
		},function(data) {
			var data=data;
			if(data=="ok") {
				alert("업체 등록되었습니다.");
			} else {
				alert(data);
			}
		});
	});