<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds for populating countries.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([

            ['name' => 'Afghanistan', 'abbreviation' => 'AFG'],
            ['name' => 'Aland Islands', 'abbreviation' => 'ALA'],
            ['name' => 'Albania', 'abbreviation' => 'ALB'],
            ['name' => 'Algeria', 'abbreviation' => 'DZA'],
            ['name' => 'American Samoa', 'abbreviation' => 'ASM'],
            ['name' => 'Andorra', 'abbreviation' => 'AND'],
            ['name' => 'Angola', 'abbreviation' => 'AGO'],
            ['name' => 'Anguilla', 'abbreviation' => 'AIA'],
            ['name' => 'Antigua and Barbuda', 'abbreviation' => 'ATG'],
            ['name' => 'Argentina', 'abbreviation' => 'ARG'],
            ['name' => 'Armenia', 'abbreviation' => 'ARM'],
            ['name' => 'Aruba', 'abbreviation' => 'ABW'],
            ['name' => 'Australia', 'abbreviation' => 'AUS'],
            ['name' => 'Austria', 'abbreviation' => 'AUT'],
            ['name' => 'Azerbaijan', 'abbreviation' => 'AZE'],
            ['name' => 'Bahamas', 'abbreviation' => 'BHS'],
            ['name' => 'Bahrain', 'abbreviation' => 'BHR'],
            ['name' => 'Bangladesh', 'abbreviation' => 'BGD'],
            ['name' => 'Barbados', 'abbreviation' => 'BRB'],
            ['name' => 'Belarus', 'abbreviation' => 'BLR'],
            ['name' => 'Belgium', 'abbreviation' => 'BEL'],
            ['name' => 'Belize', 'abbreviation' => 'BLZ'],
            ['name' => 'Benin', 'abbreviation' => 'BEN'],
            ['name' => 'Bermuda', 'abbreviation' => 'BMU'],
            ['name' => 'Bhutan', 'abbreviation' => 'BTN'],
            ['name' => 'Bolivia', 'abbreviation' => 'BOL'],
            ['name' => 'Bosnia and Herzegovina', 'abbreviation' => 'BIH'],
            ['name' => 'Botswana', 'abbreviation' => 'BWA'],
            ['name' => 'Brazil', 'abbreviation' => 'BRA'],
            ['name' => 'British Virgin Islands', 'abbreviation' => 'VGB'],
            ['name' => 'Brunei Darussalam', 'abbreviation' => 'BRN'],
            ['name' => 'Bulgaria', 'abbreviation' => 'BGR'],
            ['name' => 'Burkina Faso', 'abbreviation' => 'BFA'],
            ['name' => 'Burundi', 'abbreviation' => 'BDI'],
            ['name' => 'Cambodia', 'abbreviation' => 'KHM'],
            ['name' => 'Cameroon', 'abbreviation' => 'CMR'],
            ['name' => 'Canada', 'abbreviation' => 'CAN'],
            ['name' => 'Cape Verde', 'abbreviation' => 'CPV'],
            ['name' => 'Cayman Islands', 'abbreviation' => 'CYM'],
            ['name' => 'Central African Republic', 'abbreviation' => 'CAF'],
            ['name' => 'Chad', 'abbreviation' => 'TCD'],
            ['name' => 'Chile', 'abbreviation' => 'CHL'],
            ['name' => 'China', 'abbreviation' => 'CHN'],
            ['name' => 'Colombia', 'abbreviation' => 'COL'],
            ['name' => 'Comoros', 'abbreviation' => 'COM'],
            ['name' => 'Congo', 'abbreviation' => 'COG'],
            ['name' => 'Cook Islands', 'abbreviation' => 'COK'],
            ['name' => 'Costa Rica', 'abbreviation' => 'CRI'],
            ['name' => 'Cote d\'Ivoire', 'abbreviation' => 'CIV'],
            ['name' => 'Croatia', 'abbreviation' => 'HRV'],
            ['name' => 'Cuba', 'abbreviation' => 'CUB'],
            ['name' => 'Cyprus', 'abbreviation' => 'CYP'],
            ['name' => 'Czech Republic', 'abbreviation' => 'CZE'],
            ['name' => 'Democratic Republic of the Congo', 'abbreviation' => 'COD'],
            ['name' => 'Denmark', 'abbreviation' => 'DNK'],
            ['name' => 'Djibouti', 'abbreviation' => 'DJI'],
            ['name' => 'Dominica', 'abbreviation' => 'DMA'],
            ['name' => 'Dominican Republic', 'abbreviation' => 'DOM'],
            ['name' => 'Ecuador', 'abbreviation' => 'ECU'],
            ['name' => 'Egypt', 'abbreviation' => 'EGY'],
            ['name' => 'El Salvador', 'abbreviation' => 'SLV'],
            ['name' => 'Equatorial Guinea', 'abbreviation' => 'GNQ'],
            ['name' => 'Eritrea', 'abbreviation' => 'ERI'],
            ['name' => 'Estonia', 'abbreviation' => 'EST'],
            ['name' => 'Ethiopia', 'abbreviation' => 'ETH'],
            ['name' => 'Faeroe Islands', 'abbreviation' => 'FRO'],
            ['name' => 'Falkland Islands', 'abbreviation' => 'FLK'],
            ['name' => 'Fiji', 'abbreviation' => 'FJI'],
            ['name' => 'Finland', 'abbreviation' => 'FIN'],
            ['name' => 'France', 'abbreviation' => 'FRA'],
            ['name' => 'French Guiana', 'abbreviation' => 'GUF'],
            ['name' => 'French Polynesia', 'abbreviation' => 'PYF'],
            ['name' => 'Gabon', 'abbreviation' => 'GAB'],
            ['name' => 'Gambia', 'abbreviation' => 'GMB'],
            ['name' => 'Georgia', 'abbreviation' => 'GEO'],
            ['name' => 'Germany', 'abbreviation' => 'DEU'],
            ['name' => 'Ghana', 'abbreviation' => 'GHA'],
            ['name' => 'Gibraltar', 'abbreviation' => 'GIB'],
            ['name' => 'Greece', 'abbreviation' => 'GRC'],
            ['name' => 'Greenland', 'abbreviation' => 'GRL'],
            ['name' => 'Grenada', 'abbreviation' => 'GRD'],
            ['name' => 'Guadeloupe', 'abbreviation' => 'GLP'],
            ['name' => 'Guam', 'abbreviation' => 'GUM'],
            ['name' => 'Guatemala', 'abbreviation' => 'GTM'],
            ['name' => 'Guernsey', 'abbreviation' => 'GGY'],
            ['name' => 'Guinea', 'abbreviation' => 'GIN'],
            ['name' => 'Guinea-Bissau', 'abbreviation' => 'GNB'],
            ['name' => 'Guyana', 'abbreviation' => 'GUY'],
            ['name' => 'Haiti', 'abbreviation' => 'HTI'],
            ['name' => 'Holy See', 'abbreviation' => 'VAT'],
            ['name' => 'Honduras', 'abbreviation' => 'HND'],
            ['name' => 'Hong Kong', 'abbreviation' => 'HKG'],
            ['name' => 'Hungary', 'abbreviation' => 'HUN'],
            ['name' => 'Iceland', 'abbreviation' => 'ISL'],
            ['name' => 'India', 'abbreviation' => 'IND'],
            ['name' => 'Indonesia', 'abbreviation' => 'IDN'],
            ['name' => 'Iran', 'abbreviation' => 'IRN'],
            ['name' => 'Iraq', 'abbreviation' => 'IRQ'],
            ['name' => 'Ireland', 'abbreviation' => 'IRL'],
            ['name' => 'Isle of Man', 'abbreviation' => 'IMN'],
            ['name' => 'Israel', 'abbreviation' => 'ISR'],
            ['name' => 'Italy', 'abbreviation' => 'ITA'],
            ['name' => 'Jamaica', 'abbreviation' => 'JAM'],
            ['name' => 'Japan', 'abbreviation' => 'JPN'],
            ['name' => 'Jersey', 'abbreviation' => 'JEY'],
            ['name' => 'Jordan', 'abbreviation' => 'JOR'],
            ['name' => 'Kazakhstan', 'abbreviation' => 'KAZ'],
            ['name' => 'Kenya', 'abbreviation' => 'KEN'],
            ['name' => 'Kiribati', 'abbreviation' => 'KIR'],
            ['name' => 'Kuwait', 'abbreviation' => 'KWT'],
            ['name' => 'Kyrgyzstan', 'abbreviation' => 'KGZ'],
            ['name' => 'Laos', 'abbreviation' => 'LAO'],
            ['name' => 'Latvia', 'abbreviation' => 'LVA'],
            ['name' => 'Lebanon', 'abbreviation' => 'LBN'],
            ['name' => 'Lesotho', 'abbreviation' => 'LSO'],
            ['name' => 'Liberia', 'abbreviation' => 'LBR'],
            ['name' => 'Libyan Arab Jamahiriya', 'abbreviation' => 'LBY'],
            ['name' => 'Liechtenstein', 'abbreviation' => 'LIE'],
            ['name' => 'Lithuania', 'abbreviation' => 'LTU'],
            ['name' => 'Luxembourg', 'abbreviation' => 'LUX'],
            ['name' => 'Macao', 'abbreviation' => 'MAC'],
            ['name' => 'Macedonia', 'abbreviation' => 'MKD'],
            ['name' => 'Madagascar', 'abbreviation' => 'MDG'],
            ['name' => 'Malawi', 'abbreviation' => 'MWI'],
            ['name' => 'Malaysia', 'abbreviation' => 'MYS'],
            ['name' => 'Maldives', 'abbreviation' => 'MDV'],
            ['name' => 'Mali', 'abbreviation' => 'MLI'],
            ['name' => 'Malta', 'abbreviation' => 'MLT'],
            ['name' => 'Marshall Islands', 'abbreviation' => 'MHL'],
            ['name' => 'Martinique', 'abbreviation' => 'MTQ'],
            ['name' => 'Mauritania', 'abbreviation' => 'MRT'],
            ['name' => 'Mauritius', 'abbreviation' => 'MUS'],
            ['name' => 'Mayotte', 'abbreviation' => 'MYT'],
            ['name' => 'Mexico', 'abbreviation' => 'MEX'],
            ['name' => 'Micronesia', 'abbreviation' => 'FSM'],
            ['name' => 'Moldova', 'abbreviation' => 'MDA'],
            ['name' => 'Monaco', 'abbreviation' => 'MCO'],
            ['name' => 'Mongolia', 'abbreviation' => 'MNG'],
            ['name' => 'Montenegro', 'abbreviation' => 'MNE'],
            ['name' => 'Montserrat', 'abbreviation' => 'MSR'],
            ['name' => 'Morocco', 'abbreviation' => 'MAR'],
            ['name' => 'Mozambique', 'abbreviation' => 'MOZ'],
            ['name' => 'Myanmar', 'abbreviation' => 'MMR'],
            ['name' => 'Namibia', 'abbreviation' => 'NAM'],
            ['name' => 'Nauru', 'abbreviation' => 'NRU'],
            ['name' => 'Nepal', 'abbreviation' => 'NPL'],
            ['name' => 'Netherlands', 'abbreviation' => 'NLD'],
            ['name' => 'Netherlands Antilles', 'abbreviation' => 'ANT'],
            ['name' => 'New Caledonia', 'abbreviation' => 'NCL'],
            ['name' => 'New Zealand', 'abbreviation' => 'NZL'],
            ['name' => 'Nicaragua', 'abbreviation' => 'NIC'],
            ['name' => 'Niger', 'abbreviation' => 'NER'],
            ['name' => 'Nigeria', 'abbreviation' => 'NGA'],
            ['name' => 'Niue', 'abbreviation' => 'NIU'],
            ['name' => 'Norfolk Island', 'abbreviation' => 'NFK'],
            ['name' => 'North Korea', 'abbreviation' => 'PRK'],
            ['name' => 'Northern Mariana Islands', 'abbreviation' => 'MNP'],
            ['name' => 'Norway', 'abbreviation' => 'NOR'],
            ['name' => 'Oman', 'abbreviation' => 'OMN'],
            ['name' => 'Pakistan', 'abbreviation' => 'PAK'],
            ['name' => 'Palau', 'abbreviation' => 'PLW'],
            ['name' => 'Palestine', 'abbreviation' => 'PSE'],
            ['name' => 'Panama', 'abbreviation' => 'PAN'],
            ['name' => 'Papua New Guinea', 'abbreviation' => 'PNG'],
            ['name' => 'Paraguay', 'abbreviation' => 'PRY'],
            ['name' => 'Peru', 'abbreviation' => 'PER'],
            ['name' => 'Philippines', 'abbreviation' => 'PHL'],
            ['name' => 'Pitcairn', 'abbreviation' => 'PCN'],
            ['name' => 'Poland', 'abbreviation' => 'POL'],
            ['name' => 'Portugal', 'abbreviation' => 'PRT'],
            ['name' => 'Puerto Rico', 'abbreviation' => 'PRI'],
            ['name' => 'Qatar', 'abbreviation' => 'QAT'],
            ['name' => 'Reunion', 'abbreviation' => 'REU'],
            ['name' => 'Romania', 'abbreviation' => 'ROU'],
            ['name' => 'Russian Federation', 'abbreviation' => 'RUS'],
            ['name' => 'Rwanda', 'abbreviation' => 'RWA'],
            ['name' => 'Saint Helena', 'abbreviation' => 'SHN'],
            ['name' => 'Saint Kitts and Nevis', 'abbreviation' => 'KNA'],
            ['name' => 'Saint Lucia', 'abbreviation' => 'LCA'],
            ['name' => 'Saint Pierre and Miquelon', 'abbreviation' => 'SPM'],
            ['name' => 'Saint Vincent and the Grenadines', 'abbreviation' => 'VCT'],
            ['name' => 'Saint-Barthelemy', 'abbreviation' => 'BLM'],
            ['name' => 'Saint-Martin', 'abbreviation' => 'MAF'],
            ['name' => 'Samoa', 'abbreviation' => 'WSM'],
            ['name' => 'San Marino', 'abbreviation' => 'SMR'],
            ['name' => 'Sao Tome and Principe', 'abbreviation' => 'STP'],
            ['name' => 'Saudi Arabia', 'abbreviation' => 'SAU'],
            ['name' => 'Senegal', 'abbreviation' => 'SEN'],
            ['name' => 'Serbia', 'abbreviation' => 'SRB'],
            ['name' => 'Seychelles', 'abbreviation' => 'SYC'],
            ['name' => 'Sierra Leone', 'abbreviation' => 'SLE'],
            ['name' => 'Singapore', 'abbreviation' => 'SGP'],
            ['name' => 'Slovakia', 'abbreviation' => 'SVK'],
            ['name' => 'Slovenia', 'abbreviation' => 'SVN'],
            ['name' => 'Solomon Islands', 'abbreviation' => 'SLB'],
            ['name' => 'Somalia', 'abbreviation' => 'SOM'],
            ['name' => 'South Africa', 'abbreviation' => 'ZAF'],
            ['name' => 'South Korea', 'abbreviation' => 'KOR'],
            ['name' => 'South Sudan', 'abbreviation' => 'SSD'],
            ['name' => 'Spain', 'abbreviation' => 'ESP'],
            ['name' => 'Sri Lanka', 'abbreviation' => 'LKA'],
            ['name' => 'Sudan', 'abbreviation' => 'SDN'],
            ['name' => 'Suriname', 'abbreviation' => 'SUR'],
            ['name' => 'Svalbard and Jan Mayen Islands', 'abbreviation' => 'SJM'],
            ['name' => 'Swaziland', 'abbreviation' => 'SWZ'],
            ['name' => 'Sweden', 'abbreviation' => 'SWE'],
            ['name' => 'Switzerland', 'abbreviation' => 'CHE'],
            ['name' => 'Syrian Arab Republic', 'abbreviation' => 'SYR'],
            ['name' => 'Tajikistan', 'abbreviation' => 'TJK'],
            ['name' => 'Tanzania', 'abbreviation' => 'TZA'],
            ['name' => 'Thailand', 'abbreviation' => 'THA'],
            ['name' => 'Timor-Leste', 'abbreviation' => 'TLS'],
            ['name' => 'Togo', 'abbreviation' => 'TGO'],
            ['name' => 'Tokelau', 'abbreviation' => 'TKL'],
            ['name' => 'Tonga', 'abbreviation' => 'TON'],
            ['name' => 'Trinidad and Tobago', 'abbreviation' => 'TTO'],
            ['name' => 'Tunisia', 'abbreviation' => 'TUN'],
            ['name' => 'Turkey', 'abbreviation' => 'TUR'],
            ['name' => 'Turkmenistan', 'abbreviation' => 'TKM'],
            ['name' => 'Turks and Caicos Islands', 'abbreviation' => 'TCA'],
            ['name' => 'Tuvalu', 'abbreviation' => 'TUV'],
            ['name' => 'U.S. Virgin Islands', 'abbreviation' => 'VIR'],
            ['name' => 'Uganda', 'abbreviation' => 'UGA'],
            ['name' => 'Ukraine', 'abbreviation' => 'UKR'],
            ['name' => 'United Arab Emirates', 'abbreviation' => 'ARE'],
            ['name' => 'United Kingdom', 'abbreviation' => 'GBR'],
            ['name' => 'United States', 'abbreviation' => 'USA'],
            ['name' => 'Uruguay', 'abbreviation' => 'URY'],
            ['name' => 'Uzbekistan', 'abbreviation' => 'UZB'],
            ['name' => 'Vanuatu', 'abbreviation' => 'VUT'],
            ['name' => 'Venezuela', 'abbreviation' => 'VEN'],
            ['name' => 'Viet Nam', 'abbreviation' => 'VNM'],
            ['name' => 'Wallis and Futuna Islands', 'abbreviation' => 'WLF'],
            ['name' => 'Western Sahara', 'abbreviation' => 'ESH'],
            ['name' => 'Yemen', 'abbreviation' => 'YEM'],
            ['name' => 'Zambia', 'abbreviation' => 'ZMB'],
            ['name' => 'Zimbabwe', 'abbreviation' => 'ZWE']

        ]);
    }
}
