import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";
import { 
  Home, Building2, Sparkles, HeartPulse, Baby, Users, Wifi, Sun, Droplets, Leaf,
  Shield, Flame, Car, Camera, Boxes, Lock, BatteryCharging, ThermometerSun,
  KeyRound, PartyPopper, PawPrint, Gamepad2, Trees, ShoppingBag, MonitorPlay,
  Music, Power, Zap, Dumbbell,CheckSquare 
} from "lucide-react";



const AmenitiesForm = ({ project, allProjects, closeModal }) => {
const [form, setForm] = useState({
    project_id: project?.id || "",

    /* -------------------- Amenities -------------------- */
    clubhouse: project?.amenities?.clubhouse ?? false,
    floating_fitness: project?.amenities?.floating_fitness ?? false,
    dedicated_guest_rooms: project?.amenities?.dedicated_guest_rooms ?? false,
    work_from_home: project?.amenities?.work_from_home ?? false,
    health_hub: project?.amenities?.health_hub ?? false,
    kids_area: project?.amenities?.kids_area ?? false,
    senior_sitouts: project?.amenities?.senior_sitouts ?? false,
    community_living: project?.amenities?.community_living ?? false,
    swimming_pool: project?.amenities?.swimming_pool ?? false,
    spa: project?.amenities?.spa ?? false,
    indoor_games: project?.amenities?.indoor_games ?? false,
    jogging_track: project?.amenities?.jogging_track ?? false,
    pet_friendly_area: project?.amenities?.pet_friendly_area ?? false,
    wifi_zone: project?.amenities?.wifi_zone ?? false,
    solar_powered_lighting: project?.amenities?.solar_powered_lighting ?? false,
    rainwater_harvesting: project?.amenities?.rainwater_harvesting ?? false,
    green_landscaping: project?.amenities?.green_landscaping ?? false,
    security_24_7: project?.amenities?.security_24_7 ?? false,
    visual_monitoring: project?.amenities?.visual_monitoring ?? false,
    fire_resilience: project?.amenities?.fire_resilience ?? false,

    /* ⭐ Newly Added Amenities */
    automatic_elevators: project?.amenities?.automatic_elevators ?? false,
    entrance_gate: project?.amenities?.entrance_gate ?? false,
    png_gas: project?.amenities?.png_gas ?? false,
    water_supply: project?.amenities?.water_supply ?? false,
    ample_parking: project?.amenities?.ample_parking ?? false,
    fire_safety_provision: project?.amenities?.fire_safety_provision ?? false,
    cctv_camera_24x7: project?.amenities?.cctv_camera_24x7 ?? false,
    attractive_foyer: project?.amenities?.attractive_foyer ?? false,

    /* 🔥 Newly Requested Additional Features */
    decorative_foyer: project?.amenities?.decorative_foyer ?? false,
    designer_compound_wall: project?.amenities?.designer_compound_wall ?? false,
    power_backup: project?.amenities?.power_backup ?? false,
    vastu_compliant_entry: project?.amenities?.vastu_compliant_entry ?? false,
    solar_panel: project?.amenities?.solar_panel ?? false,
    lifestyle_amenities: project?.amenities?.lifestyle_amenities ?? false, // heading-type tag

    /* ----------------- Modern Features ----------------- */
    smart_home_automation: project?.amenities?.smart_home_automation ?? false,
    solar_pv: project?.amenities?.solar_pv ?? false,
    modular_kitchen: project?.amenities?.modular_kitchen ?? false,
    designer_lighting: project?.amenities?.designer_lighting ?? false,
    security_monitoring: project?.amenities?.security_monitoring ?? false,
    video_door_phone: project?.amenities?.video_door_phone ?? false,
    digital_lock: project?.amenities?.digital_lock ?? false,
    energy_efficient_appliances: project?.amenities?.energy_efficient_appliances ?? false,
    ev_charging: project?.amenities?.ev_charging ?? false,
    high_speed_internet: project?.amenities?.high_speed_internet ?? false,
    water_purification: project?.amenities?.water_purification ?? false,
    climate_control: project?.amenities?.climate_control ?? false,
    green_building_certification: project?.amenities?.green_building_certification ?? false,

    /* -------------------- Lifestyle -------------------- */
    family: project?.amenities?.family ?? false,
    children: project?.amenities?.children ?? false,
    elderly: project?.amenities?.elderly ?? false,
    wellness: project?.amenities?.wellness ?? false,
    community_events: project?.amenities?.community_events ?? false,
    hospitality_lounge: project?.amenities?.hospitality_lounge ?? false,
    pet_friendly: project?.amenities?.pet_friendly ?? false,
    sports_facilities: project?.amenities?.sports_facilities ?? false,
    fitness_center: project?.amenities?.fitness_center ?? false,
    cultural_activities: project?.amenities?.cultural_activities ?? false,
    recreational_spaces: project?.amenities?.recreational_spaces ?? false,
    safety_security: project?.amenities?.safety_security ?? false,
    green_spaces: project?.amenities?.green_spaces ?? false,
    shopping_convenience: project?.amenities?.shopping_convenience ?? false,
    work_from_home_friendly: project?.amenities?.work_from_home_friendly ?? false,
    entertainment_zones: project?.amenities?.entertainment_zones ?? false,
});

const icons = {
    clubhouse: Home,
    floating_fitness: Sparkles,
    dedicated_guest_rooms: Building2,
    work_from_home: MonitorPlay,
    health_hub: HeartPulse,
    kids_area: Baby,
    senior_sitouts: Users,
    community_living: Home,
    swimming_pool: Droplets,           // Waves नही है → Droplets best
    spa: Sparkles,
    indoor_games: Gamepad2,
    jogging_track: Dumbbell,           // Running नहीं है
    pet_friendly_area: PawPrint,
    wifi_zone: Wifi,
    solar_powered_lighting: Sun,
    rainwater_harvesting: Droplets,
    green_landscaping: Leaf,
    security_24_7: Shield,
    visual_monitoring: Camera,         // Eye icon missing → Camera used
    fire_resilience: Flame,

    /* Newly Added */
    automatic_elevators: Building2,
    entrance_gate: Zap,
    png_gas: Flame,
    water_supply: Droplets,
    ample_parking: Car,
    fire_safety_provision: Flame,
    cctv_camera_24x7: Camera,
    attractive_foyer: Sparkles,

    /* Modern Features */
    smart_home_automation: Power,
    solar_pv: Sun,
    modular_kitchen: Boxes,
    designer_lighting: Sparkles,
    security_monitoring: Shield,
    video_door_phone: KeyRound,
    digital_lock: Lock,
    energy_efficient_appliances: BatteryCharging,
    ev_charging: BatteryCharging,
    high_speed_internet: Wifi,
    water_purification: Droplets,
    climate_control: ThermometerSun,
    green_building_certification: Leaf,

    /* Lifestyle */
    family: Users,
    children: Baby,
    elderly: Users,
    wellness: HeartPulse,
    community_events: PartyPopper,
    hospitality_lounge: Home,
    pet_friendly: PawPrint,
    sports_facilities: Dumbbell,
    fitness_center: Dumbbell,
    cultural_activities: Music,
    recreational_spaces: Trees,
    safety_security: Shield,
    green_spaces: Leaf,
    shopping_convenience: ShoppingBag,
    work_from_home_friendly: MonitorPlay,
    entertainment_zones: MonitorPlay,
};



    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const dropdownRef = useRef(null);

    const filteredProjects = allProjects.filter((p) =>
        p.name.toLowerCase().includes(search.toLowerCase())
    );

    const handleProjectSelect = (id, name) => {
        setForm({ ...form, project_id: id });
        setSearch(name);
        setIsDropdownOpen(false);
    };

    useEffect(() => {
        const handleClickOutside = (e) => {
            if (dropdownRef.current && !dropdownRef.current.contains(e.target)) {
                setIsDropdownOpen(false);
            }
        };
        document.addEventListener("mousedown", handleClickOutside);
        return () => document.removeEventListener("mousedown", handleClickOutside);
    }, []);

    const handleChange = (e) => {
        const { name, checked } = e.target;
        setForm({ ...form, [name]: checked });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (project) {
            Inertia.put(`/amenities/${project.id}/update`, { amenities: form });
        } else {
            Inertia.post(`/amenities/${form.project_id}/store`, { amenities: form });
        }
        closeModal();
    };

    return (
        <div className="bg-white rounded-xl shadow-sm border border-gray-100">
            <div className="px-8 py-6 border-b bg-gradient-to-r from-gray-50 to-white flex justify-between items-center">
                <h2 className="text-2xl font-bold text-gray-900">
                    {project ? "Edit Amenities" : "Create Amenities"}
                </h2>
                <button onClick={closeModal} className="text-gray-600 hover:text-red-500">✕</button>
            </div>

            <form onSubmit={handleSubmit} className="p-8 space-y-8">
                {!project && (
                    <div ref={dropdownRef}>
                        <label className="font-semibold">Select Project</label>
                        <input
                            type="text"
                            value={search}
                            onChange={(e) => { setSearch(e.target.value); setIsDropdownOpen(true); }}
                            onFocus={() => setIsDropdownOpen(true)}
                            placeholder="Search Project..."
                            className="w-full border px-3 py-2 rounded-lg mt-1"
                        />

                        {isDropdownOpen && (
                            <div className="border rounded-lg shadow max-h-60 overflow-y-auto mt-1 bg-white">
                                {filteredProjects.map(p => (
                                    <div
                                        key={p.id}
                                        onClick={() => handleProjectSelect(p.id, p.name)}
                                        className="px-3 py-2 hover:bg-purple-100 cursor-pointer"
                                    >
                                        {p.name}
                                    </div>
                                ))}
                            </div>
                        )}
                    </div>
                )}

                <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
    {Object.keys(form).map(key => {
        if (key === "project_id") return null;

        const Icon = icons[key] || CheckSquare; // default icon

        return (
            <label 
                key={key} 
                className="flex items-center gap-3 p-3 border rounded-lg bg-gray-50 hover:bg-purple-50 transition-all cursor-pointer"
            >
                <input
                    type="checkbox"
                    name={key}
                    checked={form[key]}
                    onChange={handleChange}
                    className="h-5 w-5 accent-purple-600"
                />
                
                <Icon size={20} className="text-purple-600" />

                <span className="capitalize text-gray-800 font-medium">
                    {key.replace(/_/g, " ")}
                </span>
            </label>
        );
    })}
</div>


                <div className="flex justify-end gap-3 pt-4 border-t">
                    <button type="button" onClick={closeModal} className="px-5 py-2 border rounded-lg">
                        Cancel
                    </button>
                    <button type="submit" className="px-5 py-2 bg-purple-600 text-white rounded-lg">
                        {project ? "Update" : "Create"}
                    </button>
                </div>
            </form>
        </div>
    );
};

export default AmenitiesForm;
