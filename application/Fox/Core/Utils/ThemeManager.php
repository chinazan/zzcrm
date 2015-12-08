<?php
namespace Fox\Core\Utils;

class ThemeManager
{
    protected $config;

    protected $metadata;

    private $defaultName = 'Fox';

    private $defaultStylesheet = 'Fox';

    public function __construct(Config $config, Metadata $metadata)
    {
        $this->config = $config;
        $this->metadata = $metadata;
    }

    public function getName()
    {
        return $this->config->get('theme', $this->defaultName);
    }

    public function getStylesheet()
    {
        return $this->metadata->get('themes.' . $this->getName() . '.stylesheet', 'client/css/espo.css');
    }
}


