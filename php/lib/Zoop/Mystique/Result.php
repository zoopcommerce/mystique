<?php
/**
 * @link       http://zoopcommerce.github.io/mystique
 * @package    mystique
 * @license    MIT
 */
namespace Zoop\Mystique;

/**
 *
 * @since   1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Result
{

    protected $value;

    protected $messages = [];

    public function setValue($value) {
        $this->value = (boolean) $value;
    }

    public function getValue() {
        return $this->value;
    }

    public function addMessage($message){
        $this->messages[] = $message;
    }

    public function setMessages(array $messages) {
        $this->messages = $messages;
    }

    public function getMessages() {

        $translated = [];

        foreach ($this->messages as $message){
            if (is_string($message)){
                if (isset($this->translations[$message])){
                    $translated[] = $this->translations[$message];
                } else {
                    $translated[] = $message;
                }
            } else {
                $template = $message;
                if ($this->translations[$template[0]]){
                    $template[0] = $this->translations[$template[0]];
                }
                for ($i = 1; $i < count($template); $i++){
                    $template[0] = str_replace('${' . $i . '}', $template[$i], $template[0]);
                }
                $translated[] = $template[0];
            }
        }
        return $translated;
    }

    public function __construct(array $options = []){
        if (isset($options['value'])){
            $this->setValue($options['value']);
        }
        if (isset($options['messages'])){
            $this->messages = $options['messages'];
        }
        $this->translations = json_decode(file_get_contents(__DIR__ . '/../../../../common/translations/messages.json'), true);
    }
}
