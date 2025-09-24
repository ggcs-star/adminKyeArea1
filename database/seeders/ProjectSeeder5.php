<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder5 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $pathPrefix = 'storage/assets/';
Project::create([
        "project" => [
        "name" => "Shri Sai Hari",
        "slug" => "/shri-sai-hari",
        "reel" => null,
        "brochure" => "Shri Sai Hari.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Shri%20Sai%20Hari.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Beside Cheher mata Mandir, near Adalaj Vav, Adalaj, Gandhinagar, Gujarat",
            "city" => "Gandhinagar",
            "area" => "Adalaj",
            "map_description" => "Shri Sai Hari offers 1 BHK luxurious apartments near Adalaj Vav with modern amenities, easy highway access and daily conveniences nearby."
        ]
    ],
    "builder" => [
        "name" => "Kashtbhanjan Dev Developers",
        "logo_image_id" => null,
        "corporate_address" => "Kashtbhanjan Dev Developers, Adalaj, Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "9227218468, 7383151138, 9016359738, 9426563401"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "1BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.0 x 3.6", "wardrobe_niche" => null],
                    "living_room" => ["size" => "3.1 x 3.6"],
                    "kitchen" => ["size" => "3.3 x 2.5"],
                    "dining_area" => ["size" => "3.3 x 2.5"],
                    "bath" => ["size" => "1.7 x 1.2"],
                    "wc" => ["size" => "1.2 x 1.8"],
                    "balcony" => ["size" => "1.3 x 1.4"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "38.36 - 39.82 sq.mt (RERA Carpet)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant R.C.C. Structure",
        "flooring" => "Vitrified Tiles in Living/Bedrooms/Kitchen/Dining & Ceramic/Rustic Tiles in Balcony",
        "kitchen" => "Vitrified Tiles, Granite platform with S.S. Sink",
        "toilets" => "Glazed/Ceramic tiles upto lintel, CP ISI standard brass fittings, EWC couple closet, counter/wall hung basin",
        "utility" => null,
        "electrical" => "Concealed Copper wiring with Modular Switches, MCB Distribution Panel",
        "doors_windows" => "Main Door Laminated, internal flush doors with oil paint, sliding aluminium windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "100% Acrylic exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Appropriate Signages & Foyer lighting",
        "number_of_lifts" => "Elevator for easy access",
        "direction_info" => null,
        "security" => "Earthquake resistant structure, single tower, 3-side road access"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ample parking space (Ground + 3 side road access)",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => false,
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
        "community_events" => false,
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
        "name" => "Adalaj, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shri Sai Hari by Kashtbhanjan Dev Developers offers 1 BHK luxurious apartments at Adalaj with spacious balconies, vitrified flooring, RCC earthquake-resistant structure and modern lifestyle conveniences near Adalaj ni Vav.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "1 BHK Flats",
            "size" => "38.36 - 39.82 sq.mt",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kashtbhanjan Dev Developers",
                "location" => "Adalaj, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shridhar Villa",
        "slug" => "/shridhar-villa",
        "reel" => null,
        "brochure" => "Shridhar Villa.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHRIDHAR%20VILLA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shridhar Villa offers residential living with modern planning and facilities."
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
            // brochure में details नहीं थे, इसलिए null रख रहे हैं
            "2BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
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
        "internal_paint" => null,
        "external_paint" => null
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
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
        "security_monitoring" => null
    ],
    "lifestyle" => [
        "family" => null,
        "children" => null,
        "elderly" => null,
        "wellness" => null,
        "community_events" => null,
        "hospitality_lounge" => null
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
    "investmentNote" => "Shridhar Villa is a residential project offering planned living spaces with lifestyle comforts.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Residential Flats",
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

Project::create([
    "project" => [
        "name" => "Shyamvan",
        "slug" => "/shyamvan",
        "reel" => null,
        "brochure" => "Shyamvan.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHYAMVAN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "FP No. 06, OP No. 06, Survey No. 15, TPS-21 (Koba), Moje: Koba, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Koba",
            "map_description" => "Shyamvan offers stylish modern apartments in Koba, Gandhinagar with fire safety systems, RCC structure, parking facilities and community amenities."
        ]
    ],
    "builder" => [
        "name" => "Akash Infra",
        "logo_image_id" => null,
        "corporate_address" => "Second Floor, 212 Sharan Business, Mansa Gandhinagar highway Road, Nr. D-MART, Sector 26, Gandhinagar, Gujarat 382028",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "+91 99097 50481"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.66 x 4.72", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.81 x 5.18", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "3.66 x 3.35", "wardrobe_niche" => null],
                    "living_room" => ["size" => "6.02 x 9.37 (Drawing/Living/Dining)"],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => "3.66 x 3.35"],
                    "store" => ["size" => "2.09 x 1.78"],
                    "wash" => ["size" => "1.83 x 3.35"],
                    "balcony" => ["size" => "2.82 x 4.54"],
                    "bath" => ["size" => "2.13 x 2.53"],
                    "wc" => ["size" => "1.83 x 1.37"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "176.61 sq.mt RERA Carpet + Balcony 12.80 sq.mt + Wash area 6.13 sq.mt",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC frame structure as per IS norms, earthquake resistant",
        "flooring" => null,
        "kitchen" => "Granite platform with SS sink (as per brochure drawing)",
        "toilets" => "Multiple toilets with vitrified/glazed tile finishes",
        "utility" => "Wash area provided",
        "electrical" => "As per CGDCR norms, concealed wiring & fire safety provisions",
        "doors_windows" => "Main & internal doors, aluminium sliding windows",
        "internal_paint" => null,
        "external_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "As per foyer & corridor design",
        "number_of_lifts" => "Lifts & Fire Lifts provided",
        "direction_info" => null,
        "security" => "Fire safety systems, CCTV as per CGDCR norms"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking provided",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
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
        "security_monitoring" => "Fire hydrant system, CCTV"
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
        "name" => "Koba, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shyamvan at Koba, Gandhinagar offers spacious 3 BHK apartments with RCC earthquake resistant structure, fire safety systems, basement parking, solar provisions, and lifestyle amenities suitable for families.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "176.61 sq.mt RERA Carpet",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Akash Infra",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Sidheshwari Sopan",
        "slug" => "/sidheshwari-sopan",
        "reel" => null,
        "brochure" => "Sidheshwari Sopan Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Sidheshwari%20Sopan.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Sidheshwari Sopan is a residential project offering modern lifestyle apartments in Ahmedabad."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sidheshwari Sopan provides affordable and modern 2 & 3 BHK apartments in Ahmedabad with lifestyle conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Swara Elanzza",
        "slug" => "/swara-elanzza",
        "reel" => null,
        "brochure" => "Swara Elanzza.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SWARA%20ELANZZA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Swara Elanzza offers modern residential apartments in Ahmedabad with lifestyle amenities."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Swara Elanzza is a residential project in Ahmedabad offering 2 & 3 BHK apartments with modern lifestyle features.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Tathastu",
        "slug" => "/tathastu",
        "reel" => null,
        "brochure" => "Tathastu RERA Brochure New.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/TATHASTU.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Gate No. 4, KIRC College, T.P-5, Kalol",
            "city" => "Kalol",
            "area" => null,
            "map_description" => "Tathastu Villas by DNS Consultants located near KIRC College, Kalol, offering planned villa residences."
        ]
    ],
    "builder" => [
        "name" => "DNS Consultants",
        "logo_image_id" => null,
        "corporate_address" => "Opp. Gate No. 4, KIRC College, Kalol",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "Villa" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Kalol",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Tathastu is a villa project by DNS Consultants located near KIRC College, Kalol, designed for planned lifestyle living.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Villa Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "DNS Consultants",
                "location" => "Kalol",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Texas Repose",
        "slug" => "/texas-repose",
        "reel" => null,
        "brochure" => "Texas Repose.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/TEXAS%20REPOSE.png" ,
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Texas Repose offers premium lifestyle residences with modern design and facilities."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Texas Repose provides premium 2 & 3 BHK apartments in Ahmedabad with lifestyle conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "The Imperial Heights",
        "slug" => "/the-imperial-heights",
        "reel" => null,
        "brochure" => "The Imperial Heights.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20IMPERIAL%20HEIGHTS.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "The Imperial Heights is a luxury residential project in Ahmedabad with premium lifestyle amenities."
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
            "4BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "The Imperial Heights is a luxury residential project in Ahmedabad offering 2, 3 & 4 BHK apartments with premium lifestyle features.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2, 3 & 4 BHK Flats",
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

Project::create([
    "project" => [
        "name" => "Suramya",
        "slug" => "/suramya",
        "reel" => null,
        "brochure" => "Suramya.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SURAMYA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Suramya is a residential project in Ahmedabad offering modern homes with lifestyle conveniences."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Suramya is a residential project in Ahmedabad offering 2 & 3 BHK homes designed for comfortable living.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);

Project::create([
    "project" => [
        "name" => "The Luxuria",
        "slug" => "/the-luxuria",
        "reel" => null,
        "brochure" => "The Luxuria.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20LUXURIA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "The Luxuria is a premium residential project in Ahmedabad with modern lifestyle features."
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
            "4BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "The Luxuria offers 2, 3 & 4 BHK premium apartments in Ahmedabad with modern lifestyle amenities and luxurious living spaces.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2, 3 & 4 BHK Flats",
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

Project::create([
    "project" => [
        "name" => "The Spenta Shyam Villa",
        "slug" => "/the-spenta-shyam-villa",
        "reel" => null,
        "brochure" => "The Spenta Shyam Villa.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20SPENTA%20SHYAM%20VILLA.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "The Spenta Shyam Villa is a villa project in Ahmedabad offering modern living with premium lifestyle facilities."
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
            "Villa" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "The Spenta Shyam Villa offers modern villa residences in Ahmedabad with lifestyle comforts and spacious design.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Villa Residences",
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
Project::create([
    "project" => [
        "name" => "Tilak Sparsh",
        "slug" => "/tilak-sparsh",
        "reel" => null,
        "brochure" => "Tilak Sparsh.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/TILAK%20SPARSH.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Mahakali Mandir Road, near Radhe Bungalows, Pethapur, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Pethapur",
            "map_description" => "Tilak Sparsh offers 3 BHK residences near Mahakali Mandir Road, Gandhinagar with 20+ lifestyle amenities and premium specifications."
        ]
    ],
    "builder" => [
        "name" => "Sokhada Developers",
        "logo_image_id" => null,
        "corporate_address" => "Pethapur, Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "9825181181"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.65 x 3.20", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "4.84 x 3.65", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "3.65 x 4.27", "wardrobe_niche" => null],
                    "living_room" => ["size" => "7.03 x 3.80"],
                    "dining_area" => ["size" => "6.98 x 3.32"],
                    "kitchen" => ["size" => "6.98 x 3.32"],
                    "store" => ["size" => "1.80 x 1.95"],
                    "vestibule" => ["size" => "1.80 x 1.85"],
                    "balcony" => ["size" => "1.80 x 3.80"],
                    "bath" => ["size" => "2.10 x 1.97"],
                    "wc" => ["size" => "1.20 x 1.97"],
                    "wash" => ["size" => "2.14 x 2.45"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx 3 BHK units (Type A & Type B floor plans)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure with brick masonry walls",
        "flooring" => "Vitrified tiles flooring in all areas",
        "kitchen" => "Granite platform with SS sink, glazed dado tiles up to lintel level",
        "toilets" => "Designer tiles up to lintel, white sanitary ware, CP fittings",
        "utility" => "Common borewell for water supply",
        "electrical" => "3-phase concealed copper wiring with modular switches & MCB panel",
        "doors_windows" => "Decorative main door, internal flush doors, anodized aluminium sliding windows",
        "internal_paint" => "Wall putty finish",
        "external_paint" => "Acrylic exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Wide passage with foyer lighting",
        "number_of_lifts" => "Two automatic lifts per block",
        "direction_info" => null,
        "security" => "Fire safety, CCTV surveillance, RCC road with block paving"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Sufficient basement parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Well-developed garden & kids play area",
        "senior_sitouts" => "Senior citizen sit-out",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
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
        "name" => "Pethapur, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Tilak Sparsh by Sokhada Developers offers spacious 3 BHK residences at Pethapur, Gandhinagar with 20+ amenities, earthquake-resistant structure, vitrified flooring, granite kitchens, basement parking, and senior citizen sit-outs.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => "Type A & Type B floor plans",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sokhada Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);

Project::create([
    "project" => [
        "name" => "Umiya Bungalows",
        "slug" => "/umiya-bungalows",
        "reel" => null,
        "brochure" => "Umiya Bungalows.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Umiya%20Bungalows.png",
        "type" => "Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. KIRC Campus, Opp. Gate No 4, New Pang, Kalol, Gandhinagar - 382721",
            "city" => "Kalol",
            "area" => "New Pang",
            "map_description" => "Umiya Bungalows offers premium 3 BHK bungalows near KIRC Campus, Kalol with modern amenities, garden, club house and RCC earthquake resistant design."
        ]
    ],
    "builder" => [
        "name" => "Umiya Organizer",
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "9512345050, 9898876640"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "store" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Multiple unit types (Type A, B, C, D, E with Ground, First & Terrace floors)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure with brick walls",
        "flooring" => "Vitrified tiles in all rooms",
        "kitchen" => "Granite platform with sink, glazed dado tiles up to lintel level",
        "toilets" => "Ceramic tiles flooring & dado up to lintel level, branded sanitary ware",
        "utility" => null,
        "electrical" => "Concealed copper wiring, single phase meter with MCB & ELCB",
        "doors_windows" => "Decorative main door, internal flush doors, aluminium windows with glass",
        "internal_paint" => "Double coat putty finish",
        "external_paint" => "Acrylic exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Adequate foyer & passage lighting",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, RCC roads, fire safety provisions"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Sufficient parking space with basement provision",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Club House with community facilities",
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area & garden",
        "senior_sitouts" => "Senior citizen sit-out",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Umiya Bungalows by Umiya Organizer offers luxurious 3 BHK bungalows at Kalol, Gandhinagar with club house, garden, senior citizen sit-outs, RCC earthquake-resistant structure, vitrified flooring and modern facilities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Bungalows",
            "size" => "Multiple unit types (A, B, C, D, E)",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Umiya Organizer",
                "location" => "Kalol, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Vashika Embark",
        "slug" => "/vashika-embark",
        "reel" => null,
        "brochure" => "Vashika Embark Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/VASHIKA%20EMBARK.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vashika Embark is a residential project in Ahmedabad offering modern homes and lifestyle facilities."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vashika Embark provides 2 & 3 BHK homes in Ahmedabad with lifestyle conveniences and modern design.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Vinayak Sapphire 02",
        "slug" => "/vinayak-sapphire-02",
        "reel" => null,
        "brochure" => "Vinayak Sapphire 02 Rera Brouchure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Vinayak%20Sapphire.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vinayak Sapphire 02 offers 2 & 3 BHK apartments in Ahmedabad with lifestyle features."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vinayak Sapphire 02 provides 2 & 3 BHK homes in Ahmedabad with lifestyle conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Vraj Residency",
        "slug" => "/vraj-residency",
        "reel" => null,
        "brochure" => "Vraj Residency.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Vraj%20Residency.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vraj Residency offers 2 & 3 BHK apartments in Ahmedabad with lifestyle amenities."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vraj Residency offers well-planned 2 & 3 BHK homes in Ahmedabad with modern conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Vrundavan Anantam",
        "slug" => "/vrundavan-anantam",
        "reel" => null,
        "brochure" => "Vrundavan Anantam.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/VRUNDAVAN%20ANANTAM.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vrundavan Anantam offers thoughtfully designed 2 & 3 BHK residences in Ahmedabad with lifestyle facilities."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vrundavan Anantam offers 2 & 3 BHK homes in Ahmedabad with thoughtfully planned design and lifestyle conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Panchamrut-3",
        "slug" => "/panchamrut-3",
        "reel" => null,
        "brochure" => "Panchamrut-3_Broucher.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Panchamrut.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Panchamrut-3 is a residential project in Ahmedabad offering lifestyle homes with modern features."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Panchamrut-3 offers 2 & 3 BHK homes in Ahmedabad with modern lifestyle features.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Polaris Callisto",
        "slug" => "/polaris-callisto",
        "reel" => null,
        "brochure" => "Polaris Callisto.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Polaris%20Callisto.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Polaris Callisto offers 2 & 3 BHK residences in Ahmedabad with modern lifestyle features."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Polaris Callisto provides 2 & 3 BHK lifestyle residences in Ahmedabad with modern conveniences.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Pramukh Sanidhya",
        "slug" => "/pramukh-sanidhya",
        "reel" => null,
        "brochure" => "Pramukh Sanidhya.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/PRAMUKH%20SANIDHYA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Village Mansa, Ta. Mansa, Dist. Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Mansa",
            "map_description" => "Pramukh Sanidhya at Mansa, Gandhinagar consists of 2 residential blocks (A & B) with 7 floors offering 56 well-planned units."
        ]
    ],
    "builder" => [
        "name" => "Patel Anilkumar Ambalal & Others",
        "logo_image_id" => null,
        "corporate_address" => "Mansa, Gandhinagar",
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
                    "bedroom_1" => ["size" => "3.05 x 3.05", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.35 x 3.96", "wardrobe_niche" => null],
                    "bath" => ["size" => "1.22 x 1.83"],
                    "wc" => ["size" => null],
                    "living_room" => ["size" => "5.18 x 3.32"],
                    "dining_area" => ["size" => "2.88 x 4.60"],
                    "kitchen" => ["size" => "2.88 x 4.60"],
                    "balcony" => ["size" => "1.04 x 3.36"],
                    "store" => ["size" => "1.44 x 0.96"],
                    "utility" => ["size" => "1.82 x 1.83"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "87.81 sq.mt (carpet area)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => null,
        "kitchen" => null,
        "toilets" => null,
        "utility" => "Utility space 1.82 x 1.83 mt.",
        "electrical" => null,
        "doors_windows" => null,
        "internal_paint" => null,
        "external_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => null,
        "number_of_lifts" => "Lift + Fire Escape Lift",
        "direction_info" => null,
        "security" => "Fire escape staircase, fire doors"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement/Hollow plinth parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => null,
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
        "name" => "Mansa, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Pramukh Sanidhya at Mansa, Gandhinagar offers 2BHK homes with RCC earthquake resistant structure, 7 residential floors and total 56 units.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Apartments",
            "size" => "87.81 sq.mt carpet area",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Pramukh Sanidhya",
                "location" => "Mansa, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Northview Bungalows",
        "slug" => "/northview-bungalows",
        "reel" => null,
        "brochure" => "Northview Bungalows.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/NORTHVIEW%20BUNGLOWS.png",
        "type" => "Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Northview Bungalows offers premium bungalows with multiple plot and built-up sizes designed for modern lifestyle in Ahmedabad."
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
            "Bungalows" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Plot sizes: 98.52 - 159.80 sq.mt, Built-up areas: 176.39 - 192.08 sq.mt",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => null,
        "kitchen" => null,
        "toilets" => null,
        "utility" => null,
        "electrical" => null,
        "doors_windows" => null,
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual bungalow parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => null,
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
        "community_events" => false,
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
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Northview Bungalows in Ahmedabad offers spacious premium bungalows with plot sizes ranging from 98 to 160 sq.mt and built-up areas between 176 to 192 sq.mt.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Bungalows",
            "size" => "98 - 160 sq.mt plots, 176 - 192 sq.mt built-up area",
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
Project::create([
    "project" => [
        "name" => "Omkar Skyzen",
        "slug" => "/omkar-skyzen",
        "reel" => null,
        "brochure" => "Omkar Skyzen.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/OMKAR%20SKYZEN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Omkar Skyzen is a residential project in Ahmedabad offering modern lifestyle homes."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Omkar Skyzen offers 2 & 3 BHK residences in Ahmedabad with modern lifestyle features.",
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
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Ornate Legacy",
        "slug" => "/ornate-legacy",
        "reel" => null,
        "brochure" => "Ornate Legacy.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/ORNATE%20LEGACY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Grand Bhagwati Hotel, Off. S.G. Highway",
            "city" => "Ahmedabad",
            "area" => "S.G. Highway",
            "map_description" => "Ornate Legacy by Ornate Buildcon offers premium 3 BHK residences near Grand Bhagwati Hotel, SG Highway, Ahmedabad with modern lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Ornate Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
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
                "size" => "Spacious 3 BHK flats",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with stainless steel sink, glazed dado tiles",
        "toilets" => "Designer toilets with branded sanitary fittings and tiles up to lintel level",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches, adequate power points",
        "doors_windows" => "Decorative main door, flush internal doors, aluminium sliding windows",
        "internal_paint" => "Smooth wall putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in passages & common areas",
        "number_of_lifts" => "Automatic lifts with power backup",
        "direction_info" => null,
        "security" => "CCTV surveillance, intercom, fire safety systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with indoor activities",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Landscaped garden, yoga space",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "S.G. Highway, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ornate Legacy by Ornate Buildcon offers 3 BHK premium residences near SG Highway, Ahmedabad with RCC structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "Spacious layouts",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Ornate Buildcon",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Pramukh Omkar Rivanta-2",
        "slug" => "/pramukh-omkar-rivanta-2",
        "reel" => null,
        "brochure" => "Pramukh Omkar Rivanta-2.pdf",
        "logo_image_id" =>"https://images.keyarea1.com/Gandhinagar/PRAMUKH%20OMKAR%20RIVANTA-2.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Pramukh Omkar Rivanta-2 is a residential project in Gandhinagar offering modern lifestyle homes."
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Pramukh Omkar Rivanta-2 offers 2 & 3 BHK lifestyle residences in Gandhinagar with modern conveniences.",
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
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Pratibimb",
        "slug" => "/pratibimb",
        "reel" => null,
        "brochure" => "Pratibimb.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Pratibimb.png",
        "type" => "Luxury Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Raj Iconza, PDPU Road, Kudasan",
            "city" => "Gandhinagar",
            "area" => "Kudasan",
            "map_description" => "Pratibimb by Siddhi Associates offers luxury 4, 5 & 6 BHK residences in Kudasan, Gandhinagar near PDPU Road with premium lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Siddhi Associates",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "puja" => ["size" => null],
                    "store" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Luxury 4 BHK unit",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "puja" => ["size" => null],
                    "store" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Luxury 5 BHK unit",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "6BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_5" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_6" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "puja" => ["size" => null],
                    "store" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Luxury 6 BHK unit",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with stainless steel sink, glazed dado tiles",
        "toilets" => "Designer toilets with branded sanitary fittings",
        "utility" => "Provision for washing machine & store",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush internal doors, aluminium sliding windows",
        "internal_paint" => "Smooth wall putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts with power backup",
        "direction_info" => null,
        "security" => "CCTV surveillance, intercom, fire safety systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with indoor activities",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga space, landscaped garden",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Kudasan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Pratibimb by Siddhi Associates offers luxury 4, 5 & 6 BHK residences at Kudasan, Gandhinagar near PDPU Road with premium amenities and modern specifications.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4/5/6 BHK Luxury Apartments",
            "size" => "Spacious luxury units",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Siddhi Associates",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Pushpak Villa",
        "slug" => "/pushpak-villa",
        "reel" => null,
        "brochure" => "Pushpak Villa.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/PUSHPAK%20VILLA.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Pushpak Villa offers premium lifestyle villas with multiple villa types, landscaped garden, kids play area and senior seating."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "Villa_Type_1" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 22–29",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_2" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 2–9",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_3" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 12–19",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_4" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 31–38",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_5" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 41–48",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_6" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "Villa Units 51–58",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => null,
        "kitchen" => null,
        "toilets" => null,
        "utility" => null,
        "electrical" => null,
        "doors_windows" => null,
        "internal_paint" => null,
        "external_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "Security cabin, gated entry"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Party lawn, gazebo, landscaped garden",
        "kids_area" => "Children’s play area",
        "senior_sitouts" => "Senior seating area",
        "community_living" => true,
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
        "security_monitoring" => "Security cabin, CCTV"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Pushpak Villa offers premium lifestyle villas with six different villa types, landscaped gardens, kids play area, senior citizen seating and community clubhouse.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Luxury Villas",
            "size" => "Types 1–6 (multiple villa units)",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Swarit The Villas",
        "slug" => "/swarit-the-villas",
        "reel" => null,
        "brochure" => "RERA_BROCHURE_SWARIT_THE_VILLAS_V03.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SWARIT_THE_VILLAS_V03.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "B/h Gokulam Bungalows, Borisana, Kalol",
            "city" => "Gandhinagar",
            "area" => "Kalol",
            "map_description" => "Swarit The Villas by Swarit Infra Spaces offers splendid 4 BHK bungalows at Borisana, Kalol, Gandhinagar with premium lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Swarit Infra Spaces",
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Spacious 4 BHK Villas",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink, glazed dado tiles",
        "toilets" => "Premium sanitary ware with branded fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminium sliding windows",
        "internal_paint" => "Smooth wall putty finish",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, gated security"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga, landscaped garden, gazebo",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Swarit The Villas by Swarit Infra Spaces offers luxurious 4 BHK bungalows in Borisana, Kalol with RCC structure, vitrified flooring, granite kitchens and premium amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Villas",
            "size" => "Spacious 4 BHK units",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swarit Infra Spaces",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Rivera Bungalows",
        "slug" => "/rivera-bungalows",
        "reel" => null,
        "brochure" => "Rivera Bungalows.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Rivera%20Bungalows.png",
        "type" => "Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "FP No 264, 288, SR No 374, 270, TPS No 19, Behind Geeta Residency 2, Mahavir Circle, PDPU Road",
            "city" => "Gandhinagar",
            "area" => "PDPU Road",
            "map_description" => "Rivera Bungalows by Katha Infracon offers 4 & 5 BHK premium bungalows at PDPU Road, Gandhinagar with landscaped gardens and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Katha Infracon",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "terrace" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Spacious 4 BHK Bungalows",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null],
                    "terrace" => ["size" => null],
                    "multipurpose_hall" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Spacious 5 BHK Bungalows",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with stainless steel sink, glazed dado tiles",
        "toilets" => "Designer toilets with branded sanitary fittings",
        "utility" => "Provision for washing machine & store",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush internal doors, aluminium sliding windows",
        "internal_paint" => "Smooth wall putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in passages & common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, gated security"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Plinth and open parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Landscaped garden, yoga space",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "PDPU Road, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Rivera Bungalows by Katha Infracon offers 4 & 5 BHK premium bungalows in Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens, landscaped gardens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 & 5 BHK Bungalows",
            "size" => "Spacious units with terrace & multipurpose hall",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Katha Infracon",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "The Forest",
        "slug" => "/the-forest",
        "reel" => null,
        "brochure" => "RERA THE FOREST BROCHUR 26-06-2024.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20FOREST.png",
        "type" => "Luxury Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Bhat Toll Tax, Off S.P. Ring Road, Nr. Anand Niketan School, Nabhoi",
            "city" => "Gandhinagar",
            "area" => "Nabhoi, SP Ring Road",
            "map_description" => "The Forest by Swaraj Associates offers premium villas near Bhat Toll Tax, Nabhoi, Gandhinagar with multiple villa configurations and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Swaraj Associates",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "Villa_Type_A" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "438.14 sq.mt (RERA carpet area)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_A1" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "380.94 sq.mt (RERA carpet area)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_B" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "501.67 sq.mt (RERA carpet area)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_B1" => [
                "rooms" => [],
                "imageslider" => [],
                "price" => null,
                "size" => "435.82 sq.mt (RERA carpet area)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Villa_Type_C" => [
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
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified tiles in bedrooms, kitchen, toilets, balcony",
        "kitchen" => "Granite platform with stainless steel sink, glazed dado tiles",
        "toilets" => "Premium branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "3 phase concealed ISI copper wiring with modular switches & MCB panel",
        "doors_windows" => "Premium flush doors with veneer & lacquer polish, powder coated aluminium windows",
        "internal_paint" => "Smooth wall putty finish",
        "external_paint" => "Weatherproof acrylic exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, gated entry, security cabin"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Landscaped garden, yoga space",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Nabhoi, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "The Forest by Swaraj Associates offers luxury villas near Nabhoi, Gandhinagar with multiple villa configurations, premium specifications, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Luxury Villas (Types A, A1, B, B1, C)",
            "size" => "380 - 501 sq.mt carpet area",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swaraj Associates",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Riverdale",
        "slug" => "/riverdale",
        "reel" => null,
        "brochure" => "Riverdale.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Riverdale.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Raysan",
            "city" => "Gandhinagar",
            "area" => "Raysan",
            "map_description" => "Riverdale by Buildcon offers premium 3 BHK residences at Raysan, Gandhinagar with basement, typical floors, penthouses and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK_Type_A1" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type A1 unit plan"],
                "galleryImages" => []
            ],
            "3BHK_Type_A2" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type A2 unit plan"],
                "galleryImages" => []
            ],
            "3BHK_Type_B1" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type B1 unit plan"],
                "galleryImages" => []
            ],
            "3BHK_Type_B2" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type B2 unit plan"],
                "galleryImages" => []
            ],
            "3BHK_Type_C" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type C unit plan"],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminium sliding windows",
        "internal_paint" => "Smooth putty finish",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in passages & common areas",
        "number_of_lifts" => "Automatic lifts in each block",
        "direction_info" => null,
        "security" => "CCTV surveillance, gated security"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement, mechanical visitor parking & two-wheeler parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Landscaped garden",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Raysan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Riverdale by Buildcon offers premium 3 BHK apartments at Raysan, Gandhinagar with modern specifications, basement & terrace floors, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Apartments",
            "size" => "Multiple unit types (A1, A2, B1, B2, C)",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Buildcon",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Saamarth Heritage Ville",
        "slug" => "/saamarth-heritage-ville",
        "reel" => null,
        "brochure" => "SAAMARTH HERITAGE VILLE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SAAMARTH%20HERITAGE%20VILLE.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Saamarth Heritage Ville is a premium villa project located in Gandhinagar with modern lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Saamarth",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Saamarth Heritage Ville offers premium villas in Gandhinagar with spacious homes and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Saamarth",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Samarth 65",
        "slug" => "/samarth-65",
        "reel" => null,
        "brochure" => "Samarth 65 Vol 2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Samarth%2065%20Vol%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Samarth 65 is a premium residential project in Gandhinagar with spacious homes and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Samarth",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Samarth 65 offers spacious 3 & 4 BHK residences in Gandhinagar with premium lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Samarth",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Samay Stellar",
        "slug" => "/samay-stellar",
        "reel" => null,
        "brochure" => "SAMAY STELLAR.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SAMAY%20STELLAR.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Sant Vihar-3, K. Raheja Road, Koba",
            "city" => "Gandhinagar",
            "area" => "Koba",
            "map_description" => "Samay Stellar by Krishna Developers offers 3 & 4 BHK residences at Koba, Gandhinagar with premium specifications and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Krishna Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => null,
        "kitchen" => null,
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => null,
        "doors_windows" => "Decorative aluminium windows, attractive main door with safety lock",
        "internal_paint" => null,
        "external_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => null,
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement and ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Koba, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Samay Stellar by Krishna Developers offers 3 & 4 BHK residences at Koba, Gandhinagar with modern design and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Krishna Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Sarjak Palace",
        "slug" => "/sarjak-palace",
        "reel" => null,
        "brochure" => "Sarjak Palace.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Sarjak%20Palace.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "B/h Vishram Gruh, Opp. Gayatri Mandir, Mansa, Gandhinagar Highway",
            "city" => "Gandhinagar",
            "area" => "Mansa",
            "map_description" => "Sarjak Palace by Shakti Buildcon offers premium bungalows at Mansa, Gandhinagar with multiple villa types and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shakti Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Mansa, Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "Type_A" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type A unit plan"],
                "galleryImages" => []
            ],
            "Type_B" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type B unit plan"],
                "galleryImages" => []
            ],
            "Type_C" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type C unit plan"],
                "galleryImages" => []
            ],
            "Type_D" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type D unit plan"],
                "galleryImages" => []
            ],
            "Type_E" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type E unit plan"],
                "galleryImages" => []
            ],
            "Type_F" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type F unit plan"],
                "galleryImages" => []
            ],
            "Type_G" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type G unit plan"],
                "galleryImages" => []
            ],
            "Type_H" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type H unit plan"],
                "galleryImages" => []
            ],
            "Type_I" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type I unit plan"],
                "galleryImages" => []
            ],
            "Type_J" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => ["Type J unit plan"],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC framework with brick masonry walls",
        "flooring" => "Vitrified tiles flooring",
        "kitchen" => "Granite platform",
        "toilets" => "Coloured glazed tiles dado up to lintel level",
        "utility" => null,
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Main door with wooden frame, others flush doors, glazed aluminium section with marble sill",
        "internal_paint" => "Internal plaster with white wash",
        "external_paint" => "External sand faced plaster with paint"
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Landscaped garden",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
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
        "name" => "Mansa, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sarjak Palace by Shakti Buildcon offers premium bungalows with multiple unit types, RCC structure, vitrified tiles flooring, granite kitchens and modern amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Premium Bungalows (Types A–J)",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shakti Buildcon",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shivansh Sparsh",
        "slug" => "/shivansh-sparsh",
        "reel" => null,
        "brochure" => "SHIVANSH SPARSH 1-1-25.pdf",
        "logo_image_id" => null,
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Swagat Hotel, Gandhinagar International School",
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shivansh Sparsh by Shivala Builders offers premium 3 BHK apartments near Gandhinagar International School with modern amenities and quality specifications."
        ]
    ],
    "builder" => [
        "name" => "Shivala Builders",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminium sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in passages",
        "number_of_lifts" => "Automatic lifts in each block",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga room, indoor games",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shivansh Sparsh by Shivala Builders offers 3 BHK premium apartments in Gandhinagar with RCC frame structure, vitrified tiles flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shivala Builders",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);

Project::create([
    "project" => [
        "name" => "Shikhar Parisar",
        "slug" => "/shikhar-parisar",
        "reel" => null,
        "brochure" => "Shikhar Parisar Rera Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Shikhar%20Parisar.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shikhar Parisar is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Shikhar Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shikhar Parisar offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shikhar Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shikhar Shila",
        "slug" => "/shikhar-shila",
        "reel" => null,
        "brochure" => "SHIKHAR SHILA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHIKHAR%20SHILA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shikhar Shila is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Shikhar Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shikhar Shila offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shikhar Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shree Sudarshan Heights",
        "slug" => "/shree-sudarshan-heights",
        "reel" => null,
        "brochure" => "SHREE SUDARSHAN HEIGHTS.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHREE%20SUDARSHAN%20HEIGHTS.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Kanam Party Plot, Reliance Circle, Kudasan",
            "city" => "Gandhinagar",
            "area" => "Kudasan",
            "map_description" => "Shree Sudarshan Heights by Sudarshan Infra offers 2 & 3 BHK premium residences at Kudasan, Gandhinagar with modern specifications and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Sudarshan Infra",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure with AAC block masonry",
        "flooring" => "Premium vitrified tiles in rooms, kitchen, balcony; anti-skid tiles in bathrooms; kota/vitrified in wash area",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Cera/Jaquar or equivalent branded sanitary fittings, colored glazed tiles dado up to lintel",
        "utility" => "Rainwater harvesting system",
        "electrical" => "Copper wiring (Finolex/Polycab/Havells) with modular switches (Anchor/Havells), concealed wiring",
        "doors_windows" => "Veneer flush main door, internal flush doors, powder-coated aluminium sliding windows (Jindal/National)",
        "internal_paint" => "Internal plaster with putty finish",
        "external_paint" => "Acrylic paint (Asian/Burger/Dulux) with texture finish"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in passages & common areas",
        "number_of_lifts" => "2 automatic lifts per tower",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety hydrant & sprinkler systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Sufficient parking in basement and ground",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
        "security_monitoring" => "CCTV monitoring"
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
        "name" => "Kudasan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shree Sudarshan Heights by Sudarshan Infra offers 2 & 3 BHK premium apartments at Kudasan, Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens, fire safety systems and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sudarshan Infra",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shreedhar Sharan",
        "slug" => "/shreedhar-sharan",
        "reel" => null,
        "brochure" => "SHREEDHAR SHARAN.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHREEDHAR%20SHARAN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shreedhar Sharan is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Shreedhar Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shreedhar Sharan offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shreedhar Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Gokuldham Premium Bungalows",
        "slug" => "/gokuldham-premium-bungalows",
        "reel" => null,
        "brochure" => "GOKULDHAM PREMIUM BUNGLOWS.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/GOKULDHAM%20PREMIUM%20BUNGLOWS.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Gokuldham Premium Bungalows is a luxury residential project in Gandhinagar offering spacious homes and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Gokuldham Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => null,
        "visual_monitoring" => null,
        "fire_resilience" => null,
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Gokuldham Premium Bungalows offers spacious 4 BHK bungalows in Gandhinagar with premium lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Gokuldham Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Fortune Legacy",
        "slug" => "/fortune-legacy",
        "reel" => null,
        "brochure" => "Fortune Lagecy.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Fortune%20Lagecy.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Fortune Legacy by Virasat Developers is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Virasat Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Fortune Legacy by Virasat Developers offers premium residential living in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Virasat Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "German Resort",
        "slug" => "/german-resort",
        "reel" => null,
        "brochure" => "German Resort.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/German%20Resort.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Bhat, near Sughad",
            "city" => "Gandhinagar",
            "area" => "Bhat",
            "map_description" => "German Resort by Venya Developers LLP is a residential project located at Bhat, Gandhinagar offering spacious apartments with modern planning."
        ]
    ],
    "builder" => [
        "name" => "Venya Developers LLP",
        "logo_image_id" => null,
        "corporate_address" => "305, Binali Complex, Opp. AEC, Naranpura, Ahmedabad-380013",
        "contact" => [
            "website" => null,
            "sales_email" => "mark_design@ymail.com",
            "phone" => "9426406626, 9879055704"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "2BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.35 x 3.05", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "4.87 x 3.66", "wardrobe_niche" => null],
                    "living_room" => ["size" => "4.88 x 6.71"],
                    "dining_area" => ["size" => "4.87 x 3.76"],
                    "kitchen" => ["size" => "2.85 x 3.03"],
                    "balcony" => ["size" => "2.44 x 1.52"],
                    "bath" => ["size" => "2.44 x 1.52"],
                    "wc" => ["size" => "1.22 x 1.68"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "104.33 sq. mtr.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.35 x 3.05", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.66 x 4.57", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.87 x 3.66", "wardrobe_niche" => null],
                    "living_room" => ["size" => "4.88 x 6.71"],
                    "dining_area" => ["size" => "4.87 x 3.76"],
                    "kitchen" => ["size" => "2.85 x 3.03"],
                    "balcony" => ["size" => "2.44 x 1.52"],
                    "bath" => ["size" => "1.92 x 2.06"],
                    "wc" => ["size" => "1.22 x 1.68"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "166.53 sq. mtr.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC structure",
        "flooring" => "Vitrified tiles in rooms, anti-skid in bathrooms",
        "kitchen" => "Granite platform with sink",
        "toilets" => "Standard branded sanitary fittings",
        "utility" => "Provision for wash area",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Standard flush doors, aluminium sliding windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "Weatherproof paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "2 automatic lifts per block",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Bhat, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "German Resort by Venya Developers LLP offers 2 & 3 BHK residences at Bhat, Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens, fire safety systems and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Venya Developers LLP",
                "location" => "Ahmedabad / Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Haritam Villa",
        "slug" => "/haritam-villa",
        "reel" => null,
        "brochure" => "HARITAM VILLA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/HARITAM%20VILLA.png",
        "type" => "Residential Villas",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Haritam Villa offers premium luxury villa living in Gandhinagar with spacious layouts and modern design."
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Haritam Villa brings luxurious 4BHK villas in Gandhinagar with spacious living and premium amenities.",
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
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "IDO – The Double Three",
        "slug" => "/ido-the-double-three",
        "reel" => null,
        "brochure" => "IDO_The Double Three_Rera Brochure_1224-06.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/The%20Double%20Three.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Koba",
            "city" => "Gandhinagar",
            "area" => "Koba",
            "map_description" => "IDO – The Double Three offers premium 3BHK and 4BHK apartments at Koba, Gandhinagar with luxury features and modern amenities."
        ]
    ],
    "builder" => [
        "name" => "IDO Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1500 sq. ft.",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 2000 sq. ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for wash area",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminium windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga room, indoor games",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Koba, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "IDO – The Double Three offers 3 & 4 BHK premium apartments at Koba, Gandhinagar with RCC structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "IDO Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Jeet Villa",
        "slug" => "/jeet-villa",
        "reel" => null,
        "brochure" => "Jeet Villa.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Jeet%20Villa.png",
        "type" => "Residential Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Chiloda Dabhoda",
            "city" => "Gandhinagar",
            "area" => "Chiloda",
            "map_description" => "Jeet Villa offers 4 & 5 BHK premium villas at Chiloda, Gandhinagar with modern architecture and amenities."
        ]
    ],
    "builder" => [
        "name" => "Jeet Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for wash area",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminium windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "Weatherproof paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => null,
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Chiloda, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Jeet Villa offers 4 & 5 BHK premium villas in Chiloda, Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 & 5 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Jeet Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Kabir Parisar",
        "slug" => "/kabir-parisar",
        "reel" => null,
        "brochure" => "Kabir Parisar.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Kabir%20Parisar.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Kabir Parisar is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Kabir Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Kabir Parisar offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kabir Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Kantam Bungalows",
        "slug" => "/kantam-bungalows",
        "reel" => null,
        "brochure" => "KANTAM BUNGLOWS.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/KANTAM%20BUNGLOWS.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Kantam Bungalows is a premium villa project in Gandhinagar offering spacious luxury bungalows."
        ]
    ],
    "builder" => [
        "name" => "Kantam Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Kantam Bungalows offers luxurious 4BHK villas in Gandhinagar with spacious layouts.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kantam Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Kunj Vihar",
        "slug" => "/kunj-vihar",
        "reel" => null,
        "brochure" => "KUNJ VIHAR.pdf",
        "logo_image_id" =>"https://images.keyarea1.com/Gandhinagar/KUNJ%20VIHAR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Kunj Vihar is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Kunj Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Kunj Vihar offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kunj Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Lalji Bunglows",
        "slug" => "/lalji-bunglows",
        "reel" => null,
        "brochure" => "Lalji bunglow_E brochure 3-4-2024.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Lalji%20bunglow.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Beside Siddhraj Homes, Nr. Old Water Tank, Railway East, Kalol",
            "city" => "Kalol",
            "area" => "Kalol",
            "map_description" => "Lalji Bunglows by Lalji Project offers premium villas at Kalol, Gandhinagar with modern design."
        ]
    ],
    "builder" => [
        "name" => "Lalji Project",
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
        "contact" => [
            "website" => "www.laljigroup.com",
            "sales_email" => "laljigroup2020@gmail.com",
            "phone" => "9924243145"
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => null,
        "visual_monitoring" => null,
        "fire_resilience" => null,
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
        "community_events" => false,
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Lalji Bunglows by Lalji Project offers luxurious villas in Kalol with spacious design.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Lalji Project",
                "location" => "Kalol, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Maaz Residency",
        "slug" => "/maaz-residency",
        "reel" => null,
        "brochure" => "Maaz Residency.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Maaz%20Residency.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Maaz Residency is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Maaz Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Maaz Residency offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Maaz Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Madhav Upvan",
        "slug" => "/madhav-upvan",
        "reel" => null,
        "brochure" => "Madhav UpvanRERA Brochure NEW 22-01-2024.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Madhav%20Upvan.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Royal Orchid, B/h Ganesh Party Plot, Zundal – 382421",
            "city" => "Gandhinagar",
            "area" => "Zundal",
            "map_description" => "Madhav Upvan by Siddh Buildcon is located at Zundal, Gandhinagar, offering premium residential units with modern design and amenities."
        ]
    ],
    "builder" => [
        "name" => "Siddh Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Partly load bearing and partly RCC frame structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for wash area",
        "electrical" => "Concealed copper wiring with MCB-ELCB",
        "doors_windows" => "Laminated flush doors, aluminium windows",
        "internal_paint" => "Internal plaster with putty",
        "external_paint" => "External plaster with acrylic paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "24x7 security with CCTV"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Sufficient parking space",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Zundal, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Madhav Upvan by Siddh Buildcon offers 3 BHK premium residences in Zundal, Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens, 24x7 security and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Siddh Buildcon",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Megh Malhar Indigo",
        "slug" => "/megh-malhar-indigo",
        "reel" => null,
        "brochure" => "Megh Malhar Indigo_Rera Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Megh%20Malhar.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Megh Malhar Indigo is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Megh Malhar Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Megh Malhar Indigo offers premium 3BHK residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Megh Malhar Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Mukharvind",
        "slug" => "/mukharvind",
        "reel" => null,
        "brochure" => "Mukharvind.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Mukharvind.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Mukharvind is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Mukharvind Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Mukharvind offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Mukharvind Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Nirman Bliss",
        "slug" => "/nirman-bliss",
        "reel" => null,
        "brochure" => "Nirman Bliss.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Nirman%20Bliss.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Nirman Bliss is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Nirman Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Nirman Bliss offers premium residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Nirman Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "NOB Hill Tower",
        "slug" => "/nob-hill-tower",
        "reel" => null,
        "brochure" => "NOB HILL TOWER.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/NOB%20HILL%20TOWER.png",
        "type" => "Residential Tower Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "T.P. 1, F.P. 52/2, Nr. Mahavir Puram, Koba",
            "city" => "Gandhinagar",
            "area" => "Koba",
            "map_description" => "NOB Hill Tower by Shree Shakti Developers offers premium apartments in Koba, Gandhinagar with modern planning and specifications."
        ]
    ],
    "builder" => [
        "name" => "Shree Shakti Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => "www.gujrera.gujarat.gov.in",
            "sales_email" => "nobhilltower13@gmail.com",
            "phone" => "8401628056"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium quality flooring",
        "kitchen" => "Granite platform with SS sink, premium tiles dado",
        "toilets" => "Branded sanitary fittings, tiles dado up to lintel level",
        "utility" => "Provision for wash area",
        "electrical" => "Concealed ISI copper wiring",
        "doors_windows" => "Flush doors, anodized/powder-coated aluminium windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "Sand face plaster with acrylic paint",
        "terrace" => "China mosaic flooring with waterproofing"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic elevators",
        "direction_info" => null,
        "security" => "CCTV surveillance, 24x7 security system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ample parking space",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
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
        "name" => "Koba, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "NOB Hill Tower by Shree Shakti Developers offers 3 & 4 BHK apartments in Koba, Gandhinagar with RCC structure, vitrified flooring, granite kitchens, CCTV, elevators, solar system and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shree Shakti Developers",
                "location" => "Gandhinagar",
                "url" => "www.gujrera.gujarat.gov.in"
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Mango Oasis",
        "slug" => "/mango-oasis",
        "reel" => null,
        "brochure" => "17 Brochure MANGO OASIS NEW.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/MANGO%20OASIS.png",
        "type" => "3 BHK Exclusive Residency",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Samarth Posh Ville bungalows, PDPU Road, Raysan",
            "city" => "Gandhinagar",
            "area" => "Raysan",
            "map_description" => "Mango Oasis offers premium 3 BHK exclusive residences near PDPU Road, Raysan, Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Parvati Techno Consultant LLP",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "community_events" => false,
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
        "name" => "Raysan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Mango Oasis offers premium 3 BHK exclusive residences in Raysan, Gandhinagar with quality design and modern features.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Parvati Techno Consultant LLP",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Sanidhya",
        "slug" => "/sanidhya",
        "reel" => null,
        "brochure" => "17 SANIDHYA BRO 01.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Sanidhya.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Sanidhya offers luxurious 4 BHK bungalows in Gandhinagar with multiple layouts."
        ]
    ],
    "builder" => [
        "name" => "Shiv Tejendra Infra",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sanidhya by Shiv Tejendra Infra offers luxurious 4 BHK bungalows with multiple layout options in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shiv Tejendra Infra",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Helly Homes",
        "slug" => "/helly-homes",
        "reel" => null,
        "brochure" => "17 HELY HOMES_R1.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/HELY%20HOMES.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Arsodiya, Ta - Kalol, Dist. Gandhinagar",
            "city" => "Kalol",
            "area" => "Arsodiya",
            "map_description" => "Helly Homes is a residential project located at Arsodiya, Kalol, Gandhinagar offering premium lifestyle residences."
        ]
    ],
    "builder" => [
        "name" => "Patel Hitesh Kamleshbhai",
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Helly Homes in Arsodiya, Kalol, Gandhinagar offers premium 3 BHK lifestyle residences.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Patel Hitesh Kamleshbhai",
                "location" => "Kalol, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Royal Villa",
        "slug" => "/royal-villa",
        "reel" => null,
        "brochure" => "17 royal vila brochure_R2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/royal%20vila.png",
        "type" => "Residential Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Zundal, Ta - Gandhinagar, Dist. Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Zundal",
            "map_description" => "Royal Villa by Mahabal Construction offers premium residential villas at Zundal, Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Morabiya Mayank Rameshbhai (Mahabal Construction)",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "name" => "Zundal, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Royal Villa by Mahabal Construction offers luxurious 4 BHK villas in Zundal, Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Morabiya Mayank Rameshbhai (Mahabal Construction)",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Shivay Villa",
        "slug" => "/shivay-villa",
        "reel" => null,
        "brochure" => "17 Shivay Villa Rera Vol 1.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Shivay%20Villa.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shivay Villa is a premium residential bungalow project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Shivay Developers",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shivay Villa offers premium 4 BHK bungalows with modern amenities in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shivay Developers",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Tulsi Bungalows",
        "slug" => "/tulsi-bungalows",
        "reel" => null,
        "brochure" => "17. Tulsi bunglows Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Tulsi%20bunglows.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "T.P.S. No - 05 (Kalol - Ola - Borisana), Block No./Sur. No:-1041,1042,1043, Final Plot No - 231, Moje: Kalol, Ta. - Kalol, Dist. Gandhinagar",
            "city" => "Kalol",
            "area" => "Kalol - Ola - Borisana",
            "map_description" => "Tulsi Bungalows is a proposed premium residential bungalow project at Kalol, Gandhinagar offering multiple layouts and specifications."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
    ],
    "amenities" => [
        "clubhouse" => "Common clubhouse",
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => null,
        "senior_sitouts" => null,
        "community_living" => true,
        "24_7_security" => null,
        "visual_monitoring" => null,
        "fire_resilience" => null,
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Tulsi Bungalows at Kalol, Gandhinagar offers 3 & 4 BHK bungalow layouts with community living and clubhouse facilities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Kalol, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Harved Supremo",
        "slug" => "/harved-supremo",
        "reel" => null,
        "brochure" => "34 Harved Supremo Rera brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Harved%20Supremo.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Harved Supremo is a residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Harved Supremo is a premium residential project in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aaloka Parmeshwar",
        "slug" => "/aaloka-parmeshwar",
        "reel" => null,
        "brochure" => "AALOKA PARMESHWAR.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/AALOKA%20PARMESHWAR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Aaloka Parmeshwar is a residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aaloka Parmeshwar is a premium residential project in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aarohan",
        "slug" => "/aarohan",
        "reel" => null,
        "brochure" => "AAROHAN.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/AAROHAN.png",
        "type" => "Residential Apartment Scheme",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Aarohan is a residential apartment scheme in Gandhinagar offering 3BHK, 4BHK, 5BHK and penthouses with premium amenities."
        ]
    ],
    "builder" => [
        "name" => "HM Architects",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "Penthouse" => [
                "rooms" => [
                    "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                    "bedroom_5" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium flooring",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Wash area provision",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Flush doors, aluminium windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "Weatherproof paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement + Ground + Podium parking (approx 487 cars)",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Amphitheater, kids play area",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aarohan offers 3, 4, 5 BHK apartments and penthouses in Gandhinagar with RCC frame structure, premium flooring, ample parking and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3, 4, 5 BHK & Penthouse Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "HM Architects",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Adhirath",
        "slug" => "/adhirath",
        "reel" => null,
        "brochure" => "adhirath.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/adhirath.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Adhirath is a residential project by Sampad in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Sampad",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Adhirath by Sampad is a premium residential project in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sampad",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aditya Elegance",
        "slug" => "/aditya-elegance",
        "reel" => null,
        "brochure" => "Aditya Elegance RERA Brochure new.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Aditya%20Elegance.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Aditya Elegance is a premium residential project in Ahmedabad with modern specifications and amenities."
        ]
    ],
    "builder" => [
        "name" => "Aditya Developers",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Wash area provision",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative laminated main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint",
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "High-speed automatic elevators",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga room",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aditya Elegance by Aditya Developers offers premium 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens and modern amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Aditya Developers",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Akshat Villa-2",
        "slug" => "/akshat-villa-2",
        "reel" => null,
        "brochure" => "Akshat Villa-2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Akshat%20Villa-2.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Akshat Villa-2 is a residential bungalow project located in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Akshat Villa-2 offers 4 BHK bungalows in Gandhinagar with modern living amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Apple Green 2",
        "slug" => "/apple-green-2",
        "reel" => null,
        "brochure" => "APPLE GREEN 2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/APPLE%20GREEN%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "80 Mtr. Kamlam BJP Road, Koba, Gandhinagar - 382007",
            "city" => "Gandhinagar",
            "area" => "Koba",
            "map_description" => "Apple Green 2 is a residential project located in Koba, Gandhinagar offering premium flats with multiple configurations."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Koba, Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gym",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen area",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Koba, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Apple Green 2 at Koba, Gandhinagar offers 2 & 3 BHK premium flats with community clubhouse, gym and modern amenities.",
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
                "location" => "Koba, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aryavrat Serenity",
        "slug" => "/aryavrat-serenity",
        "reel" => null,
        "brochure" => "Aryavrat Serenity.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Aryavrat%20Serenity.png",
        "type" => "Residential Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "FP. No. 96/2/2, Near Prayag Avenue, Opp. Ganesh Vatika Bungalows, Panchvati, Kalol",
            "city" => "Kalol",
            "area" => "Panchvati",
            "map_description" => "Aryavrat Serenity by Aryavrat Infra is a residential apartment project at Kalol, Gandhinagar with premium specifications."
        ]
    ],
    "builder" => [
        "name" => "Aryavrat Infra",
        "logo_image_id" => null,
        "corporate_address" => "Kalol, Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "RCC wall structure",
        "flooring" => "Vitrified flooring",
        "kitchen" => "Granite kitchen with dado tiles",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Wash area provision",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Tar plaster internal walls",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community clubhouse",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Kalol, Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aryavrat Serenity by Aryavrat Infra offers 2 & 3 BHK apartments in Kalol, Gandhinagar with RCC wall structure, vitrified flooring, granite kitchens and modern amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Aryavrat Infra",
                "location" => "Kalol, Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Atharva Bungalows",
        "slug" => "/atharva-bungalows",
        "reel" => null,
        "brochure" => "Atharva Bungalows.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Atharva%20Bungalows.png",
        "type" => "Residential Bungalow Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Atharva Bungalows is a residential bungalow project in Gandhinagar offering multiple layout types."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Individual villa parking",
        "basement_ground" => "No"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Atharva Bungalows offers luxurious 4 BHK bungalows in Gandhinagar with modern facilities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aditya Elegance",
        "slug" => "/aditya-elegance",
        "reel" => null,
        "brochure" => "Aditya Elegance RERA Brochure new.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Aditya%20Elegance.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Aditya Elegance is a premium residential project in Ahmedabad with RCC frame structure, premium flooring, and modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Aditya Developers",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink, glazed tile dado",
        "toilets" => "Branded sanitary fittings, designer tiles up to lintel level",
        "utility" => "Wash area provision",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative laminated main door, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "High-speed automatic elevators",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga room",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aditya Elegance by Aditya Developers offers 3 & 4 BHK residences in Ahmedabad with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Aditya Developers",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Aurelia",
        "slug" => "/aurelia",
        "reel" => null,
        "brochure" => "aurelia brochure new_050324.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/aurelia.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Nirma University, SG Highway",
            "city" => "Ahmedabad",
            "area" => "SG Highway",
            "map_description" => "Aurelia offers premium residential apartments near Nirma University on SG Highway, Ahmedabad with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shilp Group",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink and tile dado",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "High-speed automatic elevators",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Well-equipped gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga room",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "SG Highway, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aurelia by Shilp Group offers 3 & 4 BHK premium residences near Nirma University, SG Highway, Ahmedabad with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shilp Group",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Avyanna",
        "slug" => "/avyanna",
        "reel" => null,
        "brochure" => "AVYANNA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/AVYANNA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Randesan, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Randesan",
            "map_description" => "Avyanna offers premium lifestyle residences near Randesan, Gandhinagar with modern amenities and spacious layouts."
        ]
    ],
    "builder" => [
        "name" => "Swara Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink and dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "High-speed automatic elevators",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community spaces",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga room",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Randesan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Avyanna by Swara Group offers 3 & 4 BHK premium residences near Randesan, Gandhinagar with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Residences",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swara Group",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "L3",
        "slug" => "/l3",
        "reel" => null,
        "brochure" => "Brocher L3.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/L3.png",
        "type" => "Lifestyle Apartment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Super City, Bhadaj, near Science City",
            "city" => "Ahmedabad",
            "area" => "Science City",
            "map_description" => "L3 by Organisors Pvt. Ltd. offers 4BHK lifestyle apartments at Super City, Bhadaj near Science City, Ahmedabad with luxury amenities."
        ]
    ],
    "builder" => [
        "name" => "Organisors Pvt. Ltd.",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with banquet hall",
        "floating_fitness" => "Gym, yoga/zumba, salon",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Game zone, indoor activities",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => null,
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
        "name" => "Science City, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "L3 by Organisors Pvt. Ltd. offers 4BHK lifestyle apartments in Ahmedabad with clubhouse, swimming pool, banquet hall, gym, yoga and other luxury amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Organisors Pvt. Ltd.",
                "location" => "Ahmedabad",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Madhav Parkview",
        "slug" => "/madhav-parkview",
        "reel" => null,
        "brochure" => "Brochure - Madhav Parkview.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Madhav%20Parkview.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Madhav Parkview is a premium residential project offering lifestyle homes with modern amenities."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Madhav Parkview is a residential project in Gandhinagar offering 3 BHK homes with lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Karnavati Riverside Block EFG",
        "slug" => "/karnavati-riverside-block-efg",
        "reel" => null,
        "brochure" => "BROCHURE KARNAVATI RIVERSIDE block EFG EDITED.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/KARNAVATI%20VIVANTA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Karnavati Riverside Block EFG is a premium residential project in Gandhinagar with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Karnavati Riverside Block EFG is a residential project in Gandhinagar offering premium homes with lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "The One",
        "slug" => "/the-one",
        "reel" => null,
        "brochure" => "BROCHURE THE ONE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20ONE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "The One is a premium residential project in Gandhinagar offering modern lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "The One is a residential project in Gandhinagar offering premium 3 BHK homes with lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Synergy",
        "slug" => "/synergy",
        "reel" => null,
        "brochure" => "Draft Brochure Synergy #.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Synergy.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Raysan, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Raysan",
            "map_description" => "Synergy by Stallion Builders LLP offers premium lifestyle residences in Raysan, Gandhinagar with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Stallion Builders LLP",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink and dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush internal doors, aluminum windows",
        "internal_paint" => "Putty with acrylic emulsion",
        "external_paint" => "Weatherproof paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety systems"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Indoor games, yoga room",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting in common areas",
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
        "name" => "Raysan, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-10 years",
        "avgRate" => null
    ],
    "investmentNote" => "Synergy by Stallion Builders LLP offers 3 BHK residences with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities in Raysan, Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Apartments",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Stallion Builders LLP",
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Divyam Pravesh",
        "slug" => "/divyam-pravesh",
        "reel" => null,
        "brochure" => "DIVYAM PRAVESH.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/DIVYAM%20PRAVESH.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Divyam Pravesh is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Divyam Pravesh is a residential project in Gandhinagar offering modern lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Petal 14",
        "slug" => "/petal-14",
        "reel" => null,
        "brochure" => "Draft Brochure_Petal 14.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Petal%2014.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Petal 14 is a residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Petal 14 is a residential project in Gandhinagar with lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Eleanor",
        "slug" => "/eleanor",
        "reel" => null,
        "brochure" => "ELEANOR.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/ELEANOR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Eleanor is a premium residential project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => null,
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
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
        "internal_paint" => null,
        "external_paint" => null
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
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Eleanor is a residential project in Gandhinagar offering lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => null,
                "location" => "Gandhinagar",
                "url" => null
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Ever Mark Epic",
        "slug" => "/ever-mark-epic",
        "reel" => null,
        "brochure" => "EVER MARK EPIC.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/EVER%20MARK%20EPIC.png",
        "type" => "Commercial Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Ever Mark Epic is a premium commercial project in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Evermark Group",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => null
        ]
    ],
    "configuration" => [
        "Homes" => [
            "CommercialUnits" => [
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
        "internal_paint" => null,
        "external_paint" => null
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ever Mark Epic is a commercial project in Gandhinagar designed for business and investment opportunities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Commercial Units",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Evermark Group",
                "location" => "Gandhinagar",
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
