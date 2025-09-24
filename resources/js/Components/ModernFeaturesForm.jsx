import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const ModernFeaturesForm = ({ project, allProjects, closeModal }) => {
    const [form, setForm] = useState({
        project_id: project?._id || "",
        smart_home_automation: project?.modern_features?.smart_home_automation || "",
        solar_pv: project?.modern_features?.solar_pv || false,
        modular_kitchen: project?.modern_features?.modular_kitchen || "",
        designer_lighting: project?.modern_features?.designer_lighting || "",
        security_monitoring: project?.modern_features?.security_monitoring || "",
        video_door_phone: project?.modern_features?.video_door_phone || "",
        digital_lock: project?.modern_features?.digital_lock || "",
        energy_efficient_appliances: project?.modern_features?.energy_efficient_appliances || "",
        ev_charging: project?.modern_features?.ev_charging || false,
        high_speed_internet: project?.modern_features?.high_speed_internet || "",
        water_purification: project?.modern_features?.water_purification || "",
        climate_control: project?.modern_features?.climate_control || "",
        green_building_certification: project?.modern_features?.green_building_certification || "",
    });
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setForm({ ...form, [name]: type === "checkbox" ? checked : value });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        if (project) {
            Inertia.put(`/modern-features/${project.id}/update`, { modern_features: form });
        } else {
            Inertia.post(`/modern-features/${form.project_id}/store`, { modern_features: form });
        }
        closeModal();
        // console.log(project.id);
    };

    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const dropdownRef = useRef(null);

    const filteredProjects = allProjects.filter(
    (p) => p.name && p.name.toLowerCase().includes(search.toLowerCase())
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



   return (
    <div className="bg-white rounded-xl shadow-sm border border-gray-100">
        {/* Header */}
        <div className="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
            <div className="flex items-center justify-between">
                <div>
                    <h2 className="text-2xl font-bold text-gray-900">
                        {project ? "Edit Modern Features" : "Add Modern Features"}
                    </h2>
                    <p className="text-gray-600 mt-1">
                        {project ? "Update cutting-edge features and technologies" : "Configure modern features for your project"}
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
                            <svg className="w-4 h-4 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2v16z" />
                            </svg>
                            Select Project
                        </label>
                        <div className="relative">
                            <div className="relative">
                                <input
                                    type="text"
                                    value={search}
                                    onChange={(e) => {
                                        setSearch(e.target.value);
                                        setIsDropdownOpen(true);
                                    }}
                                    placeholder="Search projects by name..."
                                    onFocus={() => setIsDropdownOpen(true)}
                                    className="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 bg-white shadow-sm"
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
                                                className={`px-4 py-3 cursor-pointer hover:bg-blue-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${
                                                    form.project_id === p.id 
                                                        ? "bg-blue-50 text-blue-700 border-l-4 border-l-blue-500" 
                                                        : "text-gray-700"
                                                }`}
                                            >
                                                <span className="font-medium">{p.name}</span>
                                                {form.project_id === p.id && (
                                                    <svg className="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                {/* Modern Features Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {Object.keys(form).map((key) => {
                        if (key === "project_id") return null;

                        if (typeof form[key] === "boolean") {
                            return (
                                <div key={key} className="flex items-center p-4 bg-gradient-to-r from-gray-50 to-blue-50 rounded-xl border border-gray-200 hover:border-blue-300 transition-all duration-200">
                                    <div className="flex items-center h-5">
                                        <input 
                                            type="checkbox" 
                                            name={key} 
                                            checked={form[key]} 
                                            onChange={handleChange}
                                            className="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                                        />
                                    </div>
                                    <label className="ml-3 flex-1">
                                        <span className="block text-sm font-medium text-gray-900 capitalize">
                                            {key.replace(/_/g, " ")}
                                        </span>
                                        <span className="block text-xs text-gray-500 mt-1">
                                            Enable this modern feature
                                        </span>
                                    </label>
                                    <div className={`w-3 h-3 rounded-full ${form[key] ? 'bg-green-400' : 'bg-gray-300'}`}></div>
                                </div>
                            );
                        } else {
                            return (
                                <div key={key} className="bg-white rounded-xl p-4 border border-gray-200 hover:border-blue-300 transition-all duration-200">
                                    <label className="block text-sm font-semibold text-gray-800 mb-2 capitalize flex items-center">
                                        <svg className="w-4 h-4 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        {key.replace(/_/g, " ")}
                                    </label>
                                    <input 
                                        type="text" 
                                        name={key} 
                                        value={form[key]} 
                                        onChange={handleChange}
                                        placeholder={`Enter ${key.replace(/_/g, " ")} details...`}
                                        className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                    />
                                    <div className="text-xs text-gray-400 mt-1">
                                        {form[key]?.length || 0} characters
                                    </div>
                                </div>
                            );
                        }
                    })}
                </div>

                {/* Features Summary */}
                <div className="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                    <h3 className="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                        <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Features Summary
                    </h3>
                    <div className="grid grid-cols-2 gap-4 text-sm">
                        <div className="flex items-center">
                            <span className="text-green-600 font-medium mr-2">
                                {Object.values(form).filter(val => val === true).length}
                            </span>
                            <span className="text-gray-600">Enabled features</span>
                        </div>
                        <div className="flex items-center">
                            <span className="text-blue-600 font-medium mr-2">
                                {Object.keys(form).filter(key => key !== 'project_id' && typeof form[key] === 'string').length}
                            </span>
                            <span className="text-gray-600">Text configurations</span>
                        </div>
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
                        className="flex items-center px-6 py-2.5 bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-xl shadow-sm hover:from-blue-700 hover:to-cyan-700 transition-all duration-200 font-medium transform hover:-translate-y-0.5"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {project ? "Update Modern Features" : "Create Modern Features"}
                    </button>
                </div>
            </form>
        </div>
    </div>
);
};

export default ModernFeaturesForm;
