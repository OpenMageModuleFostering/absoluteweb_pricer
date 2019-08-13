<?php  

class AbsoluteWeb_Pricer_Block_Adminhtml_Pricerbackend extends Mage_Adminhtml_Block_Template {

	 /**
     * Minimal supported Magento version
     *
     * @var string
     */
    protected $minVersion = '1.6.0.0';

    /**
     * Maximum supported Magento version
     *
     * @var string
     */
    protected $maxVersion = '1.9.3.0';

    
    /**
     * @var AbsoluteWeb_Api_Model_Credentials
     */
    protected $credentials;

    /**
     * @param array $args
     */
    public function __construct(array $args = array())
    {
        parent::__construct($args);
        $this->credentials = Mage::getModel('absoluteweb_pricer/credentials');
    }

    
    /**
     * Get min version
     *
     * @return string
     */
    public function getMinVersion()
    {
        return $this->minVersion;
    }

    /**
     * Get max version
     *
     * @return string
     */
    public function getMaxVersion()
    {
        return $this->maxVersion;
    }

    /**
     * Check if current Magento version is supported by extension
     *
     * @return bool
     */
    public function isSupportedVersion()
    {
        $version = $this->getMagentoVersion();
        return version_compare($version, $this->minVersion, '>=');
    }

    /**
     * Get current Magento version
     *
     * @return string
     */
    public function getMagentoVersion()
    {
        return Mage::getVersion();
    }

    /**
     * Get consumer key
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->credentials->getConsumerKey();
    }

    /**
     * Get consumer secret
     *
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->credentials->getConsumerSecret();
    }

    /**
     * Get access key
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->credentials->getAccessToken();
    }

    /**
     * Get access secret
     *
     * @return string
     */
    public function getAccessSecret()
    {
        return $this->credentials->getAccessSecret();
    }

    /**
     * Get SOAP user
     *
     * @return string
     */
    public function getSoapUser()
    {
        return $this->credentials->getSoapUser();
    }


    /**
     * Get site URL
     *
     * @return string
     */
    public function getSiteURL()
    {
        return $this->credentials->getSiteURL();
    }

    /**
     * Get AbsoluteWebSolution end point URL
     *
     * @return string
     */
    public function getEndPointUrl()
    {
        return $this->credentials->getEndPointUrl();
    }

    /**
     * Get API Key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->credentials->getApiKey();
    }
}