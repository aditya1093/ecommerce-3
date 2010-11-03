<?php

namespace Sonata\Bundle\OrderBundle\Entity;

/**
 * Sonata\Bundle\OrderBundle\Entity\OrderCallback
 */
class OrderCallback
{
    /**
     * @var integer $order_id
     */
    private $order_id;

    /**
     * @var string $transaction_id
     */
    private $transaction_id;

    /**
     * @var integer $status
     */
    private $status;

    /**
     * @var decimal $amount
     */
    private $amount;

    /**
     * @var text $post
     */
    private $post;

    /**
     * @var text $get
     */
    private $get;

    /**
     * @var text $uri
     */
    private $uri;

    /**
     * @var string $method
     */
    private $method;

    /**
     * @var string $remote_ip
     */
    private $remote_ip;

    /**
     * @var text $errors
     */
    private $errors;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Sonata\Bundle\OrderBundle\Entity\Order
     */
    private $Order;

    /**
     * Set order_id
     *
     * @param integer $orderId
     */
    public function setOrderId($orderId)
    {
        $this->order_id = $orderId;
    }

    /**
     * Get order_id
     *
     * @return integer $orderId
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set transaction_id
     *
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transaction_id = $transactionId;
    }

    /**
     * Get transaction_id
     *
     * @return string $transactionId
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
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
     * Set amount
     *
     * @param decimal $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return decimal $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set post
     *
     * @param text $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    /**
     * Get post
     *
     * @return text $post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set get
     *
     * @param text $get
     */
    public function setGet($get)
    {
        $this->get = $get;
    }

    /**
     * Get get
     *
     * @return text $get
     */
    public function getGet()
    {
        return $this->get;
    }

    /**
     * Set uri
     *
     * @param text $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * Get uri
     *
     * @return text $uri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set method
     *
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Get method
     *
     * @return string $method
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set remote_ip
     *
     * @param string $remoteIp
     */
    public function setRemoteIp($remoteIp)
    {
        $this->remote_ip = $remoteIp;
    }

    /**
     * Get remote_ip
     *
     * @return string $remoteIp
     */
    public function getRemoteIp()
    {
        return $this->remote_ip;
    }

    /**
     * Set errors
     *
     * @param text $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    /**
     * Get errors
     *
     * @return text $errors
     */
    public function getErrors()
    {
        return $this->errors;
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
     * Add Order
     *
     * @param Sonata\Bundle\OrderBundle\Entity\Order $order
     */
    public function addOrder(\Sonata\Bundle\OrderBundle\Entity\Order $order)
    {
        $this->Order[] = $order;
    }

    /**
     * Get Order
     *
     * @return Doctrine\Common\Collections\Collection $order
     */
    public function getOrder()
    {
        return $this->Order;
    }
}