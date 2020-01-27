                           <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Rendez-vous</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Mes Rendez-vous</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card-box">
            <div class="text-right d-print-none">
                <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="slip" data-plugin="custommodal" data-overlayColor="#38414a">Prendre un RDV</a>
            </div>
            <br>
        <div class="table-responsive"> 
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>Date</th>                    
                    <th>Heure</th>
                    <th>Nom & Prénom</th>
                    <th>Entreprise</th>
                    <th>Lieu</th>
                    <th>Description</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                </thead>
                <tbody>
                <?php foreach($appointments as $appointment): { ?>
                    <tr>
                        <td><?= $appointment->getDate() ?></td>
                        <td><?= $appointment->getHour() ?></td>
                        <td><?= $appointment->getName() ?></td>
                        <td><?= $appointment->getCompany() ?></td>
                        <td><?= $appointment->getAddress() ?></td>
                        <td><?= $appointment->getDescription() ?></td>
                        <td><?= $appointment->getPhoneNumber() ?></td>
                        <td><?= $appointment->getEmail() ?></td>
                        <td><a class="btn btn-danger" href="deleteAppointment?id=<?= $appointment->getId() ?>" ><i class="far fa-trash-alt"></i></a></td>
                    </tr>
                <?php } endforeach; ?>
                </tbody>
            </table>
        </div>


        </div>
        </div>
        </div>

        <div id="custom-modal" class="modal-demo">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Rendez-vous</h4>
                </div>
                    <div class="modal-body p-4">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nom & Prénom</label>
                                    <input type="text" class="form-control" id="field-1" name="name" placeholder="John Yohan" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Entreprise</label>
                                    <input type="text" class="form-control" id="field-2" name="company" placeholder="SNCF">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Adresse</label>
                                    <input type="text" class="form-control" id="field-3" name="address" placeholder="Adresse">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Tél</label>
                                    <input type="text" class="form-control" id="field-5" name="phoneNumber" placeholder="07.07.07.07.07">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">Email</label>
                                    <input type="text" class="form-control" id="field-6" name="email" placeholder="test@gmail.com">
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
            </div>
        </div>    
