<?php 
  $scripts = '<script src="js/talents.list.js"></script>';
  ob_start();
?>
  <div class="panel panel-default">
    <div class="panel-heading">
        <h4>
            Talents List
            <a href="?edit=true" class="pull-right">Form</a> 
        </h4>
    </div>
    <div class="panel-body">
        <table id="talents-list" class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>City</th>
              <th>Email</th>
              <th>Phone</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
    </div>
  </div>

  <!-- <fieldset>
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
        <b>Front-End</b>: Show new fields in <a href="?edit=true">Talents List interface</a>. 
        <br>
        <u>NOTES:</u> Order rows by Talent Name
      </li>
    </ol>
  </fieldset>

  <br>
  <br> -->

<?php
  $content = ob_get_clean();
?>