import React, { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';
import { Inertia } from '@inertiajs/inertia';

const ProjectViewPage = ({ project }) => {
    const projectData = project.project || project;
    const [activeTab, setActiveTab] = useState('overview');
    const [expandedConfig, setExpandedConfig] = useState({});

    const toggleConfig = (configKey) => {
        setExpandedConfig(prev => ({
            ...prev,
            [configKey]: !prev[configKey]
        }));
    };

    const tabs = [
        { id: 'overview', label: 'Overview', icon: '📋' },
        { id: 'configuration', label: 'Configurations', icon: '🏠' },
        { id: 'location', label: 'Location', icon: '📍' },
        // { id: 'specifications', label: 'Specifications', icon: '⚡' },
    ];

    return (
        <AuthenticatedLayout
            title={`${projectData.name} - Project Details`}
            header={
                <div className="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 className="text-2xl font-bold text-gray-900">Project Details</h2>
                    </div>
                </div>
            }
        >
            <Head title={`${projectData.name} - Project Details`} />

            {/* Header Section */}
            <div className="bg-white border-b border-gray-200">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

                    <div className="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div className="flex items-start space-x-4">
                            {projectData.logo_image_id && (
                                <div className="bg-white p-2 rounded-lg border border-gray-200">
                                    <img
                                        src={projectData.logo_image_id}
                                        alt={`${projectData.name} logo`}
                                        className="h-16 w-auto object-contain"
                                    />
                                </div>
                            )}
                            <div>
                                <h1 className="text-3xl font-bold text-gray-900">{projectData.name}</h1>
                                <p className="text-gray-600 mt-1">{projectData.type || 'Premium Residential Project'}</p>
                                <div className="flex flex-wrap gap-2 mt-3">
                                    {projectData.location?.city && (
                                        <span className="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">
                                            📍 {projectData.location.city}
                                        </span>
                                    )}
                                    <span className={`inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ${projectData.status === 'active'
                                        ? 'bg-green-100 text-green-800'
                                        : 'bg-gray-100 text-gray-800'
                                        }`}>
                                        {projectData.status === 'active' ? 'Active' : 'Inactive'}
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div className="mt-4 md:mt-0 flex items-center space-x-3">
                            <button
                                onClick={() => window.history.back()}
                                className="inline-flex items-center px-4 py-2.5 bg-white text-slate-700 font-medium rounded-2xl border border-slate-300/50 hover:border-slate-400 transition-all duration-300 shadow-sm hover:shadow-md"
                            >
                                <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                                </svg>
                                Back to Projects List
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {/* Navigation Tabs */}
                <div className="bg-white rounded-lg border border-gray-200 mb-6">
                    <div className="flex overflow-x-auto">
                        {tabs.map(tab => (
                            <button
                                key={tab.id}
                                onClick={() => setActiveTab(tab.id)}
                                className={`flex items-center px-6 py-4 border-b-2 text-sm font-medium whitespace-nowrap ${activeTab === tab.id
                                    ? 'border-indigo-500 text-indigo-600'
                                    : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'
                                    }`}
                            >
                                <span className="mr-2">{tab.icon}</span>
                                {tab.label}
                            </button>
                        ))}
                    </div>
                </div>

                <div className="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    {/* Main Content */}
                    <div className="lg:col-span-3 space-y-6">
                        {/* Overview Tab */}
                        {activeTab === 'overview' && (
                            <div className="space-y-6">
                                {/* Video Reel */}
                                {projectData.reel && (
                                    <div className="bg-white rounded-lg border border-gray-200 p-6">
                                        <h2 className="text-xl font-semibold text-gray-900 mb-4">Project Reel</h2>
                                        <div className="bg-gray-900 rounded-lg overflow-hidden">
                                            <video
                                                controls
                                                className="w-full h-auto"
                                                poster={projectData.thumbnail}
                                            >
                                                <source src={projectData.reel} type="video/mp4" />
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                )}

                                {/* Builder Information */}
                                {project.builder && (
                                    <div className="bg-white rounded-lg border border-gray-200 p-6">
                                        <h2 className="text-xl font-semibold text-gray-900 mb-6">Builder Information</h2>
                                        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div className="space-y-4">
                                                <div>
                                                    <label className="block text-sm font-medium text-gray-700 mb-1">Builder Name</label>
                                                    <p className="text-gray-900 font-medium">{project.builder.name}</p>
                                                </div>
                                                <div>
                                                    <label className="block text-sm font-medium text-gray-700 mb-1">Corporate Address</label>
                                                    <p className="text-gray-900">{project.builder.corporate_address}</p>
                                                </div>
                                            </div>
                                            <div className="space-y-4">
                                                {project.builder.contact?.website && (
                                                    <div>
                                                        <label className="block text-sm font-medium text-gray-700 mb-1">Website</label>
                                                        <a href={project.builder.contact.website} className="text-blue-600 hover:text-blue-800">
                                                            {project.builder.contact.website}
                                                        </a>
                                                    </div>
                                                )}
                                                {project.builder.contact?.sales_email && (
                                                    <div>
                                                        <label className="block text-sm font-medium text-gray-700 mb-1">Sales Email</label>
                                                        <p className="text-gray-900">{project.builder.contact.sales_email}</p>
                                                    </div>
                                                )}
                                            </div>
                                        </div>
                                    </div>
                                )}

                                {/* Amenities */}
                                {project.amenities && (
                                    <div className="bg-white rounded-lg border border-gray-200 p-6">
                                        <h2 className="text-xl font-semibold text-gray-900 mb-6">Amenities</h2>
                                        <div className="grid grid-cols-2 md:grid-cols-3 gap-4">
                                            {Object.entries(project.amenities).map(([key, value]) => (
                                                <div key={key} className="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                                    <div className="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                                        <span className="text-blue-600 text-sm">✓</span>
                                                    </div>
                                                    <div>
                                                        <h3 className="font-medium text-gray-900 text-sm capitalize">
                                                            {key.replace(/_/g, ' ')}
                                                        </h3>
                                                    </div>
                                                </div>
                                            ))}
                                        </div>
                                    </div>
                                )}

                                {/* Specifications */}
                                {project.specifications && (
                                    <div className="bg-white rounded-lg border border-gray-200 p-6">
                                        <h2 className="text-xl font-semibold text-gray-900 mb-6">Specifications</h2>
                                        <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            {Object.entries(project.specifications).map(([key, value]) => (
                                                <div key={key} className="flex justify-between items-center py-2 border-b border-gray-100">
                                                    <span className="text-gray-700 capitalize">{key.replace(/_/g, ' ')}</span>
                                                    <span className="font-medium text-gray-900">{value}</span>
                                                </div>
                                            ))}
                                        </div>
                                    </div>
                                )}
                            </div>
                        )}

                        {/* Configuration Tab */}
                        {activeTab === 'configuration' && project.configuration && (
                            <div className="space-y-6">
                                {Object.entries(project.configuration).map(([categoryName, categoryData]) => (
                                    <div key={categoryName} className="bg-white rounded-lg border border-gray-200">
                                        {/* Category Header */}
                                        <div className="bg-gray-50 px-6 py-4 border-b border-gray-200">
                                            <h2 className="text-xl font-semibold text-gray-900">{categoryName}</h2>
                                        </div>

                                        <div className="p-6">
                                            {typeof categoryData === 'string' || typeof categoryData === 'number' ? (
                                                <p className="text-gray-600">{categoryData}</p>
                                            ) : (
                                                <div className="space-y-6">
                                                    {Object.entries(categoryData).map(([unitType, unitData]) => {
                                                        if (unitType === "floorplan_image_id" || unitType === "price" || !unitData || typeof unitData !== "object") {
                                                            return null;
                                                        }

                                                        const configKey = `${categoryName}-${unitType}`;
                                                        const isExpanded = expandedConfig[configKey];

                                                        return (
                                                            <div key={unitType} className="border border-gray-200 rounded-lg">
                                                                {/* Unit Header */}
                                                                <div
                                                                    className="p-4 cursor-pointer hover:bg-gray-50 transition-colors"
                                                                    onClick={() => toggleConfig(configKey)}
                                                                >
                                                                    <div className="flex items-center justify-between">
                                                                        <div>
                                                                            <h3 className="text-lg font-semibold text-gray-900">
                                                                                {unitType.replace(/([A-Z])/g, ' $1').replace(/^./, str => str.toUpperCase())}
                                                                            </h3>
                                                                            <div className="flex flex-wrap gap-2 mt-2">
                                                                                {unitData.price && (
                                                                                    <span className="text-sm text-green-600 font-medium">
                                                                                        {unitData.price}
                                                                                    </span>
                                                                                )}
                                                                                {unitData.size && (
                                                                                    <span className="text-sm text-gray-600">
                                                                                        {unitData.size}
                                                                                    </span>
                                                                                )}
                                                                            </div>
                                                                        </div>
                                                                        <svg
                                                                            className={`w-5 h-5 text-gray-400 transition-transform ${isExpanded ? 'rotate-180' : ''}`}
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                        >
                                                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 9l-7 7-7-7" />
                                                                        </svg>
                                                                    </div>
                                                                </div>

                                                                {/* Expandable Content */}
                                                                {isExpanded && (
                                                                    <div className="px-4 pb-4 border-t border-gray-200">
                                                                        {/* Room Details */}
                                                                        {unitData.rooms && (
                                                                            <div className="mt-4">
                                                                                <h4 className="font-medium text-gray-900 mb-3">Room Details</h4>
                                                                                <div className="grid grid-cols-1 md:grid-cols-2 gap-3">
                                                                                    {Object.entries(unitData.rooms).map(([roomName, roomInfo]) => (
                                                                                        <div key={roomName} className="bg-gray-50 rounded-lg p-3">
                                                                                            <div className="flex justify-between items-start mb-2">
                                                                                                <h5 className="font-medium text-gray-800 capitalize text-sm">
                                                                                                    {roomName.replace(/_/g, ' ')}
                                                                                                </h5>
                                                                                                {roomInfo.size && (
                                                                                                    <span className="text-xs bg-white text-gray-700 px-2 py-1 rounded">
                                                                                                        {roomInfo.size}
                                                                                                    </span>
                                                                                                )}
                                                                                            </div>
                                                                                            <div className="space-y-1 text-xs text-gray-600">
                                                                                                {roomInfo.type && <p>Type: {roomInfo.type}</p>}
                                                                                                {roomInfo.wardrobe_niche && <p>Wardrobe: {roomInfo.wardrobe_niche}</p>}
                                                                                                {roomInfo.dry_area !== undefined && (
                                                                                                    <p>Dry Area: {roomInfo.dry_area ? "Yes" : "No"}</p>
                                                                                                )}
                                                                                            </div>
                                                                                        </div>
                                                                                    ))}
                                                                                </div>
                                                                            </div>
                                                                        )}

                                                                        {/* Floor Plans */}
                                                                        {Array.isArray(unitData.floorPlans) && unitData.floorPlans.length > 0 && (
                                                                            <div className="mt-4">
                                                                                <h4 className="font-medium text-gray-900 mb-3">Floor Plans</h4>
                                                                                <div className="grid grid-cols-2 gap-4">
                                                                                    {unitData.floorPlans.slice(0, 4).map((plan, idx) => (
                                                                                        <div key={idx} className="text-center">
                                                                                            <img
                                                                                                src={plan.imgThumb}
                                                                                                alt={plan.title}
                                                                                                className="w-full h-32 object-cover rounded-lg border border-gray-200"
                                                                                            />
                                                                                            <p className="text-sm text-gray-600 mt-2">{plan.title}</p>
                                                                                        </div>
                                                                                    ))}
                                                                                </div>
                                                                            </div>
                                                                        )}
                                                                    </div>
                                                                )}
                                                            </div>
                                                        );
                                                    })}
                                                </div>
                                            )}
                                        </div>
                                    </div>
                                ))}
                            </div>
                        )}

                        {/* Location Tab */}
                        {activeTab === 'location' && projectData.location && (
                            <div className="bg-white rounded-lg border border-gray-200 p-6">
                                <h2 className="text-xl font-semibold text-gray-900 mb-6">Location Details</h2>
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div className="space-y-4">
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                            <p className="text-gray-900">{projectData.location.address || 'Not specified'}</p>
                                        </div>
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">City</label>
                                            <p className="text-gray-900">{projectData.location.city || 'Not specified'}</p>
                                        </div>
                                    </div>
                                    <div className="space-y-4">
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Area/Region</label>
                                            <p className="text-gray-900">{projectData.location.area || 'Not specified'}</p>
                                        </div>
                                        <div>
                                            <label className="block text-sm font-medium text-gray-700 mb-1">Map Description</label>
                                            <p className="text-gray-900">{projectData.location.map_description || 'Not specified'}</p>
                                        </div>
                                    </div>
                                </div>

                                {/* Map Placeholder */}
                                <div className="mt-6 bg-gray-100 rounded-lg h-64 flex items-center justify-center border border-gray-200">
                                    <div className="text-center text-gray-500">
                                        <div className="w-12 h-12 bg-gray-300 rounded-full flex items-center justify-center mx-auto mb-3">
                                            <span className="text-gray-600">🗺️</span>
                                        </div>
                                        <p>Map Integration</p>
                                        <p className="text-sm">Google Maps would be displayed here</p>
                                    </div>
                                </div>
                            </div>
                        )}
                    </div>

                    {/* Sidebar */}
                    <div className="space-y-6">
                        {/* Project Info Card */}
                        <div className="bg-white rounded-lg border border-gray-200 p-6">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4">Project Information</h3>
                            <div className="space-y-4">
                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">Project Name</label>
                                    <p className="text-gray-900">{projectData.name}</p>
                                </div>
                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                                    <p className="text-gray-900 font-mono text-sm">{projectData.slug}</p>
                                </div>
                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">Type</label>
                                    <p className="text-gray-900">{projectData.type || 'Not specified'}</p>
                                </div>
                                <div>
                                    <label className="block text-sm font-medium text-gray-700 mb-1">Phase</label>
                                    <p className="text-gray-900">{projectData.phase || 'Not specified'}</p>
                                </div>
                            </div>
                        </div>

                        {/* Brochure Card */}
                        {projectData.brochure && (
                            <div className="bg-white rounded-lg border border-gray-200 p-6">
                                <h3 className="text-lg font-semibold text-gray-900 mb-4">Project Brochure</h3>
                                <div className="bg-blue-50 rounded-lg p-4">
                                    <div className="flex items-center space-x-3">
                                        <div className="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <span className="text-blue-600">📄</span>
                                        </div>
                                        <div className="flex-1">
                                            <p className="font-medium text-gray-900">Project Brochure</p>
                                            <p className="text-sm text-gray-600">PDF Document</p>
                                        </div>
                                    </div>
                                    <a
                                        href={projectData.brochure}
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        className="w-full mt-3 inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700"
                                    >
                                        Download Brochure
                                    </a>
                                </div>
                            </div>
                        )}

                        {/* Actions Card */}
                        <div className="bg-white rounded-lg border border-gray-200 p-6">
                            <h3 className="text-lg font-semibold text-gray-900 mb-4">Actions</h3>
                            <div className="space-y-3">
                                <button
                                    onClick={() => {
                                        if (confirm('Are you sure you want to delete this project?')) {
                                            Inertia.delete(route('projects.destroy', { id: project._id || project.id }));
                                        }
                                    }}
                                    className="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700"
                                >
                                    <span className="mr-2">🗑️</span>
                                    Delete Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ProjectViewPage;