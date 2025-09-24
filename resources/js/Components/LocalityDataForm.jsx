import React, { useState, useRef, useEffect } from "react";
import { Inertia } from "@inertiajs/inertia";

const LocalityDataForm = ({ project, allProjects, closeModal }) => {
    const [form, setForm] = useState({
        project_id: project?.id || "",
        name: project?.localityData?.name || "",
        city: project?.localityData?.city || "",
        state: project?.localityData?.state || "",
        pinCode: project?.localityData?.pinCode || "",
        growth: project?.localityData?.growth || "",
        growthPeriod: project?.localityData?.growthPeriod || "",
        avgRate: project?.localityData?.avgRate || "",
        nearestMetro: project?.localityData?.nearestMetro || "",
        nearestBusStop: project?.localityData?.nearestBusStop || "",
        schools: project?.localityData?.schools || "",
        hospitals: project?.localityData?.hospitals || "",
        shoppingCenters: project?.localityData?.shoppingCenters || "",
        parks: project?.localityData?.parks || "",
        crimeRate: project?.localityData?.crimeRate || "",
        avgRentalYield: project?.localityData?.avgRentalYield || "",
        futureDevelopments: project?.localityData?.futureDevelopments || "",
        connectivity: project?.localityData?.connectivity || "",
        walkScore: project?.localityData?.walkScore || "",
        transitScore: project?.localityData?.transitScore || "",
    });

    const [search, setSearch] = useState(project?.project?.name || "");
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
        const { name, value } = e.target;
        setForm({ ...form, [name]: value });
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        if (!form.project_id) {
            alert("Please select a project");
            return;
        }

        const payload = { localityData: { ...form } };

        if (project) {
            Inertia.put(`/localityData/${project.id}`, payload);
        } else {
            Inertia.post("/localityData", payload);
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
                            {project ? "Edit Locality Data" : "Add Locality Data"}
                        </h2>
                        <p className="text-gray-600 mt-1">
                            {project ? "Update neighborhood information and location details" : "Add comprehensive locality information for the project"}
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
                                <svg className="w-4 h-4 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                        className="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 bg-white shadow-sm"
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
                                                    className={`px-4 py-3 cursor-pointer hover:bg-green-50 transition-all duration-200 border-b border-gray-100 last:border-b-0 flex items-center justify-between ${form.project_id === p.id
                                                            ? "bg-green-50 text-green-700 border-l-4 border-l-green-500"
                                                            : "text-gray-700"
                                                        }`}
                                                >
                                                    <span className="font-medium">{p.name}</span>
                                                    {form.project_id === p.id && (
                                                        <svg className="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                    {/* Locality Data Fields - Organized by Categories */}
                    <div className="space-y-6">
                        {/* Basic Information */}
                        <div className="bg-gradient-to-r from-green-50 to-teal-50 rounded-xl p-6 border border-green-200">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Basic Location Information
                            </h3>
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                {[
                                    { label: "Locality Name", name: "name", icon: "🏘️", placeholder: "Enter locality name" },
                                    { label: "City", name: "city", icon: "🏙️", placeholder: "Enter city" },
                                    { label: "State", name: "state", icon: "🗺️", placeholder: "Enter state" },
                                    { label: "Pin Code", name: "pinCode", icon: "📮", placeholder: "Enter pin code" },
                                ].map((field) => (
                                    <div key={field.name}>
                                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                            <span className="text-lg mr-2">{field.icon}</span>
                                            {field.label}
                                        </label>
                                        <input
                                            type="text"
                                            name={field.name}
                                            value={form[field.name]}
                                            onChange={handleChange}
                                            placeholder={field.placeholder}
                                            className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
                                        />
                                    </div>
                                ))}
                            </div>
                        </div>

                        {/* Real Estate Metrics */}
                        <div className="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                </svg>
                                Real Estate Metrics
                            </h3>
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                {[
                                    { label: "Growth Rate", name: "growth", icon: "📈", placeholder: "e.g., 4.30%" },
                                    { label: "Growth Period", name: "growthPeriod", icon: "⏰", placeholder: "e.g., Last 1 Year" },
                                    { label: "Average Rate", name: "avgRate", icon: "💰", placeholder: "e.g., ₹5.2 K/sq.ft" },
                                    { label: "Average Rental Yield", name: "avgRentalYield", icon: "🏠", placeholder: "Enter avg rental yield" },
                                ].map((field) => (
                                    <div key={field.name}>
                                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                            <span className="text-lg mr-2">{field.icon}</span>
                                            {field.label}
                                        </label>
                                        <input
                                            type="text"
                                            name={field.name}
                                            value={form[field.name]}
                                            onChange={handleChange}
                                            placeholder={field.placeholder}
                                            className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                        />
                                    </div>
                                ))}
                            </div>
                        </div>

                        {/* Transportation */}
                        <div className="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                                Transportation & Connectivity
                            </h3>
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                {[
                                    { label: "Nearest Metro", name: "nearestMetro", icon: "🚇", placeholder: "Enter nearest metro" },
                                    { label: "Nearest Bus Stop", name: "nearestBusStop", icon: "🚌", placeholder: "Enter nearest bus stop" },
                                    { label: "Connectivity", name: "connectivity", icon: "🛣️", placeholder: "Enter connectivity info" },
                                    { label: "Walk Score", name: "walkScore", icon: "🚶", placeholder: "Enter walk score", type: "number" },
                                    { label: "Transit Score", name: "transitScore", icon: "🚉", placeholder: "Enter transit score", type: "number" },
                                ].map((field) => (
                                    <div key={field.name}>
                                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                            <span className="text-lg mr-2">{field.icon}</span>
                                            {field.label}
                                        </label>
                                        <input
                                            type={field.type || "text"}
                                            name={field.name}
                                            value={form[field.name]}
                                            onChange={handleChange}
                                            placeholder={field.placeholder}
                                            className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200"
                                        />
                                    </div>
                                ))}
                            </div>
                        </div>

                        {/* Amenities & Infrastructure */}
                        <div className="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl p-6 border border-orange-200">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                Amenities & Infrastructure
                            </h3>
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                {[
                                    { label: "Schools", name: "schools", icon: "🏫", placeholder: "Number of schools", type: "number" },
                                    { label: "Hospitals", name: "hospitals", icon: "🏥", placeholder: "Number of hospitals", type: "number" },
                                    { label: "Shopping Centers", name: "shoppingCenters", icon: "🛍️", placeholder: "Number of shopping centers", type: "number" },
                                    { label: "Parks", name: "parks", icon: "🌳", placeholder: "Number of parks", type: "number" },
                                ].map((field) => (
                                    <div key={field.name}>
                                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                            <span className="text-lg mr-2">{field.icon}</span>
                                            {field.label}
                                        </label>
                                        <input
                                            type={field.type}
                                            name={field.name}
                                            value={form[field.name]}
                                            onChange={handleChange}
                                            placeholder={field.placeholder}
                                            className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                                        />
                                    </div>
                                ))}
                            </div>
                        </div>

                        {/* Safety & Future */}
                        <div className="bg-gradient-to-r from-gray-50 to-blue-gray-50 rounded-xl p-6 border border-gray-200">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                <svg className="w-5 h-5 mr-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                Safety & Future Developments
                            </h3>
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                {[
                                    { label: "Crime Rate", name: "crimeRate", icon: "🚨", placeholder: "Enter crime rate" },
                                    { label: "Future Developments", name: "futureDevelopments", icon: "🚧", placeholder: "Enter future developments" },
                                ].map((field) => (
                                    <div key={field.name} className={field.name === 'futureDevelopments' ? 'md:col-span-2' : ''}>
                                        <label className="block text-sm font-semibold text-gray-800 mb-2 flex items-center">
                                            <span className="text-lg mr-2">{field.icon}</span>
                                            {field.label}
                                        </label>
                                        <input
                                            type="text"
                                            name={field.name}
                                            value={form[field.name]}
                                            onChange={handleChange}
                                            placeholder={field.placeholder}
                                            className="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 transition-all duration-200"
                                        />
                                    </div>
                                ))}
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
                        {project ? "Update Locality Data" : "Create Locality Data"}
                    </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default LocalityDataForm;
