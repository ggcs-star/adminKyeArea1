<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $pathPrefix = 'storage/assets/';

        Project::create([
            "project" => [
                "name" => "Neelkanth Sky",
                "slug" => "/neelkanth-sky",
                "reel" => "neelkanth-sky",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Neelkanth%20Sky.png",
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
                "name" => "Neelkanth Group",
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
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
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
                "wellness" => false,
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Neelkanth Sky offers modern 2 & 3 BHK homes in Ahmedabad with lifestyle amenities, RCC structure, and security features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Neelkanth Group",
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
                "name" => "Shaligram Sky",
                "slug" => "/shaligram-sky",
                "reel" => "shaligram-sky",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/SHALIGRAM%20SKY.png",
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
                "name" => "Shaligram Space LLP",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => "Info@shaligrambuildcon.com",
                    "phone" => "079 2970 2400"
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
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
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
                "wellness" => false,
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shaligram Sky offers premium 2 & 3 BHK homes in Ahmedabad with lifestyle amenities, RCC structure, and community features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Shaligram Space LLP",
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
                "name" => "Nakshatra Bricks",
                "slug" => "/nakshatra-bricks",
                "reel" => "nakshatra-bricks",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/NAKSHATRA%20BRICKS.png",
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
                "name" => "Nakshatra Group",
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
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
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
                "wellness" => false,
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Nakshatra Bricks offers premium 2 & 3 BHK homes with RCC structure and modern amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Nakshatra Group",
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
                "name" => "Eight Bungalows",
                "slug" => "/eight-bungalows",
                "reel" => "eight-bungalows",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/eight-bungalows/logo.jpg"),
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Aksha Ambience Cross Road, Opp. Superfine Bakery Road, Tp-85, Upper Sarkhej, Ahmedabad, Gujarat-380055",
                    "city" => "Ahmedabad",
                    "area" => "Sarkhej",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Seebaat Developers",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => "seebaatdevlopers2023@gmail.com",
                    "phone" => "+91 98240 48159"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "4.30 x 3.95", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "5.40 x 4.20", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "4.30 x 3.95", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "5.40 x 4.20", "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "4.20 x 4.20"],
                            "dining_area" => ["size" => "4.27 x 4.10"],
                            "kitchen" => ["size" => "4.75 x 3.85"],
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
                            "bedroom_1" => ["size" => "4.30 x 3.95", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "5.40 x 4.20", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "4.30 x 3.95", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "5.40 x 4.20", "wardrobe_niche" => null],
                            "bedroom_5" => ["size" => "5.95 x 3.85", "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "4.20 x 4.20"],
                            "dining_area" => ["size" => "4.27 x 4.10"],
                            "kitchen" => ["size" => "4.75 x 3.85"],
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
                "flooring" => "Italian Stone, Wooden flooring in Master Bedroom & Terrace, Vitrified tiles in other rooms",
                "kitchen" => "Vitrified body large slab platform with ceramic tile dado",
                "toilets" => "Italian Stone, Chrome plated fittings, Hammam",
                "utility" => null,
                "electrical" => "ISI wires, ISI modular switches, ISI MCB/ELCB",
                "doors_windows" => "Wooden flush doors, Aluminium windows",
                "internal_paint" => "Double Coat Mala + Putty Finish"
            ],
            "building" => [
                "entry_direction" => "Decorated large entrance",
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic high-speed elevators",
                "direction_info" => null,
                "security" => "High-end security system, CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted car parking + Visitor parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Modern clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
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
                "wellness" => false,
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
                "name" => "Sarkhej, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Eight Bungalows offers luxury 4 & 5 BHK bungalows in Sarkhej, Ahmedabad with modern specifications, clubhouse, solar panels, and premium amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 & 5 BHK Bungalows",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Seebaat Developers",
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
                "name" => "Ombre",
                "slug" => "/ombre",
                "reel" => "ombre",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Ombre.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opposite NY Cinemas, Tapovan Circle, Chandkheda, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Chandkheda",
                    "map_description" => null
                ]
            ],
            "builder" => [
                "name" => "Saral Developers",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => "saralinfrastructure.com",
                    "sales_email" => "info@saralinfrastructure.com",
                    "phone" => "87 99 600 755"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "5.80 x 3.35", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "5.18 x 3.35", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "4.35 x 3.65", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "4.98 x 3.67", "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "3.95 x 5.48"],
                            "dining_area" => ["size" => "5.08 x 3.48"],
                            "kitchen" => ["size" => "4.27 x 3.06"],
                            "balcony" => ["size" => "3.95 x 1.63"]
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
                "flooring" => "Vitrified tiles flooring in all rooms",
                "kitchen" => "Polished granite kitchen platform with sink & glazed tiles dado up to lintel",
                "toilets" => "Ceramic tiles flooring & glazed tiles dado up to lintel, CP fittings & sanitary ware of reputed brands",
                "utility" => null,
                "electrical" => "Single phase meter + MCB & ELCB, concealed wiring with quality fittings",
                "doors_windows" => "Decorative main door, laminated flush internal doors, aluminum anodized sliding windows",
                "internal_paint" => "Smooth plaster with putty finish, acrylic exterior paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Fully automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
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
                "wellness" => false,
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
                "name" => "Chandkheda, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Ombre offers luxury 4 BHK apartments in Chandkheda with RCC structure, vitrified flooring, premium kitchen and toilet fittings, and lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Saral Developers",
                        "location" => "Ahmedabad",
                        "url" => "saralinfrastructure.com"
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Gajanan Bungalows",
                "slug" => "/gajanan-bungalows",
                "reel" => "gajanan-bungalows",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GAJANAN%20BUNGALOWS.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Gajanan Bungalows offer spacious 4 BHK residences in Ahmedabad.",
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
                "name" => "Anuvrat Abode",
                "slug" => "/anuvrat-abode",
                "reel" => "anuvrat-abode",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Anuvrat.png",
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
                "name" => "Himalaya Utsav",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Anuvrat Abode by Himalaya Utsav offers residential 2 & 3 BHK apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Himalaya Utsav",
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
                "name" => "The Sparkle",
                "slug" => "/the-sparkle",
                "reel" => "the-sparkle",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/The%20Sparkle.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "The Sparkle offers modern 2 & 3 BHK residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Ved Sonic",
                "slug" => "/ved-sonic",
                "reel" => "ved-sonic",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VED%20SONIC.png",
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
                "name" => "Sonic Buildcon",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Ved Sonic by Sonic Buildcon offers 2 & 3 BHK homes in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Sonic Buildcon",
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
                "name" => "Muktajeevan Ecstasy",
                "slug" => "/muktajeevan-ecstasy",
                "reel" => "muktajeevan-ecstasy",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Muktajeevan%20Ecstasy.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Muktajeevan Ecstasy offers premium residential 2 & 3 BHK apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Prayasam Residency",
                "slug" => "/prayasam-residency",
                "reel" => "prayasam-residency",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/PRAYASAM%20RESIDENCY.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Prayasam Residency offers modern 2 & 3 BHK apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Arcus Greens",
                "slug" => "/arcus-greens",
                "reel" => "arcus-greens",
                "brochure" => null,
                "logo_image_id" => asset($pathPrefix . "properties/arcus-greens/logo.jpg"),
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Arcus Greens (A.Green) offers 2 & 3 BHK modern residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aashray Anantam",
                "slug" => "/aashray-anantam",
                "reel" => "aashray-anantam",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AASHRAY%20ANANTAM.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aashray Anantam offers 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aastha Grandeur",
                "slug" => "/aastha-grandeur",
                "reel" => "aastha-grandeur",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Aastha%20Grandeur.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aastha Grandeur offers modern 2 & 3 BHK apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aatrey Ivaan 5",
                "slug" => "/aatrey-ivaan-5",
                "reel" => "aatrey-ivaan-5",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/AATREY%20IVAAN%205.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aatrey Ivaan 5 offers 2 & 3 BHK modern apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aditya Bungalows",
                "slug" => "/aditya-bungalows",
                "reel" => "aditya-bungalows",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ADITYA%20BUNGALOWS.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aditya Bungalows offers spacious 4 BHK residences in Ahmedabad.",
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
                "name" => "Airavat Elysium",
                "slug" => "/airavat-elysium",
                "reel" => "airavat-elysium",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Airavat%20Elysium.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Airavat Elysium offers premium 2 & 3 BHK apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Akshar",
                "slug" => "/akshar",
                "reel" => "akshar",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/akshar.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Akshar offers modern 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Alabhya",
                "slug" => "/alabhya",
                "reel" => "alabhya",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/ALABHYA.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Alabhya offers 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Ample Arise",
                "slug" => "/ample-arise",
                "reel" => "ample-arise",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AMPLE%20ARISE.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Ample Arise offers 2 & 3 BHK residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Anand Avyam",
                "slug" => "/anand-avyam",
                "reel" => "anand-avyam",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/ANAND%20AVYAM.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Anand Avyam offers 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Ananta Villa",
                "slug" => "/ananta-villa",
                "reel" => "ananta-villa",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ANANTA%20VILLA.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Ananta Villa offers spacious 4 BHK villas in Ahmedabad.",
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
                "name" => "Arjun Pearl",
                "slug" => "/arjun-pearl",
                "reel" => "arjun-pearl",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Arjun%20Pearl.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Arjun Pearl offers 2 & 3 BHK residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Artefino",
                "slug" => "/artefino",
                "reel" => "artefino",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ARTEFINO.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Artefino offers 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aura Nine",
                "slug" => "/aura-nine",
                "reel" => "aura-nine",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AURA%20NINE.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aura Nine residential project in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Aurra Sky",
                "slug" => "/aurra-sky",
                "reel" => "aurra-sky",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AURRA%20SKY.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aurra Sky residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Avyanna Aspire",
                "slug" => "/avyanna-aspire",
                "reel" => "avyanna-aspire",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Avyanna%20Aspire.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Avyanna Aspire offers modern 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Bansidhar Apartment",
                "slug" => "/bansidhar-apartment",
                "reel" => "bansidhar-apartment",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/BANSIDHAR%20APPARTMENT.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Bansidhar Apartment offers 2 & 3 BHK residences in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Bhakti Pearl",
                "slug" => "/bhakti-pearl",
                "reel" => "bhakti-pearl",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/BHAKTI%20PEARL.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Bhakti Pearl offers 2 & 3 BHK residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Highline Phase 2",
                "slug" => "/highline-phase-2",
                "reel" => "highline-phase-2",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Highline_Phase_2.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Gota, SG Highway, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Gota",
                    "map_description" => "Premium 4 BHK luxury residences on SG Highway, Ahmedabad by AG Group."
                ]
            ],
            "builder" => [
                "name" => "AG Group",
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => null,
                "internal_paint" => null
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and 24/7 gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Lounge & Community Hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => "Co-working spaces",
                "health_hub" => "Spa & Wellness Zone",
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
                "security_monitoring" => "CCTV and access control"
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
                "name" => "SG Highway, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Highline Phase 2 by AG Group offers luxury 4 BHK residences in Gota, SG Highway, Ahmedabad with premium amenities including gym, spa, lounge, and co-working spaces.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Luxury Residences",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "AG Group",
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
                "name" => "Dev",
                "slug" => "/dev",
                "reel" => "dev",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/DEV.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Dev residential project in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Bansipark Phase 2",
                "slug" => "/bansipark-phase-2",
                "reel" => "bansipark-phase-2",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Bansipark%20Phase%202.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Bansipark Phase 2 residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Hir Asha Luxuria",
                "slug" => "/hir-asha-luxuria",
                "reel" => "hir-asha-luxuria",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/New%20Hir%20Asha.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Sola Bhagwat, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Sola Bhagwat",
                    "map_description" => "Premium 4 & 5 BHK luxury residences at Sola Bhagwat, Ahmedabad by Raj Buildcon."
                ]
            ],
            "builder" => [
                "name" => "Raj Buildcon",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings with waterproofing",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "High-quality flush doors and aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and 24/7 gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Spa & wellness zone",
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
                "modular_kitchen" => true,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and access control"
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
                "name" => "Sola Bhagwat, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Hir Asha Luxuria by Raj Buildcon offers premium 4 & 5 BHK luxury residences at Sola Bhagwat, Ahmedabad with modern amenities, high-speed lifts, CCTV, and spa & wellness facilities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 & 5 BHK Luxury Residences",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Raj Buildcon",
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
                "name" => "Aroma 56",
                "slug" => "/aroma-56",
                "reel" => "aroma-56",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AROMA_56.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Aroma 56 residential project in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Shiv Green",
                "slug" => "/shiv-green",
                "reel" => "shiv-green",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shiv%20Green.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Dev 94, Plot No. 89 A+B+C, Near Ghuma BRTS Stand, Ghuma-Bopal, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Ghuma-Bopal",
                    "map_description" => "Residential 2 & 3 BHK flats with modern amenities in Ghuma-Bopal, Ahmedabad by Shiv Infrastructure."
                ]
            ],
            "builder" => [
                "name" => "Shiv Infrastructure",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed wiring with modular switches",
                "doors_windows" => "Decorative main door, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "2 elevators per block",
                "direction_info" => null,
                "security" => "CCTV surveillance and 24/7 gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground and basement parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
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
                "security_monitoring" => "CCTV and access control"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => false,
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
                "name" => "Ghuma-Bopal, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shiv Green by Shiv Infrastructure offers 2 & 3 BHK flats at Ghuma-Bopal, Ahmedabad with RCC structure, vitrified tiles, granite kitchen, sanitary fittings, lifts, and 24/7 security.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Shiv Infrastructure",
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
                "name" => "SJ Green Valley",
                "slug" => "/sj-green-valley",
                "reel" => "sj-green-valley",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SJ%20Green%20Valley.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "SJ Green Valley residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Buddhdev Residency",
                "slug" => "/buddhdev-residency",
                "reel" => "buddhdev-residency",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/BUDDHDEV%20RESIDENCY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residential apartments in Ahmedabad."
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
                            "bedroom_1" => ["size" => "Carpet ~66 sq.m.", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx 66 sq.m. carpet",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "Carpet ~89 sq.m.", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx 89 sq.m. carpet",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Buddhdev Residency offers 2 & 3 BHK residential apartments in Ahmedabad with carpet areas ~66 sq.m. and ~89 sq.m.",
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
                "name" => "Dayasagar Osis",
                "slug" => "/dayasagar-osis",
                "reel" => "dayasagar-osis",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/DAYASAGAR%20OSIS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "New Nikol, Bilasiya, S.P. Ring Road, Naroda, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Naroda",
                    "map_description" => "2 & 3 BHK apartments by Dayasagar Respro at S.P. Ring Road, Naroda, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Dayasagar Respro",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed wiring with modular switches",
                "doors_windows" => "Aluminum windows, decorative main door",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "2 elevators per block",
                "direction_info" => null,
                "security" => "CCTV surveillance and 24/7 gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground and basement parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
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
                "security_monitoring" => "CCTV and access control"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => false,
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
                "name" => "Naroda, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Dayasagar Osis offers 2 & 3 BHK apartments at S.P. Ring Road, Naroda, Ahmedabad with RCC structure, vitrified tiles, granite kitchen, lifts, and 24/7 security.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Dayasagar Respro",
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
                "name" => "Kalasagar Skyline",
                "slug" => "/kalasagar-skyline",
                "reel" => "kalasagar-skyline",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/KALASAGAR%20SKYLINE.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Kalasagar Skyline residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Emberlynn-3",
                "slug" => "/emberlynn-3",
                "reel" => "emberlynn-3",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EMBERLYNN-3.png",
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Emberlynn-3 residential apartments in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Homes",
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
                "name" => "Kite View",
                "slug" => "/kite-view",
                "reel" => "kite-view",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KITE%20VIEW.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "B/S Shree Nand Residency, Nr. Neelkanth Residency, Gangotri Circle, Nikol, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Nikol",
                    "map_description" => "4 BHK Ultra Luxurious Living near Nikol, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Chandrashila Reality",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => "www.gujrera.gujarat.gov.in",
                    "sales_email" => null,
                    "phone" => "9427960870 / 9737737099"
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
                "structure" => "Earthquake resistant RCC frame structure as per new by-laws",
                "flooring" => "Vitrified tiles for entire flooring in all apartments",
                "kitchen" => "Polished granite platform with S.S. sink, glazed tiles up to lintel level",
                "toilets" => "Designer tiles on floor and walls up to lintel level, branded sanitary & bath fittings",
                "utility" => null,
                "electrical" => "Branded ISI modular switches with concealed copper wiring, adequate points, MCB panel",
                "doors_windows" => "Main door & flush doors with frame, aluminum windows with granite frame",
                "internal_paint" => "Internal mala plaster with white finish putty, attractive external elevation with sand face plaster"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "Fire safety facilities, CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => null,
                "basement_ground" => "Basement and Ground Parking"
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
                "wellness" => false,
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
                "name" => "Nikol, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Kite View offers 4 BHK ultra-luxurious apartments in Nikol, Ahmedabad with RCC structure, modern amenities, and fire safety.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Chandrashila Reality",
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
                "name" => "Mango Village",
                "slug" => "/mango-village",
                "reel" => "mango-village",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/MANGO%20VILLAGE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury bungalow project with landscaped amenities in Ahmedabad."
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
                    "4BHK Bungalow" => [
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
                    "5BHK Bungalow" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                            "bedroom_5" => ["size" => null, "wardrobe_niche" => null],
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors with aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Mango Village offers luxury 4 & 5 BHK bungalows in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, landscaped amenities, and secure community living.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 & 5 BHK Bungalows",
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
                "name" => "Mira Mohan Elegance",
                "slug" => "/mira-mohan-elegance",
                "reel" => "mira-mohan-elegance",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Mira%20Mohan%20Elegance.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residences by Mira Mohan Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Mira Mohan Group",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Aluminum windows, flush doors",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Mira Mohan Elegance by Mira Mohan Group offers 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchen, and gated community amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Mira Mohan Group",
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
                "name" => "Nandini Solitaire",
                "slug" => "/nandini-solitaire",
                "reel" => "nandini-solitaire",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/NANDINI%20SOLITAIRE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 3 BHK apartments by Nandini Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Nandini Group",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Nandini Solitaire by Nandini Group offers luxury 3 BHK residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, and modern amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Nandini Group",
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
                "name" => "New Keystone",
                "slug" => "/new-keystone",
                "reel" => "new-keystone",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/new%20keystone.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residences in Ahmedabad with modern amenities."
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
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "New Keystone residential project in Ahmedabad offering 2 & 3 BHK flats with RCC structure, vitrified flooring, granite kitchens, and community amenities.",
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
            "emerging_property" => true,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Kavyam",
                "slug" => "/kavyam",
                "reel" => "kavyam",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KAVYAM.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residential apartments in Ahmedabad."
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
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Kavyam residential project in Ahmedabad offering 2 & 3 BHK flats with RCC structure, vitrified flooring, granite kitchens, and modern community amenities.",
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
            "emerging_property" => true,
            "emerging_area" => true
        ]);

        Project::create([
            "project" => [
                "name" => "Paradise Glory",
                "slug" => "/paradise-glory",
                "reel" => "paradise-glory",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PARADISE%20GLORY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residences by Paradise Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Paradise Group",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Paradise Glory by Paradise Group offers 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, and community amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Paradise Group",
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
                "name" => "Forever Young Bungalows",
                "slug" => "/forever-young-bungalows",
                "reel" => "forever-young-bungalows",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/FOREVER%20YOUNG%20BUNGALOWS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Exclusive 4 & 5 BHK bungalow residences in Ahmedabad."
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
                "ev_charging" => null,
                "slot_info" => "Ground parking",
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Forever Young Bungalows offers premium 4 & 5 BHK bungalow residences in Ahmedabad with exclusive community living.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 & 5 BHK Bungalows",
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
                "name" => "Govardhan Grace",
                "slug" => "/govardhan-grace",
                "reel" => "govardhan-grace",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GOVARDHAN%20GRACE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "3 BHK premium residences by Govardhan Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Govardhan Group",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Govardhan Grace by Govardhan Group offers 3 BHK premium residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, and gated amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Govardhan Group",
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
                "name" => "Green Fluorite",
                "slug" => "/green-fluorite",
                "reel" => "green-fluorite",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GREEN%20FLUORITE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium residential project in Ahmedabad."
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Green Fluorite is a premium residential project in Ahmedabad offering modern 2 & 3 BHK homes with lifestyle amenities.",
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
                "name" => "Indraprasth Abode",
                "slug" => "/indraprasth-abode",
                "reel" => "indraprasth-abode",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Indraprasth.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "3 & 4 BHK residences by Indraprasth Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Indraprasth Group",
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Indraprasth Abode by Indraprasth Group offers premium 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, and lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Indraprasth Group",
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
                "name" => "Kautilya Nilay",
                "slug" => "/kautilya-nilay",
                "reel" => "kautilya-nilay",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Kautilya%20Nilay.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residences by Kautilya Group in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Kautilya Group",
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
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Kautilya Nilay by Kautilya Group offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified tiles, granite kitchens, and lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Kautilya Group",
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
                "name" => "Breeze",
                "slug" => "/breeze",
                "reel" => "breeze",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/R1_Breeze.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Heritage Building, Sattar Taluka Society, Usmanpura, Ahmedabad, Gujarat 380013",
                    "city" => "Ahmedabad",
                    "area" => "Usmanpura",
                    "map_description" => "Premium 3 BHK apartments in Usmanpura, Ahmedabad by Yashvi Realty."
                ]
            ],
            "builder" => [
                "name" => "M/s Yashvi Realty",
                "logo_image_id" => null,
                "corporate_address" => "1H, Pankaj Society, Ramji Mandir Lane, B/h. Ashwin ni Bari, Bhattha, Paldi, Ahmedabad-7",
                "contact" => [
                    "website" => "www.panchshilgroup.com",
                    "sales_email" => "info@panchshilgroup.com",
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
                "structure" => "Earthquake resistant RCC frame with brick masonry wall",
                "flooring" => "Vitrified 30x30 tiles in entire flat",
                "kitchen" => "Sandwich platform with granite top and SS sink, RO point, glazed tiles dado",
                "toilets" => "Premium designer tiles with ISI fittings",
                "utility" => null,
                "electrical" => "Branded ISI modular switches, copper ISI wiring, MCB & ELCB",
                "doors_windows" => "Decorative laminated main door, flush doors, anodized aluminum sliding windows",
                "internal_paint" => "Cement plaster with putty finish, external texture with water repellent paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic elevators",
                "direction_info" => null,
                "security" => "CCTV, fire safety system, security cabin"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
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
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => false,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => "Common solar system",
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
                "name" => "Usmanpura, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Breeze by Yashvi Realty offers premium 3 BHK residences in Usmanpura, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, fire safety, and eco-friendly rainwater harvesting.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "M/s Yashvi Realty",
                        "location" => "Ahmedabad",
                        "url" => "www.panchshilgroup.com"
                    ]
                ]
            ],
            "featured" => true,
            "emerging_property" => true,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Prabhuvan-5",
                "slug" => "/prabhuvan-5",
                "reel" => "prabhuvan-5",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Prabhuvan-5.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Sanjivani Hospital Road, Behind Himalya Calista Apartment, Jain Nagar, Sharda Mandir Road, Paldi, Ahmedabad-380007",
                    "city" => "Ahmedabad",
                    "area" => "Paldi",
                    "map_description" => "4BHK luxury residences with only 10 units at Paldi, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Aasthaa Associates",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 9898616313"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "10'-6\" x 14'-7½\"", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "11'-0\" x 15'-0\"", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "13'-0\" x 19'-0\"", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "13'-0\" x 14'-7½\"", "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "10'-0\" x 15'-0\""],
                            "dining_area" => ["size" => null],
                            "kitchen" => ["size" => "10'-0\" x 15'-0\""],
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
                "kitchen" => "Granite platform with SS sink, tile dado, kota stone store",
                "toilets" => "Designer wall tiles, branded sanitary ware",
                "utility" => "Wash area with glazed tiles, provision for washing machine",
                "electrical" => "Concealed copper wiring, ISI wires, modular switches, MCB & ELCB",
                "doors_windows" => "Main door with veneer finish & video calling, flush doors, aluminum sliding windows with granite sills",
                "internal_paint" => "Wall putty inside, weather shield acrylic paint outside with texture"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "1 Elevator",
                "direction_info" => null,
                "security" => "CCTV, fire safety, security cabin"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Car parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Attractive foyer",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => null,
                "senior_sitouts" => null,
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => false,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => "Solar panels for common use",
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
                "name" => "Paldi, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Prabhuvan-5 offers exclusive 4BHK luxury residences in Paldi, Ahmedabad with only 10 units and premium lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Aasthaa Associates",
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
                "name" => "Prasthan 10",
                "slug" => "/prasthan-10",
                "reel" => "prasthan-10",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Prasthan%2010.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium residential project in Ahmedabad."
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
                "ev_charging" => null,
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
                "name" => "Ahmedabad",
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Prasthan 10 offers premium 2 & 3 BHK residences in Ahmedabad.",
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
                "name" => "Pratishthan",
                "slug" => "/pratishthan",
                "reel" => "pratishthan",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Pratishthan.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK lifestyle homes in Ahmedabad."
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Pratishthan offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
                "name" => "Pushpam",
                "slug" => "/pushpam",
                "reel" => "pushpam",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Pushpam.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK lifestyle residences in Ahmedabad."
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Pushpam offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
                "name" => "Rajharsh",
                "slug" => "/rajharsh",
                "reel" => "rajharsh",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Rajharsh.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "3 & 4 BHK lifestyle residences in Ahmedabad."
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Rajharsh offers premium 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
            "featured" => true,
            "emerging_property" => true,
            "emerging_area" => true
        ]);
        Project::create([
            "project" => [
                "name" => "Ratnamani Heights",
                "slug" => "/ratnamani-heights",
                "reel" => "ratnamani-heights",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RATNAMANI%20HEIGHTS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "3 & 4 BHK lifestyle residences in Ahmedabad."
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
            ],
        ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with stainless steel sink",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => "Gymnasium",
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
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
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Ratnamani Heights offers premium 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
            "featured" => true,
            "emerging_property" => true,
            "emerging_area" => true
        ]);
        Project::create([
        "project" => [
            "name" => "Parul Gracious",
            "slug" => "/parul-gracious",
            "reel" => null,
            "brochure" => null,
            "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PARUL%20GRACIOUS.png",
            "type" => "Residential Project",
            "visual_image_id" => null,
            "location" => [
                "address" => "Parul Flats Co-op Housing Society Ltd., F.P 262, SP 4+5, TPS – 19 [Memnagar], Navrangpura, Ahmedabad",
                "city" => "Ahmedabad",
                "area" => "Navrangpura",
                "map_description" => "Premium lifestyle residences with RCC structure and modern amenities in Navrangpura, Ahmedabad."
            ]
        ],
        "builder" => [
            "name" => "Parul Flats Co-op Housing Society Ltd.",
            "logo_image_id" => null,
            "corporate_address" => "05, Narnarayan Palace, Nr. Kothawala flats, Paldi, Ahmedabad",
            "contact" => [
                "website" => null,
                "sales_email" => null,
                "phone" => "+91 98250 69370"
            ]
        ],
        "configuration" => [
            "Homes" => [
                "3BHK" => [
                    "rooms" => [
                        "bedroom_1" => ["size" => "3.12 x 4.72", "wardrobe_niche" => null],
                        "bedroom_2" => ["size" => "3.20 x 3.95", "wardrobe_niche" => null],
                        "bedroom_3" => ["size" => "3.38 x 3.66", "wardrobe_niche" => null],
                        "bath" => ["size" => "2.20 x 1.52"],
                        "wc" => ["size" => "1.68 x 1.52"],
                        "living_room" => ["size" => "3.66 x 5.79"],
                        "dining_area" => ["size" => "3.17 x 4.17"],
                        "kitchen" => ["size" => "2.81 x 3.16"],
                        "balcony" => ["size" => "1.22 x 3.66"]
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
                        "bedroom_1" => ["size" => "3.66 x 3.43", "wardrobe_niche" => null],
                        "bedroom_2" => ["size" => "3.20 x 3.79", "wardrobe_niche" => null],
                        "bedroom_3" => ["size" => "4.07 x 3.66", "wardrobe_niche" => null],
                        "bedroom_4" => ["size" => null, "wardrobe_niche" => null],
                        "bath" => ["size" => "2.46 x 1.52"],
                        "wc" => ["size" => "1.52 x 2.13"],
                        "living_room" => ["size" => "3.66 x 5.07"],
                        "dining_area" => ["size" => "4.67 x 3.56"],
                        "kitchen" => ["size" => "2.74 x 3.19"],
                        "balcony" => ["size" => "4.88 x 1.83"]
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
            "structure" => "RCC Frame Structure with earthquake resistant design as per IS code",
            "flooring" => "Vitrified tiles (800x800 / 600x1200 / 800x1600), granite for stairs, non-slippery tiles in passages & balconies",
            "kitchen" => "Granite platform with SS sink, store shelves with kota stone, tile dado up to ceiling, washing machine point",
            "toilets" => "Branded CP fittings & sanitary fittings, designer glazed tiles up to ceiling",
            "utility" => "Water filter & washing machine points provided",
            "electrical" => "Concealed copper wiring with modular switches, AC points, geyser, TV, Wi-Fi points, 2-way system",
            "doors_windows" => "Decorative main door, premium flush doors, aluminum powder coated sliding windows & balcony doors",
            "internal_paint" => "Wall putty with emulsion paint, external acrylic paint/texture/cladding"
        ],
        "building" => [
            "entry_direction" => null,
            "common_lighting" => "Yes",
            "number_of_lifts" => "2 elevators as per RERA guidelines",
            "direction_info" => null,
            "security" => "CCTV surveillance, fire safety"
        ],
        "parking" => [
            "ev_charging" => false,
            "slot_info" => "Basement & paved ground parking",
            "basement_ground" => "Yes"
        ],
        "amenities" => [
            "clubhouse" => "Community hall / lounge area",
            "floating_fitness" => "Gymnasium",
            "dedicated_guest_rooms" => null,
            "work_from_home" => "Library, conference room",
            "health_hub" => null,
            "kids_area" => "Children play area with rubberized flooring",
            "senior_sitouts" => "Senior citizen sit-outs",
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
            "name" => "Navrangpura, Ahmedabad",
            "growth" => "Medium",
            "growthPeriod" => "3-5 years",
            "avgRate" => null
        ],
        "investmentNote" => "Parul Gracious offers premium 3 & 4 BHK residences in Navrangpura with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
        "buyProperties" => [
            [
                "img" => null,
                "title" => "3 & 4 BHK Flats",
                "size" => null,
                "price" => null,
                "date" => null,
                "url" => null,
                "agency" => [
                    "name" => "Parul Flats Co-op Housing Society Ltd.",
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
        "name" => "Amee 98",
        "slug" => "/amee-98",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Amee%2098.png" ,
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Premium residential apartments with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Amee Developers",
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
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Amee 98 offers premium 3 BHK residences with RCC structure, vitrified flooring, and lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Amee Developers",
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
        "name" => "Sahjanand Heaven",
        "slug" => "/sahjanand-heaven",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SET%20Sahjanand%20Heaven.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Premium lifestyle residences in Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Sahjanand Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sahjanand Heaven offers 2 & 3 BHK lifestyle residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sahjanand Group",
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
        "name" => "Nandan Heights",
        "slug" => "/nandan-heights",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Nandan%20heights.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Spacious 3 BHK lifestyle apartments with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Nandan Group",
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
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Nandan Heights offers spacious 3 BHK homes in Ahmedabad with RCC structure, vitrified flooring, and modern amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Nandan Group",
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
        "name" => "Rose Valley",
        "slug" => "/rose-valley",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ROSE%20VALLEY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Rose Valley offers premium lifestyle apartments with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Rose Valley Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Rose Valley offers premium 2 & 3 BHK residences with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Rose Valley Developers",
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
        "name" => "Rushabh Harmony",
        "slug" => "/rushabh-harmony",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RUSHABH%20HARMONY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Rushabh Harmony offers premium lifestyle apartments with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Rushabh Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Rushabh Harmony offers premium 2 & 3 BHK lifestyle apartments in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
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
    "emerging_property" => true,
    "emerging_area" => true
]);
    Project::create([
    "project" => [
        "name" => "Samesh",
        "slug" => "/samesh",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Samesh.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Shaligram Prime, Near Aarohi Club, South Bopal",
            "city" => "Ahmedabad",
            "area" => "South Bopal",
            "map_description" => "Samesh by Aariv Homes offers premium residential living in South Bopal, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Aariv Homes",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink, designer tiles dado",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "name" => "South Bopal, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Samesh by Aariv Homes offers premium 3 BHK residences in South Bopal, Ahmedabad with RCC structure, vitrified flooring, modern specifications and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Aariv Homes",
                "location" => "South Bopal, Ahmedabad",
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
        "name" => "Sampad Atul",
        "slug" => "/sampad-atul",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAMPAD%20ATUL.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Science City, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "Science City",
            "map_description" => "Sampad Atul offers premium residences near Science City with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Sampad Realty",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink, designer tiles dado",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sampad Atul offers premium 3 & 4 BHK residences near Science City, Ahmedabad with RCC structure, vitrified flooring, modern specifications and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sampad Realty",
                "location" => "Science City, Ahmedabad",
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
        "name" => "Satya Prime",
        "slug" => "/satya-prime",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SATYA%20PRIME.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Science City, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "Science City",
            "map_description" => "Satya Prime offers premium lifestyle apartments near Science City, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Satya Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Satya Prime offers premium 3 & 4 BHK residences near Science City, Ahmedabad with RCC structure, vitrified flooring, modern specifications and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Satya Developers",
                "location" => "Science City, Ahmedabad",
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
        "name" => "Sharanya Kadamb",
        "slug" => "/sharanya-kadamb",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SharanyaKadamb.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Shantipura Circle, Shela",
            "city" => "Ahmedabad",
            "area" => "Shela",
            "map_description" => "Sharanya Kadamb offers premium lifestyle apartments with modern amenities near Shela, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Sharanya Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "name" => "Shela, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sharanya Kadamb offers premium 3 & 4 BHK residences near Shela, Ahmedabad with RCC structure, vitrified flooring, modern specifications and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sharanya Group",
                "location" => "Shela, Ahmedabad",
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
        "name" => "Sawera Shaligram",
        "slug" => "/sawera-shaligram",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAWERA%20SHALIGRAM.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Sawera Shaligram, D-Mart Haridarshan Road, Near Vedant International School, Nikol, Ahmedabad-382350",
            "city" => "Ahmedabad",
            "area" => "Nikol",
            "map_description" => "Sawera Shaligram by Umiya Developers offers premium lifestyle residences in Nikol, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Umiya Developers",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => "sawerashaligram2023@gmail.com",
            "phone" => "+91 9574639798, +91 9586580444"
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified tiles flooring in all rooms",
        "kitchen" => "Granite platform with glazed tiles up to lintel level and stainless steel sink",
        "toilets" => "Glazed tile up to lintel level with standard CP fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with sufficient points",
        "doors_windows" => "Decorative main door, wooden flush doors with oil paint, fully glazed aluminum windows",
        "internal_paint" => "Internal mala plaster with white putty finish; external sand faced plaster with paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground and basement parking",
        "basement_ground" => "2 basement levels + ground floor parking"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "name" => "Nikol, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sawera Shaligram offers premium 2 & 3 BHK residences in Nikol, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Umiya Developers",
                "location" => "Nikol, Ahmedabad",
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
        "name" => "Shilpgram Bhaktikunj",
        "slug" => "/shilpgram-bhaktikunj",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHILPGRAM%20BHAKTIKUNJ.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Bhaktikunj, Near Bhadaj Circle, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "Bhadaj",
            "map_description" => "Shilpgram Bhaktikunj offers premium lifestyle residences with modern amenities in Bhadaj, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shilpgram Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "name" => "Bhadaj, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shilpgram Bhaktikunj offers premium 3 & 4 BHK residences in Bhadaj, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shilpgram Group",
                "location" => "Bhadaj, Ahmedabad",
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
        "name" => "Shiv Krupa",
        "slug" => "/shiv-krupa",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHIV%20KRUPA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shiv Krupa Elegant Bungalows, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shiv Krupa offers elegant 3 BHK bungalows with modern lifestyle features."
        ]
    ],
    "builder" => [
        "name" => "Shiv Krupa Developers",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shiv Krupa offers premium 3 BHK elegant bungalows in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shiv Krupa Developers",
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
        "name" => "Shraddha Heritage",
        "slug" => "/shraddha-heritage",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHRADDHA%20HERITAGE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shraddha Heritage, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shraddha Heritage offers lifestyle residences with premium amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shraddha Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shraddha Heritage offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shraddha Group",
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
        "name" => "Shree Hari Blossoms",
        "slug" => "/shree-hari-blossoms",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHREE%20HARI%20BLOSSOMS.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shree Hari Blossoms, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shree Hari Blossoms offers lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shree Hari Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shree Hari Blossoms offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shree Hari Group",
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
        "name" => "Shreevas Homes",
        "slug" => "/shreevas-homes",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/shreevas%20homes.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shreevas Homes, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shreevas Homes offers modern lifestyle residences with premium amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shreevas Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shreevas Homes offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shreevas Group",
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
        "name" => "Shyam Upvan",
        "slug" => "/shyam-upvan",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/shyam%20upvan.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shyam Upvan, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shyam Upvan offers premium lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shyam Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shyam Upvan offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shyam Developers",
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
        "name" => "Silver Coin",
        "slug" => "/silver-coin",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Silver%20Coin.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Silver Coin, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Silver Coin offers premium lifestyle apartments with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Silver Coin Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Silver Coin offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Silver Coin Developers",
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
        "name" => "Splendora 2",
        "slug" => "/splendora-2",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Splendora%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Splendora 2, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Splendora 2 offers premium lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Splendora Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Splendora 2 offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Splendora Group",
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
        "name" => "SR HOMES",
        "slug" => "/sr-homes-4bhk",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SR%20HOMES.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "SR Homes, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "SR Homes offers premium 4 BHK lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "SR Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "SR Homes 4 BHK offers premium 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "SR Developers",
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
        "name" => "Sumeru Navkar",
        "slug" => "/sumeru-navkar",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SUMERU%20NAVKAR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Sumeru Navkar, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Sumeru Navkar offers lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Sumeru Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sumeru Navkar offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sumeru Group",
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
        "name" => "Suryam",
        "slug" => "/suryam",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Suryam.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Suryam, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Suryam offers premium lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Suryam Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Suryam offers premium 2, 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2, 3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Suryam Group",
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
        "name" => "Turquoise Re-45",
        "slug" => "/turquoise-re-45",
        "reel" => null,
        "brochure" => "https://gujrera.gujarat.gov.in",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Turquoise%20Re-45.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Link-In Road (Sarkhej-Shantipura Road), Opp. Lane of Cliantha Research",
            "city" => "Ahmedabad",
            "area" => "Sarkhej-Shantipura",
            "map_description" => "Turquoise Re-45 offers premium living with strategic location near Cliantha Research and Ambli BRTS Road."
        ]
    ],
    "builder" => [
        "name" => "Raivat Projects LLP",
        "logo_image_id" => null,
        "corporate_address" => "Re-XI, Nr. Sankalp Iconic Tower, Opp. P.S.P. House, Ambli BRTS Road, Ahmedabad - 380058",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "+91 95378 36767"
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
        "structure" => "Earthquake resistant RCC frame",
        "flooring" => "Premium tiles",
        "kitchen" => "Granite platform, SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement + Ground",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Sit-outs for senior citizens",
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
        "name" => "Sarkhej-Shantipura, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Turquoise Re-45 offers luxury apartments with RCC structure, premium amenities and connectivity to Ambli BRTS & Sarkhej.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Raivat Projects LLP",
                "location" => "Ambli, Ahmedabad",
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
        "name" => "United Tower",
        "slug" => "/united-tower",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/UNITED%20TOWER.png",
        "type" => "Residential & Commercial Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "United Tower offers a combination of residential and commercial spaces in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "United Group",
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
        "structure" => "RCC Frame Structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground + Basement parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "United Tower offers premium living and commercial investment options in Ahmedabad with modern amenities and facilities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "United Group",
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
        "name" => "Swara Lavanya",
        "slug" => "/swara-lavanya",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SWARA%20LAVANYA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Swara Lavanya, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Swara Lavanya offers thoughtfully designed lifestyle residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Swara Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Swara Lavanya offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swara Developers",
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
        "name" => "Swara Sapphire",
        "slug" => "/swara-sapphire",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Swara%20Saphhire2.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Swara Sapphire, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Swara Sapphire offers premium residences with lifestyle amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Swara Developers",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Swara Sapphire offers premium 2, 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2, 3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swara Developers",
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
        "name" => "The Garden",
        "slug" => "/the-garden",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/The%20Garden.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "The Garden, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "The Garden offers modern lifestyle residences surrounded by green open spaces and premium amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "The Garden Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "The Garden offers premium 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "The Garden Group",
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
        "name" => "Triveni Dev",
        "slug" => "/triveni-dev",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Triveni%2084.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Triveni Dev, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Triveni Dev offers modern lifestyle residences with luxury amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Triveni Group",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Triveni Dev offers premium 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Triveni Group",
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
        "name" => "Venus Deshna",
        "slug" => "/venus-deshna",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Venus%20Deshna.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Naranpura, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "Naranpura",
            "map_description" => "Venus Deshna offers premium 3 BHK lifestyle residences in the heart of Naranpura, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Venus Infraspace LLP",
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
            "3BHK Type A" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bath" => ["size" => "5'0\" x 7'0\""],
                    "wc" => ["size" => "4'0\" x 6'0\""],
                    "living_room" => ["size" => "22'0\" x 13'0\""],
                    "dining_area" => ["size" => "10'0\" x 10'0\""],
                    "kitchen" => ["size" => "10'0\" x 10'0\""],
                    "balcony" => ["size" => "5'0\" wide"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1800 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK Type B" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "11'0\" x 13'0\"", "wardrobe_niche" => null],
                    "bath" => ["size" => "5'0\" x 7'0\""],
                    "wc" => ["size" => "4'0\" x 6'0\""],
                    "living_room" => ["size" => "20'0\" x 12'0\""],
                    "dining_area" => ["size" => "10'0\" x 10'0\""],
                    "kitchen" => ["size" => "10'0\" x 10'0\""],
                    "balcony" => ["size" => "5'0\" wide"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1650 sq.ft.",
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
        "kitchen" => "Granite platform with stainless steel sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
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
        "name" => "Naranpura, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Venus Deshna offers premium 3 BHK residences in Naranpura, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats (Type A & B)",
            "size" => "1650 - 1800 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Venus Infraspace LLP",
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
        "name" => "Viva Luxuria",
        "slug" => "/viva-luxuria",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VIVA%20LUXURIA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Viva Luxuria, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Viva Luxuria offers premium lifestyle residences with luxury amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Somnath Infracon LLP",
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
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Street lighting & internal LED lights",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, gated security"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with multipurpose hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Jogging track, yoga space",
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
        "designer_lighting" => "Designer street lighting",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Viva Luxuria offers 2 & 3 BHK premium residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, clubhouse and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Somnath Infracon LLP",
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
        "name" => "Vrundawan Heights",
        "slug" => "/vrundawan-heights",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Vrundawan%20Heights.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Vrundawan Heights, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vrundawan Heights offers 2 & 3 BHK lifestyle residences with modern amenities and specifications in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Radhe Infra",
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
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1200-1300 sq.ft.",
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
                "size" => "Approx. 1500-1600 sq.ft.",
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
        "kitchen" => "Granite platform with stainless steel sink, designer dado",
        "toilets" => "Branded sanitary fittings, designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, gated security, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga & meditation area",
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
        "designer_lighting" => "Designer lighting in common spaces",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vrundawan Heights offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, CCTV surveillance, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => "1200 - 1600 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Radhe Infra",
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

  


   