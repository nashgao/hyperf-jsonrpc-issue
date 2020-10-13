<?php
/**
 * Copyright (C) SPACE Platform PTY LTD - All Rights Reserved
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Nash Gao <nash@spaceplaform.co>
 * @organization Space Platform
 * @project hyperf-issue
 * @create Created on 2020/10/14 上午12:27
 * @author Nash Gao
 */

declare(strict_types=1);


namespace App\Rpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="provider",protocol="jsonrpc-http",server="http")
 */
class Provider
{
    public function test($paramA, array $paramB)
    {
        return 'success !';
    }
}