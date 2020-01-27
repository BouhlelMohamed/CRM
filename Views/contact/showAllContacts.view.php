                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Contacts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Mes contacts</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="text-right d-print-none">
                                 <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="blur" data-plugin="custommodal" data-overlayColor="#38414a">Crée un nouveau contact</a>
                            </div>
                            <br>
                            <div class="table-responsive">
                            <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" cellspacing="0" id="tickets-table">
                                <thead class="bg-light">
                                <tr>
                                    <th class="font-weight-medium">Nom & Prénom</th>
                                    <th class="font-weight-medium">Entreprise</th>
                                    <th class="font-weight-medium">C&A</th>
                                    <th class="font-weight-medium">Adresse</th>
                                    <th class="font-weight-medium">Téléphone</th>
                                    <th class="font-weight-medium">Email</th>
                                    <th class="font-weight-medium">Secteur</th>
                                    <th class="font-weight-medium">Avis</th>
                                    <th class="font-weight-medium"></th>
                                    <th class="font-weight-medium">RDV/Supprimer</th>
                                </tr>
                                </thead>

                                <tbody class="font-14">
                                    <?php foreach($contacts as $contact): { ?>
                                    <tr>
                                        <td><b><?= $contact->getName() ?></b></td>
                                        <td>
                                            <a href="javascript: void(0);" class="text-dark">
                                                <span class="ml-2"><?= $contact->getCompany() ?></span>
                                            </a>
                                        </td>

                                        <td>
                                            <?= $contact->getTurnover() ?>
                                        </td>

                                        <td>
                                            <?= $contact->getAddress() ?>
                                        </td>

                                        <td>
                                            <?= $contact->getPhoneNumber() ?>
                                        </td>

                                        <td>
                                            <?= $contact->getEmail() ?>
                                        </td>

                                        <td>
                                            <?php $sector = $contact->getSector();
                                             if($sector == 0){echo "<i class='fas fa-meh-blank'></i> Je ne sais pas";}
                                            elseif($sector == 1){echo "<i class='fas fa-calculator'></i>" .  " Finance";}
                                            elseif($sector == 2){echo "<i class='fas fa-laptop'></i>" .  " Informatique";}  
                                            elseif($sector == 3){echo "<i class='fas fa-money-check-alt'></i>" .  " Banque";}  ?>

                                         </td>

                                         <td>
                                            <?php $state = $contact->getState();
                                             if($state == 0){echo "<div class='badge badge-dark'><i class='fas fa-meh-blank'></i></div>";}
                                            elseif($state == 1){echo "<div class='badge badge-success'><i class='fas fa-smile-wink'></i></div>";}
                                            elseif($state == 2){echo "<div class='badge badge-warning'><i class='fas fa-meh'></i></div>";}  
                                            elseif($state == 3){echo "<div class='badge badge-danger'><i class='fas fa-frown'></i></div>";}  ?>

                                         </td>

                                        <td>
                                            <?= $contact->getCreatedAt() ?>
                                        </td>

                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="dropdown-toggle arrow-none btn btn-warning btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="makeAppointment?id=<?= $contact->getId() ?>" class="dropdown-item"><i class="mdi mdi-star mr-2 text-muted font-18 vertical-middle"></i>Prendre un RDV</a>
                                                    <a class="dropdown-item" href="deleteContact?id=<?= $contact->getId() ?>"><i class="mdi mdi-delete mr-2 font-18 text-muted vertical-middle"></i>Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } endforeach; ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


        <div id="custom-modal" class="modal-demo">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter un nouveau contact</h4>
                </div>
                    <div class="modal-body p-4">
                    <form method="POST" action="insertContact">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Nom & Prénom </label>
                                    <input type="text" class="form-control" id="field-1" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Entreprise </label>
                                    <input type="text" class="form-control" id="field-1" name="company" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Chiffre d'affaires</label>
                                    <input type="number" class="form-control" id="field-1" name="turnover" placeholder="€" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Adresse</label>
                                    <input type="text" class="form-control" id="field-2" name="address" placeholder="Paris">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Téléphone</label>
                                    <input type="number" class="form-control" id="field-3" name="phoneNumber" placeholder="01.07.08.10.02">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-5" class="control-label">Email</label>
                                    <input type="text" class="form-control" id="field-5" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-6" class="control-label">secteur</label>
                                    <select name="sector" class="custom-select custom-select-sm">
                                        <option value="0">--Je ne sais pas--</option>
                                        <option value="1">Finance</option>
                                        <option value="2">Informatique</option>
                                        <option value="3">Banque</option>
                                    </select>                                
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group no-margin">
                                    <label for="field-7" class="control-label">Avis</label>
                                    <select name="state" class="custom-select custom-select-sm">
                                        <option value="0">--Je ne sais pas--</option>
                                        <option value="1">Intéressé</option>
                                        <option value="2">Moyen</option>
                                        <option value="3">Pas du tout intéressé</option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-info" value="Enregistré">
                        </div>
                    </form>
                    </div>
            </div>
        </div>    