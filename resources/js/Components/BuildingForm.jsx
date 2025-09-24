import React, { useState, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const BuildingForm = ({ project: configData, closeModal, allProjects = [] }) => {
    const [form, setForm] = useState({
        project_id: configData?.id || "",
        entry_direction: configData?.building?.entry_direction || "",
        common_lighting: configData?.building?.common_lighting || "",
        number_of_lifts: configData?.building?.number_of_lifts || "",
        direction_info: configData?.building?.direction_info || "",
        security: configData?.building?.security || "",
    });

    const [errors, setErrors] = useState({});
    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const [projects, setProjects] = useState(allProjects);

    const filteredProjects = projects.filter((p) =>
        p.name.toLowerCase().includes(search.toLowerCase())
    );

    const handleChange = (e) => {
        const { name, value } = e.target;
        setForm(prev => ({ ...prev, [name]: value }));

        if (name === "project_id") {
            setIsDropdownOpen(false);
            const selectedProject = filteredProjects.find(p => p.id === value);
            if (selectedProject) setSearch(selectedProject.name);
        }
    };

    const handleSearchChange = (e) => setSearch(e.target.value);

    const handleSubmit = (e) => {
        e.preventDefault();
        if (!form.project_id) {
            setErrors({ project_id: "Please select a project" });
            return;
        }

        const url = configData
            ? `/projects/${form.project_id}/building` // edit
            : `/projects/${form.project_id}/building`; // create

        const method = configData ? "put" : "post";
   
        Inertia[method](url, { building: form }, {
            onError: (err) => setErrors(err),
            onSuccess: () => closeModal(),
        });
    };

    const handleDelete = () => {
        if (confirm("Are you sure you want to delete this building info?")) {
            Inertia.delete(`/projects/${form.project_id}/building`, {
                onSuccess: () => closeModal(),
            });
        }
    };

    return (
    <div className="bg-white rounded-xl shadow-sm border border-gray-100">
        {/* Header */}
        <div className="px-8 py-6 border-b border-gray-100 bg-gradient-to-r from-gray-50 to-white">
            <div className="flex items-center justify-between">
                <div>
                    <h2 className="text-2xl font-bold text-gray-900">
                        {configData ? "Edit Building Information" : "Create Building Information"}
                    </h2>
                    <p className="text-gray-600 mt-1">
                        {configData ? "Update existing building details" : "Add new building specifications"}
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
                {!configData && (
                    <div className="group">
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
                                        filteredProjects.map(project => (
                                            <div
                                                key={project.id}
                                                onClick={() => {
                                                    handleChange({
                                                        target: { name: "project_id", value: project.id }
                                                    });
                                                    setIsDropdownOpen(false);
                                                    setSearch(project.name);
                                                }}
                                                className={`px-4 py-3 cursor-pointer hover:bg-indigo-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${
                                                    form.project_id === project.id 
                                                        ? "bg-indigo-50 text-indigo-700 border-l-4 border-l-indigo-500" 
                                                        : "text-gray-700"
                                                }`}
                                            >
                                                <span className="font-medium">{project.name}</span>
                                                {form.project_id === project.id && (
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
                        {errors.project_id && (
                            <div className="flex items-center mt-2 text-red-600 text-sm">
                                <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {errors.project_id}
                            </div>
                        )}
                    </div>
                )}

                {/* Building Fields Grid */}
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    {["entry_direction", "common_lighting", "number_of_lifts", "direction_info", "security"].map((key) => (
                        <div key={key} className={key === "direction_info" || key === "security" ? "lg:col-span-2" : ""}>
                            <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                <svg className="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                {key.split('_').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ')}
                            </label>
                            <div className="relative">
                                <input
                                    type="text"
                                    name={key}
                                    value={form[key]}
                                    onChange={handleChange}
                                    placeholder={`Enter ${key.split('_').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ')}...`}
                                    className={`w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400 ${
                                        errors[`building.${key}`] 
                                            ? "border-red-300 bg-red-50" 
                                            : "border-gray-300 hover:border-gray-400"
                                    }`}
                                />
                            </div>
                            {errors[`building.${key}`] && (
                                <div className="flex items-center mt-2 text-red-600 text-sm">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {errors[`building.${key}`]}
                                </div>
                            )}
                        </div>
                    ))}
                </div>

                {/* Action Buttons */}
                <div className="flex flex-col sm:flex-row justify-end space-y-3 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-100">
                    <div className="flex space-x-3 order-2 sm:order-1">
                        {configData && (
                            <button 
                                type="button" 
                                onClick={handleDelete}
                                className="flex items-center px-6 py-2.5 bg-red-50 text-red-600 border border-red-200 rounded-xl hover:bg-red-100 transition-all duration-200 font-medium"
                            >
                                <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Delete
                            </button>
                        )}
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
                    </div>
                    <button 
                        type="submit" 
                        className="flex items-center px-6 py-2.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl shadow-sm hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 font-medium transform hover:-translate-y-0.5 order-1 sm:order-2 mb-3 sm:mb-0"
                    >
                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                        </svg>
                        {configData ? "Update Building Info" : "Create Building Info"}
                    </button>
                </div>
            </form>
        </div>
    </div>
);
};

export default BuildingForm;
