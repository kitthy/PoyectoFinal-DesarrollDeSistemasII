<? php

volver [
    / *
    | ------------------------------------------------- -------------------------
    El | Líneas de lenguaje de validación
    | ------------------------------------------------- -------------------------
    El |
    El | Las siguientes líneas de idioma contienen los mensajes de error predeterminados utilizados por
    El | La clase de validador. Algunas de estas reglas tienen múltiples versiones como
    El | Como las reglas de tamaño. Siéntase libre de modificar cada uno de estos mensajes.
    El |
    * /

    ' accept '         => ': atributo debe ser aceptado.' ,
    'active_url'       => ': atributo no es una URL válida.' ,
    'after'            => ': atributo debe ser una fecha posterior a: fecha.' ,
    'after_or_equal'   => ': el atributo debe ser una fecha posterior o igual a: fecha.' ,
    'alpha'            => ': atributo solo debe contener letras.' ,
    'alpha_dash'       => ': atributo solo debe contener letras, números, guiones y guiones bajos.' ,
    'alpha_num'        => ': atributo solo debe contener letras y números.' ,
    'array'            => ': atributo debe ser un conjunto.' ,
    'before'           => ': atributo debe ser una fecha anterior a: fecha.' ,
    'before_or_equal' => ': atributo debe ser una fecha anterior o igual a: fecha.' ,
    'entre'          => [
        'numeric' => ': atributo tiene que estar entre: min -: max.' ,
        'file'     => ': atributo debe pesar entre: min -: kilobytes max.' ,
        'string'   => ': el atributo tiene que tener entre: min -: max caracteres.' ,
        'array'    => ': atributo tiene que tener entre: min -: max elementos.' ,
    ],
    'boolean'         => 'El campo: atributo debe tener un valor verdadero o falso'. ,
    'confirm'       => 'La confirmación de: atributo no coincide'. ,
    'date'            => ': atributo no es una fecha válida.' ,
    'date_equals'     => ': atributo debe ser una fecha igual a: fecha.' ,
    'date_format'     => ': atributo no corresponde al formato: formato.' ,
    'different'       => ': atributo y: otros deben ser diferentes.' ,
    'digits'          => ': atributo debe tener: dígitos dígitos.' ,
    'digits_between' => ': atributo debe tener entre: min y: max dígitos.' ,
    'dimensions'      => 'Las dimensiones de la imagen: atributo no son válidas.' ,
    'distinct'        => 'El campo: atributo contiene un valor duplicado'. ,
    'email'           => ': atributo no es un correo válido.' ,
    'ends_with'       => 'El campo: atributo debe finalizar con uno de los siguientes valores:: valores' ,
    'existe'          => ': atributo es inválido.' ,
    'file'            => 'El campo: atributo debe ser un archivo.' ,
    'filled'          => 'El campo: atributo es obligatorio.' ,
    'gt'              => [
        'numeric' => 'El campo: atributo debe ser mayor que: valor'. ,
        'file'     => 'El campo: atributo debe tener más de: valor kilobytes'. ,
        'string'   => 'El campo: atributo debe tener más de: valor caracteres.' ,
        'array'    => 'El campo: atributo debe tener más de: elementos de valor.' ,
    ],
    'gte' => [
        'numeric' => 'El campo: atributo debe ser como mínimo: valor'. ,
        'file'     => 'El campo: atributo debe tener como mínimo: valor kilobytes'. ,
        'string'   => 'El campo: atributo debe tener como mínimo: valor caracteres.' ,
        'array'    => 'El campo: atributo debe tener como mínimo: valor elementos.' ,
    ],
    'image'     => ': atributo debe ser una imagen.' ,
    'in'        => ': atributo es inválido.' ,
    'in_array' => 'El campo: atributo no existe en: otro.' ,
    'integer'   => ': atributo debe ser un número entero.' ,
    'ip'        => ': atributo debe ser una dirección IP válida.' ,
    'ipv4'      => ': atributo debe ser una dirección IPv4 válida.' ,
    'ipv6'      => ': atributo debe ser una dirección IPv6 válida.' ,
    'json'      => 'El campo: atributo debe ser una cadena JSON válida.' ,
    'lt'        => [
        'numeric' => 'El campo: atributo debe ser menor que: valor'. ,
        'file'     => 'El campo: atributo debe tener menos de: valor kilobytes'. ,
        'string'   => 'El campo: atributo debe tener menos de: valor caracteres.' ,
        'array'    => 'El campo: atributo debe tener menos de: valor elementos.' ,
    ],
    'lte' => [
        'numeric' => 'El campo: atributo debe ser como máximo: valor'. ,
        'file'     => 'El campo: atributo debe tener como máximo: valor kilobytes'. ,
        'string'   => 'El campo: atributo debe tener como máximo: valor caracteres.' ,
        'array'    => 'El campo: atributo debe tener como máximo: valor elementos.' ,
    ],
    'max' => [
        'numeric' => ': atributo no debe ser mayor que: max.' ,
        'file'     => ': atributo no debe ser mayor que: max kilobytes'. ,
        'string'   => ': atributo no debe ser mayor que: max caracteres.' ,
        'array'    => ': atributo no debe tener más de: max elementos.' ,
    ],
    'mimes'      => ': el atributo debe ser un archivo con formato:: valores'. ,
    'mimetypes' => ': atributo debe ser un archivo con formato:: valores.' ,
    'min'        => [
        'numeric' => 'El tamaño de: atributo debe ser de al menos: min.' ,
        'file'     => 'El tamaño de: atributo debe ser de al menos: min kilobytes'. ,
        'string'   => ': atributo debe contener al menos: min caracteres.' ,
        'array'    => ': atributo debe tener al menos: min elementos.' ,
    ],
    'not_in'                => ': atributo es inválido.' ,
    'not_regex'             => 'El formato del campo: atributo no es válido.' ,
    'numeric'               => ': atributo debe ser numérico.' ,
    'password'              => 'La contraseña es incorrecta.' ,
    'present'               => 'El campo: atributo debe estar presente.' ,
    'regex'                 => 'El formato de: atributo es inválido.' ,
    'required'              => 'El campo: atributo es obligatorio.' ,
    'required_if'           => 'El campo: atributo es obligatorio cuando: otros es: valor'. ,
    'required_unless'       => 'El campo: atributo es obligatorio a menos que: otro esté en: valores.' ,
    'required_with'         => 'El campo: atributo es obligatorio cuando: valores está presente.' ,
    'required_with_all'     => 'El campo: atributo es obligatorio cuando: valores están presentes.' ,
    'required_without'      => 'El campo: atributo es obligatorio cuando: valores no está presente.' ,
    'required_without_all' => 'El campo: atributo es obligatorio cuando ninguno de: valores está presente.' ,
    'same'                  => ': atributo y: otros deben coincidir.' ,
    'size'                  => [
        'numeric' => 'El tamaño de: atributo debe ser: tamaño'. ,
        'file'     => 'El tamaño de: atributo debe ser: tamaño kilobytes'. ,
        'string'   => ': atributo debe contener: tamaño caracteres.' ,
        'array'    => ': atributo debe contener: tamaño elementos.' ,
    ],
    'comienza_con' => 'El campo: atributo debe comenzar con uno de los siguientes valores:: valores' ,
    'string'       => 'El campo: atributo debe ser una cadena de caracteres.' ,
    'timezone'     => 'El: atributo debe ser una zona válida.' ,
    'unique'       => 'El campo: atributo ya ha sido registrado.' ,
    'uploaded'     => 'Subir: atributo ha fallado.' ,
    'url'          => 'El formato: atributo es inválido.' ,
    'uuid'         => 'El campo: atributo debe ser un UUID válido.' ,

    / *
    | ------------------------------------------------- -------------------------
    El | Líneas de lenguaje de validación personalizada
    | ------------------------------------------------- -------------------------
    El |
    El | Aquí puede especificar mensajes de validación personalizados para atributos utilizando el
    El | convención "attribute.rule" para nombrar las líneas. Esto hace que sea rápido
    El | especifique una línea de idioma personalizada específica para una regla de atributo dada.
    El |
    * /

    'personalizado' => [
        'contraseña' => [
            'min' => 'La: atributo debe contener más de: min caracteres' ,
        ],
        'email' => [
            'unique' => 'El: atributo ya ha sido registrado.' ,
        ],
    ],

    / *
    | ------------------------------------------------- -------------------------
    El | Atributos de validación personalizados
    | ------------------------------------------------- -------------------------
    El |
    El | Las siguientes líneas de idioma se utilizan para intercambiar marcadores de posición de atributos
    El | con algo más fácil de leer, como la dirección de correo electrónico
    El | de "correo electrónico". Esto simplemente nos ayuda a hacer que los mensajes sean un poco más limpios.
    El |
    * /

    'atributos' => [
        'address'                => 'dirección' ,
        'age'                    => 'edad' ,
        'body'                   => 'contenido' ,
        'city'                   => 'ciudad' ,
        'content'                => 'contenido' ,
        'country'                => 'país' ,
        'date'                   => 'fecha' ,
        'day'                    => 'día' ,
        'description'            => 'descripción' ,
        'email'                  => 'correo electrónico' ,
        'extracto'                => 'extracto' ,
        'first_name'             => 'nombre' ,
        'gender'                 => 'género' ,
        'hora'                   => 'hora' ,
        'last_name'              => 'apellido' ,
        'message'                => 'mensaje' ,
        'minute'                 => 'minuto' ,
        'mobile'                 => 'móvil' ,
        'mes'                  => 'mes' ,
        'name'                   => 'nombre' ,
        'password'               => 'contraseña' ,
        'password_confirmation' => 'confirmación de la contraseña' ,
        'phone'                  => 'teléfono' ,
        'price'                  => 'precio' ,
        'second'                 => 'segundo' ,
        'sex'                    => 'sexo' ,
        'subject'                => 'asunto' ,
        'terms'                  => 'términos ' ,
        'time'                   => 'hora' ,
        'title'                  => 'título' ,
        'username'               => 'usuario' ,
        'year'                   => 'año' ,
        'fullname'               => 'nombre completo' ,
    ],
];