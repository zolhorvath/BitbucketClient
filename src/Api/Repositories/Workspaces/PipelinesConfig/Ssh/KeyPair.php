<?php

declare(strict_types=1);

/*
 * This file is part of Bitbucket API Client.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bitbucket\Api\Repositories\Workspaces\PipelinesConfig\Ssh;

use Bitbucket\HttpClient\Util\UriBuilder;

/**
 * The key pair api class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class KeyPair extends AbstractSshApi
{
    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function show(array $params = [])
    {
        $uri = $this->buildKeyPairUri();

        return $this->get($uri, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function update(array $params = [])
    {
        $uri = $this->buildKeyPairUri();

        return $this->put($uri, $params);
    }

    /**
     * @param array $params
     *
     * @throws \Http\Client\Exception
     *
     * @return array
     */
    public function remove(array $params = [])
    {
        $uri = $this->buildKeyPairUri();

        return $this->delete($uri, $params);
    }

    /**
     * Build the key pair URI from the given parts.
     *
     * @param string ...$parts
     *
     * @return string
     */
    protected function buildKeyPairUri(string ...$parts)
    {
        return UriBuilder::buildUri('repositories', $this->workspace, $this->repo, 'pipelines_config', 'ssh', 'key_pair', ...$parts);
    }
}
