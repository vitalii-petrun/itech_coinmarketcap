<?php
require_once 'metadata.php';
class Crypto
{
    public $id;
    public $name;
    public $symbol;
    public $slug;
    public $num_market_pairs;
    public $date_added;
    public $tags;
    public $max_supply;
    public $circulating_supply;
    public $total_supply;
    public $is_active;
    public $platform;
    public $cmc_rank;
    public $is_fiat;
    public $self_reported_circulating_supply;
    public $self_reported_market_cap;
    public $tvl_ratio;
    public $last_updated;
    public $quote;

    public $metadata;

    public function __construct()
    {
        $get_arguments = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct' . $number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct1($data)
    {
        $this->id = $data->id;
        $this->name = $data->name;
        $this->symbol = $data->symbol;
        $this->slug = $data->slug;
        $this->num_market_pairs = $data->num_market_pairs;
        $this->date_added = $data->date_added;
        $this->tags = $data->tags;
        $this->max_supply = $data->max_supply;
        $this->circulating_supply = $data->circulating_supply;
        $this->total_supply = $data->total_supply;
        $this->is_active = $data->is_active;
        $this->platform = $data->platform;
        $this->cmc_rank = $data->cmc_rank;
        $this->is_fiat = $data->is_fiat;
        $this->self_reported_circulating_supply = $data->self_reported_circulating_supply;
        $this->self_reported_market_cap = $data->self_reported_market_cap;
        $this->tvl_ratio = $data->tvl_ratio;
        $this->last_updated = $data->last_updated;
        $this->quote = new _Quote($data->quote);
        $this->metadata = new Metadata($data->metadata);
    }
    public function __construct2($data, $id)
    {
        $this->name = $data->$id->name;
        $this->symbol = $data->$id->symbol;
        $this->slug = $data->$id->slug;
        $this->num_market_pairs = $data->$id->num_market_pairs;
        $this->date_added = $data->$id->date_added;
        $this->tags = $data->$id->tags;
        $this->max_supply = $data->$id->max_supply;
        $this->circulating_supply = $data->$id->circulating_supply;
        $this->total_supply = $data->$id->total_supply;
        $this->is_active = $data->$id->is_active;
        $this->platform = $data->$id->platform;
        $this->cmc_rank = $data->$id->cmc_rank;
        $this->is_fiat = $data->$id->is_fiat;
        $this->self_reported_circulating_supply = $data->$id->self_reported_circulating_supply;
        $this->self_reported_market_cap = $data->$id->self_reported_market_cap;
        $this->tvl_ratio = $data->$id->tvl_ratio;
        $this->last_updated = $data->$id->last_updated;
        $this->quote = new _Quote($data->$id->quote);
        $this->metadata = new Metadata($data->metadata);
    }
}

class _Quote
{
    public $price;
    public $volume_24h;
    public $volume_change_24h;
    public $percent_change_1h;
    public $percent_change_24h;
    public $percent_change_7d;
    public $percent_change_30d;
    public $market_cap;
    public $market_cap_dominance;
    public $fully_diluted_market_cap;
    public $last_updated;

    public function __construct($quoteData)
    {
        $usdData = $quoteData->USD;
        $this->price = $usdData->price;
        $this->volume_24h = $usdData->volume_24h;
        $this->volume_change_24h = $usdData->volume_change_24h;
        $this->percent_change_1h = $usdData->percent_change_1h;
        $this->percent_change_24h = $usdData->percent_change_24h;
        $this->percent_change_7d = $usdData->percent_change_7d;
        $this->percent_change_30d = $usdData->percent_change_30d;
        $this->market_cap = $usdData->market_cap;
        $this->market_cap_dominance = $usdData->market_cap_dominance;
        $this->fully_diluted_market_cap = $usdData->fully_diluted_market_cap;
        $this->last_updated = $usdData->last_updated;
    }
}