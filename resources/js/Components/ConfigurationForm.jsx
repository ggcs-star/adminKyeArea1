import React, { useState, useEffect, useRef } from "react";
import { Inertia } from "@inertiajs/inertia";
import { usePage } from "@inertiajs/react";

const ConfigurationForm = ({ closeModal, configData }) => {
    const { projects } = usePage().props;

    const [form, setForm] = useState({
        project_id: "",
        type: "",
        type_price: "",
    });

    const [bhks, setBhks] = useState([]);
    const [expandedBhk, setExpandedBhk] = useState(null);
    const [newRoomInputs, setNewRoomInputs] = useState({});
    const [search, setSearch] = useState("");
    const [isDropdownOpen, setIsDropdownOpen] = useState(false);
    const dropdownRef = useRef(null);

    // --- Normalization helpers ---
    const normalizeBhk = (name) => {
        if (!name) return "";
        name = name.toUpperCase().replace(/\s+/g, "").replace("BHk", "BHK");
        return name;
    };

    const normalizeRoom = (name) => {
        if (!name) return "";
        return name.toLowerCase().trim().replace(/\s+/g, "_").replace(/[^a-z0-9_]/g, "");
    };

    // --- Populate for edit ---
    useEffect(() => {
        if (configData?.typeData) {
            setForm({
                project_id: configData.project_id || "",
                type: configData.typeKey || "",
                type_price: configData.typeData.price || "",
            });

            const loadedBhks = Object.entries(configData.typeData || {})
                .filter(([key]) => key !== "price")
                .map(([name, data]) => ({
                    name: name,
                    price: data?.price || "",
                    size: data?.size || "",
                    date: data?.date || "",
                    rooms: data?.rooms || {},
                    imageslider: data?.imageslider || [],
                    floorPlans: data?.floorPlans || [],
                    galleryImages: data?.galleryImages || [],
                }));

            setBhks(loadedBhks);
            setSearch(
                projects.find((p) => p.id === configData.project_id)?.name || ""
            );
        } else {
            setForm({ project_id: "", type: "", type_price: "" });
            setBhks([]);
            setSearch("");
        }
    }, [configData, projects]);

    // --- Project dropdown ---
    const filteredProjects = projects.filter((p) =>
        p.name.toLowerCase().includes(search.toLowerCase())
    );

    const handleProjectSelect = (projectId, projectName) => {
        setForm(prev => ({ ...prev, project_id: projectId }));
        setSearch(projectName);
        setIsDropdownOpen(false);
    };

    useEffect(() => {
        const handleClickOutside = (event) => {
            if (dropdownRef.current && !dropdownRef.current.contains(event.target)) {
                setIsDropdownOpen(false);
            }
        };
        document.addEventListener('mousedown', handleClickOutside);
        return () => document.removeEventListener('mousedown', handleClickOutside);
    }, []);

    // --- Form handlers ---
    const handleChange = (e) => setForm({ ...form, [e.target.name]: e.target.value });

    const toggleBhk = (index) => setExpandedBhk(expandedBhk === index ? null : index);

    const addBhk = () => {
        setBhks([...bhks, { name: "", price: "", size: "", date: "", rooms: {}, imageslider: [], floorPlans: [], galleryImages: [] }]);
        setExpandedBhk(bhks.length);
    };

    const removeBhk = (index) => {
        const updated = [...bhks];
        updated.splice(index, 1);
        setBhks(updated);
        if (expandedBhk === index) setExpandedBhk(null);
    };

    const updateBhkField = (index, field, value) => {
        const updated = [...bhks];
        updated[index][field] = value;
        setBhks(updated);
    };

    // --- Room handlers ---
    const addRoom = (bhkIndex, roomName) => {
        if (!roomName) return;
        const key = normalizeRoom(roomName);
        setBhks((prev) => {
            const updated = [...prev];
            const bhk = { ...updated[bhkIndex] };
            bhk.rooms = { ...bhk.rooms, [key]: { size: "", wardrobe_niche: "" } };
            updated[bhkIndex] = bhk;
            return updated;
        });
        setNewRoomInputs(prev => ({ ...prev, [bhkIndex]: "" }));
    };

    const updateRoomName = (bhkIndex, oldName, newName) => {
        const key = normalizeRoom(newName);
        setBhks((prev) => {
            const updated = [...prev];
            const bhk = { ...updated[bhkIndex] };
            const rooms = { ...bhk.rooms };
            rooms[key] = { ...rooms[oldName] };
            if (oldName !== key) delete rooms[oldName];
            bhk.rooms = rooms;
            updated[bhkIndex] = bhk;
            return updated;
        });
    };

    const updateRoom = (bhkIndex, roomName, field, value) => {
        setBhks((prev) => {
            const updated = [...prev];
            const bhk = { ...updated[bhkIndex] };
            bhk.rooms[roomName] = { ...bhk.rooms[roomName], [field]: value };
            updated[bhkIndex] = bhk;
            return updated;
        });
    };

    const removeRoom = (bhkIndex, roomName) => {
        setBhks((prev) => {
            const updated = [...prev];
            const bhk = { ...updated[bhkIndex] };
            const rooms = { ...bhk.rooms };
            delete rooms[roomName];
            bhk.rooms = rooms;
            updated[bhkIndex] = bhk;
            return updated;
        });
    };

    // --- Image/Floor plan/Gallery handlers ---
    const addSliderImage = (bhkIndex) => { const updated = [...bhks]; updated[bhkIndex].imageslider.push({ image: "" }); setBhks(updated); };
    const updateSliderImage = (bhkIndex, index, value) => { const updated = [...bhks]; updated[bhkIndex].imageslider[index].image = value; setBhks(updated); };
    const removeSliderImage = (bhkIndex, index) => { const updated = [...bhks]; updated[bhkIndex].imageslider.splice(index, 1); setBhks(updated); };
    const addFloorPlan = (bhkIndex) => { const updated = [...bhks]; updated[bhkIndex].floorPlans.push({ imgThumb: "", imgFull: "", title: "" }); setBhks(updated); };
    const updateFloorPlan = (bhkIndex, index, field, value) => { const updated = [...bhks]; updated[bhkIndex].floorPlans[index][field] = value; setBhks(updated); };
    const removeFloorPlan = (bhkIndex, index) => { const updated = [...bhks]; updated[bhkIndex].floorPlans.splice(index, 1); setBhks(updated); };
    const addGalleryImage = (bhkIndex) => { const updated = [...bhks]; updated[bhkIndex].galleryImages.push({ full: "", thumb: "", alt: "", height: "" }); setBhks(updated); };
    const updateGalleryImage = (bhkIndex, index, field, value) => { const updated = [...bhks]; updated[bhkIndex].galleryImages[index][field] = value; setBhks(updated); };
    const removeGalleryImage = (bhkIndex, index) => { const updated = [...bhks]; updated[bhkIndex].galleryImages.splice(index, 1); setBhks(updated); };

    const handleNewRoomInputChange = (bhkIndex, value) => setNewRoomInputs(prev => ({ ...prev, [bhkIndex]: value }));

    // --- Submit ---
    const handleSubmit = (e) => {
        e.preventDefault();
        const configuration = {};
        bhks.forEach((b) => {
            if (!b.name) return;
            const bhkKey = normalizeBhk(b.name);
            const rooms = {};
            Object.entries(b.rooms).forEach(([rName, rData]) => { rooms[normalizeRoom(rName)] = rData; });
            configuration[bhkKey] = { rooms, imageslider: b.imageslider, floorPlans: b.floorPlans, galleryImages: b.galleryImages, price: b.price, size: b.size, date: b.date };
        });
        configuration["price"] = form.type_price;

        const payload = {
            project_id: form.project_id,
            type: form.type,
            old_type: configData?.typeKey || null, // पुराना नाम track
            configuration,
            type_price: form.type_price,
        };

        if (configData) {
            Inertia.put(`/configurations/${configData.project_id}`, payload, { onSuccess: closeModal });
        } else {
            Inertia.post("/configurations", payload, { onSuccess: closeModal });
        }
    };

    return (
        <form onSubmit={handleSubmit} className="space-y-6 px-6 py-6 bg-white rounded-xl shadow-2xl border border-gray-100">

            <div className="border-b border-gray-200 pb-4">
                <h2 className="text-2xl font-bold text-gray-800">
                    {configData ? "Edit Configuration" : "Create New Configuration"}
                </h2>
                <p className="text-gray-600 mt-1">Manage project configurations and BHK details</p>
            </div>

            {/* Project Search */}
            <div className="relative mt-4" ref={dropdownRef}>
                <label className="block text-sm font-semibold text-gray-700 mb-2">Project</label>
                <input
                    type="text"
                    value={search}
                    onChange={(e) => { setSearch(e.target.value); setIsDropdownOpen(true); }}
                    placeholder="Search a project..."
                    disabled={!!configData} // disable if editing
                    className="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    onFocus={() => setIsDropdownOpen(true)}
                />

                {isDropdownOpen && (
                    <div className="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg max-h-60 overflow-y-auto">
                        {filteredProjects.length > 0 ? (
                            filteredProjects.map(project => (
                                <div
                                    key={project.id}
                                    onClick={() => handleProjectSelect(project.id, project.name)}
                                    className={`px-3 py-2.5 cursor-pointer hover:bg-blue-50 ${form.project_id === project.id ? "bg-blue-100 text-blue-700" : "text-gray-700"
                                        }`}
                                >
                                    {project.name}
                                </div>
                            ))
                        ) : (
                            <div className="px-3 py-2.5 text-gray-500 italic">
                                No projects found matching "{search}"
                            </div>
                        )}
                    </div>
                )}
            </div>

            <div>
                <label className="block text-sm font-semibold text-gray-700 mb-2">Type</label>
                <input
                    type="text"
                    name="type"
                    value={form.type}
                    onChange={handleChange}
                    required
                    placeholder="e.g., Residential, Commercial"
                    className="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                />
            </div>
            <div>
                <label className="block text-sm font-semibold text-gray-700 mb-2">Type Price</label>
                <input
                    type="text"
                    name="type_price"
                    value={form.type_price}
                    onChange={handleChange}
                    placeholder="e.g., 80 Lac - 90 Lac"
                    className="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                />
            </div>


            {/* BHKs Section */}
            <div className="space-y-4">
                <div className="flex justify-between items-center">
                    <h3 className="font-bold text-lg text-gray-800">BHK Configurations</h3>
                    <span className="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">
                        {bhks.length} BHK{bhks.length !== 1 ? 's' : ''} added
                    </span>
                </div>

                {bhks.length === 0 ? (
                    <div className="text-center py-8 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50">
                        <p className="text-gray-500 mb-3">No BHK configurations added yet</p>
                    </div>
                ) : (
                    bhks.map((bhk, idx) => (
                        <div key={idx} className="border border-gray-200 rounded-lg bg-white shadow-sm hover:shadow-md transition-shadow duration-200">
                            {/* BHK Header */}
                            <div
                                className="flex justify-between items-center p-4 cursor-pointer bg-gradient-to-r from-gray-50 to-white"
                                onClick={() => toggleBhk(idx)}
                            >
                                <div className="flex items-center space-x-3">
                                    <div className="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span className="text-blue-600 font-semibold">{idx + 1}</span>
                                    </div>
                                    <div>
                                        <span className="font-semibold text-gray-800">
                                            {bhk.name || "Unnamed BHK"}
                                        </span>
                                        {bhk.price && (
                                            <span className="text-sm text-green-600 ml-2">• {bhk.price}</span>
                                        )}
                                    </div>
                                </div>
                                <div className="flex items-center gap-3">
                                    <button
                                        type="button"
                                        onClick={(e) => { e.stopPropagation(); removeBhk(idx); }}
                                        className="text-red-500 hover:text-red-700 p-1 rounded-full hover:bg-red-50 transition-colors duration-200"
                                        title="Remove BHK"
                                    >
                                        <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                    <div className="flex items-center text-gray-400">
                                        <svg
                                            className={`w-5 h-5 transform transition-transform duration-200 ${expandedBhk === idx ? 'rotate-180' : ''}`}
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            {/* Expanded Content */}
                            {expandedBhk === idx && (
                                <div className="p-4 border-t border-gray-100 space-y-6">
                                    {/* Basic BHK Info */}
                                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">BHK Name</label>
                                            <input
                                                type="text"
                                                placeholder="e.g., 2 BHK"
                                                value={bhk.name}
                                                onChange={(e) => updateBhkField(idx, "name", e.target.value)}
                                                className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            />
                                        </div>
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Price</label>
                                            <input
                                                type="text"
                                                placeholder="e.g., 85 Lac"
                                                value={bhk.price}
                                                onChange={(e) => updateBhkField(idx, "price", e.target.value)}
                                                className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            />
                                        </div>
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Size</label>
                                            <input
                                                type="text"
                                                placeholder="e.g., 1200 sq.ft."
                                                value={bhk.size}
                                                onChange={(e) => updateBhkField(idx, "size", e.target.value)}
                                                className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            />
                                        </div>
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Date</label>
                                            <input
                                                type="text"
                                                placeholder="e.g., Q2 2024"
                                                value={bhk.date}
                                                onChange={(e) => updateBhkField(idx, "date", e.target.value)}
                                                className="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            />
                                        </div>
                                    </div>

                                    {/* Rooms Section */}
                                    <div className="space-y-3">
                                        <div className="flex justify-between items-center">
                                            <h4 className="font-semibold text-gray-700">Rooms</h4>
                                            <span className="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded">
                                                {Object.keys(bhk.rooms).length} room{Object.keys(bhk.rooms).length !== 1 ? 's' : ''}
                                            </span>
                                        </div>

                                        {Object.entries(bhk.rooms).map(([roomName, roomData]) => (
                                            <div key={roomName} className="flex flex-wrap gap-3 items-center p-3 bg-gray-50 rounded-lg">
                                                <input
                                                    type="text"
                                                    placeholder="Room Name"
                                                    value={roomName}
                                                    onChange={(e) => updateRoomName(idx, roomName, e.target.value)}
                                                    className="border border-gray-300 rounded px-3 py-2 flex-1 min-w-[120px] focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                />
                                                <input
                                                    type="text"
                                                    placeholder="Size"
                                                    value={roomData.size}
                                                    onChange={(e) => updateRoom(idx, roomName, "size", e.target.value)}
                                                    className="border border-gray-300 rounded px-3 py-2 flex-1 min-w-[100px] focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                />
                                                {roomData.wardrobe_niche !== undefined && (
                                                    <input
                                                        type="text"
                                                        placeholder="Wardrobe Niche"
                                                        value={roomData.wardrobe_niche}
                                                        onChange={(e) => updateRoom(idx, roomName, "wardrobe_niche", e.target.value)}
                                                        className="border border-gray-300 rounded px-3 py-2 flex-1 min-w-[120px] focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                    />
                                                )}
                                                <button
                                                    type="button"
                                                    onClick={() => removeRoom(idx, roomName)}
                                                    className="text-red-500 hover:text-red-700 p-2 rounded-full hover:bg-red-50 transition-colors duration-200"
                                                    title="Remove room"
                                                >
                                                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        ))}

                                        <div className="flex gap-2 items-center">
                                            <input
                                                type="text"
                                                placeholder="New room name"
                                                value={newRoomInputs[idx] || ''}
                                                onChange={(e) => handleNewRoomInputChange(idx, e.target.value)}
                                                className="border border-gray-300 rounded px-3 py-2 flex-1 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            />
                                            <button
                                                type="button"
                                                onClick={() => addRoom(idx, newRoomInputs[idx] || '')}
                                                className="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-200 flex items-center gap-2"
                                            >
                                                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                                </svg>
                                                Add Room
                                            </button>
                                        </div>
                                    </div>

                                    {/* Media Sections - stacked vertically */}
                                    <div className="space-y-6">
                                        {/* Slider Images */}
                                        <div className="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                                            <div className="flex justify-between items-center mb-2">
                                                <h4 className="font-semibold text-gray-700">Slider Images</h4>
                                                <button
                                                    type="button"
                                                    onClick={() => addSliderImage(idx)}
                                                    className="text-blue-600 text-sm hover:text-blue-800 flex items-center gap-1"
                                                >
                                                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    Add
                                                </button>
                                            </div>
                                            <div className="space-y-2">
                                                {bhk.imageslider.map((img, i) => (
                                                    <div key={i} className="flex gap-2 items-center p-2 bg-gray-50 rounded border border-gray-200">
                                                        <input
                                                            type="text"
                                                            placeholder="Image URL"
                                                            value={img.image}
                                                            onChange={(e) => updateSliderImage(idx, i, e.target.value)}
                                                            className="border border-gray-300 rounded px-3 py-1 flex-1 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                        />
                                                        <button
                                                            type="button"
                                                            onClick={() => removeSliderImage(idx, i)}
                                                            className="text-red-500 hover:text-red-700 p-1 rounded"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                ))}
                                            </div>
                                        </div>

                                        {/* Floor Plans */}
                                        <div className="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                                            <div className="flex justify-between items-center mb-2">
                                                <h4 className="font-semibold text-gray-700">Floor Plans</h4>
                                                <button
                                                    type="button"
                                                    onClick={() => addFloorPlan(idx)}
                                                    className="text-blue-600 text-sm hover:text-blue-800 flex items-center gap-1"
                                                >
                                                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    Add
                                                </button>
                                            </div>
                                            <div className="space-y-2">
                                                {bhk.floorPlans.map((plan, i) => (
                                                    <div key={i} className="space-y-2 p-2 bg-gray-50 rounded border border-gray-200">

                                                        <input
                                                            type="text"
                                                            placeholder="Full URL"
                                                            value={plan.imgFull}
                                                            onChange={(e) => updateFloorPlan(idx, i, "imgFull", e.target.value)}
                                                            className="w-full border border-gray-300 rounded px-3 py-1 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                        />
                                                        <div className="flex gap-2">


                                                            <button
                                                                type="button"
                                                                onClick={() => removeFloorPlan(idx, i)}
                                                                className="text-red-500 hover:text-red-700 p-1 rounded text-sm w-full text-center border border-red-200 hover:bg-red-50"
                                                            >
                                                                Remove
                                                            </button>
                                                        </div>
                                                    </div>
                                                ))}
                                            </div>
                                        </div>

                                        {/* Gallery Images */}
                                        <div className="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                                            <div className="flex justify-between items-center mb-2">
                                                <h4 className="font-semibold text-gray-700">Gallery Images</h4>
                                                <button
                                                    type="button"
                                                    onClick={() => addGalleryImage(idx)}
                                                    className="text-blue-600 text-sm hover:text-blue-800 flex items-center gap-1"
                                                >
                                                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                                                    </svg>
                                                    Add
                                                </button>
                                            </div>
                                            <div className="space-y-2">
                                                {bhk.galleryImages.map((img, i) => (
                                                    <div key={i} className="space-y-2 p-2 bg-gray-50 rounded border border-gray-200">
                                                        <input
                                                            type="text"
                                                            placeholder="Image URL"
                                                            value={img.full}
                                                            onChange={(e) => updateGalleryImage(idx, i, "full", e.target.value)}
                                                            className="w-full border border-gray-300 rounded px-3 py-1 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                                        />

                                                        <button
                                                            type="button"
                                                            onClick={() => removeGalleryImage(idx, i)}
                                                            className="text-red-500 hover:text-red-700 p-1 rounded text-sm w-full text-center border border-red-200 hover:bg-red-50"
                                                        >
                                                            Remove
                                                        </button>
                                                    </div>
                                                ))}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            )}
                        </div>
                    ))
                )}

                {/* Add BHK Button */}
                <button
                    type="button"
                    onClick={addBhk}
                    className="w-full py-3 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 hover:bg-gray-100 hover:border-gray-400 transition-all duration-200 flex items-center justify-center gap-2 text-gray-600 font-medium"
                >
                    <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 4v16m8-8H4" />
                    </svg>
                    Add BHK Configuration
                </button>
            </div>

            {/* Submit Buttons */}
            <div className="flex justify-end gap-3 pt-6 border-t border-gray-200 bg-white sticky bottom-0 pb-2">
                <button
                    type="button"
                    onClick={closeModal}
                    className="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors duration-200 font-medium"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    className="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium flex items-center gap-2"
                >
                    <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 13l4 4L19 7" />
                    </svg>
                    {configData ? "Update Configuration" : "Save Configuration"}
                </button>
            </div>
        </form>
    );
};

export default ConfigurationForm;
