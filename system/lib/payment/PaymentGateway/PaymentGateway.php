<?php

class SJB_PaymentGateway extends SJB_Object
{
	/**
	 * @param array|null $gateway_info
	 */
	function SJB_PaymentGateway($gateway_info = array())
	{
		$this->details = new SJB_PaymentGatewayDetails($gateway_info);
	}

	function isValid()
	{
		return true;
	}

    function isPaymentVerified($invoice)
    {
    	return true;
	}

	function getPaymentFromCallbackData($callback_data)
	{
		return null;
	}

	function getPaymentStatusFromCallbackData($callback_data)
	{
		return null;
	}
    
	function getTemplate()
	{
    }
}

