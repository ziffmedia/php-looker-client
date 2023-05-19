<?php

namespace ZiffMedia\Looker\Type;

class SshTunnel
{
    public readonly string $tunnel_id;

    public string $ssh_server_id;

    public readonly string $ssh_server_name;

    public readonly string $ssh_server_host;

    public readonly int $ssh_server_port;

    public readonly string $ssh_server_user;

    public readonly string $last_attempt;

    public int $local_host_port;

    public string $database_host;

    public int $database_port;

    public readonly string $status;
}
