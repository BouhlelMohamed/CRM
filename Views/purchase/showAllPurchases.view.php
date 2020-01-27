            
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Mes Achats</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Mes Achats</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="text-right"> 
                                <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="slip" data-plugin="custommodal" data-overlayColor="#38414a">Ajouter un achat</a>
                                <a href="#custom-modal">Exporter en PDF</a>
                            </div> 
                            <br>
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Achat</th>
                                                <th>Prix</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($purchases as $purchase): { ?>
                                            <tr>
                                                <th><?= $purchase->getName() ?></th>
                                                <th><?= $purchase->getPrice() ?> €</th>
                                                <th><?= $purchase->getDate() ?></th>
                                            </tr>
                                                <?php } endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> <!-- end .table-responsive -->

                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->



        <div id="custom-modal" class="modal-demo">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Un achat</h4>
                </div>
                    <div class="modal-body p-4">
                    <form method="POST" action="insertPurchase">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-1" class="control-label">Votre achat</label>
                                    <input type="text" class="form-control" id="field-1" name="name" placeholder="Voiture" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="field-2" class="control-label">Le prix</label>
                                    <input type="text" class="form-control" id="field-2" name="price" placeholder="15000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-3" class="control-label">Date</label>
                                    <input type="date" class="form-control" id="field-3" name="date">
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


