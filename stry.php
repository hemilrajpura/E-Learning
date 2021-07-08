<html>
<head>
    <style>
    #sizelist ul{list-style-type:none;}
    #sizelist ul li{float:left;display:inline;margin-right:5px;width:auto;overflow:hidden;}
    #sizelist ul li a{display:block;border:1px solid #CCCCCC;padding:5px 6px 5px 6px;margin:1px;}
    #sizelist ul li a:hover{border:2px solid #FF6701;margin:0px;}
    #sizelist .select a{border:2px solid #FF6701;margin:0px;}
</style>
</head>
<body>


<?php
$developer_key = 'AIzaSyBW55Oaw9VodlKa1AuPAKLeJIHTAaUwTeI';
 
$arr_list = array();
if (array_key_exists('q', $_GET) && array_key_exists('max_result', $_GET) && array_key_exists('order', $_GET)) {
    $keyword = $_GET['q'];
    $format_keyword = implode("+", explode(" ", $keyword));
    $url = "https://www.googleapis.com/youtube/v3/search?q=$format_keyword&order=". $_GET['order'] ."&part=snippet&type=video&maxResults=". $_GET['max_result'] ."&key=". $developer_key;
 
    if (array_key_exists('pageToken', $_GET)) $url .= "&pageToken=". $_GET['pageToken'];
 
    $arr_list = getYTList($url);
}
 
function getYTList($api_url = '') {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $arr_result = json_decode($response);
    if (isset($arr_result->items)) {
        return $arr_result;
    } elseif (isset($arr_result->error)) {
        echo "Something went wrong.";
        echo $arr_result->error;
    }
}

?>
<form method="get">

    <!-- <ul id="sizelist">
 <li data-value="history of java"><a href="#">history of java</a></li>
 <li data-value="java applets"><a href="#">java applets</a></li>
 <li data-value="oop and pop"><a href="#">oop and pop</a></li>
 <li data-value="java servlets"><a href="#">java servlets</a></li>
        </ul> -->
    <p><input type="text"  name="q" placeholder="Enter keyword" required></p>
    <p><input type="number" style="display: none;"  name="max_result" placeholder="Max Results" min="1" max="50" value="5" required></p>
    <p>
        <?php $arr_orders = ['date', 'rating', 'relevance', 'title', 'viewCount']; ?>
        <select  name="order"  required>
            <option value="">--SELECT ORDER--</option>
            <?php foreach ($arr_orders as $order) { ?>
                <option value="<?php echo $order; ?>" <?php if(array_key_exists('order', $_GET) && ($order==$_GET['order'])) echo 'selected'; ?>><?php echo ucfirst($order); ?></option>
            <?php } ?>
        </select>
    </p>

    <p><input type="submit" value="Submit"></p>

 
       
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<script>
$("#sizelist").on("click", "a", function(e) {
  e.preventDefault();
  var $this = $(this).parent();
  $this.addClass("select").siblings().removeClass("select");
  $("#sizevalue").val($this.data("value"));
})

</script> -->

</form>                      
<?php  
if (!empty($arr_list)) {
    echo '<ul>';
    foreach ($arr_list->items as $yt) {
         if(isset($yt->id->videoId)){

          echo '<div class="youtube-video">
 <h2>'. $yt->snippet->title.'</h2>
               <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$yt->id->videoId.'" frameborder="" allowfullscreen></iframe>
           </div>';
           
   }
     }
    echo '</ul>';
 
    $url = "?q=". $_GET['q'] ."&max_result=". $_GET['max_result'] ."&order=". $_GET['order'];
    if (isset($arr_list->prevPageToken)) {
        echo '<a href="'.$url.'&pageToken='.$arr_list->prevPageToken.'">Previous</a>';
    }
 
    if (isset($arr_list->nextPageToken)) {
        echo '<a href="'.$url.'&pageToken='.$arr_list->nextPageToken.'">Next</a>';
    }
}

?>

</body>
</html>