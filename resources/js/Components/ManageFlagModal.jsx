import React, { useState, useEffect, useRef } from "react";
import { Inertia } from "@inertiajs/inertia";

const ManageFlagModal = ({ showModal, closeModal, project, projects }) => {
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

    // If a specific project is passed, auto-select it
    useEffect(() => {
        if (project) {
            const projectId = project._id || project.id;
            setProjectId(projectId);
            const proj = projects.find(p => String(p._id || p.id) === String(projectId));
            if (proj) {
                setFlags({
                    status: proj.project?.status || "inactive",
                    featured: proj.featured || false,
                    emerging_property: proj.emerging_property || false,
                    emerging_area: proj.emerging_area || false,
                });
                setSearch(proj.project?.name || "");
            }
        } else {
            // Reset if no project is passed
            setProjectId("");
            setSearch("");
            setFlags({
                status: "inactive",
                featured: false,
                emerging_property: false,
                emerging_area: false,
            });
        }
    }, [project, projects]);

    // Load flags when projectId changes (manual selection)
    useEffect(() => {
        if (projectId && !project) {
            const proj = projects.find(p => String(p._id || p.id) === String(projectId));
            if (proj) {
                setFlags({
                    status: proj.project?.status || "inactive",
                    featured: proj.featured || false,
                    emerging_property: proj.emerging_property || false,
                    emerging_area: proj.emerging_area || false,
                });
                setSearch(proj.project?.name || "");
            }
        }
    }, [projectId, projects, project]);

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
        if (!projectId) return;
        
        Inertia.post(route("projects.flags.update", projectId), flags, {
            preserveState: true,
            preserveScroll: true,
            onSuccess: () => {
                closeModal();
            },
        });
    };

    const filteredProjects = projects.filter(p =>
        p.project?.name?.toLowerCase().includes(search.toLowerCase())
    );

    if (!showModal) return null;

    return (
        <div className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
            <div
                ref={modalRef}
                className="bg-white rounded-2xl shadow-2xl w-full max-w-md p-6 relative transform transition-transform scale-100 animate-fadeIn"
            >
                <div className="flex justify-between items-center mb-4">
                    <h2 className="text-xl font-semibold text-gray-900">
                        {project ? `Manage Flags - ${project.project?.name}` : 'Manage Project Flags'}
                    </h2>
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
                    {/* Searchable Project Select - Only show if no specific project is passed */}
                    {!project && (
                        <div ref={dropdownRef} className="relative">
                            <label className="block text-sm font-medium text-gray-700 mb-1">Select Project</label>
                            <input
                                type="text"
                                value={search}
                                onChange={(e) => { setSearch(e.target.value); setIsDropdownOpen(true); }}
                                onFocus={() => setIsDropdownOpen(true)}
                                placeholder="Type to search projects..."
                                className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400"
                            />
                            {isDropdownOpen && (
                                <div className="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto">
                                    {filteredProjects.length > 0 ? (
                                        filteredProjects.map(p => (
                                            <div
                                                key={p._id || p.id}
                                                onClick={() => handleProjectSelect(p._id || p.id, p.project?.name)}
                                                className="px-3 py-2 cursor-pointer hover:bg-indigo-50 border-b border-gray-100 last:border-b-0"
                                            >
                                                {p.project?.name}
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
                    )}

                    {/* Flags */}
                    {projectId && (
                        <>
                            <div>
                                <label className="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select
                                    name="status"
                                    value={flags.status}
                                    onChange={handleChange}
                                    className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400"
                                >
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>

                            <div className="space-y-3 mt-4">
                                <label className="text-sm font-medium text-gray-700">Feature Flags</label>
                                
                                <div className="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                                    <div>
                                        <div className="font-medium text-gray-900">Featured Project</div>
                                        <div className="text-xs text-gray-600">Highlight this project as featured</div>
                                    </div>
                                    <label className="inline-flex items-center">
                                        <input 
                                            type="checkbox" 
                                            name="featured" 
                                            checked={flags.featured} 
                                            onChange={handleChange}
                                            className="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 h-5 w-5"
                                        />
                                    </label>
                                </div>

                                <div className="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                                    <div>
                                        <div className="font-medium text-gray-900">Emerging Property</div>
                                        <div className="text-xs text-gray-600">Mark as emerging property</div>
                                    </div>
                                    <label className="inline-flex items-center">
                                        <input 
                                            type="checkbox" 
                                            name="emerging_property" 
                                            checked={flags.emerging_property} 
                                            onChange={handleChange}
                                            className="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 h-5 w-5"
                                        />
                                    </label>
                                </div>

                                <div className="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                                    <div>
                                        <div className="font-medium text-gray-900">Emerging Area</div>
                                        <div className="text-xs text-gray-600">Mark as emerging area</div>
                                    </div>
                                    <label className="inline-flex items-center">
                                        <input 
                                            type="checkbox" 
                                            name="emerging_area" 
                                            checked={flags.emerging_area} 
                                            onChange={handleChange}
                                            className="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 h-5 w-5"
                                        />
                                    </label>
                                </div>
                            </div>
                        </>
                    )}

                    <div className="flex justify-end gap-3 mt-6">
                        <button
                            type="button"
                            onClick={closeModal}
                            className="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200"
                        >
                            Cancel
                        </button>
                        <button
                            type="submit"
                            className="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                            disabled={!projectId}
                        >
                            Save Flags
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
};

export default ManageFlagModal;