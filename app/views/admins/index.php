<?php require APPROOT.'/views/inc/headerAdmin.php'; ?>
<div class="container">
    <h1 class="mb-3 text-center">Admin</h1>
    <table class="table">
  <thead class = "thead-dark">
    <tr>
      <th scope="col">Field</th>
      <th scope="col">Information</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Name :</th>
      <td><?php echo $data['admins']->name ; ?></td>
    </tr>
    <tr>
      <th scope="row">Registration Number :</th>
      <td><?php echo $data['admins']->regNo ; ?></td>
    </tr>
  </tbody>
</table>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>