<?php
/**
 * Created by PhpStorm.
 * User: stosdima
 * Date: 06.12.17
 * Time: 19:38
 */
abstract class Logger
{
    const DEBUG = 1;
    const CRITICAL = 2;
    const NOTICE = 4;
    protected $mask = 0;
    /**
     * @var Logger
     */
    protected $next;
    /**
     * @param $mask
     */
    public function __construct($mask)
    {
        $this->mask = $mask;
    }
    /**
     * @param string $message
     * @param int $priority
     */
    public function message($message, $priority)
    {
        if ($this->mask & $priority) {
            $this->_writeMessage($message);
        }
        if ($this->getNext()) {
            $this->getNext()->message($message, $priority);
        }
    }
    abstract protected function _writeMessage($message);
    /**
     * @param Logger $next
     */
    public function setNext(Logger $next)
    {
        $this->next = $next;
    }
    /**
     * @return Logger
     */
    public function getNext()
    {
        return $this->next;
    }
}

class ConsoleLogger extends Logger
{
    protected function _writeMessage($message)
    {
        echo $message . PHP_EOL;
    }
}

class FileLogger extends Logger
{
    protected function _writeMessage($message)
    {
        $f = fopen("error.log", "a");
        fwrite($f, $message . PHP_EOL);
        fclose($f);
    }
}

class EmailLogger extends Logger
{
    protected function _writeMessage($message)
    {
        mail("stosdima@gmail.com", "error", $message);
    }
}

$logger = new ConsoleLogger(Logger::NOTICE);
$file = new FileLogger(Logger::CRITICAL | Logger::DEBUG | Logger::NOTICE);
$mail = new EmailLogger(Logger::CRITICAL);
$logger->setNext($file);
$file->setNext($mail);
$logger->message("Notice message", Logger::NOTICE);
$logger->message("Debug message", Logger::DEBUG);
$logger->message("Critical error", Logger::CRITICAL);