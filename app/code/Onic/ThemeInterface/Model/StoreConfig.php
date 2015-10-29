<?php

namespace Onic\ThemeInterface\Model;

class StoreConfig extends \Magento\Store\Model\Data\StoreConfig
{

    const KEY_GENERAL_STORE_INFORMATION_NAME       = 'general_store_information_name';
    const KEY_GENERAL_STORE_INFORMATION_PHONE      = 'general_store_information_phone';
    const KEY_GENERAL_STORE_INFORMATION_HOURS      = 'general_store_information_hours';
    const KEY_GENERAL_STORE_INFORMATION_COUNTRY_ID = 'general_store_information_country_id';


    /**
     * Get store name
     * @return string
     */
    public function getStoreName()
    {
        return $this->_get(self::KEY_GENERAL_STORE_INFORMATION_NAME);
    }

    /**
     * Set store name
     * @param string $name
     * @return $this
     */
    public function setStoreName($name)
    {
        return $this->setData(self::KEY_GENERAL_STORE_INFORMATION_NAME, $name);
    }

    /**
     * Get store phone
     * @return string
     */
    public function getStorePhone()
    {
        return $this->_get(self::KEY_GENERAL_STORE_INFORMATION_PHONE);
    }

    /**
     * Set store phone
     * @param string $phone
     * @return $this
     */
    public function setStorePhone($phone)
    {
        return $this->setData(self::KEY_GENERAL_STORE_INFORMATION_PHONE, $phone);
    }

    /**
     * Get store hours
     * @return string
     */
    public function getStoreHours()
    {
        return $this->_get(self::KEY_GENERAL_STORE_INFORMATION_HOURS);
    }

    /**
     * Set store hours
     * @param string $hours
     * @return $this
     */
    public function setStoreHours($hours)
    {
        return $this->setData(self::KEY_GENERAL_STORE_INFORMATION_HOURS, $hours);
    }

    /**
     * Get store countryid
     * @return string
     */
    public function getStoreCountryId()
    {
        return $this->_get(self::KEY_GENERAL_STORE_INFORMATION_COUNTRY_ID);
    }

    /**
     * Set store countryId
     * @param string $countryId
     * @return $this
     */
    public function setStoreCountryId($countryId)
    {
        return $this->setData(self::KEY_GENERAL_STORE_INFORMATION_COUNTRY_ID, $countryId);
    }
}