<div class="myForm">
    Something: <input type="text" name="input" id="input" />
    <ul class="myList">
        <li data-id="data1">Data 1</li>
        <li data-id="data2">Data 2</li>
        <li data-id="data3">Data 3</li>
    </ul>
    <input type="button" value="submit" id="send" />
</div>
<script>
    $(document).ready(function(){
        $("ul.myList li").click(function(){
            //remove all selected classes
            $.each("ul.myList li", function(){
                $(this).removeClass("active");
            });
            //Set current as active
            $(this).addClass("active");
        });

        $("#send").click(function(){
            $.ajax({
                url: "PathToFile.php",
                method: "POST",
                data: {text: $("#input").val(), data: $("ul.myList li.active").attr("data-id"),
                success: function(result){
                    alert(result);
                }
            });
        });
    });
</script>