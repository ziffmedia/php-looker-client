<?php

namespace ZiffMedia\Looker\Type;

class DBConnection
{
    public readonly array $can;

    public string $name;

    public null $dialect;

    public readonly array $snippets;

    public readonly bool $pdts_enabled;

    public ?string $host;

    public ?string $port;

    public ?string $username;

    public ?string $password;

    public readonly bool $uses_oauth;

    public ?string $certificate;

    public ?string $file_type;

    public ?string $database;

    public ?string $db_timezone;

    public ?string $query_timezone;

    public ?string $schema;

    public ?int $max_connections;

    public ?string $max_billing_gigabytes;

    public bool $ssl;

    public bool $verify_ssl;

    public ?string $tmp_db_name;

    public ?string $jdbc_additional_params;

    public ?int $pool_timeout;

    public ?string $dialect_name;

    public readonly bool $supports_data_studio_link;

    public readonly ?string $created_at;

    public readonly ?string $user_id;

    public readonly bool $example;

    public ?bool $user_db_credentials;

    public ?array $user_attribute_fields;

    public ?string $maintenance_cron;

    public readonly ?string $last_regen_at;

    public readonly ?string $last_reap_at;

    public bool $sql_runner_precache_tables;

    public bool $sql_writing_with_info_schema;

    public ?string $after_connect_statements;

    public null $pdt_context_override;

    public readonly bool $managed;

    public ?int $custom_local_port;

    public ?string $tunnel_id;

    public ?bool $uses_tns;

    public ?int $pdt_concurrency;

    public ?bool $disable_context_comment;

    public ?string $oauth_application_id;

    public ?bool $always_retry_failed_builds;

    public ?bool $cost_estimate_enabled;

    public ?bool $pdt_api_control_enabled;
}
