<? include "db_config.php"; ?>
<?
$data=@mysql_fetch_array(mysql_query("select * from company  where no=$no"));

?>
<a href="tel:<?=$data[telephone]?>" class="uk-button uk-width-1-2" id="telephone">주문전화</a><a href="#my-id" data-uk-modal class="uk-button uk-button-success uk-width-1-2">쿠폰보기</a>
<div class="uk-grid uk-grid-divider" style="margin-top:10px;">
    <div class="uk-width-3-10 uk-text-center">
    <img class="uk-comment-avatar" src="<?=$img?>" alt="" id="img"></div>
    <div class="uk-width-7-10 ">
		<table class="uk-table uk-table-striped uk-text-left uk-">
		<tr><th colspan="2" id="company_name"></th></tr>
		<tr><th >영업시간</th><td id="time"></td></tr>
		<tr><th >포인트</th><td id="point"></td></tr>
		<tr><th >주메뉴</th><td id="menu"></td></tr>
		</table>
    </div>
    <div class="uk-width-1-1" id="map">
    <?=$data[map]?>
    </div>
</div>

<div id="my-id" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-lightbox">
        <a href="" class="uk-modal-close uk-close uk-close-alt"></a>
        <div class="uk-button uk-width-1-1" style="padding:20px;">반값 쿠폰 입니다.<br>
        유효 기간 한달간 (발행일 부터 한달간입니다.)</div>

    </div>
</div>
<script>
company_data("<?=$no?>");
    function company_data (no) {
        $.ajax({
           type: "get",
    url: "company_data.php",
    dataType: "xml",
    data : "no=<?=$no?>",
    success: function(xml) {
            

            var company=$(xml).find("note").find("company").text();
            var time=$(xml).find("note").find("time").text();
            var point=$(xml).find("note").find("point").text();
            var menu=$(xml).find("note").find("menu").text();
            var img=$(xml).find("note").find("img").text();
            var telephone=$(xml).find("note").find("telephone").text();
            
            

            $("#company_name").html(company);
            $("#time").html(time);
            $("#point").html(point);
            $("#menu").html(menu);
            $( "#img" ).attr( "src", img);
            $("#telephone").attr("href",telephone);


    }
  });
    }
</script>