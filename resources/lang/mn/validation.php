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

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => ':attribute талбар нь :digits байх ёстой.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'Поле :attribute должен быть действительным адресом электронной почты.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute must not be greater than :max.',
        'file' => 'Поле :attribute не должно превышать :max килобайтов.',
        'string' => 'Поле :attribute не должен содержать больше :max символов.',
        'array' => 'The :attribute must not have more than :max items.',
    ],
    'mimes' => 'Поле :attribute должен быть файлом типа: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => ':attribute талбар хамгийн багадаа :min байх ёстой.',
        'file' => ':attribute талбар нь дор хаяж :min килобайт байх ёстой.',
        'string' => ':attribute талбар нь дор хаяж :min тэмдэгттэй байх ёстой.',
        'array' => ':attribute талбар нь дор хаяж :min элемент агуулсан байх ёстой.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => ':attribute талбар нь тоо байх ёстой.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attribute талбар шаардлагатай.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => ':атрибутыг аль хэдийн авсан.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'login' => 'нэвтрэх',
        'password' => 'нууц үг',
        'new-password' => 'шинэ нууц үг',
        'confirm-password' => 'нууц үг баталгаажуулах',
        'surname' => 'овог нэр',
        'name' => 'нэр',
        'last_name' => 'овог нэр',
        'phone' => 'утас',
        'message' => 'захиа',
        'title' => 'нэр',
        'author' => 'зохиолч',
        'pages' => 'хуудаснууд',
        'category' => 'ангилал',
        'code' => 'худалдагчийн код',
        'book' => 'ном',
        'datetime' => 'огноо, цаг',
        'audience' => 'үзэгчид',
        'participants' => 'оролцогчид',
        'description' => 'тайлбар',
        'presentation' => 'танилцуулга',
        'avatar' => 'аватар',
        'company' => 'компания',
        'banner' => 'туг',
        'user' => 'хэрэглэгч',
        'moderator' => 'зохицуулагч',
        'start' => 'эхлэх',
        'end' => 'төгсгөл',
        'category-id' => 'ангилал',
        'ru-title' => 'орос хэл дээрх гарчиг',
        'en-title' => 'англи хэл дээрх гарчиг',
        'img' => 'зураг',
        'ru-instruction' => 'орос хэл дээрх заавар',
        'en-instruction' => 'англи хэл дээрх заавар',
        'mn-instruction' => 'монгол хэл дээрх заавар',
        'recipe' => 'хэрэглээний горим',
        'ru-composition' => 'орос хэл дээрх найруулга',
        'en-composition' => 'англи хэл дээрх найруулга',
        'mn-composition' => 'монгол хэлээр найруулга',
        'ru-indications' => 'орос хэл дээрх програм',
        'en-indications' => 'англи хэл дээрх програм',
        'mn-indications' => 'монгол хэл дээрх програм',
        'ru-description' => 'орос хэл дээрх тайлбар',
        'en-description' => 'англи хэл дээрх тайлбар',
        'mn-description' => 'монгол хэлээр тайлбар',
        'ru-text' => 'орос хэл дээрх текст',
        'en-text' => 'англи хэл дээрх текст',
        'mn-text' => 'монгол хэл дээрх бичвэр',
        'year' => 'жил',
    ],
];
