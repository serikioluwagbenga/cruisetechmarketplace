<?php 

    $account_from = [
        "ID"=>["input_type"=>"hidden", "is_required"=>false],
        "platformID"=>["title"=>"Select Platfrom","type"=>"select", "options"=>$d->options_list("platform"), "description"=>"<a href='index?p=platform&action=new'>Click here</a> to Create New Platfrom"],
        "title"=>["description"=>"Name or title of the account"],
        "preview_link"=>["description"=>"A link to preview the account"],
        "description"=>["type"=>"textarea", "title"=>"Description (optional)", "is_required"=>false, "description"=>"Tell buyers more about the account"],
        "loginID"=>["placeholder"=>"Email, username or phone number", "unique"=>"platformID"],
        "password"=>["description"=>"Password to access the account"],
        "amount"=>["input_type"=>"number", "description"=>"What is the amount you selling the account for"],
        "Aditional_auth_info"=>["title"=>"Aditional Authentication Information (optional)", "is_required"=>false, "type"=>"textarea", "description"=>"Enter additional details about the account,<span class='text-danger'>This won't show until the user purchases the account.</span>"],
        "input_data"=>$account
    ];

    if(!isset($account['status']) || $account['status'] != 3)  {
        $account_from['status'] =  ["type"=>"select", "options"=>["1"=>"Active", "0"=>"Draft"], "is_required"=>false];
    }
    $d->create_table("account", $account_from);
?>