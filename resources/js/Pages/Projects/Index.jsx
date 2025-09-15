import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { route } from 'ziggy-js';

const ProjectsIndex = () => {
    const { projects } = usePage().props;
    const [showModal, setShowModal] = useState(false);
    const [isEdit, setIsEdit] = useState(false);
    const [currentProjectId, setCurrentProjectId] = useState(null);
    const [searchTerm, setSearchTerm] = useState('');
    const [sortConfig, setSortConfig] = useState({ key: null, direction: 'ascending' });

    const [formData, setFormData] = useState({
        name: '',
        slug: '',
        reel: null,
        brochure: null,
        logo_image_id: null,
        type: '',
        status: 'active', // Default status
        visual_image_id: null,
        location: {
            address: '',
            city: '',
            area: '',
            map_description: '',
        }
    });

    const [formErrors, setFormErrors] = useState({});

    // Filter projects based on search term
    const filteredProjects = projects.filter(project => {
        const searchLower = searchTerm.toLowerCase();
        return (
            project.project.name.toLowerCase().includes(searchLower) ||
            project.project.slug.toLowerCase().includes(searchLower) ||
            (project.project.type && project.project.type.toLowerCase().includes(searchLower)) ||
            (project.project.location?.city && project.project.location.city.toLowerCase().includes(searchLower)) ||
            (project.project.location?.area && project.project.location.area.toLowerCase().includes(searchLower))
        );
    });

    // Sort projects
    const sortedProjects = React.useMemo(() => {
        let sortableItems = [...filteredProjects];
        if (sortConfig.key !== null) {
            sortableItems.sort((a, b) => {
                let aValue, bValue;

                // Handle nested properties
                if (sortConfig.key.includes('.')) {
                    const keys = sortConfig.key.split('.');
                    aValue = keys.reduce((obj, key) => obj && obj[key], a.project);
                    bValue = keys.reduce((obj, key) => obj && obj[key], b.project);
                } else {
                    aValue = a.project[sortConfig.key];
                    bValue = b.project[sortConfig.key];
                }

                // Handle null/undefined values
                if (aValue == null) aValue = '';
                if (bValue == null) bValue = '';

                if (aValue < bValue) {
                    return sortConfig.direction === 'ascending' ? -1 : 1;
                }
                if (aValue > bValue) {
                    return sortConfig.direction === 'ascending' ? 1 : -1;
                }
                return 0;
            });
        }
        return sortableItems;
    }, [filteredProjects, sortConfig]);

    const requestSort = (key) => {
        let direction = 'ascending';
        if (sortConfig.key === key && sortConfig.direction === 'ascending') {
            direction = 'descending';
        }
        setSortConfig({ key, direction });
    };

    const handleChange = (e) => {
        const { name, value, files, type, checked } = e.target;
        setFormErrors(prev => ({ ...prev, [name]: '' }));

        if (type === 'checkbox') {
            setFormData(prev => ({ ...prev, [name]: checked }));
        } else if (files && files.length > 0) {
            setFormData(prev => ({
                ...prev,
                [name]: files[0]
            }));
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
        setFormData({
            name: project.project.name,
            slug: project.project.slug,
            reel: null,
            brochure: null,
            logo_image_id: null,
            type: project.project.type || '',
            status: project.project.status || 'active',
            visual_image_id: project.project.visual_image_id || null,
            location: {
                address: project.project.location?.address || '',
                city: project.project.location?.city || '',
                area: project.project.location?.area || '',
                map_description: project.project.location?.map_description || '',
            }
        });

        const id = project._id || project.id || (project.project && project.project.id);
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
        data.append('project[visual_image_id]', formData.visual_image_id ?? '');
        data.append('project[location][address]', formData.location.address);
        data.append('project[location][city]', formData.location.city);
        data.append('project[location][area]', formData.location.area);
        data.append('project[location][map_description]', formData.location.map_description);

        if (formData.reel) data.append('project[reel]', formData.reel);
        if (formData.brochure) data.append('project[brochure]', formData.brochure);
        if (formData.logo_image_id) data.append('project[logo_image_id]', formData.logo_image_id);

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

    const toggleStatus = (project) => {
        const id = project._id || project.id || project.project.id;
        if (!id) {
            console.error('Project ID is missing:', project);
            return;
        }

        const newStatus = project.project.status === 'active' ? 'inactive' : 'active';
        
        if (confirm(`Are you sure you want to ${newStatus === 'active' ? 'activate' : 'deactivate'} this project?`)) {
            Inertia.patch(route('projects.update-status', { id }), {
                status: newStatus
            });
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

    const getSortIndicator = (key) => {
        if (sortConfig.key !== key) return '↕';
        return sortConfig.direction === 'ascending' ? '↑' : '↓';
    };

    const getStatusBadge = (status) => {
        const statusConfig = {
            active: {
                color: 'bg-green-100 text-green-800',
                text: 'Active'
            },
            inactive: {
                color: 'bg-gray-100 text-gray-800',
                text: 'Inactive'
            },
            draft: {
                color: 'bg-yellow-100 text-yellow-800',
                text: 'Draft'
            }
        };

        const config = statusConfig[status] || statusConfig.inactive;
        
        return (
            <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${config.color}`}>
                {config.text}
            </span>
        );
    };

    return (
        <AuthenticatedLayout title="Projects Management">
            <div className="min-h-screen bg-gray-50 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <div className="px-6 py-5 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                            <div>
                                <h1 className="text-2xl font-bold text-gray-900">Projects Management</h1>
                                <p className="mt-1 text-sm text-gray-500">
                                    Manage all your projects in one place
                                </p>
                            </div>
                            <button
                                onClick={() => {
                                    resetForm();
                                    setShowModal(true);
                                }}
                                className="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-5 rounded-lg flex items-center transition-colors shadow-md hover:shadow-lg"
                            >
                                <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                Add New Project
                            </button>
                        </div>

                        <div className="px-6 py-4 bg-gray-50 border-b border-gray-200">
                            <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
                                <div className="relative w-full sm:w-64">
                                    <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg className="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fillRule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clipRule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        placeholder="Search projects..."
                                        className="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white"
                                        value={searchTerm}
                                        onChange={(e) => setSearchTerm(e.target.value)}
                                    />
                                </div>
                                <div className="text-sm text-gray-600">
                                    {filteredProjects.length} {filteredProjects.length === 1 ? 'project' : 'projects'} found
                                </div>
                            </div>
                        </div>

                        <div className="overflow-x-auto">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                            onClick={() => requestSort('name')}
                                        >
                                            <div className="flex items-center">
                                                Name {getSortIndicator('name')}
                                            </div>
                                        </th>
                                       
                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                            onClick={() => requestSort('type')}
                                        >
                                            <div className="flex items-center">
                                                Type {getSortIndicator('type')}
                                            </div>
                                        </th>
                                      
                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                            onClick={() => requestSort('location.city')}
                                        >
                                            <div className="flex items-center">
                                                Location {getSortIndicator('location.city')}
                                            </div>
                                        </th>
                                          <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer"
                                            onClick={() => requestSort('status')}
                                        >
                                            <div className="flex items-center">
                                                Status {getSortIndicator('status')}
                                            </div>
                                        </th>
                                        <th className="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {sortedProjects.length > 0 ? (
                                        sortedProjects.map((project) => (
                                            <tr key={project._id} className="hover:bg-gray-50 transition-colors">
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm font-medium text-gray-900">{project.project.name}</div>
                                                </td>
                                               
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm text-gray-600">
                                                        {project.project.type || (
                                                            <span className="text-gray-400 italic">Not set</span>
                                                        )}
                                                    </div>
                                                </td>
                                              
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm text-gray-600">
                                                        {project.project.location?.city && project.project.location?.area ?
                                                            `${project.project.location.area}, ${project.project.location.city}` :
                                                            (project.project.location?.area ||project.project.location?.city || (
                                                                <span className="text-gray-400 italic">Not set</span>
                                                            ))
                                                        }
                                                    </div>
                                                </td>
                                                  <td className="px-6 py-4 whitespace-nowrap">
                                                    {getStatusBadge(project.project.status || 'active')}
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div className="flex items-center justify-end space-x-2">
                                                        <button
                                                            onClick={() => toggleStatus(project)}
                                                            className={`p-2 rounded-lg transition-colors ${
                                                                project.project.status === 'active' 
                                                                    ? 'text-yellow-600 hover:text-yellow-900 bg-yellow-50 hover:bg-yellow-100' 
                                                                    : 'text-green-600 hover:text-green-900 bg-green-50 hover:bg-green-100'
                                                            }`}
                                                            title={project.project.status === 'active' ? 'Deactivate project' : 'Activate project'}
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                {project.project.status === 'active' ? (
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                ) : (
                                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905a3.61 3.61 0 01-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                                )}
                                                            </svg>
                                                        </button>
                                                        <button
                                                            onClick={() => openEditModal(project)}
                                                            className="text-indigo-600 hover:text-indigo-900 bg-indigo-50 hover:bg-indigo-100 p-2 rounded-lg transition-colors"
                                                            title="Edit project"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                            </svg>
                                                        </button>
                                                        <button
                                                            onClick={() => View(project)}
                                                            className="text-blue-600 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 p-2 rounded-lg transition-colors"
                                                            title="View project"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                            </svg>
                                                        </button>
                                                        <button
                                                            onClick={() => handleDelete(project)}
                                                            className="text-red-600 hover:text-red-900 bg-red-50 hover:bg-red-100 p-2 rounded-lg transition-colors"
                                                            title="Delete project"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        ))
                                    ) : (
                                        <tr>
                                            <td colSpan="6" className="px-6 py-12 text-center">
                                                <svg className="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <h3 className="mt-2 text-sm font-medium text-gray-900">No projects found</h3>
                                                <p className="mt-1 text-sm text-gray-500">
                                                    {searchTerm ? 'Try adjusting your search term' : 'Get started by creating a new project'}
                                                </p>
                                                {!searchTerm && (
                                                    <div className="mt-6">
                                                        <button
                                                            onClick={() => setShowModal(true)}
                                                            className="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                        >
                                                            Add New Project
                                                        </button>
                                                    </div>
                                                )}
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {/* Modal */}
            {showModal && (
                <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
                    <div className="bg-white rounded-2xl shadow-xl w-full max-w-3xl max-h-[90vh] overflow-y-auto">
                        <div className="p-6 border-b border-gray-200 flex items-center justify-between">
                            <h2 className="text-xl font-semibold text-gray-900">
                                {isEdit ? 'Edit Project' : 'Add New Project'}
                            </h2>
                            <button
                                onClick={closeModal}
                                className="text-gray-400 hover:text-gray-600 transition-colors"
                            >
                                <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <form onSubmit={handleSubmit} className="p-6 space-y-6">
                            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-1">
                                        Project Name *
                                    </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="e.g., Sunset Residences"
                                        value={formData.name}
                                        onChange={handleChange}
                                        className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.name ? 'border-red-500' : ''}`}
                                        required
                                    />
                                    {formErrors.name && <p className="mt-1 text-sm text-red-600">{formErrors.name}</p>}
                                </div>

                                <div>
                                    <label htmlFor="slug" className="block text-sm font-medium text-gray-700 mb-1">
                                        Project Slug *
                                    </label>
                                    <input
                                        type="text"
                                        id="slug"
                                        name="slug"
                                        placeholder="e.g., sunset-residences"
                                        value={formData.slug}
                                        onChange={handleChange}
                                        className={`block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ${formErrors.slug ? 'border-red-500' : ''}`}
                                        required
                                    />
                                    {formErrors.slug && <p className="mt-1 text-sm text-red-600">{formErrors.slug}</p>}
                                    <p className="mt-1 text-xs text-gray-500">Use lowercase letters, numbers, and hyphens only</p>
                                </div>
                            </div>

                            <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label htmlFor="type" className="block text-sm font-medium text-gray-700 mb-1">
                                        Project Type
                                    </label>
                                    <input
                                        type="text"
                                        id="type"
                                        name="type"
                                        placeholder="e.g., Residential, Commercial"
                                        value={formData.type}
                                        onChange={handleChange}
                                        className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    />
                                </div>

                                <div>
                                    <label htmlFor="status" className="block text-sm font-medium text-gray-700 mb-1">
                                        Status
                                    </label>
                                    <select
                                        id="status"
                                        name="status"
                                        value={formData.status}
                                        onChange={handleChange}
                                        className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    >
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                            </div>

                            <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">
                                        Project Reel (Video)
                                    </label>
                                    <div className="flex items-center justify-center w-full">
                                        <label className="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-gray-400 hover:bg-gray-50 transition-colors">
                                            <div className="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg className="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                                <p className="mb-2 text-sm text-gray-500">Upload video</p>
                                            </div>
                                            <input
                                                type="file"
                                                name="reel"
                                                onChange={handleChange}
                                                accept="video/*"
                                                className="hidden"
                                            />
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">
                                        Brochure (PDF)
                                    </label>
                                    <div className="flex items-center justify-center w-full">
                                        <label className="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-gray-400 hover:bg-gray-50 transition-colors">
                                            <div className="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg className="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                                </svg>
                                                <p className="mb-2 text-sm text-gray-500">Upload PDF</p>
                                            </div>
                                            <input
                                                type="file"
                                                name="brochure"
                                                onChange={handleChange}
                                                accept="application/pdf"
                                                className="hidden"
                                            />
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">
                                        Logo Image
                                    </label>
                                    <div className="flex items-center justify-center w-full">
                                        <label className="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-gray-400 hover:bg-gray-50 transition-colors">
                                            <div className="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg className="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <p className="mb-2 text-sm text-gray-500">Upload image</p>
                                            </div>
                                            <input
                                                type="file"
                                                name="logo_image_id"
                                                onChange={handleChange}
                                                accept="image/*"
                                                className="hidden"
                                            />
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div className="border-t border-gray-200 pt-6">
                                <h3 className="text-lg font-medium text-gray-900 mb-4">Location Details</h3>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label htmlFor="address" className="block text-sm font-medium text-gray-700 mb-1">
                                            Street Address
                                        </label>
                                        <input
                                            type="text"
                                            id="address"
                                            name="location.address"
                                            placeholder="e.g., 123 Main Street"
                                            value={formData.location.address}
                                            onChange={handleChange}
                                            className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>

                                    <div>
                                        <label htmlFor="city" className="block text-sm font-medium text-gray-700 mb-1">
                                            City
                                        </label>
                                        <input
                                            type="text"
                                            id="city"
                                            name="location.city"
                                            placeholder="e.g., New York"
                                            value={formData.location.city}
                                            onChange={handleChange}
                                            className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>

                                    <div>
                                        <label htmlFor="area" className="block text-sm font-medium text-gray-700 mb-1">
                                            Area/Region
                                        </label>
                                        <input
                                            type="text"
                                            id="area"
                                            name="location.area"
                                            placeholder="e.g., Manhattan"
                                            value={formData.location.area}
                                            onChange={handleChange}
                                            className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>

                                    <div>
                                        <label htmlFor="map_description" className="block text-sm font-medium text-gray-700 mb-1">
                                            Map Description
                                        </label>
                                        <textarea
                                            id="map_description"
                                            name="location.map_description"
                                            placeholder="Description for map integration"
                                            value={formData.location.map_description}
                                            onChange={handleChange}
                                            rows={3}
                                            className="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div className="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                                <button
                                    type="button"
                                    onClick={closeModal}
                                    className="px-4 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
                                >
                                    Cancel
                                </button>
                                <button
                                    type="submit"
                                    className="px-4 py-2.5 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
                                >
                                    {isEdit ? 'Update Project' : 'Create Project'}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            )}
        </AuthenticatedLayout>
    );
};

export default ProjectsIndex;