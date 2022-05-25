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

    'accepted' => 'Atribút :attribute musí byť akceptovaný.',
    'accepted_if' => 'Atribút :attribute musí byť akceptovaný keď :other je :value.',
    'active_url' => 'Atribút :attribute nie je platná URL adresa.',
    'after' => 'Atribút :attribute musí byť dátum neskorší ako :date.',
    'after_or_equal' => 'Atribút :attribute musí byť dátum neskorší alebo rovný dátumu :date.',
    'alpha' => 'Atribút :attribute môže obsahovať iba písmená.',
    'alpha_dash' => 'Atribút :attribute môže obsahovať iba písmená, číslice, pomlčky a podtržníky.',
    'alpha_num' => 'Atribút :attribute môže obsahovať iba písmená a číslice.',
    'array' => 'Atribút :attribute musí byť pole.',
    'before' => 'Atribút :attribute musí byť dátum skorší ako :date.',
    'before_or_equal' => 'Atribút :attribute musí byť dátum skorší alebo rovný ako dátum :date.',
    'between' => [
        'array' => 'Atribút :attribute musí byť v rozmedzí od :min do :max položiek.',
        'file' => 'Atribút :attribute musí mať veľkosť od :min do :max kilobytov.',
        'numeric' => 'Atribút :attribute musí byť v rozmedzí od :min do :max.',
        'string' => 'Atribút :attribute musí obsahovať od :min do :max znakov.',
    ],
    'boolean' => 'Atribút :attribute môže obsahovať iba hodnoty pravda alebo nepravda.',
    'confirmed' => 'Potbrdenie atribútu :attribute sa nezhodujú.',
    'current_password' => 'Heslo je nesprávne.',
    'date' => 'Atribút :attribute nie je platný dátum.',
    'date_equals' => 'Atribút :attribute msuí byť dátum rovný dátumu :date.',
    'date_format' => 'Atribút :attribute nemá formát :format.',
    'declined' => 'Atribút :attribute musí byť zamietnutý.',
    'declined_if' => 'Atribút :attribute musí byť zamietnutý keď :other je :value.',
    'different' => 'Atribút :attribute a :other musia byť rozdielne.',
    'digits' => 'Atribút :attribute musí mať :digits číslic.',
    'digits_between' => 'Atribút :attribute musí byť v rozmedzí id :min do :max číslic.',
    'dimensions' => 'Atribút :attribute má neplatné rozmery obrázka.',
    'distinct' => 'Pole atribútu :attribute má duplicitnú hodnotu.',
    'email' => 'Atribút :attribute musí byť platná e-mailová adresa.',
    'ends_with' => 'Atribút :attribute sa musí končíť na jednu z nasledujúch hodnôt: :values.',
    'enum' => 'Zvolený atribút :attribute je neplatný.',
    'exists' => 'Zvolený atribút :attribute je neplatný.',
    'file' => 'Atribút :attribute musí byť súbor.',
    'filled' => 'Pole atribútu :attribute musí byť vyplnené.',
    'gt' => [
        'array' => 'Atribút :attribute musí mať viac ako :value položiek.',
        'file' => 'Atribút :attribute musí byť väčší ako :value kilobytov.',
        'numeric' => 'Atribút :attribute musí byť väčší ako :value.',
        'string' => 'Atribút :attribute musí byť dlhší ako :value znakov.',
    ],
    'gte' => [
        'array' => 'Atribút :attribute musí mať aspoň :value položiek.',
        'file' => 'Atribút :attribute musí mať aspoň :value kilobytov.',
        'numeric' => 'Atribút :attribute musí byť väčší alebo rovný ako :value.',
        'string' => 'Atribút :attribute musí mať aspoň :value znakov.',
    ],
    'image' => 'Atribút :attribute musí byť obrázok.',
    'in' => 'Zvolený atribút :attribute je neplatný.',
    'in_array' => 'Pole atribútu :attribute v :other neexistuje.',
    'integer' => 'Atribút :attribute musí byť celé číslo.',
    'ip' => 'Atribút :attribute musí byť platná IP adresa.',
    'ipv4' => 'Atribút :attribute musí byť platná IPv4 addresa.',
    'ipv6' => 'Atribút :attribute musí byť platná IPv6 addresa.',
    'json' => 'Atribút :attribute musí byť platný JSON reťazec.',
    'lt' => [
        'array' => 'Atribút :attribute musí mať menej ako :value položiek.',
        'file' => 'Atribút :attribute musí mať menej ako :value kilobytov.',
        'numeric' => 'Atribút :attribute musí byť menší ako :value.',
        'string' => 'Atribút :attribute musí mať menej ako :value znakov.',
    ],
    'lte' => [
        'array' => 'Atribút :attribute nemôže mať viac ako :value položiek.',
        'file' => 'Atribút :attribute nemôže mať viac ako :value kilobytov.',
        'numeric' => 'Atribút :attribute musí byť menší alebo rovný :value.',
        'string' => 'Atribút :attribute nemôže mať viac ako :value znakov.',
    ],
    'mac_address' => 'Atribút :attribute musí byť platná MAC addresa.',
    'max' => [
        'array' => 'Atribút :attribute nemôže mať via ako :max položiek.',
        'file' => 'Atribút :attribute nemôže byť väčší ako :max kilobytov.',
        'numeric' => 'Atribút :attribute nemôže byť väčší ako :max.',
        'string' => 'Atribút :attribute nemôže byť dlhší ako :max zankov.',
    ],
    'mimes' => 'Atribút :attribute musí byť súbor typu: :values.',
    'mimetypes' => 'Atribút :attribute musí byť súbor typu: :values.',
    'min' => [
        'array' => 'Atribút :attribute musí mať aspoň :min položiek.',
        'file' => 'Atribút :attribute musí mať asponň :min kilobytov.',
        'numeric' => 'Atribút :attribute musí byť aspoň :min.',
        'string' => 'Atribút :attribute mussí mať asponň :min znakov.',
    ],
    'multiple_of' => 'Atribút :attribute musí obsahovať viacero hodnôt :value.',
    'not_in' => 'Zvolený atribút :attribute je neplatný.',
    'not_regex' => 'Formát atribútu :attribute je neplatný.',
    'numeric' => 'Atribút :attribute musí byť číslo.',
    'password' => [
        'mixed' => 'Atribút :attribute musí obsahovať aspoň jedno veľké a jedno malé písmeno.',
        'letters' => 'Atribút :attribute musí obsahovať aspoň jedno písmeno.',
        'symbols' => 'Atribút :attribute musí obsahovať aspoň jeden špeciálny znak.',
        'numbers' => 'Atribút :attribute musí obsahovať aspoň jednu číslicu.',
        'uncompromised' => 'Zadaný atribút :attribute sa objavil v uniknutých dátach. Prosím, zvoľte si inú hodnotu pre atribút :attribute.',
    ],
    'present' => 'Pole atribútu :attribute musí byť atuálne.',
    'prohibited' => 'Pole atribútu :attribute je zakázané.',
    'prohibited_if' => 'Pole atribútu :attribute je zakázané ak :other je :value.',
    'prohibited_unless' => 'Pole atribútu :attribute je zakázané pokým :other je v :values.',
    'prohibits' => 'Pole atribútu :attribute zakazuje :other byť aktuálne.',
    'regex' => 'Atribút :attribute má neplatný formát.',
    'required' => 'Pole atribútu :attribute je povinné vyplniť.',
    'required_array_keys' => 'Pole atribútu :attribute musí obsahovať záznamy pre: :values.',
    'required_if' => 'Pole atribútu :attribute je povinné vyplniť keď :other je :value.',
    'required_unless' => 'Pole atribútu :attribute je povinné vyplniť pokým :other je v :values.',
    'required_with' => 'Pole atribútu :attribute je povinné vyplniť keď :values je aktuálna.',
    'required_with_all' => 'Pole atribútu :attribute je povinné vyplniť keď :values sú aktuálne.',
    'required_without' => 'Pole atribútu :attribute je povinné vyplniť keď :values nie je aktuálna.',
    'required_without_all' => 'Pole atribútu :attribute je povinné vyplniť keď žiadne z :values nie sú aktuálne.',
    'same' => 'Atribút :attribute a :other sa musia zhodovať.',
    'size' => [
        'array' => 'Atribút :attribute musí obsahovať :size položiek.',
        'file' => 'Atribút :attribute musí mať :size kilobytov.',
        'numeric' => 'Atribút :attribute musí mať :size.',
        'string' => 'Atribút :attribute musí mať :size znakov.',
    ],
    'starts_with' => 'Atribút :attribute sa musí začínať na jednu z hodnôt: :values.',
    'string' => 'Atribút :attribute musí byť reťazec znakov.',
    'timezone' => 'Atribút :attribute musí byť platné časové pásmo.',
    'unique' => 'Atribút :attribute už je použitý.',
    'uploaded' => 'Atribút :attribute sa nepodarilo nahrať.',
    'url' => 'Atribút :attribute musí byť platná URL adresa.',
    'uuid' => 'Atribút :attribute musí byť platná UUID.',

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

    'attributes' => [],

];
