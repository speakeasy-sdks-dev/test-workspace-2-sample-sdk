<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Shared;


/**
 * ConflictError - standard error
 * 
 * @package test_workspace-2\Konnect-API\Models\Shared
 * @access public
 */
class ConflictError
{
    /**
     * A human readable explanation specific to this occurence of the problem.
     * 
     * This field may contain request/entity data to help the user understand
     * what went wrong. Enclose variable values in square brackets. Should be
     * provided as "Sentence case" for direct use in the UI.
     * 
     * 
     * @var string $detail
     */
	#[\JMS\Serializer\Annotation\SerializedName('detail')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $detail;
    
    /**
     * Used to return the correlation ID back to the user, in the format
     * 
     * kong:trace:<correlation_id>. This helps us find the relevant logs
     * when a customer reports an issue.
     * 
     * 
     * @var string $instance
     */
	#[\JMS\Serializer\Annotation\SerializedName('instance')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $instance;
    
    /**
     * The HTTP status code of the error. Useful when passing the response
     * 
     * body to child properties in a frontend UI. Must be returned as an integer.
     * 
     * 
     * @var int $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $status;
    
    /**
     * A short, human-readable summary of the problem. It should not
     * 
     * change between occurences of a problem, except for localization.
     * Should be provided as "Sentence case" for direct use in the UI.
     * 
     * 
     * @var string $title
     */
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
    /**
     * The error type.
     * 
     * @var ?string $type
     */
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $type = null;
    
	public function __construct()
	{
		$this->detail = "";
		$this->instance = "";
		$this->status = 0;
		$this->title = "";
		$this->type = null;
	}
}
