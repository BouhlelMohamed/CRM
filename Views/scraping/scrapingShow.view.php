

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active"><i class="fas fa-robot"></i></li>
                </ol>
            </div>
            <h4 class="page-title"><i class="fas fa-robot"></i></h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card-box">
<table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">Communes et Mairies du département de la Seine-et-Marne</th>
        </tr>
    </thead>
        <tbody>

<?php

include('assets/scraping.php');

$websiteUrl = "https://www.annuaire-des-mairies.com/seine-et-marne.html";
$html = file_get_html($websiteUrl);

foreach($html->find('p') as $oneTownHall)
{
    foreach($oneTownHall->find('.lientxt') as $a)
    {
        if(substr($a->attr['href'] , 0, 1) == ".")
        {
                $websiteUrlForMail = "https://www.annuaire-des-mairies.com" . substr($a->attr['href'], 1) ;

                ?>

                <tr>
                    <td><?= "<a href='$websiteUrlForMail'>" . $a->plaintext . "</a>"; ?></td>
                </tr>

            
                <?php
            }
        

        }

    }

    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>