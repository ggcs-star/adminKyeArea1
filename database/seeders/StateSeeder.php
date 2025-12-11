<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $pathPrefix = 'storage/assets/';
        $states = [
            [
                "name" => "Gujarat",
                "code" => "GJ",
                "cities" => [
                    [
                        "name" => "Ahmedabad",
                        "areas" => [
                            [
                                "name" => "AshramRoad",
                                "img" =>"https://images.keyarea1.com/findproperty/AshramRoad.png"
                            ],
                            [
                                "name" => "Satellite",
                                "img" => "https://images.keyarea1.com/findproperty/Satellite.png"
                            ],
                            [
                                "name" => "Maninagar",
                                "img" => "https://images.keyarea1.com/findproperty/Gota.png"
                            ],
                            [
                                "name" => "Bopal",
                                "img" => "https://images.keyarea1.com/findproperty/Bopal.png"
                            ],
                            [
                                "name" => "Vastrapur",
                                 "img" => "  https://images.keyarea1.com/findproperty/Sarkhej.png"
                            ],
                            [
                                "name" => "Paldi",
                                "img" => "https://images.keyarea1.com/findproperty/PrahladNagar.png"
                            ],
                             [
                                "name" => "PrahladNagar",
                                "img" => "https://images.keyarea1.com/findproperty/PrahladNagar.png"
                            ],
                            [
                                "name" => "Navrangpura",
                                 "img" => "https://images.keyarea1.com/findproperty/Bopal.png"
                           ],
                            [
                                "name" => "Vejalpur",
                              "img" =>"https://images.keyarea1.com/findproperty/ManiNagar.png"
                            ],
                            [
                                "name" => "Nikol",
                               "img" =>"https://images.keyarea1.com/findproperty/AshramRoad.png"
                            ],
                            [
                                "name" => "Gota",
                                "img" => "https://images.keyarea1.com/findproperty/Gota.png"
                            ],
                            [
                                "name" => "Ellisbridge",
                                "img" => "  https://images.keyarea1.com/findproperty/Shilaj.png"
                            ],
                            [
                                "name" => "Ambawadi",
                                 "img" => "https://images.keyarea1.com/findproperty/Bopal.png"
                            ],
                            [
                                "name" => "Naranpura",
                                "img" => "https://images.keyarea1.com/findproperty/Naranpura.png"
                            ],
                            [
                                "name" => "SG Highway",
                               "img" =>"https://images.keyarea1.com/findproperty/AshramRoad.png"
                            ],
                            [
                                "name" => "Thaltej",
                                "img" => "https://images.keyarea1.com/findproperty/Thaltej.png"
                            ],
                           
                            [
                                "name" => "Sabarmati",
                                "img" =>"https://images.keyarea1.com/findproperty/ManiNagar.png"
                            ],

                            [
                                "name" => "Chandkheda",
                                "img" => "https://images.keyarea1.com/findproperty/Gota.png"
                            ],
                          
                            [
                                "name" => "Memnagar",
                                "img" =>"https://images.keyarea1.com/findproperty/ManiNagar.png"
                            ],

                            [
                                "name" => "Dholka",
                                 "img" => "  https://images.keyarea1.com/findproperty/Shilaj.png"
                            ],
                            [
                                "name" => "Odhav",
                                "img" => "https://images.keyarea1.com/findproperty/Bopal.png"
                            ],
                            [
                                "name" => "Naroda",
                                "img" =>"https://images.keyarea1.com/findproperty/ManiNagar.png"
                            ],
                              [
                                "name" => "Motera",
                               "img" =>"https://images.keyarea1.com/findproperty/AshramRoad.png"
                            ],
                               [
                                "name" => "Motera",
                                "img" => "  https://images.keyarea1.com/findproperty/Sarkhej.png"
                            ],
                               [
                                "name" => "Shilaj",
                                "img" => "  https://images.keyarea1.com/findproperty/Shilaj.png"
                            ],
                           
                          
                        ]

                    ],
                    [
                        "name" => "Surat",
                        "areas" => [
                            "A. K. Road",
                            "Adajan Dn",
                            "Althan",
                            "Athwalines",
                            "Bhagal",
                            "Bharthana",
                            "Bhavanivad",
                            "Bombay Market",
                            "Dabholi",
                            "Fulpada",
                            "Godadara",
                            "Gopipura",
                            "Gotalawadi",
                            "Inderpura",
                            "Jhampa",
                            "Katargam",
                            "Khatodara",
                            "Limbayat",
                            "Mahidharpura",
                            "Motived",
                            "Nawabwadi",
                            "Palanpur Nd",
                            "Pandesara",
                            "Ramnagar",
                            "Rustampura",
                            "Sagrampura Putli",
                            "Singanpore",
                            "Udhna",
                            "Udhnagam",
                            "Varachha Road",
                            "Variavi Bhagal",
                            "Vasta Devdi Road",
                            "Piplod",
                            "Vesu",
                            "City Light",
                            "VIP Road",
                            "Pal Gam",
                            "Vankal",
                            "Lajpur",
                            "Ghod Dod Road"
                        ]
                    ],
                    [
                        "name" => "Vadodara",
                        "areas" => [
                            "Waghodia Road",
                            "Bhayli",
                            "Manjalpur",
                            "Gotri",
                            "New Sama",
                            "Tarsali",
                            "Harni",
                            "Atladara",
                            "Kalali",
                            "Chhani",
                            "Tandalja",
                            "Sevasi",
                            "Alkapuri",
                            "Makarpura",
                            "Padra",
                            "Bill",
                            "Karelibaug",
                            "New Alkapuri",
                            "New Waghodia Road",
                            "Kapurai",
                            "Vadsar",
                            "Akota",
                            "Ajwa Road",
                            "Gorwa",
                            "Subhanpura",
                            "Ankhol",
                            "Vemali",
                            "Soma Talav",
                            "Fatehgunj",
                            "Nizampura",
                            "Jarod",
                            "Khodiyar Nagar",
                            "Dabhoi",
                            "Diwalipura",
                            "Maneja",
                            "Karjan",
                            "New Gotri",
                            "Undera",
                            "Warasiya",
                            "Saiyed Vasna",
                            "Old Padra Road",
                            "Vishwamitri",
                            "Sayajiganj",
                            "Dhaniyavi"
                        ]
                    ],
                    [
                        "name" => "Rajkot",
                        "areas" => [
                            "Kalawad Road",
                            "Raiya Road",
                            "University Road",
                            "Mavdi",
                            "Ambika Township",
                            "Gandhi Gram",
                            "150 Feet Ring Road",
                            "Saurashtra University Campus",
                            "Sadhu Vaswani Road",
                            "Bhaktinagar",
                            "Kotecha Chowk",
                            "Race Course Road",
                            "Yagnik Road",
                            "Laxmi Nagar",
                            "Shastri Nagar",
                            "Nana Mava Road",
                            "Ghanshyam Nagar",
                            "Rail Nagar",
                            "Dhebar Road",
                            "Kasturba Road (Kalawad Road)",
                            "Gondal Road",
                            "Atika Industrial Area",
                            "Samrat Industrial Area",
                            "Bhakti Nagar",
                            "Maliyasan",
                            "Mavdi Bypass",
                            "New Lal Bahadur Nagar",
                            "Naran Nagar",
                            "Udyognagar"
                        ]
                    ],
                    [
                        "name" => "Bhavnagar",
                        "areas" => [
                            "Ghogha Circle",
                            "Kalanala",
                            "Crescent Circle",
                            "Subhashnagar",
                            "Nilambaug Circle",
                            "Waghawadi Road",
                            "Bhavnagar Sidsar Road",
                            "Ambawadi",
                            "Palitana",
                            "Ghogha Road",
                            "Kaliyabid",
                            "Fulsar",
                            "Kalvibid",
                            "Roowa",
                            "Hill Drive",
                            "Dholeran Highway",
                            "Dholeran Port",
                            "Tilak Nagar",
                            "Gayatrinagar",
                            "Sihor",
                            "Vora Bazar",
                            "Sardar Nagar",
                            "Kailash Dham Society",
                            "Chitra",
                            "Neelam Baug",
                            "Panwadi",
                            "Budhel",
                            "Pill Garden",
                            "Sir Pattani Road",
                            "Railway Station Road",
                            "Kalanala Kaluba Road",
                            "Jail Road"
                        ]
                    ],
                    [
                        "name" => "Jamnagar",
                        "areas" => [
                            "Patel Colony",
                            "Digjam Circle",
                            "Park Colony",
                            "Khodiyar Colony",
                            "Rameshwar Nagar",
                            "Indira Gandhi Road",
                            "Bedi Gate",
                            "Defense Colony",
                            "Gokul Nagar",
                            "Kamdar Colony",
                            "Ajanta Society",
                            "Gulabnagar",
                            "Baradia",
                            "Kaushal Nagar",
                            "Patrakar Colony",
                            "Vibhapar",
                            "Aliabada",
                            "Ambavadi",
                            "Amra",
                            "Bada",
                            "Baid",
                            "Banugar Moti",
                            "Bedi",
                            "Beraja Pasaya",
                            "Changa",
                            "Chavda",
                            "Chela",
                            "Dadia",
                            "Dhichada",
                            "Dhudasiya",
                            "Dhutarpur",
                            "Dhuvav",
                            "Digvijaygram",
                            "Falla",
                            "Gagva",
                            "Harshadpur",
                            "Jaga",
                            "Jaliadevani",
                            "Jambuda",
                            "Jamwanthali",
                            "Jivapar",
                            "Kansumara",
                            "Khadkhambhalia",
                            "Khandhera",
                            "Khijadia",
                            "Khilosh",
                            "Khimrana",
                            "Khojaberaja",
                            "Lakhabavad",
                            "Lavadia",
                            "Masitia",
                            "Medical Campus",
                            "Moda",
                            "Morkanda",
                            "Mota Thavariya",
                            "Moti Khavdi",
                            "Motibhalsan",
                            "Naranpur",
                            "Navagam",
                            "Navagam Ghed",
                            "Navanagna",
                            "Pipartoda",
                            "Rampar",
                            "Reliance Greens",
                            "Sachana",
                            "Sarmat",
                            "Sikka Mahajanpada",
                            "Sikka TPS",
                            "Theba",
                            "Vadpanchasara",
                            "Valsura",
                            "Varna",
                            "Vasai",
                            "Veratia",
                            "Veraval Moti"
                        ]
                    ],
                    [
                        "name" => "Junagadh",
                        "areas" => [
                            "Main city (around MG Road & Kalwa Chowk)",
                            "Gandhigram",
                            "Zanzarda Road",
                            "Talav Darwaja",
                            "Bus-stand",
                            "Sakkarbaug",
                            "Timbawadi",
                            "Joshipara",
                            "Girnartaleti",
                            "Bhavnath"
                        ]
                    ],
                    [
                        "name" => "Gandhinagar",
                        "areas" => [
                            "Sector 6",
                            "Sector 7",
                            "Sector 8",
                            "Sector 9",
                            "Sector 10",
                            "Sector 11",
                            "Sector 12",
                            "Sector 13",
                            "Sector 14",
                            "Sector 15",
                            "Sector 16",
                            "Sector 17",
                            "Sector 18",
                            "Sector 19",
                            "Sector 20",
                            "Sector 21",
                            "Sector 22",
                            "Sector 23",
                            "Sector 24",
                            "Sector 25",
                            "Sector 26",
                            "Sector 28",
                            "Sector 29",
                            "Sector 30",
                            "Infocity",
                            "GIFT City",
                            "Kudasan",
                            "Sargasan",
                            "Raysan",
                            "Pethapur",
                            "Vavol",
                            "Koba",
                            "Chiloda",
                            "Dabhoda",
                            "Sadra",
                            "Rupal",
                            "Kalol",
                            "Adalaj",
                            "Pundrasan",
                            "Randheja",
                            "Ragsan",
                            "Sadra",
                            "Rupal",
                            "Tintaoda",
                            "Unava Balva",
                            "Bahiyal"
                        ]
                    ],
                    [
                        "name" => "Anand",
                        "areas" => [
                            "Vallabh Vidyanagar",
                            "V V Nagar",
                            "Lambhvel Road Vishwakarma Society",
                            "Anand Vidyanagar Road",
                            "Karamsad",
                            "Mota Bazar",
                            "Anand Sojitra Road",
                            "Lambhvel",
                            "Karamsad Road",
                            "Mogri Gana Road",
                            "Borsad Road",
                            "Bakrol Vadtal Road",
                            "Railway Station Road",
                            "Bakrol Lambhvel Road",
                            "Jitodiya Road",
                            "Bakrol Road Vallabh Vidyanagar",
                            "Khambhat",
                            "Boriavi",
                            "Bakrol",
                            "Gamdivad",
                            "Vidhyanagar",
                            "Amul Dairy Road",
                            "Tarapur",
                            "Main Road (Anand)",
                            "Petlad",
                            "Vasad",
                            "Anklav",
                            "Chikhodra",
                            "Umreth",
                            "Valasan",
                            "Karamsad",
                            "Petlad",
                            "Borsad",
                            "Sojitra",
                            "Tarapur",
                            "Umreth",
                            "Bakrol",
                            "Chikhodra",
                            "Valasan"
                        ]
                    ],
                    [
                        "name" => "Navsari",
                        "areas" => [
                            "Navsari (main city)",
                            "Lunsikui",
                            "Italva",
                            "Chhapra Road",
                            "Madhumati Colony",
                            "Kabilpore",
                            "Khergam",
                            "Vansda",
                            "Asha Nagar",
                            "Dhirubhai Wadi",
                            "Gadat",
                            "Saraswati Nagar",
                            "Amalsad",
                            "Maroli",
                            "Vejalpore",
                            "Shantadevi Road",
                            "Kaliawadi",
                            "Khadsupa",
                            "Haveli Street",
                            "Soni Samaj Vadi",
                            "Vijalpore",
                            "Gandhi Baug",
                            "Sayaji Road",
                            "Station Road",
                            "Dandi Road",
                            "Chikhli",
                            "Bilimora",
                            "Gandevi",
                            "Jalalpore",
                            "Degam",
                            "Bardoli",
                            "Kasbapar",
                            "Maneklal Road area",
                            "GIDC area",
                            "Devsar"
                        ]
                    ],
                    [
                        "name" => "Surendranagar",
                        "areas" => [
                            "Wadhwan",
                            "Ambedkarnagar",
                            "Patrawadi",
                            "Ram Nagar",
                            "Vadipara",
                            "Lunsikui Society",
                            "Alka Society",
                            "Ganpati Fatsar",
                            "Maheshwari Colony",
                            "Laxminarayan Society",
                            "Saroadar Patel Nagar",
                            "Hariom Nagar",
                            "Jintan Udyognagar",
                            "Salena Nagar Society",
                            "Merchant Society",
                            "Sarvodaya Society",
                            "Arjun Society",
                            "Yogi Nagar",
                            "Ambika Nagar",
                            "Shantivan Society",
                            "Vohrawad",
                            "Harbansh Bagh",
                            "Nutan Nagar Society",
                            "Anand Bagh",
                            "Porda",
                            "Limbdi",
                            "Halvad",
                            "Enjar",
                            "Shekhpar",
                            "Krishna Nagar",
                            "Velnath Society",
                            "80 Feet Road",
                            "Karela",
                            "Rajpar",
                            "Mulchand Road",
                            "Bhalgamda",
                            "Kadu",
                            "Zezri"
                        ]
                    ],
                    [
                        "name" => "Morbi",
                        "areas" => [
                            "Sanala Road",
                            "Old Morbi",
                            "Ravapar Road",
                            "Sardar Nagar",
                            "Punit Nagar",
                            "Navlakhi Road",
                            "Gayatri Nagar",
                            "Vavdi Road",
                            "Mahendranagar",
                            "Tankara",
                            "Lajai",
                            "Ranchod Nagar 1",
                            "Near Natraj Fatak",
                            "Morbi GIDC",
                            "Morbi Nani Bazar",
                            "Morbi Shakti Plot",
                            "Bagathala",
                            "Barvala",
                            "Bhadiyad",
                            "Biliya",
                            "Chachapar",
                            "Ghunda",
                            "Ghuntu",
                            "Jambudiya",
                            "Jodjpar Nadi",
                            "Khakhrala",
                            "Khanpar",
                            "Kherda",
                            "Khevaliya",
                            "Lilapar",
                            "Mahendranagar (village)",
                            "Makansar",
                            "Manekwada",
                            "Nani Vavdi",
                            "Nichimandal",
                            "Panchasar",
                            "Paneli",
                            "Rajpar",
                            "Rangpar",
                            "Ravapar",
                            "Sadulkanava",
                            "Shakat Sanala",
                            "Sokhda",
                            "Thorala",
                            "Unchi Mandal",
                            "Virpar",
                            "Zinkiyali"
                        ]
                    ],
                    [
                        "name" => "Gandhidham",
                        "areas" => [
                            "Gandhidham",
                            "Adipur",
                            "Sector 1",
                            "Sector 1A",
                            "Sector 7",
                            "Sector 8",
                            "Ward 7",
                            "Ward 12B",
                            "Galpadar",
                            "Lilashah Nagar",
                            "Vidyanagar",
                            "Gurukul Road",
                            "Rabindranath Tagore Road",
                            "Meghpar Borichi",
                            "Subhash Nagar",
                            "Bharatnagar",
                            "Main Market",
                            "Sunder Puri Slum Area",
                            "Mundra",
                            "Kidana",
                            "Mithi Rohar",
                            "Shinay",
                            "Padana",
                            "Chudva",
                            "Bharapar",
                            "Kandla",
                            "Galpadar",
                            "Antarjal"
                        ]
                    ],
                    [
                        "name" => "Nadiad",
                        "areas" => [
                            "College Road",
                            "Pij Road",
                            "Manjipura",
                            "Kapadvanj Road",
                            "Shanti Nagar",
                            "Subhash Nagar",
                            "Bhakti Nagar",
                            "Vaniya Vad",
                            "Dabhan Bhagole",
                            "Dabhan Road",
                            "Vaishali Cinema Road",
                            "Pragatinagar",
                            "Desai Park Society",
                            "Karmvir Nagar",
                            "Junaraopura",
                            "Yogi Nagar",
                            "Indira Nagar",
                            "Dabhan",
                            "Akshar Township",
                            "Yogiraj Society",
                            "Main Road",
                            "GIDC"
                        ]
                    ],
                    [
                        "name" => "Bharuch",
                        "areas" => [
                            "Zadeshwar Rd",
                            "Link Rd",
                            "Maktampur Rd",
                            "Shaktinath Circle",
                            "Narayan Vidyavihar Road",
                            "Narmada Nagar",
                            "Navadera",
                            "Panjroli",
                            "Shravan Chowkdi"
                        ]
                    ],
                    [
                        "name" => "Patan",
                        "areas" => [
                            "Bhairav Nagar",
                            "Mohan Nagar Society",
                            "Krishna Nagar Society",
                            "Ambapura",
                            "Pragati Maidan",
                            "Subhadranagar",
                            "Bagvada Darwaja",
                            "Shankheshwar",
                            "Jal Chowk",
                            "Harij",
                            "Junagunj Bazar",
                            "Mira Darwaja",
                            "Dasada",
                            "Samoda",
                            "Hansapur",
                            "Kakoshi Sidhpur Road",
                            "Gayatri Mandir Road",
                            "Varahi",
                            "Prabhu Nagar Society",
                            "Santalpur",
                            "Sami",
                            "Tirupati Nagar",
                            "Bhagwatinagar"
                        ]
                    ],
                    [
                        "name" => "Porbandar",
                        "areas" => [
                            "Sudama Chowk",
                            "MG Road",
                            "Ranavav",
                            "Uganda Road",
                            "Digvijaygadh",
                            "Kuber Nagar",
                            "Oum Nagar",
                            "Panch Hatdi",
                            "Bokhira",
                            "Gita Nagar",
                            "Shriji Nagar",
                            "Kamla Bagh",
                            "Chhaya",
                            "Bapu Nagar",
                            "Chhaya Road",
                            "GEB Colony",
                            "New Porbandar",
                            "Bhatia Bazar Old",
                            "Dut Sai Nagar",
                            "Fishries Colony",
                            "Jalaram Colony",
                            "Panch Hatdi (duplicate)",
                            "Rani Baug",
                            "Tulsi Nagar"
                        ]
                    ],
                    [
                        "name" => "Mehsana",
                        "areas" => [
                            "Radhanpur Chokdi",
                            "Becharaji",
                            "Thol",
                            "Wide Angle",
                            "Kadi",
                            "Nagalpur",
                            "Agol",
                            "Radhanpur Road",
                            "Dhobi Ghat Road",
                            "Mahesana GIDC",
                            "Dudhsagar Dairy Area",
                            "Visnagar Road",
                            "Malgodown",
                            "Nugar",
                            "Taranga",
                            "Kolad",
                            "VIP Nagar",
                            "Rantej",
                            "Panchot",
                            "Kansa"
                        ]
                    ],
                    [
                        "name" => "Bhuj",
                        "areas" => [
                            "Madhapar",
                            "Mirjapar",
                            "Shreeji Nagar",
                            "Pramukh Swami Nagar",
                            "Sanskar Nagar",
                            "Shivkrupa Nagar",
                            "Airport Ring Road",
                            "Vijay Nagar",
                            "Bankers Colony",
                            "Bhanusali Nagar",
                            "Dharanagar Kodki",
                            "Jestha Nagar",
                            "Old Dhatia Falia",
                            "Prabhu Nagar",
                            "Lal Tekri"
                        ]
                    ],
                    [
                        "name" => "Veraval",
                        "areas" => [
                            "Veraval (Municipality)",
                            "Somnath / Prabhas Patan",
                            "Veraval Rayon Factory",
                            "Veraval Udyognagar"
                        ]
                    ],
                    [
                        "name" => "Vapi",
                        "areas" => [
                            "Chala",
                            "Gunjan Road",
                            "Chharwada",
                            "Imran Nagar",
                            "Khodiyar Nagar",
                            "Chanod Gate",
                            "Salvav",
                            "Tukwada",
                            "Phase 1 GIDC",
                            "Balitha",
                            "Dabhel",
                            "Anand Nagar",
                            "Desai Wad",
                            "GIDC",
                            "Karambeli",
                            "Bagwada",
                            "Chanod Colony",
                            "Kachigam",
                            "Ekta Nagar",
                            "Silvassa Road",
                            "Koparli Road",
                            "Dungra"
                        ]
                    ],
                    [
                        "name" => "Valsad",
                        "areas" => [
                            "Tithal Road",
                            "Halar Road",
                            "Umbergaon",
                            "Abrama Dharampur Road",
                            "Pali Hill",
                            "Atul",
                            "Gorwada",
                            "Ronvel",
                            "Bhagadawada",
                            "Rajan Nagar",
                            "Pardi",
                            "Abrama Village",
                            "Vashier Valley",
                            "R.M. Park",
                            "Parnera-Vashiyar Road",
                            "Valsad Atul Road",
                            "Tumb",
                            "Raghuvanshi Nagar",
                            "Borlai",
                            "Dehri"
                        ]
                    ],
                    [
                        "name" => "Godhra",
                        "areas" => [
                            "Godhra City",
                            "Godhra Municipality",
                            "Godhra Civil Lines",
                            "Godhra Shroff Bazar",
                            "Godhra Vorwad",
                            "Panchmahal, Godhra",
                            "Ankleshwar Mahadev Road",
                            "Lunawada Road",
                            "Bamroli Road Area",
                            "GIDC Industrial Estate",
                            "Yogeshwar Society",
                            "Vavdi Bujarg Part",
                            "Dahod Road",
                            "Shukla Society",
                            "Navkar Apartment",
                            "Govindi",
                            "Bhurava",
                            "Gangotri Nagar",
                            "Kalol Godhra",
                            "Santrampur"
                        ]
                    ],
                    [
                        "name" => "Palanpur",
                        "areas" => [
                            "Angola Road",
                            "Sardar Patel Nagar",
                            "Akesan Road",
                            "Laxmipura",
                            "Badarpura",
                            "Maheshwari Colony",
                            "Gathaman",
                            "Shivam Nagar Society",
                            "Banas Dairy Road",
                            "Chaman Bagh",
                            "Tirupati Rajnagar",
                            "Dhundhiyawadi",
                            "Delhi Gate",
                            "Palliviya Nagar",
                            "Modi Nagar",
                            "Chadotar",
                            "Pirojpura",
                            "Palanpur Municipality",
                            "Bhagal (Jagana)",
                            "Kanodar"
                        ]
                    ],
                    [
                        "name" => "Himmatnagar",
                        "areas" => [
                            "Alkapuri",
                            "Boriya Khurad",
                            "Dalpur",
                            "Ganotri Society",
                            "Industrial Area",
                            "Mahavirnagar",
                            "Motipura",
                            "Nautan Vihar Society",
                            "Parabada",
                            "Vidhya Nagari",
                            "Gokulnagar",
                            "Mehtapura",
                            "Savgadh",
                            "Arogya Nagar",
                            "Juna Balvantpura",
                            "Alkapuri Pologround"
                        ]
                    ],
                    [
                        "name" => "Kalol",
                        "areas" => [
                            "Kalol East",
                            "Kalol Centre",
                            "Kalol West",
                            "New Panchvati",
                            "Kalol Municipality",
                            "Saij (Census Town)",
                            "Chhatral (Census Town)",
                            "Arsodiya (Census Town)",
                            "Chhatral INA Industrial Area",
                            "Kalol INA Industrial Area"
                        ]
                    ],
                    [
                        "name" => "Botad",
                        "areas" => [
                            "Sarangpur",
                            "Bhavnagar (Botad)",
                            "Barwala (Botad)",
                            "Devaliya",
                            "Kundli",
                            "Ranpur",
                            "Botad Town",
                            "Botad Station Road"
                        ]
                    ],
                    [
                        "name" => "Amreli",
                        "areas" => [
                            "Babra",
                            "Nana Ankadiya",
                            "Keriyanagas",
                            "Ishwariya",
                            "Batar Wadi",
                            "Saldi",
                            "Rajmahel Road",
                            "Gurukrupa Nagar",
                            "Yamuna Park",
                            "Sankul",
                            "Taraktalav",
                            "Pragati Nagar",
                            "Jafarabad"
                        ]
                    ],
                    [
                        "name" => "Gondal",
                        "areas" => [
                            "Bhojrajpara",
                            "G. Parekh Street",
                            "Khandheria Street",
                            "Gundala Street",
                            "Mahadevwadi",
                            "Housing Board",
                            "Station Plot",
                            "Gundala Road",
                            "Yoginagar",
                            "Kashi Vishwanath Road",
                            "Kadavani Nagar",
                            "Shajanand Nagar",
                            "Khodiyar Nagar",
                            "Gokul Dham",
                            "Radha Krishna Nagar",
                            "Kailashbagh"
                        ]
                    ],
                    [
                        "name" => "Jetpur",
                        "areas" => [
                            "Jetpur (Municipality – central city area)",
                            "Jetpur Railway Junction area"
                        ]
                    ],
                    [
                        "name" => "Deesa",
                        "areas" => [
                            "Amrut Nagar",
                            "Neminath Nagar",
                            "Tekara",
                            "Indira Nagar"
                        ]
                    ],
                    [
                        "name" => "Dwarka",
                        "areas" => [
                            "Khambhalia",
                            "Bhanvad",
                            "Mithapur",
                            "Devbhoomi Dwarka",
                            "Okha",
                            "Nageshwar Road",
                            "Baradia",
                            "Teen Batti Chowk",
                            "Ghanshyam Nagar"
                        ]
                    ],
                    [
                        "name" => "Kandla",
                        "areas" => [
                            "Kandla Port (Deendayal Port area)",
                            "Kandla (Census Town)"
                        ]
                    ],
                ]
            ],
            [
                "name" => "Maharashtra",
                "code" => "MH",
                "cities" => [
                    [
                        "name" => "Mumbai",
                        "areas" => ["Andheri", "Borivali", "Dadar", "Bandra"]
                    ],
                    [
                        "name" => "Pune",
                        "areas" => ["Kothrud", "Hinjewadi", "Kharadi"]
                    ]
                ]
            ]

        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
}
