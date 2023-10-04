<div style="width: 50%; margin-left: auto; margin-right: auto; margin-top: 150px;">    
    <form action="{{ route('api.login') }}" method="POST">
        @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Não compartilharemos seu email com ninguem!</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>