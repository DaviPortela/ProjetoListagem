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
    <label class="form-label">Nome completo</label>
    <input type="text" class="form-control" name="nomeAluno">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">CEP</label>
    <input type="number" class="form-control" name="cep">
  </div>
  <div class="mb-3">
    <label class="form-label">Rua</label>
    <input type="text" class="form-control" name="rua">
  </div>
  <div class="mb-3">
    <label class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-warning">Cadastrar</button>    
  </div>

</form>
</main>
