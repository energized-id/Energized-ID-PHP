
<form action="production" method="post" autocomplete="off">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="securityLevel">Security Level</label>
    <select id="securityLevel" name="securityLevel" class="form-control">
        <option selected>Level 0</option>
        <option>Level 1</option>
        <option>Level 2</option>
        <option>Level 3</option>
      </select>
      <button class="btn btn-primary" type="submit">Search</button>
  </div>
</form>