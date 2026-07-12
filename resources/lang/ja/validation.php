<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみ使用できます。',
    'alpha_dash' => ':attributeはアルファベット、数字、ダッシュのみ使用できます。',
    'alpha_num' => ':attributeはアルファベットと数字のみ使用できます。',
    'array' => ':attributeは配列でなければなりません。',
    'before' => ':attributeには:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには:date以前の日付を指定してください。',
    'between' => [
        'numeric' => ':attributeは:min から:maxの間で指定してください。',
        'file' => ':attributeのファイルサイズは:min から:maxキロバイトの間でなければなりません。',
        'string' => ':attributeは:min文字から:max文字の間で指定してください。',
        'array' => ':attributeの項目数は:min個から:max個の間でなければなりません。',
    ],
    'boolean' => ':attributeはtrueかfalseを指定してください。',
    'confirmed' => ':attributeの確認が一致しません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_format' => ':attributeは:formatの形式と一致しません。',
    'different' => ':attributeと:otherには異なる値を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeには重複した値が含まれています。',
    'email' => ':attributeには有効なメールアドレスを指定してください。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeは必須です。',
    'image' => ':attributeには画像を指定してください。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeフィールドは:otherに存在しません。',
    'integer' => ':attributeは整数で指定してください。',
    'ip' => ':attributeには有効なIPアドレスを指定してください。',
    'json' => ':attributeには有効なJSON文字列を指定してください。',
    'max' => [
        'numeric' => ':attributeは:max以下で指定してください。',
        'file' => ':attributeのファイルサイズは:maxキロバイト以下でなければなりません。',
        'string' => ':attributeは:max文字以下で指定してください。',
        'array' => ':attributeの項目数は:max個以下でなければなりません。',
    ],
    'mimes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeは:min以上で指定してください。',
        'file' => ':attributeのファイルサイズは:minキロバイト以上でなければなりません。',
        'string' => ':attributeは:min文字以上で指定してください。',
        'array' => ':attributeの項目数は:min個以上でなければなりません。',
    ],
    'not_in' => '選択された:attributeは無効です。',
    'numeric' => ':attributeは数値で指定してください。',
    'present' => ':attributeフィールドが存在しません。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは必須です。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:values内にない場合、:attributeは必須です。',
    'required_with' => ':valuesが指定されている場合、:attributeは必須です。',
    'required_with_all' => ':valuesが指定されている場合、:attributeは必須です。',
    'required_without' => ':valuesが指定されていない場合、:attributeは必須です。',
    'required_without_all' => ':valuesのいずれも指定されていない場合、:attributeは必須です。',
    'same' => ':attributeと:otherには同じ値を指定してください。',
    'size' => [
        'numeric' => ':attributeは:sizeで指定してください。',
        'file' => ':attributeのファイルサイズは:sizeキロバイトでなければなりません。',
        'string' => ':attributeは:size文字で指定してください。',
        'array' => ':attributeの項目数は:size個でなければなりません。',
    ],
    'string' => ':attributeは文字列で指定してください。',
    'timezone' => ':attributeには有効なタイムゾーンを指定してください。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeの形式が無効です。',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ':env変数',
        'invalid_password' => 'このアカウントに指定されたパスワードが無効だった。',
    ],
];
