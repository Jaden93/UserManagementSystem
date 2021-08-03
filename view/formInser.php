<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">INSERISCI UTENTE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= insertUser() ?>">
                    <div class="form-group">
                        <label for="nome">Inserisci nome e cognome</label>
                        <input required name="nome" type="text" class="form-control" id="nome" placeholder="Nome">
                        <label for="exampleInputEmail1">Inserisci l'email</label>
                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Email">
                        <label for="data">Inserisci la data di nascita</label>
                        <input required name="date" type="date" class="form-control" id="data"
                            aria-describedby="emailHelp" placeholder="Data">
                        <label for="address">Inserisci il tuo indirizzo</label>
                        <input required name="indirizzo" type="text" class="form-control" id="address"
                            aria-describedby="emailHelp" placeholder="Indirizzo">
                    </div>
                    <div class="my-2">
                        <label class="" for="check">Spunta se utente attivo</label>
                        <input name="check" type="hidden" class="form-check-input" value="0" id="check">
                        <input name="check" type="checkbox" value="1" class="form-check-input" id="check">
                    </div>

                    <label for="tipo">Tipo</label>
                    <select name="option" id="tipo">
                        <?php 
                                    foreach($options as $option) { ?>
                        <option>
                            <?= $option ?>
                        </option>
                        <?php
                            }
                                     ?>
                    </select>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-primary" nome="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

