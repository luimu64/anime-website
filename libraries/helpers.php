<?php

function cleanUpInput($userinput){
    $input = trim($userinput);
    $cleaninput = filter_var($input,FILTER_SANITIZE_STRING);
    return $cleaninput;
}

function cleanUpOutput($useroutput){
    $output = trim($useroutput);
    $cleanoutput = htmlspecialchars($output);
    return $cleanoutput;
}

function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}

function isLoggedIn(){
    if(isset($_SESSION['username'], $_SESSION['id']) && ($_SESSION['session_id'] == session_id())){
        return true;
    } else {
        return false;
    }
}

function isLuimu() {
    if ($_SESSION['username'] == "luimu" && $_SESSION['id'] == "69") return true;
}


// https://www.php.net/manual/en/function.sort.php ensimmäisen käyttäjän posti hiukan muokattuna
function array_sort($array, $on, $order=SORT_DESC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}

// https://stackoverflow.com/a/20618256
function in_array_r($item , $array){
    return preg_match('/"'.preg_quote($item, '/').'"/i' , json_encode($array));
}
?>