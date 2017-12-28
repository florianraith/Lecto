<?php

namespace App\Lecto;

class MessageColor {

    private static $values = [];

    const BLUE = 0;
    const GRAY = 1;
    const GREEN = 2;
    const RED = 3;
    const YELLOW = 4;
    const CYAN = 5;
    const WHITE = 6;
    const BLACK = 7;

    private $id;
    private $name;
    private $bSuffix;
    private $bTextSuffix;

    public function __construct(int $id, string $name, string $bSuffix, string $bTextSuffix) {
        $this->name = $name;
        $this->id = $id;
        $this->bSuffix = $bSuffix;
        $this->bTextSuffix = $bTextSuffix;
    }

    /**
     * initializes enum values
     */
    private static function initialize() {
        array_push(MessageColor::$values, new MessageColor(MessageColor::BLUE, 'blue', 'primary', 'light'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::GRAY, 'gray', 'secondary', 'light'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::GREEN, 'green', 'success', 'light'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::RED, 'red', 'danger', 'light'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::YELLOW, 'yellow', 'warning', 'dark'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::CYAN, 'cyan', 'info', 'light'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::WHITE, 'white', 'light', 'dark'));
        array_push(MessageColor::$values, new MessageColor(MessageColor::BLACK, 'black', 'dark', 'light'));
    }

    /**
     * Get the message-color id.
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Get the message-color name.
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Get the bootstrap suffix corresponding to the color.
     * @return string
     */
    public function getBSuffix(): string {
        return $this->bSuffix;
    }

    /**
     * Get the bootstrap suffix for the text corresponding to the color.
     * @return string
     */
    public function getBTextSuffix(): string {
        return $this->bTextSuffix;
    }

    /**
     * Get all message colors.
     * @return array
     */
    public static function getValues(): array {
        if(count(MessageColor::$values) == 0) self::initialize();
        return self::$values;
    }

    /**
     * Get the message color that belongs to the ID.
     * If the ID could not be found, blue is returned as the default message color.
     *
     * @param int $id
     * @return MessageColor
     */
    public static function of(int $id): MessageColor {
        if(count(MessageColor::$values) == 0) self::initialize();
        if($id > count(MessageColor::$values)) return MessageColor::$values[0];
        return MessageColor::$values[$id];
    }


}