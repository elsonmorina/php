<?php
include_once('header.php');
?>

<div class="d-flex flex-column justify-content-center">
      <div data-mdb-input-init class="form-outline mb-4 w-25 ">
        <input type="email" id="loginName" class="form-control" placeholder="Email or username"/>
      </div>

      <div data-mdb-input-init class="form-outline mb-4 w-25 ">
        <input type="password" id="loginPassword" class="form-control" placeholder="Password"/>
      </div>

     

</div>

      <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>
  <div
    class="tab-pane fade"
    id="pills-register"
    role="tabpanel"
    aria-labelledby="tab-register"
  >
 
<?php
    include_once('footer.php')
?>