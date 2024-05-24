<?php

return [
    /*
     * Enables trimming of big log files.
     */
    'trimming_enabled' => env('LOGCLEANER_TRIMMING_ENABLED', true),

    /*
     * The number of lines to keep in every log when trimming log files.
     * E.g. if you set this to 10000, the 10000 last lines
     * of your laravel logs are kept.
     */
    'log_lines_to_keep' => 20000,

    /*
     * Enables deletion of old log files.
     */
    'deleting_enabled' => env('LOGCLEANER_DELETING_ENABLED', true),

    /*
     * The number of log files to keep when deleting old logs.
     * E.g. if you are using daily logs and you set this to
     * 14, the log files for the last 14 days are kept.
     */
    'log_files_to_keep' => 30,

    /*
     * Filenames that should not be trimmed or deleted. This accepts wildcards.
     * E.g. '*.txt' will keep all text files from being trimmed or deleted.
     */
    'exclude' => [],

    /*
     * Process log files in subfolders. If this is set to true, trimming will
     * also trim files in subfolders and deleting will keep only
     * the most recent X number of files in each subfolder
     * where X is the value of 'log_files_to_keep'.
     */
    'process_subfolders' => env('LOGCLEANER_PROCESS_SUBFOLDERS', true),
];
