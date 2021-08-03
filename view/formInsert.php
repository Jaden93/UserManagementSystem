<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button  onclick="" aria-label="Close">Elimina</button>
                <button type="submit" class="btn btn-primary " nome="updateData" data-bs-dismiss="modal" aria-label="Close">Salva</button>          
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Salva e
                    chiudi</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Chiudi</button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/update.php">
                    <div class="form-group d-flex">
                        <input name="id" type="hidden" class="customInput form-control" id="modal_id">
                        <div class="col-6 me-2">
                            <label for="nome">Nome e Cognome</label>
                            <input  name="nome" type="text" class="customInput form-control" id="modal_nome">
                        </div>
                        <div class="col-4 mx-2">
                            <label for="data">Data di nascita</label>
                            <input  name="update_date" type="date" class="customInput form-control" id="modal_data"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col mx-2">
                            <label for="tipo">Tipo</label>
                            <select name="option" id="modal_tipo">
                                <?php 
                                    foreach($options as $option) { ?>
                                <option>
                                    <?= $option ?>
                                </option>
                                <?php   }  ?>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="py-3 col-6 me-2">
                            <label for="address">Indirizzo</label>
                            <input  name="update_indirizzo" type="text" class="form-control customInput" id="modal_indirizzo"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="py-3 col-6 me-2">
                            <label for="exampleInputEmail1">Email</label>
                            <input  name="update_email" type="email" class="customInput form-control"
                                id="modal_email" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="py-3 my-2">
                        <label class="" for="check">Attivo</label>
                        <input name="update_check"  type="hidden" value="0" class="check form-check-input" id="check">
                        <input name="update_check" checked type="checkbox" value="1" class="check form-check-input" id="check">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


