    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="entrar.php">
            <button class="btn btn-warning me-md-2" type="button">Entrar</button>
        </a>
        <a href="index.php">
            <button class="btn btn-warning me-md-2" type="button">Voltar</button>
        </a>
    </div>
</header>

<main class="container sm">
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Nome completo</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputCepl1" class="form-label">CEP</label>
    <input type="number" class="form-control" id="exampleInputCep1" aria-describedby="CepHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputRua1" class="form-label">Rua</label>
    <input type="text" class="form-control" id="exampleInputRua1" aria-describedby="RuaHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirmar senha</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-warning">Cadastrar</button>
</form>
</main>
