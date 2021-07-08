<html>
<head>
	

<!-- 	<style>
    #sizelist ul{list-style-type:none;}
    #sizelist ul li{float:left;display:inline;margin-right:5px;width:auto;overflow:hidden;}
    #sizelist ul li a{display:block;border:1px solid #CCCCCC;padding:5px 6px 5px 6px;margin:1px;}
    #sizelist ul li a:hover{border:2px solid #FF6701;margin:0px;}
    #sizelist .select a{border:2px solid #FF6701;margin:0px;}

	</style> -->
	</head>
<body>

<div class="sizelist-sec">
	<form name="size-form">
		<ul id="sizelist">
		  <li data-value="S"><a href="#">S</a></li>
		  <li data-value="M"><a href="#">M</a></li>
		  <li data-value="L"><a href="#">L</a></li>
		  <li data-value="XL"><a href="#">XL</a></li>
		</ul>

		<input id="sizevalue" size="15" name="size" type="text" />
		<input type="submit" value="submit"/>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">	</script>
<script>
	

		
			$("#sizelist").on("click", "a", function(e) {
  e.preventDefault();
  var $this = $(this).parent();
  $this.addClass("select").siblings().removeClass("select");
  $("#sizevalue").val($this.data("value"));
})

$("form[name=size-form]").submit(function(e) {
  if ($(this).find("li.select").length == 0) {
    alert("Please select a size.");
    e.preventDefault();
  }
});
</script>

</body>
</html>