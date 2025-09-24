<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder6 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $pathPrefix = 'storage/assets/';
Project::create([
    "project" => [
        "name" => "17 Divya Heights",
        "slug" => "/17-divya-heights",
        "reel" => null,
        "brochure" => "17 Divya Heights Brochure_R1.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Divya%20Heights.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "17 Divya Heights is a residential project located in Gandhinagar."
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
    "investmentNote" => "17 Divya Heights is a residential project in Gandhinagar offering lifestyle amenities.",
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
        "name" => "Anand Villa",
        "slug" => "/anand-villa",
        "reel" => null,
        "brochure" => "ANAND VILLA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/ANAND%20VILLA.png",
        "type" => "Residential Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "FP No. 65, 66, Near Karma Villa, Panchvati Area, Kalol (N.G.)",
            "city" => "Kalol",
            "area" => "Panchvati Area",
            "map_description" => "Anand Villa by Shiv Developers is located near Karma Villa, Panchvati Area, Kalol offering luxurious villas with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Shiv Developers",
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
        "flooring" => "Vitrified tiles flooring in all rooms",
        "kitchen" => "Granite platform with SS sink, dado tiles up to lintel level",
        "toilets" => "Branded sanitary fittings, designer tiles, premium CP fittings",
        "utility" => "Gas line with meter, provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Attractive street lighting",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, Elegant entrance gate"
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
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-out",
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
        "designer_lighting" => "Street lighting",
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
    "investmentNote" => "Anand Villa by Shiv Developers offers luxurious 4 BHK villas in Kalol with RCC frame structure, vitrified flooring, granite kitchens, solar power, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shiv Developers",
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
        "name" => "Atulyam",
        "slug" => "/atulyam",
        "reel" => null,
        "brochure" => "ATULYAM.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/ATULYAM.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Atulyam is a premium residential project located in Gandhinagar."
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
    "investmentNote" => "Atulyam is a residential project in Gandhinagar offering lifestyle amenities.",
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
        "name" => "The Bougainvillea",
        "slug" => "/the-bougainvillea",
        "reel" => null,
        "brochure" => "Bougain-08.pdf",
        "logo_image_id" => null,
        "type" => "Residential 4 BHK Duplex Vertical Villas",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Shree Rang Aroma, Gift City Road, Randesan, Gandhinagar – 382007",
            "city" => "Gandhinagar",
            "area" => "Randesan",
            "map_description" => "The Bougainvillea by Kaavyaratna Gift LLP offers palatial 4 BHK duplex vertical villas with modern amenities near Gift City Road, Randesan, Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Kaavyaratna Gift LLP",
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
        "structure" => "Earthquake resistant RCC frame structure with AAC block walls",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink, dado tiles up to lintel level",
        "toilets" => "Jaquar/Hindware sanitary fittings, designer tiles",
        "utility" => "Gas line with meter, provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches (Schneider/Anchor/Havells)",
        "doors_windows" => "Pinewood flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint with waterproofing"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Elegant and attractive street lighting",
        "number_of_lifts" => "Double automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, DG backup, secured entrance gate"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Dedicated villa parking",
        "basement_ground" => "No"
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
        "solar_pv" => true,
        "modular_kitchen" => null,
        "designer_lighting" => "Designer lighting and terrace garden",
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
    "investmentNote" => "The Bougainvillea by Kaavyaratna Gift LLP offers luxurious 4 BHK vertical duplex villas in Randesan, Gandhinagar with RCC structure, premium specifications, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Vertical Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kaavyaratna Gift LLP",
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
        "name" => "Shree Ratna",
        "slug" => "/shree-ratna",
        "reel" => null,
        "brochure" => "BROCHURE - SHREE RATNA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHREE%20RATNA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shree Ratna is a residential project located in Gandhinagar."
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
    "investmentNote" => "Shree Ratna is a residential project in Gandhinagar offering lifestyle amenities.",
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
        "name" => "Altezza",
        "slug" => "/altezza",
        "reel" => null,
        "brochure" => "brochure for ALTEZZA_inq.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/ALTEZZA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Altezza by Altezza Infra LLP offers premium residences in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Altezza Infra LLP",
        "logo_image_id" => null,
        "corporate_address" => "Gandhinagar",
        "contact" => [
            "website" => null,
            "sales_email" => "Altezza@thepalm.in",
            "phone" => "+91 74340 06001"
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
    "investmentNote" => "Altezza by Altezza Infra LLP offers premium residences in Gandhinagar with lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Altezza Infra LLP",
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
        "name" => "Florenza",
        "slug" => "/florenza",
        "reel" => null,
        "brochure" => "Brochure_Florenza_inq.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Florenza.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Florenza offers premium lifestyle residences."
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
    "investmentNote" => "Florenza offers lifestyle residences in Gandhinagar.",
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
        "name" => "Coral Paradise",
        "slug" => "/coral-paradise",
        "reel" => null,
        "brochure" => "CORAL PARADISE_V4.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/PARADISE_V4.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Coral Paradise offers premium lifestyle homes."
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
    "investmentNote" => "Coral Paradise brings lifestyle residences in Gandhinagar.",
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
        "name" => "Devanshi Prime",
        "slug" => "/devanshi-prime",
        "reel" => null,
        "brochure" => "Devanshi Prime.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Devanshi%20Prime.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Devanshi Prime offers elegant modern residences."
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
    "investmentNote" => "Devanshi Prime delivers modern residences in Gandhinagar.",
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
        "name" => "Devasya Gold",
        "slug" => "/devasya-gold",
        "reel" => null,
        "brochure" => "DEVASYA GOLD.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/DEVASYA%20GOLD.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Devasya Gold offers lifestyle residences."
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
    "investmentNote" => "Devasya Gold brings premium residences in Gandhinagar.",
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
        "name" => "Forrestte Phase 5",
        "slug" => "/forrestte-phase-5",
        "reel" => null,
        "brochure" => "Forrestte phase 5 - Final_INQ.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Forrestte.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Rancharda - Khatraj Road, Jethlaj, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Forrestte Phase 5 by Arvind SmartSpaces offers villas amidst nature with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Arvind SmartSpaces",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
        "contact" => [
            "website" => "www.arvindsmartspaces.com",
            "sales_email" => "sales.forreste@arvind.in",
            "phone" => "079 68264020"
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
        "structure" => "RCC structure",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
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
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Forrestte Phase 5 is a premium villa project by Arvind SmartSpaces in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Arvind SmartSpaces",
                "location" => "Ahmedabad",
                "url" => "www.arvindforreste.com"
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Keshvam Skycity",
        "slug" => "/keshvam-skycity",
        "reel" => null,
        "brochure" => "KESHVAM SKYCITY.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/KESHVAM%20SKYCITY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Keshvam Skycity offers premium lifestyle residences."
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
    "investmentNote" => "Keshvam Skycity offers premium residences in Gandhinagar.",
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
        "name" => "Luminous",
        "slug" => "/luminous",
        "reel" => null,
        "brochure" => "LUMINOUNS RERA BROCHURE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/LUMINOUNS.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Luminous project offers modern lifestyle residences in Gandhinagar."
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
    "investmentNote" => "Luminous project offers premium lifestyle residences in Gandhinagar.",
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
        "name" => "Madhav Home",
        "slug" => "/madhav-home",
        "reel" => null,
        "brochure" => "Madhav Home RERA Brochure 15-8-22.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Madhav%20Home.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => "Zundal",
            "map_description" => "Madhav Home is located near Vaishnodevi Circle, Zundal, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => null,
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
                    "bedroom_1" => ["size" => "10x10", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "12x11", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => null, "wardrobe_niche" => null],
                    "living_room" => ["size" => "16'6 x 11'0"],
                    "dining_area" => ["size" => "8'6 x 8'9"],
                    "kitchen" => ["size" => "8'6 x 8'9"],
                    "balcony" => ["size" => "4'6 x 4'9"],
                    "bath" => ["size" => "7'0 x 4'0"],
                    "wc" => ["size" => "4'6 x 6'6"]
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
        "structure" => "RCC",
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
        "kids_area" => true,
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Madhav Home offers affordable residences in Zundal, Ahmedabad with good connectivity.",
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
        "name" => "Madhuvan by Shreenilay",
        "slug" => "/madhuvan-by-shreenilay",
        "reel" => null,
        "brochure" => "MADHUVAN BY SHREENILAY.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/MADHUVAN%20BY%20SHREENILAY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Madhuvan by Shreenilay offers premium lifestyle homes in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Shreenilay",
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
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Madhuvan by Shreenilay offers premium lifestyle residences in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shreenilay",
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
        "name" => "MG Dreams",
        "slug" => "/mg-dreams",
        "reel" => null,
        "brochure" => "MG DREAMS.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/MG%20DREAMS.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Ahmedabad",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "MG Dreams offers affordable and comfortable homes in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "MG Group",
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
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "MG Dreams provides affordable living with modern amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "MG Group",
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
        "name" => "Neelkanth Villa-2",
        "slug" => "/neelkanth-villa-2",
        "reel" => null,
        "brochure" => "Neelkanth Villa-2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Neelkanth%20Villa-2.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Neelkanth Villa-2, Opp Kum-Kum Residency, Nr. Gathiya Rath, Chandkheda-Tragad Road, Ahmedabad - 382424",
            "city" => "Ahmedabad",
            "area" => "Chandkheda-Tragad Road",
            "map_description" => "Neelkanth Villa-2 offers premium bungalows at Chandkheda-Tragad Road, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Mena Construction",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
        "contact" => [
            "website" => null,
            "sales_email" => "mark_design@ymail.com",
            "phone" => "9426406626, 9879055704"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "Bungalows" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.20x3.35", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "5.03x3.18", "wardrobe_niche" => null],
                    "living_room" => ["size" => "5.03x3.30"],
                    "dining_area" => ["size" => "3.06x2.44"],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => "3.20x6.36"],
                    "bath" => ["size" => "1.52x1.30"],
                    "wc" => ["size" => "2.44x1.30"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "227.72 sq.m.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC",
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Neelkanth Villa-2 brings premium bungalow living at Chandkheda-Tragad Road, Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Luxury Bungalows",
            "size" => "227.72 sq.m.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Mena Construction",
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
        "name" => "Neelkanth Villa-3",
        "slug" => "/neelkanth-villa-3",
        "reel" => null,
        "brochure" => "Neelkanth Villa-3.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Neelkanth%20Villa-3.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => "Chandkheda",
            "map_description" => "Neelkanth Villa-3 offers premium bungalows in Chandkheda, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Mena Construction",
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
        "structure" => "RCC",
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Neelkanth Villa-3 offers luxury bungalow living in Chandkheda, Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Luxury Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Mena Construction",
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
        "name" => "Parishram Florenza",
        "slug" => "/parishram-florenza",
        "reel" => null,
        "brochure" => "PARISHRAM FLORENZA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/PARISHRAM%20FLORENZA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Parishram Florenza offers lifestyle residences in Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Parishram Group",
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
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Parishram Florenza offers premium 3BHK lifestyle residences in Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Parishram Group",
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
        "name" => "R.R. Residency",
        "slug" => "/rr-residency",
        "reel" => null,
        "brochure" => "R.R. Residency.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/R.R.%20Residency.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "R.R. Residency offers affordable lifestyle residences in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "R.R. Group",
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
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC",
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
        "kids_area" => true,
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "R.R. Residency offers affordable 2BHK residences with lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "R.R. Group",
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
        "name" => "Raghav Residency",
        "slug" => "/raghav-residency",
        "reel" => null,
        "brochure" => "RAGHAV RESIDENCY BROCHURE - RERA_compressed.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/RAGHAV%20RESIDENCY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Raghav Residency offers modern lifestyle residences in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Raghav Group",
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
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Raghav Residency offers 2BHK lifestyle residences with amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Raghav Group",
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
        "name" => "Stuti",
        "slug" => "/stuti",
        "reel" => null,
        "brochure" => "RERA Brochure_Stuti_INQ.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Stuti.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Stuti residential project offers lifestyle living in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Stuti Group",
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
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Stuti offers lifestyle residences with modern amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Stuti Group",
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
        "name" => "Saamarth H7",
        "slug" => "/saamarth-h7",
        "reel" => null,
        "brochure" => "SAAMARTH H7.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SAAMARTH%20H7.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Saamarth H7 residential project offers premium homes in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Saamarth Group",
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
        "structure" => "RCC",
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Saamarth H7 offers premium 3BHK residences with lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Saamarth Group",
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
        "name" => "Sakar Grace Phase 2",
        "slug" => "/sakar-grace-phase-2",
        "reel" => null,
        "brochure" => "SAKAR GRACE PHASE 2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SAKAR%20GRACE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Akshardham Bungalows, Opp. Gayatri Mandir, Gandhinagar-Mansa Highway, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Mansa",
            "map_description" => "Sakar Grace Phase 2 offers premium 3BHK bungalows at Gandhinagar-Mansa Highway."
        ]
    ],
    "builder" => [
        "name" => "Sahajanand Infracon",
        "logo_image_id" => null,
        "corporate_address" => "Mansa",
        "contact" => [
            "website" => null,
            "sales_email" => "sahajanandinfracon.m@gmail.com",
            "phone" => "9727088811, 9727088822"
        ]
    ],
    "configuration" => [
        "Homes" => [
            "3BHK_Bungalows" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "11x14.8", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "11.6x13.0", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "11.6x10.0", "wardrobe_niche" => null],
                    "living_room" => ["size" => "11x24.9"],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => "9.3x8.6"],
                    "balcony" => ["size" => "12.1x6.4"],
                    "bath" => ["size" => "9.6x5.11"],
                    "wc" => ["size" => "4.0x3.6"]
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
        "structure" => "Load bearing structure",
        "flooring" => "Vitrified tiles in drawing, dining, kitchen & bedrooms",
        "kitchen" => "Granite platform with SS sink, glazed tiles dado up to lintel level",
        "toilets" => "Glazed tile dado up to lintel, ISI concealed fittings, geyser point",
        "utility" => "Common bore well & Nagar Palika water connection",
        "electrical" => "3 phase concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows with grills",
        "internal_paint" => "Mala plaster with putty finish",
        "external_paint" => "Double coat sand face or texture finish"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => true,
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, security cabin"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => true,
        "kids_area" => true,
        "senior_sitouts" => true,
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => null,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => true,
        "designer_lighting" => null,
        "security_monitoring" => true
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
        "name" => "Mansa, Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sakar Grace Phase 2 brings premium 3BHK bungalows with club house, gym, theater and landscaped gardens.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sahajanand Infracon",
                "location" => "Mansa",
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
        "name" => "Saket Heaven",
        "slug" => "/saket-heaven",
        "reel" => null,
        "brochure" => "Saket Heaven.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Saket%20Heaven.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Saket Heaven, Nana Chiloda, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Nana Chiloda",
            "map_description" => "Saket Heaven offers lifestyle residences in Nana Chiloda, Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Saket Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
        "contact" => [
            "website" => "https://gujrera.gujarat.gov.in/",
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
        "structure" => "RCC",
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
        "clubhouse" => true,
        "floating_fitness" => null,
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => null,
        "kids_area" => true,
        "senior_sitouts" => true,
        "community_living" => true,
        "24_7_security" => true,
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
    "investmentNote" => "Saket Heaven offers lifestyle residences with amenities in Nana Chiloda, Gandhinagar.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Homes",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Saket Buildcon",
                "location" => "Ahmedabad",
                "url" => "https://gujrera.gujarat.gov.in/"
            ]
        ]
    ],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "The Crown",
        "slug" => "/the-crown",
        "reel" => "the-crown",
        "brochure" => "THE CROWN-FINAL BROCHURE_INQ.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/THE%20CROWN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => "Bhat",
            "map_description" => "The Crown at Bhat offers modern residential apartments with lifestyle amenities."
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
            "floorplan_image_id" => null,
            "price" => null
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame",
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
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with facilities",
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
    "investmentNote" => "The Crown project offers premium apartments in Bhat with RCC structure and lifestyle amenities.",
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
Project::create([
    "project" => [
        "name" => "Tulsi Sky",
        "slug" => "/tulsi-sky",
        "reel" => "tulsi-sky",
        "brochure" => "TULSI SKY-BROCHURE_INQ2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/TULSI%20SKY.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Tulsi Sky offers high-rise residential apartments with modern planning."
        ]
    ],
    "builder" => [
        "name" => "Tulsi Group",
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
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Tulsi Sky is a high-rise residential project in Ahmedabad with modern planning and amenities.",
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
Project::create([
    "project" => [
        "name" => "Vatrika Villa",
        "slug" => "/vatrika-villa",
        "reel" => "vatrika-villa",
        "brochure" => "VATRIKA VILLA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/VATRIKA%20VILLA.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vatrika Villa offers premium luxury villas with spacious layouts."
        ]
    ],
    "builder" => [
        "name" => "Vatrika Developers",
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
        "slot_info" => "Private villa parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse",
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
    "investmentNote" => "Vatrika Villa offers luxurious villas with lifestyle amenities and privacy.",
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
    "emerging_property" => true,
    "emerging_area" => true
]);
Project::create([
    "project" => [
        "name" => "Vision Ventus",
        "slug" => "/vision-ventus",
        "reel" => "vision-ventus",
        "brochure" => "Vision Ventus Rera Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Vision%20Ventus%20Rera%20Brochure.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vision Ventus is a modern residential project offering premium homes with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Vision Group",
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
        "structure" => "Earthquake resistant RCC frame",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with facilities",
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
    "investmentNote" => "Vision Ventus offers premium residential living with RCC structure and lifestyle amenities.",
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
Project::create([
    "project" => [
        "name" => "Shree Rang Solitaire",
        "slug" => "/shree-rang-solitaire",
        "reel" => "shree-rang-solitaire",
        "brochure" => "Shree Rang Solitaire_07052022_INQ.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Shree%20Rang%20Solitaire.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shree Rang Solitaire offers modern residential apartments with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shree Rang Group",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shree Rang Solitaire offers modern apartments with lifestyle amenities.",
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
        "name" => "Shreedhar Shrine",
        "slug" => "/shreedhar-shrine",
        "reel" => "shreedhar-shrine",
        "brochure" => "SHREEDHAR SHRINE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHREEDHAR%20SHRINE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shreedhar Shrine offers premium lifestyle residences with quality construction."
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shreedhar Shrine offers premium lifestyle residences with quality construction in Gandhinagar.",
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
        "name" => "Sparsh Skyline",
        "slug" => "/sparsh-skyline",
        "reel" => "sparsh-skyline",
        "brochure" => "SPARSH SKYLINE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SPARSH%20SKYLINE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Sparsh Skyline offers high-rise premium apartments with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Sparsh Group",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sparsh Skyline offers premium high-rise living with lifestyle amenities in Gandhinagar.",
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
        "name" => "Suraj 24",
        "slug" => "/suraj-24",
        "reel" => "suraj-24",
        "brochure" => "SURAJ 24.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SURAJ%2024.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Suraj 24 offers modern residences with quality planning and multiple lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Suraj Developers",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Suraj 24 offers premium residences with RCC structure and lifestyle amenities.",
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
        "name" => "Sharnam Platinum",
        "slug" => "/sharnam-platinum",
        "reel" => "sharnam-platinum",
        "brochure" => "SHARNAM PLATINUM.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHARNAM%20PLATINUM.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Sharnam Platinum offers premium residential apartments with modern specifications and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Sharnam Group",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sharnam Platinum offers premium 3BHK residences with modern specifications and lifestyle amenities.",
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
        "name" => "Shikhar 126",
        "slug" => "/shikhar-126",
        "reel" => "shikhar-126",
        "brochure" => "SHIKHAR 126.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHIKHAR%20126.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shikhar 126 offers thoughtfully designed residences with lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shikhar Group",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shikhar 126 provides premium residences with lifestyle amenities in Gandhinagar.",
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
        "name" => "Shilp Bungalows",
        "slug" => "/shilp-bungalows",
        "reel" => "shilp-bungalows",
        "brochure" => "Shilp Brochure  revised_TEAM-3.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Shilp.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shilp Bungalows offers premium lifestyle villas with modern architecture and spacious planning."
        ]
    ],
    "builder" => [
        "name" => "Shilp Group",
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
        "flooring" => "Premium tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
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
        "slot_info" => "Private villa parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shilp Bungalows offers luxurious villas with spacious planning and lifestyle amenities.",
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
        "name" => "Shivalay White House",
        "slug" => "/shivalay-white-house",
        "reel" => "shivalay-white-house",
        "brochure" => "SHIVALAY WHITE HOUSE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SHIVALAY%20WHITE%20HOUSE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Shivalay White House offers premium apartments with modern architecture and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shivalay Group",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shivalay White House offers premium 3BHK residences with modern amenities and specifications in Gandhinagar.",
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
        "name" => "Saral Paradise & Sky Luxuria",
        "slug" => "/saral-paradise-sky-luxuria",
        "reel" => "saral-paradise-sky-luxuria",
        "brochure" => "Saral Paradise and Sky Luxuria.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Saral%20Paradise%20and%20Sky%20Luxuria.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Saral Paradise & Sky Luxuria offers premium apartments with modern specifications and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Saral Group",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Saral Paradise & Sky Luxuria offers premium 3BHK residences with lifestyle amenities in Gandhinagar.",
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
        "name" => "Sarthak Villa",
        "slug" => "/sarthak-villa",
        "reel" => "sarthak-villa",
        "brochure" => "Sarthak Villa.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/Sarthak%20Villa.png",
        "type" => "Villa Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Gandhinagar",
            "area" => null,
            "map_description" => "Sarthak Villa offers premium lifestyle villas with spacious planning and modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Sarthak Group",
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
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
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
        "slot_info" => "Private villa parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse",
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
        "name" => "Gandhinagar",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sarthak Villa offers luxurious 4BHK villas with modern specifications and lifestyle amenities.",
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
        "name" => "Sector 6B Phase-1",
        "slug" => "/sector-6b-phase-1",
        "reel" => "sector-6b-phase-1",
        "brochure" => "SECTOR 6B PHASE-1.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Gandhinagar/SECTOR%206B%20PHASE%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Adalaj, Gandhinagar",
            "city" => "Gandhinagar",
            "area" => "Adalaj",
            "map_description" => "Sector 6B Phase-1 by Vitrag Enterprise LLP offers residential apartments in Adalaj, Gandhinagar."
        ]
    ],
    "builder" => [
        "name" => "Vitrag Enterprise LLP",
        "logo_image_id" => null,
        "corporate_address" => "Adalaj, Gandhinagar",
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
        "toilets" => "Standard sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Wooden flush doors, aluminum windows",
        "internal_paint" => "Acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "2 level basement"
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with community facilities",
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
        "name" => "Gandhinagar",
        "growth" => "Medium",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sector 6B Phase-1 by Vitrag Enterprise LLP offers 2BHK & 3BHK residences with modern specifications in Adalaj, Gandhinagar.",
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


    }
}
