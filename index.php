<?php include("server.php")?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <title> Soloq </title>
        <script src="sorttable.js"></script>
        <?php 
           
            $url_jugadores = array('Sgof1VvRzVTHbOXSLdtuDg8g95cEJY5C-cTwo4e_5qpi9nJKr9NI0bdpag','6V0OHpbho8WjwG6xbfCVH24X1zeus-XVxOmNJEMsG86VnhMd2fYgzF_CzA','w9IZcX1wCV0XvWzhyua6dpM1ZsIBvemR7DojYQkGj5gMslNhlf_UuVeVQg','UYPtQdIq_pXjh78c3Vl1tqddnWUH74Z5cXd0161uQBqpZw6N6d2kP5Xxsw');

            $contador = 0;
            $dataTotal = array();

            foreach ($url_jugadores as $url_player ) {
            
              $url = curl_init();

              curl_setopt_array($url, array(
                CURLOPT_URL => 'https://euw1.api.riotgames.com/lol/league/v4/entries/by-summoner/'.$url_player.'?api_key=RGAPI-349d1c50-32cc-4249-a114-04fec1ebbf8b',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              ));
              $response_url = curl_exec($url);

              curl_close($url);
              $response_url = substr($response_url,1,-1);
              array_push($dataTotal,json_decode($response_url));
              $contador++;
            }
            function array_sort($array, $on, $order)
              {
                  $new_array = array();
                  $sortable_array = array();

                  if (count($array) > 0) {
                      foreach ($array as $k => $v) {
                          if (is_array($v)) {
                              foreach ($v as $k2 => $v2) {
                                  if ($k2 == $on) {
                                      $sortable_array[$k] = $v2;
                                  }
                              }
                          } else {
                              $sortable_array[$k] = $v;
                          }
                      }

                      switch ($order) {
                          case SORT_ASC:
                              asort($sortable_array);
                          break;
                          case SORT_DESC:
                              arsort($sortable_array);
                          break;
                      }

                      foreach ($sortable_array as $k => $v) {
                          $new_array[$k] = $array[$k];
                      }
                  }
              }

            foreach ($dataTotal as $player) {
              
                switch ($player->tier) {
                  case 'IRON':
                    $player->elo =1000;
                    break;
                  case 'SILVER':
                    $player->elo = 2000;
                    break;
                  case 'GOLD':
                    $player->elo = 3000;
                    break;
                  case 'PLATINUM':
                    $player->elo = 4000;
                    break;
                  case 'DIAMOND':
                    $player->elo = 5000;
                    break;
                  case 'MASTER':
                    $player->elo = 6000;
                    break;
                      
                  default:
                    # code...
                    break;
                  }

                switch ($player->rank) {
                  case 'I':
                    $player->elo = $player->elo + 200;
                    break;
                  case 'II':
                    $player->elo =  $player->elo + 300;
                    break;
                  case 'III':
                    $player->elo =  $player->elo + 400;
                    break;
                  case 'IV':
                    $player->elo =  $player->elo + 500;
                    break;
                  case 'V':
                    $player->elo =  $player->elo + 600;
                    break;
                      
                  default:
                    # code...
                    break;
                }
                $player->elo =  $player->elo + $player->leaguePoints;

            }
        ?>
    </head>
    <body>
    <section id="scroll" class="navegacion">
            <nav>
                <div class="d-flex justify-content-between container">
                    <img src="./img/Recurso-3.png">
                    <a href="index.php">Home</a>
                    <a href="form.php">Register</a>
                </div>
            </nav>
    </section>
      <section style="height: 100vh;" class="container-sm d-flex justify-content align-items-center">
        <table class="table table-hover table-dark sortable ">
              <tr>
                <th scope="col"> # </th>
                <th scope="col"> Nombre </th>
                <th scope="col"> Elo</th>
                <th scope="col"> Games </th>
                <th scope="col"> Wins </th>
                <th scope="col"> Loses </th>
                <th scope="col"> Winrate </th>
              </tr>
              <?php 
                $contador_new = 0;
                array_sort($dataTotal,'$datatotal->elo', SORT_ASC);
                  foreach ($dataTotal as $jugador ):?>
                    <tr class="item_row">
                      <td><?php echo $contador_new + 1?></td>
                      <td><?php echo $jugador -> summonerName; ?></td>
                      <td><?php echo $jugador -> tier; ?><?php echo $jugador -> rank; ?>(<?php echo $jugador -> leaguePoints; ?>)</td>
                      <td><?php echo $jugador -> wins + $jugador -> losses; ?></td>
                      <td><?php echo $jugador -> wins; ?></td>
                      <td><?php echo $jugador -> losses; ?></td>
                      <td><?php echo number_format($jugador -> wins / ($jugador -> wins + $jugador -> losses) * 100); ?>%</td>
                      <td><?php echo $jugador->elo; ?></td>
                    </tr>
              <?php $contador_new++ ;?>
              <?php endforeach;?>
            </table>
      </section>
      <footer>
        <span id="demo"></span></p>
      </footer>    
      <script src="js.js"></script>         
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    </body>

</html>