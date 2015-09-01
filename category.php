<? include "db_config.php"; ?>
<div id="category_list">
<?
if ($category==0){
	$Sql="select * from  company  order by no desc limit 5";
	} else {
 $Sql="select * from  company WHERE category=$category order by no desc limit 5 ";
}
      $rResult = mysql_query($Sql);


while($data=mysql_fetch_array($rResult)) 
{
  $photo=@mysql_fetch_array(mysql_query("select * from image_table  where code=$data[code]"));
if ($photo[file]) {
    $img="logo/".$photo[file];
} else {
    $img="http://t2.search.daumcdn.net/argon/130x130_85_c/okg5UcTRKx";
}
?>
<article class="uk-comment" onclick="company_view(<?=$data[no]?>)">
    <header class="uk-comment-header">
        <img class="uk-comment-avatar" src="<?=$img?>" alt="" style="width:100px; height:100px;" onclick="company_view(<?=$data[no]?>)">
        <h4 class="uk-comment-title"><?=$data[company]?></h4>
        <div class="uk-comment-meta"><?=$data[telephone]?></div>
        <div class="uk-comment-meta"><?=$data[address]?></div>
        <div class="uk-comment-meta"><?=$data[time]?></div>
        
         <div class="uk-comment-meta"><?=$data[point]?></div>
         <div class="uk-comment-meta" ><?=$data[review]?></div>
</article>
<? } ?>
</div>
<div class="bar bar-standard bar-footer-secondary">
  <a href="#"class="btn btn-block" id="category_append" onclick="category_append()">더보기 </a>
</div>
<div id="modal-spinner" class="uk-modal" aria-hidden="true" style="display: none; overflow-y: auto;">
                            <div class="uk-modal-dialog">
                                <div class="uk-modal-spinner"></div>
                            </div>
                        </div>

                        <script type="text/javascript">
                        $(".content").scroll(function(){
 
          category_append();
        
});
function category_append() {
    
    $.post("category_append.php",
    {

    },function(data) {
      $(".content").append(data);

    });
  };
                        </script>