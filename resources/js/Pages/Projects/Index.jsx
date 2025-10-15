import React, { useState } from 'react';
import { Inertia } from '@inertiajs/inertia';
import { usePage, Head } from '@inertiajs/react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { route } from 'ziggy-js';
import ProjectModal from '@/Components/ProjectModal';
import ManageFlagModal from "@/Components/ManageFlagModal";

const ProjectsIndex = () => {
    const { projects, allProjects } = usePage().props;
    const [showModal, setShowModal] = useState(false);
    const [isEdit, setIsEdit] = useState(false);
    const [currentProjectId, setCurrentProjectId] = useState(null);
    const [searchTerm, setSearchTerm] = useState('');
    const [sortConfig, setSortConfig] = useState({ key: null, direction: 'ascending' });
    const [showFlagModal, setShowFlagModal] = useState(false);



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

    const filteredProjects = projects?.data?.filter(project => {
        const searchLower = searchTerm.toLowerCase();
        return (
            project.project.name.toLowerCase().includes(searchLower) ||
            project.project.slug.toLowerCase().includes(searchLower) ||
            (project.project.type && project.project.type.toLowerCase().includes(searchLower)) ||
            (project.project.location?.city && project.project.location.city.toLowerCase().includes(searchLower)) ||
            (project.project.location?.area && project.project.location.area.toLowerCase().includes(searchLower))
        );
    }) || [];



    const sortedProjects = React.useMemo(() => {
        let sortableItems = [...filteredProjects];
        if (sortConfig.key !== null) {
            sortableItems.sort((a, b) => {
                let aValue, bValue;

                if (sortConfig.key.includes('.')) {
                    const keys = sortConfig.key.split('.');
                    aValue = keys.reduce((obj, key) => obj && obj[key], a.project);
                    bValue = keys.reduce((obj, key) => obj && obj[key], b.project);
                } else {
                    aValue = a.project[sortConfig.key];
                    bValue = b.project[sortConfig.key];
                }

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
        setFormData({
            name: project.project.name,
            slug: project.project.slug,
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
            <Head title=" Projects" />
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
                closeModal={() => setShowFlagModal(false)}
                projects={allProjects}
            />

            <div className="min-h-screen bg-gray-50 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                        <div className="px-6 py-5 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-4 sm:space-y-0">
                            <div>
                                <h1 className="text-2xl font-bold text-gray-900">Projects Management</h1>
                                <p className="mt-1 text-sm text-gray-500">
                                    Manage all your projects in one place
                                </p>
                            </div>

                            <div className="flex space-x-3">
                                {/* Add New Project Button */}
                                <button
                                    onClick={() => {
                                        resetForm();
                                        setShowModal(true);
                                    }}
                                    className="bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-5 rounded-lg flex items-center transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                                >
                                    <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Add New Project
                                </button>

                                {/* Manage Flag Button */}
                                <button
                                    onClick={() => setShowFlagModal(true)}
                                    className="bg-amber-600 hover:bg-amber-700 text-white font-medium py-2.5 px-5 rounded-lg flex items-center transition-all duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5"
                                >
                                    Manage Flag
                                </button>
                            </div>
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
                                        placeholder="Search projects by name, type, or location..."
                                        className="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 bg-white transition-all duration-300"
                                        value={searchTerm}
                                        onChange={(e) => setSearchTerm(e.target.value)}
                                    />
                                </div>
                                <div className="flex items-center space-x-4">
                                    <div className="text-sm text-gray-600 bg-gray-100 px-3 py-1 rounded-full">
                                        {filteredProjects.length} {filteredProjects.length === 1 ? 'project' : 'projects'} found
                                    </div>
                                    <button
                                        className="text-gray-500 hover:text-gray-700 transition-colors duration-300"
                                        title="Refresh projects"
                                        onClick={() => window.location.reload()}
                                    >
                                        <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div className="overflow-x-auto transition-opacity duration-300">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors duration-300"
                                            onClick={() => requestSort('name')}
                                        >
                                            <div className="flex items-center">
                                                Name {getSortIndicator('name')}
                                            </div>
                                        </th>

                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors duration-300"
                                            onClick={() => requestSort('type')}
                                        >
                                            <div className="flex items-center">
                                                Type {getSortIndicator('type')}
                                            </div>
                                        </th>

                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors duration-300"
                                            onClick={() => requestSort('location.city')}
                                        >
                                            <div className="flex items-center">
                                                Location {getSortIndicator('location.city')}
                                            </div>
                                        </th>
                                        <th
                                            className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors duration-300"
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
                                            <tr key={project._id} className="hover:bg-gray-50 transition-all duration-300 group">
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="flex items-center">
                                                        <div className="flex-shrink-0 h-10 w-10 bg-indigo-100 rounded-lg flex items-center justify-center mr-3 group-hover:bg-indigo-200 transition-colors duration-300">
                                                            <svg className="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <div className="text-sm font-medium text-gray-900">{project.project.name}</div>
                                                            <div className="text-xs text-gray-500">
                                                                Created {new Date(project.createdAt).toLocaleDateString()}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm text-gray-600 bg-gray-100 px-2 py-1 rounded-md inline-block">
                                                        {project.project.type || (
                                                            <span className="text-gray-400 italic">Not set</span>
                                                        )}
                                                    </div>
                                                </td>

                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="flex items-center">
                                                        <svg className="h-4 w-4 text-gray-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <div className="text-sm text-gray-600">
                                                            {project.project.location?.city && project.project.location?.area ?
                                                                `${project.project.location.area}, ${project.project.location.city}` :
                                                                (project.project.location?.area || project.project.location?.city || (
                                                                    <span className="text-gray-400 italic">Not set</span>
                                                                ))
                                                            }
                                                        </div>
                                                    </div>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    {getStatusBadge(project.project.status || 'active')}
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div className="flex items-center justify-end space-x-2 transition-opacity duration-300">
                                                        <button
                                                            onClick={() => View(project)}
                                                            className="text-blue-600 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 p-2 rounded-lg transition-all duration-300 transform hover:scale-110"
                                                            title="View project"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </button>

                                                        <button
                                                            onClick={() => openEditModal(project)}
                                                            className="text-indigo-600 hover:text-indigo-900 bg-indigo-50 hover:bg-indigo-100 p-2 rounded-lg transition-all duration-300 transform hover:scale-110"
                                                            title="Edit project"
                                                        >
                                                            <svg className="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                            </svg>
                                                        </button>

                                                        <button
                                                            onClick={() => handleDelete(project)}
                                                            className="text-red-600 hover:text-red-900 bg-red-50 hover:bg-red-100 p-2 rounded-lg transition-all duration-300 transform hover:scale-110"
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
                                            <td colSpan="6" className="px-6 py-12 text-center">
                                                <svg className="mx-auto h-16 w-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                <h3 className="mt-4 text-lg font-medium text-gray-700">No projects found</h3>
                                                <p className="mt-2 text-sm text-gray-500 max-w-md mx-auto">
                                                    {searchTerm ? `No results found for "${searchTerm}". Try adjusting your search term` : 'Get started by creating your first project'}
                                                </p>
                                                {!searchTerm && (
                                                    <div className="mt-6">
                                                        <button
                                                            onClick={() => setShowModal(true)}
                                                            className="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-300 transform hover:-translate-y-0.5"
                                                        >
                                                            <svg className="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                            </svg>
                                                            Add New Project
                                                        </button>
                                                    </div>
                                                )}
                                            </td>
                                        </tr>
                                    )}
                                </tbody>
                            </table>
                            <div className="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-between">
                                <div className="text-sm text-gray-600">
                                    Showing <span className="font-medium">{(projects.current_page - 1) * projects.per_page + 1}</span> to <span className="font-medium">
                                        {Math.min(projects.current_page * projects.per_page, projects.total)}
                                    </span> of <span className="font-medium">{projects.total}</span> results
                                </div>
                                <div className="flex space-x-2">
                                    {(projects.links || []).map((link, index) => (
                                        <button
                                            key={index}
                                            className={`px-3 py-1.5 border rounded-md text-sm font-medium transition-all duration-300 ${link.active
                                                ? 'bg-indigo-600 border-indigo-600 text-white shadow-md'
                                                : 'bg-white border-gray-300 text-gray-700 hover:bg-gray-50'}`}
                                            disabled={!link.url}
                                            onClick={() => link.url && Inertia.get(link.url)}
                                            dangerouslySetInnerHTML={{ __html: link.label }}
                                        />
                                    ))}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ProjectsIndex;