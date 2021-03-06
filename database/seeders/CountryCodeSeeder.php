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
                "flag" => "๐ฆ๐ซ",
                "short_name" => "AF",
                "dial_code" => "+93"
            ],
            [
                "name" => "รland Islands",
                "flag" => "๐ฆ๐ฝ",
                "short_name" => "AX",
                "dial_code" => "+358"
            ],
            [
                "name" => "Albania",
                "flag" => "๐ฆ๐ฑ",
                "short_name" => "AL",
                "dial_code" => "+355"
            ],
            [
                "name" => "Algeria",
                "flag" => "๐ฉ๐ฟ",
                "short_name" => "DZ",
                "dial_code" => "+213"
            ],
            [
                "name" => "American Samoa",
                "flag" => "๐ฆ๐ธ",
                "short_name" => "AS",
                "dial_code" => "+1684"
            ],
            [
                "name" => "Andorra",
                "flag" => "๐ฆ๐ฉ",
                "short_name" => "AD",
                "dial_code" => "+376"
            ],
            [
                "name" => "Angola",
                "flag" => "๐ฆ๐ด",
                "short_name" => "AO",
                "dial_code" => "+244"
            ],
            [
                "name" => "Anguilla",
                "flag" => "๐ฆ๐ฎ",
                "short_name" => "AI",
                "dial_code" => "+1264"
            ],
            [
                "name" => "Antarctica",
                "flag" => "๐ฆ๐ถ",
                "short_name" => "AQ",
                "dial_code" => "+672"
            ],
            [
                "name" => "Antigua and Barbuda",
                "flag" => "๐ฆ๐ฌ",
                "short_name" => "AG",
                "dial_code" => "+1268"
            ],
            [
                "name" => "Argentina",
                "flag" => "๐ฆ๐ท",
                "short_name" => "AR",
                "dial_code" => "+54"
            ],
            [
                "name" => "Armenia",
                "flag" => "๐ฆ๐ฒ",
                "short_name" => "AM",
                "dial_code" => "+374"
            ],
            [
                "name" => "Aruba",
                "flag" => "๐ฆ๐ผ",
                "short_name" => "AW",
                "dial_code" => "+297"
            ],
            [
                "name" => "Australia",
                "flag" => "๐ฆ๐บ",
                "short_name" => "AU",
                "dial_code" => "+61"
            ],
            [
                "name" => "Austria",
                "flag" => "๐ฆ๐น",
                "short_name" => "AT",
                "dial_code" => "+43"
            ],
            [
                "name" => "Azerbaijan",
                "flag" => "๐ฆ๐ฟ",
                "short_name" => "AZ",
                "dial_code" => "+994"
            ],
            [
                "name" => "Bahamas",
                "flag" => "๐ง๐ธ",
                "short_name" => "BS",
                "dial_code" => "+1242"
            ],
            [
                "name" => "Bahrain",
                "flag" => "๐ง๐ญ",
                "short_name" => "BH",
                "dial_code" => "+973"
            ],
            [
                "name" => "Bangladesh",
                "flag" => "๐ง๐ฉ",
                "short_name" => "BD",
                "dial_code" => "+880"
            ],
            [
                "name" => "Barbados",
                "flag" => "๐ง๐ง",
                "short_name" => "BB",
                "dial_code" => "+1246"
            ],
            [
                "name" => "Belarus",
                "flag" => "๐ง๐พ",
                "short_name" => "BY",
                "dial_code" => "+375"
            ],
            [
                "name" => "Belgium",
                "flag" => "๐ง๐ช",
                "short_name" => "BE",
                "dial_code" => "+32"
            ],
            [
                "name" => "Belize",
                "flag" => "๐ง๐ฟ",
                "short_name" => "BZ",
                "dial_code" => "+501"
            ],
            [
                "name" => "Benin",
                "flag" => "๐ง๐ฏ",
                "short_name" => "BJ",
                "dial_code" => "+229"
            ],
            [
                "name" => "Bermuda",
                "flag" => "๐ง๐ฒ",
                "short_name" => "BM",
                "dial_code" => "+1441"
            ],
            [
                "name" => "Bhutan",
                "flag" => "๐ง๐น",
                "short_name" => "BT",
                "dial_code" => "+975"
            ],
            [
                "name" => "Bolivia, Plurinational State of bolivia",
                "flag" => "๐ง๐ด",
                "short_name" => "BO",
                "dial_code" => "+591"
            ],
            [
                "name" => "Bosnia and Herzegovina",
                "flag" => "๐ง๐ฆ",
                "short_name" => "BA",
                "dial_code" => "+387"
            ],
            [
                "name" => "Botswana",
                "flag" => "๐ง๐ผ",
                "short_name" => "BW",
                "dial_code" => "+267"
            ],
            [
                "name" => "Bouvet Island",
                "flag" => "๐ง๐ป",
                "short_name" => "BV",
                "dial_code" => "+47"
            ],
            [
                "name" => "Brazil",
                "flag" => "๐ง๐ท",
                "short_name" => "BR",
                "dial_code" => "+55"
            ],
            [
                "name" => "British Indian Ocean Territory",
                "flag" => "๐ฎ๐ด",
                "short_name" => "IO",
                "dial_code" => "+246"
            ],
            [
                "name" => "Brunei Darussalam",
                "flag" => "๐ง๐ณ",
                "short_name" => "BN",
                "dial_code" => "+673"
            ],
            [
                "name" => "Bulgaria",
                "flag" => "๐ง๐ฌ",
                "short_name" => "BG",
                "dial_code" => "+359"
            ],
            [
                "name" => "Burkina Faso",
                "flag" => "๐ง๐ซ",
                "short_name" => "BF",
                "dial_code" => "+226"
            ],
            [
                "name" => "Burundi",
                "flag" => "๐ง๐ฎ",
                "short_name" => "BI",
                "dial_code" => "+257"
            ],
            [
                "name" => "Cambodia",
                "flag" => "๐ฐ๐ญ",
                "short_name" => "KH",
                "dial_code" => "+855"
            ],
            [
                "name" => "Cameroon",
                "flag" => "๐จ๐ฒ",
                "short_name" => "CM",
                "dial_code" => "+237"
            ],
            [
                "name" => "Canada",
                "flag" => "๐จ๐ฆ",
                "short_name" => "CA",
                "dial_code" => "+1"
            ],
            [
                "name" => "Cape Verde",
                "flag" => "๐จ๐ป",
                "short_name" => "CV",
                "dial_code" => "+238"
            ],
            [
                "name" => "Cayman Islands",
                "flag" => "๐ฐ๐พ",
                "short_name" => "KY",
                "dial_code" => "+345"
            ],
            [
                "name" => "Central African Republic",
                "flag" => "๐จ๐ซ",
                "short_name" => "CF",
                "dial_code" => "+236"
            ],
            [
                "name" => "Chad",
                "flag" => "๐น๐ฉ",
                "short_name" => "TD",
                "dial_code" => "+235"
            ],
            [
                "name" => "Chile",
                "flag" => "๐จ๐ฑ",
                "short_name" => "CL",
                "dial_code" => "+56"
            ],
            [
                "name" => "China",
                "flag" => "๐จ๐ณ",
                "short_name" => "CN",
                "dial_code" => "+86"
            ],
            [
                "name" => "Christmas Island",
                "flag" => "๐จ๐ฝ",
                "short_name" => "CX",
                "dial_code" => "+61"
            ],
            [
                "name" => "Cocos (Keeling) Islands",
                "flag" => "๐จ๐จ",
                "short_name" => "CC",
                "dial_code" => "+61"
            ],
            [
                "name" => "Colombia",
                "flag" => "๐จ๐ด",
                "short_name" => "CO",
                "dial_code" => "+57"
            ],
            [
                "name" => "Comoros",
                "flag" => "๐ฐ๐ฒ",
                "short_name" => "KM",
                "dial_code" => "+269"
            ],
            [
                "name" => "Congo",
                "flag" => "๐จ๐ฌ",
                "short_name" => "CG",
                "dial_code" => "+242"
            ],
            [
                "name" => "Congo, The Democratic Republic of the Congo",
                "flag" => "๐จ๐ฉ",
                "short_name" => "CD",
                "dial_code" => "+243"
            ],
            [
                "name" => "Cook Islands",
                "flag" => "๐จ๐ฐ",
                "short_name" => "CK",
                "dial_code" => "+682"
            ],
            [
                "name" => "Costa Rica",
                "flag" => "๐จ๐ท",
                "short_name" => "CR",
                "dial_code" => "+506"
            ],
            [
                "name" => "Cote d'Ivoire",
                "flag" => "๐จ๐ฎ",
                "short_name" => "CI",
                "dial_code" => "+225"
            ],
            [
                "name" => "Croatia",
                "flag" => "๐ญ๐ท",
                "short_name" => "HR",
                "dial_code" => "+385"
            ],
            [
                "name" => "Cuba",
                "flag" => "๐จ๐บ",
                "short_name" => "CU",
                "dial_code" => "+53"
            ],
            [
                "name" => "Cyprus",
                "flag" => "๐จ๐พ",
                "short_name" => "CY",
                "dial_code" => "+357"
            ],
            [
                "name" => "Czech Republic",
                "flag" => "๐จ๐ฟ",
                "short_name" => "CZ",
                "dial_code" => "+420"
            ],
            [
                "name" => "Denmark",
                "flag" => "๐ฉ๐ฐ",
                "short_name" => "DK",
                "dial_code" => "+45"
            ],
            [
                "name" => "Djibouti",
                "flag" => "๐ฉ๐ฏ",
                "short_name" => "DJ",
                "dial_code" => "+253"
            ],
            [
                "name" => "Dominica",
                "flag" => "๐ฉ๐ฒ",
                "short_name" => "DM",
                "dial_code" => "+1767"
            ],
            [
                "name" => "Dominican Republic",
                "flag" => "๐ฉ๐ด",
                "short_name" => "DO",
                "dial_code" => "+1849"
            ],
            [
                "name" => "Ecuador",
                "flag" => "๐ช๐จ",
                "short_name" => "EC",
                "dial_code" => "+593"
            ],
            [
                "name" => "Egypt",
                "flag" => "๐ช๐ฌ",
                "short_name" => "EG",
                "dial_code" => "+20"
            ],
            [
                "name" => "El Salvador",
                "flag" => "๐ธ๐ป",
                "short_name" => "SV",
                "dial_code" => "+503"
            ],
            [
                "name" => "Equatorial Guinea",
                "flag" => "๐ฌ๐ถ",
                "short_name" => "GQ",
                "dial_code" => "+240"
            ],
            [
                "name" => "Eritrea",
                "flag" => "๐ช๐ท",
                "short_name" => "ER",
                "dial_code" => "+291"
            ],
            [
                "name" => "Estonia",
                "flag" => "๐ช๐ช",
                "short_name" => "EE",
                "dial_code" => "+372"
            ],
            [
                "name" => "Ethiopia",
                "flag" => "๐ช๐น",
                "short_name" => "ET",
                "dial_code" => "+251"
            ],
            [
                "name" => "Falkland Islands (Malvinas)",
                "flag" => "๐ซ๐ฐ",
                "short_name" => "FK",
                "dial_code" => "+500"
            ],
            [
                "name" => "Faroe Islands",
                "flag" => "๐ซ๐ด",
                "short_name" => "FO",
                "dial_code" => "+298"
            ],
            [
                "name" => "Fiji",
                "flag" => "๐ซ๐ฏ",
                "short_name" => "FJ",
                "dial_code" => "+679"
            ],
            [
                "name" => "Finland",
                "flag" => "๐ซ๐ฎ",
                "short_name" => "FI",
                "dial_code" => "+358"
            ],
            [
                "name" => "France",
                "flag" => "๐ซ๐ท",
                "short_name" => "FR",
                "dial_code" => "+33"
            ],
            [
                "name" => "French Guiana",
                "flag" => "๐ฌ๐ซ",
                "short_name" => "GF",
                "dial_code" => "+594"
            ],
            [
                "name" => "French Polynesia",
                "flag" => "๐ต๐ซ",
                "short_name" => "PF",
                "dial_code" => "+689"
            ],
            [
                "name" => "French Southern Territories",
                "flag" => "๐น๐ซ",
                "short_name" => "TF",
                "dial_code" => "+262"
            ],
            [
                "name" => "Gabon",
                "flag" => "๐ฌ๐ฆ",
                "short_name" => "GA",
                "dial_code" => "+241"
            ],
            [
                "name" => "Gambia",
                "flag" => "๐ฌ๐ฒ",
                "short_name" => "GM",
                "dial_code" => "+220"
            ],
            [
                "name" => "Georgia",
                "flag" => "๐ฌ๐ช",
                "short_name" => "GE",
                "dial_code" => "+995"
            ],
            [
                "name" => "Germany",
                "flag" => "๐ฉ๐ช",
                "short_name" => "DE",
                "dial_code" => "+49"
            ],
            [
                "name" => "Ghana",
                "flag" => "๐ฌ๐ญ",
                "short_name" => "GH",
                "dial_code" => "+233"
            ],
            [
                "name" => "Gibraltar",
                "flag" => "๐ฌ๐ฎ",
                "short_name" => "GI",
                "dial_code" => "+350"
            ],
            [
                "name" => "Greece",
                "flag" => "๐ฌ๐ท",
                "short_name" => "GR",
                "dial_code" => "+30"
            ],
            [
                "name" => "Greenland",
                "flag" => "๐ฌ๐ฑ",
                "short_name" => "GL",
                "dial_code" => "+299"
            ],
            [
                "name" => "Grenada",
                "flag" => "๐ฌ๐ฉ",
                "short_name" => "GD",
                "dial_code" => "+1473"
            ],
            [
                "name" => "Guadeloupe",
                "flag" => "๐ฌ๐ต",
                "short_name" => "GP",
                "dial_code" => "+590"
            ],
            [
                "name" => "Guam",
                "flag" => "๐ฌ๐บ",
                "short_name" => "GU",
                "dial_code" => "+1671"
            ],
            [
                "name" => "Guatemala",
                "flag" => "๐ฌ๐น",
                "short_name" => "GT",
                "dial_code" => "+502"
            ],
            [
                "name" => "Guernsey",
                "flag" => "๐ฌ๐ฌ",
                "short_name" => "GG",
                "dial_code" => "+44"
            ],
            [
                "name" => "Guinea",
                "flag" => "๐ฌ๐ณ",
                "short_name" => "GN",
                "dial_code" => "+224"
            ],
            [
                "name" => "Guinea-Bissau",
                "flag" => "๐ฌ๐ผ",
                "short_name" => "GW",
                "dial_code" => "+245"
            ],
            [
                "name" => "Guyana",
                "flag" => "๐ฌ๐พ",
                "short_name" => "GY",
                "dial_code" => "+592"
            ],
            [
                "name" => "Haiti",
                "flag" => "๐ญ๐น",
                "short_name" => "HT",
                "dial_code" => "+509"
            ],
            [
                "name" => "Heard Island and Mcdonald Islands",
                "flag" => "๐ญ๐ฒ",
                "short_name" => "HM",
                "dial_code" => "+672"
            ],
            [
                "name" => "Holy See (Vatican City State)",
                "flag" => "๐ป๐ฆ",
                "short_name" => "VA",
                "dial_code" => "+379"
            ],
            [
                "name" => "Honduras",
                "flag" => "๐ญ๐ณ",
                "short_name" => "HN",
                "dial_code" => "+504"
            ],
            [
                "name" => "Hong Kong",
                "flag" => "๐ญ๐ฐ",
                "short_name" => "HK",
                "dial_code" => "+852"
            ],
            [
                "name" => "Hungary",
                "flag" => "๐ญ๐บ",
                "short_name" => "HU",
                "dial_code" => "+36"
            ],
            [
                "name" => "Iceland",
                "flag" => "๐ฎ๐ธ",
                "short_name" => "IS",
                "dial_code" => "+354"
            ],
            [
                "name" => "India",
                "flag" => "๐ฎ๐ณ",
                "short_name" => "IN",
                "dial_code" => "+91"
            ],
            [
                "name" => "Indonesia",
                "flag" => "๐ฎ๐ฉ",
                "short_name" => "ID",
                "dial_code" => "+62"
            ],
            [
                "name" => "Islamic Republic of Iran",
                "flag" => "๐ฎ๐ท",
                "short_name" => "IR",
                "dial_code" => "+98"
            ],
            [
                "name" => "Iraq",
                "flag" => "๐ฎ๐ถ",
                "short_name" => "IQ",
                "dial_code" => "+964"
            ],
            [
                "name" => "Ireland",
                "flag" => "๐ฎ๐ช",
                "short_name" => "IE",
                "dial_code" => "+353"
            ],
            [
                "name" => "Isle of Man",
                "flag" => "๐ฎ๐ฒ",
                "short_name" => "IM",
                "dial_code" => "+44"
            ],
            [
                "name" => "Italy",
                "flag" => "๐ฎ๐น",
                "short_name" => "IT",
                "dial_code" => "+39"
            ],
            [
                "name" => "Jamaica",
                "flag" => "๐ฏ๐ฒ",
                "short_name" => "JM",
                "dial_code" => "+1876"
            ],
            [
                "name" => "Japan",
                "flag" => "๐ฏ๐ต",
                "short_name" => "JP",
                "dial_code" => "+81"
            ],
            [
                "name" => "Jersey",
                "flag" => "๐ฏ๐ช",
                "short_name" => "JE",
                "dial_code" => "+44"
            ],
            [
                "name" => "Jordan",
                "flag" => "๐ฏ๐ด",
                "short_name" => "JO",
                "dial_code" => "+962"
            ],
            [
                "name" => "Kazakhstan",
                "flag" => "๐ฐ๐ฟ",
                "short_name" => "KZ",
                "dial_code" => "+7"
            ],
            [
                "name" => "Kenya",
                "flag" => "๐ฐ๐ช",
                "short_name" => "KE",
                "dial_code" => "+254"
            ],
            [
                "name" => "Kiribati",
                "flag" => "๐ฐ๐ฎ",
                "short_name" => "KI",
                "dial_code" => "+686"
            ],
            [
                "name" => "Korea, Democratic People's Republic of Korea",
                "flag" => "๐ฐ๐ต",
                "short_name" => "KP",
                "dial_code" => "+850"
            ],
            [
                "name" => "Korea, Republic of South Korea",
                "flag" => "๐ฐ๐ท",
                "short_name" => "KR",
                "dial_code" => "+82"
            ],
            [
                "name" => "Kosovo",
                "flag" => "๐ฝ๐ฐ",
                "short_name" => "XK",
                "dial_code" => "+383"
            ],
            [
                "name" => "Kuwait",
                "flag" => "๐ฐ๐ผ",
                "short_name" => "KW",
                "dial_code" => "+965"
            ],
            [
                "name" => "Kyrgyzstan",
                "flag" => "๐ฐ๐ฌ",
                "short_name" => "KG",
                "dial_code" => "+996"
            ],
            [
                "name" => "Laos",
                "flag" => "๐ฑ๐ฆ",
                "short_name" => "LA",
                "dial_code" => "+856"
            ],
            [
                "name" => "Latvia",
                "flag" => "๐ฑ๐ป",
                "short_name" => "LV",
                "dial_code" => "+371"
            ],
            [
                "name" => "Lebanon",
                "flag" => "๐ฑ๐ง",
                "short_name" => "LB",
                "dial_code" => "+961"
            ],
            [
                "name" => "Lesotho",
                "flag" => "๐ฑ๐ธ",
                "short_name" => "LS",
                "dial_code" => "+266"
            ],
            [
                "name" => "Liberia",
                "flag" => "๐ฑ๐ท",
                "short_name" => "LR",
                "dial_code" => "+231"
            ],
            [
                "name" => "Libyan Arab Jamahiriya",
                "flag" => "๐ฑ๐พ",
                "short_name" => "LY",
                "dial_code" => "+218"
            ],
            [
                "name" => "Liechtenstein",
                "flag" => "๐ฑ๐ฎ",
                "short_name" => "LI",
                "dial_code" => "+423"
            ],
            [
                "name" => "Lithuania",
                "flag" => "๐ฑ๐น",
                "short_name" => "LT",
                "dial_code" => "+370"
            ],
            [
                "name" => "Luxembourg",
                "flag" => "๐ฑ๐บ",
                "short_name" => "LU",
                "dial_code" => "+352"
            ],
            [
                "name" => "Macao",
                "flag" => "๐ฒ๐ด",
                "short_name" => "MO",
                "dial_code" => "+853"
            ],
            [
                "name" => "Macedonia",
                "flag" => "๐ฒ๐ฐ",
                "short_name" => "MK",
                "dial_code" => "+389"
            ],
            [
                "name" => "Madagascar",
                "flag" => "๐ฒ๐ฌ",
                "short_name" => "MG",
                "dial_code" => "+261"
            ],
            [
                "name" => "Malawi",
                "flag" => "๐ฒ๐ผ",
                "short_name" => "MW",
                "dial_code" => "+265"
            ],
            [
                "name" => "Malaysia",
                "flag" => "๐ฒ๐พ",
                "short_name" => "MY",
                "dial_code" => "+60"
            ],
            [
                "name" => "Maldives",
                "flag" => "๐ฒ๐ป",
                "short_name" => "MV",
                "dial_code" => "+960"
            ],
            [
                "name" => "Mali",
                "flag" => "๐ฒ๐ฑ",
                "short_name" => "ML",
                "dial_code" => "+223"
            ],
            [
                "name" => "Malta",
                "flag" => "๐ฒ๐น",
                "short_name" => "MT",
                "dial_code" => "+356"
            ],
            [
                "name" => "Marshall Islands",
                "flag" => "๐ฒ๐ญ",
                "short_name" => "MH",
                "dial_code" => "+692"
            ],
            [
                "name" => "Martinique",
                "flag" => "๐ฒ๐ถ",
                "short_name" => "MQ",
                "dial_code" => "+596"
            ],
            [
                "name" => "Mauritania",
                "flag" => "๐ฒ๐ท",
                "short_name" => "MR",
                "dial_code" => "+222"
            ],
            [
                "name" => "Mauritius",
                "flag" => "๐ฒ๐บ",
                "short_name" => "MU",
                "dial_code" => "+230"
            ],
            [
                "name" => "Mayotte",
                "flag" => "๐พ๐น",
                "short_name" => "YT",
                "dial_code" => "+262"
            ],
            [
                "name" => "Mexico",
                "flag" => "๐ฒ๐ฝ",
                "short_name" => "MX",
                "dial_code" => "+52"
            ],
            [
                "name" => "Micronesia, Federated States of Micronesia",
                "flag" => "๐ซ๐ฒ",
                "short_name" => "FM",
                "dial_code" => "+691"
            ],
            [
                "name" => "Moldova",
                "flag" => "๐ฒ๐ฉ",
                "short_name" => "MD",
                "dial_code" => "+373"
            ],
            [
                "name" => "Monaco",
                "flag" => "๐ฒ๐จ",
                "short_name" => "MC",
                "dial_code" => "+377"
            ],
            [
                "name" => "Mongolia",
                "flag" => "๐ฒ๐ณ",
                "short_name" => "MN",
                "dial_code" => "+976"
            ],
            [
                "name" => "Montenegro",
                "flag" => "๐ฒ๐ช",
                "short_name" => "ME",
                "dial_code" => "+382"
            ],
            [
                "name" => "Montserrat",
                "flag" => "๐ฒ๐ธ",
                "short_name" => "MS",
                "dial_code" => "+1664"
            ],
            [
                "name" => "Morocco",
                "flag" => "๐ฒ๐ฆ",
                "short_name" => "MA",
                "dial_code" => "+212"
            ],
            [
                "name" => "Mozambique",
                "flag" => "๐ฒ๐ฟ",
                "short_name" => "MZ",
                "dial_code" => "+258"
            ],
            [
                "name" => "Myanmar",
                "flag" => "๐ฒ๐ฒ",
                "short_name" => "MM",
                "dial_code" => "+95"
            ],
            [
                "name" => "Namibia",
                "flag" => "๐ณ๐ฆ",
                "short_name" => "NA",
                "dial_code" => "+264"
            ],
            [
                "name" => "Nauru",
                "flag" => "๐ณ๐ท",
                "short_name" => "NR",
                "dial_code" => "+674"
            ],
            [
                "name" => "Nepal",
                "flag" => "๐ณ๐ต",
                "short_name" => "NP",
                "dial_code" => "+977"
            ],
            [
                "name" => "Netherlands",
                "flag" => "๐ณ๐ฑ",
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
                "flag" => "๐ณ๐จ",
                "short_name" => "NC",
                "dial_code" => "+687"
            ],
            [
                "name" => "New Zealand",
                "flag" => "๐ณ๐ฟ",
                "short_name" => "NZ",
                "dial_code" => "+64"
            ],
            [
                "name" => "Nicaragua",
                "flag" => "๐ณ๐ฎ",
                "short_name" => "NI",
                "dial_code" => "+505"
            ],
            [
                "name" => "Niger",
                "flag" => "๐ณ๐ช",
                "short_name" => "NE",
                "dial_code" => "+227"
            ],
            [
                "name" => "Nigeria",
                "flag" => "๐ณ๐ฌ",
                "short_name" => "NG",
                "dial_code" => "+234"
            ],
            [
                "name" => "Niue",
                "flag" => "๐ณ๐บ",
                "short_name" => "NU",
                "dial_code" => "+683"
            ],
            [
                "name" => "Norfolk Island",
                "flag" => "๐ณ๐ซ",
                "short_name" => "NF",
                "dial_code" => "+672"
            ],
            [
                "name" => "Northern Mariana Islands",
                "flag" => "๐ฒ๐ต",
                "short_name" => "MP",
                "dial_code" => "+1670"
            ],
            [
                "name" => "Norway",
                "flag" => "๐ณ๐ด",
                "short_name" => "NO",
                "dial_code" => "+47"
            ],
            [
                "name" => "Oman",
                "flag" => "๐ด๐ฒ",
                "short_name" => "OM",
                "dial_code" => "+968"
            ],
            [
                "name" => "Pakistan",
                "flag" => "๐ต๐ฐ",
                "short_name" => "PK",
                "dial_code" => "+92"
            ],
            [
                "name" => "Palau",
                "flag" => "๐ต๐ผ",
                "short_name" => "PW",
                "dial_code" => "+680"
            ],
            [
                "name" => "Palestinian Territory, Occupied",
                "flag" => "๐ต๐ธ",
                "short_name" => "PS",
                "dial_code" => "+970"
            ],
            [
                "name" => "Panama",
                "flag" => "๐ต๐ฆ",
                "short_name" => "PA",
                "dial_code" => "+507"
            ],
            [
                "name" => "Papua New Guinea",
                "flag" => "๐ต๐ฌ",
                "short_name" => "PG",
                "dial_code" => "+675"
            ],
            [
                "name" => "Paraguay",
                "flag" => "๐ต๐พ",
                "short_name" => "PY",
                "dial_code" => "+595"
            ],
            [
                "name" => "Peru",
                "flag" => "๐ต๐ช",
                "short_name" => "PE",
                "dial_code" => "+51"
            ],
            [
                "name" => "Philippines",
                "flag" => "๐ต๐ญ",
                "short_name" => "PH",
                "dial_code" => "+63"
            ],
            [
                "name" => "Pitcairn",
                "flag" => "๐ต๐ณ",
                "short_name" => "PN",
                "dial_code" => "+64"
            ],
            [
                "name" => "Poland",
                "flag" => "๐ต๐ฑ",
                "short_name" => "PL",
                "dial_code" => "+48"
            ],
            [
                "name" => "Portugal",
                "flag" => "๐ต๐น",
                "short_name" => "PT",
                "dial_code" => "+351"
            ],
            [
                "name" => "Puerto Rico",
                "flag" => "๐ต๐ท",
                "short_name" => "PR",
                "dial_code" => "+1939"
            ],
            [
                "name" => "Qatar",
                "flag" => "๐ถ๐ฆ",
                "short_name" => "QA",
                "dial_code" => "+974"
            ],
            [
                "name" => "Romania",
                "flag" => "๐ท๐ด",
                "short_name" => "RO",
                "dial_code" => "+40"
            ],
            [
                "name" => "Russia",
                "flag" => "๐ท๐บ",
                "short_name" => "RU",
                "dial_code" => "+7"
            ],
            [
                "name" => "Rwanda",
                "flag" => "๐ท๐ผ",
                "short_name" => "RW",
                "dial_code" => "+250"
            ],
            [
                "name" => "Reunion",
                "flag" => "๐ท๐ช",
                "short_name" => "RE",
                "dial_code" => "+262"
            ],
            [
                "name" => "Saint Barthelemy",
                "flag" => "๐ง๐ฑ",
                "short_name" => "BL",
                "dial_code" => "+590"
            ],
            [
                "name" => "Saint Helena, Ascension and Tristan Da Cunha",
                "flag" => "๐ธ๐ญ",
                "short_name" => "SH",
                "dial_code" => "+290"
            ],
            [
                "name" => "Saint Kitts and Nevis",
                "flag" => "๐ฐ๐ณ",
                "short_name" => "KN",
                "dial_code" => "+1869"
            ],
            [
                "name" => "Saint Lucia",
                "flag" => "๐ฑ๐จ",
                "short_name" => "LC",
                "dial_code" => "+1758"
            ],
            [
                "name" => "Saint Martin",
                "flag" => "๐ฒ๐ซ",
                "short_name" => "MF",
                "dial_code" => "+590"
            ],
            [
                "name" => "Saint Pierre and Miquelon",
                "flag" => "๐ต๐ฒ",
                "short_name" => "PM",
                "dial_code" => "+508"
            ],
            [
                "name" => "Saint Vincent and the Grenadines",
                "flag" => "๐ป๐จ",
                "short_name" => "VC",
                "dial_code" => "+1784"
            ],
            [
                "name" => "Samoa",
                "flag" => "๐ผ๐ธ",
                "short_name" => "WS",
                "dial_code" => "+685"
            ],
            [
                "name" => "San Marino",
                "flag" => "๐ธ๐ฒ",
                "short_name" => "SM",
                "dial_code" => "+378"
            ],
            [
                "name" => "Sao Tome and Principe",
                "flag" => "๐ธ๐น",
                "short_name" => "ST",
                "dial_code" => "+239"
            ],
            [
                "name" => "Saudi Arabia",
                "flag" => "๐ธ๐ฆ",
                "short_name" => "SA",
                "dial_code" => "+966"
            ],
            [
                "name" => "Senegal",
                "flag" => "๐ธ๐ณ",
                "short_name" => "SN",
                "dial_code" => "+221"
            ],
            [
                "name" => "Serbia",
                "flag" => "๐ท๐ธ",
                "short_name" => "RS",
                "dial_code" => "+381"
            ],
            [
                "name" => "Seychelles",
                "flag" => "๐ธ๐จ",
                "short_name" => "SC",
                "dial_code" => "+248"
            ],
            [
                "name" => "Sierra Leone",
                "flag" => "๐ธ๐ฑ",
                "short_name" => "SL",
                "dial_code" => "+232"
            ],
            [
                "name" => "Singapore",
                "flag" => "๐ธ๐ฌ",
                "short_name" => "SG",
                "dial_code" => "+65"
            ],
            [
                "name" => "Slovakia",
                "flag" => "๐ธ๐ฐ",
                "short_name" => "SK",
                "dial_code" => "+421"
            ],
            [
                "name" => "Slovenia",
                "flag" => "๐ธ๐ฎ",
                "short_name" => "SI",
                "dial_code" => "+386"
            ],
            [
                "name" => "Solomon Islands",
                "flag" => "๐ธ๐ง",
                "short_name" => "SB",
                "dial_code" => "+677"
            ],
            [
                "name" => "Somalia",
                "flag" => "๐ธ๐ด",
                "short_name" => "SO",
                "dial_code" => "+252"
            ],
            [
                "name" => "South Africa",
                "flag" => "๐ฟ๐ฆ",
                "short_name" => "ZA",
                "dial_code" => "+27"
            ],
            [
                "name" => "South Sudan",
                "flag" => "๐ธ๐ธ",
                "short_name" => "SS",
                "dial_code" => "+211"
            ],
            [
                "name" => "South Georgia and the South Sandwich Islands",
                "flag" => "๐ฌ๐ธ",
                "short_name" => "GS",
                "dial_code" => "+500"
            ],
            [
                "name" => "Spain",
                "flag" => "๐ช๐ธ",
                "short_name" => "ES",
                "dial_code" => "+34"
            ],
            [
                "name" => "Sri Lanka",
                "flag" => "๐ฑ๐ฐ",
                "short_name" => "LK",
                "dial_code" => "+94"
            ],
            [
                "name" => "Sudan",
                "flag" => "๐ธ๐ฉ",
                "short_name" => "SD",
                "dial_code" => "+249"
            ],
            [
                "name" => "Suriname",
                "flag" => "๐ธ๐ท",
                "short_name" => "SR",
                "dial_code" => "+597"
            ],
            [
                "name" => "Svalbard and Jan Mayen",
                "flag" => "๐ธ๐ฏ",
                "short_name" => "SJ",
                "dial_code" => "+47"
            ],
            [
                "name" => "Swaziland",
                "flag" => "๐ธ๐ฟ",
                "short_name" => "SZ",
                "dial_code" => "+268"
            ],
            [
                "name" => "Sweden",
                "flag" => "๐ธ๐ช",
                "short_name" => "SE",
                "dial_code" => "+46"
            ],
            [
                "name" => "Switzerland",
                "flag" => "๐จ๐ญ",
                "short_name" => "CH",
                "dial_code" => "+41"
            ],
            [
                "name" => "Syrian Arab Republic",
                "flag" => "๐ธ๐พ",
                "short_name" => "SY",
                "dial_code" => "+963"
            ],
            [
                "name" => "Taiwan",
                "flag" => "๐น๐ผ",
                "short_name" => "TW",
                "dial_code" => "+886"
            ],
            [
                "name" => "Tajikistan",
                "flag" => "๐น๐ฏ",
                "short_name" => "TJ",
                "dial_code" => "+992"
            ],
            [
                "name" => "Tanzania, United Republic of Tanzania",
                "flag" => "๐น๐ฟ",
                "short_name" => "TZ",
                "dial_code" => "+255"
            ],
            [
                "name" => "Thailand",
                "flag" => "๐น๐ญ",
                "short_name" => "TH",
                "dial_code" => "+66"
            ],
            [
                "name" => "Timor-Leste",
                "flag" => "๐น๐ฑ",
                "short_name" => "TL",
                "dial_code" => "+670"
            ],
            [
                "name" => "Togo",
                "flag" => "๐น๐ฌ",
                "short_name" => "TG",
                "dial_code" => "+228"
            ],
            [
                "name" => "Tokelau",
                "flag" => "๐น๐ฐ",
                "short_name" => "TK",
                "dial_code" => "+690"
            ],
            [
                "name" => "Tonga",
                "flag" => "๐น๐ด",
                "short_name" => "TO",
                "dial_code" => "+676"
            ],
            [
                "name" => "Trinidad and Tobago",
                "flag" => "๐น๐น",
                "short_name" => "TT",
                "dial_code" => "+1868"
            ],
            [
                "name" => "Tunisia",
                "flag" => "๐น๐ณ",
                "short_name" => "TN",
                "dial_code" => "+216"
            ],
            [
                "name" => "Turkey",
                "flag" => "๐น๐ท",
                "short_name" => "TR",
                "dial_code" => "+90"
            ],
            [
                "name" => "Turkmenistan",
                "flag" => "๐น๐ฒ",
                "short_name" => "TM",
                "dial_code" => "+993"
            ],
            [
                "name" => "Turks and Caicos Islands",
                "flag" => "๐น๐จ",
                "short_name" => "TC",
                "dial_code" => "+1649"
            ],
            [
                "name" => "Tuvalu",
                "flag" => "๐น๐ป",
                "short_name" => "TV",
                "dial_code" => "+688"
            ],
            [
                "name" => "Uganda",
                "flag" => "๐บ๐ฌ",
                "short_name" => "UG",
                "dial_code" => "+256"
            ],
            [
                "name" => "Ukraine",
                "flag" => "๐บ๐ฆ",
                "short_name" => "UA",
                "dial_code" => "+380"
            ],
            [
                "name" => "United Arab Emirates",
                "flag" => "๐ฆ๐ช",
                "short_name" => "AE",
                "dial_code" => "+971"
            ],
            [
                "name" => "United Kingdom",
                "flag" => "๐ฌ๐ง",
                "short_name" => "GB",
                "dial_code" => "+44"
            ],
            [
                "name" => "United States",
                "flag" => "๐บ๐ธ",
                "short_name" => "US",
                "dial_code" => "+1"
            ],
            [
                "name" => "Uruguay",
                "flag" => "๐บ๐พ",
                "short_name" => "UY",
                "dial_code" => "+598"
            ],
            [
                "name" => "Uzbekistan",
                "flag" => "๐บ๐ฟ",
                "short_name" => "UZ",
                "dial_code" => "+998"
            ],
            [
                "name" => "Vanuatu",
                "flag" => "๐ป๐บ",
                "short_name" => "VU",
                "dial_code" => "+678"
            ],
            [
                "name" => "Venezuela, Bolivarian Republic of Venezuela",
                "flag" => "๐ป๐ช",
                "short_name" => "VE",
                "dial_code" => "+58"
            ],
            [
                "name" => "Vietnam",
                "flag" => "๐ป๐ณ",
                "short_name" => "VN",
                "dial_code" => "+84"
            ],
            [
                "name" => "Virgin Islands, British",
                "flag" => "๐ป๐ฌ",
                "short_name" => "VG",
                "dial_code" => "+1284"
            ],
            [
                "name" => "Virgin Islands, U.S.",
                "flag" => "๐ป๐ฎ",
                "short_name" => "VI",
                "dial_code" => "+1340"
            ],
            [
                "name" => "Wallis and Futuna",
                "flag" => "๐ผ๐ซ",
                "short_name" => "WF",
                "dial_code" => "+681"
            ],
            [
                "name" => "Yemen",
                "flag" => "๐พ๐ช",
                "short_name" => "YE",
                "dial_code" => "+967"
            ],
            [
                "name" => "Zambia",
                "flag" => "๐ฟ๐ฒ",
                "short_name" => "ZM",
                "dial_code" => "+260"
            ],
            [
                "name" => "Zimbabwe",
                "flag" => "๐ฟ๐ผ",
                "short_name" => "ZW",
                "dial_code" => "+263"
            ]
        ];
    }
}
