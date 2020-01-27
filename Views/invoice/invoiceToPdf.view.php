				<!-- start page title -->
				<div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Facture</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Facture</h4>
                        </div>
                    </div>
                </div>     
				<!-- end page title --> 
				<div class="mt-4 mb-1">
					<div class="text-right d-print-none">
						<a href="#" onclick="HTMLtoPDF()" class="btn btn-success waves-effect waves-light">Créer un PDF</a>
					</div>
				</div>
			<div id="HTMLtoPDF">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <!-- Logo & title -->
                            <div class="clearfix">
                                <div class="float-right">
                                    <h4 class="m-0 d-print-none">Facture N°<span contenteditable>001</span></h4>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <p><b><span contenteditable>Bouhlel Mohamed</span></b></p>
                                        <p class="text-muted"><span contenteditable>91 Rue de la mairie</span></p>
										<p class="text-muted"><span contenteditable>77169, chauffry</span></p>
										<p class="text-muted"><span contenteditable>mohamed.bouhleel@gmail.com</span></p>
										<p class="text-muted"><span contenteditable>07.60.57.33.09</span></p>
										<p class="text-muted"><span contenteditable></span></p>

									</div>

                                </div><!-- end col -->
                                <div class="col-md-4 offset-md-2">
                                    <div class="mt-3 float-right">
                                        <p class="m-b-10"><strong>Date : </strong> <span class="float-right"> &nbsp;&nbsp;&nbsp;&nbsp; <span contenteditable>22/01/2020</span></span></p>
                                        <p class="m-b-10"><strong>Valable jusqu'au :  </strong> <span class="float-right"> <span contenteditable> 30/01/2020</span> </span></p>
                                    </div>
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <h5><span contenteditable>Facturé à :</span></h5>
                                    <address>
										<span contenteditable>SAS COULOMMIERS</span><br>
                                        <span contenteditable>10 Rue de la mairie</span><br>
                                        <span contenteditable>77120, Coulommiers</span><br>
                                        <span contenteditable>01.50.50.60.30</span>
                                    </address>
                                </div> <!-- end col -->

                                <div class="col-sm-6">
                                    <h5><span contenteditable>Envoyé à :</span></h5>
                                    <address>
										<span contenteditable>SAS Meaux</span><br>
                                        <span contenteditable>10 Rue de la mairie</span><br>
                                        <span contenteditable>77100, Meaux</span><br>
                                        <span contenteditable>01.60.50.60.30</span>
                                    </address>
                                </div> <!-- end col -->
                            </div> 
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                    <table class="meta">
										<tr>
											<th><span contenteditable>Total :</span></th>
											<td><span id="prefix" contenteditable>€</span><span>600.00</span></td>
										</tr>
									</table>
									<table class="table inventory">
										<thead>
											<tr>
												<th><span contenteditable>Article</span></th>
												<th><span contenteditable>Description</span></th>
												<th><span contenteditable>Prix U</span></th>
												<th><span contenteditable>Quantité</span></th>
												<th><span contenteditable>Prix total</span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a class="cut">-</a><span contenteditable> Application Mobile</span></td>
												<td><span contenteditable>Application e-commerce sur App Store en langage SWIFT</span></td>
												<td><span data-prefix>€</span><span contenteditable>0.00</span></td>
												<td><span contenteditable>0</span></td>
												<td><span data-prefix>€</span><span>0.00</span></td>
											</tr>
										</tbody>
									</table>
									<div class="btn btn-info"><a class="add">+</a></div>

                                    </div> <!-- end table-responsive -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="clearfix pt-5">
                                        <h6 class="text-muted"><span contenteditable>Notes :</span></h6>

                                        <small class="text-muted">
										<span contenteditable>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</span>
                                        </small>
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="float-right">
										<table class="balance">
											<tr>
												<th><span contenteditable>Total de la facture :</span></th>
												<td><span data-prefix>€</span><span>0.00</span></td>
											</tr>
											<tr>
												<th><span contenteditable>Montant déjà payé :</span></th>
												<td><span data-prefix>€</span><span contenteditable>0.00</span></td>
											</tr>
											<tr>
												<th><span contenteditable>Total :</span></th>
												<td><span data-prefix>€</span><span>0.00</span></td>
											</tr>
										</table>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
				</div>
