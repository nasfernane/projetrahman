<!-- me logo et le nome de la site -->
<div class="logo">
    <strong>MY MUSIC</strong>
</div>
<!-- le banner que est le puch line LES ARTISTES -->
<div class="banner">
    <strong>LOGIN INTO MY MUSIC APP</strong>
</div>
<form action="./database/login.php" method="POST">
    <label for="exampleInputEmail1"><strong>Email Address</strong></label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">

    <label for="exampleInputPassword1"><strong>Password</strong></label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>

    <button type="submit" class="btn btn-primary">LOGIN</button>
    <?php require "./views/footer.php"; ?>
</form>
