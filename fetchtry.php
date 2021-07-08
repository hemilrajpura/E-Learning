<?php
$developer_key = 'AIzaSyBW55Oaw9VodlKa1AuPAKLeJIHTAaUwTeI';     
 
$arr_list = array();
if (array_key_exists('size', $_GET) && array_key_exists('max_result', $_GET) && array_key_exists('order', $_GET)) {
    $keyword = $_GET['size'];
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
    }
}
?> 
<form method="get">
    
    <p><input type="number" name="max_result" placeholder="Max Results" min="1" max="50" value="<?php if(array_key_exists('max_result', $_GET)) echo $_GET['max_result']; ?>" required></p>
    <p>
        <?php $arr_orders = ['date', 'rating', 'relevance', 'title', 'viewCount', 'likesCount']; ?>
        <select name="order" required>
            <option value="">--SELECT ORDER--</option>
            <?php foreach ($arr_orders as $order) { ?>
                <option value="<?php echo $order; ?>" <?php if(array_key_exists('order', $_GET) && ($order==$_GET['order'])) echo 'selected'; ?>><?php echo ucfirst($order); ?></option>
            <?php } ?>
        </select>
    </p>
    <p><input type="submit" value="Submit"></p>
</form>                      
<?php  
if (!empty($arr_list)) {
    echo '<ul>';
    foreach ($arr_list->items as $yt) {
         if(isset($yt->id->videoId)){

          echo '<div class="youtube-video">

               <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$yt->id->videoId.'" frameborder="" allowfullscreen></iframe>

               <h2>'. $yt->snippet->title.'</h2>
           </div>';
   }

    }
    echo '</ul>';
 /*
    $url = "?q=". $_GET['q'] ."&max_result=". $_GET['max_result'] ."&order=". $_GET['order'];
    if (isset($arr_list->prevPageToken)) {
        echo '<a href="'.$url.'&pageToken='.$arr_list->prevPageToken.'">Previous</a>';
    }
 
    if (isset($arr_list->nextPageToken)) {
        echo '<a href="'.$url.'&pageToken='.$arr_list->nextPageToken.'">Next</a>';
    }*/
}
?>