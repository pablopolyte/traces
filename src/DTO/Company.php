<?php

namespace PrestaShop\Traces\DTO;

class Company
{
    public int $mergedPullRequests = 0;
    public int $rank = 0;
    public float $pullRequestsPercent = 0;

    public function __construct(
        public readonly string $name,
        /**
         * @var string[]
         */
        public readonly array $aliases,
        /**
         * @var Employee[]
         */
        public readonly array $employees,
        public readonly string $avatarUrl,
        public readonly string $htmlUrl,
    ) {
    }

    /**
     * @return array<string, string|int|float>
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'rank' => $this->rank,
            'merged_pull_requests' => $this->mergedPullRequests,
            'pull_requests_percent' => $this->pullRequestsPercent,
            'avatar_url' => $this->avatarUrl,
            'html_url' => $this->htmlUrl,
        ];
    }
}
