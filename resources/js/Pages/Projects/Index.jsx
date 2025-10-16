import React, { useState, useCallback, useEffect } from 'react';
import { Inertia } from '@inertiajs/inertia';
import { usePage, Head, router } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { route } from 'ziggy-js';
import ProjectModal from '@/Components/ProjectModal';
import ManageFlagModal from "@/Components/ManageFlagModal";
import { debounce } from 'lodash';
import { Listbox, Transition } from "@headlessui/react";
import { ChevronUpDownIcon, CheckIcon } from "@heroicons/react/24/solid";

const ProjectsIndex = () => {
    const [selectedProjectForFlags, setSelectedProjectForFlags] = useState(null);
    const { projects, allProjects, filters: initialFilters = {}, filterOptions = {}, sort: initialSort = {} } = usePage().props;

    // Safe defaults for props
    const safeProjects = projects || { data: [], total: 0, current_page: 1, per_page: 10, links: [] };
    const safeAllProjects = allProjects || [];
    const safeFilterOptions = {
        types: filterOptions.types || [],
        cities: filterOptions.cities || [],
        areas: filterOptions.areas || [],
        builders: filterOptions.builders || [], // ✅ NEW: Builders filter options
        statuses: filterOptions.statuses || ['active', 'inactive', 'draft'],
    };

    const [showModal, setShowModal] = useState(false);
    const [isEdit, setIsEdit] = useState(false);
    const [currentProjectId, setCurrentProjectId] = useState(null);
    const [showFlagModal, setShowFlagModal] = useState(false);

    // Filters state - ✅ Added builder filter
    const [filters, setFilters] = useState({
        search: initialFilters.search || '',
        status: initialFilters.status || '',
        type: initialFilters.type || '',
        city: initialFilters.city || '',
        area: initialFilters.area || '',
        builder: initialFilters.builder || '', // ✅ NEW: Builder filter
    });

    // Sort state
    const [sortConfig, setSortConfig] = useState({
        key: initialSort.field || 'created_at',
        direction: initialSort.direction || 'descending'
    });

    // UI states
    const [isFiltersOpen, setIsFiltersOpen] = useState(false);

    const [formData, setFormData] = useState({
        name: '',
        slug: '',
        reel: '',
        brochure: '',
        logo_image_id: '',
        type: '',
        status: 'active',
        phase: '',
        visual_image_id: '',
        location: {
            address: '',
            city: '',
            area: '',
            map_description: '',
        }
    });

    const [formErrors, setFormErrors] = useState({});

    // Debounced search
    const debouncedSearch = useCallback(
        debounce((searchValue) => {
            updateFilters({ search: searchValue });
        }, 500),
        []
    );

    // Update filters and reload data
    const updateFilters = (newFilters) => {
        const updatedFilters = { ...filters, ...newFilters };
        setFilters(updatedFilters);

        const params = {
            ...updatedFilters,
            sort_field: sortConfig.key,
            sort_direction: sortConfig.direction === 'ascending' ? 'asc' : 'desc'
        };

        router.get(route('projects.index'), params, {
            preserveState: true,
            replace: true,
        });
    };

    // Handle search input change
    const handleSearchChange = (e) => {
        const searchValue = e.target.value;
        setFilters(prev => ({ ...prev, search: searchValue }));
        debouncedSearch(searchValue);
    };

    // Handle filter changes
    const handleFilterChange = (filterType, value) => {
        const newFilters = { ...filters, [filterType]: value };
        setFilters(newFilters);

        const params = {
            ...newFilters,
            sort_field: sortConfig.key,
            sort_direction: sortConfig.direction === 'ascending' ? 'asc' : 'desc'
        };

        router.get(route('projects.index'), params, {
            preserveState: true,
            replace: true,
        });
    };

    // Clear all filters - ✅ Added builder filter
    const clearFilters = () => {
        const clearedFilters = {
            search: '',
            status: '',
            type: '',
            city: '',
            area: '',
            builder: '', // ✅ NEW: Clear builder filter
        };
        setFilters(clearedFilters);

        const params = {
            ...clearedFilters,
            sort_field: sortConfig.key,
            sort_direction: sortConfig.direction === 'ascending' ? 'asc' : 'desc'
        };

        router.get(route('projects.index'), params, {
            preserveState: true,
            replace: true,
        });
    };

    // Handle sorting
    const requestSort = (key) => {
        let direction = 'ascending';
        if (sortConfig.key === key && sortConfig.direction === 'ascending') {
            direction = 'descending';
        }

        const newSortConfig = { key, direction };
        setSortConfig(newSortConfig);

        router.get(route('projects.index'), {
            ...filters,
            sort_field: key,
            sort_direction: direction === 'ascending' ? 'asc' : 'desc'
        }, {
            preserveState: true,
            replace: true,
        });
    };

    const getSortIndicator = (key) => {
        if (sortConfig.key !== key) return '↕';
        return sortConfig.direction === 'ascending' ? '↑' : '↓';
    };

    // Check if any filter is active - ✅ Added builder filter
    const hasActiveFilters = Object.values(filters).some(value => value !== '');

    // Open flag modal for a specific project
    const openFlagModal = (project) => {
        setSelectedProjectForFlags(project);
        setShowFlagModal(true);
    };

    // Close flag modal
    const closeFlagModal = () => {
        setShowFlagModal(false);
        setSelectedProjectForFlags(null);
    };

    // Rest of your existing functions (handleChange, openEditModal, handleSubmit, View, handleDelete, resetForm, closeModal, getStatusBadge) remain the same...
    const handleChange = (e) => {
        const { name, value, type, checked } = e.target;
        setFormErrors(prev => ({ ...prev, [name]: '' }));

        if (type === 'checkbox') {
            setFormData(prev => ({ ...prev, [name]: checked }));
        } else if (name.startsWith('location.')) {
            const locKey = name.split('.')[1];
            setFormData(prev => ({
                ...prev,
                location: { ...prev.location, [locKey]: value }
            }));
        } else {
            setFormData(prev => ({ ...prev, [name]: value }));
        }
    };

    const openEditModal = (project) => {
        if (!project || !project.project) {
            console.error('Invalid project data:', project);
            return;
        }

        setFormData({
            name: project.project.name || '',
            slug: project.project.slug || '',
            reel: project.project.reel || '',
            brochure: project.project.brochure || '',
            logo_image_id: project.project.logo_image_id || '',
            type: project.project.type || '',
            phase: project.project.phase || '',
            status: project.project.status || 'active',
            visual_image_id: project.project.visual_image_id || '',
            location: {
                address: project.project.location?.address || '',
                city: project.project.location?.city || '',
                area: project.project.location?.area || '',
                map_description: project.project.location?.map_description || '',
            }
        });

        const id = project._id || project.id || (project.project && (project.project.id || project.project._id));
        if (!id) {
            console.error('Project ID not found:', project);
            return;
        }

        setCurrentProjectId(id);
        setIsEdit(true);
        setShowModal(true);
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        // Basic validation
        const errors = {};
        if (!formData.name.trim()) errors.name = 'Project name is required';
        if (!formData.slug.trim()) errors.slug = 'Project slug is required';
        if (formData.slug.includes(' ')) errors.slug = 'Slug cannot contain spaces';

        if (Object.keys(errors).length > 0) {
            setFormErrors(errors);
            return;
        }

        const data = new FormData();
        data.append('project[name]', formData.name);
        data.append('project[slug]', formData.slug);
        data.append('project[type]', formData.type);
        data.append('project[status]', formData.status);
        data.append('project[phase]', formData.phase);
        data.append('project[visual_image_id]', formData.visual_image_id ?? '');
        data.append('project[location][address]', formData.location.address);
        data.append('project[location][city]', formData.location.city);
        data.append('project[location][area]', formData.location.area);
        data.append('project[location][map_description]', formData.location.map_description);
        data.append('project[reel]', formData.reel || '');
        data.append('project[brochure]', formData.brochure || '');
        data.append('project[logo_image_id]', formData.logo_image_id || '');

        if (isEdit) {
            const url = route('projects.update', { id: currentProjectId });
            data.append('_method', 'PUT');
            Inertia.post(url, data, {
                forceFormData: true,
                onError: (errors) => {
                    setFormErrors(errors);
                }
            });
        } else {
            const url = route('projects.store');
            Inertia.post(url, data, {
                forceFormData: true,
                onError: (errors) => {
                    setFormErrors(errors);
                }
            });
        }

        setShowModal(false);
        resetForm();
    };

    const View = (project) => {
        const id = project._id || project.id || project.project.id;
        if (!id) {
            console.error('View ID is missing');
            return;
        }
        const url = route('projects.view', { id });
        Inertia.visit(url);
    };

    const handleDelete = (project) => {
        const id = project._id || project.id || project.project.id;
        if (!id) {
            console.error('Project ID is missing:', project);
            return;
        }

        if (confirm('Are you sure you want to delete this project? This action cannot be undone.')) {
            const url = route('projects.destroy', { id: id });
            Inertia.delete(url);
        }
    };

    const resetForm = () => {
        setFormData({
            name: '',
            slug: '',
            reel: null,
            brochure: null,
            logo_image_id: null,
            type: '',
            status: 'active',
            phase: '',
            visual_image_id: null,
            location: {
                address: '',
                city: '',
                area: '',
                map_description: '',
            }
        });
        setFormErrors({});
        setIsEdit(false);
        setCurrentProjectId(null);
    };

    const closeModal = () => {
        setShowModal(false);
        resetForm();
    };

    const getStatusBadge = (status) => {
        const statusConfig = {
            active: {
                color: 'bg-emerald-100 text-emerald-800 border border-emerald-200',
                text: 'Active'
            },
            inactive: {
                color: 'bg-slate-100 text-slate-800 border border-slate-200',
                text: 'Inactive'
            },
            draft: {
                color: 'bg-amber-100 text-amber-800 border border-amber-200',
                text: 'Draft'
            }
        };

        const config = statusConfig[status] || statusConfig.inactive;

        return (
            <span className={`inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold ${config.color}`}>
                {config.text}
            </span>
        );
    };

    // Safe project data access
    const projectData = safeProjects.data || [];

    return (
        <AuthenticatedLayout title="Projects Management">
            <Head title="Projects" />

            <ProjectModal
                showModal={showModal}
                closeModal={closeModal}
                handleChange={handleChange}
                handleSubmit={handleSubmit}
                formData={formData}
                formErrors={formErrors}
                isEdit={isEdit}
            />

            <ManageFlagModal
                showModal={showFlagModal}
                closeModal={closeFlagModal}
                project={selectedProjectForFlags}
                projects={safeAllProjects}
            />

            <div className="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50/30 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    {/* Header Section */}
                    <div className="mb-8">
                        <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                            <div className="mb-6 lg:mb-0">
                                <h1 className="text-3xl font-bold text-slate-900 bg-gradient-to-r from-slate-900 to-slate-700 bg-clip-text text-transparent">
                                    Projects
                                </h1>
                                <p className="mt-2 text-slate-600 text-lg">
                                    Manage and organize your project portfolio
                                </p>
                            </div>

                            <div className="flex flex-col sm:flex-row gap-3">
                                {/* <button
                                    onClick={() => setShowFlagModal(true)}
                                    className="inline-flex items-center justify-center px-6 py-3.5 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 border border-amber-400/20"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    Manage Flags
                                </button> */}

                                <button
                                    onClick={() => { resetForm(); setShowModal(true); }}
                                    className="inline-flex items-center justify-center px-6 py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 border border-indigo-500/20"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    New Project
                                </button>
                            </div>
                        </div>
                    </div>

                    {/* Main Card */}
                    <div className="bg-white/80 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20 overflow-hidden">
                        {/* Search and Stats Bar */}
                        <div className="p-6 border-b border-slate-200/60 bg-gradient-to-r from-white to-slate-50/50">
                            <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
                                <div className="flex-1 max-w-2xl">
                                    <div className="relative">
                                        <div className="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <svg className="h-5 w-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                            </svg>
                                        </div>
                                        <input
                                            type="text"
                                            placeholder="Search projects by name, type, location, builder..."
                                            className="block w-full pl-12 pr-4 py-3.5 bg-white/80 border border-slate-300/50 rounded-2xl focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 text-slate-700 placeholder-slate-500 backdrop-blur-sm transition-all duration-300 shadow-sm hover:shadow-md"
                                            value={filters.search}
                                            onChange={handleSearchChange}
                                        />
                                    </div>
                                </div>

                                <div className="flex items-center gap-4">
                                    <div className="flex items-center gap-3 bg-white/60 px-4 py-2.5 rounded-2xl border border-slate-300/30 shadow-sm">
                                        <div className="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></div>
                                        <span className="text-sm font-semibold text-slate-700">
                                            {safeProjects.total} {safeProjects.total === 1 ? 'Project' : 'Projects'}
                                        </span>
                                    </div>

                                    <button
                                        onClick={() => Inertia.reload()}
                                        className="p-2.5 bg-white/60 hover:bg-white border border-slate-300/30 rounded-2xl text-slate-600 hover:text-slate-800 transition-all duration-300 shadow-sm hover:shadow-md transform hover:-translate-y-0.5"
                                        title="Refresh"
                                    >
                                        <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        {/* Filters Section */}
                        <div className="p-6 border-b border-slate-200/60 bg-slate-50/30">
                            {/* Filter Controls */}
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                                {/* Status Filter */}
                                <div className="space-y-2">
                                    <label className="block text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                        Status
                                    </label>
                                    <Listbox value={filters.status} onChange={(value) => handleFilterChange('status', value)}>
                                        {({ open }) => (
                                            <div className="relative">
                                                <Listbox.Button
                                                    className="
                                                        w-full px-4 py-3 bg-white border border-slate-200 rounded-2xl
                                                        flex justify-between items-center
                                                        text-sm font-medium text-slate-700
                                                        shadow-sm hover:shadow-md focus:ring-2 focus:ring-indigo-500/20
                                                        transition-all duration-200
                                                    "
                                                >
                                                    <span>{filters.status || "All Status"}</span>
                                                    <ChevronUpDownIcon className="h-5 w-5 text-slate-500" />
                                                </Listbox.Button>

                                                <Transition
                                                    show={open}
                                                    leave="transition ease-in duration-100"
                                                    leaveFrom="opacity-100"
                                                    leaveTo="opacity-0"
                                                >
                                                    <Listbox.Options
                                                        className="
                                                            absolute z-50 mt-2 w-full bg-white border border-slate-200 rounded-2xl shadow-xl
                                                            max-h-60 overflow-auto ring-1 ring-black/5 focus:outline-none
                                                        "
                                                    >
                                                        <Listbox.Option value="">
                                                            {({ active }) => (
                                                                <div
                                                                    className={`cursor-pointer select-none px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                        }`}
                                                                >
                                                                    All Status
                                                                </div>
                                                            )}
                                                        </Listbox.Option>

                                                        {safeFilterOptions.statuses.map((status) => (
                                                            <Listbox.Option key={status} value={status}>
                                                                {({ selected, active }) => (
                                                                    <div
                                                                        className={`cursor-pointer select-none flex justify-between items-center px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                            }`}
                                                                    >
                                                                        <span>{status.charAt(0).toUpperCase() + status.slice(1)}</span>
                                                                        {selected && <CheckIcon className="h-4 w-4 text-indigo-600" />}
                                                                    </div>
                                                                )}
                                                            </Listbox.Option>
                                                        ))}
                                                    </Listbox.Options>
                                                </Transition>
                                            </div>
                                        )}
                                    </Listbox>
                                </div>

                                {/* Type Filter */}
                                <div className="space-y-2">
                                    <label className="block text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                        Type
                                    </label>
                                    <Listbox value={filters.type} onChange={(value) => handleFilterChange('type', value)}>
                                        {({ open }) => (
                                            <div className="relative">
                                                <Listbox.Button
                                                    className="
                                                        w-full px-4 py-3 bg-white border border-slate-200 rounded-2xl
                                                        flex justify-between items-center
                                                        text-sm font-medium text-slate-700
                                                        shadow-sm hover:shadow-md focus:ring-2 focus:ring-indigo-500/20
                                                        transition-all duration-200
                                                    "
                                                >
                                                    <span>{filters.type || "All Types"}</span>
                                                    <ChevronUpDownIcon className="h-5 w-5 text-slate-500" />
                                                </Listbox.Button>

                                                <Transition
                                                    show={open}
                                                    leave="transition ease-in duration-100"
                                                    leaveFrom="opacity-100"
                                                    leaveTo="opacity-0"
                                                >
                                                    <Listbox.Options
                                                        className="
                                                            absolute z-50 mt-2 w-full bg-white border border-slate-200 rounded-2xl shadow-xl
                                                            max-h-60 overflow-auto ring-1 ring-black/5 focus:outline-none
                                                        "
                                                    >
                                                        <Listbox.Option value="">
                                                            {({ active }) => (
                                                                <div
                                                                    className={`cursor-pointer select-none px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                        }`}
                                                                >
                                                                    All Types
                                                                </div>
                                                            )}
                                                        </Listbox.Option>

                                                        {safeFilterOptions.types.map((type) => (
                                                            <Listbox.Option key={type} value={type}>
                                                                {({ selected, active }) => (
                                                                    <div
                                                                        className={`cursor-pointer select-none flex justify-between items-center px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                            }`}
                                                                    >
                                                                        <span>{type}</span>
                                                                        {selected && <CheckIcon className="h-4 w-4 text-indigo-600" />}
                                                                    </div>
                                                                )}
                                                            </Listbox.Option>
                                                        ))}
                                                    </Listbox.Options>
                                                </Transition>
                                            </div>
                                        )}
                                    </Listbox>
                                </div>

                                {/* City Filter */}
                                <div className="space-y-2">
                                    <label className="block text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                        City
                                    </label>
                                    <Listbox value={filters.city} onChange={(value) => handleFilterChange('city', value)}>
                                        {({ open }) => (
                                            <div className="relative">
                                                <Listbox.Button
                                                    className="
                                                        w-full px-4 py-3 bg-white border border-slate-200 rounded-2xl
                                                        flex justify-between items-center
                                                        text-sm font-medium text-slate-700
                                                        shadow-sm hover:shadow-md focus:ring-2 focus:ring-indigo-500/20
                                                        transition-all duration-200
                                                    "
                                                >
                                                    <span>{filters.city || "All Cities"}</span>
                                                    <ChevronUpDownIcon className="h-5 w-5 text-slate-500" />
                                                </Listbox.Button>

                                                <Transition
                                                    show={open}
                                                    leave="transition ease-in duration-100"
                                                    leaveFrom="opacity-100"
                                                    leaveTo="opacity-0"
                                                >
                                                    <Listbox.Options
                                                        className="
                                                            absolute z-50 mt-2 w-full bg-white border border-slate-200 rounded-2xl shadow-xl
                                                            max-h-60 overflow-auto ring-1 ring-black/5 focus:outline-none
                                                        "
                                                    >
                                                        <Listbox.Option value="">
                                                            {({ active }) => (
                                                                <div
                                                                    className={`cursor-pointer select-none px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                        }`}
                                                                >
                                                                    All Cities
                                                                </div>
                                                            )}
                                                        </Listbox.Option>

                                                        {safeFilterOptions.cities.map((city) => (
                                                            <Listbox.Option key={city} value={city}>
                                                                {({ selected, active }) => (
                                                                    <div
                                                                        className={`cursor-pointer select-none flex justify-between items-center px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                            }`}
                                                                    >
                                                                        <span>{city}</span>
                                                                        {selected && <CheckIcon className="h-4 w-4 text-indigo-600" />}
                                                                    </div>
                                                                )}
                                                            </Listbox.Option>
                                                        ))}
                                                    </Listbox.Options>
                                                </Transition>
                                            </div>
                                        )}
                                    </Listbox>
                                </div>

                                {/* Area Filter */}
                                <div className="space-y-2">
                                    <label className="block text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                        Area
                                    </label>
                                    <Listbox value={filters.area} onChange={(value) => handleFilterChange('area', value)}>
                                        {({ open }) => (
                                            <div className="relative">
                                                <Listbox.Button
                                                    className="
                                                        w-full px-4 py-3 bg-white border border-slate-200 rounded-2xl
                                                        flex justify-between items-center
                                                        text-sm font-medium text-slate-700
                                                        shadow-sm hover:shadow-md focus:ring-2 focus:ring-indigo-500/20
                                                        transition-all duration-200
                                                    "
                                                >
                                                    <span>{filters.area || "All Areas"}</span>
                                                    <ChevronUpDownIcon className="h-5 w-5 text-slate-500" />
                                                </Listbox.Button>

                                                <Transition
                                                    show={open}
                                                    leave="transition ease-in duration-100"
                                                    leaveFrom="opacity-100"
                                                    leaveTo="opacity-0"
                                                >
                                                    <Listbox.Options
                                                        className="
                                                            absolute z-50 mt-2 w-full bg-white border border-slate-200 rounded-2xl shadow-xl
                                                            max-h-60 overflow-auto ring-1 ring-black/5 focus:outline-none
                                                        "
                                                    >
                                                        <Listbox.Option value="">
                                                            {({ active }) => (
                                                                <div
                                                                    className={`cursor-pointer select-none px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                        }`}
                                                                >
                                                                    All Areas
                                                                </div>
                                                            )}
                                                        </Listbox.Option>

                                                        {safeFilterOptions.areas.map((area) => (
                                                            <Listbox.Option key={area} value={area}>
                                                                {({ selected, active }) => (
                                                                    <div
                                                                        className={`cursor-pointer select-none flex justify-between items-center px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                            }`}
                                                                    >
                                                                        <span>{area}</span>
                                                                        {selected && <CheckIcon className="h-4 w-4 text-indigo-600" />}
                                                                    </div>
                                                                )}
                                                            </Listbox.Option>
                                                        ))}
                                                    </Listbox.Options>
                                                </Transition>
                                            </div>
                                        )}
                                    </Listbox>
                                </div>

                                {/* ✅ NEW: Builder Filter */}
                                <div className="space-y-2">
                                    <label className="block text-xs font-semibold text-slate-700 uppercase tracking-wider">
                                        Builder
                                    </label>
                                    <Listbox value={filters.builder} onChange={(value) => handleFilterChange('builder', value)}>
                                        {({ open }) => (
                                            <div className="relative">
                                                <Listbox.Button
                                                    className="
                                                        w-full px-4 py-3 bg-white border border-slate-200 rounded-2xl
                                                        flex justify-between items-center
                                                        text-sm font-medium text-slate-700
                                                        shadow-sm hover:shadow-md focus:ring-2 focus:ring-indigo-500/20
                                                        transition-all duration-200
                                                    "
                                                >
                                                    <span>{filters.builder || "All Builders"}</span>
                                                    <ChevronUpDownIcon className="h-5 w-5 text-slate-500" />
                                                </Listbox.Button>

                                                <Transition
                                                    show={open}
                                                    leave="transition ease-in duration-100"
                                                    leaveFrom="opacity-100"
                                                    leaveTo="opacity-0"
                                                >
                                                    <Listbox.Options
                                                        className="
                                                            absolute z-50 mt-2 w-full bg-white border border-slate-200 rounded-2xl shadow-xl
                                                            max-h-60 overflow-auto ring-1 ring-black/5 focus:outline-none
                                                        "
                                                    >
                                                        <Listbox.Option value="">
                                                            {({ active }) => (
                                                                <div
                                                                    className={`cursor-pointer select-none px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                        }`}
                                                                >
                                                                    All Builders
                                                                </div>
                                                            )}
                                                        </Listbox.Option>

                                                        {safeFilterOptions.builders.map((builder) => (
                                                            <Listbox.Option key={builder} value={builder}>
                                                                {({ selected, active }) => (
                                                                    <div
                                                                        className={`cursor-pointer select-none flex justify-between items-center px-4 py-2 ${active ? "bg-indigo-50 text-indigo-600" : "text-slate-700"
                                                                            }`}
                                                                    >
                                                                        <span>{builder}</span>
                                                                        {selected && <CheckIcon className="h-4 w-4 text-indigo-600" />}
                                                                    </div>
                                                                )}
                                                            </Listbox.Option>
                                                        ))}
                                                    </Listbox.Options>
                                                </Transition>
                                            </div>
                                        )}
                                    </Listbox>
                                </div>

                                {/* Quick Actions */}
                                <div className="flex items-end space-x-3">
                                    {hasActiveFilters && (
                                        <button
                                            onClick={clearFilters}
                                            className="flex-1 px-4 py-3 bg-gradient-to-r from-rose-500 to-rose-600 hover:from-rose-600 hover:to-rose-700 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 text-sm"
                                        >
                                            Clear Filters
                                        </button>
                                    )}
                                </div>
                            </div>
                        </div>

                        {/* Table Section */}
                        <div className="overflow-hidden">
                            <div className="overflow-x-auto">
                                <table className="w-full">
                                    <thead className="bg-slate-50/50 border-b border-slate-200/60">
                                        <tr>
                                            {[
                                                { key: 'name', label: 'Project' },
                                                { key: 'builder.name', label: 'Builder' },
                                                { key: 'type', label: 'Type' },
                                                { key: 'location.city', label: 'Location' },
                                                { key: 'status', label: 'Status' },
                                                { key: 'actions', label: 'Actions' }
                                            ].map(({ key, label }) => (
                                                <th
                                                    key={key}
                                                    className={`px-6 py-4 text-left text-xs font-semibold text-slate-700 uppercase tracking-wider ${key !== 'actions' ? 'cursor-pointer hover:bg-slate-100/50 transition-colors duration-200' : ''}`}
                                                    onClick={key !== 'actions' ? () => requestSort(key) : undefined}
                                                >
                                                    <div className="flex items-center gap-2">
                                                        {label}
                                                        {key !== 'actions' && (
                                                            <span className="text-slate-400">{getSortIndicator(key)}</span>
                                                        )}
                                                    </div>
                                                </th>
                                            ))}
                                        </tr>
                                    </thead>
                                    <tbody className="divide-y divide-slate-200/30">
                                        {projectData.length > 0 ? (
                                            projectData.map((project) => (
                                                <tr
                                                    key={project._id}
                                                    className="hover:bg-slate-50/30 transition-all duration-300 group"
                                                >
                                                    {/* Project Name Column */}
                                                    <td className="px-6 py-4">
                                                        <div className="flex items-center gap-4">
                                                            <div className="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-indigo-100 to-purple-100 rounded-2xl flex items-center justify-center group-hover:from-indigo-200 group-hover:to-purple-200 transition-all duration-300 shadow-sm">
                                                                <svg className="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                                                </svg>
                                                            </div>
                                                            <div>
                                                                <div className="font-semibold text-slate-900 group-hover:text-indigo-700 transition-colors">
                                                                    {project.project?.name || 'Unnamed Project'}
                                                                </div>
                                                                <div className="text-sm text-slate-500 mt-1">
                                                                    {(() => {
                                                                        const rawDate = project.createdAt || project.created_at || project.createdOn;
                                                                        if (!rawDate) return 'Unknown date';
                                                                        const parsedDate = new Date(rawDate?.$date || rawDate);
                                                                        return isNaN(parsedDate) ? 'Invalid date' : parsedDate.toLocaleDateString('en-US', {
                                                                            year: 'numeric',
                                                                            month: 'short',
                                                                            day: 'numeric',
                                                                        });
                                                                    })()}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    {/* Builder Column */}
                                                    <td className="px-6 py-4">
                                                        {project.builder ? (
                                                            <div className="space-y-2">
                                                                <div className="flex items-center gap-3">
                                                                    <div>
                                                                        <div className="font-medium text-slate-900 text-sm">
                                                                            {project.builder.name}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {project.builder.corporate_address && (
                                                                    <div className="text-xs text-slate-600 flex items-start gap-1">
                                                                        <svg
                                                                            className="w-3 h-3 text-slate-400 mt-0.5 flex-shrink-0"
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                        >
                                                                            <path
                                                                                strokeLinecap="round"
                                                                                strokeLinejoin="round"
                                                                                strokeWidth="2"
                                                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                                                            />
                                                                        </svg>
                                                                        <span className="line-clamp-2">
                                                                            {project.builder.corporate_address}
                                                                        </span>
                                                                    </div>
                                                                )}
                                                            </div>
                                                        ) : (
                                                            <div className="text-slate-400 text-sm italic">
                                                                No builder info
                                                            </div>
                                                        )}
                                                    </td>

                                                    {/* Type Column */}
                                                    <td className="px-6 py-4">
                                                        <div className="inline-flex items-center px-3 py-1.5 bg-slate-100 text-slate-700 rounded-full text-sm font-medium border border-slate-300/50">
                                                            {project.project?.type || (
                                                                <span className="text-slate-400">Not set</span>
                                                            )}
                                                        </div>
                                                    </td>

                                                    {/* Location Column */}
                                                    <td className="px-6 py-4">
                                                        <div className="flex items-center gap-2 text-slate-700">
                                                            <svg className="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            </svg>
                                                            <span className="text-sm">
                                                                {project.project?.location?.city && project.project?.location?.area ?
                                                                    `${project.project.location.area}, ${project.project.location.city}` :
                                                                    (project.project?.location?.area || project.project?.location?.city || (
                                                                        <span className="text-slate-400">Not set</span>
                                                                    ))
                                                                }
                                                            </span>
                                                        </div>
                                                    </td>

                                                    {/* Status Column */}
                                                    <td className="px-6 py-4">
                                                        {getStatusBadge(project.project?.status || 'active')}
                                                    </td>

                                                    {/* Actions Column */}
                                                    <td className="px-6 py-4">
                                                        <div className="flex items-center justify-end gap-2">
                                                            {/* Manage Flags Button */}
                                                            <button
                                                                onClick={() => openFlagModal(project)}
                                                                className="p-2.5 text-slate-600 hover:text-amber-600 bg-white hover:bg-amber-50 rounded-2xl border border-slate-300/50 hover:border-amber-300 transition-all duration-300 shadow-sm hover:shadow-md transform hover:-translate-y-0.5"
                                                                title="Manage flags"
                                                            >
                                                                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                                </svg>
                                                            </button>

                                                            {/* View Button */}
                                                            <button
                                                                onClick={() => View(project)}
                                                                className="p-2.5 text-slate-600 hover:text-blue-600 bg-white hover:bg-blue-50 rounded-2xl border border-slate-300/50 hover:border-blue-300 transition-all duration-300 shadow-sm hover:shadow-md transform hover:-translate-y-0.5"
                                                                title="View project"
                                                            >
                                                                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                                </svg>
                                                            </button>

                                                            {/* Edit Button */}
                                                            <button
                                                                onClick={() => openEditModal(project)}
                                                                className="p-2.5 text-slate-600 hover:text-indigo-600 bg-white hover:bg-indigo-50 rounded-2xl border border-slate-300/50 hover:border-indigo-300 transition-all duration-300 shadow-sm hover:shadow-md transform hover:-translate-y-0.5"
                                                                title="Edit project"
                                                            >
                                                                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>
                                                            </button>

                                                            {/* Delete Button */}
                                                            <button
                                                                onClick={() => handleDelete(project)}
                                                                className="p-2.5 text-slate-600 hover:text-rose-600 bg-white hover:bg-rose-50 rounded-2xl border border-slate-300/50 hover:border-rose-300 transition-all duration-300 shadow-sm hover:shadow-md transform hover:-translate-y-0.5"
                                                                title="Delete project"
                                                            >
                                                                <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ))
                                        ) : (
                                            <tr>
                                                <td colSpan="6" className="px-6 py-16 text-center">
                                                    <div className="max-w-md mx-auto">
                                                        <div className="w-24 h-24 mx-auto mb-6 bg-slate-100 rounded-3xl flex items-center justify-center">
                                                            <svg className="w-12 h-12 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </div>
                                                        <h3 className="text-xl font-semibold text-slate-900 mb-2">
                                                            {hasActiveFilters ? 'No projects found' : 'No projects yet'}
                                                        </h3>
                                                        <p className="text-slate-600 mb-6">
                                                            {hasActiveFilters
                                                                ? 'Try adjusting your search criteria or filters to find what you\'re looking for.'
                                                                : 'Get started by creating your first project to build your portfolio.'
                                                            }
                                                        </p>
                                                        {hasActiveFilters ? (
                                                            <button
                                                                onClick={clearFilters}
                                                                className="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                                                            >
                                                                Clear Filters
                                                            </button>
                                                        ) : (
                                                            <button
                                                                onClick={() => setShowModal(true)}
                                                                className="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
                                                            >
                                                                <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                                                </svg>
                                                                Create First Project
                                                            </button>
                                                        )}
                                                    </div>
                                                </td>
                                            </tr>
                                        )}
                                    </tbody>
                                </table>
                            </div>

                            {/* Pagination */}
                            {projectData.length > 0 && safeProjects.links && safeProjects.links.length > 1 && (
                                <div className="px-6 py-4 bg-slate-50/30 border-t border-slate-200/60">
                                    <div className="flex flex-col sm:flex-row items-center justify-between gap-4">
                                        <div className="text-sm text-slate-600">
                                            Showing <span className="font-semibold text-slate-900">{(safeProjects.current_page - 1) * safeProjects.per_page + 1}</span> to{' '}
                                            <span className="font-semibold text-slate-900">
                                                {Math.min(safeProjects.current_page * safeProjects.per_page, safeProjects.total)}
                                            </span> of{' '}
                                            <span className="font-semibold text-slate-900">{safeProjects.total}</span> results
                                        </div>
                                        <div className="flex flex-wrap gap-2">
                                            {safeProjects.links.map((link, index) => (
                                                <button
                                                    key={index}
                                                    onClick={() => link.url && Inertia.get(link.url)}
                                                    disabled={!link.url}
                                                    className={`px-3.5 py-2 rounded-2xl text-sm font-medium transition-all duration-300 ${link.active
                                                        ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg'
                                                        : 'bg-white text-slate-700 hover:bg-slate-50 border border-slate-300/50 hover:border-slate-400 shadow-sm hover:shadow-md'
                                                        } ${!link.url ? 'opacity-50 cursor-not-allowed' : 'hover:-translate-y-0.5'}`}
                                                    dangerouslySetInnerHTML={{ __html: link.label }}
                                                />
                                            ))}
                                        </div>
                                    </div>
                                </div>
                            )}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ProjectsIndex;