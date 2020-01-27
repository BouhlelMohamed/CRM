

                    <div class="modal-body p-4">
                    <h4 class="modal-title">Prendre un Rendez-vous avec <?= $contact->getName() ?></h4>
                    <br>
                    <form method="POST" action="insertAppointment">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Date </label>
                                    <input type="date" class="form-control" id="field-1" name="date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Heure </label>
                                    <input type="time" class="form-control" id="field-1" name="hour" >
                                </div>
                            </div>
                        </div>
                        <div style="display: none" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nom & Prénom</label>
                                    <input type="text" class="form-control" id="field-1" name="name" value="<?= $contact->getName() ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Entreprise</label>
                                    <input type="text" class="form-control" id="field-2" name="company" value="<?= $contact->getCompany() ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Adresse</label>
                                    <input type="text" class="form-control" id="field-3" name="address" value="<?= $contact->getAddress() ?>" placeholder="Adresse">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Tél</label>
                                    <input type="text" class="form-control" id="field-5" name="phoneNumber" value="<?= $contact->getPhoneNumber() ?>" placeholder="07.07.07.07.07">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Email</label>
                                    <input type="text" class="form-control" id="field-6" name="email" value="<?= $contact->getEmail() ?>" placeholder="test@gmail.com">
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-7" class="control-label">Description</label>
                                    <textarea class="form-control" id="field-7" name="description" placeholder="Savoir plus sur le RDV"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-info" value="Sauvegarder le RDV">
                        </div>
                    </form>
                    </div>





