<!DOCTYPE html>
<html>

<head>
  <title>Codeigniter Crud tutorial on code-source.tempurl.host</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">

  <h1>Modifier votre utilisateur</h1>

    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="id" id="id" value="<?=$user_obj['id']; ?>">

      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" value="<?=$user_obj['name']; ?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?=$user_obj['email']; ?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Modifier</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
</body>

</html>