<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <title> Soloq </title>
        <style type="text/css">
            body {
                background: url(img/chalkboard.jpg);
            }
        </style>
        <?php
            // FLAKKED
            $curl_flakked = curl_init();

            curl_setopt_array($curl_flakked, array(
              CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/9_MgH944EIQgSRuvx7C2iMUNZgik9biXaBXj0MyWI_UW8xmaWm817AshlQ?api_key=RGAPI-172a86f6-959e-40fa-886d-0968d8fd9e08',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            ));
            $response_flakked = curl_exec($curl_flakked);

            curl_close($curl_flakked);
            $response_flakked = substr($response_flakked,1,-1);
            $data_flakked = json_decode($response_flakked);

            // JAVIER
            $curl_javier = curl_init();

            curl_setopt_array($curl_javier, array(
              CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/NUbmJRPRrpy9yHh0dngDT6YZl2-Zx7yrFocFSzqCvhjKHk1oo5N5e1TXwQ?api_key=RGAPI-a326b0e9-622c-466d-b701-a3d79a1e8638',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            ));
            $response_javier = curl_exec($curl_javier);

            curl_close($curl_javier);
            $response_javier = substr($response_javier,1,-1);
            $data_javier = json_decode($response_javier);

            // SENDOO
            $curl_sendoo = curl_init();

            curl_setopt_array($curl_sendoo, array(
              CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/0ixJlVYBpmUwFrTpZLuMH2cG3i1_qxEg9mSVgmoGSR1BGj1ZESCcQP_6fw?api_key=RGAPI-172a86f6-959e-40fa-886d-0968d8fd9e08',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            ));
            $response_sendoo = curl_exec($curl_sendoo);

            curl_close($curl_sendoo);
            $response_sendoo = substr($response_sendoo,1,-1);
            $data_sendoo = json_decode($response_sendoo);

            // AESENAR
            $curl_aesenar = curl_init();

            curl_setopt_array($curl_aesenar, array(
              CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/GhN3Md_I1ybr12AtzFzbLp54RFxFBx0DoUz8FaGGtNzgRyOvAj3U3RDl2Q?api_key=RGAPI-172a86f6-959e-40fa-886d-0968d8fd9e08',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            ));
            $response_aesenar = curl_exec($curl_aesenar);

            curl_close($curl_aesenar);
            $response_aesenar = substr($response_aesenar,1,-1);
            $data_aesenar = json_decode($response_aesenar);

            // KOLDO
            $curl_koldo = curl_init();

            curl_setopt_array($curl_koldo, array(
              CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/GSzM8l01nxOB8p-veu10HZbLKVS7D3Wh90KllDFS5TipBe_mB1dZW5IGqQ?api_key=RGAPI-172a86f6-959e-40fa-886d-0968d8fd9e08',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            ));
            $response_koldo = curl_exec($curl_koldo);

            curl_close($curl_koldo);
            $response_koldo = substr($response_koldo,1,-1);
            $data_koldo = json_decode($response_koldo);
        ?>
        
    </head>
    <body>
        <section style="height: 100vh;" class="container-sm d-flex justify-content align-items-center">
                <table class="table table-hover table-dark">
                	<tr>
                        <th scope="col"> # </th>
                		<th scope="col"> Nombre </th>
                		<th scope="col"> Elo</th>
                		<th scope="col"> Games </th>
                		<th scope="col"> Wins </th>
                		<th scope="col"> Loses </th>
                		<th scope="col"> Winrate </th>
                	</tr>
                	<tr>
                        <td scope="col">1</td>
                		<td><?php echo $data_flakked -> summonerName; ?></td>
                		<td><?php echo $data_flakked -> tier; ?><?php echo $data_flakked -> rank; ?>(<?php echo $data_flakked -> leaguePoints; ?>)</td>
                		<td><?php echo $data_flakked -> wins + $data_flakked -> losses; ?></td>
                		<td><?php echo $data_flakked -> wins; ?></td>
                		<td><?php echo $data_flakked -> losses; ?></td>
                		<td><?php echo $data_flakked -> wins / ($data_flakked -> wins + $data_flakked -> losses) * 100; ?>%</td>
                	</tr>
                    <tr>
                        <td scope="col">2</td>
                        <td><?php echo $data_javier -> summonerName; ?></td>
                        <td><?php echo $data_javier -> tier; ?><?php echo $data_javier -> rank; ?>(<?php echo $data_javier -> leaguePoints; ?>)</td>
                        <td><?php echo $data_javier -> wins + $data_javier -> losses; ?></td>
                        <td><?php echo $data_javier -> wins; ?></td>
                        <td><?php echo $data_javier -> losses; ?></td>
                        <td><?php echo $data_javier -> wins / ($data_javier -> wins + $data_javier -> losses) * 100; ?>%</td>
                    </tr>
                    <tr>
                        <td scope="col">3</td>
                        <td><?php echo $data_sendoo -> summonerName; ?></td>
                        <td><?php echo $data_sendoo -> tier; ?><?php echo $data_sendoo -> rank; ?>(<?php echo $data_sendoo -> leaguePoints; ?>)</td>
                        <td><?php echo $data_sendoo -> wins + $data_sendoo -> losses; ?></td>
                        <td><?php echo $data_sendoo -> wins; ?></td>
                        <td><?php echo $data_sendoo -> losses; ?></td>
                        <td><?php echo $data_sendoo -> wins / ($data_sendoo -> wins + $data_sendoo -> losses) * 100; ?>%</td>
                    </tr>
                    <tr>
                        <td scope="col">4</td>
                        <td><?php echo $data_aesenar -> summonerName; ?></td>
                        <td><?php echo $data_aesenar -> tier; ?><?php echo $data_aesenar -> rank; ?>(<?php echo $data_aesenar -> leaguePoints; ?>)</td>
                        <td><?php echo $data_aesenar -> wins + $data_aesenar -> losses; ?></td>
                        <td><?php echo $data_aesenar -> wins; ?></td>
                        <td><?php echo $data_aesenar -> losses; ?></td>
                        <td><?php echo $data_aesenar -> wins / ($data_aesenar -> wins + $data_aesenar -> losses) * 100; ?>%</td>
                    </tr>
                    <tr>
                        <td scope="col">5</td>
                        <td><?php echo $data_koldo -> summonerName; ?></td>
                        <td><?php echo $data_koldo -> tier; ?><?php echo $data_koldo -> rank; ?>(<?php echo $data_koldo -> leaguePoints; ?>)</td>
                        <td><?php echo $data_koldo -> wins + $data_koldo -> losses; ?></td>
                        <td><?php echo $data_koldo -> wins; ?></td>
                        <td><?php echo $data_koldo -> losses; ?></td>
                        <td><?php echo $data_koldo -> wins / ($data_koldo -> wins + $data_koldo -> losses) * 100; ?>%</td>
                    </tr>
                </table>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    </body>
</html>