<?php

namespace Jikan\Model\Resource;

/**
 * Class YoutubeImageResource
 * @package Jikan\Model\Resource
 */
class YoutubeImageResource
{

    /**
     * @var string|null
     */
    private $defaultImageUrl;

    /**
     * @var string|null
     */
    private $smallImageUrl;

    /**
     * @var string|null
     */
    private $mediumImageUrl;

    /**
     * @var string|null
     */
    private $highImageUrl;

    /**
     * @var string|null
     */
    private $maximumImageUrl;


    /**
     * @param string $id
     * @return YoutubeImageResource
     */
    public static function factory(?string $id) : self
    {
        $instance = new self;

        if ($id !== null) {
            $instance->defaultImageUrl = sprintf('http://img.youtube.com/vi/%s/default.jpg', $id);
            $instance->smallImageUrl = sprintf('http://img.youtube.com/vi/%s/sddefault.jpg', $id);
            $instance->mediumImageUrl = sprintf('http://img.youtube.com/vi/%s/mqdefault.jpg', $id);
            $instance->highImageUrl = sprintf('http://img.youtube.com/vi/%s/hqdefault.jpg', $id);
            $instance->maximumImageUrl = sprintf('http://img.youtube.com/vi/%s/maxresdefault.jpg', $id);
        }

        return $instance;
    }

    /**
     * @return string
     */
    public function getDefaultImageUrl(): ?string
    {
        return $this->defaultImageUrl;
    }

    /**
     * @return string
     */
    public function getSmallImageUrl(): ?string
    {
        return $this->smallImageUrl;
    }

    /**
     * @return string
     */
    public function getMediumImageUrl(): ?string
    {
        return $this->mediumImageUrl;
    }

    /**
     * @return string
     */
    public function getHighImageUrl(): ?string
    {
        return $this->highImageUrl;
    }

    /**
     * @return string
     */
    public function getMaximumImageUrl(): ?string
    {
        return $this->maximumImageUrl;
    }
}
