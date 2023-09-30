<?php
include('menu.php');
?>

<h1>Liste etudiant</h1>
<div class="row">
  <div class="col-sm-12">
    <table class="table table-responsive table-striped table-success">
      <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Ine</th>
        <th>Email</th>
        <th>telephone</th>
        <th>Action</th>
      </tr>
      <tbody>
        <tr>
          <td>Michel</td>
          <td>tamba</td>
          <td>X00E65120161</td>
          <td>ansou@gmail.com</td>
          <td>770000000</td>
          <td>
            <button class="btn btn-primary">Editer</button>
            <button class="btn btn-danger">Supprimer</button>
          </td>
        </tr>
        <tr>
          <td>Michel</td>
          <td>tamba</td>
          <td>X00E65120161</td>
          <td>ansou@gmail.com</td>
          <td>770000000</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<?php
include('footer.php');
?>