<?php

/** масштабирует с сохранением пропорций, размер ограничивается $arSize, улучшенная обработка вертикальных картинок */
define('BX_RESIZE_IMAGE_PROPORTIONAL_ALT', 0);

/** масштабирует с сохранением пропорций, размер ограничивается $arSize */
define('BX_RESIZE_IMAGE_PROPORTIONAL', 1);

/** масштабирует в прямоугольник $arSize без сохранения пропорций */
define('BX_RESIZE_IMAGE_EXACT', 2);

/**
 * Класс для работы с файлами и изображениями.
 * Аналог класса в новом ядре D7 - Bitrix\Main\FileTable.
 */
class CFile
{
    /**
     * Метод возвращает информацию по одному зарегистрированному файлу в виде объекта класса CDBResult.
     * @param $file_id Цифровой идентификатор файла.
     * @return CDBResult
     */
    public static function GetByID(int $file_id): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Метод возвращает отфильтрованную и отсортированную выборку зарегистрированных файлов в виде объекта класса CDBResult.
     * @param $arOrder Массив, содержащий признак сортировки в виде пар "поле"=>"направление". Поддерживаются следующие поля: ID, TIMESTAMP_X, MODULE_ID, HEIGHT, WIDTH, FILE_SIZE, CONTENT_TYPE, SUBDIR, FILE_NAME, ORIGINAL_NAME. Направление сортировки может принимать значения "ASC", "DESC". Если параметр пуст, то выборка будет отсортирована по полю ID по возрастанию.
     * @param $arFilter Массив, содержащий фильтр в виде пар "поле"=>"значение". Поддерживаются следующие поля фильтра: MODULE_ID, ID, SUBDIR, FILE_NAME, ORIGINAL_NAME, CONTENT_TYPE. Если указать в начале поля символ @, то можно передать несколько значений через запятую (применяется оператор IN), например: "@ID"=>"1,2,3,4,5".
     * @return CDBResult
     */
    public static function GetList($arOrder = [], $arFilter = []): CDBResult
    {
        return new CDBResult;
    }

    /**
     * Метод возвращает путь от корня сайта к зарегистрированному файлу. Возвращает NULL, если файл не зарегистрирован.
     * @param $file_id Цифровой идентификатор файла.
     * @return string|null
     */
    public static function GetPath(int $file_id): string
    {
        return '';
    }

    /**
     * Метод возвращает HTML для показа изображения.
     * @param mixed $image ID файла или путь к файлу на текущем сайте либо URL к файлу лежащем на другом сайте. Если задается путь к файлу на текущем сайте, то его необходимо задавать относительно корня.
     * @param int $MaxW Максимальная ширина изображения. Если ширина картинки больше max_width, то она будет пропорционально смаштабирована. По умолчанию - "0" - без ограничений.
     * @param int $MaxH Максимальная высота изображения. Если высота картинки больше max_height, то она будет пропорционально смаштабирована.
     * Необязательный. По умолчанию - "0" - без ограничений.
     * Если MaxW установлен в 0, то MaxH учитываться не будет. Чтобы ограничить высоту можно установить максимальную ширину в некое бо́льшее значение (например, 9999) вместо 0.
     * @param string $Params Произвольный HTML добавляемый в тэг IMG:
     * <img image_params ...>
     * Если в этом параметре передать атрибут alt="текст", то в теге <img> будет использовано это значение (с версии 8.5.1). Иначе, если картинка имеет описание в таблице b_file, для атрибута alt будет использовано это описание.
     * @param string $ImageUrl Ссылка для перехода при нажатии на картинку.
     * @param bool $popup Открывать ли при клике на изображении дополнительное popup окно с увеличенным изображением.
     * @param string|bool $PopupTitle Текст всплывающей подсказки на изображении (только если popup = true)
     * @param int $SizeWHTTP Ширина изображения (в пикселах) (только если в параметре image задан URL начинающийся с "http://")
     * @param int $iSizeHHTTP Высота изображения (в пикселах) (только если в параметре image задан URL начинающийся с "http://")
     * @param string $ImageUrlTemplate 
     * 
     */
    public static function ShowImage(
        $image,
        int $MaxW = 0,
        int $MaxH = 0,
        string $Params = "border=0",
        string $ImageUrl = "",
        bool $popup = false,
        $PopupTitle = false,
        int $SizeWHTTP = 0,
        int $iSizeHHTTP = 0,
        string $ImageUrlTemplate = ""
    ): string {
        return '';
    }

    /**
     * Метод возвращает HTML для показа изображения при клике на которое в отдельном popup-окне отображается другое изображение.
     * @param mixed $image1 ID файла или путь к файлу на текущем сайте либо URL к файлу лежащем на другом сайте. Если задается путь к файлу на текущем сайте, то его необходимо задавать относительно корня. В данном параметре задается изображение для первоначального показа.
     * @param mixed $image2 ID файла или путь к файлу на текущем сайте либо URL к файлу лежащем на другом сайте. Если задается путь к файлу на текущем сайте, то его необходимо задавать относительно корня. В данном параметре задается изображение для показа в popup-окне.
     * @param int $max_width Максимальная ширина первоначального изображения. Если ширина картинки больше max_width, то она будет пропорционально смаштабирована.
     * @param int $max_height Максимальная высота первоначального изображения. Если высота картинки больше max_height, то она будет пропорционально смаштабирована.
     * @param string|bool $image_params Произвольный HTML добавляемый в тэг IMG первоначального изображения:
     * <img image_params ...>
     * @param string|bool $popup_alt Текст всплывающей подсказки на изображении.
     * Необязательный. По умолчанию выводится фраза "Нажмите чтобы увеличить" на языке страницы.
     * @param int $image_width Ширина изображения (в пикселах) (только если в параметре image задан URL начинающийся с "http://")
     * @param int $image_height Высота изображения (в пикселах) (только если в параметре image задан URL начинающийся с "http://")
     * 
     */
    public static function Show2Images(
        $image1,
        $image2,
        int $max_width = 0,
        int $max_height = 0,
        $image_params = "false",
        $popup_alt = false,
        int $image_width = 0,
        int $image_height = 0
    ): string {
        return '';
    }

    /**
     * Метод проверяет размер, расширение и mime тип файла. В случае ошибки метод вернет строку с текстом ошибки.
     *
     * @param array $file Массив с данными файла
     * @param integer $max_size Максимальный размер файла (байт).
     * @param string|bool $mime_types Разрешенный mime тип файла (например, "image/"). Проверка осуществляется по данным полученным от посетителя, поэтому для более безопасной проверки используйте extensions.
     * @param string|bool $Ext Перечисленные через запятую разрешенные расширения файла.
     * Расширения файла следует указывать без точки, например не .pdf, а pdf. Для сверки допустимых расширений и текущего расширения загруженного файла, текущее расширение получают методом CFile::GetFileExtension, который возвращает расширение без точки.
     * @param boolean $ForceMD5 Необязательный. По умолчанию - "false".
     * @param boolean $SkipExt Необязательный. По умолчанию - "false".
     * @return string
     */
    public static function CheckFile(
        array $file,
        int $max_size = 0,
        $mime_types = false,
        $Ext = false,
        bool $ForceMD5 = false,
        bool $SkipExt = false
    ): string {
        return '';
    }

    /**
     * Метод проверяет что файл является картинкой и проверяет ее параметры. В случае ошибки метод вернет строку с текстом ошибки.
     *
     * @param array $file Массив с данными файла
     * @param integer $max_size Максимальный размер файла (байт).
     * @param integer $max_width Максимальная ширина картинки (пикселей).
     * @param integer $intmax_height Максимальная высота картинки (пикселей).
     * @param array $access_typies Массив символьных идентификаторов типов файлов; допустимые следующие идентификаторы:
     * IMAGE - изображение;
     * FLASH - flash файл.
     * По умолчанию - пустой массив (допустимы только файлы типа IMAGE).
     * @param boolean $ForceMD5 Необязательный. По умолчанию - "false".
     * @param boolean $SkipExt Необязательный. По умолчанию - "false".
     * @return string
     */
    public static function CheckImageFile(
        array $file,
        int $max_size = 0,
        int $max_width = 0,
        int $intmax_height = 0,
        array $access_typies = [],
        bool $ForceMD5 = false,
        bool $SkipExt = false
    ): string {
        return '';
    }

    /**
     * Метод проверяет расширение и заданный MIME тип файла. Если расширение и MIME тип файла соответствуют изображению, то возвращает "true", иначе "false".
     *
     * @param string $file_name Краткое имя файла (без пути).
     * @param mixed $mime_type MIME тип файла (например, "image/"). По умолчанию - "false" - проверку на MIME тип не делать.
     * @return bool
     */
    public static function IsImage(string $file_name, $mime_type = false): bool
    {
        return false;
    }

    /**
     * Метод формирует массив описывающий файл. Структура массива аналогична структуре массива $_FILES[имя] (или $HTTP_POST_FILES[имя]). Данный массив может быть использован в методах SaveFile, CheckFile, CheckImageFile. Структура возвращаемого массива:
     * Array(
     *     "name" => "название файла",
     *     "size" => "размер",
     *     "tmp_name" => "временный путь на сервере",
     *     "type" => "тип загружаемого файла")
     *
     * @param mixed $path одно из значений:
     * ID файла
     * абсолютный путь к файлу
     * URL к файлу лежащем на другом сайте.
     * @param mixed $mime_type MIME тип файла (например, "image/gif"). По умолчанию - "false" - MIME тип файла будет определён автоматически.
     * @param boolean $skipInternal Необязательный. По умолчанию - "false".
     * @param string $external_id Внешний идентификатор.
     * @return array
     */
    public static function MakeFileArray(
        $path,
        $mime_type = false,
        $skipInternal = false,
        string $external_id = ""
    ): array {
        return [];
    }

    /**
     * Метод возвращает HTML код предназначенный для загрузки нового, либо замены существующего файла.
     *
     * @param string $FieldName Название поля для ввода файла:
     * <input type="file" name="input_file_name" ... >
     * @param integer $field_size Ширина поля для ввода файла:
     * <input type="file" size="input_file_width" ... >
     * @param integer $ImageID Цифровой идентификатор существующего файла.
     * @param string|bool $ImageStorePath Путь к папке от корня сайта в которой хранятся файлы. Например: "/upload/iblock/". По умолочанию false - путь берется из настроек системы.
     * @param integer $file_max_size Максимальный размер файла (байт):
     * <input type="hidden" name="MAX_FILE_SIZE" value="file_max_size">
     * @param string $FileType Тип файла, если "IMAGE", то в информацию по файлу будет добавлена ширина и высота изображения.
     * @param string $field_file Произвольный HTML который будет добавлен в поле для ввода файла:
     * <input type="file" add_to_input_file ... > 
     * @param integer $description_size Ширина поля ввода для комментария к файлу:
     * <input type="text" size="input_description_width" ... >
     * @param string $field_text Произвольный HTML который будет добавлен в поле ввода для комментария к файлу:
     * <input type="text" add_to_input_description ... >
     * @param string $field_checkbox Произвольный HTML который будет добавлен в поле типа "checkbox" для удаления файла:
     * <input type="checkbox" name="input_file_name_del" value="Y" add_to_checkbox_delete ... >
     * @param boolean $ShowNotes Флаг позволяющий включить, либо отключить показ информации по файлу (размер, ширину, высоту).
     * @param boolean $ShowFilePath Флаг позволяющий включить, либо отключить показ пути к файлу.
     * @return string
     */
    public static function InputFile(
        string $FieldName,
        int $field_size,
        int $ImageID,
        $ImageStorePath = false,
        int $file_max_size = 0,
        string $FileType = "IMAGE",
        string $field_file = "class=typefile",
        int $description_size = 0,
        string $field_text = "class=typeinput",
        string $field_checkbox = "",
        bool $ShowNotes = true,
        bool $ShowFilePath = true
    ): string {
        return '';
    }

    /**
     * Метод сохраняет файл и регистрирует его в таблице файлов (b_file).
     *
     * @param array $file Массив с данными файла
     * @param string $save_path Путь к папке в которой хранятся файлы (относительно папки /upload). 
     * @param boolean $ForceMD5 Необязательный. По умолчанию false.
     * @param boolean $SkipExt Необязательный. По умолчанию false.
     * @return mixed
     */
    public static function SaveFile(
        array $file,
        string $save_path,
        bool $ForceMD5 = false,
        bool $SkipExt = false
    ) { }

    /**
     * Метод предназначена для подготовки данных перед вставкой/обновлением записи в БД, содержащей ссылку на файл. Метод сохраняет файл на диск и возвращает во входном массиве ID сохраненного файла для последующей вставки/обновления записи в БД.
     *
     * @param array $Fields Массив значений полей в формате "имя поля1"=>"значение1", "имя поля2"=>"значение2" [, ...].
     * При вставке файла, привязанного к записи, "значение" должно быть представлено в виде массива
     * Array(
     * "name" => "название файла",
     * "size" => "размер",
     * "tmp_name" => "временный путь на сервере",
     * "type" => "тип загружаемого файла",
     * "del" => "флажок, удалить ли существующий файл (непустая строка)",
     * "MODULE_ID" => "название модуля");
     * 
     * Массив такого вида может быть получен, например, объединением массивов $HTTP_POST_FILES[имя поля] и Array("del" => ${"имя поля"."_del"}, "MODULE_ID" = "название модуля"); 
     * @param string $field Название поля в массиве arFields, где содержится файл.
     * @param string $SavePath Имя папки (будет находится внутри папки upload) для хранения файлов.
     * @return boolean
     */
    public static function SaveForDB(
        array &$Fields,
        string $field,
        string $SavePath
    ): bool {
        return false;
    }

    /**
     * Метод обновляет описание к зарегистрированному файлу.
     *
     * @param integer $file_id Цифровой идентификатор файла
     * @param string $description Новое описание к файлу.
     * @return CDBResult
     */
    public static function UpdateDesc(
        int $file_id,
        string $description
    ): CDBResult {
        return new CDBResult;
    }

    /**
     * Метод копирует зарегистрированный файл и возвращает ID нового файла копии.
     *
     * @param integer $file_id Цифровой идентификатор файла предназначенного для копирования.
     * @param boolean $Register Если в Register указать false, то файл не будет зарегистрирован в таблице файлов. Функция вернет true, если файл будет успешно скопирован.
     * @param string $newPath Указывается относительно $_SERVER['DOCUMENT_ROOT'].'/upload/'
     * @return boolean
     */
    public static function CopyFile(
        int $file_id,
        bool $Register = true,
        $newPath = ""
    ): bool {
        return false;
    }

    /**
     * Метод удаляет файл из таблицы зарегистрированных файлов (b_file) и с диска.
     *
     * @param integer $id Цифровой идентификатор файла.
     * @return void
     */
    public static function Delete(
        int $id
    ) { }

    /**
     * Метод переводит байты в Килобайты, Мегабайты, Гигабайты и т.д. с учетом языка, установленного в текущем сайте.
     *
     * @param int $size Размер файла в байтах
     * @param int $precision Порядок округления. По умолчанию - 2.
     * @return string
     */
    public static function FormatSize(
        $size,
        $precision
    ): string {
        return '';
    }

    /**
     * Метод возвращает массив описывающий файл с заданным идентификатором или false, если файла с таким идентификатором не существует. Удобно когда нужно получить одним методом и имя файла, и путь к нему на сервере.
     *
     * @param integer $FILE_ID Идентификатор файла.
     * @param string|bool $upload_dir Директория для загрузки.
     * @return mixed
     */
    public static function GetFileArray(
        int $FILE_ID,
        $upload_dir = false
    ) { }

    /**
     * Метод производит изменение размера графического файла.
     *
     * @param string $sourceFile Путь к исходному файлу
     * @param string $destinationFile Путь к файлу - результату обработки. Если исходный файл в формате BMP, то файл будет переконвертирован в JPEG и в destinationFile вернется модифицированное имя.
     * @param array $arSize Массив вида array("width" => $width, "height" => $height)); оба ключа обязательны.
     * @param BX_RESIZE_IMAGE_PROPORTIONAL_ALT|BX_RESIZE_IMAGE_PROPORTIONAL|BX_RESIZE_IMAGE_EXACT $resizeType тип масштабирования
     * @param array|null $arWaterMark массив с параметрами водяного знака
     * @param int|bool $jpgQuality Величина JPG-сжатия. Необязательный. По умолчанию false, что равно 95% качества изображения. Если необходимо полное качество, передавайте параметр "100".
     * @param array|bool $arFilters Массив параметров фильтра.
     * @return boolean
     */
    public static function ResizeImageFile(
        string $sourceFile,
        string &$destinationFile,
        array $arSize,
        $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL,
        ? array $arWaterMark = array(),
        $jpgQuality = false,
        $arFilters = false
    ): bool {
        return false;
    }

    /**
     * Метод уменьшает картинку и размещает уменьшенную копию в папку /upload/resize_cache/путь. Один раз уменьшив изображение получаем физический файл, который позволяет при последующих обращениях не проводить операции по уменьшению изображения. При следующем вызове метод вернет путь к уменьшенному файлу.
     *
     * @param mixed $file Идентификатор файла из таблицы b_file или массив описания файла (Array(FILE_NAME, SUBDIR, WIDTH, HEIGHT, CONTENT_TYPE)), полученный методом GetFileArray.
     * @param array $arSize Массив в виде Array("width"=>WIDTH, "height"=>HEIGHT) со значениями ширины и высоты для уменьшаемой картинки. Оба ключа обязательны.
     * @param BX_RESIZE_IMAGE_PROPORTIONAL_ALT|BX_RESIZE_IMAGE_PROPORTIONAL|BX_RESIZE_IMAGE_EXACT $resizeType Тип масштабирования
     * @param boolean $bInitSizes Флаг возвращения в результирующем массив размеров измененной картинки. True - возвращает, false - нет
     * @param array|bool $arFilters Массив массивов для постобработки картинки с помощью фильтров: array(array("name" => "sharpen", "precision" => 15)). Фильтров пока один - sharpen. Задавать его не обязательно - будет инициализирован автоматом. Используется для наведения резкости у миниатюр.
     * @param boolean $bImmediate Флаг передается в обработчик события OnBeforeResizeImage, по смыслу означает масштабирование непосредственно при вызове метода. Обработчик в принципе может выполнять отложенное масштабирование.
     * @param int|bool $jpgQuality Число, устанавливающее в процентах качество JPG при масштабировании. Чем больше значение, тем выше качество и больше размер файла изображения.
     * @return array Массив видa:
     * array(
     *     'src',  // путь к уменьшенной картинке относительно корня сайта.
     *     'width',  // Если bInitSizes = true ширина уменьшенной картинки, иначе 0.
     *     'height',  // Если bInitSizes = true высота уменьшенной картинки, иначе 0.
     * )
     */
    public static function ResizeImageGet(
        $file,
        array $arSize,
        $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL,
        bool $bInitSizes = false,
        $arFilters = false,
        bool $bImmediate = false,
        $jpgQuality = false
    ): array {
        return [];
    }

    /**
     * Метод является оберткой ResizeImageFile. Изменяет размеры графического файла.
     *
     * @param array $File массив файла
     * @param array $Size Массив вида array("width" => $width, "height" => $height)); оба ключа обязательны
     * @param [type] $resizeType тип масштабирования
     * @return boolean
     */
    public static function ResizeImage(
        array $File,
        array $Size,
        $resizeType = BX_RESIZE_IMAGE_PROPORTIONAL
    ): bool {
        return false;
    }
}
