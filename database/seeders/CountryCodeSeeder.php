<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('country_codes')->doesntExist()) {
            $data = $this->data();
            foreach ($data as $item) {
                DB::table('country_codes')->insert($item);
            }
        }
    }

    private function data() :array
    {
        return [
            [
                "name" => "Afghanistan",
                "flag" => "🇦🇫",
                "short_name" => "AF",
                "dial_code" => "+93"
            ],
            [
                "name" => "Åland Islands",
                "flag" => "🇦🇽",
                "short_name" => "AX",
                "dial_code" => "+358"
            ],
            [
                "name" => "Albania",
                "flag" => "🇦🇱",
                "short_name" => "AL",
                "dial_code" => "+355"
            ],
            [
                "name" => "Algeria",
                "flag" => "🇩🇿",
                "short_name" => "DZ",
                "dial_code" => "+213"
            ],
            [
                "name" => "American Samoa",
                "flag" => "🇦🇸",
                "short_name" => "AS",
                "dial_code" => "+1684"
            ],
            [
                "name" => "Andorra",
                "flag" => "🇦🇩",
                "short_name" => "AD",
                "dial_code" => "+376"
            ],
            [
                "name" => "Angola",
                "flag" => "🇦🇴",
                "short_name" => "AO",
                "dial_code" => "+244"
            ],
            [
                "name" => "Anguilla",
                "flag" => "🇦🇮",
                "short_name" => "AI",
                "dial_code" => "+1264"
            ],
            [
                "name" => "Antarctica",
                "flag" => "🇦🇶",
                "short_name" => "AQ",
                "dial_code" => "+672"
            ],
            [
                "name" => "Antigua and Barbuda",
                "flag" => "🇦🇬",
                "short_name" => "AG",
                "dial_code" => "+1268"
            ],
            [
                "name" => "Argentina",
                "flag" => "🇦🇷",
                "short_name" => "AR",
                "dial_code" => "+54"
            ],
            [
                "name" => "Armenia",
                "flag" => "🇦🇲",
                "short_name" => "AM",
                "dial_code" => "+374"
            ],
            [
                "name" => "Aruba",
                "flag" => "🇦🇼",
                "short_name" => "AW",
                "dial_code" => "+297"
            ],
            [
                "name" => "Australia",
                "flag" => "🇦🇺",
                "short_name" => "AU",
                "dial_code" => "+61"
            ],
            [
                "name" => "Austria",
                "flag" => "🇦🇹",
                "short_name" => "AT",
                "dial_code" => "+43"
            ],
            [
                "name" => "Azerbaijan",
                "flag" => "🇦🇿",
                "short_name" => "AZ",
                "dial_code" => "+994"
            ],
            [
                "name" => "Bahamas",
                "flag" => "🇧🇸",
                "short_name" => "BS",
                "dial_code" => "+1242"
            ],
            [
                "name" => "Bahrain",
                "flag" => "🇧🇭",
                "short_name" => "BH",
                "dial_code" => "+973"
            ],
            [
                "name" => "Bangladesh",
                "flag" => "🇧🇩",
                "short_name" => "BD",
                "dial_code" => "+880"
            ],
            [
                "name" => "Barbados",
                "flag" => "🇧🇧",
                "short_name" => "BB",
                "dial_code" => "+1246"
            ],
            [
                "name" => "Belarus",
                "flag" => "🇧🇾",
                "short_name" => "BY",
                "dial_code" => "+375"
            ],
            [
                "name" => "Belgium",
                "flag" => "🇧🇪",
                "short_name" => "BE",
                "dial_code" => "+32"
            ],
            [
                "name" => "Belize",
                "flag" => "🇧🇿",
                "short_name" => "BZ",
                "dial_code" => "+501"
            ],
            [
                "name" => "Benin",
                "flag" => "🇧🇯",
                "short_name" => "BJ",
                "dial_code" => "+229"
            ],
            [
                "name" => "Bermuda",
                "flag" => "🇧🇲",
                "short_name" => "BM",
                "dial_code" => "+1441"
            ],
            [
                "name" => "Bhutan",
                "flag" => "🇧🇹",
                "short_name" => "BT",
                "dial_code" => "+975"
            ],
            [
                "name" => "Bolivia, Plurinational State of bolivia",
                "flag" => "🇧🇴",
                "short_name" => "BO",
                "dial_code" => "+591"
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "flag" => "🇧🇦",
                "short_name" => "BA",
                "dial_code" => "+387"
            ],
            [
                "name" => "Botswana",
                "flag" => "🇧🇼",
                "short_name" => "BW",
                "dial_code" => "+267"
            ],
            [
                "name" => "Bouvet Island",
                "flag" => "🇧🇻",
                "short_name" => "BV",
                "dial_code" => "+47"
            ],
            [
                "name" => "Brazil",
                "flag" => "🇧🇷",
                "short_name" => "BR",
                "dial_code" => "+55"
            ],
            [
                "name" => "British Indian Ocean Territory",
                "flag" => "🇮🇴",
                "short_name" => "IO",
                "dial_code" => "+246"
            ],
            [
                "name" => "Brunei Darussalam",
                "flag" => "🇧🇳",
                "short_name" => "BN",
                "dial_code" => "+673"
            ],
            [
                "name" => "Bulgaria",
                "flag" => "🇧🇬",
                "short_name" => "BG",
                "dial_code" => "+359"
            ],
            [
                "name" => "Burkina Faso",
                "flag" => "🇧🇫",
                "short_name" => "BF",
                "dial_code" => "+226"
            ],
            [
                "name" => "Burundi",
                "flag" => "🇧🇮",
                "short_name" => "BI",
                "dial_code" => "+257"
            ],
            [
                "name" => "Cambodia",
                "flag" => "🇰🇭",
                "short_name" => "KH",
                "dial_code" => "+855"
            ],
            [
                "name" => "Cameroon",
                "flag" => "🇨🇲",
                "short_name" => "CM",
                "dial_code" => "+237"
            ],
            [
                "name" => "Canada",
                "flag" => "🇨🇦",
                "short_name" => "CA",
                "dial_code" => "+1"
            ],
            [
                "name" => "Cape Verde",
                "flag" => "🇨🇻",
                "short_name" => "CV",
                "dial_code" => "+238"
            ],
            [
                "name" => "Cayman Islands",
                "flag" => "🇰🇾",
                "short_name" => "KY",
                "dial_code" => "+345"
            ],
            [
                "name" => "Central African Republic",
                "flag" => "🇨🇫",
                "short_name" => "CF",
                "dial_code" => "+236"
            ],
            [
                "name" => "Chad",
                "flag" => "🇹🇩",
                "short_name" => "TD",
                "dial_code" => "+235"
            ],
            [
                "name" => "Chile",
                "flag" => "🇨🇱",
                "short_name" => "CL",
                "dial_code" => "+56"
            ],
            [
                "name" => "China",
                "flag" => "🇨🇳",
                "short_name" => "CN",
                "dial_code" => "+86"
            ],
            [
                "name" => "Christmas Island",
                "flag" => "🇨🇽",
                "short_name" => "CX",
                "dial_code" => "+61"
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "flag" => "🇨🇨",
                "short_name" => "CC",
                "dial_code" => "+61"
            ],
            [
                "name" => "Colombia",
                "flag" => "🇨🇴",
                "short_name" => "CO",
                "dial_code" => "+57"
            ],
            [
                "name" => "Comoros",
                "flag" => "🇰🇲",
                "short_name" => "KM",
                "dial_code" => "+269"
            ],
            [
                "name" => "Congo",
                "flag" => "🇨🇬",
                "short_name" => "CG",
                "dial_code" => "+242"
            ],
            [
                "name" => "Congo, The Democratic Republic of the Congo",
                "flag" => "🇨🇩",
                "short_name" => "CD",
                "dial_code" => "+243"
            ],
            [
                "name" => "Cook Islands",
                "flag" => "🇨🇰",
                "short_name" => "CK",
                "dial_code" => "+682"
            ],
            [
                "name" => "Costa Rica",
                "flag" => "🇨🇷",
                "short_name" => "CR",
                "dial_code" => "+506"
            ],
            [
                "name" => "Cote d'Ivoire",
                "flag" => "🇨🇮",
                "short_name" => "CI",
                "dial_code" => "+225"
            ],
            [
                "name" => "Croatia",
                "flag" => "🇭🇷",
                "short_name" => "HR",
                "dial_code" => "+385"
            ],
            [
                "name" => "Cuba",
                "flag" => "🇨🇺",
                "short_name" => "CU",
                "dial_code" => "+53"
            ],
            [
                "name" => "Cyprus",
                "flag" => "🇨🇾",
                "short_name" => "CY",
                "dial_code" => "+357"
            ],
            [
                "name" => "Czech Republic",
                "flag" => "🇨🇿",
                "short_name" => "CZ",
                "dial_code" => "+420"
            ],
            [
                "name" => "Denmark",
                "flag" => "🇩🇰",
                "short_name" => "DK",
                "dial_code" => "+45"
            ],
            [
                "name" => "Djibouti",
                "flag" => "🇩🇯",
                "short_name" => "DJ",
                "dial_code" => "+253"
            ],
            [
                "name" => "Dominica",
                "flag" => "🇩🇲",
                "short_name" => "DM",
                "dial_code" => "+1767"
            ],
            [
                "name" => "Dominican Republic",
                "flag" => "🇩🇴",
                "short_name" => "DO",
                "dial_code" => "+1849"
            ],
            [
                "name" => "Ecuador",
                "flag" => "🇪🇨",
                "short_name" => "EC",
                "dial_code" => "+593"
            ],
            [
                "name" => "Egypt",
                "flag" => "🇪🇬",
                "short_name" => "EG",
                "dial_code" => "+20"
            ],
            [
                "name" => "El Salvador",
                "flag" => "🇸🇻",
                "short_name" => "SV",
                "dial_code" => "+503"
            ],
            [
                "name" => "Equatorial Guinea",
                "flag" => "🇬🇶",
                "short_name" => "GQ",
                "dial_code" => "+240"
            ],
            [
                "name" => "Eritrea",
                "flag" => "🇪🇷",
                "short_name" => "ER",
                "dial_code" => "+291"
            ],
            [
                "name" => "Estonia",
                "flag" => "🇪🇪",
                "short_name" => "EE",
                "dial_code" => "+372"
            ],
            [
                "name" => "Ethiopia",
                "flag" => "🇪🇹",
                "short_name" => "ET",
                "dial_code" => "+251"
            ],
            [
                "name" => "Falkland Islands (Malvinas)",
                "flag" => "🇫🇰",
                "short_name" => "FK",
                "dial_code" => "+500"
            ],
            [
                "name" => "Faroe Islands",
                "flag" => "🇫🇴",
                "short_name" => "FO",
                "dial_code" => "+298"
            ],
            [
                "name" => "Fiji",
                "flag" => "🇫🇯",
                "short_name" => "FJ",
                "dial_code" => "+679"
            ],
            [
                "name" => "Finland",
                "flag" => "🇫🇮",
                "short_name" => "FI",
                "dial_code" => "+358"
            ],
            [
                "name" => "France",
                "flag" => "🇫🇷",
                "short_name" => "FR",
                "dial_code" => "+33"
            ],
            [
                "name" => "French Guiana",
                "flag" => "🇬🇫",
                "short_name" => "GF",
                "dial_code" => "+594"
            ],
            [
                "name" => "French Polynesia",
                "flag" => "🇵🇫",
                "short_name" => "PF",
                "dial_code" => "+689"
            ],
            [
                "name" => "French Southern Territories",
                "flag" => "🇹🇫",
                "short_name" => "TF",
                "dial_code" => "+262"
            ],
            [
                "name" => "Gabon",
                "flag" => "🇬🇦",
                "short_name" => "GA",
                "dial_code" => "+241"
            ],
            [
                "name" => "Gambia",
                "flag" => "🇬🇲",
                "short_name" => "GM",
                "dial_code" => "+220"
            ],
            [
                "name" => "Georgia",
                "flag" => "🇬🇪",
                "short_name" => "GE",
                "dial_code" => "+995"
            ],
            [
                "name" => "Germany",
                "flag" => "🇩🇪",
                "short_name" => "DE",
                "dial_code" => "+49"
            ],
            [
                "name" => "Ghana",
                "flag" => "🇬🇭",
                "short_name" => "GH",
                "dial_code" => "+233"
            ],
            [
                "name" => "Gibraltar",
                "flag" => "🇬🇮",
                "short_name" => "GI",
                "dial_code" => "+350"
            ],
            [
                "name" => "Greece",
                "flag" => "🇬🇷",
                "short_name" => "GR",
                "dial_code" => "+30"
            ],
            [
                "name" => "Greenland",
                "flag" => "🇬🇱",
                "short_name" => "GL",
                "dial_code" => "+299"
            ],
            [
                "name" => "Grenada",
                "flag" => "🇬🇩",
                "short_name" => "GD",
                "dial_code" => "+1473"
            ],
            [
                "name" => "Guadeloupe",
                "flag" => "🇬🇵",
                "short_name" => "GP",
                "dial_code" => "+590"
            ],
            [
                "name" => "Guam",
                "flag" => "🇬🇺",
                "short_name" => "GU",
                "dial_code" => "+1671"
            ],
            [
                "name" => "Guatemala",
                "flag" => "🇬🇹",
                "short_name" => "GT",
                "dial_code" => "+502"
            ],
            [
                "name" => "Guernsey",
                "flag" => "🇬🇬",
                "short_name" => "GG",
                "dial_code" => "+44"
            ],
            [
                "name" => "Guinea",
                "flag" => "🇬🇳",
                "short_name" => "GN",
                "dial_code" => "+224"
            ],
            [
                "name" => "Guinea-Bissau",
                "flag" => "🇬🇼",
                "short_name" => "GW",
                "dial_code" => "+245"
            ],
            [
                "name" => "Guyana",
                "flag" => "🇬🇾",
                "short_name" => "GY",
                "dial_code" => "+592"
            ],
            [
                "name" => "Haiti",
                "flag" => "🇭🇹",
                "short_name" => "HT",
                "dial_code" => "+509"
            ],
            [
                "name" => "Heard Island and Mcdonald Islands",
                "flag" => "🇭🇲",
                "short_name" => "HM",
                "dial_code" => "+672"
            ],
            [
                "name" => "Holy See (Vatican City State)",
                "flag" => "🇻🇦",
                "short_name" => "VA",
                "dial_code" => "+379"
            ],
            [
                "name" => "Honduras",
                "flag" => "🇭🇳",
                "short_name" => "HN",
                "dial_code" => "+504"
            ],
            [
                "name" => "Hong Kong",
                "flag" => "🇭🇰",
                "short_name" => "HK",
                "dial_code" => "+852"
            ],
            [
                "name" => "Hungary",
                "flag" => "🇭🇺",
                "short_name" => "HU",
                "dial_code" => "+36"
            ],
            [
                "name" => "Iceland",
                "flag" => "🇮🇸",
                "short_name" => "IS",
                "dial_code" => "+354"
            ],
            [
                "name" => "India",
                "flag" => "🇮🇳",
                "short_name" => "IN",
                "dial_code" => "+91"
            ],
            [
                "name" => "Indonesia",
                "flag" => "🇮🇩",
                "short_name" => "ID",
                "dial_code" => "+62"
            ],
            [
                "name" => "Islamic Republic of Iran",
                "flag" => "🇮🇷",
                "short_name" => "IR",
                "dial_code" => "+98"
            ],
            [
                "name" => "Iraq",
                "flag" => "🇮🇶",
                "short_name" => "IQ",
                "dial_code" => "+964"
            ],
            [
                "name" => "Ireland",
                "flag" => "🇮🇪",
                "short_name" => "IE",
                "dial_code" => "+353"
            ],
            [
                "name" => "Isle of Man",
                "flag" => "🇮🇲",
                "short_name" => "IM",
                "dial_code" => "+44"
            ],
            [
                "name" => "Italy",
                "flag" => "🇮🇹",
                "short_name" => "IT",
                "dial_code" => "+39"
            ],
            [
                "name" => "Jamaica",
                "flag" => "🇯🇲",
                "short_name" => "JM",
                "dial_code" => "+1876"
            ],
            [
                "name" => "Japan",
                "flag" => "🇯🇵",
                "short_name" => "JP",
                "dial_code" => "+81"
            ],
            [
                "name" => "Jersey",
                "flag" => "🇯🇪",
                "short_name" => "JE",
                "dial_code" => "+44"
            ],
            [
                "name" => "Jordan",
                "flag" => "🇯🇴",
                "short_name" => "JO",
                "dial_code" => "+962"
            ],
            [
                "name" => "Kazakhstan",
                "flag" => "🇰🇿",
                "short_name" => "KZ",
                "dial_code" => "+7"
            ],
            [
                "name" => "Kenya",
                "flag" => "🇰🇪",
                "short_name" => "KE",
                "dial_code" => "+254"
            ],
            [
                "name" => "Kiribati",
                "flag" => "🇰🇮",
                "short_name" => "KI",
                "dial_code" => "+686"
            ],
            [
                "name" => "Korea, Democratic People's Republic of Korea",
                "flag" => "🇰🇵",
                "short_name" => "KP",
                "dial_code" => "+850"
            ],
            [
                "name" => "Korea, Republic of South Korea",
                "flag" => "🇰🇷",
                "short_name" => "KR",
                "dial_code" => "+82"
            ],
            [
                "name" => "Kosovo",
                "flag" => "🇽🇰",
                "short_name" => "XK",
                "dial_code" => "+383"
            ],
            [
                "name" => "Kuwait",
                "flag" => "🇰🇼",
                "short_name" => "KW",
                "dial_code" => "+965"
            ],
            [
                "name" => "Kyrgyzstan",
                "flag" => "🇰🇬",
                "short_name" => "KG",
                "dial_code" => "+996"
            ],
            [
                "name" => "Laos",
                "flag" => "🇱🇦",
                "short_name" => "LA",
                "dial_code" => "+856"
            ],
            [
                "name" => "Latvia",
                "flag" => "🇱🇻",
                "short_name" => "LV",
                "dial_code" => "+371"
            ],
            [
                "name" => "Lebanon",
                "flag" => "🇱🇧",
                "short_name" => "LB",
                "dial_code" => "+961"
            ],
            [
                "name" => "Lesotho",
                "flag" => "🇱🇸",
                "short_name" => "LS",
                "dial_code" => "+266"
            ],
            [
                "name" => "Liberia",
                "flag" => "🇱🇷",
                "short_name" => "LR",
                "dial_code" => "+231"
            ],
            [
                "name" => "Libyan Arab Jamahiriya",
                "flag" => "🇱🇾",
                "short_name" => "LY",
                "dial_code" => "+218"
            ],
            [
                "name" => "Liechtenstein",
                "flag" => "🇱🇮",
                "short_name" => "LI",
                "dial_code" => "+423"
            ],
            [
                "name" => "Lithuania",
                "flag" => "🇱🇹",
                "short_name" => "LT",
                "dial_code" => "+370"
            ],
            [
                "name" => "Luxembourg",
                "flag" => "🇱🇺",
                "short_name" => "LU",
                "dial_code" => "+352"
            ],
            [
                "name" => "Macao",
                "flag" => "🇲🇴",
                "short_name" => "MO",
                "dial_code" => "+853"
            ],
            [
                "name" => "Macedonia",
                "flag" => "🇲🇰",
                "short_name" => "MK",
                "dial_code" => "+389"
            ],
            [
                "name" => "Madagascar",
                "flag" => "🇲🇬",
                "short_name" => "MG",
                "dial_code" => "+261"
            ],
            [
                "name" => "Malawi",
                "flag" => "🇲🇼",
                "short_name" => "MW",
                "dial_code" => "+265"
            ],
            [
                "name" => "Malaysia",
                "flag" => "🇲🇾",
                "short_name" => "MY",
                "dial_code" => "+60"
            ],
            [
                "name" => "Maldives",
                "flag" => "🇲🇻",
                "short_name" => "MV",
                "dial_code" => "+960"
            ],
            [
                "name" => "Mali",
                "flag" => "🇲🇱",
                "short_name" => "ML",
                "dial_code" => "+223"
            ],
            [
                "name" => "Malta",
                "flag" => "🇲🇹",
                "short_name" => "MT",
                "dial_code" => "+356"
            ],
            [
                "name" => "Marshall Islands",
                "flag" => "🇲🇭",
                "short_name" => "MH",
                "dial_code" => "+692"
            ],
            [
                "name" => "Martinique",
                "flag" => "🇲🇶",
                "short_name" => "MQ",
                "dial_code" => "+596"
            ],
            [
                "name" => "Mauritania",
                "flag" => "🇲🇷",
                "short_name" => "MR",
                "dial_code" => "+222"
            ],
            [
                "name" => "Mauritius",
                "flag" => "🇲🇺",
                "short_name" => "MU",
                "dial_code" => "+230"
            ],
            [
                "name" => "Mayotte",
                "flag" => "🇾🇹",
                "short_name" => "YT",
                "dial_code" => "+262"
            ],
            [
                "name" => "Mexico",
                "flag" => "🇲🇽",
                "short_name" => "MX",
                "dial_code" => "+52"
            ],
            [
                "name" => "Micronesia, Federated States of Micronesia",
                "flag" => "🇫🇲",
                "short_name" => "FM",
                "dial_code" => "+691"
            ],
            [
                "name" => "Moldova",
                "flag" => "🇲🇩",
                "short_name" => "MD",
                "dial_code" => "+373"
            ],
            [
                "name" => "Monaco",
                "flag" => "🇲🇨",
                "short_name" => "MC",
                "dial_code" => "+377"
            ],
            [
                "name" => "Mongolia",
                "flag" => "🇲🇳",
                "short_name" => "MN",
                "dial_code" => "+976"
            ],
            [
                "name" => "Montenegro",
                "flag" => "🇲🇪",
                "short_name" => "ME",
                "dial_code" => "+382"
            ],
            [
                "name" => "Montserrat",
                "flag" => "🇲🇸",
                "short_name" => "MS",
                "dial_code" => "+1664"
            ],
            [
                "name" => "Morocco",
                "flag" => "🇲🇦",
                "short_name" => "MA",
                "dial_code" => "+212"
            ],
            [
                "name" => "Mozambique",
                "flag" => "🇲🇿",
                "short_name" => "MZ",
                "dial_code" => "+258"
            ],
            [
                "name" => "Myanmar",
                "flag" => "🇲🇲",
                "short_name" => "MM",
                "dial_code" => "+95"
            ],
            [
                "name" => "Namibia",
                "flag" => "🇳🇦",
                "short_name" => "NA",
                "dial_code" => "+264"
            ],
            [
                "name" => "Nauru",
                "flag" => "🇳🇷",
                "short_name" => "NR",
                "dial_code" => "+674"
            ],
            [
                "name" => "Nepal",
                "flag" => "🇳🇵",
                "short_name" => "NP",
                "dial_code" => "+977"
            ],
            [
                "name" => "Netherlands",
                "flag" => "🇳🇱",
                "short_name" => "NL",
                "dial_code" => "+31"
            ],
            [
                "name" => "Netherlands Antilles",
                "flag" => "",
                "short_name" => "AN",
                "dial_code" => "+599"
            ],
            [
                "name" => "New Caledonia",
                "flag" => "🇳🇨",
                "short_name" => "NC",
                "dial_code" => "+687"
            ],
            [
                "name" => "New Zealand",
                "flag" => "🇳🇿",
                "short_name" => "NZ",
                "dial_code" => "+64"
            ],
            [
                "name" => "Nicaragua",
                "flag" => "🇳🇮",
                "short_name" => "NI",
                "dial_code" => "+505"
            ],
            [
                "name" => "Niger",
                "flag" => "🇳🇪",
                "short_name" => "NE",
                "dial_code" => "+227"
            ],
            [
                "name" => "Nigeria",
                "flag" => "🇳🇬",
                "short_name" => "NG",
                "dial_code" => "+234"
            ],
            [
                "name" => "Niue",
                "flag" => "🇳🇺",
                "short_name" => "NU",
                "dial_code" => "+683"
            ],
            [
                "name" => "Norfolk Island",
                "flag" => "🇳🇫",
                "short_name" => "NF",
                "dial_code" => "+672"
            ],
            [
                "name" => "Northern Mariana Islands",
                "flag" => "🇲🇵",
                "short_name" => "MP",
                "dial_code" => "+1670"
            ],
            [
                "name" => "Norway",
                "flag" => "🇳🇴",
                "short_name" => "NO",
                "dial_code" => "+47"
            ],
            [
                "name" => "Oman",
                "flag" => "🇴🇲",
                "short_name" => "OM",
                "dial_code" => "+968"
            ],
            [
                "name" => "Pakistan",
                "flag" => "🇵🇰",
                "short_name" => "PK",
                "dial_code" => "+92"
            ],
            [
                "name" => "Palau",
                "flag" => "🇵🇼",
                "short_name" => "PW",
                "dial_code" => "+680"
            ],
            [
                "name" => "Palestinian Territory, Occupied",
                "flag" => "🇵🇸",
                "short_name" => "PS",
                "dial_code" => "+970"
            ],
            [
                "name" => "Panama",
                "flag" => "🇵🇦",
                "short_name" => "PA",
                "dial_code" => "+507"
            ],
            [
                "name" => "Papua New Guinea",
                "flag" => "🇵🇬",
                "short_name" => "PG",
                "dial_code" => "+675"
            ],
            [
                "name" => "Paraguay",
                "flag" => "🇵🇾",
                "short_name" => "PY",
                "dial_code" => "+595"
            ],
            [
                "name" => "Peru",
                "flag" => "🇵🇪",
                "short_name" => "PE",
                "dial_code" => "+51"
            ],
            [
                "name" => "Philippines",
                "flag" => "🇵🇭",
                "short_name" => "PH",
                "dial_code" => "+63"
            ],
            [
                "name" => "Pitcairn",
                "flag" => "🇵🇳",
                "short_name" => "PN",
                "dial_code" => "+64"
            ],
            [
                "name" => "Poland",
                "flag" => "🇵🇱",
                "short_name" => "PL",
                "dial_code" => "+48"
            ],
            [
                "name" => "Portugal",
                "flag" => "🇵🇹",
                "short_name" => "PT",
                "dial_code" => "+351"
            ],
            [
                "name" => "Puerto Rico",
                "flag" => "🇵🇷",
                "short_name" => "PR",
                "dial_code" => "+1939"
            ],
            [
                "name" => "Qatar",
                "flag" => "🇶🇦",
                "short_name" => "QA",
                "dial_code" => "+974"
            ],
            [
                "name" => "Romania",
                "flag" => "🇷🇴",
                "short_name" => "RO",
                "dial_code" => "+40"
            ],
            [
                "name" => "Russia",
                "flag" => "🇷🇺",
                "short_name" => "RU",
                "dial_code" => "+7"
            ],
            [
                "name" => "Rwanda",
                "flag" => "🇷🇼",
                "short_name" => "RW",
                "dial_code" => "+250"
            ],
            [
                "name" => "Reunion",
                "flag" => "🇷🇪",
                "short_name" => "RE",
                "dial_code" => "+262"
            ],
            [
                "name" => "Saint Barthelemy",
                "flag" => "🇧🇱",
                "short_name" => "BL",
                "dial_code" => "+590"
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan Da Cunha",
                "flag" => "🇸🇭",
                "short_name" => "SH",
                "dial_code" => "+290"
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "flag" => "🇰🇳",
                "short_name" => "KN",
                "dial_code" => "+1869"
            ],
            [
                "name" => "Saint Lucia",
                "flag" => "🇱🇨",
                "short_name" => "LC",
                "dial_code" => "+1758"
            ],
            [
                "name" => "Saint Martin",
                "flag" => "🇲🇫",
                "short_name" => "MF",
                "dial_code" => "+590"
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "flag" => "🇵🇲",
                "short_name" => "PM",
                "dial_code" => "+508"
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "flag" => "🇻🇨",
                "short_name" => "VC",
                "dial_code" => "+1784"
            ],
            [
                "name" => "Samoa",
                "flag" => "🇼🇸",
                "short_name" => "WS",
                "dial_code" => "+685"
            ],
            [
                "name" => "San Marino",
                "flag" => "🇸🇲",
                "short_name" => "SM",
                "dial_code" => "+378"
            ],
            [
                "name" => "Sao Tome and Principe",
                "flag" => "🇸🇹",
                "short_name" => "ST",
                "dial_code" => "+239"
            ],
            [
                "name" => "Saudi Arabia",
                "flag" => "🇸🇦",
                "short_name" => "SA",
                "dial_code" => "+966"
            ],
            [
                "name" => "Senegal",
                "flag" => "🇸🇳",
                "short_name" => "SN",
                "dial_code" => "+221"
            ],
            [
                "name" => "Serbia",
                "flag" => "🇷🇸",
                "short_name" => "RS",
                "dial_code" => "+381"
            ],
            [
                "name" => "Seychelles",
                "flag" => "🇸🇨",
                "short_name" => "SC",
                "dial_code" => "+248"
            ],
            [
                "name" => "Sierra Leone",
                "flag" => "🇸🇱",
                "short_name" => "SL",
                "dial_code" => "+232"
            ],
            [
                "name" => "Singapore",
                "flag" => "🇸🇬",
                "short_name" => "SG",
                "dial_code" => "+65"
            ],
            [
                "name" => "Slovakia",
                "flag" => "🇸🇰",
                "short_name" => "SK",
                "dial_code" => "+421"
            ],
            [
                "name" => "Slovenia",
                "flag" => "🇸🇮",
                "short_name" => "SI",
                "dial_code" => "+386"
            ],
            [
                "name" => "Solomon Islands",
                "flag" => "🇸🇧",
                "short_name" => "SB",
                "dial_code" => "+677"
            ],
            [
                "name" => "Somalia",
                "flag" => "🇸🇴",
                "short_name" => "SO",
                "dial_code" => "+252"
            ],
            [
                "name" => "South Africa",
                "flag" => "🇿🇦",
                "short_name" => "ZA",
                "dial_code" => "+27"
            ],
            [
                "name" => "South Sudan",
                "flag" => "🇸🇸",
                "short_name" => "SS",
                "dial_code" => "+211"
            ],
            [
                "name" => "South Georgia and the South Sandwich Islands",
                "flag" => "🇬🇸",
                "short_name" => "GS",
                "dial_code" => "+500"
            ],
            [
                "name" => "Spain",
                "flag" => "🇪🇸",
                "short_name" => "ES",
                "dial_code" => "+34"
            ],
            [
                "name" => "Sri Lanka",
                "flag" => "🇱🇰",
                "short_name" => "LK",
                "dial_code" => "+94"
            ],
            [
                "name" => "Sudan",
                "flag" => "🇸🇩",
                "short_name" => "SD",
                "dial_code" => "+249"
            ],
            [
                "name" => "Suriname",
                "flag" => "🇸🇷",
                "short_name" => "SR",
                "dial_code" => "+597"
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "flag" => "🇸🇯",
                "short_name" => "SJ",
                "dial_code" => "+47"
            ],
            [
                "name" => "Swaziland",
                "flag" => "🇸🇿",
                "short_name" => "SZ",
                "dial_code" => "+268"
            ],
            [
                "name" => "Sweden",
                "flag" => "🇸🇪",
                "short_name" => "SE",
                "dial_code" => "+46"
            ],
            [
                "name" => "Switzerland",
                "flag" => "🇨🇭",
                "short_name" => "CH",
                "dial_code" => "+41"
            ],
            [
                "name" => "Syrian Arab Republic",
                "flag" => "🇸🇾",
                "short_name" => "SY",
                "dial_code" => "+963"
            ],
            [
                "name" => "Taiwan",
                "flag" => "🇹🇼",
                "short_name" => "TW",
                "dial_code" => "+886"
            ],
            [
                "name" => "Tajikistan",
                "flag" => "🇹🇯",
                "short_name" => "TJ",
                "dial_code" => "+992"
            ],
            [
                "name" => "Tanzania, United Republic of Tanzania",
                "flag" => "🇹🇿",
                "short_name" => "TZ",
                "dial_code" => "+255"
            ],
            [
                "name" => "Thailand",
                "flag" => "🇹🇭",
                "short_name" => "TH",
                "dial_code" => "+66"
            ],
            [
                "name" => "Timor-Leste",
                "flag" => "🇹🇱",
                "short_name" => "TL",
                "dial_code" => "+670"
            ],
            [
                "name" => "Togo",
                "flag" => "🇹🇬",
                "short_name" => "TG",
                "dial_code" => "+228"
            ],
            [
                "name" => "Tokelau",
                "flag" => "🇹🇰",
                "short_name" => "TK",
                "dial_code" => "+690"
            ],
            [
                "name" => "Tonga",
                "flag" => "🇹🇴",
                "short_name" => "TO",
                "dial_code" => "+676"
            ],
            [
                "name" => "Trinidad and Tobago",
                "flag" => "🇹🇹",
                "short_name" => "TT",
                "dial_code" => "+1868"
            ],
            [
                "name" => "Tunisia",
                "flag" => "🇹🇳",
                "short_name" => "TN",
                "dial_code" => "+216"
            ],
            [
                "name" => "Turkey",
                "flag" => "🇹🇷",
                "short_name" => "TR",
                "dial_code" => "+90"
            ],
            [
                "name" => "Turkmenistan",
                "flag" => "🇹🇲",
                "short_name" => "TM",
                "dial_code" => "+993"
            ],
            [
                "name" => "Turks and Caicos Islands",
                "flag" => "🇹🇨",
                "short_name" => "TC",
                "dial_code" => "+1649"
            ],
            [
                "name" => "Tuvalu",
                "flag" => "🇹🇻",
                "short_name" => "TV",
                "dial_code" => "+688"
            ],
            [
                "name" => "Uganda",
                "flag" => "🇺🇬",
                "short_name" => "UG",
                "dial_code" => "+256"
            ],
            [
                "name" => "Ukraine",
                "flag" => "🇺🇦",
                "short_name" => "UA",
                "dial_code" => "+380"
            ],
            [
                "name" => "United Arab Emirates",
                "flag" => "🇦🇪",
                "short_name" => "AE",
                "dial_code" => "+971"
            ],
            [
                "name" => "United Kingdom",
                "flag" => "🇬🇧",
                "short_name" => "GB",
                "dial_code" => "+44"
            ],
            [
                "name" => "United States",
                "flag" => "🇺🇸",
                "short_name" => "US",
                "dial_code" => "+1"
            ],
            [
                "name" => "Uruguay",
                "flag" => "🇺🇾",
                "short_name" => "UY",
                "dial_code" => "+598"
            ],
            [
                "name" => "Uzbekistan",
                "flag" => "🇺🇿",
                "short_name" => "UZ",
                "dial_code" => "+998"
            ],
            [
                "name" => "Vanuatu",
                "flag" => "🇻🇺",
                "short_name" => "VU",
                "dial_code" => "+678"
            ],
            [
                "name" => "Venezuela, Bolivarian Republic of Venezuela",
                "flag" => "🇻🇪",
                "short_name" => "VE",
                "dial_code" => "+58"
            ],
            [
                "name" => "Vietnam",
                "flag" => "🇻🇳",
                "short_name" => "VN",
                "dial_code" => "+84"
            ],
            [
                "name" => "Virgin Islands, British",
                "flag" => "🇻🇬",
                "short_name" => "VG",
                "dial_code" => "+1284"
            ],
            [
                "name" => "Virgin Islands, U.S.",
                "flag" => "🇻🇮",
                "short_name" => "VI",
                "dial_code" => "+1340"
            ],
            [
                "name" => "Wallis and Futuna",
                "flag" => "🇼🇫",
                "short_name" => "WF",
                "dial_code" => "+681"
            ],
            [
                "name" => "Yemen",
                "flag" => "🇾🇪",
                "short_name" => "YE",
                "dial_code" => "+967"
            ],
            [
                "name" => "Zambia",
                "flag" => "🇿🇲",
                "short_name" => "ZM",
                "dial_code" => "+260"
            ],
            [
                "name" => "Zimbabwe",
                "flag" => "🇿🇼",
                "short_name" => "ZW",
                "dial_code" => "+263"
            ]
        ];
    }
}
