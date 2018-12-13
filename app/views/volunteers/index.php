<?php require APPROOT.'/views/inc/header.php'; ?>
<div class="container">
    <h1 class="mb-3 text-center">Volunteer</h1>
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
      <td><?php echo $data['volunteer']->name ; ?></td>
    </tr>
    <tr>
      <th scope="row">Registration Number :</th>
      <td><?php echo $data['volunteer']->regNo ; ?></td>
    </tr>
    <tr>
      <th scope="row">Event Name :</th>
      <td><?php echo $data['volunteer']->event ; ?></td>
    </tr>
    <tr>
      <th scope="row">Tokens Available :</th>
      <td><?php echo $data['volunteer']->event ; ?></td>
    </tr>
  </tbody>
</table>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>