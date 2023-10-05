<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Belive</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Liste des utilisateurs</h1>

    <div class="d-flex justify-content-end">
        <a href="<?= site_url('/adduser') ?>" class="btn btn-primary">Ajouter un utilisateur</a>
	</div>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Nom</th>
             <th>Email</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?= $user['name']; ?></td>
             <td><?= $user['email']; ?></td>
             <td>
              <a href="<?= base_url('updateuser/'.$user['id']);?>" class="btn btn-success">Modifier</a>
              <a href="<?= base_url('delete/'.$user['id']);?>" class="btn btn-danger">Supprimer</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</script>
</body>
</html>