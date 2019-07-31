<?php
// XSS対策の為のHTMLエスケープ
function es($data) {
    // $dataが配列の時
    if (is_array($data)) {
        // 再帰呼び出し
        return array_map(__METHOD__, $data);
    }
    else {
        // HTMLエスケープを行う
        return htmlspecialchars($data, ENT_QUOTES);
    }
}

// 配列の文字エンコードのチェック
function chen($data) {
    $result = true;
    foreach ((array)$data as $key => $value) {
        if (is_array($value)) {
            // 含まれている値が配列なら文字列に連結
            $value = implode("", $value);
        }
        if (!mb_check_encoding($value)) {
            $result = false;
            break;
        }
    }
    return $result;
}

// ?>