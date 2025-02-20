<?php
  include_once('header.php');
?>

<body>
<form>
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example1" class="form-control" placeholder="First name"/>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example2" class="form-control" placeholder="Last name"/>
      </div>
    </div>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" placeholder="Username"/>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" placeholder="Email"/>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form6Example6" class="form-control" placeholder="Password"/>
  </div>



  <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Place order</button>
</form>
      <?php
  include_once('footer.php');
?>