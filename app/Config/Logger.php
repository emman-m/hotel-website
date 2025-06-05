<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Logger extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Error Logging Threshold
     * --------------------------------------------------------------------------
     *
     * If you have enabled error logging, you can set an error threshold to
     * determine what gets logged. Threshold options are:
     *   0 = Disables logging, Error logging TURNED OFF
     *   1 = Emergency Messages - System is unusable
     *   2 = Alert Messages - Action must be taken immediately
     *   3 = Critical Messages - Application component unavailable, unexpected exception.
     *   4 = Runtime Errors - Don't need immediate action, but should be monitored.
     *   5 = Warnings - Exceptional occurrences that are not errors.
     *   6 = Notices - Normal but significant events.
     *   7 = Info - Interesting events, like user logging in, etc.
     *   8 = Debug - Detailed debug information.
     *   9 = All Messages
     *
     * You can also pass an array with threshold levels to show individual error types
     *
     *     array(1, 2, 3, 8) = Emergency, Alert, Critical, and Debug messages
     *
     * For a live site you'll usually enable Critical or higher (3) to be logged otherwise
     * your log files will fill up very fast.
     */
    public int $threshold = 4;

    /**
     * --------------------------------------------------------------------------
     * Error Logging Directory Path
     * --------------------------------------------------------------------------
     *
     * Leave this BLANK unless you would like to set something other than the default
     * system/logs/ directory. Use a full server path with trailing slash.
     */
    public string $directory = WRITEPATH . 'logs/';

    /**
     * --------------------------------------------------------------------------
     * Log File Extension
     * --------------------------------------------------------------------------
     *
     * The default filename extension for log files. The default 'php' allows for
     * protecting the log files via basic scripting, when they are to be stored
     * under a publicly accessible directory.
     *
     * Note: Leaving it blank will default to 'php'.
     */
    public string $extension = 'log';

    /**
     * --------------------------------------------------------------------------
     * Log File Permissions
     * --------------------------------------------------------------------------
     *
     * The file system permissions to be applied on newly created log files.
     *
     * IMPORTANT: This MUST be an integer (no quotes) and you MUST use octal
     * integer notation (i.e. 0700, 0644, etc.)
     */
    public int $permissions = 0644;

    /**
     * --------------------------------------------------------------------------
     * Log Date Format
     * --------------------------------------------------------------------------
     *
     * Each item that is logged has an associated date. You can use PHP date
     * codes to set your own date formatting
     */
    public string $dateFormat = 'Y-m-d H:i:s';

    /**
     * --------------------------------------------------------------------------
     * Log Handlers
     * --------------------------------------------------------------------------
     *
     * The logging system supports multiple actions to be taken when something
     * is logged. This is done by allowing for multiple Handlers, special classes
     * designed to write the log to their chosen destinations, whether that is
     * a file on the server, a cloud-based service, or even taking actions such
     * as emailing the dev team.
     *
     * Each handler must have the following properties:
     *   - type: The type of handler (file, chrome, etc.)
     *   - path: The path to the handler file (if applicable)
     *   - level: The minimum level to log (0-9)
     *
     * @var array<string, array<string, mixed>>
     */
    public array $handlers = [
        'file' => [
            'type' => 'file',
            'path' => WRITEPATH . 'logs/',
            'level' => 4,
        ],
        'chrome' => [
            'type' => 'chrome',
            'path' => WRITEPATH . 'logs/',
            'level' => 4,
        ],
    ];
}
