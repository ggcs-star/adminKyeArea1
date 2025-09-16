<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathPrefix = 'storage/assets/';

        Project::create([
            "project" => [
                "name" => "Devkunj Apartment",
                "slug" => "/devkunj-apartment",
                "reel" => "devkunj-apartment",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Devkunj.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Devkunj Apartment, Ishwarbhuvan Cross Road, Navrangpura-380009",
                    "city" => "Ahmedabad",
                    "area" => "Navrangpura",
                    "map_description" => "Prime location near universities, stadium, metro stations, and riverfront."
                ]
            ],
            "builder" => [
                "name" => "Sanav Infra LLP",
                "logo_image_id" => null,
                "corporate_address" => "Devkunj Apartment, Ishwarbhuvan Cross Road, Navrangpura-380009",
                "contact" => [
                    "website" => "https://sanav.in",
                    "sales_email" => "contact@sanav.in",
                    "phone" => "+91 99791 82727"
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame, ACC blocks, double coat plaster",
                "flooring" => "Vitrified tiles (800x1600) in living, kitchen, bedrooms, premium apartments with Italian marble",
                "kitchen" => "Vitrified flooring, modular fittings",
                "toilets" => "Vitrified tiles, Kohler/Jaquar sanitaryware, CP fittings",
                "utility" => "Supreme / Astral piping",
                "electrical" => "Concealed wiring (Polycab/Finolex), modular switches (Schneider/Anchor), MCB (Schneider/Hager)",
                "doors_windows" => "Pine wood flush doors with laminate, aluminum sliding windows with Saint Gobain glass",
                "internal_paint" => "Birla Putty finish inside, Ultima-Apex/Asian/Berger/Nerolac exterior"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Solar power for common areas",
                "number_of_lifts" => "2 passenger lifts (10 people each), 1 service lift (15 people)",
                "direction_info" => "High speed lift (1.5 m/s)",
                "security" => "CCTV, fire hydrant system, gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Allotted car parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Smart door lock with video camera",
                "solar_pv" => true,
                "modular_kitchen" => true,
                "designer_lighting" => null,
                "security_monitoring" => "24x7 CCTV surveillance"
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
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Devkunj Apartment offers premium 4BHK residences in the prime location of Navrangpura, Ahmedabad with luxury specifications and modern lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Vedant Vilasa",
                "slug" => "/vedant-vilasa",
                "reel" => "vedant-vilasa",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Vedant%20Vilasa.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 4BHK ultimate bungalows with multiple floor plans."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
            "investmentNote" => "Vedant Vilasa offers luxury 4BHK ultimate bungalows with terrace and multiple floor plan options.",
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
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Vedant Prasum",
                "slug" => "/vedant-prasum",
                "reel" => "vedant-prasum",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Vedant%20Prasum.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Elegant 4BHK villa residences with luxury living."
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
                            "bedroom_1" => ["size" => "5.15 x 3.98", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.20 x 3.37", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "2.75 x 3.60", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "5.27 x 3.37", "wardrobe_niche" => null],
                            "bath" => ["size" => "1.82 x 3.96"],
                            "wc" => ["size" => "1.82 x 3.37"],
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
            "investmentNote" => "Vedant Prasum offers elegant 4BHK villas in Ahmedabad designed for modern family living.",
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
            "featured" => true,
            "emerging_property" => false,
            "emerging_area" => false
        ]);       
        Project::create([
            "project" => [
                "name" => "Shivam",
                "slug" => "/shivam",
                "reel" => "shivam",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Shivam.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "3 BHK Elite Living apartments with multiple floor plans."
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
                            "bedroom_1" => ["size" => "3.95 x 3.18", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "4.66 x 3.35", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.83 x 3.66", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.15 x 1.51"],
                            "wc" => ["size" => "1.32 x 1.80"],
                            "living_room" => ["size" => "6.95 x 4.25"],
                            "kitchen" => ["size" => "3.66 x 2.76"],
                            "balcony" => ["size" => "3.65 x 1.52"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake Resistant Structure as per Indian Standards",
                "flooring" => "Vitrified Tiles Flooring",
                "kitchen" => "Granite/Artificial slab platform with ceramic tiles dado up to lintel level, branded plumbing and high-quality sink",
                "toilets" => "Asian / Jaquar fittings or equivalent",
                "utility" => null,
                "electrical" => null,
                "doors_windows" => "Decorative entrance door, flush doors, anodized aluminium sliding windows with granite sill",
                "internal_paint" => "Wall Putty internal, 100% Acrylic waterproof paint external"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => "Premium quality lifts",
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
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => true,
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
            "investmentNote" => "Shivam offers premium 3 BHK elite living residences with spacious rooms and modern specifications.",
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
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Riviera Bliss",
                "slug" => "/riviera-bliss",
                "reel" => "riviera-bliss",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Riviera%20Bliss.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Sur. No. 451/2/1, 451/2/2, F.P.No. 347, Near Aarohi Residency, South Bopal, Ahmedabad – 380058",
                    "city" => "Ahmedabad",
                    "area" => "South Bopal",
                    "map_description" => "Premium 3 & 4 BHK residences with modern amenities."
                ]
            ],
            "builder" => [
                "name" => "HN Safal Goyal Realty LLP",
                "logo_image_id" => null,
                "corporate_address" => "Beside Circle P Complex, Nr. Prahladnagar Cross Road, Sarkhej Gandhinagar Highway, Ahmedabad, Gujarat – 380015",
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
                            "bedroom_1" => ["size" => "3.35 x 4.27", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.65 x 4.87", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.65 x 3.35", "wardrobe_niche" => null],
                            "bath" => ["size" => "1.52 x 2.45"],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "3.65 x 5.48"],
                            "kitchen" => ["size" => "3.65 x 2.45"],
                            "balcony" => ["size" => "3.72 x 1.52"]
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
                            "bedroom_1" => ["size" => "4.57 x 3.65", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "5.18 x 3.65", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "4.58 x 3.35", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "4.26 x 3.35", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.55 x 1.78"],
                            "wc" => ["size" => "2.10 x 1.35"],
                            "living_room" => ["size" => "6.70 x 3.95"],
                            "kitchen" => ["size" => "2.90 x 4.57"],
                            "balcony" => ["size" => "2.46 x 3.95"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "Multiple lifts including fire lifts (10 person capacity)",
                "direction_info" => null,
                "security" => "Fire safety, CCTV, gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Society common amenities block",
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
                "security_monitoring" => "Fire monitoring, CCTV"
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
                "name" => "South Bopal, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Riviera Bliss offers 3 & 4 BHK luxury residences by HN Safal Goyal Realty LLP with premium lifestyle amenities in South Bopal, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);

        Project::create([
            "project" => [
                "name" => "The Evara",
                "slug" => "/the-evara",
                "reel" => "the-evara",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/The%20Evara.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Apri City, B/H Vishvash Platinum, Beside Sampriya, Nr. Ognaj Circle, Sola, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Sola",
                    "map_description" => "Lavish 4BHK living with modern architecture in Sola."
                ]
            ],
            "builder" => [
                "name" => "Swojas Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => "www.gujrera.gujarat.gov.in",
                    "sales_email" => null,
                    "phone" => "+91 97233 31144"
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Designed by Arc-qub Design Studio, Structure by Maruti Consultants",
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
                "number_of_lifts" => "Fire lifts & passenger lifts available",
                "direction_info" => null,
                "security" => "CCTV surveillance & fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement parking",
                "basement_ground" => "3-level basement"
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "Fire monitoring, CCTV"
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
                "name" => "Sola, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Evara offers 4 BHK Lavish Living in Sola, Ahmedabad, developed by Swojas Developers with premium design by Arc-qub Studio.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
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
            "emerging_area" => false
        ]);
     

        Project::create([
            "project" => [
                "name" => "Aranya",
                "slug" => "/aranya",
                "reel" => "aranya",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Aranya.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury residential project with modern 3 & 4 BHK homes."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "security" => "CCTV surveillance & fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "Fire monitoring, CCTV"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Aranya offers luxury 3 & 4 BHK homes in Ahmedabad with premium lifestyle amenities and modern features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Oscar Island",
                "slug" => "/oscar-island",
                "reel" => "oscar-island",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/OSCAR%20ISLAND.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 3 & 4 BHK residences with premium lifestyle amenities."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger & fire lifts",
                "direction_info" => null,
                "security" => "Fire safety, CCTV surveillance, gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground level parking",
                "basement_ground" => "2-level basement"
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
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Oscar Island offers premium 3 & 4 BHK homes in Ahmedabad with modern lifestyle amenities and luxury specifications.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Shyam Parijaat",
                "slug" => "/shyam-parijaat",
                "reel" => "shyam-parijaat",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shyam%20Parijaat.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 3 & 4 BHK homes with modern specifications."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shyam Parijaat offers premium 3 & 4 BHK homes in Ahmedabad with luxury lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);       
        Project::create([
            "project" => [
                "name" => "The Rhythm Palace",
                "slug" => "/the-rhythm-palace",
                "reel" => "the-rhythm-palace",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/THE%20RHYTHM%20PALACE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium lifestyle residences in Ahmedabad."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety, CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Rhythm Palace offers premium 3 & 4 BHK homes in Ahmedabad with luxury lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Prerna Enclave",
                "slug" => "/prerna-enclave",
                "reel" => "prerna-enclave",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PRERNA%20ENCLAVE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 3 & 4 BHK residences with modern lifestyle features."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Prerna Enclave offers elegant 3 & 4 BHK residences in Ahmedabad with premium lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Utsav 3",
                "slug" => "/utsav-3",
                "reel" => "utsav-3",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Utsav%20-%203.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Spacious 3 & 4 BHK residences with premium specifications."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Utsav 3 offers premium 3 & 4 BHK homes in Ahmedabad with luxury lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Aaditya Two",
                "slug" => "/aaditya-two",
                "reel" => "aaditya-two",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AADITYA%20TWO.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium residential project offering 3 & 4 BHK luxury homes."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Aaditya Two offers premium 3 & 4 BHK luxury homes in Ahmedabad with modern lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Aatrey Etasha",
                "slug" => "/aatrey-etasha",
                "reel" => "aatrey-etasha",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/AATREY%20ETASHA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 3 & 4 BHK residences designed for luxury and comfort."
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
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
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => null,
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Aatrey Etasha offers elegant 3 & 4 BHK residences in Ahmedabad with premium lifestyle amenities and modern features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "AL HAMD PACIFIC",
                "slug" => "/al-hamd-pacific",
                "reel" => "al-hamd-pacific",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AL%20HAMD%20PACIFIC.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near APMC Market, Vishala Circle, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK premium residences by HADI Developers near Vishala Circle."
                ]
            ],
            "builder" => [
                "name" => "HADI Developers",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => "www.gujrera.gujarat.gov.in",
                    "sales_email" => "riddhiassociates2006@gmail.com",
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "2BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.06 x 3.66", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.09 x 3.36", "wardrobe_niche" => null],
                            "bath" => ["size" => "1.52 x 1.52"],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "4.95 x 3.29"],
                            "kitchen" => ["size" => "3.96 x 2.44"],
                            "balcony" => ["size" => "1.20 x 3.17"]
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
                            "bedroom_1" => ["size" => "3.78 x 3.06", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.05 x 3.67", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.05 x 4.69", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.14 x 1.22"],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "5.18 x 3.36"],
                            "kitchen" => ["size" => "4.84 x 3.06"],
                            "balcony" => ["size" => "3.27 x 1.22"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
                "flooring" => "Premium flooring as per design",
                "kitchen" => "Standard modular kitchen space",
                "toilets" => "Branded sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with branded switches",
                "doors_windows" => "Wooden/Aluminium windows & doors",
                "internal_paint" => "Enamel paint finish"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety, CCTV, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement parking",
                "basement_ground" => "2-level basement"
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
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Vishala Circle, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "AL HAMD PACIFIC offers 2 & 3 BHK residences in Ahmedabad with modern specifications by HADI Developers.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Al-Shifa Residency",
                "slug" => "/al-shifa-residency",
                "reel" => "al-shifa-residency",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Al-Shifa%20Residency.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Opp. Mirzapur Court, Nr. Premier Shopping Center, Ahmedabad – 380001",
                    "city" => "Ahmedabad",
                    "area" => "Mirzapur",
                    "map_description" => "2 BHK residential flats in Mirzapur by Sifa Infra."
                ]
            ],
            "builder" => [
                "name" => "Sifa Infra",
                "logo_image_id" => null,
                "corporate_address" => "55 to 59, Ground Floor, Block-C, Premier Shopping Center, Nr. Mirzapur Court, Ahmedabad – 380001",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "079-25620533, 29095392, 9998435057"
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "security" => "Fire safety & basic CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open & basement parking",
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
                "solar_pv" => false,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "Basic CCTV monitoring"
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
                "name" => "Mirzapur, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Al-Shifa Residency by Sifa Infra offers 2 BHK flats in Mirzapur, Ahmedabad, with modern amenities and convenient location.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Aroma Exotica",
                "slug" => "/aroma-exotica",
                "reel" => "aroma-exotica",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/AROMA%20EXOTICA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Spacious 2 & 3 BHK residences with modern lifestyle amenities."
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
                            "bedroom_1" => ["size" => "10’6” x 12’0”", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "10’6” x 11’0”", "wardrobe_niche" => null],
                            "bath" => ["size" => "4’6” x 7’0”"],
                            "wc" => ["size" => "3’6” x 4’0”"],
                            "living_room" => ["size" => "10’0” x 16’0”"],
                            "kitchen" => ["size" => "7’6” x 10’0”"],
                            "balcony" => ["size" => "3’6” wide verandah"],
                            "store" => ["size" => "5’0” x 7’0”"],
                            "puja" => ["size" => "4’0” x 5’0”"],
                            "terrace" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Utility area attached with kitchen",
                "electrical" => "Concealed copper wiring with branded modular switches",
                "doors_windows" => "Wooden main door, aluminium sliding windows",
                "internal_paint" => "Putty finish with acrylic paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "LED lights in common areas",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance & fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground level parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Aroma Exotica offers 2 & 3 BHK residences in Ahmedabad with modern amenities and thoughtful design.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Avadh Homes",
                "slug" => "/avadh-homes",
                "reel" => "avadh-homes",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AVADH%20HOMES.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Spacious and affordable 2 & 3 BHK homes in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "security_monitoring" => "CCTV and fire monitoring"
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Avadh Homes offers spacious and affordable 2 & 3 BHK homes in Ahmedabad with essential lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
                "name" => "Aangan Sky",
                "slug" => "/aangan-sky",
                "reel" => "aangan-sky",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AANGAN%20SKY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 2 & 3 BHK residences with modern amenities."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Aangan Sky offers premium 2 & 3 BHK residences in Ahmedabad with modern lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Ayodhya Bunglows",
                "slug" => "/ayodhya-bunglows",
                "reel" => "ayodhya-bunglows",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AYODHYA%20BUNGLOWS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium bunglows offering spacious lifestyle residences."
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
                            "balcony" => ["size" => null],
                            "store" => ["size" => null],
                            "puja" => ["size" => null],
                            "terrace" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "security" => "Fire safety, gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open and basement parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Ayodhya Bunglows offer premium 4 BHK residences in Ahmedabad with modern lifestyle amenities and spacious designs.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Bunglows",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Shreedhar Royal",
                "slug" => "/shreedhar-royal",
                "reel" => "shreedhar-royal",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shreedhar%20Royal.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 3 & 4 BHK residences with luxury lifestyle features."
                ]
            ],
            "builder" => [
                "name" => "Shreedhar Group",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Shreedhar Royal offers premium 3 & 4 BHK residences in Ahmedabad by Shreedhar Group with modern lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Akshar Sky",
                "slug" => "/akshar-sky",
                "reel" => "akshar-sky",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AKSHAR%20SKY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Behind Laxmi Sky City, Nr. Dayanand Sagar Aura, Opp. Shilpgram Saral Bunglows, Hanspura, Ahmedabad – 382330",
                    "city" => "Ahmedabad",
                    "area" => "Hanspura",
                    "map_description" => "3 BHK lavish living residences by Angel Developer."
                ]
            ],
            "builder" => [
                "name" => "Angel Developer",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "+91 87995 01504"
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
                            "balcony" => ["size" => null],
                            "terrace" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Branded vitrified tiles in all apartments",
                "kitchen" => "Granite platform with SS sink, glazed tiles up to lintel level",
                "toilets" => "Branded sanitary & bath fittings, branded tiles",
                "utility" => null,
                "electrical" => "ISI branded electric fitting",
                "doors_windows" => "Decorative main door, flush doors, aluminum section windows with granite frame",
                "internal_paint" => "Internal mala plaster with white finishing putty"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => null,
                "number_of_lifts" => "2 premium quality lifts in each block",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement parking available",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Hanspura, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Akshar Sky by Angel Developer offers lavish 3 BHK residences at Hanspura, Ahmedabad with premium specifications.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Siddharth Gardenia",
                "slug" => "/siddharth-gardenia",
                "reel" => "siddharth-gardenia",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SIDDHARTH%20GARDENIA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 2 & 3 BHK residences with lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Siddharth Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Siddharth Gardenia offers premium 2 & 3 BHK residences in Ahmedabad with lifestyle amenities by Siddharth Group.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Skyline",
                "slug" => "/skyline",
                "reel" => "skyline",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SKYLINE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium 2 & 3 BHK apartments with modern amenities."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Skyline offers premium 2 & 3 BHK residences in Ahmedabad with lifestyle amenities and modern features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Surya Nivaas",
                "slug" => "/surya-nivaas",
                "reel" => "surya-nivaas",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SURYA%20NIVAAS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Spacious 2 & 3 BHK residences with lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Surya Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Surya Nivaas offers spacious 2 & 3 BHK residences in Ahmedabad with lifestyle amenities and modern features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Swatantra Infratech",
                "slug" => "/swatantra-infratech",
                "reel" => "swatantra-infratech",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Swatantra%20Infratech.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium residential project offering lifestyle living."
                ]
            ],
            "builder" => [
                "name" => "Swatantra Infratech",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Swatantra Infratech offers premium 2 & 3 BHK residences in Ahmedabad with lifestyle amenities and modern features.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Vinayak Elegance",
                "slug" => "/vinayak-elegance",
                "reel" => "vinayak-elegance",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VINAYAK%20ELEGANCE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Spacious 2 & 3 BHK residences with lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Vinayak Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => "High speed passenger lifts",
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
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
            "investmentNote" => "Vinayak Elegance offers premium 2 & 3 BHK residences in Ahmedabad with lifestyle amenities by Vinayak Group.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        
        Project::create([
            "project" => [
                "name" => "EWS 78",
                "slug" => "/ews-78",
                "reel" => "ews-78",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWS%2078.png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "EWS housing scheme with planned infrastructure and facilities."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "common_lighting" => "Street lights and compound lights planned",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety measures"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Common parking area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS 78 housing scheme offers affordable homes with basic facilities and RCC structure.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS Scheme Phase 5+6+7+11+12",
                "slug" => "/ews-scheme-phase-5-6-7-11-12",
                "reel" => "ews-scheme-phase",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWSScheme-Phase-5+6+7+11+12%20(1).png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Government approved EWS housing scheme across multiple phases."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Street lights and common lighting",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety and gated boundary"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Common parking area",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area (limited)",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS Scheme Phase 5+6+7+11+12 provides affordable 1BHK homes in Ahmedabad with basic facilities and RCC construction.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS Scheme Phase 5+6+7+11+12 - Version 2",
                "slug" => "/ews-scheme-phase-5-6-7-11-12-v2",
                "reel" => "ews-scheme-phase-v2",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWSScheme-Phase-5+6+7+11+12%20(2).png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Alternative brochure for EWS housing scheme with basic facilities."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Street lights and basic compound lighting",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety and boundary wall"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open/common parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Small children play area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS Scheme Phase 5+6+7+11+12 Version 2 offers affordable housing units with RCC structure and basic amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS Scheme Phase 5+6+7+11+12 - Version 3",
                "slug" => "/ews-scheme-phase-5-6-7-11-12-v3",
                "reel" => "ews-scheme-phase-v3",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWSScheme-Phase-5+6+7+11+12%20(3).png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Government EWS housing scheme with planned infrastructure and facilities."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "common_lighting" => "Street lights and compound lighting",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety provisions"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open/common parking area",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS Scheme Phase 5+6+7+11+12 (Version 3) offers affordable 1BHK homes with RCC structure and essential facilities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS Scheme Phase 5+6+7+11+12 - Final",
                "slug" => "/ews-scheme-phase-5-6-7-11-12-final",
                "reel" => "ews-scheme-phase-final",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWSScheme-Phase-5+6+7+11+12%20(5).png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Final brochure version of EWS housing scheme providing affordable 1BHK homes."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Street lighting and compound lights",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open/common parking available",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS Scheme Phase (Final version) offers affordable 1BHK homes with RCC structure and government-approved layout in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS Scheme Phase 5+6+7+11+12 - Version 4",
                "slug" => "/ews-scheme-phase-5-6-7-11-12-v4",
                "reel" => "ews-scheme-phase-v4",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWSScheme-Phase-5+6+7+11+12%20(4).png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Affordable EWS homes under Phase 5+6+7+11+12 with RCC structure and facilities."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC construction",
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
                "common_lighting" => "Street lights & campus lights",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety measures and gated layout"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open/common parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play zone",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS Scheme Phase (Version 4) offers affordable homes with RCC construction and basic facilities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "LIG Scheme Phase 2",
                "slug" => "/lig-scheme-phase-2",
                "reel" => "lig-scheme-phase-2",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/LIGScheme-Phase-2.png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Affordable LIG housing scheme under Phase 2 with RCC structure."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Street lighting & compound lights",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open/common parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "LIG Scheme Phase 2 offers affordable 1BHK & 2BHK homes in Ahmedabad with RCC structure and basic amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK & 2BHK Affordable Homes",
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
                "name" => "Chisty's Landmark",
                "slug" => "/chistys-landmark",
                "reel" => "chistys-landmark",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/CHISTY'S%20LANDMARK.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ellisbridge, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Ellisbridge",
                    "map_description" => "Premium residential apartments at Ellisbridge, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Chisty Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "common_lighting" => "Compound lighting and street lights",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance and fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground / basement parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community space",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Ellisbridge, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Chisty's Landmark offers premium 2 & 3 BHK apartments in Ellisbridge, Ahmedabad with lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
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
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Eklingji Homes",
                "slug" => "/eklingji-homes",
                "reel" => "eklingji-homes",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/Eklingji%20Homes.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Sanand, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Sanand",
                    "map_description" => "Affordable housing project at Sanand, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Eklingji Developers",
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "common_lighting" => "Compound lighting & street lights",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety measures"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Common / open parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "name" => "Sanand, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Eklingji Homes provides affordable 1 & 2 BHK residences at Sanand, Ahmedabad with RCC structure and basic amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1 & 2 BHK Affordable Homes",
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
                "name" => "EWS 75",
                "slug" => "/ews-75",
                "reel" => "ews-75",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWS%2075.png",
                "type" => "Residential Scheme",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Sarkhej, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Sarkhej",
                    "map_description" => "EWS 75 scheme offering affordable housing in Sarkhej, Ahmedabad."
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "common_lighting" => "Street lighting & compound lights",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Basic fire safety measures"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Common / open parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "name" => "Sarkhej, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "EWS 75 offers affordable 1BHK residences in Sarkhej, Ahmedabad with RCC structure and basic facilities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1BHK Affordable Homes",
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
                "name" => "EWS 76",
                "slug" => "/ews-76",
                "reel" => "ews-76",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWS%2076.png",
                "type" => "Residential Scheme (EWS Housing)",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "EWS Housing Scheme with multiple blocks, society facilities, health center and anganwadi."
                ]
            ],
            "builder" => [
                "name" => "Ahmedabad Municipal Corporation",
                "logo_image_id" => null,
                "corporate_address" => "Sardar Patel Bhavan, Danapith, Ahmedabad",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "EWS Unit" => [
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
                        "size" => "Approx. 38 sq.m.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC structure with fire lifts & plinth parking",
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
                "common_lighting" => "Provision as per layout",
                "number_of_lifts" => "Fire lifts and passenger lifts in all blocks",
                "direction_info" => null,
                "security" => "Fire safety provisions"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Parking as per plinth layout",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Society room, office, health center, anganwadi",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Health Center within society",
                "kids_area" => "Play areas in common plots",
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
                "security_monitoring" => "Fire safety monitoring"
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "EWS 76 is an Ahmedabad Municipal Corporation affordable housing scheme with multiple blocks, society amenities and anganwadi.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "EWS Housing Units",
                    "size" => "Approx. 38 sq.m.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "AMC",
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
                "name" => "EWS 80",
                "slug" => "/ews-80",
                "reel" => "ews-80",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWS%2080.png",
                "type" => "Residential Scheme (EWS Housing)",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "EWS 80 affordable housing scheme with society amenities and RCC structure."
                ]
            ],
            "builder" => [
                "name" => "Ahmedabad Municipal Corporation",
                "logo_image_id" => null,
                "corporate_address" => "Sardar Patel Bhavan, Danapith, Ahmedabad",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "EWS Unit" => [
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
                        "size" => "Approx. 38-40 sq.m.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Compound lighting and street lights",
                "number_of_lifts" => "Fire lifts and passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety as per norms"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open / plinth level parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Society office, health center, anganwadi",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Basic health center",
                "kids_area" => "Children play area in common plot",
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
                "security_monitoring" => "Fire & safety monitoring"
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "EWS 80 is an AMC affordable housing project with RCC structure, health center, anganwadi and children play area.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "EWS Affordable Homes",
                    "size" => "Approx. 38-40 sq.m.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "AMC",
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
                "name" => "EWS 81",
                "slug" => "/ews-81",
                "reel" => "ews-81",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EWS%2081.png",
                "type" => "Residential Scheme (EWS Housing)",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Affordable EWS 81 scheme offering housing units with RCC structure and community amenities."
                ]
            ],
            "builder" => [
                "name" => "Ahmedabad Municipal Corporation",
                "logo_image_id" => null,
                "corporate_address" => "Sardar Patel Bhavan, Danapith, Ahmedabad",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "EWS Unit" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "utility_area" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 38-40 sq.m.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure with fire safety provisions",
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
                "common_lighting" => "Street lights & society common lights",
                "number_of_lifts" => "Fire lifts and passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety and gated layout"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Plinth / open parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Society office, anganwadi, health center",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Primary health center",
                "kids_area" => "Children play area",
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
                "security_monitoring" => "Fire safety monitoring"
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "EWS 81 offers affordable EWS units with RCC structure, fire safety, and community amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "EWS Affordable Homes",
                    "size" => "Approx. 38-40 sq.m.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "AMC",
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
                "name" => "Shayona Icon",
                "slug" => "/shayona-icon",
                "reel" => "shayona-icon",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/ShayonaIcon_INQ.png",
                "type" => "Residential & Commercial Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Shayona City, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Shayona City",
                    "map_description" => "Shayona Icon offers 2 & 3 BHK apartments with commercial spaces in Shayona City, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Shayona Group",
                "logo_image_id" => null,
                "corporate_address" => "Shayona City, Ahmedabad",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Common lighting and compound lights",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground level parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "name" => "Shayona City, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shayona Icon offers luxurious 2 & 3 BHK apartments along with commercial spaces in Shayona City, Ahmedabad by Shayona Group.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments with Commercial Units",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Shayona Group",
                        "location" => "Ahmedabad",
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
                "name" => "Ganesh Luxuria",
                "slug" => "/ganesh-luxuria",
                "reel" => "ganesh-luxuria",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Ganesh%20Luxuria.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Ganesh Luxuria offers premium 3 BHK apartments in Ahmedabad with modern lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Ganesh Group",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1600-1800 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Common lighting in campus",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground level parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with community space",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
            "investmentNote" => "Ganesh Luxuria offers spacious 3 BHK apartments with lifestyle amenities in Ahmedabad by Ganesh Group.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "Approx. 1600-1800 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Ganesh Group",
                        "location" => "Ahmedabad",
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
                "name" => "Giriraj Apartment",
                "slug" => "/giriraj-apartment",
                "reel" => "giriraj-apartment",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GIRIRAJ%20APARTMENT.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Giriraj Apartment offers residential flats with RCC structure and modern facilities."
                ]
            ],
            "builder" => [
                "name" => "Giriraj Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500-1600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Standard vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Utility area with washing space",
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Standard flush doors and aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common lighting and street lights",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety and CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground and basement parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Giriraj Apartment offers 2 & 3 BHK residences in Ahmedabad with RCC structure and modern lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1200-1600 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Giriraj Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Gulmohra",
                "slug" => "/gulmohra",
                "reel" => "gulmohra",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GULMOHRA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Gulmohra offers modern residential apartments with lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Gulmohra Group",
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
                        "size" => "Approx. 1200 sq.ft.",
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
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Compound & common area lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety and CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground level parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Gulmohra offers 2 & 3 BHK residences in Ahmedabad with RCC structure, clubhouse, and modern amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1200-1500 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Gulmohra Group",
                        "location" => "Ahmedabad",
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
                "name" => "H7 Project",
                "slug" => "/h7-project",
                "reel" => "h7-project",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/H7.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "H7 Project offers modern residential apartments with lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "H7 Developers",
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
                        "size" => "Approx. 1200 sq.ft.",
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
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
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
                "common_lighting" => "Compound & common area lighting",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety and CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV and fire monitoring"
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "H7 Project offers 2 & 3 BHK residences with RCC structure and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1200-1500 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "H7 Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Harmony Flats",
                "slug" => "/harmony-flats",
                "reel" => "harmony-flats",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/HARMONY%20FLATS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Harmony Flats offers budget-friendly 1 & 2 BHK apartments in Ahmedabad with basic facilities."
                ]
            ],
            "builder" => [
                "name" => "Harmony Group",
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 600-650 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
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
                        "size" => "Approx. 900-1000 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Standard vitrified tiles",
                "kitchen" => "Granite platform with sink",
                "toilets" => "Basic sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Standard emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common area lighting",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Basic fire safety & gated community"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open and stilt parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => null,
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => null,
                "kids_area" => "Children play area",
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
                "wellness" => false,
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Harmony Flats offers affordable 1 & 2 BHK homes with RCC structure and basic amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1 & 2 BHK Apartments",
                    "size" => "600-1000 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Harmony Group",
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
                "name" => "Horizon",
                "slug" => "/horizon",
                "reel" => "horizon",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Horizon.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Horizon offers premium residences in Ahmedabad with modern lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Horizon Group",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1600-1700 sq.ft.",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 2000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common & compound lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV monitoring"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with community space",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
            "investmentNote" => "Horizon offers spacious 3 & 4 BHK residences in Ahmedabad with RCC structure, clubhouse, and lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
                    "size" => "1600-2000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Horizon Group",
                        "location" => "Ahmedabad",
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
                "name" => "Imperial Swagat",
                "slug" => "/imperial-swagat",
                "reel" => "imperial-swagat",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/IMPERIAL%20SWAGAT.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Imperial Swagat offers luxurious apartments with modern amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Swagat Group",
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
                            "bedroom_1" => ["size" => "Approx. 11' x 13'", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "Approx. 11' x 13'", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "Approx. 10' x 12'", "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "Approx. 12' x 18'"],
                            "kitchen" => ["size" => "Approx. 8' x 10'"],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500-1600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common lighting in lobbies and passages",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with community space",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
            "investmentNote" => "Imperial Swagat by Swagat Group offers luxurious 3 BHK residences with RCC structure, clubhouse, gymnasium, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "1500-1600 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Swagat Group",
                        "location" => "Ahmedabad",
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
                "name" => "Kalpavatika",
                "slug" => "/kalpavatika",
                "reel" => "kalpavatika",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KALPAVATIKA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Sabarmati, Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => "Sabarmati",
                    "map_description" => "Kalpavatika offers premium 2 & 3 BHK residences in Sabarmati, Ahmedabad with modern lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Kalpavatika Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500-1600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Vitrified tiles in rooms",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Dedicated washing area",
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & gated campus"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "name" => "Sabarmati, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Kalpavatika offers 2 & 3 BHK premium residences with RCC structure, clubhouse, gymnasium, and lifestyle amenities in Sabarmati, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1200-1600 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Kalpavatika Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Kalrav Greens",
                "slug" => "/kalrav-greens",
                "reel" => "kalrav-greens",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KALRAV%20GREENS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Kalrav Greens offers premium 3 BHK apartments with modern lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Kalrav Developers",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500-1600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Dedicated washing space",
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and stilt parking",
                "basement_ground" => "1-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Kalrav Greens offers premium 3 BHK residences with RCC structure, clubhouse, gymnasium, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "1500-1600 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Kalrav Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Shivon 37",
                "slug" => "/shivon-37",
                "reel" => "shivon-37",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Keraliya%20infra%20projects%20shivon%2037.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Shivon 37 offers premium 3 BHK residences with lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Keraliya Infra Projects",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink, dado up to lintel",
                "toilets" => "Designer tiles with branded sanitary fittings",
                "utility" => "Washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush internal doors, powder coated aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common area & compound lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV & fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Well-equipped gym",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shivon 37 by Keraliya Infra Projects offers premium 3 BHK homes with RCC structure, modern amenities, and community living in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "Approx. 1600 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Keraliya Infra Projects",
                        "location" => "Ahmedabad",
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
                "name" => "Krish Luxurial II",
                "slug" => "/krish-luxurial-2",
                "reel" => "krish-luxurial-2",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KRISH_LUXURIAL-ll.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Krish Luxurial II offers luxury 3 & 4 BHK apartments with premium amenities in Ahmedabad."
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
                        "size" => "Approx. 1600-1700 sq.ft.",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 2000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink and dado",
                "toilets" => "Designer tiles with branded sanitary fittings",
                "utility" => "Washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby, passages & compound lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance & fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and ground level parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with banquet hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => "Guest room facilities",
                "work_from_home" => null,
                "health_hub" => "Well-equipped gym",
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
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Krish Luxurial II offers luxury 3 & 4 BHK residences with RCC structure, banquet hall, clubhouse, gym, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Apartments",
                    "size" => "1600-2000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Krish Group",
                        "location" => "Ahmedabad",
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
                "name" => "Madhav 28",
                "slug" => "/madhav-28",
                "reel" => "madhav-28",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/MADHAV%2028.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "FP-28, TPS-13, Motera, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Motera",
                    "map_description" => "Madhav 28 offers premium 3 BHK residences at Motera, Ahmedabad with modern lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Dharendra Infracon LLP",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1600-1700 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer tiles with branded sanitary fittings",
                "utility" => "Washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => "1-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV & fire monitoring"
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
                "name" => "Motera, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Madhav 28 by Dharendra Infracon LLP offers premium 3 BHK homes with RCC structure, gymnasium, clubhouse, and modern amenities in Motera, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "1600-1700 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Dharendra Infracon LLP",
                        "location" => "Ahmedabad",
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
                "name" => "Madhav Villa",
                "slug" => "/madhav-villa",
                "reel" => "madhav-villa",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/MADHAV%20VILLA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Madhav Villa offers premium residential villas with modern lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Madhav Group",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 2000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Dedicated washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Compound & street lighting",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "Fire safety & gated campus"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Private villa parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse / community space",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Madhav Villa offers spacious luxury 3 BHK homes with RCC structure, clubhouse, gymnasium, and modern amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Villas",
                    "size" => "2000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Madhav Group",
                        "location" => "Ahmedabad",
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
                "name" => "Legacy Heights",
                "slug" => "/legacy-heights",
                "reel" => "legacy-heights",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Legacy%20Heights.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Legacy Heights offers premium 2 & 3 BHK residences in Ahmedabad with lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Legacy Developers",
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
                        "size" => "Approx. 1200 sq.ft.",
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
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Vitrified tiles in rooms",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common lighting in passages & lobbies",
                "number_of_lifts" => "Passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety & CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and stilt parking",
                "basement_ground" => "1-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Legacy Heights offers 2 & 3 BHK premium residences with RCC structure, gymnasium, clubhouse, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1200-1500 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Legacy Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Lentin Apartment",
                "slug" => "/lentin-apartment",
                "reel" => "lentin-apartment",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/LENTIN%20APPARTMENT.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Lentin Apartment offers quality residential flats in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Lentin Developers",
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
                        "size" => "Approx. 1100-1200 sq.ft.",
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
                        "size" => "Approx. 1400-1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with sink",
                "toilets" => "Standard fittings",
                "utility" => null,
                "electrical" => "Concealed wiring",
                "doors_windows" => "Wooden doors & aluminum windows",
                "internal_paint" => "Acrylic paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common area lighting",
                "number_of_lifts" => "Passenger lift",
                "direction_info" => null,
                "security" => "Basic fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ground & stilt parking",
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => "Low",
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Lentin Apartment provides affordable 2 & 3 BHK homes with RCC structure in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => "1100-1500 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Lentin Developers",
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
                "name" => "LIG Scheme",
                "slug" => "/lig-scheme",
                "reel" => "lig-scheme",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/LIG-Broucher.png",
                "type" => "Affordable Housing Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Affordable housing scheme (LIG) by AMC in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Ahmedabad Municipal Corporation (AMC)",
                "logo_image_id" => null,
                "corporate_address" => "AMC Office, Ahmedabad",
                "contact" => [
                    "website" => "https://ahmedabadcity.gov.in",
                    "sales_email" => null,
                    "phone" => null
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => "Affordable (as per AMC norms)",
                        "size" => "Approx. 500-600 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
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
                        "price" => "Affordable (as per AMC norms)",
                        "size" => "Approx. 700-800 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Basic vitrified tiles",
                "kitchen" => "Standard kitchen platform",
                "toilets" => "Basic sanitary fittings",
                "utility" => null,
                "electrical" => "Standard electrical fittings",
                "doors_windows" => "Simple flush doors & windows",
                "internal_paint" => "Basic paint finish"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Basic common area lighting",
                "number_of_lifts" => "Passenger lift (as per scheme)",
                "direction_info" => null,
                "security" => "Basic fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Open & limited parking slots",
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => "Low",
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "LIG Scheme by AMC provides affordable 1 & 2 BHK housing for families in Ahmedabad under government housing initiative.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1 & 2 BHK Affordable Homes",
                    "size" => "500-800 sq.ft.",
                    "price" => "As per AMC norms",
                    "date" => null,
                    "url" => "https://ahmedabadcity.gov.in",
                    "agency" => [
                        "name" => "Ahmedabad Municipal Corporation (AMC)",
                        "location" => "Ahmedabad",
                        "url" => "https://ahmedabadcity.gov.in"
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "New Pragna Flats",
                "slug" => "/new-pragna-flats",
                "reel" => "new-pragna-flats",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/NEW%20PRAGNA%20FLATS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Kameshwar Mahadev, Jodhpur Gam, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Jodhpur",
                    "map_description" => "New Pragna Flats offers 2 BHK affordable homes with essential amenities at Jodhpur, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Patel Traders",
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
                        "size" => "Approx. 1100 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Wooden doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Common passage lighting",
                "number_of_lifts" => "Passenger lift",
                "direction_info" => null,
                "security" => "Basic fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Stilt parking",
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
                "community_living" => false,
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
                "wellness" => false,
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
                "name" => "Jodhpur, Ahmedabad",
                "growth" => "Low",
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "New Pragna Flats by Patel Traders offers affordable 2 BHK homes with RCC structure and essential facilities at Jodhpur, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Flats",
                    "size" => "1100 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Patel Traders",
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
                "name" => "Nityam Harmony",
                "slug" => "/nityam-harmony",
                "reel" => "nityam-harmony",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/NITYAM%20HARMONY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Science City, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Science City",
                    "map_description" => "Nityam Harmony offers premium 3 BHK residences with lifestyle amenities near Science City, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Balaji Associates",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1600-1700 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer tiles with branded sanitary fittings",
                "utility" => "Washing & storage space",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety, CCTV surveillance, gated campus"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement and stilt parking",
                "basement_ground" => "1-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => null,
                "security_monitoring" => "CCTV monitoring & fire safety"
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
            "investmentNote" => "Nityam Harmony by Balaji Associates offers premium 3 BHK homes with RCC structure, clubhouse, gymnasium, and modern amenities near Science City, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => "1600-1700 sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Balaji Associates",
                        "location" => "Ahmedabad",
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
                "name" => "Neer Valley",
                "slug" => "/neer-valley",
                "reel" => "neer-valley",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/NEER%20VALLEY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Neer Valley residential project offering quality homes with basic amenities."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Neer Valley offers 2 & 3 BHK homes with essential facilities in Ahmedabad.",
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
                "name" => "Prarthna Homes",
                "slug" => "/prarthna-homes",
                "reel" => "prarthna-homes",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PRARTHNA%20HOMES.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Prarthna Homes residential project offering quality 2 & 3 BHK flats in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Prarthna Homes offers 2 & 3 BHK residential flats with essential amenities in Ahmedabad.",
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
                "name" => "Rashmi Sky Scape",
                "slug" => "/rashmi-sky-scape",
                "reel" => "rashmi-sky-scape",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Rashmi%20Sky%20Scape.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Shilaj–Thaltej Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Shilaj–Thaltej",
                    "map_description" => "Rashmi Sky Scape offers premium 4 BHK residences with modern lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "R & B Buildcon",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 2500+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Flush doors & aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "High speed passenger lifts",
                "direction_info" => null,
                "security" => "Fire safety, CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "modular_kitchen" => "Optional modular kitchen",
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
                "name" => "Shilaj–Thaltej, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Rashmi Sky Scape by R & B Buildcon offers luxury 4 BHK homes with RCC structure, clubhouse, gymnasium, and premium lifestyle amenities at Shilaj–Thaltej, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => "2500+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "R & B Buildcon",
                        "location" => "Ahmedabad",
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
                "name" => "Ratnaakar Artesia Phase I",
                "slug" => "/ratnaakar-artesia-phase-1",
                "reel" => "ratnaakar-artesia-phase-1",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RATNAAKAR%20ARTESIA%20PHASE-I.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Ambli–Bopal Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Ambli–Bopal",
                    "map_description" => "Ratnaakar Artesia Phase I offers luxury 4 BHK residences with premium lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Ratnaakar Group",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 3000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium Italian marble / vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer sanitary fittings & premium tiles",
                "utility" => "Utility / wash area",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, UPVC / aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Designer lobby & passage lighting",
                "number_of_lifts" => "High speed passenger & service lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety, gated campus"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement & stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Exclusive clubhouse with multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => "Guest rooms in clubhouse",
                "work_from_home" => null,
                "health_hub" => "Gymnasium & yoga space",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Home automation ready",
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => "Designer lights in lobby & common areas",
                "security_monitoring" => "CCTV monitoring, fire safety system"
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
                "name" => "Ambli–Bopal, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Ratnaakar Artesia Phase I by Ratnaakar Group offers luxury 4 BHK residences with clubhouse, gymnasium, and premium lifestyle amenities at Ambli–Bopal, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => "3000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Ratnaakar Group",
                        "location" => "Ahmedabad",
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
                "name" => "Ratnaakar Artesia Phase II",
                "slug" => "/ratnaakar-artesia-phase-2",
                "reel" => "ratnaakar-artesia-phase-2",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RATNAAKAR%20ARTESIA%20PHASE-II.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Ambli–Bopal Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Ambli–Bopal",
                    "map_description" => "Ratnaakar Artesia Phase II offers luxury 4 BHK residences with premium lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Ratnaakar Group",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 3000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium Italian marble / vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer sanitary fittings & premium tiles",
                "utility" => "Utility / wash area",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, UPVC / aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Designer lobby & passage lighting",
                "number_of_lifts" => "High speed passenger & service lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety, gated campus"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement & stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Exclusive clubhouse with multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => "Guest rooms in clubhouse",
                "work_from_home" => null,
                "health_hub" => "Gymnasium & yoga space",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Home automation ready",
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => "Designer lights in lobby & common areas",
                "security_monitoring" => "CCTV monitoring, fire safety system"
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
                "name" => "Ambli–Bopal, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Ratnaakar Artesia Phase II by Ratnaakar Group offers luxury 4 BHK residences with clubhouse, gymnasium, and premium lifestyle amenities at Ambli–Bopal, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Apartments",
                    "size" => "3000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Ratnaakar Group",
                        "location" => "Ahmedabad",
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
                "name" => "Propus Clara",
                "slug" => "/propus-clara",
                "reel" => "propus-clara",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Propus%20Clara.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Propus Clara residential project offering premium lifestyle living in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Propus Group",
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
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Propus Clara by Propus Group offers 3 BHK premium residences with lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Propus Group",
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
                "name" => "Punyashree",
                "slug" => "/punyashree",
                "reel" => "punyashree",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Punyashree.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Punyashree offers quality residential apartments with essential amenities in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Punyashree offers 2 & 3 BHK homes with essential amenities for families in Ahmedabad.",
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
                "name" => "Royal Vatika",
                "slug" => "/royal-vatika",
                "reel" => "royal-vatika",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ROYAL%20VATIKA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Ognaj Circle, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Ognaj",
                    "map_description" => "Royal Vatika offers 2 & 3 BHK residential apartments with essential lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Royal Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Wash / utility area",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Automatic passenger lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "name" => "Ognaj, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Royal Vatika by Royal Group offers 2 & 3 BHK residential apartments with RCC structure, clubhouse, and lifestyle amenities at Ognaj, Ahmedabad.",
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
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Rudraksh Bungalows",
                "slug" => "/rudraksh-bungalows",
                "reel" => "rudraksh-bungalows",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RUDRAKSH%20BUNGALOWS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Rudraksh Bungalows offers premium 4 BHK luxury bungalows with spacious layouts in Ahmedabad."
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
                            "bedroom_1" => ["size" => "15'0\" x 13'0\"", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "14'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "13'0\" x 12'0\"", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "12'0\" x 11'0\"", "wardrobe_niche" => null],
                            "bath" => ["size" => "8'0\" x 5'0\""],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => "20'0\" x 15'0\""],
                            "kitchen" => ["size" => "12'0\" x 10'0\""],
                            "balcony" => ["size" => "10'0\" x 6'0\""]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 3000–3500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Wash / utility area",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Individual bungalow parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "name" => "Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Rudraksh Bungalows offers 4 BHK premium bungalows with RCC structure, clubhouse, gym, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Bungalows",
                    "size" => "3000–3500 sq.ft.",
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
                "name" => "Reva 80",
                "slug" => "/reva-80",
                "reel" => "reva-80",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Reva%2080.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Reva 80 residential project offering modern lifestyle flats in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Reva 80 offers 2 & 3 BHK homes with essential facilities in Ahmedabad.",
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
                "name" => "Saarathi",
                "slug" => "/saarathi",
                "reel" => "saarathi",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/SAARATHI.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Saarathi residential project offering affordable homes with basic amenities in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
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
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Saarathi offers 2 & 3 BHK homes with basic amenities for affordable living in Ahmedabad.",
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
                "name" => "Riviera Select",
                "slug" => "/riviera-select",
                "reel" => "riviera-select",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Riviera%20Select.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Bopal–Ambli Road, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Bopal–Ambli",
                    "map_description" => "Riviera Select offers luxury 4, 5 & 6 BHK residences, duplexes and penthouses with premium amenities."
                ]
            ],
            "builder" => [
                "name" => "Goyal & Co.",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 3500+ sq.ft.",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 4500+ sq.ft.",
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
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 5500+ sq.ft.",
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
                            "bath" => ["size" => null],
                            "wc" => ["size" => null],
                            "living_room" => ["size" => null],
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 6000+ sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Italian marble / premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Designer sanitary fittings with premium tiles",
                "utility" => "Utility / wash area",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, flush doors, aluminum / UPVC windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Designer lobby & passage lighting",
                "number_of_lifts" => "High speed passenger & service lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety, gated campus"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement & stilt parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Exclusive clubhouse with multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => "Guest rooms in clubhouse",
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga space",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => "Home automation ready",
                "solar_pv" => true,
                "modular_kitchen" => "Optional modular kitchen",
                "designer_lighting" => "Designer lights in common areas",
                "security_monitoring" => "CCTV monitoring, fire safety"
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
                "name" => "Bopal–Ambli, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Riviera Select by Goyal & Co. offers premium 4, 5 & 6 BHK residences, duplexes and penthouses with luxury amenities at Bopal–Ambli Road, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4, 5 & 6 BHK Apartments / Penthouse",
                    "size" => "3500–6000+ sq.ft.",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Goyal & Co.",
                        "location" => "Ahmedabad",
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
                "name" => "Samay Lakeview",
                "slug" => "/samay-lakeview",
                "reel" => "samay-lakeview",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAMAY%20LAKEVIEW.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Lake, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Samay Lakeview residential project with landscaped gardens, senior citizen sit-outs and essential lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Samay Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
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
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated campus"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Samay Lakeview by Samay Group offers affordable 2 BHK homes with clubhouse, landscaped gardens and senior citizen sit-outs in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Samay Group",
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
                "name" => "Sadguru Krishna-3",
                "slug" => "/sadguru-krishna-3",
                "reel" => "sadguru-krishna-3",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SADGURU%20KRISHNA-3.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Sadguru Krishna-3 residential apartments offering affordable homes with basic facilities."
                ]
            ],
            "builder" => [
                "name" => "Sadguru Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
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
                "kids_area" => "Children play area",
                "senior_sitouts" => null,
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Sadguru Krishna-3 by Sadguru Developers offers 2 BHK affordable apartments in Ahmedabad with basic facilities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Sadguru Developers",
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
                "name" => "Sahitya Gold",
                "slug" => "/sahitya-gold",
                "reel" => "sahitya-gold",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAHITYA%20GOLD.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Sahitya Gold residential apartments offering lifestyle living in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Sahitya Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
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
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Sahitya Gold by Sahitya Developers offers 2 & 3 BHK homes with RCC structure, clubhouse, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Sahitya Developers",
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
                "name" => "Satsang Park",
                "slug" => "/satsang-park",
                "reel" => "satsang-park",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SATSANG%20PARK.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Satsang Park residential apartments providing affordable homes with basic lifestyle amenities."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
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
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => false,
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
                "wellness" => false,
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
                "growth" => null,
                "growthPeriod" => null,
                "avgRate" => null
            ],
            "investmentNote" => "Satsang Park offers 2 BHK homes with essential facilities and community spaces in Ahmedabad.",
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
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Shivansh",
                "slug" => "/shivansh",
                "reel" => "shivansh",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shivansh%20Broucher.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Shivansh residential project offering 2 & 3 BHK homes in Ahmedabad."
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
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
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated campus"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Shivansh offers 2 & 3 BHK residential apartments with RCC structure, clubhouse, and basic lifestyle amenities in Ahmedabad.",
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
                "name" => "Simandhar Shreerang",
                "slug" => "/simandhar-shreerang",
                "reel" => "simandhar-shreerang",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SIMANDHAR%20SHREERANG.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Nr. Ankur School, Nava Wadaj, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => "Nava Wadaj",
                    "map_description" => "Simandhar Shreerang offers 2 & 3 BHK lifestyle apartments with essential amenities in Nava Wadaj, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Maniprabhu Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative main door, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV monitoring, fire safety system"
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
                "name" => "Nava Wadaj, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Simandhar Shreerang by Maniprabhu Developers offers 2 & 3 BHK lifestyle apartments with clubhouse, gym, and essential amenities at Nava Wadaj, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Apartments",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Maniprabhu Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Shyam Kameshwar Heights",
                "slug" => "/shyam-kameshwar-heights",
                "reel" => "shyam-kameshwar-heights",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHYAM%20KAMESHWAR%20HEIGHTS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Near Kameshwar School, Ahmedabad",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Shyam Kameshwar Heights offers premium 3 BHK apartments with modern lifestyle amenities in Ahmedabad."
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
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.35 x 3.65", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.05 x 3.35", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.65 x 3.65", "wardrobe_niche" => null],
                            "bath" => ["size" => "1.50 x 2.10"],
                            "wc" => ["size" => "1.20 x 2.10"],
                            "living_room" => ["size" => "3.65 x 6.10"],
                            "kitchen" => ["size" => "2.75 x 3.35"],
                            "balcony" => ["size" => "1.50 x 3.05"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "Approx. 1500 sq.ft.",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles in all rooms",
                "kitchen" => "Granite platform with SS sink, dado up to lintel level",
                "toilets" => "Premium sanitary fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush main door, powder-coated aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "2 Automatic lifts per block",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => "Basement parking available"
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "security_monitoring" => "CCTV monitoring, fire safety"
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
            "investmentNote" => "Shyam Kameshwar Heights by Shyam Developers offers premium 3 BHK apartments with spacious layouts, RCC structure, clubhouse, gym and children play area in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => "Approx. 1500 sq.ft.",
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
            "emerging_property" => false,
            "emerging_area" => false
        ]);
        Project::create([
            "project" => [
                "name" => "Siddharth Palladium",
                "slug" => "/siddharth-palladium",
                "reel" => "siddharth-palladium",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SIDDHARTH%20PALLADIUM.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Siddharth Palladium offers spacious 3 BHK homes with modern lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Siddharth Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "106.81 sq.m (Carpet area)",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush door, aluminum windows",
                "internal_paint" => "Acrylic emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Siddharth Palladium by Siddharth Developers offers spacious 3 BHK apartments with RCC structure, vitrified flooring, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => "106.81 sq.m (Carpet area)",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Siddharth Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Shreyas Arise",
                "slug" => "/shreyas-arise",
                "reel" => "shreyas-arise",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHREYAS%20ARISE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Shreyas Tekra Road, Nr. Shreyas Foundation, Ambawadi, Ahmedabad – 380015",
                    "city" => "Ahmedabad",
                    "area" => "Ambawadi",
                    "map_description" => "Premium 4BHK apartments and penthouses with modern lifestyle amenities at Ambawadi, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Excel Life Space Shreyas LLP",
                "logo_image_id" => null,
                "corporate_address" => "Ahmedabad, Gujarat",
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "8866662910"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "4BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.58 x 5.27", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "4.55 x 3.63", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.35 x 4.15", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "3.35 x 3.02", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.44 x 1.52"],
                            "wc" => ["size" => "1.24 x 1.99"],
                            "living_room" => ["size" => "6.30 x 3.33"],
                            "kitchen" => ["size" => "3.18 x 3.33"],
                            "balcony" => ["size" => "1.41 x 4.66"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "141.72 sq.m carpet + 6.84 sq.m balcony + 4.67 sq.m wash",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ],
                    "Penthouse" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.58 x 5.27", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "4.55 x 3.63", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "3.35 x 4.15", "wardrobe_niche" => null],
                            "bedroom_4" => ["size" => "3.35 x 3.02", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.44 x 1.52"],
                            "wc" => ["size" => "1.24 x 1.99"],
                            "living_room" => ["size" => "6.31 x 3.34"],
                            "kitchen" => ["size" => "3.18 x 3.35"],
                            "balcony" => ["size" => "4.26 x 5.18 (Terrace)"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "200.69 sq.m carpet + 63.65 sq.m terrace + 4.67 sq.m wash",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite/marble platform with SS sink, vitrified tile flooring",
                "toilets" => "Superior quality sanitary fittings & fixtures, anti-skid tiles",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring, branded modular switches, circuit breakers",
                "doors_windows" => "Wooden frame with flush doors, aluminum sliding windows",
                "internal_paint" => "Mala plaster with putty finish, emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Lobby & passage lighting",
                "number_of_lifts" => "2 fully automated lifts per block",
                "direction_info" => null,
                "security" => "CCTV surveillance, access control, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "2-level basement parking",
                "basement_ground" => "Basement-1 and Basement-2 parking"
            ],
            "amenities" => [
                "clubhouse" => "G+1 Clubhouse with gym, library, indoor games, party lawn",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "solar_pv" => true,
                "modular_kitchen" => null,
                "designer_lighting" => null,
                "security_monitoring" => "CCTV, fire sprinklers, access control"
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
                "name" => "Ambawadi, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Shreyas Arise by Excel Life Space Shreyas LLP offers premium 4BHK apartments and penthouses with RCC structure, clubhouse, gym, library, solar panels, and advanced fire safety at Ambawadi, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Flats & Penthouses",
                    "size" => "141.72 sq.m to 200.69 sq.m",
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Excel Life Space Shreyas LLP",
                        "location" => "Ahmedabad",
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
                "name" => "Sonarika Apartment",
                "slug" => "/sonarika-apartment",
                "reel" => "sonarika-apartment",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SONARIKA.png",
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
                "name" => "Environs Realtor",
                "logo_image_id" => null,
                "corporate_address" => null,
                "contact" => [
                    "website" => null,
                    "sales_email" => null,
                    "phone" => "9898069299"
                ]
            ],
            "configuration" => [
                "Homes" => [
                    "3BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => "3.64 x 3.26", "wardrobe_niche" => null],
                            "bedroom_2" => ["size" => "3.04 x 4.27", "wardrobe_niche" => null],
                            "bedroom_3" => ["size" => "4.57 x 3.29", "wardrobe_niche" => null],
                            "bath" => ["size" => "2.45 x 1.35"],
                            "wc" => ["size" => "2.24 x 1.35"],
                            "living_room" => ["size" => "4.07 x 3.87"],
                            "kitchen" => ["size" => "2.37 x 3.14"],
                            "balcony" => ["size" => "2.35 x 2.19"]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => "BUA 109–111 sqm, Carpet ~97–99 sqm",
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame with brick masonry wall",
                "flooring" => "Premium vitrified tiles; wooden flooring in master bedroom; anti-skid tiles in balcony",
                "kitchen" => "Granite platform with SS sink, ceramic dado up to lintel",
                "toilets" => "Premium ceramic tiles, countertop basin in master, CERA/Jaquar fittings",
                "utility" => "Antiskid vitrified tiles",
                "electrical" => "3-phase concealed copper wiring, AC points in all rooms, WiFi points",
                "doors_windows" => "Main door flush with veneer, internal laminated, aluminum powder-coated windows with glass",
                "internal_paint" => "Putty finish inside, textured/acrylic paint outside"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "2 automatic elevators + fire lift",
                "direction_info" => null,
                "security" => "Secured gated community with CCTV"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "1 car + 2 two-wheeler parking allotted",
                "basement_ground" => "Ground floor parking with ramp"
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
                "security_monitoring" => "CCTV surveillance"
            ],
            "lifestyle" => [
                "family" => true,
                "children" => true,
                "elderly" => true,
                "wellness" => true,
                "community_events" => true,
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
            "investmentNote" => "Sonarika Apartment offers premium 3BHK residences with modern amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Flats",
                    "size" => "BUA 109–111 sqm, Carpet 97–99 sqm",
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
                "name" => "Stateland",
                "slug" => "/stateland",
                "reel" => "stateland",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/STATELAND.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Stateland offers premium apartments with modern amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Stateland Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant frame structure",
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
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Multipurpose hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Stateland by Stateland Developers offers 2 & 3 BHK residences with RCC structure, clubhouse, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Stateland Developers",
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
                "name" => "Status Luxe",
                "slug" => "/status-luxe",
                "reel" => "status-luxe",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/STATUS%20LUXE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Status Luxe offers premium 3 & 4 BHK residences with luxury amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Status Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
                "flooring" => "Premium vitrified tiles / wooden flooring in master",
                "kitchen" => "Granite platform with SS sink, dado up to lintel",
                "toilets" => "Premium sanitary ware & fittings",
                "utility" => "Provision for washing machine",
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Decorative flush main door, aluminum sliding windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security, fire safety system"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Well-equipped clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga/meditation hall",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => true,
                "solar_pv" => true,
                "modular_kitchen" => true,
                "designer_lighting" => true,
                "security_monitoring" => "CCTV monitoring, fire sprinklers"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Status Luxe offers premium 3 & 4 BHK residences with RCC structure, luxury clubhouse, smart home features and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Status Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Swara SkyHeights",
                "slug" => "/swara-skyheights",
                "reel" => "swara-skyheights",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SWARA%20SKYHEIGHTS.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => null,
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium residential apartments with modern lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Swara Group",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Decorative flush door, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community hall / clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
            "investmentNote" => "Swara SkyHeights offers 2 & 3 BHK residences with RCC structure, vitrified flooring, clubhouse and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Swara Group",
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
                "name" => "Tathastu Heritage Villa",
                "slug" => "/tathastu-heritage-villa",
                "reel" => "tathastu-heritage-villa",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/TATHASTU%20HERITAGE%20VILLA.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury heritage style villas with modern amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Tathastu Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC earthquake resistant structure",
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
                "number_of_lifts" => null,
                "direction_info" => null,
                "security" => "CCTV surveillance, gated security"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Ample parking for residents",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium / wellness space",
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
                "name" => "Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Tathastu Heritage Villa offers luxury heritage-styled 3 BHK villas with RCC structure, clubhouse, gym, children play area, and modern amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 BHK Villas",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Tathastu Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Tatva 3",
                "slug" => "/tatva-3",
                "reel" => "tatva-3",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/TATVA%203.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => "Shela",
                    "map_description" => "Premium 3 & 4 BHK apartments in Shela, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Tatva Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Decorative flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "name" => "Shela, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "Tatva 3 offers premium 3 & 4 BHK residences in Shela, Ahmedabad with RCC structure, clubhouse, gym and children play area.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Tatva Developers",
                        "location" => "Ahmedabad",
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
                "name" => "The Beaumonde",
                "slug" => "/the-beaumonde",
                "reel" => "the-beaumonde",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/THE%20BEAUMONDE.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 4 BHK residences with premium lifestyle amenities."
                ]
            ],
            "builder" => [
                "name" => "Beaumonde Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC structure",
                "flooring" => "Premium vitrified tiles / wooden flooring in master",
                "kitchen" => "Granite platform with SS sink, dado up to lintel",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Decorative flush door, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Luxury clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga/meditation hall",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => true,
                "solar_pv" => true,
                "modular_kitchen" => true,
                "designer_lighting" => true,
                "security_monitoring" => "CCTV monitoring, fire sprinklers"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Beaumonde offers premium 4 BHK residences with RCC structure, clubhouse, gym, and luxury lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Beaumonde Developers",
                        "location" => "Ahmedabad",
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
                "name" => "The Park",
                "slug" => "/the-park",
                "reel" => "the-park",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/The%20Park.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Premium lifestyle apartments with modern amenities."
                ]
            ],
            "builder" => [
                "name" => "The Park Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "High quality sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Decorative main door, aluminum sliding windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga hall",
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Park offers premium 3 & 4 BHK residences with RCC structure, clubhouse, gym, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "The Park Developers",
                        "location" => "Ahmedabad",
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
                "name" => "The Valinor",
                "slug" => "/the-valinor",
                "reel" => "the-valinor",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/THE%20VALINOR.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "Luxury 3 & 4 BHK residences with lifestyle amenities in Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Valinor Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring, modular switches",
                "doors_windows" => "Decorative flush doors, aluminum windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Luxury clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga/meditation hall",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => true,
                "solar_pv" => true,
                "modular_kitchen" => true,
                "designer_lighting" => true,
                "security_monitoring" => "CCTV monitoring, fire sprinklers"
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
                "name" => "Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Valinor offers premium 3 & 4 BHK residences with RCC structure, luxury clubhouse, gym, yoga, and lifestyle amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Valinor Developers",
                        "location" => "Ahmedabad",
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
                "name" => "The Western Oasis",
                "slug" => "/the-western-oasis",
                "reel" => "the-western-oasis",
                "brochure" => null,
                "logo_image_id" =>"https://images.keyarea1.com/Ahmedabad/The%20Western%20Oasis.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => "Vastrapur",
                    "map_description" => "Premium residential apartments with lifestyle amenities in Vastrapur, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Western Group",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame structure",
                "flooring" => "Premium vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring",
                "doors_windows" => "Aluminum sliding windows, decorative flush doors",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "Automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => false,
                "slot_info" => "Basement & ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Community clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga/meditation hall",
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
                "name" => "Vastrapur, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Western Oasis offers premium 3 & 4 BHK residences with RCC structure, clubhouse, gym, and lifestyle amenities in Vastrapur, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Western Group",
                        "location" => "Ahmedabad",
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
                "name" => "The Westin",
                "slug" => "/the-westin",
                "reel" => "the-westin",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/THE%20WESTIN.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => "Science City",
                    "map_description" => "Luxury 3 & 4 BHK apartments with premium lifestyle amenities near Science City, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Westin Developers",
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
                            "kitchen" => ["size" => null],
                            "balcony" => ["size" => null]
                        ],
                        "imageslider" => [],
                        "price" => null,
                        "size" => null,
                        "date" => null,
                        "floorPlans" => [],
                        "galleryImages" => []
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "Earthquake resistant RCC frame",
                "flooring" => "Premium vitrified tiles and wooden flooring in master",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Premium sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed copper wiring with modular switches",
                "doors_windows" => "Decorative flush doors, aluminum sliding windows",
                "internal_paint" => "Putty finish with emulsion paint"
            ],
            "building" => [
                "entry_direction" => null,
                "common_lighting" => "Yes",
                "number_of_lifts" => "High-speed automatic lifts",
                "direction_info" => null,
                "security" => "CCTV surveillance, fire safety system"
            ],
            "parking" => [
                "ev_charging" => true,
                "slot_info" => "Basement and ground parking",
                "basement_ground" => "2-level basement"
            ],
            "amenities" => [
                "clubhouse" => "Luxury clubhouse",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium, yoga hall, meditation zone",
                "kids_area" => "Children play area",
                "senior_sitouts" => "Senior citizen sit-outs",
                "community_living" => true,
                "24_7_security" => true,
                "visual_monitoring" => true,
                "fire_resilience" => true,
                "amenities_image_id" => null
            ],
            "modern_features" => [
                "smart_home_automation" => true,
                "solar_pv" => true,
                "modular_kitchen" => true,
                "designer_lighting" => true,
                "security_monitoring" => "CCTV monitoring, fire sprinklers"
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
                "name" => "Science City, Ahmedabad",
                "growth" => "High",
                "growthPeriod" => "5-10 years",
                "avgRate" => null
            ],
            "investmentNote" => "The Westin offers premium 3 & 4 BHK residences with RCC structure, clubhouse, gym, yoga hall and lifestyle amenities near Science City, Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "3 & 4 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Westin Developers",
                        "location" => "Ahmedabad",
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
                "name" => "Tirupati Sky",
                "slug" => "/tirupati-sky",
                "reel" => "tirupati-sky",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/TIRUPATI%20SKY.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => null,
                    "map_description" => "2 & 3 BHK residential apartments with modern amenities."
                ]
            ],
            "builder" => [
                "name" => "Tirupati Developers",
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty with emulsion paint"
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
                "slot_info" => "Basement and ground parking",
                "basement_ground" => null
            ],
            "amenities" => [
                "clubhouse" => "Clubhouse with multipurpose hall",
                "floating_fitness" => null,
                "dedicated_guest_rooms" => null,
                "work_from_home" => null,
                "health_hub" => "Gymnasium",
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
                "name" => "Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "5-7 years",
                "avgRate" => null
            ],
            "investmentNote" => "Tirupati Sky offers 2 & 3 BHK apartments with RCC structure, clubhouse, gym, children’s play area and modern amenities in Ahmedabad.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "2 & 3 BHK Flats",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Tirupati Developers",
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
                "name" => "Yashvi Parivar",
                "slug" => "/yashvi-parivar",
                "reel" => "yashvi-parivar",
                "brochure" => null,
                "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/YASHVI%20PARIVAR.png",
                "type" => "Residential Project",
                "visual_image_id" => null,
                "location" => [
                    "address" => "Ahmedabad, Gujarat",
                    "city" => "Ahmedabad",
                    "area" => "Nikol",
                    "map_description" => "Affordable 1 & 2 BHK homes with essential lifestyle amenities in Nikol, Ahmedabad."
                ]
            ],
            "builder" => [
                "name" => "Yashvi Group",
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
                    "1BHK" => [
                        "rooms" => [
                            "bedroom_1" => ["size" => null, "wardrobe_niche" => null],
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
                    ]
                ],
                "floorplan_image_id" => null,
                "price" => null
            ],
            "specifications" => [
                "structure" => "RCC frame structure",
                "flooring" => "Standard vitrified tiles",
                "kitchen" => "Granite platform with SS sink",
                "toilets" => "Standard sanitary fittings",
                "utility" => null,
                "electrical" => "Concealed wiring with modular switches",
                "doors_windows" => "Flush doors, aluminum windows",
                "internal_paint" => "Putty with emulsion paint"
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
                "name" => "Nikol, Ahmedabad",
                "growth" => "Medium",
                "growthPeriod" => "3-5 years",
                "avgRate" => null
            ],
            "investmentNote" => "Yashvi Parivar offers affordable 1 & 2 BHK homes in Nikol, Ahmedabad with RCC structure, community hall, play area, and basic lifestyle amenities.",
            "buyProperties" => [
                [
                    "img" => null,
                    "title" => "1 & 2 BHK Homes",
                    "size" => null,
                    "price" => null,
                    "date" => null,
                    "url" => null,
                    "agency" => [
                        "name" => "Yashvi Group",
                        "location" => "Ahmedabad",
                        "url" => null
                    ]
                ]
            ],
            "featured" => false,
            "emerging_property" => false,
            "emerging_area" => false
        ]);
    }
}





 