<div style="display: flex; justify-content: center; align-items: center; margin-top: 70px;">
    <div class="form-container">
        <h2 class="form-title">Atualizar Usuário</h2>
        <form class="personal-form" method="POST" action="/user_update">
            <div class="form-row">
                <div class="form-group-user">
                    <input type="hidden" id="email" class="form-input-user" name="id_usuario" placeholder="seuemail@email.com.br" required value="<?= $userEncontrado->id_usuario ?>">
                    <label for="email" class="form-label-user">E-mail</label>
                    <input type="email" id="email" class="form-input-user" name="email" placeholder="seuemail@email.com.br" required value="<?= $userEncontrado->email ?>">
                </div>
                <div class="form-group-user">
                    <label for="telefone" class="form-label-user">Telefone celular</label>
                    <input type="tel" id="telefone" class="form-input-user" name="fone" placeholder="(45) 99134-9889" required value="<?= $userEncontrado->fone ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group-user">
                    <label for="nome" class="form-label-user">Nome completo</label>
                    <input type="text" id="nome" class="form-input-user" name="nome" placeholder="João Andrade da Silva" required value="<?= $userEncontrado->nome ?>">
                </div>
                <div class="form-group-user">
                    <label for="rg" class="form-label-user">Rua</label>
                    <input type="text" id="rg" class="form-input-user" name="rua" placeholder="Digite a rua da sua casa" value="<?= $userEncontrado->rua ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group-user">
                    <label for="cpf" class="form-label-user">CPF</label>
                    <input type="number" id="cpf" class="form-input-user" name="cpf" placeholder="Digite seu CPF" required value="<?= $userEncontrado->cpf ?>">
                </div>
                <div class="form-group-user">
                    <label for="cpf" class="form-label-user">Bairro</label>
                    <input type="text" id="bairro" class="form-input-user" name="bairro" placeholder="Digite seu bairro" required value="<?= $userEncontrado->bairro ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group-user">
                    <label for="data-nascimento" class="form-label-user">Data de Aniversário</label>
                    <input type="date" id="data-nascimento" class="form-input-user" name="dt_nasc" required value="<?= $userEncontrado->dt_nasc ?>">
                </div>
                <div class="form-group-user">
                    <label for="ncasa" class="form-label-user">Número da casa:</label>
                    <input type="number" id="ncasa" class="form-input-user" name="nmcasa" placeholder="Digite número da casa" required value="<?= $userEncontrado->nmcasa ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group-user">
                    <label for="ncasa" class="form-label-user">Complemento:</label>
                    <input type="text" id="ncasa" class="form-input-user" name="complemento" placeholder="Digite o complemento" required value="<?= $userEncontrado->complemento ?>">
                </div>
                <label class="form-label-user" style="font-size: 1.2rem;">Ativo:</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="radio" id="notificacao-sim" name="ativo" value="S" required>
                        <label for="notificacao-sim">Sim</label>

                        <input type="radio" id="notificacao-nao" name="ativo" value="N" required>
                        <label for="notificacao-nao">Não</label>
                    </div>
            </div>

            <button type="submit" class="form-button-user">Enviar</button>
        </form>
    </div>
</div>