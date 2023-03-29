<?php 
    $title = 'Index';
    require_once 'includes/header.php';
    ?>
  <body>
    <h1 class="text-center">REGISTRATION FOR IT CONFERENCE</h1>

    <form>
  <div class="form-group">
    <label for="inputname">First Name</label>
    <input type="name" class="form-control" id="inputname">
  </div>

  <div class="form-group">
    <label for="inputname">Last Name</label>
    <input type="name" class="form-control" id="inputname">
  </div>

  <div class="form-group">
    <label for="inputdate">Date of Birth</label>
    <form action="/action_page.php">
    <label for="birthdaytime">Birthday (date and time):</label>
    <input type="datetime-local" id="birthdaytime" name="birthdaytime">
    <input type="submit">
    </form>
  </div>

    <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02">
    <option selected>Choose...</option>
      <option>Database Admin</option>
      <option>Software Developer</option>
      <option>Web Administrator</option>
      <option>Others</option>
  </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="inputnumber">Contact Number</label>
    <input type="number" class="form-control">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<?php require_once 'includes/footer.php'?>

