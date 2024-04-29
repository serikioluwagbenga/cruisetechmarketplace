<?php
if (!$account || $account == "") {
    echo $c->empty_page("Account not found or not sold to you.", h1: "Not Found");
} else { ?>
    <div class="card p-3">
        <div class="flex d-flex">
            <div>
                <img class="img-fluid rounded-circle" width="60" src="<?= $a->get_platfrom_img_url($account['platformID'])  ?>" alt="">
            </div>
            <div class="ms-3">
                <h2><?= $account['title'] ?></h2>
                <p class="h5">Amount: <?= $d->money_format($account['amount']) ?></p>
            </div>
        </div>
        <div class="card bg-light-success p-3">
            <h6><b>Account Access Details</b></h6>
            <hr>
            <ul>
                <li>Login ID: <?= $account['loginID'] ?> <a href='javascript:void(0)' class='text-primary' onclick="copytext('<?= $account['loginID'] ?>')" ><i class='ti ti-copy'></i></a></li><hr>
                <li>Login Password: <?= $account['password'] ?> <a href='javascript:void(0)' class='text-primary' onclick="copytext('<?= $account['password'] ?>')" ><i class='ti ti-copy'></i></a></li><hr>
                <li>Aditional Details: <?= $account['Aditional_auth_info'] ?></li>
            </ul>
        </div>
        <hr>
        <p class='text-mute'><?= $account['description'] ?></p>



    </div>
<?php   } ?>