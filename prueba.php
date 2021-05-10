<!DOCTYPE html>
<html>
  <head><title> Mi primer php </title></head>
  <body>
     <?php

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/NUbmJRPRrpy9yHh0dngDT6YZl2-Zx7yrFocFSzqCvhjKHk1oo5N5e1TXwQ?api_key=RGAPI-a326b0e9-622c-466d-b701-a3d79a1e8638',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		));
		$response = curl_exec($curl);

		curl_close($curl);
		$response = substr($response,1,-1);
		$data = json_decode($response);
	?>

    <table>
    	<tr>
    		<td> Nombre </td>
    		<td> Elo</td>
    		<td> Games </td>
    		<td> Wins </td>
    		<td> Loses </td>
    		<td> Winrate </td>

    	</tr>
    	<tr>
    		<td><?php echo $data -> summonerName; ?></td>
    		<td><?php echo $data -> tier; ?><?php echo $data -> rank; ?>(<?php echo $data -> leaguePoints; ?>)</td>
    		<td><?php echo $data -> wins + $data -> losses; ?></td>
    		<td><?php echo $data -> wins; ?></td>
    		<td><?php echo $data -> losses; ?></td>
    		<td><?php echo $data -> wins / ($data -> wins + $data -> losses) * 100; ?>%</td>
    	</tr>
    </table>

    
  </body>
</html>