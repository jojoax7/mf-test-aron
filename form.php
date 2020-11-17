<?php 
  $scripts = '<script src="js/talents.form.js"></script>';
  ob_start();
?>
  <div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Talent Register Sheet
            <a href="index.php" class="pull-right">List</a> 
        </h4>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" novalidate onsubmit="saveUser(event)">

            <div class="form-group">
              <label for="name" class="col-lg-2 control-label">Name</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
              </div>
            </div>

            <div class="form-group">
              <label for="city" class="col-lg-2 control-label">City</label>
              <div class="col-lg-10">
                <select class="form-control" name="city" id="city">
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              </div>
            </div>

            <div class="form-group">
              <label for="phone" class="col-lg-2 control-label">Phone</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>

        </form>
    </div>
  </div>


<!-- 
  <fieldset>
    <legend>Instructions</legend>
    <ol>
      <li>
        <b>Front-End</b>: Add missing fields to the form:
        <ol>
          <li>Gender (male/female)</li>
          <li>Email</li>
          <li>Address</li>
          <li>Height, from 100cm to 200cm (Optional)</li>
        </ol>
        <u>NOTES:</u> Validation is not requiered
      </li>
      <li>
        <b>Back-End</b>: Save info into the DB <u>agency</u>, within  <u>talent</u> table.
        <br>
        <u>NOTES:</u> Save 10 registers
      </li>
      <li>
        <b>Front-End</b>: Show new fields in <a href="list.html">Talents List interface</a>. 
        <br>
        <u>NOTES:</u> Order rows by Talent Name
      </li>
    </ol>
  </fieldset> -->

<?php
  $content = ob_get_clean();
?>