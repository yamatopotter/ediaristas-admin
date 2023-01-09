@csrf

<div class="card">
    <div class="card-body">
        <fieldset>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome do usuário</label>
                        <input value="{{ old('name',$usuario->name ?? '' )}}" type="input" class="form-control" name="name" id="name" required placeholder="Digite o nome do usuário">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email do usuário</label>
                        <input value="{{ old('email',$usuario->email ?? '' )}}" type="email" class="form-control" name="email" id="email" required placeholder="Digite o email do usuário">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input value="{{ old('password', '' ) }}" type="password" class="form-control" name="password" id="password" required placeholder="Digite a senha do usuário">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">Confirmação da senha</label>
                        <input value="{{ old('password_confirmation', '' ) }}" type="password" class="form-control" name="password_confirmation" id="password_confirmation" required placeholder="Confirme a senha do usuário">
                    </div>
                </div>
            </div>
        </fieldset>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>