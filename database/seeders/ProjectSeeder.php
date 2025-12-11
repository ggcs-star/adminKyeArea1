<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $pathPrefix = 'storage/assets/';

        
        Project::create([
            "project" => [
                "name" => "Devkunj 80",
                "slug" => "/devkunj-80",
                "reel" => "devkunj",
                "brochure" => "https://drive.google.com/file/d/1XPw5haY73CG9ywdRRBC3d-pzlOfbFRp1/view",
                "logo_image_id" => asset($pathPrefix . "properties/devkunj/3.jpg"),
                "type" => "Premium Condominiums, Luxury Homes",
                "visual_image_id" => null,
                "location" => [
                    "address" => "B/H H.P PETROL PUMP NEAR MADHURAM VILLA , MOTERA",
                    "city" => "Ahmedabad",
                    "area" => "Gota",
                    "latitude"=>"23.140745235306994",
                    "longitude"=>"72.55703332989502",
                    "map_description" => "Key landmarks near Devkunj 80 include SG Highway, SP Ring Road, Bopal, Ghuma, ISKCON Temple, educational institutions, healthcare facilities, and major connecting roads indicated on the provided map"
                ],
                "status"=>"active",
            ],
            "builder" => [
                "name" => "Devkunj Corporation",
                "logo_image_id" => "logo:2",
                "corporate_address" => "B/H H.P PETROL PUMP, Ahmedabad City, Ahmedabad, Gujarat, 380005",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "10'0\" x 10'0\"", "wardrobe_niche" => "5'6\" x 2'0\""],
                            "bedroom_2" => ["size" => "10'0\" x 10'0\"", "wardrobe_niche" => "5'6\" x 2'0\""],
                            "bath" => ["size" => "5'0\" x 7'6\""],
                            "wc" => ["size" => "4'6\" x 6'6\""],
                            "living_room" => ["size" => "16'0\" x 10'0\""],
                            "kitchen" => ["size" => "7'6\" x 9'0\"", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "7'6\" x 3'0\""],
                            "balcony" => ["size" => "5'6\" x 6'3\""],
                        ],
                        "imageslider" => [
                            ["image" => "https://images.keyarea1.com/Ahmedabad_Property/03_Brochure-Vedant_Vilasa/2.jpg"],
                            ["image" => "https://images.keyarea1.com/Ahmedabad_Property/03_Brochure-Vedant_Vilasa/2.jpg"],
                          
                        ],
                        "price" => "50 Lac",
                        "size" => "2430 Sq. ft.",
                        "date" => "Dec 2026",
                        "floorPlans" => [
                            [
                             "imgFull" =>"https://images.keyarea1.com/Ahmedabad_Property/03_Brochure-Vedant_Vilasa/2.jpg",
                        ],
                        "galleryImages" => [
                            ["full" => "https://images.keyarea1.com/Ahmedabad_Property/03_Brochure-Vedant_Vilasa/2.jpg",
                
                        ]
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "10'0\" x 11'0\"", "wardrobe_niche" => "5'6\" x 2'0\""],
                            "bedroom_2" => ["size" => "10'0\" x 11'0\"", "wardrobe_niche" => "5'6\" x 2'0\""],
                            "study" => ["size" => "7'9\" x 6'6\""],
                            "bath" => ["size" => "5'0\" x 7'6\""],
                            "wc" => ["size" => "4'6\" x 6'6\""],
                            "living_room" => ["size" => "16'0\" x 10'0\""],
                            "kitchen" => ["size" => "7'6\" x 9'0\"", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "7'6\" x 3'0\""],
                            "balcony" => ["size" => "5'6\" x 6'3\""],
                        ],
                        "imageslider" => [
                            ["image" => asset($pathPrefix . "properties/devkunj/13.png")],
                          
                        ],
                        "price" => "1 cr",
                        "size" => "2630 Sq. ft.",
                        "date" => "Dec 2026",
                        "floorPlans" => [
                            ["imgThumb" => asset($pathPrefix . "properties/devkunj/6.jpg"), "imgFull" => asset($pathPrefix . "properties/devkunj/6.jpg"), "title" => "Layout Plan"],
                            ["imgThumb" => asset($pathPrefix . "properties/devkunj/7.jpg"), "imgFull" => asset($pathPrefix . "properties/devkunj/7.jpg"), "title" => "Parking Layout Plan"],
                            ["imgThumb" => asset($pathPrefix . "properties/devkunj/8.jpg"), "imgFull" => asset($pathPrefix . "properties/devkunj/8.jpg"), "title" => "Floorwise Plan"],
                            ["imgThumb" => asset($pathPrefix . "properties/devkunj/9.jpg"), "imgFull" => asset($pathPrefix . "properties/devkunj/9.jpg"), "title" => "Ground Floor Plan & Terrace Plan"],
                        ],
                        "galleryImages" => [
                            ["full" => asset($pathPrefix . "properties/devkunj/13.png"), "thumb" => asset($pathPrefix . "properties/devkunj/13.png"), "alt" => "Exterior View", "height" => 196],
                            ["full" => asset($pathPrefix . "properties/devkunj/14.png"), "thumb" => asset($pathPrefix . "properties/devkunj/14.png"), "alt" => "Interior View", "height" => 193],
                            ["full" => asset($pathPrefix . "properties/devkunj/15.png"), "thumb" => asset($pathPrefix . "properties/devkunj/15.png"), "alt" => "Amenities", "height" => 189],
                            ["full" => asset($pathPrefix . "properties/devkunj/16.png"), "thumb" => asset($pathPrefix . "properties/devkunj/16.png"), "alt" => "Layout", "height" => 194],
                            ["full" => asset($pathPrefix . "properties/devkunj/17.png"), "thumb" => asset($pathPrefix . "properties/devkunj/17.png"), "alt" => "Layout", "height" => 194],
                        ]
                    ],
                    "floorplan_image_id" => "generated_image:5",
                    "price" => "80 Lac - 90 Lac."
                ],
            ],
            "specifications" => [
                "structure" => "RCC with AAC block walls and plaster",
                "flooring" => "Designer vitrified, ceramic in toilets/balconies/terraces",
                "kitchen" => "Granite platform, SS sink, glazed/ceramic dado, provision for water purifier",
                "toilets" => "Ceramic flooring, repute sanitary wares, concealed plumbing, overhead shower",
                "utility" => "Ceramic tiles, provision for washing machine",
                "electrical" => "Fire-resistant wiring, ample points, modular switches, AC point in master, earth leakage breaker, TV/telephone points",
                "doors_windows" => "Elegant flush doors, powder coated aluminium windows with mosquito mesh, grill door for safety",
                "internal_paint" => "Internal oil bound distemper"
            ],
            "building" => [
                "entry_direction" => "East-West only",
                "common_lighting" => "Solar PV",
                "number_of_lifts" => "Not specified",
                "direction_info" => "Wind and sun direction not specified",
                "security" => "24/7 gated security, visual monitoring, fire resilience system, safety surveillance"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Not specified",
                "basement_ground" => "Not specified"
            ],
            "amenities" => [
                "clubhouse" => "Decorative clubhouse with entrance canopy",
                "floating_fitness" => "Floating fitness center, elevated gym design, top-of-the-line equipment",
                "dedicated_guest_rooms" => "Four ultra-premium ensuite guestrooms",
                "work_from_home" => "Dedicated furnished common area for work from home",
                "health_hub" => "Exercise zone",
                "kids_area" => "Kids' adventure zone, multi-sports arena",
                "senior_sitouts" => "Sitouts for senior citizens",
                "community_living" => "Perfect community living spaces, spaces for family and community events",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => "generated_image:6"
            ],
            "modern_features" => [
                "smart_home_automation" => "Ultra-modern home automation switch plates, Alexa-enabled (Alexa device not included), remotely operable",
                "solar_pv" => true,
                "modular_kitchen" => "100% modular kitchen with German fittings",
                "designer_lighting" => "Common areas",
                "security_monitoring" => "CCTV, visual surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => "generated_image:2",
                "builder_logo" => "generated_image:3",
                "elevation_visual" => "generated_image:4",
                "floorplan" => "generated_image:5",
                "amenities_map_icons" => "generated_image:6"
            ],
            "localityData" => [
                "name" => "Vaishno Devi Circle",
                "growth" => "4.30%",
                "growthPeriod" => "Last 1 Year",
                "avgRate" => "₹5.2 K/sq.ft"
            ],
            "investmentNote" => "Devkunj 80 represents an excellent investment opportunity in Ahmedabad's growing real estate market, offering both quality living and potential for appreciation.",
            "buyProperties" => [
                [
                    "img" => "devkunj3",
                    "title" => "3 BHK Flats",
                    "size" => "2430 Sq. ft.",
                    "price" => "80 Lac",
                    "date" => "Dec 2026",
                    "url" => "/buy/devkunj-80/unit-1",
                    "agency" => [
                        "name" => "Devkunj Realty",
                        "location" => "Vaishnodevi Circle, Ahmedabad",
                        "url" => "/agency/devkunj-realty"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ],
    ],
        ]);


        
        Project::create([

            "project" => [
                "name" => "PRAYASAM GREEN",
                "slug" => "/prayasam-green",
                "reel" => null,
                "brochure" => "https://myaidrive.com/BMTvp7AyVxA4PQ8YbhGHrZ/1.-PRAYASAM-.pdf",
                "logo_image_id" => null,
                "type" => "Residential Apartments/Flats",
                "visual_image_id" => null,
                "location" => [
                    "address" => "NR RAJ HOMES, NEW SCIENCE CITY ROAD, AHMEDABAD, 380060",
                    "city" => "Ahmedabad",
                    "area" => "Science City Road",
                    "map_description" => "Close to major roads and facilities, providing convenient access to the city's infrastructure."
                ]
            ],
            "builder" => [
                "name" => "PRAYASAM INFRA",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => "prayasaminfra@gmail.com",
                    "phone" => "+91 88666 43944"
                ]
            ],
            "configuration" => [
                "Apartments" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.34 x 4.61", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.34 x 5.41", "wardrobe_niche" => null],
                            "bath" => ["size" => "1.73 x 2.21"],
                            "wc" => ["size" => "1.52 x 2.21"],
                            "living_room" => ["size" => "5.56 x 6.10"],
                            "kitchen" => ["size" => "2.23 x 3.05", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "1.73 x 1.96"],
                            "balcony" => ["size" => "1.53 x 4.60"],
                        ],

                        "imageslider" => [],
                        "price" => "45 Lac - 55 Lac",
                        "size" => "102.82 Sq.MT",
                        "date" => "Mar 2026",
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => "generated_image:5",
                    "price" => "45 Lac - 55 Lac"
                ],
            ],
            "specifications" => [
                "structure" => "RCC with premium block walls and plaster",
                "flooring" => "Vitrified tiles, ceramic in toilets/balconies",
                "kitchen" => "Granite platform, SS sink, ceramic dado, provision for water purifier",
                "toilets" => "Ceramic flooring, sanitary wares, concealed plumbing, overhead shower",
                "utility" => "Provision for washing machine",
                "electrical" => "Fire-resistant wiring, ample points, modular switches, AC points, earth leakage breaker",
                "doors_windows" => "Flush doors, aluminium windows with mesh and grills for safety",
                "internal_paint" => "Oil-bound distemper"
            ],
            "building" => [
                "entry_direction" => "East-West",
                "common_lighting" => "Solar PV panels",
                "number_of_lifts" => "Not specified",
                "direction_info" => "Open ventilation and natural lighting encouraged",
                "security" => "24/7 gated security, CCTV monitoring, fire resilience features"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Available as per layout",
                "basement_ground" => "Covered parking space as per basement plan"
            ],
            "amenities" => [
                "clubhouse" => "Elegant clubhouse with entrance canopy",
                "floating_fitness" => "Modern gym with equipment",
                "dedicated_guest_rooms" => "Ultra-premium guest rooms",
                "work_from_home" => "Dedicated workspace lounge",
                "health_hub" => "Exercise area",
                "kids_area" => "Adventure and sports zone for children",
                "senior_sitouts" => "Relaxation areas for senior citizens",
                "community_living" => "Spaces for family and community events",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Alexa-compatible automation plates (device not included)",
                "solar_pv" => true,
                "modular_kitchen" => "Fully modular kitchen with modern fittings",
                "designer_lighting" => "Stylish lighting fixtures in common areas",
                "security_monitoring" => "CCTV and safety surveillance systems"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Science City Area",
                "growth" => "5.00%",
                "growthPeriod" => "Last 1 Year",
                "avgRate" => "₹5.2 K/sq.ft"
            ],
            "investmentNote" => "Prayasam Green is a promising investment option in Ahmedabad’s growing residential sector offering modern living and excellent connectivity.",
            "buyProperties" => [
                [
                    "img" => "prayasam-green-2bhk",
                    "title" => "2 BHK Flats",
                    "size" => "102.82 Sq.MT",
                    "price" => "45 Lac - 55 Lac",
                    "date" => "Mar 2026",
                    "url" => "/buy/prayasam-green/2bhk",
                    "agency" => [
                        "name" => "Prayasam Realty",
                        "location" => "Science City Road, Ahmedabad",
                        "url" => "/agency/prayasam-realty"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);


        Project::create([
            "project" => [
                "name" => "Atharva Posh Ville",
                "slug" => "/atharva-posh-ville",
                "reel" => null,
                "brochure" => "https://example.com/atharva-posh-ville-brochure.pdf",
                "logo_image_id" => null,
                "type" => "Luxury Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Shilaj Cross Road, Ahmedabad, Gujarat, 380059",
                    "city" => "Ahmedabad",
                    "area" => "Shilaj",
                    "map_description" => "Well connected with schools, hospitals, and highways."
                ]
            ],
            "builder" => [
                "name" => "Atharva Developers",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => "https://atharvadevelopers.com",
                    "sales_email" => "sales@atharvadevelopers.com",
                    "phone" => "+91 98765 43210"
                ]
            ],
            "configuration" => [
                "Ville" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "12'0\" x 14'0\"", "wardrobe_niche" => "6'0\" x 2'0\""],
                            "bedroom_2" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => "5'0\" x 2'0\""],
                            "bedroom_3" => ["size" => "10'0\" x 12'0\"", "wardrobe_niche" => "4'6\" x 2'0\""],
                            "bath" => ["size" => "6'0\" x 8'0\""],
                            "wc" => ["size" => "4'0\" x 6'0\""],
                            "living_room" => ["size" => "18'0\" x 15'0\""],
                            "kitchen" => ["size" => "10'0\" x 12'0\"", "type" => "Open", "dry_area" => false],
                            "utility_area" => ["size" => "5'0\" x 7'0\""],
                            "balcony" => ["size" => "8'0\" x 10'0\""]
                        ],
                        "imageslider" => [],
                        "price" => "1.25 Cr - 1.50 Cr",
                        "size" => "1600 Sq.ft",
                        "date" => "Dec 2026",
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => "generated_image:5",
                    "price" => "80 lca - 90 lca"
                ],
            ],
            "specifications" => [
                "structure" => "RCC frame structure with brick walls and plaster",
                "flooring" => "Italian marble in living area and vitrified tiles in bedrooms",
                "kitchen" => "Granite platform, SS sink, ceramic dado, provision for water purifier",
                "toilets" => "Ceramic flooring, branded sanitary fittings, concealed plumbing",
                "utility" => "Provision for washing machine and dryer",
                "electrical" => "Concealed copper wiring, modular switches, AC points, earth leakage breaker",
                "doors_windows" => "Teakwood doors, powder-coated aluminium windows with mosquito mesh and safety grills",
                "internal_paint" => "Premium emulsion paint"
            ],
            "building" => [
                "entry_direction" => "North-East",
                "common_lighting" => "Solar-backed lighting",
                "number_of_lifts" => "2 lifts per tower",
                "direction_info" => "Cross ventilation with natural light optimization",
                "security" => "24/7 CCTV, biometric access, fire safety systems"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "One parking slot per unit, plus visitor parking",
                "basement_ground" => "Secure parking in basement and ground floors"
            ],
            "amenities" => [
                "clubhouse" => "Elegant clubhouse with indoor games",
                "floating_fitness" => "Gymnasium with modern equipment and yoga deck",
                "dedicated_guest_rooms" => "Premium guest suites",
                "work_from_home" => "Co-working space with internet access",
                "health_hub" => "Wellness center with physiotherapy support",
                "kids_area" => "Playgrounds and sports areas",
                "senior_sitouts" => "Relaxation lounges for senior citizens",
                "community_living" => "Multi-purpose hall for community events",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Alexa-compatible smart switches (device not included)",
                "solar_pv" => true,
                "modular_kitchen" => "Fully modular kitchen with German fittings",
                "designer_lighting" => "Decorative lights in common areas",
                "security_monitoring" => "CCTV and fire monitoring systems"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Shilaj Area",
                "growth" => "4.75%",
                "growthPeriod" => "Last 1 Year",
                "avgRate" => "₹4.5 K/sq.ft"
            ],
            "investmentNote" => "Atharva Posh Ville offers premium living in Ahmedabad's growing residential area with excellent connectivity and lifestyle facilities.",
            "buyProperties" => [
                [
                    "img" => "atharva-posh-ville-3bhk",
                    "title" => "3 BHK Apartments",
                    "size" => "1600 Sq.ft",
                    "price" => "1.25 Cr - 1.50 Cr",
                    "date" => "Dec 2026",
                    "url" => "/buy/atharva-posh-ville/3bhk",
                    "agency" => [
                        "name" => "Atharva Realty",
                        "location" => "Shilaj, Ahmedabad",
                        "url" => "/agency/atharva-realty"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);


        Project::create([
            "project" => [
                "name" => "Millennium Bungalows",
                "slug" => "/millennium-bungalows",
                "reel" => null,
                "brochure" => "https://example.com/millennium-bungalows-brochure.pdf",
                "logo_image_id" => null,
                "type" => "Residential Bungalows",
                "visual_image_id" => null,
                "location" => [
                    "address" => "B/H Murli Party Plot, Nr. Akash Grant City, Enasan, Ahmedabad - 382330",
                    "city" => "Ahmedabad",
                    "area" => "Enasan, Dashkroi",
                    "map_description" => "Situated in Gamtal Extension, close to essential amenities with excellent road connectivity."
                ]
            ],
            "builder" => [
                "name" => "Ekta Realty",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "bungalow" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "Varies by unit", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "Varies by unit", "wardrobe_niche" => null],
                            "bath" => ["size" => "Varies by unit"],
                            "wc" => ["size" => "Varies by unit"],
                            "living_room" => ["size" => "Varies by unit"],
                            "kitchen" => ["size" => "Varies by unit", "type" => "Open", "dry_area" => false],
                            "utility_area" => ["size" => "Varies by unit"],
                            "balcony" => ["size" => "Varies by unit"]
                        ],
                        "imageslider" => [],
                        "price" => "Starting from ₹1.25 Cr",
                        "size" => " 1600 - 3150 Sq.ft",
                        "date" => "Tentative - Dec 2026",
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],

                    "floorplan_image_id" => "generated_image:5",
                    "price" => "1.25 Cr - 2 Cr"
                ],
            ],
            "specifications" => [
                "structure" => "RCC frame structure with brick walls",
                "flooring" => "Vitrified tiles and designer flooring in selected areas",
                "kitchen" => "Granite platform with premium fixtures",
                "toilets" => "Branded sanitary ware with modern fittings",
                "utility" => "Provision for washing machine and other appliances",
                "electrical" => "Concealed wiring with modular switches",
                "doors_windows" => "Teakwood doors and aluminium windows with safety grills",
                "internal_paint" => "Premium quality emulsion paint"
            ],
            "building" => [
                "entry_direction" => "Multiple entries depending on layout",
                "common_lighting" => "Solar-powered lighting in common areas",
                "number_of_lifts" => "Not applicable for bungalows",
                "direction_info" => "Designed to optimize airflow and natural lighting",
                "security" => "24/7 security surveillance with gated entry"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Covered and open parking available for residents and visitors",
                "basement_ground" => "Ground-level parking"
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse with recreational facilities",
                "floating_fitness" => "Outdoor fitness zones and exercise areas",
                "dedicated_guest_rooms" => "Guest suites for visitors",
                "work_from_home" => "Dedicated spaces within bungalows for home offices",
                "health_hub" => "Wellness and physiotherapy center",
                "kids_area" => "Play areas with safe equipment for children",
                "senior_sitouts" => "Relaxation areas for senior citizens",
                "community_living" => "Spaces for gatherings and social interaction",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Basic automation with options for upgrades",
                "solar_pv" => true,
                "modular_kitchen" => "Modern kitchen design with high-quality fittings",
                "designer_lighting" => "Aesthetic lighting in shared spaces",
                "security_monitoring" => "CCTV-enabled surveillance across premises"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Enasan, Dashkroi Area",
                "growth" => "5.1%",
                "growthPeriod" => "Last 1 Year",
                "avgRate" => "₹4.8 K/sq.ft"
            ],
            "investmentNote" => "Millennium Bungalows offers a premium living experience in a serene environment with modern amenities and connectivity.",
            "buyProperties" => [
                [
                    "img" => "millennium-bungalows-1",
                    "title" => "Luxury Bungalows",
                    "size" => "1600 - 3150 Sq.ft",
                    "price" => "Starting from ₹1.25 Cr",
                    "date" => "Dec 2026",
                    "url" => "/buy/millennium-bungalows",
                    "agency" => [
                        "name" => "Ekta Realty",
                        "location" => "Enasan, Ahmedabad",
                        "url" => "/agency/ekta-realty"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);

        Project::create([
            "project" => [
                "name" => "Aristo Aayam",
                "slug" => "/aristo-aayam",
                "reel" => null,
                "brochure" => "https://example.com/aristo-aayam-brochure.pdf",
                "logo_image_id" => null,
                "type" => "4BHK + 22 Storey Living Spaces",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Shivalik Greens, b/h Shell Petrol Pump, Off Bopal Ambali Road, Ambali, Ahmedabad, 380058",
                    "city" => "Ahmedabad",
                    "area" => "Ambli",
                    "map_description" => "Close to Novotel Hotel, Iscon Junction, Isro Colony, Iscon Temple, Karnavati Club, Prahladnagar Garden, SP Ring Road, and SG Highway."
                ]
            ],
            "builder" => [
                "name" => "Aayam Developers",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 9638150150"
                ]
            ],
            "configuration" => [
                 "Apartments" => [
                "4BHK" => [
                    "rooms" => [
                        "bedroom_1" => ["size" => "Varies by layout", "wardrobe_niche" => null],
                        "bedroom_2" => ["size" => "Varies by layout", "wardrobe_niche" => null],
                        "bedroom_3" => ["size" => "Varies by layout", "wardrobe_niche" => null],
                        "bedroom_4" => ["size" => "Varies by layout", "wardrobe_niche" => null],
                        "bath" => ["size" => "Varies by layout"],
                        "wc" => ["size" => "Varies by layout"],
                        "living_room" => ["size" => "Varies by layout"],
                        "kitchen" => ["size" => "Varies by layout", "type" => "Open/Close", "dry_area" => true],
                        "utility_area" => ["size" => "Varies by layout"],
                        "balcony" => ["size" => "Varies by layout"]
                    ],
                    "imageslider" => [],
                    "price" => "Starting from ₹1.50 Cr",
                    "size" => "Approx. 235 - 315 Sq.MT",
                    "date" => "Tentative - 2026",
                    "floorPlans" => [],
                    "galleryImages" => []
                ]
                ],
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure design as per IS Code",
                "flooring" => "Vitrified tiles in all rooms, anti-skid tiles in balconies and wash areas, wooden flooring in master bedroom",
                "kitchen" => "Granite platform, stainless steel sink, wall tiles up to slab level, provision for chimney and gas line",
                "toilets" => "Branded sanitary fittings, vitrified tiles, full height DEDO tiles",
                "utility" => "Provisions for appliances",
                "electrical" => "Fire retardant copper wiring with modular switches and MCB/ICB panels",
                "doors_windows" => "Decorative doors with veneer, sliding anodized aluminum sections for balconies",
                "internal_paint" => "Putty finish for interior walls, sand-faced plaster with texture for external walls"
            ],
            "building" => [
                "entry_direction" => "Not specified",
                "common_lighting" => "Solar panels in common areas",
                "number_of_lifts" => "Multiple lifts including fire lifts",
                "direction_info" => "Optimized airflow and natural lighting",
                "security" => "24/7 security with CCTV surveillance, fire safety systems"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Covered and open parking available",
                "basement_ground" => "Parking layout as per basement and ground plans"
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse with recreational facilities",
                "floating_fitness" => "Gymnasium and yoga areas",
                "dedicated_guest_rooms" => "Guest suites",
                "work_from_home" => "Dedicated work areas",
                "health_hub" => "Wellness and physiotherapy center",
                "kids_area" => "Playgrounds and adventure zones",
                "senior_sitouts" => "Relaxation lounges for seniors",
                "community_living" => "Spaces for events and gatherings",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Optional automation systems",
                "solar_pv" => true,
                "modular_kitchen" => "Modern modular fittings",
                "designer_lighting" => "Decorative lighting fixtures",
                "security_monitoring" => "CCTV-enabled surveillance systems"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Ambli Area",
                "growth" => "5.0%",
                "growthPeriod" => "Last 1 Year",
                "avgRate" => "₹4.8 K/sq.ft"
            ],
            "investmentNote" => "Aristo Aayam offers premium living spaces in Ahmedabad with modern amenities, superior construction, and excellent connectivity.",
            "buyProperties" => [
                [
                    "img" => "aristo-aayam-4bhk",
                    "title" => "4 BHK Apartments",
                    "size" => "235 - 315 Sq.MT",
                    "price" => "Starting from ₹1.50 Cr",
                    "date" => "2026",
                    "url" => "/buy/aristo-aayam/4bhk",
                    "agency" => [
                        "name" => "Aayam Realty",
                        "location" => "Ambli, Ahmedabad",
                        "url" => "/agency/aayam-realty"
                    ]
                ]
                    ],
                    "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true

        ]);

        Project::create([
    "project" => [
        "name" => "Abhishree One",
        "slug" => "/abhishree-one",
        "reel" => "abhishreeone",
        "brochure" => "https://drive.google.com/file/d/your_file_id/view", // update with actual link
        "logo_image_id" => "logo:1", // placeholder, replace with actual asset reference
        "type" => "3BHK Ultra Luxurious Apartment",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Shaival Residency, Usmanpura, Ahmedabad, Gujarat 380013",
            "city" => "Ahmedabad",
            "area" => "Usmanpura",
            "map_description" => "Nearby landmarks include Shaival Residency, Jain Derasar, Navyug School, and Goddan Park Road."
        ]
    ],
    "builder" => [
        "name" => "I N F R A Abhishree",
        "logo_image_id" => "logo:2",
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => "www.gujrera.gujarat.gov.in",
            "sales_email" => null,
            "phone" => "75676 57879 | 99259 09895"
        ]
    ],
    "configuration" => [
        "Apartment" => [
            "3BHK" => [
                "rooms" => [
                    "kitchen" => ["size" => "Not specified", "type" => "Black granite with S.S. sink, designer glazed tiles up to lintel level"],
                    "structure" => ["type" => "RCC Frame Structure"],
                    "flooring" => ["type" => "Branded vitrified tiles for entire flooring in all apartments"],
                    "walls" => ["type" => "Internal mala plaster with white finishing putty, acrylic paints for elevation"],
                    "doors_windows" => ["type" => "Decorative main door & flush doors with wooden frame, aluminum windows with granite frame"],
                    "electrification" => ["type" => "ISI modular switches with 3 phases wiring, MCB distribution panel"],
                    "plumbing" => ["type" => "ISI CPVC/UPVC pipes, branded fittings, percolation recharge wells"],
                    "toilet" => ["type" => "Designer tiles on floor and walls up to lintel level, branded sanitary fittings"],
                    "terrace" => ["type" => "Brick-bat concrete with china mosaic for insulation"]
                ],
                "imageslider" => [],
                "price" => "Not specified",
                "size" => "Not specified",
                "date" => "Not specified",
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => "generated_image:1",
            "price" => "Not specified"
        ]
    ],
    "specifications" => [
        "structure" => "RCC Frame Structure",
        "flooring" => "Branded vitrified tiles for entire flooring in all apartments",
        "kitchen" => "Black granite with S.S. sink, designer glazed tiles up to lintel level",
        "toilets" => "Designer tiles on floor and walls up to lintel level, branded sanitary fittings",
        "utility" => "Not specified",
        "electrical" => "ISI modular switches, 3 phase concealed wiring, MCB panel",
        "doors_windows" => "Decorative main door, flush doors with wooden frame, aluminum windows with granite frame",
        "internal_paint" => "Internal mala plaster with white finishing putty, acrylic paints for elevation"
    ],
    "building" => [
        "entry_direction" => "Not specified",
        "common_lighting" => "Not specified",
        "number_of_lifts" => "Not specified",
        "direction_info" => "Not specified",
        "security" => "Not specified"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Not specified",
        "basement_ground" => "Not specified"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => null,
        "24_7_security" => false,
        "visual_monitoring" => false,
        "fire_resilience" => false,
        "amenities_image_id" => "generated_image:2"
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
        "security_monitoring" => null
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => true
    ],
    "graphics" => [
        "project_logo" => "generated_image:3",
        "builder_logo" => "generated_image:4",
        "elevation_visual" => "generated_image:5",
        "floorplan" => "generated_image:1",
        "amenities_map_icons" => "generated_image:2"
    ],
    "localityData" => [
        "name" => "Usmanpura",
        "growth" => "Not specified",
        "growthPeriod" => "Not specified",
        "avgRate" => "Not specified"
    ],
    "investmentNote" => "Abhishree One offers ultra-luxurious living spaces in Ahmedabad, designed with premium materials and modern conveniences for a refined lifestyle.",
    "buyProperties" => [],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => true
]);

Project::create([
            "project" => [
                "name" => "Ayodhyapuram",
                "slug" => "/ayodhyapuram",
                "reel" => "ayodhyapuram",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/ayodhyapuram/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

         Project::create([
            "project" => [
                "name" => "Aarav Bungalows",
                "slug" => "/aarav-bungalows",
                "reel" => "aarav",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/aarav/logo.jpg"),
                "type" => "Premium Bungalows, Luxury Homes",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Haash Sparsh",
                "slug" => "/haash-sparsh",
                "reel" => "haashsparsh",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/haashsparsh/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Rivera Apartment",
                "slug" => "/rivera-apartment",
                "reel" => "rivera",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/rivera/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "The Opus",
                "slug" => "/the-opus",
                "reel" => "theopus",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/theopus/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "5BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Madhu Malti",
                "slug" => "/madhu-malti",
                "reel" => "madhumalti",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/madhumalti/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Parijat Bungalows",
                "slug" => "/parijat-bungalows",
                "reel" => "parijat",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/parijat/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => "Muthiya",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Shivkrupa Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Atharva Parisar",
                "slug" => "/atharva-parisar",
                "reel" => "atharvaparisar",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/atharvaparisar/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => "Nikol",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Om Buildspace & Shiv Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
    
        Project::create([
            "project" => [
                "name" => "Shalin Prima",
                "slug" => "/shalin-prima",
                "reel" => "shalinprima",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shalinprima/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Shubham Infra",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
         Project::create([
            "project" => [
                "name" => "Siddharth Green Valley",
                "slug" => "/siddharth-green-valley",
                "reel" => "siddharthgreenvalley",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/siddharthgreenvalley/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => "Naranpura",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Saidivyum Devcon LLP",
                "logo_image_id" => null,
                "corporate_address" => "D-124, Shree Ghantakaran Mahveer Market, Sarangpur, Ahmedabad - 380002",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 7698410978, +91 7046584370"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Aahvan Greens",
                "slug" => "/aahvan-greens",
                "reel" => "aahvan-greens",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/aahvan-greens/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
      Project::create([
            "project" => [
                "name" => "Aarambh",
                "slug" => "/aarambh",
                "reel" => "aarambh",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/aarambh/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Adarsh Ratna",
                "slug" => "/adarsh-ratna",
                "reel" => "adarsh-ratna",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/adarsh-ratna/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => "Naroda",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Adarsh Infra",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

    
        Project::create([
            "project" => [
                "name" => "Anali Heights (Rang Milan)",
                "slug" => "/anali-heights-rangmilan",
                "reel" => "anali-heights",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/anali-heights/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
       
        Project::create([
            "project" => [
                "name" => "Ananta Sky",
                "slug" => "/ananta-sky",
                "reel" => "ananta-sky",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/ananta-sky/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Anirdesh Apartment",
                "slug" => "/anirdesh-apartment",
                "reel" => "anirdesh-apartment",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/anirdesh-apartment/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Apple Glory-2",
                "slug" => "/apple-glory-2",
                "reel" => "apple-glory-2",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/apple-glory-2/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
       
        Project::create([
            "project" => [
                "name" => "Arati Apartment",
                "slug" => "/arati-apartment",
                "reel" => "arati-apartment",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/arati-apartment/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Arihant Elegance",
                "slug" => "/arihant-elegance",
                "reel" => "arihant-elegance",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/arihant-elegance/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Asopalav Green",
                "slug" => "/asopalav-green",
                "reel" => "asopalav-green",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/asopalav-green/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Orium Elements",
                "slug" => "/orium-elements",
                "reel" => "orium-elements",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/orium-elements/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Elinor 108",
                "slug" => "/elinor-108",
                "reel" => "elinor-108",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/elinor-108/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Ayodhya Parisar",
                "slug" => "/ayodhya-parisar",
                "reel" => "ayodhya-parisar",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/ayodhya-parisar/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Brookstone",
                "slug" => "/brookstone",
                "reel" => "brookstone",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/brookstone/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Vaikunth Bungalows, DPS Bopal Rd, Next to A.Shridhar Oxygen Park, Bopal, Shilaj, Ahmedabad, Gujarat - 380059",
                    "city" => "Ahmedabad",
                    "area" => "Bopal - Shilaj",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Shatranj Aarat Buildcon LLP",
                "logo_image_id" => null,
                "corporate_address" => "208, Sun Orbit Building, B/h Rajpath Club, Rajpath Rangoli Road, Bodakdev, Ahmedabad-380054",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 81289 96221"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC Structure",
                "flooring" => "Tile flooring in drawing, dining, kitchen, bedrooms, bathrooms & terraces",
                "kitchen" => null,
                "toilets" => "Sanitary ware and plumbing fixtures",
                "utility" => null,
                "electrical" => "Modular switches, wires & MCB, ELCB",
                "doors_windows" => "Flush doors, aluminum sliding windows with granite jambs",
                "internal_paint" => "Interior walls plastered with putty finish, exterior textured paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Callisto Emerald",
                "slug" => "/callisto-emerald",
                "reel" => "callisto-emerald",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/callisto-emerald/logo.jpg"),
                "type" => "3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Divyajot School, SBR Extension, Near Taj Skyline, Ahmedabad 380059",
                    "city" => "Ahmedabad",
                    "area" => "Shilaj",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Callisto Buildcon LLP",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => "www.gujrera.gujarat.gov.in",
                    "sales_email" => null,
                    "phone" => "+91 77779 29953/63"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Crown Lake View",
                "slug" => "/crown-lake-view",
                "reel" => "crown-lake-view",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/crown-lake-view/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Crown Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "2.5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "study" => ["size" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Eiffel Tower",
                "slug" => "/eiffel-tower",
                "reel" => "eiffel-tower",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/eiffel-tower/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Eiffel Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Elysian",
                "slug" => "/elysian",
                "reel" => "elysian",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/elysian/logo.jpg"),
                "type" => "Luxury Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Elysian Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Elysium Novus",
                "slug" => "/elysium-novus",
                "reel" => "elysium-novus",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/elysium-novus/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Elysium Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Empire Sky Epitome",
                "slug" => "/empire-sky-epitome",
                "reel" => "empire-sky-epitome",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/empire-sky-epitome/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Empire Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Shree Shanti Nivas",
                "slug" => "/shree-shanti-nivas",
                "reel" => "shree-shanti-nivas",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shree-shanti-nivas/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Shree Shanti Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Gokul Flora",
                "slug" => "/gokul-flora",
                "reel" => "gokul-flora",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/gokul-flora/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Gokul Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Gravity Aarambh",
                "slug" => "/gravity-aarambh",
                "reel" => "gravity-aarambh",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/gravity-aarambh/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Gravity Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Greenfield",
                "slug" => "/greenfield",
                "reel" => "greenfield",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/greenfield/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Greenfield Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Happy Aura",
                "slug" => "/happy-aura",
                "reel" => "happy-aura",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/happy-aura/logo.jpg"),
                "type" => "2 & 3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Gayatri Infrastructure",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Harivilla Harmony",
                "slug" => "/harivilla-harmony",
                "reel" => "harivilla-harmony",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/harivilla-harmony/logo.jpg"),
                "type" => "2 & 3 BHK Exclusive Bungalows",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Harivilla Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Jaldeep Trident",
                "slug" => "/jaldeep-trident",
                "reel" => "jaldeep-trident",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/jaldeep-trident/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Jaldeep Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Kahan Villa",
                "slug" => "/kahan-villa",
                "reel" => "kahan-villa",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/kahan-villa/logo.jpg"),
                "type" => "Residential Villas",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Kahan Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Madhuram Aura",
                "slug" => "/madhuram-aura",
                "reel" => "madhuram-aura",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/madhuram-aura/logo.jpg"),
                "type" => "3 BHK Exclusive Living",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Pios Sky, Opp Swad Ganthiya Rath, Chandkheda, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Chandkheda",
                    "map_description" => "Nearby landmarks include S.P. Ring Road, Zundal Circle, Chandkheda BRTS, Highway Mall, Satyamev Hospital, Hyundai Showroom, Village Inn, and IOC Road."
                ]
            ],
            "builder" => [
                "name" => "Aura Construction (Madhuram Group)",
                "logo_image_id" => null,
                "corporate_address" => "Sur. No. 7/2, T.P. - 75, F.P. - 6+10, Nr. Pious Sky, Chandkheda, Ahmedabad",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9879208698"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => "Earthquake Resistant R.C.C. Frame Structure",
                "flooring" => "Branded vitrified tiles in entire flat",
                "kitchen" => "Granite finished platform with SS sink, glazed tiles dado up to lintel level",
                "toilets" => "Designer tiles dado up to beam bottom, CP fittings & sanitary ware of reputed brands",
                "utility" => null,
                "electrical" => "Single phase meter, concealed wiring, MCB & ELCB, adequate points",
                "doors_windows" => "Decorative main entrance door, glazed aluminum windows",
                "internal_paint" => "Internal walls finished with putty over mala plaster"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Street lights, solar for common usage",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "CCTV surveillance in common areas & lift"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted car parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Society garden",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "Street lights in society",
                "security_monitoring" => "CCTV surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Chandkheda",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Madhuram Aura offers exclusive 3 BHK living in Chandkheda with strong connectivity and amenities like CCTV, garden, solar, and allocated parking.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Madhuram Group",
                        "location" => "Chandkheda, Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Kalptaru",
                "slug" => "/kalptaru",
                "reel" => "kalptaru",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/kalptaru/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Kalptaru Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Kesar Orion",
                "slug" => "/kesar-orion",
                "reel" => "kesar-orion",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/kesar-orion/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Kesar Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Krish Atulya - II",
                "slug" => "/krish-atulya-ii",
                "reel" => "krish-atulya-ii",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/krish-atulya-ii/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Krish Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Link In Heights",
                "slug" => "/link-in-heights",
                "reel" => "link-in-heights",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/link-in-heights/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Link In Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Marjan 19",
                "slug" => "/marjan-19",
                "reel" => "marjan-19",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/marjan-19/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Marjan Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "Meet Bungalows",
                "slug" => "/meet-bungalows",
                "reel" => "meet-bungalows",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/meet-bungalows/logo.jpg"),
                "type" => "Residential Bungalows",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Millennium Bungalows",
                "slug" => "/millennium-bungalows",
                "reel" => "millennium-bungalows",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/millennium-bungalows/logo.jpg"),
                "type" => "Residential Bungalows",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "New Panchshil Apartment",
                "slug" => "/new-panchshil-apartment",
                "reel" => "new-panchshil-apartment",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/new-panchshil-apartment/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Obsidian Towers",
                "slug" => "/obsidian-towers",
                "reel" => "obsidian-towers",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/obsidian-towers/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Orium Antaara",
                "slug" => "/orium-antaara",
                "reel" => "orium-antaara",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/orium-antaara/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Orium Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Oxipark",
                "slug" => "/oxipark",
                "reel" => "oxipark",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/oxipark/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Pratiti Anandam",
                "slug" => "/pratiti-anandam",
                "reel" => "pratiti-anandam",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/pratiti-anandam/logo.jpg"),
                "type" => "4 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Ognaj Circle, SP Ring Road",
                    "city" => "Ahmedabad",
                    "area" => "Ognaj",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Pratiti Developers",
                "logo_image_id" => null,
                "corporate_address" => "Pratiti Anandam, Near Ognaj Circle, SP Ring Road, Ahmedabad - 380060, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9800082500"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake Resistant RCC Structure",
                "flooring" => "Premium quality vitrified tiles",
                "kitchen" => "Granite platform, SS sink (not explicitly mentioned but assumed standard)",
                "toilets" => "High quality bath fittings with concealed plumbing",
                "utility" => "Provision for washing machine (not specified, assumed optional)",
                "electrical" => "Concealed copper wiring with premium modular switches",
                "doors_windows" => "Aluminium section windows, decorative main door, flush internal doors",
                "internal_paint" => "White putty on internal walls, acrylic paint on external walls"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar electricity backup",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "24/7 security, entry gate"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Available"
            ],
            "amenities" => [
                "clubhouse" => "Elegant foyer",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen area",
                "community_living" => "Event lawn",
                "24_7_security" => true,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Ognaj / SP Ring Road",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Pratiti Anandam offers spacious 4BHK apartments with modern amenities at a prime SP Ring Road location.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Pratiti Developers",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Rajyash Gopinath",
                "slug" => "/rajyash-gopinath",
                "reel" => "rajyash-gopinath",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/rajyash-gopinath/logo.jpg"),
                "type" => "2 & 3 BHK Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Iscon Temple, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Iscon / SG Highway",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Rajyash Group",
                "logo_image_id" => null,
                "corporate_address" => "Rajyash House, Near Jodhpur Cross Roads, Satellite, Ahmedabad",
                "contact" => [
                    "website" => "https://rajyashgroup.com",
                    "sales_email" => null,
                    "phone" => "079-40081234"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink and designer dado",
                "toilets" => "Designer tiles up to lintel, branded sanitary fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring with branded modular switches",
                "doors_windows" => "Decorative main door, flush internal doors, aluminium windows",
                "internal_paint" => "Wall putty finish inside, acrylic paint outside"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar lights in common areas",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Available"
            ],
            "amenities" => [
                "clubhouse" => "Community hall / multipurpose room",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga and meditation area",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen seating",
                "community_living" => "Landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED lighting in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Iscon / SG Highway",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Rajyash Gopinath brings 2 & 3 BHK lifestyle apartments in a prime location with modern amenities and secure living.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Rajyash Group",
                        "location" => "Ahmedabad",
                        "url" => "https://rajyashgroup.com"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        
        Project::create([
            "project" => [
                "name" => "Rushabh Elegance",
                "slug" => "/rushabh-elegance",
                "reel" => "rushabh-elegance",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/rushabh-elegance/logo.jpg"),
                "type" => "2 & 3 BHK Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Sola Bhagwat Vidyapith, S. G. Highway",
                    "city" => "Ahmedabad",
                    "area" => "Sola",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Rushabh Developers",
                "logo_image_id" => null,
                "corporate_address" => "Sola, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
            ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink, glazed tile dado",
                "toilets" => "Designer wall tiles, branded CP fittings, sanitary ware",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Main decorative door, aluminium windows",
                "internal_paint" => "Putty finished walls"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar power for common areas",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance & intercom"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Available"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall",
                "floating_fitness" => "Well-equipped gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Indoor games",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Sola, SG Highway",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Rushabh Elegance offers modern 2 & 3 BHK apartments at a prime SG Highway location with excellent connectivity.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Rushabh Developers",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Rushabh Elegance",
                "slug" => "/rushabh-elegance",
                "reel" => "rushabh-elegance",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/rushabh-elegance/logo.jpg"),
                "type" => "2 & 3 BHK Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Sola Bhagwat Vidyapith, S. G. Highway",
                    "city" => "Ahmedabad",
                    "area" => "Sola",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Rushabh Developers",
                "logo_image_id" => null,
                "corporate_address" => "Sola, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
               
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink, glazed tile dado",
                "toilets" => "Designer wall tiles, branded CP fittings, sanitary ware",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Main decorative door, aluminium windows",
                "internal_paint" => "Putty finished walls"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar power for common areas",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance & intercom"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Available"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall",
                "floating_fitness" => "Well-equipped gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Indoor games",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Sola, SG Highway",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Rushabh Elegance offers modern 2 & 3 BHK apartments at a prime SG Highway location with excellent connectivity.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Rushabh Developers",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Sai Heaven",
                "slug" => "/sai-heaven",
                "reel" => "sai-heaven",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/sai-heaven/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Sai Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => "https://gujrera.gujarat.gov.in",
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "RERA registered, standard security provision"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => true,
                "visual_monitoring" => false,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Sai Heaven is a RERA registered residential project, offering modern 2 & 3 BHK homes with reliable amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Sai Developers",
                        "location" => "Ahmedabad",
                        "url" => "https://gujrera.gujarat.gov.in"
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Rushabh Luxuria",
                "slug" => "/rushabh-luxuria",
                "reel" => "rushabh-luxuria",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/rushabh-luxuria/logo.jpg"),
                "type" => "Luxury 2 & 3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Anant Flats, New Sharda Mandir Rd, Jain Nagar, Paldi",
                    "city" => "Ahmedabad",
                    "area" => "Paldi",
                    "map_description" => "Near Jain Nagar, easily accessible via Paldi and Sharda Mandir Road."
                ]
            ],
            "builder" => [
                "name" => "Rushabh Infraspace LLP",
                "logo_image_id" => null,
                "corporate_address" => "Paldi, Ahmedabad, Gujarat - 380007",
                "contact" => [
                    "website" => "http://www.rushabhbuildcon.com",
                    "sales_email" => null,
                    "phone" => "+91 90678 49252, +91 94091 15744"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
               
                "floorplan_image_id" => null,
                "price" => null
            ],
         ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure using ISI branded Fe 500 steel and premium cement (Hathi, Siddhi, Binani, Sanghi, Ultratech).",
                "flooring" => "Large vitrified tiles in living rooms; wooden tiles in one bedroom; branded tiles (Asian/Somani/Simpolo/Quotone) in other areas.",
                "kitchen" => "Attractive white stone platform with stainless sink; kota stone in store.",
                "toilets" => "Designer wall & floor tiles; Jaquar sanitaryware and faucets; concealed plumbing.",
                "utility" => "Wash area with kota stone, provision for washing machine.",
                "electrical" => "Concealed conduits with copper wiring (Avocab/Polycab/RR/KEI), modular ISI switches, Schneider MCB/ELCB, AC points in all rooms, TV/telephone points.",
                "doors_windows" => "ISI standard doors (32mm main, 30mm bedroom), wooden framing, chrome plated hardware, full height doors, aluminium section windows.",
                "internal_paint" => "Internal: Birla putty finish; External: Double coat plaster with Nerolac/Asian/Indotex texture paint."
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar system for common areas.",
                "number_of_lifts" => "5 lifts (6 passenger capacity, Omega/Trio/Otis).",
                "direction_info" => "Internal floor height: 9’4” – 9’5”.",
                "security" => "CCTV surveillance, access-controlled amenities via mobile app."
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Allotted 2 car parking with mechanical lift.",
                "basement_ground" => "Basement and ground level parking with paver blocks or kota stone."
            ],
            "amenities" => [
                "clubhouse" => "AC banquet hall with kitchen for functions, society meeting room, guest reception & waiting lounge.",
                "floating_fitness" => "Air-conditioned gym.",
                "dedicated_guest_rooms" => null,
                "work_from_home" => "Library & projector area.",
                "health_hub" => "Yoga area, jogging track, indoor games, box cricket.",
                "kids_area" => "Children’s play area.",
                "senior_sitouts" => "Dedicated senior citizen seating.",
                "community_living" => "Luxurious entrance foyer, landscaped garden, decorative compound wall.",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Centrally Wi-Fi enabled amenities; mobile app-based access.",
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "Decorative light fixtures in compound and common areas.",
                "security_monitoring" => "CCTV coverage throughout premises."
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Paldi, Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Rushabh Luxuria offers luxury living in Paldi with 2 & 3 BHK homes, extensive amenities, EV charging, and premium specifications.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Luxury Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Rushabh Infraspace LLP",
                        "location" => "Ahmedabad",
                        "url" => "http://www.rushabhbuildcon.com"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Panorama Heights",
                "slug" => "/panorama-heights",
                "reel" => "panorama-heights",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/panorama-heights/logo.jpg"),
                "type" => "2 & 3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Satyamev Hospital, Chandlodiya",
                    "city" => "Ahmedabad",
                    "area" => "Chandlodiya",
                    "map_description" => "Located near Satyamev Hospital with good connectivity to SG Highway and nearby schools, hospitals, and retail."
                ]
            ],
            "builder" => [
                "name" => "Panorama Developers",
                "logo_image_id" => null,
                "corporate_address" => "Chandlodiya, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink and dado up to lintel level",
                "toilets" => "Branded sanitaryware and CP fittings, designer wall tiles",
                "utility" => "Provision for washing machine in utility area",
                "electrical" => "Concealed copper wiring, branded modular switches, sufficient power points",
                "doors_windows" => "Decorative main door, flush doors inside, aluminium section windows",
                "internal_paint" => "Putty finish inside, exterior acrylic paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar lighting for common areas",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "CCTV surveillance, intercom facility"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Ground & basement parking"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Well-equipped gym",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Indoor games room, yoga area",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Dedicated senior citizen sit-outs",
                "community_living" => "Landscaped garden with seating",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED fittings in common areas",
                "security_monitoring" => "CCTV coverage"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Chandlodiya",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Panorama Heights offers affordable 2 & 3 BHK homes with modern amenities near Chandlodiya, ensuring good connectivity and lifestyle.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Panorama Developers",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Pearl-38",
                "slug" => "/pearl-38",
                "reel" => "pearl-38",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/pearl-38/logo.jpg"),
                "type" => "3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Nandanvan Society, Chandlodiya",
                    "city" => "Ahmedabad",
                    "area" => "Chandlodiya",
                    "map_description" => "Located near Nandanvan Society, with good connectivity to schools, hospitals, and SG Highway."
                ]
            ],
            "builder" => [
                "name" => "Pearl Group",
                "logo_image_id" => null,
                "corporate_address" => "Chandlodiya, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
               
                "floorplan_image_id" => null,
                "price" => null
            ],
         ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in living, kitchen, and bedrooms",
                "kitchen" => "Granite platform with SS sink and glazed tile dado",
                "toilets" => "Designer wall tiles, branded CP fittings, concealed plumbing",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring, branded modular switches",
                "doors_windows" => "Decorative main door, flush internal doors, aluminium section windows",
                "internal_paint" => "Putty finished walls, acrylic paint on exteriors"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common lighting",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "CCTV surveillance, intercom facility"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking for each unit",
                "basement_ground" => "Ground level parking"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga / meditation area, indoor games",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED lighting in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Chandlodiya",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Pearl-38 offers premium 3 BHK apartments with modern amenities in Chandlodiya, close to SG Highway and major conveniences.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Pearl Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Royal Heaven",
                "slug" => "/royal-heaven",
                "reel" => "royal-heaven",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/royal-heaven/logo.jpg"),
                "type" => "2 & 3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Ambe Green, Hathijan, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Hathijan",
                    "map_description" => "Located near Ambe Green, Hathijan; connected to major roads and civic amenities."
                ]
            ],
            "builder" => [
                "name" => "Royal Group",
                "logo_image_id" => null,
                "corporate_address" => "Hathijan, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink and glazed dado tiles",
                "toilets" => "Designer wall tiles, branded CP fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring with branded modular switches",
                "doors_windows" => "Decorative main door, flush doors inside, aluminium windows",
                "internal_paint" => "Putty finished internal walls, acrylic paint on exterior"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common lighting",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, intercom facility"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Ground / Basement parking"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall",
                "floating_fitness" => "Well-equipped gym",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga / meditation area, indoor games",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED lights in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Hathijan",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Royal Heaven provides affordable 2 & 3 BHK apartments with modern amenities, located in Hathijan, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Royal Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Pratiti Anandam",
                "slug" => "/pratiti-anandam",
                "reel" => "pratiti-anandam",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/pratiti-anandam/logo.jpg"),
                "type" => "4 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Ognaj Circle, SP Ring Road",
                    "city" => "Ahmedabad",
                    "area" => "Ognaj",
                    "map_description" => "Close to SP Ring Road and Ognaj Circle with easy access to highways and amenities."
                ]
            ],
            "builder" => [
                "name" => "Pratiti Developers",
                "logo_image_id" => null,
                "corporate_address" => "Pratiti Anandam, Near Ognaj Circle, SP Ring Road, Ahmedabad - 380060, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9800082500"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
               
                "floorplan_image_id" => null,
                "price" => null
            ],
         ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink, provision for water purifier",
                "toilets" => "High quality bath fittings, branded sanitaryware",
                "utility" => "Ceramic tiles, washing machine provision",
                "electrical" => "Concealed copper wiring, modular switches, AC points in all rooms",
                "doors_windows" => "Decorative main door, flush internal doors, aluminium windows",
                "internal_paint" => "Putty finish on walls, acrylic paint externally"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common areas",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "24/7 security with CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Ground / Basement parking"
            ],
            "amenities" => [
                "clubhouse" => "Well-designed clubhouse",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga & meditation area",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen seating",
                "community_living" => "Event lawn & landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => "LED lights in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Ognaj / SP Ring Road",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Pratiti Anandam offers spacious 4BHK apartments with premium amenities at a prime SP Ring Road location.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Pratiti Developers",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Prarthna Florence",
                "slug" => "/prarthna-florence",
                "reel" => "prarthna-florence",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/prarthna-florence/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ],
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Samipya",
                "slug" => "/samipya",
                "reel" => "samipya",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/samipya/logo.jpg"),
                "type" => "3 & 4 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Vaishnodevi Circle, S. G. Highway",
                    "city" => "Ahmedabad",
                    "area" => "Vaishnodevi",
                    "map_description" => "Located close to SG Highway & Vaishnodevi Circle with easy access to schools, hospitals and retail hubs."
                ]
            ],
            "builder" => [
                "name" => "Samipya Group",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "11'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bath" => ["size" => "5'0\" x 8'0\""],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "12'0\" x 19'0\""],
                            "kitchen" => ["size" => "10'0\" x 8'0\"", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "5'0\" x 7'0\""],
                            "balcony" => ["size" => "5'0\" x 10'0\""]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1450–1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "12'0\" x 15'0\"", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "12'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "11'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bath" => ["size" => "5'0\" x 8'0\""],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "12'0\" x 21'0\""],
                            "kitchen" => ["size" => "10'0\" x 9'0\"", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "6'0\" x 8'0\""],
                            "balcony" => ["size" => "5'0\" x 11'0\""]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1850–1900 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles in living, dining, bedrooms, and kitchen",
                "kitchen" => "Granite platform with SS sink, dado tiles up to lintel level",
                "toilets" => "Designer wall tiles, branded sanitary fittings, concealed plumbing",
                "utility" => "Dedicated wash area with provision for washing machine",
                "electrical" => "Concealed copper wiring, branded modular switches, adequate points",
                "doors_windows" => "Decorative main door, laminated flush doors, anodized aluminium windows",
                "internal_paint" => "Putty finish with acrylic paint inside, weatherproof paint outside"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common areas",
                "number_of_lifts" => "2 automatic lifts per block",
                "direction_info" => null,
                "security" => "24/7 CCTV surveillance & intercom facility"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Basement and ground level parking"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga/meditation room, indoor games",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Landscaped garden with seating",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED lights in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Vaishnodevi, SG Highway",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Samipya offers well-planned 3 & 4 BHK apartments near Vaishnodevi Circle with premium amenities, solar-powered common areas, and excellent connectivity.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Samipya Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Samruddham Nest",
                "slug" => "/samruddham-nest",
                "reel" => "samruddham-nest",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/samruddham-nest/logo.jpg"),
                "type" => "3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Auda Garden, Nr. Vastral Ring Road",
                    "city" => "Ahmedabad",
                    "area" => "Vastral",
                    "map_description" => "Located near Auda Garden, well connected to Vastral Ring Road and nearby civic facilities."
                ]
            ],
            "builder" => [
                "name" => "Samruddham Group",
                "logo_image_id" => null,
                "corporate_address" => "Vastral, Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "11'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "11'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bath" => ["size" => "5'0\" x 8'0\""],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "12'0\" x 18'0\""],
                            "kitchen" => ["size" => "10'0\" x 8'0\"", "type" => "Close", "dry_area" => true],
                            "utility_area" => ["size" => "5'0\" x 7'0\""],
                            "balcony" => ["size" => "5'0\" x 9'0\""]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink, dado tiles up to lintel",
                "toilets" => "Branded CP fittings, ceramic tiles, concealed plumbing",
                "utility" => "Wash area with provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Decorative main door, flush doors inside, aluminium section windows",
                "internal_paint" => "Putty finished walls with acrylic paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered lighting for common areas",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, intercom facility"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking for each unit",
                "basement_ground" => "Ground / Basement parking"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga / meditation area, indoor games",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen seating",
                "community_living" => "Landscaped garden with pathways",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED fittings in common areas",
                "security_monitoring" => "CCTV monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Vastral",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Samruddham Nest offers affordable 3 BHK homes with premium specifications and amenities, in the fast-developing Vastral locality of Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "Approx. 1500 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Samruddham Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Serenity Status",
                "slug" => "/serenity-status",
                "reel" => "serenity-status",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/serenity-status/logo.jpg"),
                "type" => "2 & 3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near S.P. Ring Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Easily accessible from S.P. Ring Road with nearby schools, hospitals and shopping."
                ]
            ],
            "builder" => [
                "name" => "Status Infra",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1200 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink, dado up to lintel",
                "toilets" => "Branded sanitary fittings, anti-skid ceramic flooring",
                "utility" => "Wash area with provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches, adequate points",
                "doors_windows" => "Decorative main door, flush doors, aluminium windows",
                "internal_paint" => "Putty finished walls, weatherproof external paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar power for common areas",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "24/7 CCTV monitoring and intercom"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allocated car parking",
                "basement_ground" => "2-level basement & ground parking"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga & meditation deck, indoor games",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen seating",
                "community_living" => "Landscaped garden, party lawn",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED lights in common areas",
                "security_monitoring" => "CCTV surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Near S.P. Ring Road",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Serenity Status brings modern 2 & 3 BHK apartments with lifestyle amenities and excellent connectivity to S.P. Ring Road.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Status Infra",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Shalin Abode",
                "slug" => "/shalin-abode",
                "reel" => "shalin-abode",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shalin-abode/logo.jpg"),
                "type" => "3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near S.P. Ring Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Strategically located near S.P. Ring Road with connectivity to city hubs, schools, hospitals and shopping."
                ]
            ],
            "builder" => [
                "name" => "Shalin Group",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1450 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in living, dining, bedrooms and kitchen; anti-skid ceramic tiles in bathrooms & balconies",
                "kitchen" => "Granite platform with SS sink and dado tiles up to lintel height",
                "toilets" => "Premium sanitary fittings, branded CP fittings, concealed plumbing",
                "utility" => "Dedicated wash area with water and drainage points",
                "electrical" => "Concealed copper wiring, modular switches, sufficient power points with AC points in bedrooms",
                "doors_windows" => "Decorative main door, laminated flush internal doors, powder coated aluminium windows",
                "internal_paint" => "Putty finished walls with acrylic emulsion paint inside, weatherproof paint outside"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common lighting",
                "number_of_lifts" => "Automatic lifts in each block",
                "direction_info" => null,
                "security" => "Round-the-clock security with CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted car parking",
                "basement_ground" => "Ground & basement parking"
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose clubhouse",
                "floating_fitness" => "Equipped gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga & meditation deck",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen seating zone",
                "community_living" => "Landscaped garden, community space for gatherings",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "Energy efficient LED lights in common areas",
                "security_monitoring" => "CCTV cameras with monitoring"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Near S.P. Ring Road",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Shalin Abode provides 3 BHK premium apartments with modern specifications, lifestyle amenities and excellent connectivity to SP Ring Road.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "Approx. 1450 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Shalin Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Seven Springs",
                "slug" => "/seven-springs",
                "reel" => "seven-springs",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/seven-springs/logo.jpg"),
                "type" => "4 BHK Premium Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near S.P. Ring Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Strategically located near S.P. Ring Road with excellent connectivity to schools, hospitals, and business hubs."
                ]
            ],
            "builder" => [
                "name" => "Seven Springs Group",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 2400 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
               
                "floorplan_image_id" => null,
                "price" => null
            ],
         ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink, dado tiles up to lintel",
                "toilets" => "Premium sanitary fittings, branded CP fittings, anti-skid ceramic tiles",
                "utility" => "Wash area with provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches, adequate power points",
                "doors_windows" => "Decorative main door, laminated flush doors, aluminium windows",
                "internal_paint" => "Putty finish with acrylic emulsion paint inside, weatherproof paint outside"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar powered common lighting",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "24/7 gated security with CCTV monitoring"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Dedicated car parking",
                "basement_ground" => "Ground / basement level parking"
            ],
            "amenities" => [
                "clubhouse" => "Premium clubhouse with community space",
                "floating_fitness" => "Gymnasium & fitness center",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Yoga & meditation deck",
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen seating",
                "community_living" => "Landscaped garden, multipurpose party lawn",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED lighting in common areas",
                "security_monitoring" => "CCTV surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Near S.P. Ring Road",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Seven Springs offers spacious 4 BHK premium apartments with modern amenities and strong connectivity to SP Ring Road, making it a great investment choice.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => "Approx. 2400 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Seven Springs Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);

        Project::create([
            "project" => [
                "name" => "Shantam Solitaire",
                "slug" => "/shantam-solitaire",
                "reel" => "shantam-solitaire",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shantam-solitaire/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ]
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
      
        Project::create([
            "project" => [
                "name" => "Shayona Sarvopari-2",
                "slug" => "/shayona-sarvopari-2",
                "reel" => "shayona-sarvopari-2",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shayona-sarvopari-2/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ]
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Shivansh Parmanand",
                "slug" => "/shivansh-parmanand",
                "reel" => "shivansh-parmanand",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/shivansh-parmanand/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "floorplan_image_id" => null,
                    "price" => null
                ]
            ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
    Project::create([
        "project" => [
        "name" => "Svet Elevate",
        "slug" => "/svet-elevate",
        "reel" => "svet-elevate",
        "brochure" => null,
        "logo_image_id" => asset($pathPrefix . "properties/svet-elevate/logo.jpg"),
        "type" => "4 BHK Premium Apartments",
        "visual_image_id" => null,
        "location" => [
            "address" => "Jain Nagar, Paldi, Ahmedabad - 380007",
            "city" => "Ahmedabad",
            "area" => "Paldi",
            "map_description" => "Near Hirabaug Crossing, Paldi Cross Road, Anjali Flyover, Parimal Underpass, Metro Station"
        ]
    ],
    "builder" => [
        "name" => "Svet Verticals LLP",
        "logo_image_id" => null,
        "corporate_address" => "401, Subh House, 77 Swastik Society, B/h St. Xavier’s Ladies Hostel, Navrangpura, Ahmedabad - 380009",
        "contact" => [
            "website" => null,
            "sales_email" => "svetelevate@gmail.com",
            "phone" => "+91 99254 88000"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "4BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "800 x 800 mm vitrified tiles", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "800 x 800 mm vitrified tiles", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "800 x 800 mm vitrified tiles", "wardrobe_niche" => null],
                    "bedroom_4" => ["size" => "800 x 800 mm vitrified tiles", "wardrobe_niche" => null],
                    "living_room" => ["size" => "1200 x 1200 mm vitrified tiles"],
                    "kitchen" => ["size" => null, "type" => "Granite platform, SS sink, dado upto lintel", "dry_area" => true],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => "Natural granite flooring"],
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
      
        "floorplan_image_id" => null,
        "price" => null
    ],
  ],
    "specifications" => [
        "structure" => "RCC frame structure, earthquake resistant",
        "flooring" => "Vitrified tiles in living/dining/bedrooms, granite in balcony",
        "kitchen" => "Granite platform, SS sink, provision for chimney & RO",
        "toilets" => "Designer vitrified tiles, Jaguar/Kohler/Hansgrohe fittings",
        "utility" => "Stone shelves, RO, geyser & washing machine provision",
        "electrical" => "3-phase concealed wiring, modular switches, TV/telephone points",
        "doors_windows" => "Flush veneer entrance door, flush laminate internal doors, anodized aluminium sliding windows",
        "internal_paint" => "Putty finished plaster inside, acrylic paint outside"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Renewable energy utilization",
        "number_of_lifts" => "Omega or equivalent",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire protection systems, emergency evacuation"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "2-car allotted parking per flat",
        "basement_ground" => "Basement parking"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => "Landscaped areas & tree planting",
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => true,
        "modular_kitchen" => "Granite platform with SS sink, provision for chimney",
        "designer_lighting" => null,
        "security_monitoring" => "CCTV, fire safety systems"
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => false
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => "Paldi",
        "growth" => null,
        "growthPeriod" => null,
        "avgRate" => null
    ],
    "investmentNote" => "Svet Elevate offers luxury 4 BHK apartments with premium finishes and modern amenities in Paldi, Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => null,
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => false
]);
    Project::create([
    "project" => [
        "name" => "Snehshilp Bliss",
        "slug" => "/snehshilp-bliss",
        "reel" => "snehshilp-bliss",
        "brochure" => null,
        "logo_image_id" => asset($pathPrefix . "properties/snehshilp-bliss/logo.jpg"),
        "type" => "2 & 3 BHK Apartments",
        "visual_image_id" => null,
        "location" => [
            "address" => "S.P. Ring Road, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "S.P. Ring Road",
            "map_description" => "Located on SP Ring Road, near schools, hospitals, shopping & business centers."
        ]
    ],
    "builder" => [
        "name" => "Snehshilp Group",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "2BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
       
        "floorplan_image_id" => null,
        "price" => null
    ],
 ],
    "specifications" => [
        "structure" => "RCC frame structure, earthquake resistant",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform, SS sink",
        "toilets" => "Branded CP fittings, ceramic tiles",
        "utility" => null,
        "electrical" => "Concealed copper wiring, modular switches",
        "doors_windows" => "Flush doors, aluminium windows",
        "internal_paint" => "Putty finished internal walls"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Solar lighting for common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV monitoring, intercom"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Allotted parking",
        "basement_ground" => "Ground/basement parking"
    ],
    "amenities" => [
        "clubhouse" => "Multipurpose hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga / meditation",
        "kids_area" => "Children’s play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => "Garden & community spaces",
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => true,
        "modular_kitchen" => "Provision for modular kitchen",
        "designer_lighting" => null,
        "security_monitoring" => "CCTV surveillance"
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => false
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => "S.P. Ring Road",
        "growth" => null,
        "growthPeriod" => null,
        "avgRate" => null
    ],
    "investmentNote" => "Snehshilp Bliss provides 2 & 3 BHK apartments with modern amenities on SP Ring Road.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Snehshilp Group",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => true
]);

    Project::create([
    "project" => [
        "name" => "Splendora 1",
        "slug" => "/splendora-1",
        "reel" => "splendora-1",
        "brochure" => null,
        "logo_image_id" => asset($pathPrefix . "properties/splendora-1/logo.jpg"),
        "type" => null,
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => null
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => null,
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "2BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
        
        "floorplan_image_id" => null,
        "price" => null
    ],
],
    "specifications" => [
        "structure" => null,
        "flooring" => null,
        "kitchen" => null,
        "toilets" => null,
        "utility" => null,
        "electrical" => null,
        "doors_windows" => null,
        "internal_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => null,
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => null
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => null,
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => null,
        "24_7_security" => false,
        "visual_monitoring" => false,
        "fire_resilience" => false,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
        "security_monitoring" => null
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => true
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => null,
        "growth" => null,
        "growthPeriod" => null,
        "avgRate" => null
    ],
    "investmentNote" => null,
    "buyProperties" => [
        [
            "img" => null,
            "title" => null,
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => null,
                "url" => null
            ]
        ]
    ],
    "featured" => false,
    "emerging_property" => false,
    "emerging_area" => false
]);
    Project::create([
    "project" => [
        "name" => "Sukrut Sarvam",
        "slug" => "/sukrut-sarvam",
        "reel" => "sukrut-sarvam",
        "brochure" => null,
        "logo_image_id" => asset($pathPrefix . "properties/sukrut-sarvam/logo.jpg"),
        "type" => "3 BHK Apartments",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near S.G. Highway, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "S.G. Highway",
            "map_description" => "Close to SG Highway, with access to schools, hospitals, and shopping."
        ]
    ],
    "builder" => [
        "name" => "Sukrut Developers",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                    "utility_area" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1500 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
        
        "floorplan_image_id" => null,
        "price" => null
    ],
],
    "specifications" => [
        "structure" => "RCC frame structure, earthquake resistant",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded fittings, anti-skid ceramic flooring",
        "utility" => "Wash area",
        "electrical" => "Concealed copper wiring, modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminium windows",
        "internal_paint" => "Putty finished walls with acrylic paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Solar power for common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV monitoring"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Allotted car parking",
        "basement_ground" => "Ground / basement parking"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga & meditation zone",
        "kids_area" => "Children’s play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => "Landscaped garden",
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => true,
        "modular_kitchen" => "Provision for modular kitchen",
        "designer_lighting" => "LED fittings in common areas",
        "security_monitoring" => "CCTV surveillance"
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => false
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => "SG Highway",
        "growth" => null,
        "growthPeriod" => null,
        "avgRate" => null
    ],
    "investmentNote" => "Sukrut Sarvam offers spacious 3 BHK apartments with modern amenities near SG Highway.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "Approx. 1500 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sukrut Developers",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => true
]);
          Project::create([
            "project" => [
                "name" => "Suryakiran Villa",
                "slug" => "/suryakiran-villa",
                "reel" => "suryakiran-villa",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/suryakiran-villa/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);       
        Project::create([
            "project" => [
                "name" => "Swara Rera",
                "slug" => "/swara-rera",
                "reel" => "swara-rera",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/swara-rera/logo.jpg"),
                "type" => "3 BHK Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Sheen Inc",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => "Granite platform, SS sink", "type" => "Closed", "dry_area" => true],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Carpet area ~125–135 sq.m.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in living, dining, bedrooms",
                "kitchen" => "Granite platform with SS sink, dado up to lintel level",
                "toilets" => "Branded sanitary ware & CP fittings, anti-skid ceramic tiles",
                "utility" => "Wash area with provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches, adequate power points",
                "doors_windows" => "Decorative main door, flush internal doors, aluminium windows",
                "internal_paint" => "Putty finished walls, weatherproof exterior paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar power for common areas",
                "number_of_lifts" => "Automatic elevators",
                "direction_info" => null,
                "security" => "CCTV, 24/7 gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted parking",
                "basement_ground" => "Basement + ground level parking"
            ],
            "amenities" => [
                "clubhouse" => "Well-equipped clubhouse",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children’s play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => "Community hall, landscaped garden",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED fittings in common areas",
                "security_monitoring" => "CCTV surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Swara Rera by Sheen Inc offers thoughtfully designed 3 BHK apartments with modern specifications and essential lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => "Carpet area ~125–135 sq.m.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Sheen Inc",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
       
        Project::create([
            "project" => [
                "name" => "Swara Skypark",
                "slug" => "/swara-skypark",
                "reel" => "swara-skypark",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/swara-skypark/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "The Fourfront Residency",
                "slug" => "/the-fourfront-residency",
                "reel" => "the-fourfront-residency",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/fourfront-residency/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "The Landmark Luxuria",
                "slug" => "/the-landmark-luxuria",
                "reel" => "the-landmark-luxuria",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/landmark-luxuria/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);       

        Project::create([
            "project" => [
                "name" => "The Residency",
                "slug" => "/the-residency",
                "reel" => "the-residency",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/the-residency/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => null,
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => null,
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => null,
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "The Skyon",
                "slug" => "/the-skyon",
                "reel" => "the-skyon",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/the-skyon/logo.jpg"),
                "type" => "2 BHK Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Shraddha Heritage Bunglows, B/h. Suryam Green, RTO Road, Vastral",
                    "city" => "Ahmedabad",
                    "area" => "Vastral",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "98242 58361"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "RCC structure",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed wiring",
                "doors_windows" => "Aluminium sliding windows",
                "internal_paint" => "Putty finished walls"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Rooftop solar installation",
                "number_of_lifts" => "Yes",
                "direction_info" => null,
                "security" => "CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement + visitor parking",
                "basement_ground" => "Available"
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => "Common plot",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Vastral",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Affordable 2 BHK project with solar rooftop and basement parking.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Triveni 84",
                "slug" => "/triveni-84",
                "reel" => "triveni-84",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/triveni-84/logo.jpg"),
                "type" => "4 BHK Premium Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Meghmani Farm, Off Iscon Ambli Road, Makarba",
                    "city" => "Ahmedabad",
                    "area" => "Makarba",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Triveni Bohra Infraspace",
                "logo_image_id" => null,
                "corporate_address" => "1013-14, Aaron Spectra, B/h. Rajpath Club Road, Bodakdev, Ahmedabad",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 87996 08979"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform, SS sink",
                "toilets" => "Branded CP fittings and sanitary ware",
                "utility" => null,
                "electrical" => "Concealed wiring, modular switches",
                "doors_windows" => "Decorative flush doors, aluminium windows",
                "internal_paint" => "Putty finish"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar lighting in common areas",
                "number_of_lifts" => "Fire lifts available",
                "direction_info" => null,
                "security" => "CCTV monitoring"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement parking",
                "basement_ground" => "Yes"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Play area",
                "senior_sitouts" => "Seating zones",
                "community_living" => "Landscaped common plot",
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => true,
                "modular_kitchen" => "Provision for modular kitchen",
                "designer_lighting" => "LED in common areas",
                "security_monitoring" => "CCTV"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => false
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Makarba",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Premium 4 BHK project with fire lifts and spacious planning.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Triveni Bohra Infraspace",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "The Storeys Golf Coast",
                "slug" => "/the-storeys-golf-coast",
                "reel" => "the-storeys-golf-coast",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/the-storeys-golf-coast/logo.jpg"),
                "type" => "4 & 5 BHK Luxury Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Shantigram Township, Nr. Vaishno Devi Circle, Gandhinagar",
                    "city" => "Gandhinagar",
                    "area" => "Shantigram",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Adi Shantigram Storeys LLP",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9099979715"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "5BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_5" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null, "type" => null, "dry_area" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Shantigram",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Luxury 4 & 5 BHK apartments in Shantigram Township by Adi Shantigram Storeys LLP.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Adi Shantigram Storeys LLP",
                        "location" => "Ahmedabad / Gandhinagar",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Vatsal Green",
                "slug" => "/vatsal-green",
                "reel" => "vatsal-green",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/vatsal-green/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => "F.P 61, Survey No 176, TP 2 Bopal, Behind Sterling City, Bopal Gam",
                    "city" => "Ahmedabad",
                    "area" => "Bopal",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Pramah Buildspace LLP",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9898393588"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => "Bopal",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Residential project by Pramah Buildspace LLP at Bopal, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Pramah Buildspace LLP",
                        "location" => "Bopal, Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Venus Glory",
                "slug" => "/venus-glory",
                "reel" => "venus-glory",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/venus-glory/logo.jpg"),
                "type" => null,
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Venus Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Residential project Venus Glory by Venus Group.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Venus Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Vertical Vue",
                "slug" => "/vertical-vue",
                "reel" => "vertical-vue",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/vertical-vue/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Vertical Vue premium residential project in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Elysian",
                "slug" => "/elysian",
                "reel" => "elysian",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/elysian/logo.jpg"),
                "type" => "Residential Apartments",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Elysian Group",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Elysian premium residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Elysian Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);       
        Project::create([
            "project" => [
                "name" => "The Sun",
                "slug" => "/the-sun",
                "reel" => "the-sun",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/the-sun/logo.jpg"),
                "type" => "Luxury Residences",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "The Sun luxury residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Vrundavan Villa",
                "slug" => "/vrundavan-villa",
                "reel" => "vrundavan-villa",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/vrundavan-villa/logo.jpg"),
                "type" => "Luxury Villas",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Vrundavan Villa luxury villa project in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Villas",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
     
        Project::create([
            "project" => [
                "name" => "Oxipark DP 8",
                "slug" => "/oxipark-dp-8",
                "reel" => "oxipark-dp-8",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/oxipark-dp-8/logo.jpg"),
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => null,
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                   
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
        ],
            "specifications" => [
                "structure" => null,
                "flooring" => null,
                "kitchen" => null,
                "toilets" => null,
                "utility" => null,
                "electrical" => null,
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => null
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => null,
                "24_7_security" => false,
                "visual_monitoring" => false,
                "fire_resilience" => false,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => null
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
                "hospitality_lounge" => true
            ],
            "graphics" => [
                "project_logo" => null,
                "builder_logo" => null,
                "elevation_visual" => null,
                "floorplan" => null,
                "amenities_map_icons" => null
            ],
            "localityData" => [
                "name" => null,
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Oxipark DP 8 residential project offering 2 & 3 BHK homes in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => null,
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
    "project" => [
        "name" => "Aloka by Samruddh",
        "slug" => "/aloka-by-samruddh",
        "reel" => "aloka",
        "brochure" => "ALOKA BY SAMRUDDH.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ALOKA%20BY%20SAMRUDDH.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Aloka by Samruddh offers premium residential living with modern planning and amenities."
        ]
    ],
    "builder" => [
        "name" => "Samruddh Group",
        "logo_image_id" => null,
        "corporate_address" => null,
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ],
    ],
    "specifications" => [
        "structure" => null,
        "flooring" => null,
        "kitchen" => null,
        "toilets" => null,
        "utility" => null,
        "electrical" => null,
        "doors_windows" => null,
        "internal_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => null,
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => null
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => null,
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => null,
        "24_7_security" => null,
        "visual_monitoring" => null,
        "fire_resilience" => null,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => null,
        "modular_kitchen" => null,
        "designer_lighting" => null,
        "security_monitoring" => null
    ],
    "lifestyle" => [
        "family" => true,
        "children" => true,
        "elderly" => true,
        "wellness" => true,
        "community_events" => true,
        "hospitality_lounge" => false
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aloka by Samruddh offers spacious homes with lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);

      

    }
}


    
 


 



 

  

 


