<?php
/**
 * Tax Rates Data Source
 * These rates change all the time. Feel free to create pull requests with updates, please include the source!
 *
 * @package Taxes
 * @author Salerno Labs LLC
 */
namespace Taxes;

class Rates
{
    /**
     * Federal Tax Rate Income Brackets
     * @see https://www.forbes.com/sites/robertberger/2017/12/17/the-new-2018-federal-income-tax-brackets-rates/#775e2a1b292a
     * @var array
     */
    public static $federal = [
        'individual' => [
            0 => 0.1,
            9526 => 0.12,
            38701 => 0.22,
            82501 => 0.24,
            157501 => 0.32,
            200001 => 0.35,
            500000 => 0.37,
        ],
        'joint' => [
            0 => 0.1,
            19051 => 0.12,
            77401 => 0.22,
            165001 => 0.24,
            315001 => 0.32,
            400001 => 0.35,
            600000 => 0.37,
        ]
    ];

    /**
     * These were gathered from across many different sites a very long time ago. Update PRs welcome!
     * The primary key is an identifier built from state abbreviation and locality. See ny, nyc, nyy for more info.
     * @var array
     */
    public static $state = [
        "az" => [
            "state" => "Arizona",
            "abbreviation" => "AZ",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "ak" => [
            "state" => "Arkansas",
            "abbreviation" => "AK",
            "locality" => null,
            "stateTaxRate" => 0.07,
            "localityTaxRate" => null,
        ],
        "ca" => [
            "state" => "California",
            "abbreviation" => "CA",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "co" => [
            "state" => "Colorado",
            "abbreviation" => "CO",
            "locality" => null,
            "stateTaxRate" => 0.04,
            "localityTaxRate" => null,
        ],
        "ct" => [
            "state" => "Connecticut",
            "abbreviation" => "CT",
            "locality" => null,
            "stateTaxRate" => 0.065,
            "localityTaxRate" => null,
        ],
        "de" => [
            "state" => "Delaware",
            "abbreviation" => "DE",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "ga" => [
            "state" => "Georgia",
            "abbreviation" => "GA",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "id" => [
            "state" => "Idaho",
            "abbreviation" => "ID",
            "locality" => null,
            "stateTaxRate" => 0.078,
            "localityTaxRate" => null,
        ],
        "il" => [
            "state" => "Illinois",
            "abbreviation" => "IL",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "in" => [
            "state" => "Indiana",
            "abbreviation" => "IN",
            "locality" => null,
            "stateTaxRate" => 0.034,
            "localityTaxRate" => null,
        ],
        "ia" => [
            "state" => "Iowa",
            "abbreviation" => "IA",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "ks" => [
            "state" => "Kansas",
            "abbreviation" => "KS",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "ky" => [
            "state" => "Kentucky",
            "abbreviation" => "KY",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "la" => [
            "state" => "Louisiana",
            "abbreviation" => "LA",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "me" => [
            "state" => "Maine",
            "abbreviation" => "ME",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "md" => [
            "state" => "Maryland",
            "abbreviation" => "MD",
            "locality" => null,
            "stateTaxRate" => 0.0775,
            "localityTaxRate" => null,
        ],
        "ma" => [
            "state" => "Massachusetts",
            "abbreviation" => "MA",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "mi" => [
            "state" => "Michigan",
            "abbreviation" => "MI",
            "locality" => null,
            "stateTaxRate" => 0.0435,
            "localityTaxRate" => null,
        ],
        "mn" => [
            "state" => "Minnesota",
            "abbreviation" => "MN",
            "locality" => null,
            "stateTaxRate" => 0.0725,
            "localityTaxRate" => null,
        ],
        "mo" => [
            "state" => "Missouri",
            "abbreviation" => "MO",
            "locality" => null,
            "stateTaxRate" => 0.04,
            "localityTaxRate" => null,
        ],
        "mt" => [
            "state" => "Montana",
            "abbreviation" => "MT",
            "locality" => null,
            "stateTaxRate" => 0.1,
            "localityTaxRate" => null,
        ],
        "ne" => [
            "state" => "Nebraska",
            "abbreviation" => "NE",
            "locality" => null,
            "stateTaxRate" => 0.05,
            "localityTaxRate" => null,
        ],
        "nh" => [
            "state" => "New Hampshire",
            "abbreviation" => "NH",
            "locality" => null,
            "stateTaxRate" => 0.1,
            "localityTaxRate" => null,
        ],
        "nj" => [
            "state" => "New Jersey",
            "abbreviation" => "NJ",
            "locality" => null,
            "stateTaxRate" => 0.08,
            "localityTaxRate" => null,
        ],
        "nm" => [
            "state" => "New Mexico",
            "abbreviation" => "NM",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "ny" => [
            "state" => "New York",
            "abbreviation" => "NY",
            "locality" => null,
            "stateTaxRate" => 0.0882,
            "localityTaxRate" => null,
        ],
        "nyc" => [
            "state" => "New York",
            "abbreviation" => "NY",
            "locality" => "NYC",
            "stateTaxRate" => 0.0882,
            "localityTaxRate" => 0.03876,
        ],
        "nyy" => [
            "state" => "New York",
            "abbreviation" => "NY",
            "locality" => "Yonkers",
            "stateTaxRate" => 0.0882,
            "localityTaxRate" => 0.01323,
        ],
        "nc" => [
            "state" => "North Carolina",
            "abbreviation" => "NC",
            "locality" => null,
            "stateTaxRate" => 0.07,
            "localityTaxRate" => null,
        ],
        "nd" => [
            "state" => "North Dakota",
            "abbreviation" => "ND",
            "locality" => null,
            "stateTaxRate" => 0.0554,
            "localityTaxRate" => null,
        ],
        "oh" => [
            "state" => "Ohio",
            "abbreviation" => "OH",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "ok" => [
            "state" => "Oklahoma",
            "abbreviation" => "OK",
            "locality" => null,
            "stateTaxRate" => 0.04,
            "localityTaxRate" => null,
        ],
        "or" => [
            "state" => "Oregon",
            "abbreviation" => "OR",
            "locality" => null,
            "stateTaxRate" => 0.08,
            "localityTaxRate" => null,
        ],
        "pa" => [
            "state" => "Pennsylvania",
            "abbreviation" => "PA",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "ri" => [
            "state" => "Rhode Island",
            "abbreviation" => "RI",
            "locality" => null,
            "stateTaxRate" => 0.07,
            "localityTaxRate" => null,
        ],
        "sc" => [
            "state" => "South Carolina",
            "abbreviation" => "SC",
            "locality" => null,
            "stateTaxRate" => 0.07,
            "localityTaxRate" => null,
        ],
        "sd" => [
            "state" => "South Dakota",
            "abbreviation" => "SD",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "tn" => [
            "state" => "Tennessee",
            "abbreviation" => "TN",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "tx" => [
            "state" => "Texas",
            "abbreviation" => "TX",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "vt" => [
            "state" => "Vermont",
            "abbreviation" => "VT",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "va" => [
            "state" => "Virginia",
            "abbreviation" => "VA",
            "locality" => null,
            "stateTaxRate" => 0.04,
            "localityTaxRate" => null,
        ],
        "wa" => [
            "state" => "Washington",
            "abbreviation" => "WA",
            "locality" => null,
            "stateTaxRate" => 0,
            "localityTaxRate" => null,
        ],
        "dc" => [
            "state" => "Washington D.C.",
            "abbreviation" => "DC",
            "locality" => null,
            "stateTaxRate" => 0.085,
            "localityTaxRate" => null,
        ],
        "wv" => [
            "state" => "West Virginia",
            "abbreviation" => "WV",
            "locality" => null,
            "stateTaxRate" => 0.06,
            "localityTaxRate" => null,
        ],
        "wi" => [
            "state" => "Wisconsin",
            "abbreviation" => "WI",
            "locality" => null,
            "stateTaxRate" => 0.0775,
            "localityTaxRate" => null,
        ],
    ];
}