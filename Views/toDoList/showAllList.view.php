
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des tâches</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Mes tâches</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->                                   
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="text-right form-group mr-2">
                            <a href="#custom-modal" id="demo-btn-addrow" class="btn btn-primary waves-effect waves-light" data-animation="door" data-plugin="custommodal" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-2"></i> Une nouvelle tâche</a>
                        </div>
                        <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                            <thead>
                            <tr>
                                <th class="min-width" style="text-align: center;">Supprimer/Fait</th>
                                <th>Tâche</th>
                                <th>Date</th>
                                <th>Statut</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                            <?php  foreach($tasks as $task): { ?>
                                                    
                                <tr>
                                    <?php if($task->getState() == 0):{ ?>
                                        <td class="text-center">
                                            <a href="deleteTask?id=<?= $task->getId(); ?>" class="btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></a>
                                            <a href="changeStateTask?id=<?= $task->getId(); ?>" class="btn btn-success btn-xs btn-icon"><i class="fa fa-check"></i></a>
                                        </td>
                                        <td>
                                            <p><?= $task->getContent(); ?></p>
                                        </td>
                                        <td>
                                            <span class="badge label-table badge-primary"><?= $task->getCreatedAt(); ?></span>
                                        </td>
                                        <td>
                                            <span class="badge label-table badge-warning">En cours</span>
                                        </td>
                                        
                                    <?php } elseif($task->getState() == 1):{?>
                                        <td class="text-center">
                                            <a href="deleteTask?id=<?= $task->getId(); ?>" class="btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></a>
                                        </td>
                                        <td>
                                            <del><?= $task->getContent(); ?></del>
                                        </td>
                                        <td>
                                            <span class="badge label-table badge-danger"><?= $task->getCreatedAt(); ?></span>
                                        </td>
                                        <td>
                                            <span class="badge label-table badge-danger">Fait</span>
                                        </td>
                                    <?php  } endif; ?>

                                    </tr>

                            <?php  } endforeach; ?>

                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="6">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>


    <div id="custom-modal" class="modal-demo">
        <h4 class="custom-modal-title">Ajouter une tâche a votre liste</h4>
            <div class="custom-modal-text">
                <form method="POST" action="insertTask">
                    <input type="text" class="form-control" name="task" id="field-3" placeholder="Tâche ..." required>
                    <hr/>
                    <button class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>    