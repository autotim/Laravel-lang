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

    'accepted'             => ':attribute trebuie să fie acceptat.',
    'active_url'           => ':attribute nu este un URL valid.',
    'after'                => ':attribute trebuie să fie o dată după :date.',
    'after_or_equal'       => ':attribute trebuie să fie o dată ulterioară sau egală cu :date.',
    'alpha'                => ':attribute poate conține doar litere.',
    'alpha_dash'           => ':attribute poate conține doar litere, numere și cratime.',
    'alpha_num'            => ':attribute poate conține doar litere și numere.',
    'array'                => ':attribute trebuie să fie o matrice (array).',
    'before'               => ':attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal'      => ':attribute trebuie să fie o dată înainte sau egală cu :date.',
    'between'              => [
        'numeric' => ':attribute trebuie să fie între :min și :max.',
        'file'    => ':attribute trebuie să fie între :min și :max kiloocteți.',
        'string'  => ':attribute trebuie să fie între :min și :max caractere.',
        'array'   => ':attribute trebuie să aibă între :min și :max elemente.',
    ],
    'boolean'              => ':attribute trebuie să fie adevărat sau fals.',
    'confirmed'            => 'Confirmarea :attribute nu se potrivește.',
    'date'                 => ':attribute nu este o dată validă.',
    'date_equals'          => ':attribute trebuie să fie o dată egală cu :date.',
    'date_format'          => ':attribute trebuie să fie în formatul :format.',
    'different'            => ':attribute și :other trebuie să fie diferite.',
    'digits'               => ':attribute trebuie să aibă :digits cifre.',
    'digits_between'       => ':attribute trebuie să aibă între :min și :max cifre.',
    'dimensions'           => ':attribute are dimensiuni de imagine nevalide.',
    'distinct'             => ':attribute are o valoare duplicat.',
    'email'                => ':attribute trebuie să fie o adresă de e-mail validă.',
    'ends_with'            => ':attribute trebuie să se încheie cu una dintre următoarele: :values',
    'exists'               => ':attribute selectat nu există.',
    'file'                 => ':attribute trebuie să fie un fișier.',
    'filled'               => ':attribute trebuie completat.',
    'gt'                   => [
        'numeric' => ':attribute trebuie să fie mai mare de :value.',
        'file'    => ':attribute trebuie să fie mai mare de :value kilobyți.',
        'string'  => ':attribute trebuie să fie mai mare de :value caractere.',
        'array'   => ':attribute trebuie să aibă mai multe de :value elemente.',
    ],
    'gte'                  => [
        'numeric' => ':attribute trebuie să fie mai mare sau egal cu :value.',
        'file'    => ':attribute trebuie să fie mai mare sau egal cu :value kilobyți.',
        'string'  => ':attribute trebuie să fie mai mare sau egal cu :value caractere.',
        'array'   => ':attribute trebuie să aibă :value elemente sau mai multe.',
    ],
    'image'                => ':attribute trebuie să fie o imagine.',
    'in'                   => ':attribute selectat nu este valid.',
    'in_array'             => ':attribute nu există în :other.',
    'integer'              => ':attribute trebuie să fie un număr întreg.',
    'ip'                   => ':attribute trebuie să fie o adresă IP validă.',
    'ipv4'                 => ':attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6'                 => ':attribute trebuie să fie o adresă IPv6 validă.',
    'json'                 => ':attribute trebuie să fie un string JSON valid.',
    'lt'                   => [
        'numeric' => ':attribute trebuie să fie mai mic de :value.',
        'file'    => ':attribute trebuie să fie mai mic de :value kilobyți.',
        'string'  => ':attribute trebuie să fie mai mic de :value caractere.',
        'array'   => ':attribute trebuie să aibă mai puțin de :value elemente.',
    ],
    'lte'                  => [
        'numeric' => ':attribute trebuie să fie mai mic sau egal cu :value.',
        'file'    => ':attribute trebuie să fie mai mic sau egal cu :value kilobyți.',
        'string'  => ':attribute trebuie să fie mai mic sau egal cu :value caractere.',
        'array'   => ':attribute trebuie să aibă :value elemente sau mai puține.',
    ],
    'max'                  => [
        'numeric' => ':attribute nu poate fi mai mare de :max.',
        'file'    => ':attribute nu poate avea mai mult de :max kiloocteți.',
        'string'  => ':attribute nu poate avea mai mult de :max caractere.',
        'array'   => ':attribute nu poate avea mai mult de :max elemente.',
    ],
    'mimes'                => ':attribute trebuie să fie un fișier de tipul: :values.',
    'mimetypes'            => ':attribute trebuie să fie un fișier de tipul: :values.',
    'min'                  => [
        'numeric' => ':attribute nu poate fi mai mic de :min.',
        'file'    => ':attribute trebuie să aibă cel puțin :min kiloocteți.',
        'string'  => ':attribute trebuie să aibă cel puțin :min caractere.',
        'array'   => ':attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'not_in'               => ':attribute selectat nu este valid.',
    'not_regex'            => ':attribute nu are un format valid.',
    'numeric'              => ':attribute trebuie să fie un număr.',
    'present'              => ':attribute trebuie să fie prezent.',
    'regex'                => ':attribute nu are un format valid.',
    'required'             => ':attribute este obligatoriu.',
    'required_if'          => ':attribute este necesar când :other este :value.',
    'required_unless'      => ':attribute este necesar, cu excepția cazului :other este in :values.',
    'required_with'        => ':attribute este necesar când există :values.',
    'required_with_all'    => ':attribute este necesar când există :values.',
    'required_without'     => ':attribute este necesar când nu există :values.',
    'required_without_all' => ':attribute este necesar când niciunul(una) dintre :values nu există.',
    'same'                 => ':attribute și :other trebuie să fie identice.',
    'size'                 => [
        'numeric' => ':attribute trebuie să fie :size.',
        'file'    => ':attribute trebuie să aibă :size kiloocteți.',
        'string'  => ':attribute trebuie să aibă :size caractere.',
        'array'   => ':attribute trebuie să aibă :size elemente.',
    ],
    'starts_with'          => ':attribute trebuie să înceapă cu una din următoarele: :values',
    'string'               => ':attribute trebuie să fie string.',
    'timezone'             => ':attribute trebuie să fie un fus orar valid.',
    'unique'               => ':attribute a fost deja folosit.',
    'uploaded'             => ':attribute nu a reușit încărcarea.',
    'url'                  => ':attribute nu este un URL valid.',
    'uuid'                 => ':attribute trebuie să fie un cod UUID valid.',


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
        'name'                  => 'Numele complet',
        'username'              => 'Utilizator',
        'email'                 => 'Adresă e-mail',
        'first_name'            => 'Prenume',
        'last_name'             => 'Numele de familie',
        'password'              => 'Parolă',
        'password_confirmation' => 'Confirmare parolă',
        'city'                  => 'Oraș',
        'country'               => 'Țară',
        'address'               => 'Adresă',
        'phone'                 => 'Telefon fix',
        'mobile'                => 'Telefon mobil',
        'age'                   => 'Vârsta',
        'sex'                   => 'Sexul',
        'gender'                => 'Genul',
        'day'                   => 'Zi',
        'month'                 => 'Lună',
        'year'                  => 'An',
        'hour'                  => 'Oră',
        'minute'                => 'Minut',
        'second'                => 'Secundă',
        'title'                 => 'Titlu',
        'content'               => 'Conținut',
        'description'           => 'Descriere',
        'excerpt'               => 'Extras',
        'date'                  => 'Dată',
        'time'                  => 'Timp',
        'available'             => 'disponibil',
        'size'                  => 'Mărime',
    ],

];
