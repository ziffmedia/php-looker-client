<?php

namespace ZiffMedia\Looker\Type;

class SshServer
{
    public readonly string $ssh_server_id;

    public string $ssh_server_name;

    public string $ssh_server_host;

    public int $ssh_server_port;

    public string $ssh_server_user;

    public readonly string $finger_print;

    public readonly string $sha_finger_print;

    public readonly string $public_key;

    public readonly string $status;
}
