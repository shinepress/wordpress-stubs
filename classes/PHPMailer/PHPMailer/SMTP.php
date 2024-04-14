<?php

namespace PHPMailer\PHPMailer;

/**
 * PHPMailer RFC821 SMTP email transport class.
 * Implements RFC 821 SMTP commands and provides some utility methods for sending mail to an SMTP server.
 *
 * @author Chris Ryan
 * @author Marcus Bointon <phpmailer@synchromedia.co.uk>
 */
class SMTP
{
    /**
     * The PHPMailer SMTP version number.
     *
     * @var string
     */
    const VERSION = '6.8.1';
    /**
     * SMTP line break constant.
     *
     * @var string
     */
    const LE = "\r\n";
    /**
     * The SMTP port to use if one is not specified.
     *
     * @var int
     */
    const DEFAULT_PORT = 25;
    /**
     * The SMTPs port to use if one is not specified.
     *
     * @var int
     */
    const DEFAULT_SECURE_PORT = 465;
    /**
     * The maximum line length allowed by RFC 5321 section 4.5.3.1.6,
     * *excluding* a trailing CRLF break.
     *
     * @see https://tools.ietf.org/html/rfc5321#section-4.5.3.1.6
     *
     * @var int
     */
    const MAX_LINE_LENGTH = 998;
    /**
     * The maximum line length allowed for replies in RFC 5321 section 4.5.3.1.5,
     * *including* a trailing CRLF line break.
     *
     * @see https://tools.ietf.org/html/rfc5321#section-4.5.3.1.5
     *
     * @var int
     */
    const MAX_REPLY_LENGTH = 512;
    /**
     * Debug level for no output.
     *
     * @var int
     */
    const DEBUG_OFF = 0;
    /**
     * Debug level to show client -> server messages.
     *
     * @var int
     */
    const DEBUG_CLIENT = 1;
    /**
     * Debug level to show client -> server and server -> client messages.
     *
     * @var int
     */
    const DEBUG_SERVER = 2;
    /**
     * Debug level to show connection status, client -> server and server -> client messages.
     *
     * @var int
     */
    const DEBUG_CONNECTION = 3;
    /**
     * Debug level to show all messages.
     *
     * @var int
     */
    const DEBUG_LOWLEVEL = 4;
    /**
     * Debug output level.
     * Options:
     * * self::DEBUG_OFF (`0`) No debug output, default
     * * self::DEBUG_CLIENT (`1`) Client commands
     * * self::DEBUG_SERVER (`2`) Client commands and server responses
     * * self::DEBUG_CONNECTION (`3`) As DEBUG_SERVER plus connection status
     * * self::DEBUG_LOWLEVEL (`4`) Low-level data output, all messages.
     *
     * @var int
     */
    public $do_debug = self::DEBUG_OFF;
    /**
     * How to handle debug output.
     * Options:
     * * `echo` Output plain-text as-is, appropriate for CLI
     * * `html` Output escaped, line breaks converted to `<br>`, appropriate for browser output
     * * `error_log` Output to error log as configured in php.ini
     * Alternatively, you can provide a callable expecting two params: a message string and the debug level:
     *
     * ```php
     * $smtp->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";};
     * ```
     *
     * Alternatively, you can pass in an instance of a PSR-3 compatible logger, though only `debug`
     * level output is used:
     *
     * ```php
     * $mail->Debugoutput = new myPsr3Logger;
     * ```
     *
     * @var string|callable|\Psr\Log\LoggerInterface
     */
    public $Debugoutput = 'echo';
    /**
     * Whether to use VERP.
     *
     * @see http://en.wikipedia.org/wiki/Variable_envelope_return_path
     * @see http://www.postfix.org/VERP_README.html Info on VERP
     *
     * @var bool
     */
    public $do_verp = false;
    /**
     * The timeout value for connection, in seconds.
     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2.
     * This needs to be quite high to function correctly with hosts using greetdelay as an anti-spam measure.
     *
     * @see http://tools.ietf.org/html/rfc2821#section-4.5.3.2
     *
     * @var int
     */
    public $Timeout = 300;
    /**
     * How long to wait for commands to complete, in seconds.
     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2.
     *
     * @var int
     */
    public $Timelimit = 300;
    /**
     * Patterns to extract an SMTP transaction id from reply to a DATA command.
     * The first capture group in each regex will be used as the ID.
     * MS ESMTP returns the message ID, which may not be correct for internal tracking.
     *
     * @var string[]
     */
    protected $smtp_transaction_id_patterns = ['exim' => '/[\d]{3} OK id=(.*)/', 'sendmail' => '/[\d]{3} 2.0.0 (.*) Message/', 'postfix' => '/[\d]{3} 2.0.0 Ok: queued as (.*)/', 'Microsoft_ESMTP' => '/[0-9]{3} 2.[\d].0 (.*)@(?:.*) Queued mail for delivery/', 'Amazon_SES' => '/[\d]{3} Ok (.*)/', 'SendGrid' => '/[\d]{3} Ok: queued as (.*)/', 'CampaignMonitor' => '/[\d]{3} 2.0.0 OK:([a-zA-Z\d]{48})/', 'Haraka' => '/[\d]{3} Message Queued \((.*)\)/', 'ZoneMTA' => '/[\d]{3} Message queued as (.*)/', 'Mailjet' => '/[\d]{3} OK queued as (.*)/'];
    /**
     * The last transaction ID issued in response to a DATA command,
     * if one was detected.
     *
     * @var string|bool|null
     */
    protected $last_smtp_transaction_id;
    /**
     * The socket for the server connection.
     *
     * @var ?resource
     */
    protected $smtp_conn;
    /**
     * Error information, if any, for the last SMTP command.
     *
     * @var array
     */
    protected $error = ['error' => '', 'detail' => '', 'smtp_code' => '', 'smtp_code_ex' => ''];
    /**
     * The reply the server sent to us for HELO.
     * If null, no HELO string has yet been received.
     *
     * @var string|null
     */
    protected $helo_rply;
    /**
     * The set of SMTP extensions sent in reply to EHLO command.
     * Indexes of the array are extension names.
     * Value at index 'HELO' or 'EHLO' (according to command that was sent)
     * represents the server name. In case of HELO it is the only element of the array.
     * Other values can be boolean TRUE or an array containing extension options.
     * If null, no HELO/EHLO string has yet been received.
     *
     * @var array|null
     */
    protected $server_caps;
    /**
     * The most recent reply received from the server.
     *
     * @var string
     */
    protected $last_reply = '';
    /**
     * Output debugging info via a user-selected method.
     *
     * @param string $str   Debug string to output
     * @param int    $level The debug level of this message; see DEBUG_* constants
     *
     * @see SMTP::$Debugoutput
     * @see SMTP::$do_debug
     * @phpstan-return void
     */
    protected function edebug($str, $level = 0)
    {
    }
    /**
     * Connect to an SMTP server.
     *
     * @param string $host    SMTP server IP or host name
     * @param int    $port    The port number to connect to
     * @param int    $timeout How long to wait for the connection to open
     * @param array  $options An array of options for stream_context_create()
     *
     * @return bool
     */
    public function connect($host, $port = null, $timeout = 30, $options = [])
    {
    }
    /**
     * Create connection to the SMTP server.
     *
     * @param string $host    SMTP server IP or host name
     * @param int    $port    The port number to connect to
     * @param int    $timeout How long to wait for the connection to open
     * @param array  $options An array of options for stream_context_create()
     *
     * @return false|resource
     */
    protected function getSMTPConnection($host, $port = null, $timeout = 30, $options = [])
    {
    }
    /**
     * Initiate a TLS (encrypted) session.
     *
     * @return bool
     */
    public function startTLS()
    {
    }
    /**
     * Perform SMTP authentication.
     * Must be run after hello().
     *
     * @see    hello()
     *
     * @param string $username The user name
     * @param string $password The password
     * @param string $authtype The auth type (CRAM-MD5, PLAIN, LOGIN, XOAUTH2)
     * @param OAuthTokenProvider $OAuth An optional OAuthTokenProvider instance for XOAUTH2 authentication
     *
     * @return bool True if successfully authenticated
     */
    public function authenticate($username, $password, $authtype = null, $OAuth = null)
    {
    }
    /**
     * Calculate an MD5 HMAC hash.
     * Works like hash_hmac('md5', $data, $key)
     * in case that function is not available.
     *
     * @param string $data The data to hash
     * @param string $key  The key to hash with
     *
     * @return string
     */
    protected function hmac($data, $key)
    {
    }
    /**
     * Check connection state.
     *
     * @return bool True if connected
     */
    public function connected()
    {
    }
    /**
     * Close the socket and clean up the state of the class.
     * Don't use this function without first trying to use QUIT.
     *
     * @see quit()
     */
    public function close()
    {
    }
    /**
     * Send an SMTP DATA command.
     * Issues a data command and sends the msg_data to the server,
     * finalizing the mail transaction. $msg_data is the message
     * that is to be sent with the headers. Each header needs to be
     * on a single line followed by a <CRLF> with the message headers
     * and the message body being separated by an additional <CRLF>.
     * Implements RFC 821: DATA <CRLF>.
     *
     * @param string $msg_data Message data to send
     *
     * @return bool
     */
    public function data($msg_data)
    {
    }
    /**
     * Send an SMTP HELO or EHLO command.
     * Used to identify the sending server to the receiving server.
     * This makes sure that client and server are in a known state.
     * Implements RFC 821: HELO <SP> <domain> <CRLF>
     * and RFC 2821 EHLO.
     *
     * @param string $host The host name or IP to connect to
     *
     * @return bool
     */
    public function hello($host = '')
    {
    }
    /**
     * Send an SMTP HELO or EHLO command.
     * Low-level implementation used by hello().
     *
     * @param string $hello The HELO string
     * @param string $host  The hostname to say we are
     *
     * @return bool
     *
     * @see hello()
     */
    protected function sendHello($hello, $host)
    {
    }
    /**
     * Parse a reply to HELO/EHLO command to discover server extensions.
     * In case of HELO, the only parameter that can be discovered is a server name.
     *
     * @param string $type `HELO` or `EHLO`
     */
    protected function parseHelloFields($type)
    {
    }
    /**
     * Send an SMTP MAIL command.
     * Starts a mail transaction from the email address specified in
     * $from. Returns true if successful or false otherwise. If True
     * the mail transaction is started and then one or more recipient
     * commands may be called followed by a data command.
     * Implements RFC 821: MAIL <SP> FROM:<reverse-path> <CRLF>.
     *
     * @param string $from Source address of this message
     *
     * @return bool
     */
    public function mail($from)
    {
    }
    /**
     * Send an SMTP QUIT command.
     * Closes the socket if there is no error or the $close_on_error argument is true.
     * Implements from RFC 821: QUIT <CRLF>.
     *
     * @param bool $close_on_error Should the connection close if an error occurs?
     *
     * @return bool
     */
    public function quit($close_on_error = true)
    {
    }
    /**
     * Send an SMTP RCPT command.
     * Sets the TO argument to $toaddr.
     * Returns true if the recipient was accepted false if it was rejected.
     * Implements from RFC 821: RCPT <SP> TO:<forward-path> <CRLF>.
     *
     * @param string $address The address the message is being sent to
     * @param string $dsn     Comma separated list of DSN notifications. NEVER, SUCCESS, FAILURE
     *                        or DELAY. If you specify NEVER all other notifications are ignored.
     *
     * @return bool
     */
    public function recipient($address, $dsn = '')
    {
    }
    /**
     * Send an SMTP RSET command.
     * Abort any transaction that is currently in progress.
     * Implements RFC 821: RSET <CRLF>.
     *
     * @return bool True on success
     */
    public function reset()
    {
    }
    /**
     * Send a command to an SMTP server and check its return code.
     *
     * @param string    $command       The command name - not sent to the server
     * @param string    $commandstring The actual command to send
     * @param int|array $expect        One or more expected integer success codes
     *
     * @return bool True on success
     */
    protected function sendCommand($command, $commandstring, $expect)
    {
    }
    /**
     * Send an SMTP SAML command.
     * Starts a mail transaction from the email address specified in $from.
     * Returns true if successful or false otherwise. If True
     * the mail transaction is started and then one or more recipient
     * commands may be called followed by a data command. This command
     * will send the message to the users terminal if they are logged
     * in and send them an email.
     * Implements RFC 821: SAML <SP> FROM:<reverse-path> <CRLF>.
     *
     * @param string $from The address the message is from
     *
     * @return bool
     */
    public function sendAndMail($from)
    {
    }
    /**
     * Send an SMTP VRFY command.
     *
     * @param string $name The name to verify
     *
     * @return bool
     */
    public function verify($name)
    {
    }
    /**
     * Send an SMTP NOOP command.
     * Used to keep keep-alives alive, doesn't actually do anything.
     *
     * @return bool
     */
    public function noop()
    {
    }
    /**
     * Send an SMTP TURN command.
     * This is an optional command for SMTP that this class does not support.
     * This method is here to make the RFC821 Definition complete for this class
     * and _may_ be implemented in future.
     * Implements from RFC 821: TURN <CRLF>.
     *
     * @return bool
     */
    public function turn()
    {
    }
    /**
     * Send raw data to the server.
     *
     * @param string $data    The data to send
     * @param string $command Optionally, the command this is part of, used only for controlling debug output
     *
     * @return int|bool The number of bytes sent to the server or false on error
     */
    public function client_send($data, $command = '')
    {
    }
    /**
     * Get the latest error.
     *
     * @return array
     */
    public function getError()
    {
    }
    /**
     * Get SMTP extensions available on the server.
     *
     * @return array|null
     */
    public function getServerExtList()
    {
    }
    /**
     * Get metadata about the SMTP server from its HELO/EHLO response.
     * The method works in three ways, dependent on argument value and current state:
     *   1. HELO/EHLO has not been sent - returns null and populates $this->error.
     *   2. HELO has been sent -
     *     $name == 'HELO': returns server name
     *     $name == 'EHLO': returns boolean false
     *     $name == any other string: returns null and populates $this->error
     *   3. EHLO has been sent -
     *     $name == 'HELO'|'EHLO': returns the server name
     *     $name == any other string: if extension $name exists, returns True
     *       or its options (e.g. AUTH mechanisms supported). Otherwise returns False.
     *
     * @param string $name Name of SMTP extension or 'HELO'|'EHLO'
     *
     * @return string|bool|null
     */
    public function getServerExt($name)
    {
    }
    /**
     * Get the last reply from the server.
     *
     * @return string
     */
    public function getLastReply()
    {
    }
    /**
     * Read the SMTP server's response.
     * Either before eof or socket timeout occurs on the operation.
     * With SMTP we can tell if we have more lines to read if the
     * 4th character is '-' symbol. If it is a space then we don't
     * need to read anything else.
     *
     * @return string
     */
    protected function get_lines()
    {
    }
    /**
     * Enable or disable VERP address generation.
     *
     * @param bool $enabled
     */
    public function setVerp($enabled = false)
    {
    }
    /**
     * Get VERP address generation mode.
     *
     * @return bool
     */
    public function getVerp()
    {
    }
    /**
     * Set error messages and codes.
     *
     * @param string $message      The error message
     * @param string $detail       Further detail on the error
     * @param string $smtp_code    An associated SMTP error code
     * @param string $smtp_code_ex Extended SMTP code
     */
    protected function setError($message, $detail = '', $smtp_code = '', $smtp_code_ex = '')
    {
    }
    /**
     * Set debug output method.
     *
     * @param string|callable $method The name of the mechanism to use for debugging output, or a callable to handle it
     */
    public function setDebugOutput($method = 'echo')
    {
    }
    /**
     * Get debug output method.
     *
     * @return string
     */
    public function getDebugOutput()
    {
    }
    /**
     * Set debug output level.
     *
     * @param int $level
     */
    public function setDebugLevel($level = 0)
    {
    }
    /**
     * Get debug output level.
     *
     * @return int
     */
    public function getDebugLevel()
    {
    }
    /**
     * Set SMTP timeout.
     *
     * @param int $timeout The timeout duration in seconds
     */
    public function setTimeout($timeout = 0)
    {
    }
    /**
     * Get SMTP timeout.
     *
     * @return int
     */
    public function getTimeout()
    {
    }
    /**
     * Reports an error number and string.
     *
     * @param int    $errno   The error number returned by PHP
     * @param string $errmsg  The error message returned by PHP
     * @param string $errfile The file the error occurred in
     * @param int    $errline The line number the error occurred on
     */
    protected function errorHandler($errno, $errmsg, $errfile = '', $errline = 0)
    {
    }
    /**
     * Extract and return the ID of the last SMTP transaction based on
     * a list of patterns provided in SMTP::$smtp_transaction_id_patterns.
     * Relies on the host providing the ID in response to a DATA command.
     * If no reply has been received yet, it will return null.
     * If no pattern was matched, it will return false.
     *
     * @return bool|string|null
     */
    protected function recordLastTransactionID()
    {
    }
    /**
     * Get the queue/transaction ID of the last SMTP transaction
     * If no reply has been received yet, it will return null.
     * If no pattern was matched, it will return false.
     *
     * @return bool|string|null
     *
     * @see recordLastTransactionID()
     */
    public function getLastTransactionID()
    {
    }
}