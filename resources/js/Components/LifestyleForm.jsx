import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const LifestyleForm = ({ project, allProjects, closeModal }) => {
    const [form, setForm] = useState({
        project_id: project?.id || "",
        family: project?.lifestyle?.family || false,
        children: project?.lifestyle?.children || false,
        elderly: project?.lifestyle?.elderly || false,
        wellness: project?.lifestyle?.wellness || false,
        community_events: project?.lifestyle?.community_events || false,
        hospitality_lounge: project?.lifestyle?.hospitality_lounge || false,
        pet_friendly: project?.lifestyle?.pet_friendly || false,
        sports_facilities: project?.lifestyle?.sports_facilities || false,
        fitness_center: project?.lifestyle?.fitness_center || false,
        cultural_activities: project?.lifestyle?.cultural_activities || false,
        recreational_spaces: project?.lifestyle?.recreational_spaces || false,
        safety_security: project?.lifestyle?.safety_security || false,
        green_spaces: project?.lifestyle?.green_spaces || false,
        shopping_convenience: project?.lifestyle?.shopping_convenience || false,
        work_from_home_friendly: project?.lifestyle?.work_from_home_friendly || false,
        entertainment_zones: project?.lifestyle?.entertainment_zones || false,
    });

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

    const handleChange = (e) => {
        const { name, type, checked } = e.target;
        setForm({ ...form, [name]: type === "checkbox" ? checked : e.target.value });
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        if (!form.project_id) {
            alert("Please select a project");
            return;
        }

        if (project) {
            Inertia.put(`/lifestyles/${project.id}`, { lifestyle: form });
        } else {
            Inertia.post("/lifestyles", { lifestyle: form });
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
                            {project ? "Edit Lifestyle Features" : "Add Lifestyle Features"}
                        </h2>
                        <p className="text-gray-600 mt-1">
                            {project ? "Update lifestyle amenities and community features" : "Select lifestyle features for your project"}
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
                                <svg className="w-4 h-4 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                        className="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200 bg-white shadow-sm"
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
                                                    className={`px-4 py-3 cursor-pointer hover:bg-orange-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${form.project_id === p.id
                                                            ? "bg-orange-50 text-orange-700 border-l-4 border-l-orange-500"
                                                            : "text-gray-700"
                                                        }`}
                                                >
                                                    <span className="font-medium">{p.name}</span>
                                                    {form.project_id === p.id && (
                                                        <svg className="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    {/* Lifestyle Features Grid */}
                    <div className="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-200">
                        <div className="flex items-center justify-between mb-4">
                            <h3 className="text-lg font-semibold text-gray-900 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Lifestyle Features
                            </h3>
                            <span className="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">
                                {Object.values(form).filter(val => val === true).length} selected
                            </span>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-h-96 overflow-y-auto p-2">
                            {Object.keys(form).filter((key) => key !== "project_id").map((key) => (
                                <label key={key} className="flex items-center p-3 bg-white rounded-lg border-2 border-gray-200 hover:border-orange-300 transition-all duration-200 cursor-pointer group">
                                    <div className="flex items-center h-5">
                                        <input
                                            type="checkbox"
                                            name={key}
                                            checked={form[key]}
                                            onChange={handleChange}
                                            className="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded"
                                        />
                                    </div>
                                    <div className="ml-3 flex-1">
                                        <span className="block text-sm font-medium text-gray-900 capitalize">
                                            {key.replace(/_/g, " ")}
                                        </span>
                                        <span className="block text-xs text-gray-500 mt-1">
                                            Lifestyle amenity
                                        </span>
                                    </div>
                                    <div className={`w-3 h-3 rounded-full transition-colors ${form[key] ? 'bg-green-400' : 'bg-gray-300 group-hover:bg-gray-400'}`}></div>
                                </label>
                            ))}
                        </div>
                    </div>

                    {/* Features Summary */}
                    <div className="bg-gray-50 rounded-xl p-4">
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                            <div className="bg-white rounded-lg p-3 border border-gray-200">
                                <div className="text-2xl font-bold text-orange-600">
                                    {Object.values(form).filter(val => val === true).length}
                                </div>
                                <div className="text-xs text-gray-600">Selected Features</div>
                            </div>
                            <div className="bg-white rounded-lg p-3 border border-gray-200">
                                <div className="text-2xl font-bold text-gray-600">
                                    {Object.keys(form).filter(key => key !== "project_id").length}
                                </div>
                                <div className="text-xs text-gray-600">Total Available</div>
                            </div>
                            <div className="bg-white rounded-lg p-3 border border-gray-200">
                                <div className="text-2xl font-bold text-blue-600">
                                    {Math.round((Object.values(form).filter(val => val === true).length / Object.keys(form).filter(key => key !== "project_id").length) * 100)}%
                                </div>
                                <div className="text-xs text-gray-600">Completion</div>
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
                        className="flex items-center px-6 py-2.5 bg-gradient-to-r from-purple-600 to-indigo-600 text-white rounded-xl shadow-sm hover:from-purple-700 hover:to-indigo-700 transition-all duration-200 font-medium transform hover:-translate-y-0.5"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {project ? "Update Lifestyle Features" : "Create  Lifestyle Features"}
                    </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default LifestyleForm;
