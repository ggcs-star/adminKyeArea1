import React, { useState, useEffect, useRef } from "react";
import { Inertia } from "@inertiajs/inertia";

const ManageFlagModal = ({ showModal, closeModal, projects }) => {
    const [projectId, setProjectId] = useState("");
    const [flags, setFlags] = useState({
        status: "inactive",
        featured: false,
        emerging_property: false,
        emerging_area: false,
    });

    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const modalRef = useRef();
    const dropdownRef = useRef();

    // Close modal if click outside
    const handleClickOutside = (e) => {
        if (modalRef.current && !modalRef.current.contains(e.target)) {
            closeModal();
        }
        if (dropdownRef.current && !dropdownRef.current.contains(e.target)) {
            setIsDropdownOpen(false);
        }
    };

    useEffect(() => {
        if (showModal) {
            document.addEventListener("mousedown", handleClickOutside);
        } else {
            document.removeEventListener("mousedown", handleClickOutside);
        }
        return () => document.removeEventListener("mousedown", handleClickOutside);
    }, [showModal]);

    // Load flags when projectId changes
    useEffect(() => {
        if (projectId) {
            const proj = projects.find(p => String(p.id) === String(projectId));
            if (proj) {
                setFlags({
                    status: proj.project.status || "inactive",
                    featured: proj.featured || false,
                    emerging_property: proj.emerging_property || false,
                    emerging_area: proj.emerging_area || false,
                });
                setSearch(proj.project.name);
            }
        } else {
            setSearch("");
        }
    }, [projectId, projects]);

    const handleProjectSelect = (id, name) => {
        setProjectId(id);
        setSearch(name);
        setIsDropdownOpen(false);
    };

    const handleChange = (e) => {
        const { name, type, checked, value } = e.target;
        setFlags(prev => ({
            ...prev,
            [name]: type === "checkbox" ? checked : value,
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        Inertia.post(route("projects.flags.update", projectId), flags, {
            onSuccess: () => closeModal(),
        });
    };

    const filteredProjects = projects.filter(p =>
        p.project.name.toLowerCase().includes(search.toLowerCase())
    );

    if (!showModal) return null;

    return (
        <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
            <div
                ref={modalRef}
                className="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative transform transition-transform scale-100 animate-fadeIn"
            >
                <div className="flex justify-between items-center mb-4">
                    <h2 className="text-xl font-semibold text-gray-900">Manage Flags</h2>
                    <button
                        onClick={closeModal}
                        className="text-gray-400 hover:text-gray-600 p-1 rounded-full transition"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            className="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <form onSubmit={handleSubmit} className="space-y-4">
                    {/* Searchable Project Select */}
                    <div ref={dropdownRef}>
                        <label className="block text-sm font-medium text-gray-700 mb-1">Select Project</label>
                        <input
                            type="text"
                            value={search}
                            onChange={(e) => { setSearch(e.target.value); setIsDropdownOpen(true); }}
                            onFocus={() => setIsDropdownOpen(true)}
                            placeholder="Type to search projects..."
                            className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400"
                        />
                        {isDropdownOpen && (
                            <div className="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto">
                                {filteredProjects.length > 0 ? (
                                    filteredProjects.map(p => (
                                        <div
                                            key={p.id}
                                            onClick={() => handleProjectSelect(p.id, p.project.name)}
                                            className="px-3 py-2 cursor-pointer hover:bg-indigo-50"
                                        >
                                            {p.project.name}
                                        </div>
                                    ))
                                ) : (
                                    <div className="px-3 py-2 text-gray-500 italic">
                                        No projects found
                                    </div>
                                )}
                            </div>
                        )}
                    </div>

                    {/* Flags */}
                    {projectId && (
                        <>
                            <div>
                                <label className="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select
                                    name="status"
                                    value={flags.status}
                                    onChange={handleChange}
                                    className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400"
                                >
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div className="flex flex-col gap-2 mt-2">
                                <label className="flex items-center space-x-2">
                                    <input type="checkbox" name="featured" checked={flags.featured} onChange={handleChange} />
                                    <span>Featured</span>
                                </label>
                                <label className="flex items-center space-x-2">
                                    <input type="checkbox" name="emerging_property" checked={flags.emerging_property} onChange={handleChange} />
                                    <span>Emerging Property</span>
                                </label>
                                <label className="flex items-center space-x-2">
                                    <input type="checkbox" name="emerging_area" checked={flags.emerging_area} onChange={handleChange} />
                                    <span>Emerging Area</span>
                                </label>
                            </div>
                        </>
                    )}

                    <div className="flex justify-end gap-3 mt-6">
                        <button
                            type="button"
                            onClick={closeModal}
                            className="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            className="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                            disabled={!projectId}
                        >
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default ManageFlagModal;
