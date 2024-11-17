<div style="display: flex; justify-content: center; align-items: center; margin-top: 70px;">
    <div class="form-container">
        <h2 class="form-title">Dados Pessoais</h2>
        <form class="personal-form" method="POST" action="/user_update_store">
            <div class="form-row">
                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" class="form-input" name="email" placeholder="seuemail@email.com.br" required value="<?= $userEncontrado->email ?>">
                </div>
                <div class="form-group">
                    <label for="telefone" class="form-label">Telefone celular</label>
                    <input type="tel" id="telefone" class="form-input" name="fone" placeholder="(45) 99134-9889" required value="<?= $userEncontrado->fone ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input type="text" id="nome" class="form-input" name="nome" placeholder="João Andrade da Silva" required value="<?= $userEncontrado->nome ?>">
                </div>
                <div class="form-group">
                    <label for="rg" class="form-label">Rua</label>
                    <input type="text" id="rg" class="form-input" name="rua" placeholder="Digite a rua da sua casa" value="<?= $userEncontrado->rua ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="number" id="cpf" class="form-input" name="cpf" placeholder="Digite seu CPF" required value="<?= $userEncontrado->cpf ?>">
                </div>
                <div class="form-group">
                    <label for="cpf" class="form-label">Bairro</label>
                    <input type="text" id="bairro" class="form-input" name="bairro" placeholder="Digite seu bairro" required value="<?= $userEncontrado->bairro ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="data-nascimento" class="form-label">Data de Aniversário</label>
                    <input type="date" id="data-nascimento" class="form-input" name="dt_nasc" required value="<?= $userEncontrado->dt_nasc ?>">
                </div>
                <div class="form-group">
                    <label for="ncasa" class="form-label">Número da casa:</label>
                    <input type="number" id="ncasa" class="form-input" name="nmcasa" placeholder="Digite número da casa" required value="<?= $userEncontrado->nmcasa ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="ncasa" class="form-label">Complemento:</label>
                    <input type="text" id="ncasa" class="form-input" name="complemento" placeholder="Digite o complemento" required value="<?= $userEncontrado->complemento ?>">
                </div>
            </div>

            <button type="submit" class="form-button">Enviar</button>
        </form>
    </div>
</div>