<?php

namespace Sonata\Bundle\OrderBundle\Entity;

/**
 * Sonata\Bundle\OrderBundle\Entity\Order
 */
class Order
{
    /**
     * @var string $reference
     */
    private $reference;

    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var string $bank_handler
     */
    private $bank_handler;

    /**
     * @var string $delivery_method
     */
    private $delivery_method;

    /**
     * @var string $currency
     */
    private $currency;

    /**
     * @var integer $status
     */
    private $status;

    /**
     * @var integer $payment_status
     */
    private $payment_status;

    /**
     * @var integer $delivery_status
     */
    private $delivery_status;

    /**
     * @var datetime $validated_at
     */
    private $validated_at;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var decimal $total_inc
     */
    private $total_inc;

    /**
     * @var decimal $total_excl
     */
    private $total_excl;

    /**
     * @var decimal $delivery_cost
     */
    private $delivery_cost;

    /**
     * @var string $billing_name
     */
    private $billing_name;

    /**
     * @var string $billing_phone
     */
    private $billing_phone;

    /**
     * @var string $billing_address1
     */
    private $billing_address1;

    /**
     * @var string $billing_address2
     */
    private $billing_address2;

    /**
     * @var string $billing_address3
     */
    private $billing_address3;

    /**
     * @var string $billing_city
     */
    private $billing_city;

    /**
     * @var string $billing_postcode
     */
    private $billing_postcode;

    /**
     * @var string $billing_country
     */
    private $billing_country;

    /**
     * @var string $billing_fax
     */
    private $billing_fax;

    /**
     * @var string $billing_email
     */
    private $billing_email;

    /**
     * @var string $billing_mobile
     */
    private $billing_mobile;

    /**
     * @var string $shipping_name
     */
    private $shipping_name;

    /**
     * @var string $shipping_phone
     */
    private $shipping_phone;

    /**
     * @var string $shipping_address1
     */
    private $shipping_address1;

    /**
     * @var string $shipping_address2
     */
    private $shipping_address2;

    /**
     * @var string $shipping_address3
     */
    private $shipping_address3;

    /**
     * @var string $shipping_city
     */
    private $shipping_city;

    /**
     * @var string $shipping_postcode
     */
    private $shipping_postcode;

    /**
     * @var string $shipping_country
     */
    private $shipping_country;

    /**
     * @var string $shipping_fax
     */
    private $shipping_fax;

    /**
     * @var string $shipping_email
     */
    private $shipping_email;

    /**
     * @var string $shipping_mobile
     */
    private $shipping_mobile;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Application\Entity\User
     */
    private $user;

    /**
     * Set reference
     *
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Get reference
     *
     * @return string $reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer $userId
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set bank_handler
     *
     * @param string $bankHandler
     */
    public function setBankHandler($bankHandler)
    {
        $this->bank_handler = $bankHandler;
    }

    /**
     * Get bank_handler
     *
     * @return string $bankHandler
     */
    public function getBankHandler()
    {
        return $this->bank_handler;
    }

    /**
     * Set delivery_method
     *
     * @param string $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $this->delivery_method = $deliveryMethod;
    }

    /**
     * Get delivery_method
     *
     * @return string $deliveryMethod
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }

    /**
     * Set currency
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * Get currency
     *
     * @return string $currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set status
     *
     * @param integer $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return integer $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set payment_status
     *
     * @param integer $paymentStatus
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->payment_status = $paymentStatus;
    }

    /**
     * Get payment_status
     *
     * @return integer $paymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->payment_status;
    }

    /**
     * Set delivery_status
     *
     * @param integer $deliveryStatus
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->delivery_status = $deliveryStatus;
    }

    /**
     * Get delivery_status
     *
     * @return integer $deliveryStatus
     */
    public function getDeliveryStatus()
    {
        return $this->delivery_status;
    }

    /**
     * Set validated_at
     *
     * @param datetime $validatedAt
     */
    public function setValidatedAt($validatedAt)
    {
        $this->validated_at = $validatedAt;
    }

    /**
     * Get validated_at
     *
     * @return datetime $validatedAt
     */
    public function getValidatedAt()
    {
        return $this->validated_at;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set total_inc
     *
     * @param decimal $totalInc
     */
    public function setTotalInc($totalInc)
    {
        $this->total_inc = $totalInc;
    }

    /**
     * Get total_inc
     *
     * @return decimal $totalInc
     */
    public function getTotalInc()
    {
        return $this->total_inc;
    }

    /**
     * Set total_excl
     *
     * @param decimal $totalExcl
     */
    public function setTotalExcl($totalExcl)
    {
        $this->total_excl = $totalExcl;
    }

    /**
     * Get total_excl
     *
     * @return decimal $totalExcl
     */
    public function getTotalExcl()
    {
        return $this->total_excl;
    }

    /**
     * Set delivery_cost
     *
     * @param decimal $deliveryCost
     */
    public function setDeliveryCost($deliveryCost)
    {
        $this->delivery_cost = $deliveryCost;
    }

    /**
     * Get delivery_cost
     *
     * @return decimal $deliveryCost
     */
    public function getDeliveryCost()
    {
        return $this->delivery_cost;
    }

    /**
     * Set billing_name
     *
     * @param string $billingName
     */
    public function setBillingName($billingName)
    {
        $this->billing_name = $billingName;
    }

    /**
     * Get billing_name
     *
     * @return string $billingName
     */
    public function getBillingName()
    {
        return $this->billing_name;
    }

    /**
     * Set billing_phone
     *
     * @param string $billingPhone
     */
    public function setBillingPhone($billingPhone)
    {
        $this->billing_phone = $billingPhone;
    }

    /**
     * Get billing_phone
     *
     * @return string $billingPhone
     */
    public function getBillingPhone()
    {
        return $this->billing_phone;
    }

    /**
     * Set billing_address1
     *
     * @param string $billingAddress1
     */
    public function setBillingAddress1($billingAddress1)
    {
        $this->billing_address1 = $billingAddress1;
    }

    /**
     * Get billing_address1
     *
     * @return string $billingAddress1
     */
    public function getBillingAddress1()
    {
        return $this->billing_address1;
    }

    /**
     * Set billing_address2
     *
     * @param string $billingAddress2
     */
    public function setBillingAddress2($billingAddress2)
    {
        $this->billing_address2 = $billingAddress2;
    }

    /**
     * Get billing_address2
     *
     * @return string $billingAddress2
     */
    public function getBillingAddress2()
    {
        return $this->billing_address2;
    }

    /**
     * Set billing_address3
     *
     * @param string $billingAddress3
     */
    public function setBillingAddress3($billingAddress3)
    {
        $this->billing_address3 = $billingAddress3;
    }

    /**
     * Get billing_address3
     *
     * @return string $billingAddress3
     */
    public function getBillingAddress3()
    {
        return $this->billing_address3;
    }

    /**
     * Set billing_city
     *
     * @param string $billingCity
     */
    public function setBillingCity($billingCity)
    {
        $this->billing_city = $billingCity;
    }

    /**
     * Get billing_city
     *
     * @return string $billingCity
     */
    public function getBillingCity()
    {
        return $this->billing_city;
    }

    /**
     * Set billing_postcode
     *
     * @param string $billingPostcode
     */
    public function setBillingPostcode($billingPostcode)
    {
        $this->billing_postcode = $billingPostcode;
    }

    /**
     * Get billing_postcode
     *
     * @return string $billingPostcode
     */
    public function getBillingPostcode()
    {
        return $this->billing_postcode;
    }

    /**
     * Set billing_country
     *
     * @param string $billingCountry
     */
    public function setBillingCountry($billingCountry)
    {
        $this->billing_country = $billingCountry;
    }

    /**
     * Get billing_country
     *
     * @return string $billingCountry
     */
    public function getBillingCountry()
    {
        return $this->billing_country;
    }

    /**
     * Set billing_fax
     *
     * @param string $billingFax
     */
    public function setBillingFax($billingFax)
    {
        $this->billing_fax = $billingFax;
    }

    /**
     * Get billing_fax
     *
     * @return string $billingFax
     */
    public function getBillingFax()
    {
        return $this->billing_fax;
    }

    /**
     * Set billing_email
     *
     * @param string $billingEmail
     */
    public function setBillingEmail($billingEmail)
    {
        $this->billing_email = $billingEmail;
    }

    /**
     * Get billing_email
     *
     * @return string $billingEmail
     */
    public function getBillingEmail()
    {
        return $this->billing_email;
    }

    /**
     * Set billing_mobile
     *
     * @param string $billingMobile
     */
    public function setBillingMobile($billingMobile)
    {
        $this->billing_mobile = $billingMobile;
    }

    /**
     * Get billing_mobile
     *
     * @return string $billingMobile
     */
    public function getBillingMobile()
    {
        return $this->billing_mobile;
    }

    /**
     * Set shipping_name
     *
     * @param string $shippingName
     */
    public function setShippingName($shippingName)
    {
        $this->shipping_name = $shippingName;
    }

    /**
     * Get shipping_name
     *
     * @return string $shippingName
     */
    public function getShippingName()
    {
        return $this->shipping_name;
    }

    /**
     * Set shipping_phone
     *
     * @param string $shippingPhone
     */
    public function setShippingPhone($shippingPhone)
    {
        $this->shipping_phone = $shippingPhone;
    }

    /**
     * Get shipping_phone
     *
     * @return string $shippingPhone
     */
    public function getShippingPhone()
    {
        return $this->shipping_phone;
    }

    /**
     * Set shipping_address1
     *
     * @param string $shippingAddress1
     */
    public function setShippingAddress1($shippingAddress1)
    {
        $this->shipping_address1 = $shippingAddress1;
    }

    /**
     * Get shipping_address1
     *
     * @return string $shippingAddress1
     */
    public function getShippingAddress1()
    {
        return $this->shipping_address1;
    }

    /**
     * Set shipping_address2
     *
     * @param string $shippingAddress2
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shipping_address2 = $shippingAddress2;
    }

    /**
     * Get shipping_address2
     *
     * @return string $shippingAddress2
     */
    public function getShippingAddress2()
    {
        return $this->shipping_address2;
    }

    /**
     * Set shipping_address3
     *
     * @param string $shippingAddress3
     */
    public function setShippingAddress3($shippingAddress3)
    {
        $this->shipping_address3 = $shippingAddress3;
    }

    /**
     * Get shipping_address3
     *
     * @return string $shippingAddress3
     */
    public function getShippingAddress3()
    {
        return $this->shipping_address3;
    }

    /**
     * Set shipping_city
     *
     * @param string $shippingCity
     */
    public function setShippingCity($shippingCity)
    {
        $this->shipping_city = $shippingCity;
    }

    /**
     * Get shipping_city
     *
     * @return string $shippingCity
     */
    public function getShippingCity()
    {
        return $this->shipping_city;
    }

    /**
     * Set shipping_postcode
     *
     * @param string $shippingPostcode
     */
    public function setShippingPostcode($shippingPostcode)
    {
        $this->shipping_postcode = $shippingPostcode;
    }

    /**
     * Get shipping_postcode
     *
     * @return string $shippingPostcode
     */
    public function getShippingPostcode()
    {
        return $this->shipping_postcode;
    }

    /**
     * Set shipping_country
     *
     * @param string $shippingCountry
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shipping_country = $shippingCountry;
    }

    /**
     * Get shipping_country
     *
     * @return string $shippingCountry
     */
    public function getShippingCountry()
    {
        return $this->shipping_country;
    }

    /**
     * Set shipping_fax
     *
     * @param string $shippingFax
     */
    public function setShippingFax($shippingFax)
    {
        $this->shipping_fax = $shippingFax;
    }

    /**
     * Get shipping_fax
     *
     * @return string $shippingFax
     */
    public function getShippingFax()
    {
        return $this->shipping_fax;
    }

    /**
     * Set shipping_email
     *
     * @param string $shippingEmail
     */
    public function setShippingEmail($shippingEmail)
    {
        $this->shipping_email = $shippingEmail;
    }

    /**
     * Get shipping_email
     *
     * @return string $shippingEmail
     */
    public function getShippingEmail()
    {
        return $this->shipping_email;
    }

    /**
     * Set shipping_mobile
     *
     * @param string $shippingMobile
     */
    public function setShippingMobile($shippingMobile)
    {
        $this->shipping_mobile = $shippingMobile;
    }

    /**
     * Get shipping_mobile
     *
     * @return string $shippingMobile
     */
    public function getShippingMobile()
    {
        return $this->shipping_mobile;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param Application\Entity\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Application\Entity\User $user
     */
    public function getUser()
    {
        return $this->user;
    }
}