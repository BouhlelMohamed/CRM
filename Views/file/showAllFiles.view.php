
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Mes Documents</li>
                </ol>
            </div>
            <h4 class="page-title">Mes documents</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card-box">
        <form action="insertFile" method="POST" enctype="multipart/form-data">
            <div class="text-right"> 
                <div class="fileupload btn btn-success waves-effect waves-light mb-3">
                    <span><i class="mdi mdi-cloud-upload mr-1"></i> Télécharger</span>
                    <input type="file" name="file" class="upload">
                </div>      
                <input class="fileupload btn btn-success waves-effect waves-light mb-3" value="Envoyer" type="submit"/>			
            </div>    
        </form>
            <div class="table-responsive">
                <table class="table table-centered mb-0">
                    <thead class="font-13 bg-light text-muted">
                        <tr>
                            <th class="font-weight-medium">Nom du fichier</th>
                            <th class="font-weight-medium">Date de téléchargement</th>
                            <th class="font-weight-medium">Type</th>
                            <th class="font-weight-medium text-center" style=""></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($files as $file): { ?>
                        <tr>
                        <?php $file_ext  = strtolower(end(explode('.',$file->getName()))); ?>
                        <?php if($file_ext == "pdf"): { ?>
                            <td>
                                <img src="assets/images/file-icons/pdf.svg" height="30" alt="icon" class="mr-2">
                                <a href="storage/<?= $file->getName() ?>" download="<?= $file->getName() ?>" class="text-dark"><?= $file->getName() ?></a>
                            </td>
                        <?php }elseif($file_ext == "png"): { ?>
                            <td>
                                <img src="assets/images/file-icons/png.svg" height="30" alt="icon" class="mr-2">
                                <a href="storage/<?= $file->getName() ?>" download="<?= $file->getName() ?>" class="text-dark"><?= $file->getName() ?></a>
                            </td>
                            <?php }elseif($file_ext == "txt"): { ?>
                                <td>
                                <img src="assets/images/file-icons/txt.svg" height="30" alt="icon" class="mr-2">
                                <a href="storage/<?= $file->getName() ?>" download="<?= $file->getName() ?>" class="text-dark"><?= $file->getName() ?></a>
                            </td>
                            <?php }elseif($file_ext == "zip"): { ?>
                                <td>
                                <img src="assets/images/file-icons/zip.svg" height="30" alt="icon" class="mr-2">
                                <a href="storage/<?= $file->getName() ?>" download="<?= $file->getName() ?>" class="text-dark"><?= $file->getName() ?></a>
                            </td>

                            <?php } endif; ?>
                            <td class="text-muted font-13"><?= $file->getDate() ?></td>
                            <td>
                                <?= $file->getType() ?> 
                            </td>
                            <td>
                                <a class="btn btn-danger btn-xs" id="sa-success"  href="deleteFile?id=<?= $file->getId() ?>">Supprimé</a>
                            </td>
                        </tr>
                    <?php } endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

