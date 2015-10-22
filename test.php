$con = mysqli_connect("localhost", "****", "****", '****');
$result = mysqli_query($con,"SELECT * FROM streams");
echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Stream name</th>";
    echo "<th>status</th>";
    echo "<th>game</th>";
    echo "<th>viewers</th>";
    echo "</tr>";

    $data = array();

    while ($json_array['stream'] != null){
    //foreach ($API_Streams as $stream) {
        $json = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.strtolower($row['channel']).'?client_id='.$clientId), true);
        if(!is_null($json->stream))
            $data[] = array(
                'display_name' => $json->stream->channel->display_name,
                'status' => $json->stream->channel->status,
                'game' => $json->stream->channel->game,
                'viewers' => $json->stream->viewers);
    }
    usort($data, function($a,$b) {return $a['viewers'] < $b['viewers'];});
    foreach($data as $item) {
        echo "<tr>";
        echo "<td>".$item['display_name']."</td>";
        echo "<td>".$item['status']."</td>";
        echo "<td>".$item['game']."</td>";
        echo "<td>".$item['stream_viewers']."</td>";
        echo "</tr>";
    }
    echo "</table>";