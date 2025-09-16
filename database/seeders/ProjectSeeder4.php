<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pathPrefix = 'storage/assets/';

        Project::create([
    "project" => [
        "name" => "Rewa",
        "slug" => "/rewa",
        "reel" => null,
        "brochure" => "17_REWA_BROCHURE_R1 Final.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/REWA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Rewa offers premium residential flats with modern planning and multiple amenities."
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
                    "bedroom_1" => ["size" => "3.66m x 5.18m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "4.27m x 3.96m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.47m x 3.35m", "wardrobe_niche" => null],
                    "bath" => ["size" => "1.84m x 3.05m"],
                    "wc" => ["size" => "1.58m x 2.44m"],
                    "living_room" => ["size" => "6.06m x 3.56m"],
                    "dining_area" => ["size" => "7.69m x 4.52m"],
                    "kitchen" => ["size" => "7.69m x 4.52m"],
                    "balcony" => ["size" => "1.68m x 4.93m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "181 – 186 sq. mts.",
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
        "basement_ground" => "2 level basement parking"
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
        "name" => "Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Rewa project offers spacious 3BHK flats with RCC structure, modern specifications and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "181–186 sq. mts.",
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
        "name" => "Aradhan 7 Stores",
        "slug" => "/aradhan-7-stores",
        "reel" => null,
        "brochure" => "21 Brochure aradhan 7 stroes rera.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/aradhan%207%20stroes.png",
        "type" => "Commercial / Residential",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Aradhan 7 Stores is a RERA approved mixed-use project with 7 floors."
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
        "Homes" => [],
        "floorplan_image_id" => null,
        "price" => null
    ],
    "specifications" => [],
    "building" => [],
    "parking" => [],
    "amenities" => [],
    "modern_features" => [],
    "lifestyle" => [],
    "graphics" => [],
    "localityData" => [
        "name" => "Ahmedabad",
        "growth" => "Developing",
        "growthPeriod" => "5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aradhan 7 Stores is a RERA approved project offering mixed commercial and residential units.",
    "buyProperties" => [],
    "featured" => false,
    "emerging_property" => false,
    "emerging_area" => true
]);
    Project::create([
    "project" => [
        "name" => "Apricus 2",
        "slug" => "/apricus-2",
        "reel" => null,
        "brochure" => "17 APRICUS 2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/APRICUS%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Apricus 2 is a RERA registered residential project in Ahmedabad with lifestyle amenities."
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
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga space",
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
        "growth" => "Developing",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Apricus 2 offers 2 & 3 BHK lifestyle residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens and lifestyle amenities.",
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
        "name" => "Anamaya",
        "slug" => "/anamaya",
        "reel" => null,
        "brochure" => "17 R1_Anamaya Presentation Minimal.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Anamaya%20Presentation%20Minimal.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => "Daskroi",
            "map_description" => "Anamaya by Anamaya Infrabuild is a RERA registered residential project offering lifestyle amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Anamaya Infrabuild",
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
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Standard flush doors, aluminum windows",
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
        "health_hub" => "Yoga space",
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
        "name" => "Daskroi, Ahmedabad",
        "growth" => "Developing",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Anamaya by Anamaya Infrabuild is a RERA registered project offering premium 3 & 4 BHK residences in Ahmedabad with RCC structure and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Anamaya Infrabuild",
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
        "name" => "Satkar Green",
        "slug" => "/satkar-green",
        "reel" => null,
        "brochure" => "17 satkar green rera brochure new.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/satkar%20green.png" ,
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Satkar Green offers premium lifestyle apartments with modern planning and amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Satkar Group",
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
        "flooring" => "Vitrified tiles",
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
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga space, jogging track",
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
        "growth" => "Developing",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Satkar Green offers premium 2 & 3 BHK lifestyle apartments in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and modern lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => "1200 - 1600 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Satkar Group",
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
        "name" => "Sumukh",
        "slug" => "/sumukh",
        "reel" => null,
        "brochure" => "17 SUMUKH_RERA BROCHURE (1).pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SUMUKH.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Usmanpura, Ahmedabad",
            "city" => "Ahmedabad",
            "area" => "Usmanpura",
            "map_description" => "Sumukh offers premium 2 BHK lifestyle residences in Usmanpura, Ahmedabad with modern planning and amenities."
        ]
    ],
    "builder" => [
        "name" => "Achal Parikh",
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
                "size" => "Approx. 1100-1200 sq.ft.",
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
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Standard flush doors, aluminum windows",
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
        "health_hub" => "Yoga & meditation space",
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
        "modular_kitchen" => "Provision for modular kitchen",
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
        "name" => "Usmanpura, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Sumukh by Achal Parikh offers premium 2 BHK residences in Usmanpura, Ahmedabad with RCC structure, vitrified flooring, branded fittings, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => "1100-1200 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Achal Parikh",
                "location" => "Usmanpura, Ahmedabad",
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
        "name" => "Satvam Brahmand",
        "slug" => "/satvam-brahmand",
        "reel" => null,
        "brochure" => "17_FINAL_Brouchers_Satvam Brahmand.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Satvam%20Brahmand.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Satvam Antrix, Madhav Farm Road, Opp. Kalhar Bungalows, Vastral Singarva Road, Vastral",
            "city" => "Ahmedabad",
            "area" => "Vastral",
            "map_description" => "Satvam Brahmand by Satvam Infra offers premium lifestyle apartments in Vastral, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Satvam Infra",
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
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga & meditation zone",
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
        "modular_kitchen" => "Provision for modular kitchen",
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
        "name" => "Vastral, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Satvam Brahmand by Satvam Infra offers premium 2 & 3 BHK residences in Vastral, Ahmedabad with RCC structure, vitrified flooring, branded fittings, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Satvam Infra",
                "location" => "Vastral, Ahmedabad",
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
        "name" => "Bavla TP_1 FP_147 Affordable Housing",
        "slug" => "/bavla-tp1-fp147",
        "reel" => null,
        "brochure" => "34_Project Brochure TP_1 FP_147.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/1%20FP_147.png",
        "type" => "Affordable Housing Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Bavla Nagar Palika, Bavla-382220",
            "city" => "Ahmedabad",
            "area" => "Bavla",
            "map_description" => "252 DUs Affordable Housing project under PMAY scheme by Bavla Nagarpalika."
        ]
    ],
    "builder" => [
        "name" => "Bavla Nagarpalika",
        "logo_image_id" => null,
        "corporate_address" => "Bavla, Ahmedabad, Gujarat",
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
                "price" => "Affordable under PMAY",
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => "Affordable Housing"
        ],
    ],
    "specifications" => [
        "structure" => "RCC frame structure",
        "flooring" => "Standard vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Standard sanitary fittings",
        "utility" => null,
        "electrical" => "Basic concealed wiring",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Simple emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Basic lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "Basic security provisions"
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
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen seating",
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
        "name" => "Bavla, Ahmedabad",
        "growth" => "Developing",
        "growthPeriod" => "5 years",
        "avgRate" => null
    ],
    "investmentNote" => "252 DUs Affordable Housing under PMAY scheme by Bavla Nagarpalika offers affordable homes with basic amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => null,
            "price" => "Affordable under PMAY",
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Bavla Nagarpalika",
                "location" => "Bavla, Ahmedabad",
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
        "name" => "Bavla TP_3 FP_78 Affordable Housing",
        "slug" => "/bavla-tp3-fp78",
        "reel" => null,
        "brochure" => "34_Project Brochure TP_3 FP_78.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/FP_78.png",
        "type" => "Affordable Housing Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Bavla Nagar Palika, Bavla-382220",
            "city" => "Ahmedabad",
            "area" => "Bavla",
            "map_description" => "60 DUs Affordable Housing project under PMAY scheme by Bavla Nagarpalika."
        ]
    ],
    "builder" => [
        "name" => "Bavla Nagarpalika",
        "logo_image_id" => null,
        "corporate_address" => "Bavla, Ahmedabad, Gujarat",
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
                "price" => "Affordable under PMAY",
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => "Affordable Housing"
        ],
    ],
    "specifications" => [
        "structure" => "RCC frame structure",
        "flooring" => "Standard vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Standard sanitary fittings",
        "utility" => null,
        "electrical" => "Basic concealed wiring",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Simple emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Basic lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "Basic security provisions"
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
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen seating",
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
        "name" => "Bavla, Ahmedabad",
        "growth" => "Developing",
        "growthPeriod" => "5 years",
        "avgRate" => null
    ],
    "investmentNote" => "60 DUs Affordable Housing under PMAY scheme by Bavla Nagarpalika offers affordable homes with basic amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => null,
            "price" => "Affordable under PMAY",
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Bavla Nagarpalika",
                "location" => "Bavla, Ahmedabad",
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
        "name" => "Ravi Royal Bungalows",
        "slug" => "/ravi-royal-bungalows",
        "reel" => null,
        "brochure" => "Brocher Ravi Royal Bunglows Final 2.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Ravi%20Royal%20Bunglows.png",
        "type" => "Luxurious 2 BHK Bungalows",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Nikol, Ahmedabad (as per brochure details)",
            "city" => "Ahmedabad",
            "area" => "Nikol",
            "map_description" => "Ravi Royal Bungalows by Ravi Infra offers luxurious 2 BHK bungalows in Nikol, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Ravi Infra",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "9909917002"
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
            "floorplan_image_id" => null,
            "price" => null
        ],
    ],
    "specifications" => [
        "structure" => "RCC Frame Structure, earthquake resistant",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
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
        "slot_info" => "Ground & private parking for bungalows",
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
        "name" => "Nikol, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ravi Royal Bungalows by Ravi Infra offers luxurious 2 BHK residences in Nikol, Ahmedabad with RCC structure, vitrified flooring, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Bungalows",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Ravi Infra",
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
        "name" => "Ratna Mohan",
        "slug" => "/ratna-mohan",
        "reel" => null,
        "brochure" => "2024.02.07_RATNA MOHAN_FOR RERA_REVISED.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/RATNA%20MOHAN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Plot 432 part B, Keshavnagar Co-op Hou Soc Ltd., Subhasbridge",
            "city" => "Ahmedabad",
            "area" => "Subhasbridge",
            "map_description" => "Ratna Mohan by Sairudram Devcon offers premium lifestyle apartments in Subhasbridge, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Sairudram Devcon",
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
                    "bedroom_1" => ["size" => "3.05m x 3.85m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.20m x 3.23m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.19m x 3.11m", "wardrobe_niche" => null],
                    "bath" => ["size" => "2.06m x 1.45m"],
                    "wc" => ["size" => "2.06m x 1.68m"],
                    "living_room" => ["size" => "4.12m x 3.11m"],
                    "dining_area" => ["size" => "2.34m x 5.22m"],
                    "kitchen" => ["size" => "2.34m x 5.22m"],
                    "balcony" => ["size" => "2.95m x 1.12m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "57.12 – 80.27 sq.mt (carpet area)",
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
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings (Jaquar or equivalent)",
        "utility" => "Gas pipeline provision, waterproofing",
        "electrical" => "Concealed 3-phase copper wiring, modular switches, AC points",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety, solar rooftop provision"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga space",
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
        "modular_kitchen" => "Provision for modular kitchen",
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
        "name" => "Subhasbridge, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ratna Mohan by Sairudram Devcon offers spacious 3BHK flats with RCC structure, vitrified flooring, granite kitchens, branded sanitary fittings and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "57.12 – 80.27 sq.mt carpet area",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Sairudram Devcon",
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
        "name" => "Aditi Pearl",
        "slug" => "/aditi-pearl",
        "reel" => null,
        "brochure" => "Aditi Pearl.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Aditi%20Pearl.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Adj. F.P. No. 301, near 12 m wide TPS Road",
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Aditi Pearl offers premium 2 & 3 BHK residences with modern specifications in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => null,
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
                    "bedroom_1" => ["size" => "3.05m x 3.05m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.80m x 3.05m", "wardrobe_niche" => null],
                    "bath" => ["size" => "2.13m x 1.20m"],
                    "wc" => ["size" => "1.50m x 1.98m"],
                    "living_room" => ["size" => "5.31m x 2.81m"],
                    "dining_area" => ["size" => "3.05m x 2.17m"],
                    "kitchen" => ["size" => "2.86m x 2.66m"],
                    "balcony" => ["size" => "1.09m x 2.67m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "83.68 sq.mt carpet area",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.50m x 3.24m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.80m x 3.05m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "3.05m x 3.05m", "wardrobe_niche" => null],
                    "bath" => ["size" => "2.13m x 1.20m"],
                    "wc" => ["size" => "1.20m x 1.80m"],
                    "living_room" => ["size" => "5.31m x 2.81m"],
                    "dining_area" => ["size" => "3.05m x 2.17m"],
                    "kitchen" => ["size" => "2.86m x 2.66m"],
                    "balcony" => ["size" => "1.56m x 1.20m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "84.07 sq.mt carpet area",
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
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Standard branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
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
        "slot_info" => "Ground parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga & meditation space",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Aditi Pearl offers premium 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, branded fittings, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => "83 – 84 sq.mt carpet area",
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
        "name" => "Akshar Paradise",
        "slug" => "/akshar-paradise",
        "reel" => null,
        "brochure" => "AKSHAR PARADISE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AKSHAR%20PARADISE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Akshar Paradise is a residential project in Ahmedabad offering modern lifestyle apartments."
        ]
    ],
    "builder" => [
        "name" => "Akshar Group",
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
        "structure" => "RCC frame structure",
        "flooring" => "Standard vitrified tiles",
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
    "investmentNote" => "Akshar Paradise offers residential 2 & 3 BHK flats in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Akshar Group",
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
        "name" => "356 Shailja Apartment",
        "slug" => "/356-shailja-apartment",
        "reel" => null,
        "brochure" => "356 Shailja Brochure (1).pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shailja.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Vrundavan Jogger’s Park, Kiran Park, New Vadaj",
            "city" => "Ahmedabad",
            "area" => "New Vadaj",
            "map_description" => "356 Shailja Apartment offers 3 BHK luxurious apartments in New Vadaj, Ahmedabad with modern specifications and lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Shailja Infra",
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
            "3BHK_Type_A" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.58m x 2.78m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.70m x 2.93m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.00m x 2.93m", "wardrobe_niche" => null],
                    "bath" => ["size" => "2.13m x 1.22m"],
                    "wc" => ["size" => "1.45m x 1.91m"],
                    "living_room" => ["size" => "5.18m x 3.16m"],
                    "dining_area" => ["size" => "3.23m x 3.39m"],
                    "kitchen" => ["size" => "3.73m x 2.48m"],
                    "balcony" => ["size" => "1.10m x 2.93m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK_Type_B" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "3.58m x 3.05m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "4.13m x 3.12m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.57m x 3.12m", "wardrobe_niche" => null],
                    "bath" => ["size" => "1.68m x 1.91m"],
                    "wc" => ["size" => "1.45m x 1.91m"],
                    "living_room" => ["size" => "5.90m x 3.16m"],
                    "dining_area" => ["size" => "3.00m x 3.81m"],
                    "kitchen" => ["size" => "3.27m x 2.90m"],
                    "balcony" => ["size" => "1.48m x 3.16m"]
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
        "toilets" => "Designer bathrooms with branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches, EV charging point",
        "doors_windows" => "Decorative main door, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Solar powered LED lights in common areas",
        "number_of_lifts" => "High speed automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => true,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Yoga & meditation zone",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen zone",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => true,
        "modular_kitchen" => "Provision for modular kitchen",
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
        "name" => "New Vadaj, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "356 Shailja Apartment offers premium 3BHK residences in New Vadaj, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, solar powered common lights, EV charging, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shailja Infra",
                "location" => "New Vadaj, Ahmedabad",
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
        "name" => "Al Hamd 42",
        "slug" => "/al-hamd-42",
        "reel" => null,
        "brochure" => "AL HAMD-42.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AL%20HAMD-42.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Gazala Party Plot, 100 ft Road, Opp. Amber Tower, Sarkhej Road, Juhapura",
            "city" => "Ahmedabad",
            "area" => "Juhapura",
            "map_description" => "Al Hamd 42 by Kausar Developers offers 2BHK lifestyle apartments in Juhapura, Ahmedabad with modern specifications."
        ]
    ],
    "builder" => [
        "name" => "Kausar Developers",
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
                "price" => "Affordable",
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => "Affordable Housing"
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified flooring",
        "kitchen" => "Granite platform with SS sink and service platform",
        "toilets" => "Designer bathroom tiles with branded sanitary fittings",
        "utility" => "Underground & overhead water tanks",
        "electrical" => "Concealed ISI copper wiring, modular switches, AC & TV points",
        "doors_windows" => "Decorative main door, flush doors with granite frame, aluminum windows",
        "internal_paint" => "Enamel putty on walls"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "2 high-speed automatic lifts",
        "direction_info" => null,
        "security" => "CCTV, fire safety system, anti-termite treatment, gated entry"
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
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen seating",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => "Provision for modular kitchen",
        "designer_lighting" => "Modern entry gate lighting",
        "security_monitoring" => "CCTV monitoring"
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
        "name" => "Juhapura, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Al Hamd 42 by Kausar Developers offers affordable 2BHK apartments in Juhapura, Ahmedabad with RCC structure, vitrified flooring, granite kitchen, and modern lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => null,
            "price" => "Affordable",
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kausar Developers",
                "location" => "Juhapura, Ahmedabad",
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
        "name" => "Al Hamd 49",
        "slug" => "/al-hamd-49",
        "reel" => null,
        "brochure" => "AL-HAMD 49.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AL-HAMD%2049.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Bagh-E-Fatima Apartment, Saiyed-E-Sakina Masjid Road, TP 85, Sarkhej",
            "city" => "Ahmedabad",
            "area" => "Sarkhej",
            "map_description" => "Al Hamd 49 by Al Hamd Developers offers 2 & 3 BHK apartments in Sarkhej, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Al Hamd Developers",
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
                "price" => "Affordable",
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
                "price" => "Affordable",
                "size" => null,
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => "Affordable Housing"
        ],
    ],
    "specifications" => [
        "structure" => "RCC earthquake-resistant structure",
        "flooring" => "Vitrified tiles flooring",
        "kitchen" => "Granite platform with SS sink, designer wall tiles, service platform",
        "toilets" => "Lintel height designer tiles, branded sanitary fittings",
        "utility" => "Underground and overhead water tanks with control valve",
        "electrical" => "Concealed ISI copper wiring, modular switches, MCB, AC & TV points",
        "doors_windows" => "Decorative main door, flush doors with granite frame, aluminum windows",
        "internal_paint" => "Putty with enamel finish"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Decorative lights in compound",
        "number_of_lifts" => "High-speed lifts",
        "direction_info" => null,
        "security" => "CCTV cameras, fire safety system, anti-termite treatment, pest control tube system, gated compound"
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
        "modular_kitchen" => "Provision for modular kitchen",
        "designer_lighting" => "Decorative compound lights",
        "security_monitoring" => "CCTV monitoring"
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
    "investmentNote" => "Al Hamd 49 by Al Hamd Developers offers affordable 2 & 3 BHK apartments in Sarkhej, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, CCTV and fire safety.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => "Affordable",
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Al Hamd Developers",
                "location" => "Sarkhej, Ahmedabad",
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
        "name" => "Anand Residency",
        "slug" => "/anand-residency",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Anand%20residency.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Hedgewar Bhavan, Baliyakaka Road, Kankaria",
            "city" => "Ahmedabad",
            "area" => "Kankaria",
            "map_description" => "Premium residential flats located at Baliyakaka Road, Kankaria with connectivity to city landmarks."
        ]
    ],
    "builder" => [
        "name" => "Daga Procon Pvt. Ltd.",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad",
        "contact" => [
            "website" => "www.thedagagroup.com",
            "sales_email" => "dppl@thedagagroup.co.in",
            "phone" => "+91 91735 51379 / +91 97261 69643"
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
        "structure" => "RCC Frame with ISI standards",
        "flooring" => "Vitrified Tiles (Asian/Cera/Kajaria or similar)",
        "kitchen" => "Granite platform with SS sink, vitrified dado till lintel, Adani gas line",
        "toilets" => "Cera basin & EWC, branded fittings",
        "utility" => "Kota stone wash area",
        "electrical" => "ISI standard concealed wiring",
        "doors_windows" => "Main laminated wooden, others flush doors with aluminium sliding windows",
        "internal_paint" => "Birla Putty finish",
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Solar system for common meter",
        "number_of_lifts" => "1 ISI standard lift (6-8 passengers)",
        "direction_info" => null,
        "security" => "Fire system as per norms"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Not specified",
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
        "visual_monitoring" => false,
        "fire_resilience" => true,
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
        "hospitality_lounge" => false
    ],
    "graphics" => [
        "project_logo" => null,
        "builder_logo" => null,
        "elevation_visual" => null,
        "floorplan" => null,
        "amenities_map_icons" => null
    ],
    "localityData" => [
        "name" => "Kankaria",
        "growth" => "Moderate",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Anand Residency provides 2 & 3 BHK flats at prime Kankaria location with RCC, vitrified flooring, gas connection and solar amenities.",
    "buyProperties" => [],
    "featured" => true,
    "emerging_property" => true,
    "emerging_area" => true
]);
    Project::create([
    "project" => [
        "name" => "Ayman Heights",
        "slug" => "/ayman-heights",
        "reel" => null,
        "brochure" => "AYMAN HEIGHTS.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/AYMAN%20HEIGHTS.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Sarkhej, Juhapura",
            "city" => "Ahmedabad",
            "area" => "Juhapura",
            "map_description" => "Ayman Heights offers 2BHK and 3BHK lifestyle apartments with modern amenities in Juhapura, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Ayman Developers",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Designer bathroom tiles, branded fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed wiring with modular switches, AC points",
        "doors_windows" => "Decorative main door, flush doors, aluminum windows",
        "internal_paint" => "Putty with emulsion paint"
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
        "name" => "Juhapura, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ayman Heights offers 2 & 3 BHK lifestyle apartments in Juhapura with RCC structure, vitrified flooring, granite kitchens and CCTV facilities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Ayman Developers",
                "location" => "Juhapura, Ahmedabad",
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
        "name" => "Baagban",
        "slug" => "/baagban",
        "reel" => null,
        "brochure" => "BAAGBAN.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/BAAGBAN.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Baagban is a residential project in Ahmedabad with modern lifestyle amenities."
        ]
    ],
    "builder" => [
        "name" => "Baagban Developers",
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
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Baagban is a lifestyle residential project in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "Residential Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Baagban Developers",
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
        "name" => "Siddhi 222",
        "slug" => "/siddhi-222",
        "reel" => null,
        "brochure" => "Brochure_Siddhi222_rera.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Siddhi222.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Siddhi 222 offers residential units with 2BHK configuration in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Siddhi Developers",
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
                    "bedroom_1" => ["size" => "3.31 x 3.17", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "2.70 x 3.17", "wardrobe_niche" => null],
                    "living_room" => ["size" => "5.34 x 3.19"],
                    "kitchen" => ["size" => "1.92 x 3.19"],
                    "wash" => ["size" => "1.92 x 1.29"],
                    "toilet_1" => ["size" => "1.80 x 1.53"],
                    "toilet_2" => ["size" => "1.80 x 1.53"],
                    "balcony" => ["size" => "2.70 x 1.97"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Unit Area 54–60 SQ.MT. (Carpet ~49 SQ.MT.)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant robust frame structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Wash area in kitchen",
        "electrical" => "Concealed copper wiring",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "2 lifts per block (8 persons each + fire lift)",
        "direction_info" => null,
        "security" => "Fire safety provisions"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement / Ground parking",
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
        "security_monitoring" => "Fire and CCTV provisions"
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
        "growth" => "Moderate",
        "growthPeriod" => "5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Siddhi 222 offers affordable 2BHK units with efficient carpet area, robust RCC structure and modern specifications.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => "49 SQ.MT Carpet Area",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Siddhi Developers",
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
        "name" => "Paramhans",
        "slug" => "/paramhans",
        "reel" => null,
        "brochure" => "BROCHURE_Team3.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PARAMHANS%20APPARTMENT.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Swaminarayan Park-3, Vastral",
            "city" => "Ahmedabad",
            "area" => "Vastral",
            "map_description" => "Paramhans offers lifestyle 2BHK & 3BHK residences in Vastral, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Team3 Developers",
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
                    "bedroom_1" => ["size" => "11'0\" x 10'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "10'0\" x 10'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "14'0\" x 10'6\""],
                    "kitchen" => ["size" => "8'0\" x 10'0\""],
                    "bath" => ["size" => "7'0\" x 4'6\""],
                    "wc" => ["size" => "7'0\" x 4'0\""],
                    "balcony" => ["size" => "5'0\" x 7'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 950 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "12'0\" x 11'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "11'0\" x 10'0\"", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "10'6\" x 10'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "15'0\" x 12'0\""],
                    "kitchen" => ["size" => "9'0\" x 10'0\""],
                    "bath" => ["size" => "7'0\" x 5'0\""],
                    "wc" => ["size" => "7'0\" x 4'0\""],
                    "balcony" => ["size" => "6'0\" x 8'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1250 sq.ft.",
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
        "kitchen" => "Granite platform with SS sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with wall tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
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
        "slot_info" => "Ground & basement parking",
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
        "name" => "Vastral, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Paramhans offers premium 2 & 3 BHK residences in Vastral, Ahmedabad with RCC structure, vitrified flooring, granite kitchens and modern lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Team3 Developers",
                "location" => "Vastral, Ahmedabad",
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
        "name" => "United Palace",
        "slug" => "/united-palace",
        "reel" => null,
        "brochure" => "BROCHURE - UNITED PALACE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/UNITED%20PALACE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near APMC Market, Narol",
            "city" => "Ahmedabad",
            "area" => "Narol",
            "map_description" => "United Palace offers 2BHK & 3BHK residential apartments with modern amenities in Narol, Ahmedabad."
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
                "rooms" => [
                    "bedroom_1" => ["size" => "10'0\" x 12'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "10'0\" x 11'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "15'0\" x 12'0\""],
                    "kitchen" => ["size" => "8'0\" x 10'0\""],
                    "bath" => ["size" => "7'0\" x 5'0\""],
                    "wc" => ["size" => "7'0\" x 4'0\""],
                    "balcony" => ["size" => "5'0\" x 8'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 950 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "3BHK" => [
                "rooms" => [
                    "bedroom_1" => ["size" => "12'0\" x 12'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "11'0\" x 11'0\"", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "10'6\" x 11'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "16'0\" x 13'0\""],
                    "kitchen" => ["size" => "9'0\" x 11'0\""],
                    "bath" => ["size" => "7'0\" x 5'0\""],
                    "wc" => ["size" => "7'0\" x 4'0\""],
                    "balcony" => ["size" => "6'0\" x 9'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1250 sq.ft.",
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
        "kitchen" => "Granite platform with stainless steel sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
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
        "name" => "Narol, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "United Palace by United Group offers premium 2 & 3 BHK residences in Narol, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and modern lifestyle amenities.",
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
                "location" => "Narol, Ahmedabad",
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
        "name" => "Allied 14",
        "slug" => "/allied-14",
        "reel" => null,
        "brochure" => "Brochure Allied 14.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Allied%2014.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Khodiyar Nagar, Near Nava Vadaj",
            "city" => "Ahmedabad",
            "area" => "Nava Vadaj",
            "map_description" => "Allied 14 offers 2BHK residential apartments in Nava Vadaj, Ahmedabad with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Allied Group",
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
                    "bedroom_1" => ["size" => "10'0\" x 12'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "10'0\" x 11'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "15'0\" x 12'0\""],
                    "kitchen" => ["size" => "8'0\" x 10'0\""],
                    "bath" => ["size" => "7'0\" x 5'0\""],
                    "wc" => ["size" => "7'0\" x 4'0\""],
                    "balcony" => ["size" => "5'0\" x 8'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 950 sq.ft.",
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
        "kitchen" => "Granite platform with stainless steel sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
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
        "name" => "Nava Vadaj, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Allied 14 offers affordable 2 BHK residences in Nava Vadaj, Ahmedabad with RCC structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => "950 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Allied Group",
                "location" => "Nava Vadaj, Ahmedabad",
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
        "brochure" => "Brochure Altezza Rera-1.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Altezza%20Rera-1.png",
        "type" => "Residential & Commercial Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Sardar Patel Ring Road, South Bopal",
            "city" => "Ahmedabad",
            "area" => "South Bopal",
            "map_description" => "Altezza offers premium 3BHK & 4BHK apartments with lifestyle amenities in South Bopal, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Altezza Developers",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1600–1700 sq.ft.",
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
                "size" => "Approx. 2200–2400 sq.ft.",
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
        "flooring" => "Premium vitrified tiles and granite in common areas",
        "kitchen" => "Granite platform with stainless steel sink, designer dado",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches, AC points",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => true,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => "Guest rooms",
        "work_from_home" => "Business lounge",
        "health_hub" => "Wellness center",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => "Provision for automation",
        "solar_pv" => true,
        "modular_kitchen" => "Yes",
        "designer_lighting" => "Designer lobby & common area lighting",
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
        "name" => "South Bopal, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Altezza in South Bopal offers premium 3 & 4 BHK residences with RCC structure, vitrified flooring, modular kitchens, solar power and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Altezza Developers",
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
        "name" => "Divine 10",
        "slug" => "/divine-10",
        "reel" => null,
        "brochure" => "DIVINE 10.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/DIVINE%2010.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Opp. Krushnakunj Residency, Nr. Law Garden, Ellisbridge",
            "city" => "Ahmedabad",
            "area" => "Ellisbridge",
            "map_description" => "Located near Law Garden with GLS University, HCG Hospital, National Handloom and Thakorbhai Desai Hall nearby."
        ]
    ],
    "builder" => [
        "name" => "Airaavat Divine & Associates",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1600–1700 sq.ft.",
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
                "size" => "Approx. 2200–2400 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ]
    ],
    "specifications" => [
        "structure" => "Earthquake resistant RCC frame structure by N-Three Engi-Solution LLP",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "2 Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
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
        "name" => "Ellisbridge, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Divine 10 offers premium 3 & 4 BHK residences in Ellisbridge, Ahmedabad with RCC structure, vitrified flooring, branded sanitary fittings, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Airaavat Divine & Associates",
                "location" => "Ellisbridge, Ahmedabad",
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
        "name" => "Ekaya",
        "slug" => "/ekaya",
        "reel" => null,
        "brochure" => "EKAYA _BROCHURE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/EKAYA.png",
        "type" => "Residential High-rise Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. S.P. Ring Road, South Bopal",
            "city" => "Ahmedabad",
            "area" => "South Bopal",
            "map_description" => "Ekaya offers premium high-rise residential living with spacious 3 & 4 BHK apartments in South Bopal, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Ekaya Developers",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1600–1800 sq.ft.",
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
                "size" => "Approx. 2200–2400 sq.ft.",
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
        "kitchen" => "Granite platform with SS sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with wall tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => true,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => "Community hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => "Guest rooms",
        "work_from_home" => "Business lounge",
        "health_hub" => "Wellness center",
        "kids_area" => "Children play area",
        "senior_sitouts" => "Senior citizen sit-outs",
        "community_living" => true,
        "24_7_security" => true,
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => "Provision for home automation",
        "solar_pv" => true,
        "modular_kitchen" => "Yes",
        "designer_lighting" => "Designer lobby & common area lighting",
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
        "name" => "South Bopal, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Ekaya offers premium 3 & 4 BHK residences in South Bopal, Ahmedabad with RCC structure, vitrified flooring, modular kitchens, solar power and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Ekaya Developers",
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
        "name" => "Green Lake View",
        "slug" => "/green-lake-view",
        "reel" => null,
        "brochure" => "GREEN LAKE VIEW.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/GREEN%20LAKE%20VIEW.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Behind Navo Vadaj Garden, Opp. Shaligram Lakeview Samne, Ranip–Nikhol",
            "city" => "Ahmedabad",
            "area" => "Ranip–Nikhol",
            "map_description" => "Green Lake View offers limited 3 BHK luxurious apartments with lifestyle amenities in Ranip–Nikhol, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Megh Infratech",
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
                    "living_room" => ["size" => null],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => null],
                    "balcony" => ["size" => null],
                    "bath" => ["size" => null],
                    "wc" => ["size" => null]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx. 1600 sq.ft.",
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
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Solar powered lights in common areas",
        "number_of_lifts" => "2 Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system, security cabin"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
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
        "name" => "Ranip–Nikhol, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Green Lake View by Megh Infratech offers only 14 premium 3 BHK residences with RCC structure, vitrified flooring, solar power, CCTV security and lifestyle amenities in Ranip–Nikhol, Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "1600 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Megh Infratech",
                "location" => "Ranip–Nikhol, Ahmedabad",
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
        "name" => "Hiradhan Heritage",
        "slug" => "/hiradhan-heritage",
        "reel" => null,
        "brochure" => "HIRADHAN HERITAGE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/HIRADHAN%20HERITAGE.png",
        "type" => "Residential Redevelopment Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "B/s. Laxmi One, Nr. Chandranagar Char Rasta, Paldi",
            "city" => "Ahmedabad",
            "area" => "Paldi",
            "map_description" => "Hiradhan Heritage offers luxurious 3 BHK apartments in a 7-storey redevelopment project located at Paldi, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Spacecon",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => null,
            "phone" => "9825604048 / 9825604014"
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
                "size" => "Approx. 1600–1700 sq.ft.",
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
        "kitchen" => "Granite platform with SS sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with wall tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => "2 Fully automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & ground parking",
        "basement_ground" => "Yes"
    ],
    "amenities" => [
        "clubhouse" => null,
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
        "name" => "Paldi, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Hiradhan Heritage by Spacecon offers premium 3 BHK residences in a 7-storey redevelopment project at Paldi, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and modern amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "1600–1700 sq.ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Spacecon",
                "location" => "Paldi, Ahmedabad",
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
        "name" => "Imperial Mansion",
        "slug" => "/imperial-mansion",
        "reel" => null,
        "brochure" => "IMPERIAL MANSION.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/IMPERIAL%20MANSION.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Beside Rajvi Exotica, Kesar Varika Lane, Near Mango Cinema, Fortune Circle, Nikol",
            "city" => "Ahmedabad",
            "area" => "Nikol",
            "map_description" => "Imperial Mansion offers premium residences in Nikol, Ahmedabad, developed by Kalash Buildcon."
        ]
    ],
    "builder" => [
        "name" => "Kalash Buildcon",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
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
        "name" => "Nikol, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Imperial Mansion by Kalash Buildcon offers premium 2 & 3 BHK residences in Nikol, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kalash Buildcon",
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
        "name" => "Kahan Villa",
        "slug" => "/kahan-villa",
        "reel" => null,
        "brochure" => "KAHAN VILLA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KAHAN%20VILLA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Kahan Villa offers residential living with modern lifestyle amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Kahan Developers",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
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
        "name" => "Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Kahan Villa offers 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Kahan Developers",
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
        "name" => "Om Courtyard",
        "slug" => "/om-courtyard",
        "reel" => null,
        "brochure" => "OM COURTYARD.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/OM%20COURTYARD.png",
        "type" => "Residential Villas",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nr. Hathijan Circle, Vinzol",
            "city" => "Ahmedabad",
            "area" => "Hathijan–Vinzol",
            "map_description" => "Om Courtyard offers premium 3 & 4 BHK villas in Hathijan–Vinzol, Ahmedabad with Bharatiya styled living spaces and modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Amrut Infracon LLP",
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
            "3BHK Villa" => [
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
                "size" => "Approx. 1800–2000 sq.ft.",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "4BHK Villa" => [
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
                "size" => "Approx. 2200–2500 sq.ft.",
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
        "flooring" => "Premium vitrified tiles and ceramic tiles",
        "kitchen" => "Granite platform with SS sink and designer dado tiles",
        "toilets" => "Branded sanitary fittings with designer wall tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety, gated community security"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
        "basement_ground" => null
    ],
    "amenities" => [
        "clubhouse" => "Clubhouse with multipurpose hall",
        "floating_fitness" => "Gymnasium",
        "dedicated_guest_rooms" => null,
        "work_from_home" => null,
        "health_hub" => "Wellness & yoga area",
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
        "modular_kitchen" => "Yes",
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
        "name" => "Hathijan–Vinzol, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Om Courtyard by Amrut Infracon LLP offers premium 3 & 4 BHK Bharatiya styled villas with RCC structure, vitrified flooring, granite kitchens, CCTV security, and lifestyle amenities in Hathijan–Vinzol, Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 & 4 BHK Villas",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Amrut Infracon LLP",
                "location" => "Hathijan–Vinzol, Ahmedabad",
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
        "name" => "Kalav",
        "slug" => "/kalav",
        "reel" => null,
        "brochure" => "KALAV - RERA Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/KALAV.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Kalav offers premium residences with modern lifestyle amenities in Ahmedabad."
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
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
    "investmentNote" => "Kalav offers 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
        "name" => "Maple 2",
        "slug" => "/maple-2",
        "reel" => null,
        "brochure" => "Maple 2_RERA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Maple%202.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Maple 2 offers premium residential living with modern lifestyle amenities in Ahmedabad."
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
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
    "investmentNote" => "Maple 2 offers 2 & 3 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
        "name" => "Paradise Exotica",
        "slug" => "/paradise-exotica",
        "reel" => null,
        "brochure" => "PARADISE EXOTICA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/PARADISE%20EXOTICA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Paradise Exotica is a multi-block residential project with Block A, Block B, and Block C layouts including Basement and Ground Floor plans."
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
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
    "investmentNote" => "Paradise Exotica offers 2 & 3 BHK residences across multiple blocks with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities in Ahmedabad.",
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
        "name" => "Royal Palace",
        "slug" => "/royal-palace",
        "reel" => null,
        "brochure" => "ROYAL PALACE.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/ROYAL%20PALACE.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Royal Palace offers premium residential apartments with modern amenities in Ahmedabad."
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
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
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
    "investmentNote" => "Royal Palace offers 2, 3 & 4 BHK residences in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
        "name" => "SB Crestoria",
        "slug" => "/sb-crestoria",
        "reel" => null,
        "brochure" => null,
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SB%20Crestoria.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nana Chiloda",
            "city" => "Ahmedabad",
            "area" => "Nana Chiloda",
            "map_description" => "SB Crestoria offers spacious 3BHK apartments with lifestyle amenities at Nana Chiloda."
        ]
    ],
    "builder" => [
        "name" => "SB Group",
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
                    "bedroom_1" => ["size" => "3.05m x 3.65m", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "3.05m x 3.05m", "wardrobe_niche" => null],
                    "bedroom_3" => ["size" => "4.07m x 3.20m", "wardrobe_niche" => null],
                    "bath" => ["size" => "2.06m x 1.50m"],
                    "wc" => ["size" => "1.37m x 1.80m"],
                    "living_room" => ["size" => "3.20m x 5.03m"],
                    "dining_area" => ["size" => "3.22m x 3.20m"],
                    "kitchen" => ["size" => "3.05m x 1.79m"],
                    "balcony" => ["size" => "3.20m x 1.22m"],
                    "store" => ["size" => "0.90m x 1.67m"],
                    "wash" => ["size" => "1.61m x 1.52m"]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "89.39 – 89.82 SQ. M (Carpet 79 – 80.8 SQ. M)",
                "date" => null,
                "floorPlans" => [],
                "galleryImages" => []
            ],
            "floorplan_image_id" => null,
            "price" => null
        ],
    ],
    "specifications" => [
        "structure" => "Earthquake resistant structure",
        "flooring" => "Vitrified tiles in living, dining, kitchen & bedrooms",
        "kitchen" => "Granite platform with SS sink, tile dado up to lintel",
        "toilets" => "Vitrified tiles, CPVC/UPVC pipes, branded ceramic fittings",
        "utility" => "Tile floor, electric & plumbing provision for washing machine",
        "electrical" => "Three-phase concealed copper wiring, ELCB/MCB, AC, TV, telephone points",
        "doors_windows" => "Flush doors with frames, aluminum windows",
        "internal_paint" => "Putty finish",
        "external_paint" => "Double coat plaster with texture paint",
        "terrace" => "Tile/China Mosaic with waterproofing"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "Yes",
        "number_of_lifts" => "Automatic lifts (8 persons, fire lifts)",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Basement & hollow plinth parking",
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
        "visual_monitoring" => true,
        "fire_resilience" => true,
        "amenities_image_id" => null
    ],
    "modern_features" => [
        "smart_home_automation" => null,
        "solar_pv" => false,
        "modular_kitchen" => null,
        "designer_lighting" => "Common areas",
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
        "name" => "Nana Chiloda, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "SB Crestoria offers spacious 3BHK apartments with vitrified flooring, RCC structure, modern fittings, and lifestyle amenities in Nana Chiloda.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "3 BHK Flats",
            "size" => "89 – 90 SQ. M (Carpet 79 – 80.8 SQ. M)",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "SB Group",
                "location" => "Nana Chiloda, Ahmedabad",
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
        "name" => "Saffron Valley",
        "slug" => "/saffron-valley",
        "reel" => null,
        "brochure" => "SAFFRON VALLEY.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAFFRON%20VALLEY.png",
        "type" => "Residential Villas",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Saffron Valley offers premium residential villas with lifestyle amenities in Ahmedabad."
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
            "4BHK Villa" => [
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
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink",
        "toilets" => "Branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
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
    "investmentNote" => "Saffron Valley offers premium 4 BHK villas in Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
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
        "name" => "Sahjanand Green Villa",
        "slug" => "/sahjanand-green-villa",
        "reel" => null,
        "brochure" => "SAHJANAND GREEN VILLA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SAHJANAND%20GREEN%20VILLA.png",
        "type" => "Residential Villas",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Sahjanand Green Villa offers luxurious villa residences with modern amenities in Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Sahjanand Group",
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
            "4BHK Villa" => [
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
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink, designer dado tiles",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
        "number_of_lifts" => null,
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Individual villa parking",
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
    "investmentNote" => "Sahjanand Green Villa offers premium 4 BHK villas with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities in Ahmedabad.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 BHK Villas",
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
        "name" => "Scarlet Homes",
        "slug" => "/scarlet-homes",
        "reel" => null,
        "brochure" => "SCARLET HOMES.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SCARLET%20HOMES.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "2, Rajnagar Co-Op Hsg. Soc., B/h. NID, Paldi",
            "city" => "Ahmedabad",
            "area" => "Paldi",
            "map_description" => "Scarlet Homes offers premium residential apartments in Paldi, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Divyesh Desai & Associates",
        "logo_image_id" => null,
        "corporate_address" => "Ahmedabad, Gujarat",
        "contact" => [
            "website" => null,
            "sales_email" => "swastiikrealty@gmail.com",
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
        "structure" => "RCC frame structure",
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
        "name" => "Paldi, Ahmedabad",
        "growth" => "Medium",
        "growthPeriod" => "3-5 years",
        "avgRate" => null
    ],
    "investmentNote" => "Scarlet Homes by Divyesh Desai & Associates offers 2 & 3 BHK apartments in Paldi, Ahmedabad with RCC structure, vitrified flooring, granite kitchens, and basic lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Swastiik Realty",
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
        "name" => "Shyaswa",
        "slug" => "/shyaswa",
        "reel" => null,
        "brochure" => "Shyaswa Rera Brochure.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shyaswa.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Shilaj, SP Ring Road",
            "city" => "Ahmedabad",
            "area" => "Shilaj",
            "map_description" => "Shyaswa by Bequest Infra Projects LLP offers premium 4 & 5 BHK lifestyle residences at Shilaj, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "Bequest Infra Projects LLP",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with SS sink, designer dado",
        "toilets" => "Branded sanitary fittings with designer tiles",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, flush doors, aluminum windows",
        "internal_paint" => "Putty finish with emulsion paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lighting in common areas",
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
        "name" => "Shilaj, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Shyaswa by Bequest Infra Projects LLP offers premium 4 & 5 BHK lifestyle residences in Shilaj with RCC structure, vitrified flooring, granite kitchens, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "4 & 5 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Bequest Infra Projects LLP",
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
        "name" => "The Cluster",
        "slug" => "/the-cluster",
        "reel" => null,
        "brochure" => "THE CLUSTER.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/THE%20CLUSTER.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nikol",
            "city" => "Ahmedabad",
            "area" => "Nikol",
            "map_description" => "The Cluster by A R Developers offers well-planned 2 BHK residences with lifestyle amenities in Nikol, Ahmedabad."
        ]
    ],
    "builder" => [
        "name" => "A R Developers",
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
                    "bedroom_1" => ["size" => "10'0\" x 12'0\"", "wardrobe_niche" => null],
                    "bedroom_2" => ["size" => "10'0\" x 10'0\"", "wardrobe_niche" => null],
                    "living_room" => ["size" => "10'0\" x 14'0\""],
                    "dining_area" => ["size" => null],
                    "kitchen" => ["size" => "8'0\" x 10'0\""],
                    "balcony" => ["size" => "5'0\" x 8'0\""],
                    "bath" => ["size" => "5'0\" x 7'0\""],
                    "wc" => ["size" => "4'0\" x 6'0\""]
                ],
                "imageslider" => [],
                "price" => null,
                "size" => "Approx 1100 sq. ft.",
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
        "kitchen" => "Granite platform with SS sink, glazed tile dado up to lintel",
        "toilets" => "Designer tiles up to lintel, branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weather shield exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
        "number_of_lifts" => "Automatic lifts",
        "direction_info" => null,
        "security" => "CCTV surveillance, fire safety system"
    ],
    "parking" => [
        "ev_charging" => false,
        "slot_info" => "Ground & basement parking",
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
        "designer_lighting" => "Common areas",
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
    "investmentNote" => "The Cluster by A R Developers offers affordable 2 BHK apartments in Nikol with RCC structure, vitrified flooring, modern kitchen, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 BHK Flats",
            "size" => "Approx 1100 sq. ft.",
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "A R Developers",
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
        "name" => "Shreeji Vihar",
        "slug" => "/shreeji-vihar",
        "reel" => null,
        "brochure" => "SHREEJI VIHAR.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/SHREEJI%20VIHAR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shreeji Vihar offers lifestyle residences in Ahmedabad."
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
        "Homes" => [],
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
    "investmentNote" => "Shreeji Vihar provides comfortable residential living in Ahmedabad.",
    "buyProperties" => [],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => false
]);
Project::create([
    "project" => [
        "name" => "Shruti Apartment",
        "slug" => "/shruti-apartment",
        "reel" => null,
        "brochure" => "Shruti Apartment.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Shruti%20Apartment.png",
        "type" => "Residential Apartments",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Shruti Apartment is a residential apartment scheme in Ahmedabad."
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
        "Homes" => [],
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
    "investmentNote" => "Shruti Apartment offers residential apartments in Ahmedabad.",
    "buyProperties" => [],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => false
]);
Project::create([
    "project" => [
        "name" => "Vaikunth",
        "slug" => "/vaikunth",
        "reel" => null,
        "brochure" => "VAIKUNTH.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VAIKUNTH.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Next to A. Shridhar Oxygen Park, DPS Bopal Road, Shilaj",
            "city" => "Ahmedabad",
            "area" => "Shilaj",
            "map_description" => "Vaikunth by Shilaj Infrabuild LLP offers premium lifestyle apartments at Shilaj, Ahmedabad, near DPS Bopal Road."
        ]
    ],
    "builder" => [
        "name" => "Shilaj Infrabuild LLP",
        "logo_image_id" => null,
        "corporate_address" => "A Shridhar Corporate House, Nr. Kaveri Sangam, Shilaj Cross Road, Shilaj, Ahmedabad",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Tiles in drawing, dining, kitchen, bedrooms; vitrified tiles in bathrooms; granite in kitchen",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Designer tiles, branded sanitary fittings",
        "utility" => "Provision for washing machine",
        "electrical" => "Modular switches, concealed copper wiring, MCB, ELCB, AC piping provision",
        "doors_windows" => "Flush doors, decorative main door, aluminium sliding windows",
        "internal_paint" => "Lapi finish with acrylic emulsion",
        "external_paint" => "Brick cladding / texture paint with weatherproof coating"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
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
        "designer_lighting" => "Common areas",
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
        "name" => "Shilaj, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vaikunth by Shilaj Infrabuild LLP offers 2 & 3 BHK premium residences in Shilaj, Ahmedabad with RCC structure, vitrified flooring, modern specifications, and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Shilaj Infrabuild LLP",
                "location" => "Shilaj, Ahmedabad",
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
        "name" => "Vertex Luxuria",
        "slug" => "/vertex-luxuria",
        "reel" => null,
        "brochure" => "Vertex Luxuria.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Vertex%20Luxuria.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Nilmani Housing Society, F.P. No. 159, T.P.S. No. 01 Memnagar, Revenue Survey No. 91",
            "city" => "Ahmedabad",
            "area" => "Memnagar",
            "map_description" => "Vertex Luxuria by Buildcon offers lifestyle residences at Memnagar, Ahmedabad with premium planning and modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Buildcon",
        "logo_image_id" => null,
        "corporate_address" => "Final Plot No. 26, Nr. Ognaj Circle, S.P. Ring Road, Ognaj, Ahmedabad",
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
        "flooring" => "Vitrified tiles in all rooms",
        "kitchen" => "Granite platform with stainless steel sink, glazed tiles dado",
        "toilets" => "Branded sanitary fittings, designer tiles up to lintel",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches, MCB & ELCB protection",
        "doors_windows" => "Decorative main door, internal flush doors, aluminium sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
    ],
    "building" => [
        "entry_direction" => null,
        "common_lighting" => "LED lights in common areas",
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
        "designer_lighting" => "Common areas",
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
        "name" => "Memnagar, Ahmedabad",
        "growth" => "High",
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Vertex Luxuria by Buildcon offers premium 2, 3 & 4 BHK residences in Memnagar, Ahmedabad with RCC structure, vitrified flooring, modern kitchen and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2, 3 & 4 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Buildcon",
                "location" => "Memnagar, Ahmedabad",
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
        "name" => "Upvan Skyline",
        "slug" => "/upvan-skyline",
        "reel" => null,
        "brochure" => "Upvan Skyline.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Upvan%20Skyline.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Upvan Skyline offers lifestyle residences in Ahmedabad."
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
        "Homes" => [],
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
    "investmentNote" => "Upvan Skyline provides residential living in Ahmedabad.",
    "buyProperties" => [],
    "featured" => true,
    "emerging_property" => false,
    "emerging_area" => false
]);
Project::create([
    "project" => [
        "name" => "Vraj Vatika",
        "slug" => "/vraj-vatika",
        "reel" => null,
        "brochure" => "VRAJ VATIKA.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VRAJ%20VATIKA.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vraj Vatika offers lifestyle residences in Ahmedabad with premium specifications."
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles",
        "kitchen" => "Granite platform with stainless steel sink",
        "toilets" => "Branded sanitary fittings, designer tiles",
        "utility" => null,
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Flush doors, aluminum windows",
        "internal_paint" => "Putty finish with acrylic emulsion"
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
    "investmentNote" => "Vraj Vatika offers premium 2 & 3 BHK residences in Ahmedabad with RCC frame structure, vitrified flooring, granite kitchens, and branded fittings.",
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
    "emerging_property" => false,
    "emerging_area" => false
]);
Project::create([
    "project" => [
        "name" => "Vrunda Vihar",
        "slug" => "/vrunda-vihar",
        "reel" => null,
        "brochure" => "VRUNDA VIHAR.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/VRUNDA%20VIHAR.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => null,
            "city" => "Ahmedabad",
            "area" => null,
            "map_description" => "Vrunda Vihar offers lifestyle residences in Ahmedabad."
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
    "investmentNote" => "Vrunda Vihar provides residential living in Ahmedabad with essential amenities and modern lifestyle features.",
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
    "emerging_property" => false,
    "emerging_area" => false
]);

Project::create([
    "project" => [
        "name" => "Western Greens",
        "slug" => "/western-greens",
        "reel" => null,
        "brochure" => "Western Greens.pdf",
        "logo_image_id" => "https://images.keyarea1.com/Ahmedabad/Western%20Greens.png",
        "type" => "Residential Project",
        "visual_image_id" => null,
        "location" => [
            "address" => "Near Nirma University, SG Highway",
            "city" => "Ahmedabad",
            "area" => "SG Highway",
            "map_description" => "Western Greens by Avis Developers is located near Nirma University on SG Highway, Ahmedabad offering lifestyle residences with modern amenities."
        ]
    ],
    "builder" => [
        "name" => "Avis Developers",
        "logo_image_id" => null,
        "corporate_address" => "Avis Developers, Ahmedabad",
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
        "structure" => "Earthquake resistant RCC frame structure",
        "flooring" => "Premium vitrified tiles in all rooms",
        "kitchen" => "Granite platform with SS sink, glazed tile dado",
        "toilets" => "Branded sanitary fittings, designer tiles up to lintel level",
        "utility" => "Provision for washing machine",
        "electrical" => "Concealed copper wiring with modular switches",
        "doors_windows" => "Decorative main door, internal flush doors, aluminum sliding windows",
        "internal_paint" => "Putty finish with acrylic emulsion",
        "external_paint" => "Weatherproof exterior paint"
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
        "growthPeriod" => "5-7 years",
        "avgRate" => null
    ],
    "investmentNote" => "Western Greens by Avis Developers offers 2 & 3 BHK premium residences near Nirma University, SG Highway, Ahmedabad with RCC frame structure, vitrified flooring, granite kitchens and lifestyle amenities.",
    "buyProperties" => [
        [
            "img" => null,
            "title" => "2 & 3 BHK Flats",
            "size" => null,
            "price" => null,
            "date" => null,
            "url" => null,
            "agency" => [
                "name" => "Avis Developers",
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
