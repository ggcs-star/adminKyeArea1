import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const ParkingForm = ({ project, allProjects, closeModal }) => {
    const [form, setForm] = useState({
        project_id: project?.id || "",
        ev_charging: project?.parking?.ev_charging || false,
        slot_info: project?.parking?.slot_info || "",
        basement_ground: project?.parking?.basement_ground || "",
        total_parking_slots: project?.parking?.total_parking_slots || "",
        two_wheeler_parking: project?.parking?.two_wheeler_parking || "",
        four_wheeler_parking: project?.parking?.four_wheeler_parking || "",
        visitor_parking: project?.parking?.visitor_parking || "",
        covered_parking: project?.parking?.covered_parking || "",
        car_wash_area: project?.parking?.car_wash_area || false,
        disabled_friendly: project?.parking?.disabled_friendly || false,
        cctv_security: project?.parking?.cctv_security || false,
    });

    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const dropdownRef = useRef();

    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setForm(prev => ({ ...prev, [name]: type === "checkbox" ? checked : value }));
    };

    const handleSearchChange = (e) => {
        setSearch(e.target.value);
        setIsDropdownOpen(true);
    };

    const handleProjectSelect = (id, name) => {
        setForm(prev => ({ ...prev, project_id: id }));
        setSearch(name);
        setIsDropdownOpen(false);
    };

    const filteredProjects = allProjects.filter(p =>
        p.name.toLowerCase().includes(search.toLowerCase())
    );

    const handleSubmit = (e) => {
        e.preventDefault();
        if (project) {
            Inertia.put(`/projects/${project.id}/parking`, { parking: form });
        } else {
            Inertia.post(`/projects/${form.project_id}/parking`, { parking: form });
        }
        closeModal();
    };

    // Close dropdown on outside click
    useEffect(() => {
        const handleClickOutside = (event) => {
            if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
                setIsDropdownOpen(false);
            }
        };
        document.addEventListener("mousedown", handleClickOutside);
        return () => document.removeEventListener("mousedown", handleClickOutside);
    }, []);

   return (
    <div className="bg-white rounded-xl shadow-sm border border-gray-100">
        {/* Header */}
        <div className="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
            <div className="flex items-center justify-between">
                <div>
                    <h2 className="text-2xl font-bold text-gray-900">
                        {project ? "Edit Parking Information" : "Create Parking Information"}
                    </h2>
                    <p className="text-gray-600 mt-1">
                        {project ? "Update parking details and facilities" : "Add new parking specifications"}
                    </p>
                </div>
                <button
                    onClick={closeModal}
                    className="p-2 hover:bg-gray-100 rounded-lg transition-colors duration-200"
                    title="Close"
                >
                    <svg className="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
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
                            <svg className="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" />
                            </svg>
                            Select Project
                        </label>
                        <div className="relative">
                            <div className="relative">
                                <input
                                    type="text"
                                    value={search}
                                    onChange={handleSearchChange}
                                    placeholder="Search projects by name..."
                                    onFocus={() => setIsDropdownOpen(true)}
                                    className="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 bg-white shadow-sm"
                                />
                                <svg className="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            
                            {isDropdownOpen && (
                                <div className="absolute z-10 w-full mt-2 bg-white border border-gray-200 rounded-xl shadow-lg max-h-60 overflow-y-auto">
                                    {filteredProjects.length > 0 ? (
                                        filteredProjects.map(p => (
                                            <div
                                                key={p.id}
                                                onClick={() => handleProjectSelect(p.id, p.name)}
                                                className={`px-4 py-3 cursor-pointer hover:bg-indigo-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${
                                                    form.project_id === p.id 
                                                        ? "bg-indigo-50 text-indigo-700 border-l-4 border-l-indigo-500" 
                                                        : "text-gray-700"
                                                }`}
                                            >
                                                <span className="font-medium">{p.name}</span>
                                                {form.project_id === p.id && (
                                                    <svg className="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                {/* Parking Fields Grid */}
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    {/* Slot Information */}
                    <div className="lg:col-span-2">
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <svg className="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Slot Information
                        </label>
                        <input
                            type="text"
                            name="slot_info"
                            value={form.slot_info}
                            onChange={handleChange}
                            placeholder="Enter slot configuration details..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Basement / Ground */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <svg className="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            </svg>
                            Basement / Ground
                        </label>
                        <input
                            type="text"
                            name="basement_ground"
                            value={form.basement_ground}
                            onChange={handleChange}
                            placeholder="Enter basement or ground details..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Total Parking Slots */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <svg className="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Total Parking Slots
                        </label>
                        <input
                            type="number"
                            name="total_parking_slots"
                            value={form.total_parking_slots}
                            onChange={handleChange}
                            placeholder="Enter total number of slots..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Two Wheeler Parking */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <span className="text-lg mr-2">🏍️</span>
                            Two Wheeler Parking
                        </label>
                        <input
                            type="number"
                            name="two_wheeler_parking"
                            value={form.two_wheeler_parking}
                            onChange={handleChange}
                            placeholder="Number of two-wheeler slots..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Four Wheeler Parking */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <span className="text-lg mr-2">🚗</span>
                            Four Wheeler Parking
                        </label>
                        <input
                            type="number"
                            name="four_wheeler_parking"
                            value={form.four_wheeler_parking}
                            onChange={handleChange}
                            placeholder="Number of four-wheeler slots..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Visitor Parking */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <span className="text-lg mr-2">👥</span>
                            Visitor Parking
                        </label>
                        <input
                            type="number"
                            name="visitor_parking"
                            value={form.visitor_parking}
                            onChange={handleChange}
                            placeholder="Number of visitor slots..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>

                    {/* Covered Parking */}
                    <div>
                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                            <span className="text-lg mr-2">🏢</span>
                            Covered Parking
                        </label>
                        <input
                            type="text"
                            name="covered_parking"
                            value={form.covered_parking}
                            onChange={handleChange}
                            placeholder="Covered parking details..."
                            className="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                        />
                    </div>
                </div>

                {/* Checkbox Features Section */}
                <div className="bg-gray-50 rounded-xl p-6">
                    <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <svg className="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Additional Features
                    </h3>
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {[
                            { key: 'ev_charging', label: 'EV Charging', icon: '⚡' },
                            { key: 'car_wash_area', label: 'Car Wash Area', icon: '🧼' },
                            { key: 'disabled_friendly', label: 'Disabled Friendly', icon: '♿' },
                            { key: 'cctv_security', label: 'CCTV Security', icon: '📹' }
                        ].map((feature) => (
                            <label key={feature.key} className="flex items-center p-3 bg-white rounded-lg border border-gray-200 hover:border-indigo-300 transition-colors duration-200 cursor-pointer">
                                <input
                                    type="checkbox"
                                    name={feature.key}
                                    checked={form[feature.key]}
                                    onChange={handleChange}
                                    className="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                                />
                                <span className="text-2xl ml-3 mr-3">{feature.icon}</span>
                                <span className="text-sm font-medium text-gray-700">{feature.label}</span>
                            </label>
                        ))}
                    </div>
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
                        className="flex items-center px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl shadow-sm hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 font-medium transform hover:-translate-y-0.5"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {project ? "Update Parking Info" : "Create Parking Info"}
                    </button>
                </div>
            </form>
        </div>
    </div>
);
};

export default ParkingForm;
