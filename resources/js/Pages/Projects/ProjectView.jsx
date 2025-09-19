import React from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

const ProjectViewPage = ({ project }) => {
    const projectData = project.project || project;

    return (
        <AuthenticatedLayout
            title={`${projectData.name} - Project Details`}
            header={
                <div className="flex flex-col md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 className="text-2xl font-bold leading-tight text-gray-900">Project Details</h2>

                    </div>
                    <div className="mt-4 md:mt-0">

                    </div>
                </div>
            }
        >
            <Head title={`${projectData.name} - Project Details`} />

            <div className="max-w-6xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div className="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {/* Header Section */}
                    <div className="px-6 py-5 bg-gradient-to-r from-indigo-600 to-purple-700 text-white">
                        <div className="flex flex-col md:flex-row md:items-start md:justify-between">
                            <div>
                                <h1 className="text-2xl font-bold">{projectData.name}</h1>
                                <p className="mt-1 text-indigo-100">{projectData.type || 'No type specified'}</p>
                            </div>
                            {projectData.logo_image_id && (
                                <div className="mt-4 md:mt-0 bg-white p-2 rounded-lg shadow-md">
                                    <img
                                        src={projectData.logo_image_id}  // Remove /storage/, use direct URL
                                        alt={`${projectData.name} logo`}
                                        className="h-16 w-auto object-contain"
                                    />
                                </div>
                            )}

                        </div>
                    </div>

                    <div className="px-6 py-5 border-b border-gray-200 bg-gray-50">
                        <div className="flex flex-wrap items-center justify-between">
                            <div className="flex items-center space-x-4">
                                <span className="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                    <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    {projectData.slug}
                                </span>

                                {projectData.location && (
                                    <span className="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        <svg className="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        {projectData.location.city || 'Location not specified'}
                                    </span>
                                )}
                            </div>

                            <div className="mt-4 md:mt-0">
                                <span className="text-sm text-gray-600">Last updated: {new Date().toLocaleDateString()}</span>
                            </div>
                        </div>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                        {/* Main Content */}
                        <div className="md:col-span-2 space-y-6">
                            {/* Video Reel Section - Made Compact */}
                            {projectData.reel && (
                                <div className="bg-gray-50 rounded-lg p-4 shadow-sm">
                                    <h2 className="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <svg className="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="..."></path>
                                        </svg>
                                        Project Reel
                                    </h2>
                                    <div className="bg-black rounded-md overflow-hidden mx-auto" style={{ maxWidth: '500px' }}>
                                        <video controls className="w-full h-full object-contain" style={{ maxHeight: '280px' }}>
                                            <source src={projectData.reel} type="video/mp4" />
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div className="mt-3 text-center">
                                        <p className="text-sm text-gray-500">Click play to view the project reel</p>
                                    </div>
                                </div>
                            )}


                            {/* Location Details */}
                            {projectData.location && (
                                <div className="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
                                    <h2 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <svg className="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        Location Details
                                    </h2>

                                    <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <h3 className="text-sm font-medium text-gray-500">Address</h3>
                                            <p className="mt-1 text-gray-900">
                                                {projectData.location.address || 'Not specified'}
                                            </p>
                                        </div>

                                        <div>
                                            <h3 className="text-sm font-medium text-gray-500">City</h3>
                                            <p className="mt-1 text-gray-900">
                                                {projectData.location.city || 'Not specified'}
                                            </p>
                                        </div>

                                        <div>
                                            <h3 className="text-sm font-medium text-gray-500">Area/Region</h3>
                                            <p className="mt-1 text-gray-900">
                                                {projectData.location.area || 'Not specified'}
                                            </p>
                                        </div>

                                        <div>
                                            <h3 className="text-sm font-medium text-gray-500">Map Description</h3>
                                            <p className="mt-1 text-gray-900">
                                                {projectData.location.map_description || 'Not specified'}
                                            </p>
                                        </div>
                                    </div>

                                    {/* Mock Map - In a real app, you would integrate with Google Maps or similar */}
                                    <div className="mt-6 bg-gray-100 rounded-lg h-48 flex items-center justify-center">
                                        <div className="text-center text-gray-500">
                                            <svg className="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                            </svg>
                                            <p>Map would be displayed here</p>
                                        </div>
                                    </div>
                                </div>
                            )}
                        </div>

                        {/* Sidebar */}
                        <div className="space-y-6">
                            {/* Project Details Card */}
                            <div className="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
                                <h2 className="text-lg font-semibold text-gray-900 mb-4 border-b pb-2">Project Information</h2>

                                <div className="space-y-4">
                                    <div>
                                        <h3 className="text-sm font-medium text-gray-500">Project Name</h3>
                                        <p className="mt-1 text-gray-900">{projectData.name}</p>
                                    </div>

                                    <div>
                                        <h3 className="text-sm font-medium text-gray-500">Slug</h3>
                                        <p className="mt-1 font-mono text-sm text-gray-900 bg-gray-50 p-2 rounded">{projectData.slug}</p>
                                    </div>

                                    <div>
                                        <h3 className="text-sm font-medium text-gray-500">Type</h3>
                                        <p className="mt-1 text-gray-900">{projectData.type || 'Not specified'}</p>
                                    </div>

                                    <div>
                                        <h3 className="text-sm font-medium text-gray-500">Status</h3>
                                        <div className="mt-2">
                                            <span className={`inline-flex items-center px-3 py-1 rounded-full text-sm font-medium ${projectData.status === 'active'
                                                ? 'bg-green-100 text-green-800'
                                                : 'bg-gray-100 text-gray-800'
                                                }`}>
                                                <span className={`w-2 h-2 rounded-full mr-2 ${projectData.status === 'active' ? 'bg-green-500' : 'bg-gray-500'
                                                    }`}></span>
                                                {projectData.status === 'active' ? 'Active' : 'Inactive'}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Brochure Card */}
                            {projectData.brochure && (
                                <div className="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
                                    <h2 className="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <svg className="w-5 h-5 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                        </svg>
                                        Project Brochure
                                    </h2>

                                    <div className="flex items-center justify-between bg-indigo-50 p-3 rounded-lg">
                                        <div className="flex items-center">
                                            <svg className="w-8 h-8 text-indigo-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                            </svg>
                                            <div>
                                                <p className="text-sm font-medium text-gray-900">Project Brochure</p>
                                                <p className="text-xs text-gray-500">PDF Document</p>
                                            </div>
                                        </div>

                                        <a
                                            href={projectData.brochure}  
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            className="inline-flex items-center px-3 py-1 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        >
                                            View
                                        </a>
                                    </div>
                                </div>
                            )}




                            {/* Actions Card */}
                            <div className="bg-white border border-gray-200 rounded-lg p-5 shadow-sm">
                                <h2 className="text-lg font-semibold text-gray-900 mb-4 border-b pb-2">Actions</h2>

                                <div className="space-y-3">


                                    <button
                                        onClick={() => {
                                            if (confirm('Are you sure you want to delete this project?')) {
                                                Inertia.delete(route('projects.destroy', { id: project._id || project.id }));
                                            }
                                        }}
                                        className="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                    >
                                        <svg className="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Delete Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
};

export default ProjectViewPage;