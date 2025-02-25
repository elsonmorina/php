<?php
  include_once('header.php');
?>

<body>
<form action="add.php" method="POST">
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="name" id="form6Example1" class="form-control" placeholder="First name"/>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="surname" id="form6Example2" class="form-control" placeholder="Last name"/>
      </div>
    </div>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="username" id="form6Example3" class="form-control" placeholder="Username"/>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" name="email" id="form6Example5" class="form-control" placeholder="Email"/>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" name="password" id="form6Example6" class="form-control" placeholder="Password"/>
  </div>



  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">Add</button>
</form>
      <?php
  include_once('footer.php');
?>