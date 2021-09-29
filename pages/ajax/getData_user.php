<?php
  include('../connect.php');
  $search = $_GET['search'];
  $result = pg_query($conn, "SELECT * FROM access_user 
    WHERE firstname LIKE '%".$search."%'
    OR lastname LIKE '%".$search."%'
    OR email LIKE '%".$search."%'
    OR role LIKE '%".$search."%'
    ORDER BY role, firstname
    ");
  $count =1;

while($row = pg_fetch_assoc($result)){

$select = ['',''];
  if($row['role']=='admin'){
    $select[0] = "selected";
  }else{
    $select[1] = "selected";
  }

  echo "<tr>
          <td class='align-middle text-center text-sm'>
            <p class='text-xs text-secondary mb-0'>"
              .$count.
            "</p>
          </td>
          <td class='align-middle text-center text-sm'>
            <p class='text-xs text-secondary mb-0'>"
              .$row['firstname'].
            "</p>
          </td>
          <td class='align-middle text-center text-sm'>
            <p class='text-xs text-secondary mb-0'>"
              .$row['lastname']."</p>
            </td>
          <td class='align-middle text-center text-sm'>
            <p class='text-xs text-secondary mb-0'>"
              .$row['email'].
            "</P>
          </td>
          <td class='align-middle text-center text-sm'>
            <p class='text-xs text-secondary mb-0'>"
              .$row['status'].
            "</P>
          </td>
          <td>
            <div align='center'><a data-bs-toggle='modal' data-bs-target='#exampleModal".$row['user_id']."' class='bi bi-pencil-square'> </a> 
              || <a href='delete_user.php?id=".$row['user_id']."' > <i class='bi bi-archive-fill'></i></a>
            </div>
              <div class='modal fade' id='exampleModal".$row['user_id']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Edit User</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                  </div>
                  <form method='POST' action='process/edituser.php'>
                  <div class='modal-body'>
                    <input id='user_id' name='user_id' value='".$row['user_id']."' type='hidden'>
                    <label>Username</label>
                      <div class='mb-3'>
                        <input type='text' disabled class='form-control' placeholder='Username' value='".$row['username']."' id='username' aria-label='Username' aria-describedby='email-addon'>
                      </div>
                      <label>Firstname</label>
                      <div class='mb-3'>
                        <input type='text' class='form-control' placeholder='Firstname' value='".$row['firstname']."' name='firstname' id='firstname' aria-label='name' aria-describedby='email-addon'>
                      </div>
                      <label>Lastname</label>
                      <div class='mb-3'>
                        <input type='text' class='form-control' placeholder='Lastname' value='".$row['lastname']."' name='lastname' id='lastname' aria-label='text' aria-describedby='password-addon'>
                      </div>
                      <label>Email</label>
                      <div class='mb-3'>
                        <input type='email' class='form-control' placeholder='Email' value='".$row['email']."' name='email' id='email' aria-label='email'  aria-describedby='email-addon'>
                      </div>
                      <label>Role</label>
                      <div class='mb-3'>
                        <select class='form-select' aria-label='Default select example' name='role' id='role'>
                          <option value='admin' ".$select[0]." >Admin</option>
                          <option value='user' ".$select[1]." >User</option>
                        </select>
                      </div>
                    </div>
                    <div class='modal-footer'>
                      <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                      <button type='submit' id='save' value='".$row['user_id']."' class='btn btn-primary'>Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </td>
        </tr>";
            $count+=1;
}


pg_free_result($result);
pg_close($conn);


?>

