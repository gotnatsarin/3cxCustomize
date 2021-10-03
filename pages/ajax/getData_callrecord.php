<?php
  include('../connect.php');
  $search = $_GET['search'];
   
  $perpage = 10;
  if(isset($_GET['page'])){
    $page = $_GET['page'];
  } else {
    $page = 1;
  }

  $startpage = ($page - 1) * $perpage;

  $result = pg_query($conn, "SELECT * FROM recordings 
    WHERE recording_url LIKE '%".$search."%' 
    OR CAST(cl_participants_id AS TEXT) LIKE '%".$search."%'
    OR CAST(start_time AS TEXT) LIKE '%".$search."%'
    OR CAST(end_time AS TEXT) LIKE '%".$search."%'
    ORDER BY cl_participants_id LIMIT $perpage OFFSET $startpage ");
    
  $count =1;

  while($row = pg_fetch_assoc($result)){
    echo "<tr>
              <td class='align-middle text-center text-sm'>
                <p class='text-xs text-secondary mb-0'>"
                  .$count.
                "</p>
              </td>
              <td class='align-middle text-center text-sm'>
                <p class='text-xs text-secondary mb-0'>"
                  .$row['cl_participants_id'].
                "</p>
              </td>
              <td class='align-middle text-center text-sm'>
                <p class='text-xs text-secondary mb-0'>"
                  .$row['start_time']."</p>
                </td>
              <td class='align-middle text-center text-sm'>
                <p class='text-xs text-secondary mb-0'>"
                  .$row['end_time'].
                "</P>
              </td>
              <td class='align-middle text-center text-sm'>
                <p class='text-xs text-secondary mb-0'>
                  <audio controls>
                    <source src='../data/recording/".$row['recording_url']."' type='audio/wav'>
                    Your browser does not support the audio element.
                  </audio>
                </P>
              </td>
          </tr>";
              $count+=1;
  }
  pg_free_result($result);
  pg_close($conn);
?>