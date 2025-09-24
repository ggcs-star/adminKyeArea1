import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const AmenitiesForm = ({ project, allProjects, closeModal }) => {
    const [form, setForm] = useState({
        project_id: project?.id || "",
        clubhouse: project?.amenities?.clubhouse || "",
        floating_fitness: project?.amenities?.floating_fitness || "",
        dedicated_guest_rooms: project?.amenities?.dedicated_guest_rooms || "",
        work_from_home: project?.amenities?.work_from_home || "",
        health_hub: project?.amenities?.health_hub || "",
        kids_area: project?.amenities?.kids_area || "",
        senior_sitouts: project?.amenities?.senior_sitouts || "",
        community_living: project?.amenities?.community_living || "",
        swimming_pool: project?.amenities?.swimming_pool || "",
        spa: project?.amenities?.spa || "",
        indoor_games: project?.amenities?.indoor_games || "",
        jogging_track: project?.amenities?.jogging_track || "",
        pet_friendly_area: project?.amenities?.pet_friendly_area || "",
        wifi_zone: project?.amenities?.wifi_zone || "",
        solar_powered_lighting: project?.amenities?.solar_powered_lighting || false,
        rainwater_harvesting: project?.amenities?.rainwater_harvesting || false,
        green_landscaping: project?.amenities?.green_landscaping || "",
        security_24_7: project?.amenities?.security_24_7 || false,
        visual_monitoring: project?.amenities?.visual_monitoring || false,
        fire_resilience: project?.amenities?.fire_resilience || false,
        amenities_image_id: project?.amenities?.amenities_image_id || "",
    });

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
        const handleClickOutside = (event) => {
            if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
                setIsDropdownOpen(false);
            }
        };
        document.addEventListener("mousedown", handleClickOutside);
        return () => document.removeEventListener("mousedown", handleClickOutside);
    }, []);

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setForm({ ...form, [name]: type === "checkbox" ? checked : value });
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
        {/* Header */}
        <div className="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
            <div className="flex items-center justify-between">
                <div>
                    <h2 className="text-2xl font-bold text-gray-900">
                        {project ? "Edit Amenities" : "Create Amenities"}
                    </h2>
                    <p className="text-gray-600 mt-1">
                        {project ? "Update project amenities and facilities" : "Add new amenities configuration"}
                    </p>
                </div>
                <button
                    onClick={closeModal}
                    className="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200"
                    title="Close"
                >
                    <svg className="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18-6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div className="px-8 py-6">
            <form onSubmit={handleSubmit} className="space-y-6">
                {/* Project Search Dropdown */}
                {!project && (
                    <div className="group" ref={dropdownRef}>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <svg className="w-4 h-4 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" />
                            </svg>
                            Select Project
                        </label>
                        <div className="relative">
                            <div className="relative">
                                <input
                                    type="text"
                                    value={search}
                                    onChange={(e) => { setSearch(e.target.value); setIsDropdownOpen(true); }}
                                    placeholder="Search projects by name..."
                                    onFocus={() => setIsDropdownOpen(true)}
                                    className="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 bg-white shadow-sm"
                                />
                                <svg className="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            
                            {isDropdownOpen && (
                                <div className="absolute z-10 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-lg max-h-60 overflow-y-auto">
                                    {filteredProjects.length > 0 ? (
                                        filteredProjects.map((p) => (
                                            <div
                                                key={p.id}
                                                onClick={() => handleProjectSelect(p.id, p.name)}
                                                className={`px-4 py-3 cursor-pointer hover:bg-purple-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${
                                                    form.project_id === p.id 
                                                        ? "bg-purple-50 text-purple-700 border-l-4 border-l-purple-500" 
                                                        : "text-gray-700"
                                                }`}
                                            >
                                                <span className="font-medium">{p.name}</span>
                                                {form.project_id === p.id && (
                                                    <svg className="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                                                    </svg>
                                                )}
                                            </div>
                                        ))
                                    ) : (
                                        <div className="px-4 py-4 text-center text-gray-500 bg-gray-50">
                                            <svg className="w-8 h-8 mx-auto mb-2 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1} d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            No projects found matching "<span className="font-medium">"{search}"</span>"
                                        </div>
                                    )}
                                </div>
                            )}
                        </div>
                        
                        {form.project_id && !isDropdownOpen && (
                            <div className="mt-2 flex items-center text-sm text-green-600 bg-green-50 px-3 py-2 rounded-lg">
                                <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Project selected successfully
                            </div>
                        )}
                    </div>
                )}

                {/* Amenities Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {Object.keys(form).map((key) => {
                        if (key === "project_id") return null;

                        if (typeof form[key] === "boolean") {
                            return (
                                <div key={key} className="flex items-center p-3 bg-gray-50 rounded-lg border border-gray-200 hover:border-purple-300 transition-colors duration-200">
                                    <input 
                                        type="checkbox" 
                                        name={key} 
                                        checked={form[key]} 
                                        onChange={handleChange}
                                        className="h-5 w-5 text-purple-600 focus:ring-purple-500 border-gray-300 rounded"
                                    />
                                    <label className="ml-3 text-sm font-medium text-gray-700 capitalize cursor-pointer">
                                        {key.replace(/_/g, " ")}
                                    </label>
                                </div>
                            );
                        } else {
                            return (
                                <div key={key} className="bg-white rounded-lg p-4 border border-gray-200 hover:border-purple-300 transition-colors duration-200">
                                    <label className="block text-sm font-semibold text-gray-800 mb-2 capitalize">
                                        {key.replace(/_/g, " ")}
                                    </label>
                                    <input 
                                        type="text" 
                                        name={key} 
                                        value={form[key]} 
                                        onChange={handleChange}
                                        placeholder={`Enter ${key.replace(/_/g, " ")}...`}
                                        className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200"
                                    />
                                </div>
                            );
                        }
                    })}
                </div>

                {/* Action Buttons */}
                <div className="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-100">
                    <button 
                        type="button" 
                        onClick={closeModal}
                        className="flex items-center px-6 py-2.5 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition-all duration-200 font-medium"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Cancel
                    </button>
                    <button 
                        type="submit" 
                        className="flex items-center px-6 py-2.5 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl shadow-sm hover:from-purple-700 hover:to-indigo-700 transition-all duration-200 font-medium transform hover:-translate-y-0.5"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {project ? "Update Amenities" : "Create Amenities"}
                    </button>
                </div>
            </form>
        </div>
    </div>
);
};

export default AmenitiesForm;
