<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;
use bunq\Model\Generated\Object\LabelMonetaryAccount;

/**
 * Used to create new and read existing statement exports. Statement exports
 * can be created in either CSV, MT940 or PDF file format.
 *
 * @generated
 */
class CustomerStatementExport extends BunqModel
{
    /**
     * Field constants.
     */
    const FIELD_STATEMENT_FORMAT = 'statement_format';
    const FIELD_DATE_START = 'date_start';
    const FIELD_DATE_END = 'date_end';
    const FIELD_REGIONAL_FORMAT = 'regional_format';

    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_CREATE = 'user/%s/monetary-account/%s/customer-statement';
    const ENDPOINT_URL_READ = 'user/%s/monetary-account/%s/customer-statement/%s';
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/customer-statement';
    const ENDPOINT_URL_DELETE = 'user/%s/monetary-account/%s/customer-statement/%s';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CustomerStatementExport';

    /**
     * The id of the customer statement model.
     *
     * @var int
     */
    protected $id;

    /**
     * The timestamp of the statement model's creation.
     *
     * @var string
     */
    protected $created;

    /**
     * The timestamp of the statement model's last update.
     *
     * @var string
     */
    protected $updated;

    /**
     * The date from when this statement shows transactions.
     *
     * @var string
     */
    protected $dateStart;

    /**
     * The date until which statement shows transactions.
     *
     * @var string
     */
    protected $dateEnd;

    /**
     * The status of the export.
     *
     * @var string
     */
    protected $status;

    /**
     * MT940 Statement number. Unique per monetary account.
     *
     * @var int
     */
    protected $statementNumber;

    /**
     * The format of statement.
     *
     * @var string
     */
    protected $statementFormat;

    /**
     * The regional format of a CSV statement.
     *
     * @var string
     */
    protected $regionalFormat;

    /**
     * The monetary account for which this statement was created.
     *
     * @var LabelMonetaryAccount
     */
    protected $aliasMonetaryAccount;

    /**
     * @param ApiContext $apiContext
     * @param mixed[] $requestMap
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<int>
     */
    public static function create(ApiContext $apiContext, array $requestMap, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->post(
            vsprintf(
                self::ENDPOINT_URL_CREATE,
                [$userId, $monetaryAccountId]
            ),
            $requestMap,
            $customHeaders
        );

        return static::processForId($responseRaw);
    }

    /**
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $customerStatementExportId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<CustomerStatementExport>
     */
    public static function get(ApiContext $apiContext, $userId, $monetaryAccountId, $customerStatementExportId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_READ,
                [$userId, $monetaryAccountId, $customerStatementExportId]
            ),
            $customHeaders
        );

        return static::fromJson($responseRaw);
    }

    /**
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<BunqModel[]|CustomerStatementExport[]>
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId]
            ),
            $customHeaders
        );

        return static::fromJsonList($responseRaw, self::OBJECT_TYPE);
    }

    /**
     * @param ApiContext $apiContext
     * @param string[] $customHeaders
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $customerStatementExportId
     *
     * @return BunqResponse<null>
     */
    public static function delete(ApiContext $apiContext, $userId, $monetaryAccountId, $customerStatementExportId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->delete(
            vsprintf(
                self::ENDPOINT_URL_DELETE,
                [$userId, $monetaryAccountId, $customerStatementExportId]
            ),
            $customHeaders
        );

        return new BunqResponse(null, $responseRaw->getHeaders());
    }

    /**
     * The id of the customer statement model.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * The timestamp of the statement model's creation.
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The timestamp of the statement model's last update.
     *
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param string $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * The date from when this statement shows transactions.
     *
     * @return string
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param string $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * The date until which statement shows transactions.
     *
     * @return string
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param string $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * The status of the export.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * MT940 Statement number. Unique per monetary account.
     *
     * @return int
     */
    public function getStatementNumber()
    {
        return $this->statementNumber;
    }

    /**
     * @param int $statementNumber
     */
    public function setStatementNumber($statementNumber)
    {
        $this->statementNumber = $statementNumber;
    }

    /**
     * The format of statement.
     *
     * @return string
     */
    public function getStatementFormat()
    {
        return $this->statementFormat;
    }

    /**
     * @param string $statementFormat
     */
    public function setStatementFormat($statementFormat)
    {
        $this->statementFormat = $statementFormat;
    }

    /**
     * The regional format of a CSV statement.
     *
     * @return string
     */
    public function getRegionalFormat()
    {
        return $this->regionalFormat;
    }

    /**
     * @param string $regionalFormat
     */
    public function setRegionalFormat($regionalFormat)
    {
        $this->regionalFormat = $regionalFormat;
    }

    /**
     * The monetary account for which this statement was created.
     *
     * @return LabelMonetaryAccount
     */
    public function getAliasMonetaryAccount()
    {
        return $this->aliasMonetaryAccount;
    }

    /**
     * @param LabelMonetaryAccount $aliasMonetaryAccount
     */
    public function setAliasMonetaryAccount(LabelMonetaryAccount $aliasMonetaryAccount)
    {
        $this->aliasMonetaryAccount = $aliasMonetaryAccount;
    }
}
